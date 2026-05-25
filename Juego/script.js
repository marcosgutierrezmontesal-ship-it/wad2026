// ==========================================================================
// 🗄️ BASE DE DATOS DE MONUMENTOS (Con imágenes y Coordenadas GPS reales)
// ==========================================================================
const gincanaData = [
    {
        name: "La Giralda",
        clue: "Fui torre almohade y ahora soy el campanario cristiano más famoso del mundo. No tengo escaleras, sino 35 rampas, y en mi cúspide hay una estatua que gira con el viento.",
        answers: ["giralda", "la giralda"],
        fact: "Las 35 rampas se diseñaron así para que el sultán pudiera subir a caballo hasta lo alto de la torre.",
        imagePlaceholder: '<img src="https://spain-sir-assets.s3.eu-west-1.amazonaws.com/b2362938-3548-4069-b076-c7daaf3d3040.jpg" alt="La Giralda">',
        coords: [37.38614, -5.99238]
    },
    {
        name: "Torre del Oro",
        clue: "Vigilo las aguas del río Guadalquivir desde hace siglos. Mi nombre brilla bajo el sol andaluz y en el pasado servía para defender el puerto.",
        answers: ["torre del oro", "la torre del oro"],
        fact: "Su nombre se debe al brillo que reflejaba sobre el río debido al mortero de cal y paja prensada.",
        imagePlaceholder: '<img src="https://conocersevilla.com/wp/wp-content/uploads/2021/02/torre-del-oro-sevilla.jpg" alt="Torre del Oro">',
        coords: [37.38201, -5.99629]
    },
    {
        name: "Plaza de España",
        clue: "Tengo forma de semicírculo gigante para simbolizar un abrazo a las antiguas colonias americanas. En mis paredes puedes sentarte en bancos de azulejos.",
        answers: ["plaza de espana", "la plaza de espana", "plaza de espanya"],
        fact: "Este lugar ha sido escenario de películas como 'Star Wars: El ataque de los clones'.",
        imagePlaceholder: '<img src="https://images.squarespace-cdn.com/content/v1/5a86b05bcf81e0af04936cc7/1532084349715-TBZNF525K2I3FR9SOFH5/plaza-de-espan%CC%83a-sevilla.jpg" alt="Plaza de España">',
        coords: [37.37722, -5.98694]
    },
    {
        name: "Real Alcázar",
        clue: "Soy un palacio real fortificado donde se mezclan el arte mudéjar, gótico y renacentista. Mis jardines salieron en Juego de Tronos.",
        answers: ["real alcazar", "el real alcazar", "alcazar"],
        fact: "Es el palacio real en activo más antiguo de Europa.",
        imagePlaceholder: '<img src="https://cdn-imgix.headout.com/media/images/d37249ab96d7374b42e872149c5ec1b7-Alcazar-Seville-hero.jpg" alt="Real Alcázar">',
        coords: [37.38306, -5.99139]
    },
    {
        name: "Las Setas",
        clue: "Soy la estructura de madera más grande del mundo. Todos los sevillanos me llaman como a ese hongo que crece en el campo.",
        answers: ["las setas", "setas", "metropol parasol"],
        fact: "Durante su construcción se descubrieron valiosos restos arqueológicos de la época romana.",
        imagePlaceholder: '<img src="https://st2.depositphotos.com/4235891/10441/i/450/depositphotos_104414168-stock-photo-metropol-parasol-in-seville.jpg" alt="Las Setas">',
        coords: [37.39344, -5.99172]
    },
    {
        name: "Puente de Triana",
        clue: "Cruzo el río Guadalquivir para unir el centro con el barrio de los alfareros. Mis arcos de hierro son famosísimos.",
        answers: ["puente de triana", "puente de isabel ii"],
        fact: "Su nombre oficial es Puente de Isabel II y es el puente de hierro más antiguo de España.",
        imagePlaceholder: '<img src="https://images.trvl-media.com/place/6067113/a2043676-ce4e-4df5-8907-154bd7134644.jpg" alt="Puente de Triana">',
        coords: [37.38508, -6.00044]
    },
    {
        name: "Parque de María Luisa",
        clue: "Soy el pulmón verde más grande e histórico del centro de Sevilla. Estoy lleno de fuentes, estanques con patos y glorietas.",
        answers: ["parque de maria luisa", "maria luisa"],
        fact: "Originalmente estos terrenos eran los jardines privados del Palacio de San Telmo.",
        imagePlaceholder: '<img src="https://media.timeout.com/images/105315039/750/422/image.jpg" alt="Parque de María Luisa">',
        coords: [37.37512, -5.98904]
    }
];

