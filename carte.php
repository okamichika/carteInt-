<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Musée</title>
    <link rel="Icon" href="#"/>
    <link rel="Icon" href="./Image/Icone.png"/>
    <link rel="stylesheet" href="Src/styles.css"/>
    <link rel="stylesheet" href="./Src/sidebare.css"/>
    <link rel="stylesheet" href="./Src/popup.css"/>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
    />
    <title>Document</title>
</head>
<body>
<div class="sidebar">
    <div class="menu-btn">
        <i class="ph-bold ph-caret-left"></i>
    </div>
    <div class="head">
        <div class="user-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkLAPZMGfKMXnViukKkk1gSCNTLtgPKe3a4OYU4HyRzw&s" alt=""/>
        </div>
        <div class="user-details">
            <p class="title">Inconnu(e)</p>
            <!--<p class="name">Inconnu(e)</p>-->
        </div>
    </div>
    <div class="nav">
        <div class="menu">
            <p class="title">Main</p>
            <ul>
                <li>
                    <a href="./index.php">
                        <i class="icon ph-bold ph-house-simple"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#popup1">
                        <i class="icon ph-fill ph-plus"></i>
                        <span class="text">Ajouter</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ph ph-funnel"></i>
                        <span class="text">Filtre</span>
                        <i class="arrow ph-bold ph-caret-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <i class="icon ph ph-star"></i>
                                <span class="text">Étoile</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">

                                            <div>
                                                <label><input type="checkbox" value="0" class="filter-checkbox"> 0 Étoile</label>
                                            </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="1" class="filter-checkbox">  1 Étoile</label>
                                            </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                            <div>
                                                <label><input type="checkbox" value="2" class="filter-checkbox">  2 Étoile</label>
                                            </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="3" class="filter-checkbox">  3 Étoile</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="4" class="filter-checkbox">  4 Étoile</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="5" class="filter-checkbox">  5 Étoile</label>
                                            </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph ph-calendar"></i>
                                <span class="text">Jour d'ouverture</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="lundi"> Lundi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="mardi"> Mardi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="mercredi"> mercredi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="jeudi"> Jeudi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="vendredi"> Vendredi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="samedi"> Samedi</label>
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="dimanche"> Dimanche</label>
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph ph-currency-eur"></i>
                                <span class="text">Prix</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <div>
                                        <input type="range" id="progressValue" min="15" max="60" step="1" value="60"
                                               oninput="updateDisplayValue(this.value)">
                                        <span id="displayValue">MAX Prix : 60 €</span>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph ph-wheelchair"></i>
                                <span class="text">Handicape</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <div>
                                        <input type="checkbox" id="handicape" name="handicape"/>
                                        <label for="handicape"> Oui </label>
                                    </div>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#popup1">
                        <i class="icon ph-bold ph-file-text"></i>
                        <span class="text">Circuitage</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu">
            <p class="title">Settings</p>
            <ul>
                <li>
                    <a href="#">
                        <i class="icon ph-bold ph-gear"></i>
                        <span class="text">Settings</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <i class="icon ph ph-music-notes"></i>
                                <input type="checkbox" id="playPauseCheckbox"> <label for="playPauseCheckbox"><i
                                        class="ph ph-play-pause"></i></label>

                                <audio id="myAudio" controls>
                                    <source src="./Image/Funk_Down.mp3" type="audio/mp3">
                                    Votre navigateur ne prend pas en charge l'élément audio.
                                </audio>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu">
        <p class="title">Account</p>
        <ul>
            <li>
                <a href="./help.php">
                    <i class="icon ph-bold ph-info"></i>
                    <span class="text">Help</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="icon ph ph-sign-in"></i>
                    <span class="text">Login</span>
                </a>
            </li>
            <li>
                <a href="register.php">
                    <i class="icon ph-fill ph-sign-in"></i>
                    <span class="text">Sign-in</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Connectez-vous</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            Pour accéder à cette fonctionnalité, veuillez vous connecter. L'utilisation de cette option est réservée aux utilisateurs connectés.
        </div>
        <div class="box">
            <a class="button" href="login.php">Sign in</a>
        </div>
    </div>
</div>
<div id="map">
</div>

<!-- Jquery -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
></script>

<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
></script>
<script
    src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""
