


    


<!-- Incluye Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Asegúrate de incluir Leaflet JS antes de tu script personalizado -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Contenedor del mapa -->
<div id="mapa" style="height: 600px;"></div>

<script>
    // Arreglo de localizaciones con sus respectivas coordenadas y contenido del marcador
    var locations = [

      <?php foreach($eventos as $evento){
        echo "{ lat: ".$evento['lat']." , lon: ". $evento['lon'] .", ";
        echo "title: \"".$evento['titulo']."\", ";
        echo "content: \"".$evento['descripcion']."\"}, \n";
      } ?>
      
    ];
  
    // Creamos el objeto que representará al mapa
  

    console.log(locations);

    // Inicializar el mapa
    var mapa = L.map('mapa', {
        center: [43.416775, -5.703790],
        zoom: 8
    });

    // Añadir una capa de mapa de OpenStreetMap
    var capaMapa = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mapa);

    // Añadir una capa de satélite
    var capaSatelite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Esri, DigitalGlobe, GeoIQ, Earthstar Geographics, CNES/Airbus DS, USDA FSA, USGS, Aerogrid, IGN, IGP, and the GIS User Community'
    });

    // Definir opciones de control de capas
    var baseMaps = {
        "Mapa": capaMapa,
        "Satélite": capaSatelite
    };

    // Añadir control de capas al mapa
    L.control.layers(baseMaps).addTo(mapa);

    // Definir opciones de marcador
    var markerOptions = {
        icon: L.icon({
          iconUrl: 'images/fiestaprao.png', // Reemplaza por la URL de tu imagen
          iconSize: [10, 25], // Ajusta el tamaño del icono
        })}
    // Añadir marcadores para cada ubicación en el arreglo
    locations.forEach(function (location) {
        var marker = L.marker([location.lat, location.lon],markerOptions).addTo(mapa);
        marker.bindPopup('<b>' + location.title + '</b><br>' + location.content);
    });
</script>