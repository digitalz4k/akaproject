$('.carousel.carousel-slider').carousel({full_width: true});

function display()
{
    // récupérer l'event actif
    var eventActive = $('#events ul li.active');

    // enlever la classe .active
    eventActive.removeClass("active");
    
    // afficher l'event suivant
    eventSuivant = eventActive.next();

    // si plus d'events on boucle
    if(eventSuivant.length > 0)
    {
        eventSuivant.addClass("active");
    }
    else
    {
        eventActive.removeClass('active');
        $("#events ul li:first").addClass("active");
    }
}

    var eventFirst = $('#events ul li:first');


    // ajout de la classe .active au premier event
    $(eventFirst).addClass("active");
    
    // Affichage du slider, délai 10s
    setInterval(display, 10000);






