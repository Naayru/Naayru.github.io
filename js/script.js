$(document).ready(function () {
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};
    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }

    console.log("ready!");
    console.log(window.location.href);
    if ($_GET['created'] && $_GET['created'] > 1) {
        console.log('erreur du form');


        var choices = $('#switch .choice')
            , text = $('#switch .or');

        choices.toggleClass('on');
        choices.click();
        text.addClass('flip');
        setTimeout(function () {
            text.removeClass('flip')
        }, 1000);

    }


});

