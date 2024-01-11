<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Questions</title>
    <link rel="Icon" href="./Image/Icone.png"/>
    <link rel="stylesheet" href="./Src/help.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
</head>
<body>
<div class="wrapper">
    <h1>Questions fréquemment posées</h1>

    <div class="faq">
        <button class="accordion">
            Comment puis-je ajouter un musée sur la carte Loomuse ?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Pour ajouter un musée, cliquez sur l'icône "Ajouter un musée" dans la barre latérale. Un formulaire
                apparaîtra, vous permettant de saisir les détails du musée.
            </p>
        </div>
    </div>

    <div class="faq">
        <button class="accordion">
            Où puis-je trouver l'option de filtrage des données sur la barre latérale de Loomuse ?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                La fonction de filtrage se trouve dans la barre latérale à gauche. Utilisez les options de filtrage pour
                affiner les données affichées sur la carte en fonction de vos préférences.
            </p>
        </div>
    </div>

    <div class="faq">
        <button class="accordion">
            Peut-on personnaliser l'apparence de la carte depuis la barre latérale de Loomuse ?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Oui, vous pouvez personnaliser l'apparence de la carte en utilisant les options de paramétrage. Vous
                pouvez choisir différents fonds de carte, ajuster les couleurs et activer/désactiver certaines couches
                d'informations en fonction de vos préférences.
            </p>
        </div>
    </div>

    <div class="faq">
        <button class="accordion">
            Comment puis-je obtenir des informations détaillées sur une mesure spécifique affichée sur la carte ?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Cliquez simplement sur la mesure que vous souhaitez explorer sur la carte. Les détails détaillés
                apparaîtront, offrant une vue approfondie de cette mesure.
            </p>
        </div>
    </div>
    <div class="faq">
        <button class="accordion">
            Pouvez-vous me fournir des informations sur la fréquence de mise à jour des données sur Loomuse ?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Les données sur Loomuse sont mises à jour régulièrement, généralement une fois par semaine. Cela
                garantit que vous disposez des informations les plus récentes et précises sur les mesures et les musées
                en France. </p>
        </div>
    </div>
    <div class="faq">
        <button class="accordion">
            Comment puis-je me connecter à mon compte sur Loomuse depuis la barre latérale ? <i
                    class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Cliquez sur l'icône "Log-in" dans la barre latérale. Saisissez vos identifiants pour accéder à votre
                compte. </p>
        </div>
    </div>
    <div class="faq">
        <button class="accordion">
            Quelles fonctionnalités supplémentaires peuvent être attendues dans les futures mises à jour de Loomuse
            depuis la barre latérale ? <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Nous sommes constamment en train d'améliorer Loomuse. Restez à l'écoute pour des mises à jour avec de
                nouvelles fonctionnalités. Si vous avez des suggestions, partagez-les avec nous depuis la barre
                latérale. </p>
        </div>
    </div>
    <div class="faq">
        <button class="accordion">
            Comment puis-je partager une carte spécifique de Loomuse avec d'autres utilisateurs ? <i
                    class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
            <p>
                Actuellement, la fonctionnalité de partage de carte n'est pas disponible sur Loomuse. Nous sommes
                conscients de son importance et travaillons activement pour l'intégrer dans les prochaines mises à jour.
                Restez à l'écoute pour les annonces et les améliorations futures. </p>
        </div>
    </div>
    <div class="faqs">
            <button onclick="goBack()">
                <span class="btn">Go Back</span>
            </button>
    </div>

</div>

<script>
   function goBack() {
       window.history.back();
   }

   $(document).ready(function () {
       $(".accordion").click(function () {
           $(this).toggleClass("active");
           $(this).parent().toggleClass("active");

           var panel = $(this).next();

           if (panel.is(":visible")) {
               panel.hide();
           } else {
               panel.show();
           }
       });
   });
</script>
</body>
</html>
