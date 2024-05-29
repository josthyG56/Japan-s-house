

// Función de inicialización del mapa
function initMap() {
    // Definir las coordenadas geográficas central del país de Japón
    var japan = { lat: 36.2048, lng: 138.2529 };
    
    // Crear un nuevo objeto Map de Google Maps
    // Este objeto representa el mapa en sí
    var map = new google.maps.Map(document.getElementById('map'), {
        // Configurar el nivel de zoom inicial del mapa
        // Un valor mayor significa un zoom más cercano
        zoom: 5,
        
        // Establecer el centro del mapa en las coordenadas definidas previamente
        center: japan
    });
}
