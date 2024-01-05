<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Les données du formulaire
    $formData = [
        "datasetid" => "liste-et-localisation-des-musees-de-france",
        "recordid" => md5(uniqid(rand(), true)), // Génère un identifiant unique pour chaque enregistrement
        "fields" => [
            "adresse" => $_POST["adresse"],
            "telephone" => $_POST["telephone"],
            "commune" => $_POST["commune"],
            "latitude" => floatval($_POST["latitude"]),
            "ref_deps" => $_POST["ref_deps"],
            "url" => $_POST["url"],
            "code_postal" => $_POST["code_postal"],
            "identifiant_museofile" => $_POST["identifiant_museofile"],
            "departement" => $_POST["departement"],
            "nom_officiel_du_musee" => $_POST["nom_officiel_du_musee"],
            "region_administrative" => $_POST["region_administrative"],
            "date_arrete_attribution_appellation" => $_POST["date_arrete_attribution_appellation"],
            "geolocalisation" => [floatval($_POST["latitude"]), floatval($_POST["longitude"])],
            "longitude" => floatval($_POST["longitude"]),
            "note" => floatval($_POST["note"]),
            "Temps_de_la_visite" => intval($_POST["Temps_de_la_visite"]),
            "Prix" => intval($_POST["Prix"]),
            "Accessible_pour_handicape" => $_POST["Accessible_pour_handicape"],
            "Jours_d_ouverture" => explode(",", $_POST["Jours_d_ouverture"]),
        ],
        "geometry" => [
            "type" => "Point",
            "coordinates" => [floatval($_POST["longitude"]), floatval($_POST["latitude"])],
        ],
        "record_timestamp" => date("c"),
    ];


    // Chemin du fichier JavaScript à modifier ou créer
    $jsFilePath = './Src/data.js';


    $fileContent = file_exists($jsFilePath) ? file_get_contents($jsFilePath) : '';

    // Recherche la partie JSON dans le fichier (suppose que la partie JSON est toujours entre '[' et ']')
    $startPos = strpos($fileContent, '[');
    $endPos = strrpos($fileContent, ']');

    if ($startPos !== false && $endPos !== false) {
        $jsonContent = substr($fileContent, $startPos, $endPos - $startPos + 1);

        // Vérifie si $jsonContent est vide
        if (!empty($jsonContent)) {
            // Décoder le contenu JSON
            $existingData = json_decode($jsonContent, true);

            if ($existingData === null) {
                echo "Erreur : Impossible de décoder le contenu JSON du fichier JavaScript.";
            } else {
                // Ajoute les nouvelles données à la fin du tableau existant
                $existingData[] = $formData;

                // Génère le code JavaScript à partir des données
                $jsCode = "var data = " . json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . ";";

                // Écrit le code JavaScript dans le fichier
                file_put_contents($jsFilePath, $jsCode);

                echo "Données ajoutées avec succès au fichier JavaScript.";
            }
        } else {
            echo "Erreur : Impossible de trouver le contenu JSON dans le fichier JavaScript.";
        }
    } else {
        echo "Erreur : Impossible de déterminer le début et la fin du contenu JSON dans le fichier JavaScript.";
    }


}
?>