// Variables de control del estado
let currentLevel = 0;
let map;
let markersLayer;
let routeLayer;

// Enlaces a los elementos de la interfaz (DOM)
const turnDisplay = document.getElementById("current-turn");
const clueText = document.getElementById("clue-text");
const userInput = document.getElementById("user-input");
const btnVerify = document.getElementById("btn-verify");
const errorMessage = document.getElementById("error-message");
const challengeSection = document.getElementById("challenge-section");
const rewardSection = document.getElementById("reward-section");
const placeImage = document.getElementById("place-image");
const factText = document.getElementById("fact-text");
const btnNext = document.getElementById("btn-next");

// ==========================================================================
// 🗺️ CONFIGURACIÓN E INICIALIZACIÓN DEL MAPA
// ==========================================================================
function initMap() {
    // Centramos la cámara sobre el casco histórico de Sevilla con zoom 14
    map = L.map('mapa-gincana').setView([37.384, -5.992], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    markersLayer = L.layerGroup().addTo(map);
    routeLayer = L.layerGroup().addTo(map);
    
    updateMapMarkers();
}

// ==========================================================================
// 📍 RENDERIZADO DE PINES Y LÍNEAS DE RECORRIDO (Punto A -> Punto B)
// ==========================================================================
function updateMapMarkers() {
    markersLayer.clearLayers();
    routeLayer.clearLayers();

    gincanaData.forEach((site, index) => {
        // 🟢 CASO A: Sitios que ya se han visitado en turnos anteriores
        if (index < currentLevel) {
            const discoveredIcon = L.divIcon({
                className: 'custom-div-icon map-marker-discovered',
                html: `<span>${index + 1}</span>`,
                iconSize: [24, 24]
            });
            L.marker(site.coords, { icon: discoveredIcon }).addTo(markersLayer);

            // 🛣️ Pintamos la línea discontinua desde el punto anterior visitado (A) al actual (B)
            if (index === currentLevel - 1) {
                const puntoA = site.coords;
                const puntoB = gincanaData[currentLevel].coords;

                const line = L.polyline([puntoA, puntoB], {
                    color: '#8b1c20',
                    weight: 4,
                    opacity: 0.7,
                    dashArray: '10, 10'
                });
                line.addTo(routeLayer);
            }
        } 
        // 🟡 CASO B: El destino incógnito actual en el que se encuentra el jugador
        else if (index === currentLevel) {
            const pulseIcon = L.divIcon({
                className: 'custom-div-icon map-marker-pulse',
                html: '<span>?</span>',
                iconSize: [26, 26]
            });
            L.marker(site.coords, { icon: pulseIcon })
                .bindPopup(`<b>🔍 Destino B Actual</b><br>¿Estás físicamente aquí? Introduce el nombre o pulsa el botón del GPS.`)
                .addTo(markersLayer)
                .openPopup();
        }
    });
}

// ==========================================================================
// 📡 RASTREO GPS: COMPROBAR LA UBICACIÓN REAL EN EL DISPOSITIVO MóVIL
// ==========================================================================
function checkGPS() {
    if (!navigator.geolocation) {
        alert("Lo siento, tu dispositivo o navegador no admite la Geolocalización por GPS.");
        return;
    }

    errorMessage.textContent = "Conectando con los satélites GPS... ⏳";
    errorMessage.classList.remove("hidden");

    navigator.geolocation.getCurrentPosition(
        (position) => {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;
            
            const targetLat = gincanaData[currentLevel].coords[0];
            const targetLng = gincanaData[currentLevel].coords[1];

            // Medimos el margen de distancia real en metros usando trigonometría esférica
            const distance = calculateDistance(userLat, userLng, targetLat, targetLng);

            // 🎯 RANGO DE TOLERANCIA: 50 metros a la redonda (ideal para compensar errores de señal en calles estrechas)
            if (distance <= 50) {
                // Si está cerca, escribimos el nombre automáticamente y procesamos el acierto
                userInput.value = gincanaData[currentLevel].name;
                checkAnswer();
            } else {
                errorMessage.textContent = `📍 El GPS te sitúa a unos ${Math.round(distance)} metros del destino buscado. ¡Muévete un poco más cerca!`;
                errorMessage.classList.remove("hidden");
            }
        },
        (error) => {
            errorMessage.textContent = "❌ Error de conexión GPS. Asegúrate de autorizar los permisos de Ubicación en los ajustes del navegador.";
            errorMessage.classList.remove("hidden");
        },
        { enableHighAccuracy: true } // Obliga al smartphone a activar las antenas GPS de máxima precisión
    );
}

// Función matemática de Haversine para calcular metros en línea recta sobre la superficie terrestre
function calculateDistance(lat1, lon1, lat2, lon2) {
    const R = 6371e3; 
    const phi1 = lat1 * Math.PI / 180;
    const phi2 = lat2 * Math.PI / 180;
    const deltaPhi = (lat2 - lat1) * Math.PI / 180;
    const deltaLambda = (lon2 - lon1) * Math.PI / 180;

    const a = Math.sin(deltaPhi / 2) * Math.sin(deltaPhi / 2) +
              Math.cos(phi1) * Math.cos(phi2) *
              Math.sin(deltaLambda / 2) * Math.sin(deltaLambda / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    return R * c; 
}

// ==========================================================================
// 🕹️ LÓGICA DE CONTROL DEL JUEGO
// ==========================================================================
function normalizeText(text) {
    return text.toLowerCase().trim().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

function loadLevel() {
    if (currentLevel >= gincanaData.length) {
        showVictoryScreen();
        return;
    }

    turnDisplay.textContent = currentLevel + 1;
    clueText.textContent = gincanaData[currentLevel].clue;
    userInput.value = "";
    errorMessage.classList.add("hidden");
    challengeSection.classList.remove("hidden");
    rewardSection.classList.add("hidden");

    if (map) {
        updateMapMarkers();
        // Vuelo suave de cámara cinemático hacia el nuevo destino
        map.flyTo(gincanaData[currentLevel].coords, 16, { animate: true, duration: 1.8 });
    }
}

function checkAnswer() {
    const playerAnswer = normalizeText(userInput.value);
    const validAnswers = gincanaData[currentLevel].answers;

    if (playerAnswer === "") {
        errorMessage.textContent = "¡El cuadro de texto está vacío! Intenta adivinarlo. 🤔";
        errorMessage.classList.remove("hidden");
        return;
    }

    if (validAnswers.includes(playerAnswer)) {
        challengeSection.classList.add("hidden");
        rewardSection.classList.remove("hidden");
        placeImage.innerHTML = `<span>${gincanaData[currentLevel].imagePlaceholder}</span>`;
        factText.textContent = gincanaData[currentLevel].fact;
        updateMapMarkers();
    } else {
        errorMessage.textContent = "❌ No parece ser el lugar correcto. ¡Revisa la pista e inténtalo de nuevo!";
        errorMessage.classList.remove("hidden");
    }
}

function nextLevel() {
    currentLevel++;
    loadLevel();
}

function showVictoryScreen() {
    document.getElementById("mapa-gincana").classList.add("hidden");
    const container = document.querySelector(".game-container");
    container.innerHTML = `
        <div style="text-align: center; padding: 30px;" class="card">
            <h1 style="color: #2a7b4c; font-size: 2.5rem; margin-bottom: 15px;">🏆 ¡Gincana Completada! 🏆</h1>
            <p style="font-size: 1.2rem; line-height: 1.6; margin-bottom: 20px;">
                ¡Enhorabuena, viajeros de Lliçà y Polígono Sur! Habéis completado toda la ruta histórica sobre el mapa de Sevilla.
            </p>
            <div style="font-size: 4rem; margin-bottom: 20px;">🎒🗺️💃</div>
            <button onclick="location.reload()" style="background-color: #8b1c20; padding: 12px 24px; font-size: 1rem;">Volver a jugar 🔄</button>
        </div>
    `;
}

// ==========================================================================
// 🎧 GESTIÓN DE EVENTOS Y ARRANQUE DEL SISTEMA
// ==========================================================================
btnVerify.addEventListener("click", checkAnswer);
btnNext.addEventListener("click", nextLevel);

// Vinculamos de forma robusta la función del botón GPS
const btnGpsElement = document.getElementById("btn-gps");
if (btnGpsElement) {
    btnGpsElement.addEventListener("click", checkGPS);
}

// Habilitar el envío rápido al pulsar ENTER dentro de la caja de texto
userInput.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        checkAnswer();
    }
});

// Iniciamos la carga del mapa y del primer nivel al abrir la web
initMap();
loadLevel();