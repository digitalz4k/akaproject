var collapse = $('#basicSpec').attr('class');
var indicator = $('#basic i');

function change()
{
    var collapse = $('#basicSpec').attr('class');
    var indicator = $('#basic i');
     
    if (collapse === 'row collapse')
    {
        console.log('open');
        indicator.removeClass('fa fa-plus');
        indicator.addClass('fa fa-minus');
    }
    else if (collapse === 'row collapse in')
    {
        console.log('close');
        indicator.removeClass('fa fa-minus');
        indicator.addClass('fa fa-plus');
    }
}


$(basic).on('click', change);

