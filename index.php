<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="./Image/Icone.png"/>
    <title>LooMuse</title>
    <link rel="stylesheet" href="./Src/acceuil.css">
    <!--<link rel="stylesheet" href="./Src/style.css">-->

</head>
<body>
<header>
    <div class="logo">
        <img src="./Image/Icone.png" alt="">
        <h1>LooMuse</h1>
    </div>
    <div class="number">
        <a href="login.php"><p>Sign up</p></a>
    </div>


</header>


<!-- home -->

<section class="home">
    <div class="left">
        <h1>Loo<span>M</span>use</h1>


        <p>Parcourez la France artistique d'un coup d'œil avec <b>MuseLoom</b>, votre guide interactif des musées. Découvrez la richesse culturelle du pays sous la forme d'une carte Leaflet, explorez chaque recoin et plongez dans l'histoire captivante de chaque musée. Laissez-vous guider par la géographie de l'art et explorez les trésors culturels de la France, tous réunis sur une carte interactive. Bienvenue à bord de votre voyage virtuel à travers les musées de France avec <b>MuseLoom</b>!"</p>
        <button class="button-link">
            <a href="./carte.php">Acceder à la carte</a>
        </button>
    </div>
    <div class="right">
        <img src="https://media.vogue.fr/photos/5c8a60d93d44a01271cbef6a/master/w_1600,c_limit/GettyImages-502721407.jpg">
    </div>
</section>


<!-- services -->

<section class="services">
    <h1 class="title">Les services</h1>
    <p class="small_title">Profitez de notre plateforme intuitive pour optimiser votre expérience dans l'univers culturel français. Ajoutez de nouveaux musées, recherchez des établissements passionnants et visualisez facilement la diversité artistique de la France. Avec nos services, l'exploration du patrimoine muséal devient simple, interactive et enrichissante.</p>
    <div class="list_service">
        <div class="serv">
            <img src="./Image/filtre.png" alt="">
            <h4>Filter</h4>
            <p>Enrichissez la carte culturelle française.</p>
            <!--<button class="button-link">
                <a href="Ajouter.php">Filter</a>
            </button>-->
        </div>
        <div class="serv">
            <img src="./Image/plus.png" alt="">
            <h4>Ajouter</h4>
            <p>Affinez votre découverte artistique instantanément.</p>

        </div>
        <div class="serv">
            <img src="./Image/loupe.png" alt="">
            <h4>Rechercher</h4>
            <p>Explorez les musées avec précision.</p>

        </div>
        <div class="serv">
            <img src="./Image/utilisateur.png" alt="">
            <h4>Connecter</h4>
            <p>Découvrez plus avec une connexion.</p>

        </div>
    </div>
</section>

<!-- about -->

<section class="about">
    <h1 class="title">à propos de nous</h1>
    <div class="list_about">
        <h1>1</h1>
        <div class="description">
            <h3>Notre équipe</h3>
            <p>Rencontrez l'équipe derrière Loomuse : Quatre passionnés d'informatique unis par la volonté de révolutionner l'exploration culturelle. <br>Notre équipe partage une mission commune : créer une expérience numérique immersive qui met la richesse culturelle de la France à portée de clic. <br>Explorez avec confiance, car chaque ligne de code et chaque conception ont été façonnées avec dévouement par notre équipe chez Loomuse.</p>
        </div>
    </div>
    <div class="list_about">
        <h1>2</h1>
        <div class="description">
            <h3>Tissage Culturel avec Loomuse</h3>
            <p>Chez Loomuse, nous tissons une toile immersive d'exploration culturelle, vous invitant à découvrir les musées de France d'une manière unique. Notre engagement est de créer une expérience captivante, où l'art et la culture se rencontrent pour éveiller votre curiosité.</p>
        </div>
    </div>
    <div class="list_about">
        <h1>3</h1>
        <div class="description">
            <h3>Loomuse : Explorateurs d'Art et de Culture</h3>
            <p>Bienvenue chez Loomuse, où notre passion pour l'art et la culture se traduit par une expérience interactive et enrichissante. Nous croyons en la puissance de la découverte, offrant une plateforme qui vous permet d'explorer les trésors culturels de la France avec facilité et enthousiasme.</p>
        </div>
    </div>
    <div class="list_about">
        <h1>4</h1>
        <div class="description">
            <h3>Loomuse : Votre Carte Interactive des Musées</h3>
            <p>écouvrez le monde captivant des musées français avec Loomuse, une plateforme dédiée à l'exploration culturelle immersive. Notre mission est de rendre accessible l'histoire et l'art, vous permettant de plonger dans la richesse culturelle du pays, tout en naviguant facilement sur notre carte interactive.</p>
        </div>
    </div>
    <div class="list_about">
        <h1>5</h1>
        <div class="description">
            <h3>Loomuse : Un Voyage Virtuel à Travers la France Culturelle</h3>
            <p>Loomuse est votre compagnon virtuel pour un voyage à travers l'art et l'histoire, mettant en lumière la diversité culturelle de la France. Notre équipe est passionnée par la création d'une expérience où chaque clic sur la carte Leaflet vous rapproche des trésors artistiques et des anecdotes historiques qui font de chaque musée une destination unique.</p>
        </div>
    </div>

</section>

<!-- contact -->
<section class="contact">


    <h1 class="title">Contactez nous</h1>
    <div class="form-image">
        <form action="./php/mail.php" method="post">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="adresse_mail" placeholder="Adresse Mail">
            <input type="text" name="objet_message" placeholder="Objet du Message">
            <textarea name="votre_message" cols="30" rows="10" placeholder="Votre Message"></textarea>
            <button type="submit" class="button-link form_btn">
                <a href="#">Envoyer Votre message</a>
            </button>
        </form>

        <div class="image">
            <img src="https://media.vogue.fr/photos/5c8a6802488cdc69b2df7983/master/w_1600,c_limit/GettyImages-909481200.jpg" >
        </div>
    </div>
</section>

<footer>
</footer>



<script>
    var small_menu = document.querySelector(".small_menu");
    var menu = document.querySelector(".menu");
    small_menu.onclick = function(){
        small_menu.classList.toggle('active');
        menu.classList.toggle('small');
    }
</script>

</body>
</html>