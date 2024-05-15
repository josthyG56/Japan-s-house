// Función de inicialización del mapa
function initMap() {
    // Coordenadas del centro de Japón
    var japan = { lat: 36.2048, lng: 138.2529 };

    // Crear un nuevo mapa y mostrarlo en el contenedor con el id "map"
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5, // Nivel de zoom inicial
        center: japan // Centro del mapa
    });
}