></script>
<script src="./Src/app.js"></script>
<script src="./Src/data.js"></script>
<!--<script src="./Src/dataajouter.js"></script>-->
<script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css"/>
<script>

   var map = L.map('map').setView([48.853, 2.35], 10);

   var Stadia_OSMBright = L.tileLayer(
       "https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png",
       {
           maxZoom: 15,
           minZoom: 3,
           bounds: [[-90, -180], [90, 180]],
           attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
       }
   );

   Stadia_OSMBright.addTo(map);

   // Ajout des autres couches

   var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
       attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
       subdomains: 'abcd',
       maxZoom: 15,
       minZoom: 3,
   });
   CartoDB_DarkMatter.addTo(map);


   var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
       maxZoom: 15,
       minZoom: 3,
       subdomains:['mt0','mt1','mt2','mt3']
   });
   googleSat.addTo(map);



   // Ajout des couches au contrôle de couches

   var baseMaps = {
       "CartoDB Dark Matter": CartoDB_DarkMatter,
       "Google Satellite": googleSat,
       "Stadia OSMBright": Stadia_OSMBright,
   };



   var layerControl = L.control.layers(baseMaps).addTo(map);

    // Your existing data


    var markers = L.markerClusterGroup(); // Create a marker cluster group
    var handicapCheckbox = document.getElementById('handicape');

    // Ajoutez un événement d'écoute pour la case à cocher "Handicap"
    handicapCheckbox.addEventListener('change', updateData);
    function updateMarkers(filteredData) {
        markers.clearLayers(); // Clear existing markers

        filteredData.forEach(function (item) {
            var coordinates = item.fields.geolocalisation;
            var popupContent = "<b>Nom du musée </b>: " + item.fields.nom_officiel_du_musee + "<br/><b>Adresse: </b> " + item.fields.adresse + "<br/><b>Departement: </b> " + item.fields.departement + "<br/><b>Tél:</b> : " + item.fields.telephone + "<br/><b>Jours d'ouverture :</b> : " + item.fields.Jours_d_ouverture+ "<br/><b>Note : </b>" + item.fields.note ;
            var marker = L.marker(coordinates).bindPopup(popupContent);
            markers.addLayer(marker); // Add marker to the cluster group
            marker.on('click', function () {
                marker.openPopup();
            });
        });

        map.addLayer(markers); // Add the marker cluster group to the map
    }

    // Attach event listener to checkboxes
    var checkboxes = document.querySelectorAll('.filter-checkbox');
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateData);
    });
    var dayCheckboxes = document.querySelectorAll('.day-checkbox');
    dayCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateData);
    });
    function updateDisplayValue(value) {
        document.getElementById('displayValue').innerText = 'MAX Prix : ' + value;
        updateData();
    }

    function updateData() {
        var selectedNotes = Array.from(document.querySelectorAll('.filter-checkbox:checked')).map(function (checkbox) {
            return parseInt(checkbox.value);
        });

        var maxPrice = parseInt(document.getElementById('progressValue').value);

        var filteredData;

        if (selectedNotes.length > 0) {
            filteredData = data.filter(function (item) {
                return selectedNotes.includes(Math.floor(item.fields.note)) && item.fields.Prix <= maxPrice;
            });
        } else {
            // Aucune checkbox de note sélectionnée, afficher tous les musées
            filteredData = data.filter(function (item) {
                return item.fields.Prix <= maxPrice;
            });
        }
        var isHandicapSelected = handicapCheckbox.checked;

        if (isHandicapSelected) {
            // Filtrer les musées accessibles pour handicapés seulement
            filteredData = filteredData.filter(function (item) {
                return item.fields.Accessible_pour_handicape === 'oui';
            });
        }
        var selectedDays = Array.from(document.querySelectorAll('.day-checkbox:checked')).map(function (checkbox) {
            return checkbox.value.toLowerCase(); // Convert to lowercase to match the data format
        });

        if (selectedDays.length > 0) {
            // Filtrer les musées en fonction des jours d'ouverture sélectionnés
            filteredData = filteredData.filter(function (item) {
                return item.fields.Jours_d_ouverture.some(function (day) {
                    return selectedDays.includes(day.toLowerCase());
                });
            });
        }

        // Afficher ou utiliser filteredData selon les besoins
        console.log(filteredData);

        // Mettre à jour les marqueurs sur la carte
        updateMarkers(filteredData);
    }


    // Initial call to display markers on startup
    updateMarkers(data);



</script>

</body>
</html>
