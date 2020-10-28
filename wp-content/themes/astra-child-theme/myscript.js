jQuery(document).ready(function ($) {

    var btn = $('#backtotop');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

});

document.getElementById("rektorlyd").addEventListener("click", playRektor);
document.getElementById("muterektor").addEventListener("click", pauseRektor);

function playRektor() {
    var x = document.getElementById("rektoraudio");
    x.play();
}

function pauseRektor() {
    var x = document.getElementById("rektoraudio");
    x.pause();
}

document.getElementById("jenslyd").addEventListener("click", playJens);
document.getElementById("mutejens").addEventListener("click", pauseJens);

function playJens() {
    var x = document.getElementById("jensaudio");
    x.play();
}

function pauseJens() {
    var x = document.getElementById("jensaudio");
    x.pause();
}
document.getElementById("nicolinelyd").addEventListener("click", playNicoline);
document.getElementById("mutenicoline").addEventListener("click", pauseNicoline);

function playNicoline() {
    var x = document.getElementById("nicolineaudio");
    x.play();
}

function pauseNicoline() {
    var x = document.getElementById("nicolineaudio");
    x.pause();
}

document.getElementById("jonaslyd").addEventListener("click", playJonas);
document.getElementById("mutejonas").addEventListener("click", pauseJonas);

function playJonas() {
    var x = document.getElementById("jonasaudio");
    x.play();
}

function pauseJonas() {
    var x = document.getElementById("jonasaudio");
    x.pause();
}
