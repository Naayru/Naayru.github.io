$(document).ready(function ($) {
    $('#switch').click(function () {
        if ($('#sign-up-div').is(":visible")) {
            $('#sign-up-div').fadeOut(function () {
                $('#sign-in-div').fadeIn();
            });
        } else if($('#sign-in-div').is(":visible")) {
            $('#sign-in-div').fadeOut(function() {
                $('#sign-up-div').fadeIn();
            });
        }
    });
    /*
        $('#sign-up').click(function () {
            $('#sign-in-div').fadeOut( , function() {
                $('#sign-up-div').fadeIn();
            });
            console.log('sign up');
        })

     */
});

var choices = $('#switch .choice')
    , text = $('#switch .or')

choices
    .on('click', function () {
        choices.toggleClass('on')

        text.addClass('flip')
        setTimeout(function () {
            text.removeClass('flip')
        }, 1000)
    })