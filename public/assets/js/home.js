$('.carousel.carousel-slider').carousel();

function display ()
{
    // récupérer l'event actif
    var eventActive = $('#events ul li.eventActive');

    // enlever la classe .active
    eventActive.removeClass("eventActive");
    
    // afficher l'event suivant
    eventSuivant = eventActive.next();

    // si plus d'events on boucle
    if(eventSuivant.length > 0)
    {
        eventSuivant.addClass("eventActive");
    }
    else
    {
        eventActive.removeClass('active');
        $("#events ul li:first").addClass("eventActive");
    }
}

    var eventFirst = $('#events ul li:first');


    // ajout de la classe .active au premier event
    $(eventFirst).addClass("eventActive");
    
    // Affichage du slider, délai 10s
    setInterval(display, 10000);






