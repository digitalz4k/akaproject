var collapse = $('#basicSpec').attr('class');
var indicator = $('#basic i');

function change()
{
    var collapse = $('#basicSpec').attr('class');
    var indicator = $('#basic i');
    
    if (collapse === 'row collapse')
    {
        //affichage icône + quand la section est repliée
        indicator.removeClass('fa fa-plus');
        indicator.addClass('fa fa-minus');
    }
    else if (collapse === 'row collapse in')
    {
        //affichage icône - quand la section est dépliée
        indicator.removeClass('fa fa-minus');
        indicator.addClass('fa fa-plus');
    }
}


$('#basic').on('click', change);

