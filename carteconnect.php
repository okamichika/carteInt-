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
            <img src="./Image/user.jpg" alt=""/>
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
                    <a href="#">
                        <i class="icon ph-bold ph-house-simple"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ph-bold ph-user"></i>
                        <span class="text">Audience</span>
                        <i class="arrow ph-bold ph-caret-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="text">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="text">Subscribers</span>
                            </a>
                        </li>
                    </ul>
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
                                <span class="text">Note</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="0" class="filter-checkbox"> Note 0</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="1" class="filter-checkbox"> Note 1</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="2" class="filter-checkbox"> Note 2</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="3" class="filter-checkbox"> Note 3</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="4" class="filter-checkbox"> Note 4</label>
                                            </div>

                                        </a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <a href="#">
                                            <div>
                                                <label><input type="checkbox" value="5" class="filter-checkbox"> Note 5</label>
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
                    <a href="#">
                        <i class="icon ph-bold ph-file-text"></i>
                        <span class="text">Posts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ph-bold ph-calendar-blank"></i>
                        <span class="text">Schedules</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ph-bold ph-chart-bar"></i>
                        <span class="text">Income</span>
                        <i class="arrow ph-bold ph-caret-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="text">Earnings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="text">Funds</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="text">Declines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="text">Payouts</span>
                            </a>
                        </li>
                    </ul>
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
                <a href="#">
                    <i class="icon ph-bold ph-info"></i>
                    <span class="text">Help</span>
                </a>
            </li>
            <li>
                <a href="./edit.php">
                    <i class="icon ph-bold ph-sign-out"></i>
                    <span class="text">Modifier profile</span>
                </a>
            </li>
            <li>
                <a href="./login.php">
                    <i class="icon ph-bold ph-user-switch"></i>
                    <span class="text">Change de compte</span>
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
    var map = L.map('map').setView([48.853, 2.35], 10);

    var Stadia_OSMBright = L.tileLayer(
        "https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png",
        {
            maxZoom: 13,
            minZoom: 3,
            bounds: [[-90, -180], [90, 180]],
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
        }
    );

    Stadia_OSMBright.addTo(map);

    // Your existing data


    var markers = L.markerClusterGroup(); // Create a marker cluster group
    var handicapCheckbox = document.getElementById('handicape');

    // Ajoutez un événement d'écoute pour la case à cocher "Handicap"
    handicapCheckbox.addEventListener('change', updateData);
    function updateMarkers(filteredData) {
        markers.clearLayers(); // Clear existing markers

        filteredData.forEach(function (item) {
            var coordinates = item.fields.geolocalisation;
            var popupContent = "Nom du musée : " + item.fields.nom_officiel_du_musee + "<br/>Note : " + item.fields.note;
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
