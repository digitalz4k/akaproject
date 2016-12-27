$(document).ready(function() {
    
    $("div.ach-tab-menu>div.list-group>a:first").addClass('active');
    console.log($("div.ach-tab-menu>div.list-group>a:first"));
    
    // au click sur un tab
    $("div.ach-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        // suppression de la classe active sur les tabs voisins
        $(this).siblings('a.active').removeClass("active");
        // ajout classe active sur l'élément cliqué
        $(this).addClass("active");
        var index = $(this).index();
        $("div.ach-tab>div.ach-tab-content").removeClass("active");
        $("div.ach-tab>div.ach-tab-content").eq(index).addClass("active");
    });
});