<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Src/style.css">
    <link rel="Icon" href="./Image/Icone.png"/>
    <title>Register Museum</title>

</head>
<body>
<div class="container">
    <div class="box form-box">

        <header>Register Museum</header>
        <?php
        include './php/ajouterviaform.php';
        ?>
        <form action="" method="post">

            <div class="field input">
                <label for="adresse">Address</label>
                <input type="text" name="adresse" id="adresse" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="telephone">Téléphone</label>
                <input type="number" name="telephone" id="telephone" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="commune">Commune</label>
                <input type="text" name="commune" id="commune" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="ref_deps">Département de référence</label>
                <input type="text" name="ref_deps" id="ref_deps" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="url">URL</label>
                <input type="text" name="url" id="url" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="code_postal">Code Postal</label>
                <input type="number" name="code_postal" id="code_postal" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="identifiant_museofile">Identifiant Musée</label>
                <input type="text" name="identifiant_museofile" id="identifiant_museofile" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="departement">Départment</label>
                <input type="text" name="departement" id="departement" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="nom_officiel_du_musee">Nom officiel du musée</label>
                <input type="text" name="nom_officiel_du_musee" id="nom_officiel_du_musee" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="region_administrative">Région administrative</label>
                <input type="text" name="region_administrative" id="region_administrative" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="date_arrete_attribution_appellation">Date d'appellation</label>
                <input type="date" name="date_arrete_attribution_appellation" id="date_arrete_attribution_appellation" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="latitude">Latitude</label>
                <input type="number" name="latitude" id="latitude" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="longitude">Longitude</label>
                <input type="number" name="longitude" id="longitude" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="note">Note  sur 5</label>
                <input type="number" name="note" id="note" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="Temps_de_la_visite">Temps de visite</label>
                <input type="number" name="Temps_de_la_visite" id="Temps_de_la_visite" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="Prix">Prix</label>
                <input type="number" name="Prix" id="Prix" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="Accessible_pour_handicape">Accessible aux handicapés</label>
                <input type="number" name="Accessible_pour_handicape" id="Accessible_pour_handicape" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="Jours_d_ouverture">Jours d'ouverture</label>
                <input type="text" name="Jours_d_ouverture" id="Jours_d_ouverture" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Enregistrer" required>
            </div>

            <!-- Ajoutez d'autres champs nécessaires selon votre structure JSON -->

        </form>
        <div class="field">
            <button class="btn" style="width: 100%" >
                <a href="./carteconnect.php" style="color: whitesmoke; text-decoration: none;" >
                    Go Back
                </a>
            </button>
        </div>
        <div class="field">

        </div>

    </div>
</div>
</body>
</html>
