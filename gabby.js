$(document).ready(function() {
    $('<div id="nav_blob"/>').css({
        'width': 0,
        'height': $('#navigation').outerHeight(true) + 10,
        'background-color': '#16a085',
        'position': 'absolute',
        'top': $('#navigation').offset().top,
        'left': $('#navigation').offset().left
    }).appendTo('body');

    $('#navigation li').hover(onMenuHoverOn, onMenuHoverOut);
    $('#last_modified_date').text('Document last modified: ' + document.lastModified);
});

function onMenuHoverOn() {
    $('#nav_blob').animate({
        top: $('#navigation').offset().top,
        left: $(this).offset().left,
        width: $(this).outerWidth(true)
    },
    {
        easing: 'linear',
        duration: 'fast',
        queue: false
    });
}

function onMenuHoverOut() {
    $('#nav_blob').animate({
        top: $('#navigation').offset().top,
        left: $('#navigation').offset().left,
        width: 0
    },
    {
        easing: 'linear',
        duration: 'fast',
        queue: false
    });
}