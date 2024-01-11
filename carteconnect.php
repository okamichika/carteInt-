<?php
global $con;
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Musée</title>
    <link rel="Icon" href="#"/>
    <link rel="stylesheet" href="Src/styles.css"/>
    <link rel="stylesheet" href="./Src/sidebare.css"/>
    <link rel="Icon" href="./Image/Icone.png"/>
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
<?php

$id = $_SESSION['id'];
$query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

while($result = mysqli_fetch_assoc($query)){
    $res_Uname = $result['Username'];
    $res_Email = $result['Email'];
    $res_Age = $result['Age'];
    $res_profession = $result['Profession'];
    $res_id = $result['Id'];
}

echo "<a href='edit.php?Id=$res_id'></a>";
?>
<div class="sidebar">
    <div class="menu-btn">
        <i class="ph-bold ph-caret-left"></i>
    </div>
    <div class="head">
        <div class="user-img">
            <img src="data:image/jpeg;base64,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" alt=""/>
        </div>
        <div class="user-details">

            <p class="title"><b><?php echo $res_profession ?></b></p>
            <p class="name"><b><?php echo $res_Uname ?></b></p>
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
                    <a href="./Ajouter.php">
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
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="0" class="filter-checkbox"> 0 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="1" class="filter-checkbox">1 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="2" class="filter-checkbox">2 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="3" class="filter-checkbox">3 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="4" class="filter-checkbox">4 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="5" class="filter-checkbox">5 Étoile</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <i class="icon ph ph-calendar"></i>
                                <span class="text">Jour d'ouverture</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="lundi"> Lundi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="mardi"> Mardi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="mercredi"> mercredi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="jeudi"> Jeudi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="vendredi"> Vendredi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="samedi"> Samedi</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" class="day-checkbox" value="dimanche"> Dimanche</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="sub-menu">
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
                    </ul>
                    <ul class="sub-menu">
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
                    <a href="./plannification.php">
                        <i class="icon ph-bold ph-file-text"></i>
                        <span class="text">Planif</span>
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
                <a href="edit.php">
                    <i class="icon ph-bold ph-sign-out"></i>
                    <span class="text">Modifier profile</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="icon ph-bold ph-user-switch"></i>
                    <span class="text">Changer de compte</span>
                </a>
            </li>
            <li>
                <a href="php/logout.php">
                    <i class="icon ph-bold ph-sign-out"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
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
<script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css"/>
<script>
    /*var map = L.map('map').setView([48.853, 2.35], 10);

    var Stadia_OSMBright = L.tileLayer(
        "https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png",
        {
            maxZoom: 13,
            minZoom: 3,
            bounds: [[-90, -180], [90, 180]],
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
        }
    );

    Stadia_OSMBright.addTo(map);*/
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

    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 15,
        minZoom: 3,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    googleStreets.addTo(map);

    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 15,
        minZoom: 3,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    googleSat.addTo(map);
    var openstreetmap = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 15,
        minZoom: 3,
        atOpenStreetMaptribution: '© OpenStreetMap'
    });
    openstreetmap.addTo(map);


    // Ajout des couches au contrôle de couches

    var baseMaps = {
        "CartoDB Dark Matter": CartoDB_DarkMatter,
        "Google Streets": googleStreets,
        "Google Satellite": googleSat,
        "National park": openstreetmap,
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
