/*
$(".menu > ul > li").click(function (e) {
  // remove active from already active
  $(this).siblings().removeClass("active");
  // add active to clicked
  $(this).toggleClass("active");
  // if has sub menu open it
  $(this).find("ul").slideToggle();
  // close other sub menu if any open
  $(this).siblings().find("ul").slideUp();
  // remove active class of sub menu items
  $(this).siblings().find("ul").find("li").removeClass("active");
});

$(".menu-btn").click(function () {
  $(".sidebar").toggleClass("active");
});
*/

/*$(".menu > ul > li ").click(function (e) {
    // Remove 'active' class from siblings
    $(this).siblings().removeClass("active");

    // Toggle 'active' class for the clicked item
    $(this).toggleClass("active");

    // If the clicked item has a sub-menu, toggle its visibility
    var submenu = $(this).find("ul");
    submenu.slideToggle();

    // Close sub-menus of other items
    $(this).siblings().find("ul").slideUp();

    // Close sub-menus of other parent items
    $(this).siblings().find("ul li ul").slideUp();

    // Prevent the click event from propagating to parent elements
    e.stopPropagation();
});
$(".menu > ul > li > ul > li ").click(function (e) {
    // Remove 'active' class from siblings
    $(this).siblings().removeClass("active");

    // Toggle 'active' class for the clicked item
    $(this).toggleClass("active");

    // If the clicked item has a sub-menu, toggle its visibility
    var submenu = $(this).find("ul");
    submenu.slideToggle();

    // Close sub-menus of other items
    /!*$(this).siblings().find("ul").slideUp();*!/

    // Close sub-menus of other parent items
    $(this).siblings().find("ul li ul").slideUp();

    // Prevent the click event from propagating to parent elements
    e.stopPropagation();
});



// Close sub-menus when clicking outside of them
$(document).click(function (e) {
    if (!$(e.target).closest(".menu > ul > li").length) {
        $(".menu > ul > li ul").slideUp();
        $(".menu > ul > li").removeClass("active");
    }
});
$(".menu-btn").click(function () {
    $(".sidebar").toggleClass("active");
});
// Prevent sub-menu click events from closing their parent menus
$(".menu > ul > li ul").click(function (e) {
    e.stopPropagation();
});*/
$(".menu > ul > li ").click(function (e) {
    // Retirer la classe 'active' des éléments frères
    $(this).siblings().removeClass("active");

    // Basculer la classe 'active' pour l'élément cliqué
    $(this).toggleClass("active");

    // Si l'élément cliqué a un sous-menu, basculer sa visibilité
    var submenu = $(this).find("ul");
    submenu.slideToggle();

    // Fermer les sous-menus des autres éléments
    $(this).siblings().find("ul").slideUp();

    // Fermer les sous-menus des autres éléments parents
    $(this).siblings().find("ul li ul").slideUp();

    // Ouvrir les sous-sous-menus du sous-menu actuel
    submenu.find("li ul").slideUp();

    // Empêcher la propagation de l'événement de clic aux éléments parents
    e.stopPropagation();
});

$(".menu > ul > li > ul > li ").click(function (e) {
    // Retirer la classe 'active' des éléments frères
    $(this).siblings().removeClass("active");

    // Basculer la classe 'active' pour l'élément cliqué
    $(this).toggleClass("active");

    // Si l'élément cliqué a un sous-menu, basculer sa visibilité
    var submenu = $(this).find("ul");
    submenu.slideToggle();

    // Fermer les sous-menus des autres éléments
    // $(this).siblings().find("ul").slideUp();

    // Fermer les sous-menus des autres éléments parents
    $(this).siblings().find("ul li ul").slideUp();

    // Ouvrir les sous-sous-menus du sous-menu actuel
    submenu.find("li ul").slideUp();

    // Empêcher la propagation de l'événement de clic aux éléments parents
    e.stopPropagation();
});

// Fermer les sous-menus lorsqu'on clique à l'extérieur d'eux
$(document).click(function (e) {
    if (!$(e.target).closest(".menu > ul > li").length) {
        $(".menu > ul > li ul").slideUp();
        $(".menu > ul > li").removeClass("active");
    }
});

$(".menu-btn").click(function () {
    $(".sidebar").toggleClass("active");
});

// Empêcher que les événements de clic sur les sous-menus ferment leurs menus parents
$(".menu > ul > li ul").click(function (e) {
    e.stopPropagation();
});

document.addEventListener('DOMContentLoaded', function () {
    var checkbox = document.getElementById('playPauseCheckbox');
    var audio = document.getElementById('myAudio');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            audio.play();
        } else {
            audio.pause();
        }
    });
});



