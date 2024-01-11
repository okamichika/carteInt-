<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="./Image/Icone.png"/>
    <title>Planification de Voyage</title>
    <link rel="stylesheet" href="Src/style.css">
</head>
<body>
<div class="container">
    <div class="box form-box">
        <form id="voyageForm">
            <label for="departementSelect">Choisir le département:</label>
            <select id="departementSelect" onchange="afficherMuseesParDepartement()">
            </select>

            <div class="musee">
                <label><input type="radio" name="day" class="day-checkbox" value="Demi-journé">Demi-journée</label>
                <label><input type="radio" name="day" class="day-checkbox" value="journée">Journée</label>
                <label><input type="radio" name="day" class="day-checkbox" value="web-end">Week-end</label>
            </div>



            <div id="resultat"></div>

        </form>
        <button type="button" class="btn" onclick="planifierVoyage()">Planifier le voyage</button>
        <div id="museesDepartement"></div>
        <button type="button" class="btn" onclick="goBack()" >GO back</button>
    </div>
</div>

<script src="./Src/data.js"></script>
<script>
    function goBack() {
        window.history.back();
    }
    var departementSelect = document.getElementById("departementSelect");

    var departementsUniques = new Set();
    for (var i = 0; i < data.length; i++) {
        departementsUniques.add(data[i].fields.departement);
    }

    var departementsArray = Array.from(departementsUniques).sort();

    for (var j = 0; j < departementsArray.length; j++) {
        var option = document.createElement("option");
        option.value = departementsArray[j];
        option.text = departementsArray[j];
        departementSelect.appendChild(option);
    }

    function planifierVoyage() {
        var departement = document.getElementById("departementSelect").value;
        var dureeVoyage = getDureeVoyage();

        var museesFiltres = data.filter(function (musee) {
            return musee.fields.departement === departement;
        });

        // Shuffle the museums randomly
        museesFiltres = shuffleArray(museesFiltres);

        // Considering 30 minutes travel time for each museum
        var museesAPlanifier = planifierMusees(museesFiltres, dureeVoyage);

        afficherResultat(museesAPlanifier);
    }

    function getDureeVoyage() {
        var checkboxes = document.getElementsByClassName("day-checkbox");
        var dureeVoyage = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                switch (checkboxes[i].value) {
                    case "Demi-journé":
                        dureeVoyage += 240;
                        break;
                    case "journée":
                        dureeVoyage += 480;
                        break;
                    case "web-end":
                        dureeVoyage += 960;
                        break;
                }
            }
        }

        return dureeVoyage;
    }

    function planifierMusees(musees, dureeVoyage) {
        var dureeTotale = 0;
        var museesAPlanifier = [];

        for (var i = 0; i < musees.length; i++) {
            var musee = musees[i];
            var tempsDeVisite = musee.fields.Temps_de_la_visite;

            // Check if the total duration with the current museum fits within the planned duration
            if (dureeTotale + tempsDeVisite + 30 <= dureeVoyage) {
                museesAPlanifier.push(musee);
                dureeTotale += tempsDeVisite + 30; // Add visit duration and 30 minutes travel time
            }
        }

        return museesAPlanifier;
    }

    function afficherResultat(musees) {
        var resultatDiv = document.getElementById("resultat");
        resultatDiv.innerHTML = "<h2>Résultat de la planification</h2>";

        if (musees.length === 0) {
            resultatDiv.innerHTML += "<p>Aucun musée trouvé pour la planification sélectionnée.</p>";
        } else {
            resultatDiv.innerHTML += "<ul>";
            musees.forEach(function (musee) {
                resultatDiv.innerHTML += "<li>" + musee.fields.nom_officiel_du_musee + "</li>";
            });
            resultatDiv.innerHTML += "</ul>";
        }
    }

    function afficherMuseesParDepartement() {
        var selectedDepartement = departementSelect.value;
        var museesDepartement = document.getElementById("museesDepartement");

        var museesFiltres = data.filter(function (musee) {
            return musee.fields.departement === selectedDepartement;
        });

        var museesHTML = "<h2>Musées du département " + selectedDepartement + "</h2>";

        for (var k = 0; k < museesFiltres.length; k++) {
            museesHTML += "<p><strong>Nom du musée:</strong> " + museesFiltres[k].fields.nom_officiel_du_musee + "</p>";
            // Add other museum details as needed
        }

        museesDepartement.innerHTML = museesHTML;
    }

    // Function to shuffle array elements randomly
    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }
</script>

</body>
</html>
