$(document).ready(function () {
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};
    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }

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


    $("#join-lobby-btn").on("click", function () {
        $("#choice-lobby-div").fadeOut(function () {
            $("#join-lobby-div").fadeIn();
        });
    });


    var table = $('#players-waiting').DataTable({
        columnDefs: [
            {targets: [0, 2], visible: false},
            { "orderable": false, "targets": 1 }
        ],
        select: {
            style: 'single'
        },
        sDom: '<"top">rt<"bottom"><"clear">'
    });

    $('#players-waiting tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        $('#minesweeper').text('Le démineur est: '+ data[1]);
    } );

    table.on('user-select', function (e, dt, type, cell, originalEvent) {
        if ($(cell.node()).parent().hasClass('selected')) {
            e.preventDefault();
        }
    });

});

