<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenStreetMap Example</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <style>
        #map {
            position: relative;
            width: 400px; /* taille initiale de la carte */
            height: 200px; /* taille initiale de la carte */
        }
        #big-map {
            display: none; /* carte de grande taille cachée par défaut */
            width: 100%; /* taille de la carte de grande taille */
            height: 600px; /* taille de la carte de grande taille */
        }
        #open-button {
            position: absolute;
            top: 80px;
            right: 1250px;
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div id="map"></div> <!-- carte de petite taille -->
    <div id="big-map"></div> <!-- carte de grande taille (initialement cachée) -->
    <button id="open-button" onclick="showBigMap()">Voir sur la carte</button>
     <!-- bouton pour afficher la carte de grande taille -->
    <script>
        var map = L.map('map').setView([35.5701222411118, 9.478167300893945], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Ajouter la fonction de recherche
        L.Control.geocoder().addTo(map);

        // Liste des emplacements avec leurs coordonnées géographiques
        var locations = [
            { name: 'Location 3', coordinates: [36.920418600953155, 10.294004607895895]}
        ];

        // Ajouter chaque emplacement à la carte avec un marqueur personnalisé
        locations.forEach(function(location) {
            L.marker(location.coordinates, {
                icon: L.icon({
                    iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34]
                })
            }).addTo(map).bindPopup(location.name);
        });

        function showBigMap() {
           document.getElementById('open-button').style.display = 'none';
            document.getElementById('map').style.display = 'none'; // cacher la carte de petite taille
            document.getElementById('big-map').style.display = 'block'; // afficher la carte de grande taille
            var bigMap = L.map('big-map').setView([35.5701222411118, 9.478167300893945], 13); // créer une nouvelle carte de grande taille
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(bigMap);

            // Ajouter la fonction de recherche à la carte de grande taille
            L.Control.geocoder().addTo(bigMap);

            // Ajouter chaque emplacement à la carte de grande taille avec un marqueur personnalisé
            locations.forEach(function(location) {
                L.marker(location.coordinates, {
                    icon: L.icon({
                        iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34]
                    })
                }).addTo(bigMap).bindPopup(location.name);
            });

            // Ajouter l'événement pour revenir à la taille initiale de la carte en appuyant sur la touche "Échap"
            document.addEventListener('keyup', function(event) {
                if (event.key === 'Escape') {
                    document.getElementById('map').style.display = 'block'; // afficher la carte de petite taille
                    document.getElementById('big-map').style.display = 'none'; // cacher la carte de grande taille
                    bigMap.remove();
                    document.getElementById('open-button').style.display = 'block';
                    
                     // supprimer la carte de grande taille
                }
            });
        }
    </script>
</body>
</html>
