function change()
{
    var collapse = $(this).next().attr('class');
    var indicator = $(this).find('i');

    if (collapse === 'row collapse')
    {
        console.log('open');
        indicator.removeClass('fa-plus');
        indicator.addClass('fa-minus');
    }
    else if (collapse === 'row collapse in')
    {
        console.log('close');
        indicator.removeClass('fa-minus');
        indicator.addClass('fa-plus');
    }
}

$(".accordeon").on('click', change);



$('#request').click(function(e){
    e.preventDefault()
    $('#productRequest').fadeIn()
})

$('#closeBtn').click(function(e){
    e.preventDefault()
    $('#productRequest').fadeOut()
})


