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

    function transcrire() {
        car = document.conversion.saisie.value;
        car = car.replace(/a/g, "⠁");
        car = car.replace(/b/g, "⠃");
        car = car.replace(/c/g, "⠉");
        car = car.replace(/d/g, "⠙");
        car = car.replace(/e/g, "⠑");
        car = car.replace(/f/g, "⠋");
        car = car.replace(/g/g, "⠛");
        car = car.replace(/h/g, "⠓");
        car = car.replace(/i/g, "⠊");
        car = car.replace(/j/g, "⠚");
        car = car.replace(/k/g, "⠅");
        car = car.replace(/l/g, "⠇");
        car = car.replace(/m/g, "⠍");
        car = car.replace(/n/g, "⠝");
        car = car.replace(/o/g, "⠕");
        car = car.replace(/p/g, "⠏");
        car = car.replace(/q/g, "⠟");
        car = car.replace(/r/g, "⠗");
        car = car.replace(/s/g, "⠎");
        car = car.replace(/t/g, "⠞");
        car = car.replace(/u/g, "⠥");
        car = car.replace(/v/g, "⠧");
        car = car.replace(/w/g, "⠺");
        car = car.replace(/x/g, "⠭");
        car = car.replace(/y/g, "⠽");
        car = car.replace(/z/g, "⠵");
        car = car.replace(/à/g, "⠷");
        car = car.replace(/â/g, "⠡");
        car = car.replace(/ä/g, "⢡");
        car = car.replace(/ç/g, "⠯");
        car = car.replace(/é/g, "⠿");
        car = car.replace(/è/g, "⠮");
        car = car.replace(/ê/g, "⠣");
        car = car.replace(/ë/g, "⠫");
        car = car.replace(/î/g, "⠩");
        car = car.replace(/ï/g, "⠻");
        car = car.replace(/ô/g, "⠹");
        car = car.replace(/œ/g, "⠪");
        car = car.replace(/⠕⠑/g, "⠪");
        car = car.replace(/ù/g, "⠾");
        car = car.replace(/û/g, "⠱");
        car = car.replace(/ü/g, "⠳");
        car = car.replace(/A/g, "⠨⠁");
        car = car.replace(/B/g, "⠨⠃");
        car = car.replace(/C/g, "⠨⠉");
        car = car.replace(/D/g, "⠨⠙");
        car = car.replace(/E/g, "⠨⠑");
        car = car.replace(/F/g, "⠨⠋");
        car = car.replace(/G/g, "⠨⠛");
        car = car.replace(/H/g, "⠨⠓");
        car = car.replace(/I/g, "⠨⠊");
        car = car.replace(/J/g, "⠨⠚");
        car = car.replace(/K/g, "⠨⠅");
        car = car.replace(/L/g, "⠨⠇");
        car = car.replace(/M/g, "⠨⠍");
        car = car.replace(/N/g, "⠨⠝");
        car = car.replace(/O/g, "⠨⠕");
        car = car.replace(/P/g, "⠨⠏");
        car = car.replace(/Q/g, "⠨⠟");
        car = car.replace(/R/g, "⠨⠗");
        car = car.replace(/S/g, "⠨⠎");
        car = car.replace(/T/g, "⠨⠞");
        car = car.replace(/U/g, "⠨⠥");
        car = car.replace(/V/g, "⠨⠧");
        car = car.replace(/W/g, "⠨⠺");
        car = car.replace(/X/g, "⠨⠭");
        car = car.replace(/Y/g, "⠨⠽");
        car = car.replace(/Z/g, "⠨⠵");
        car = car.replace(/0/g, "⠠⠼");
        car = car.replace(/1/g, "⠠⠡");
        car = car.replace(/2/g, "⠠⠣");
        car = car.replace(/3/g, "⠠⠩");
        car = car.replace(/4/g, "⠠⠹");
        car = car.replace(/5/g, "⠠⠱");
        car = car.replace(/6/g, "⠠⠫");
        car = car.replace(/7/g, "⠠⠻");
        car = car.replace(/8/g, "⠠⠳");
        car = car.replace(/9/g, "⠠⠪");
        document.conversion.saisie.value = car;
        var obj = document.conversion.saisie;
        obj.focus();
        obj.scrollTop = obj.scrollHeight;
    }

});

