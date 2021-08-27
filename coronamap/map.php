<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162879788-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162879788-1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get live COVID-19 updates using an interactive map.">
    <meta name="keywords" content="Corona, COVID-19, covid-19, covid, Live Covid-19 updates, Corona-map, Covid-19 map live">
    <link rel="stylesheet" href="map.css">
    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
type="text/css"
/>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title>Corona Map</title>
</head>
<body>

    <div class="map-container">
        <div id="geocoder" class="geocoder"></div>
        <div id='map'></div>
    </div>

</body>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXNoLWNvZGVyMTIiLCJhIjoiY2trcDM1dG40MnQ4NTJubndrYjNjc3JhOSJ9.4Ea3NhxvnnHCykWNbThxqQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/satellite-v9',
    zoom:2    
    });
</script>
<script src="map.js"></script>
</html>
