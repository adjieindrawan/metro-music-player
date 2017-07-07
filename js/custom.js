// Pitch Control
$(document).ready(function(){
    $( "#pitch-control" ).click(function() {
      $( "#pitch-vertical" ).animate({
            height: "toggle",
            opacity: "toggle"
        }, "fast");
    });
});

$('#plus').click(function() {
    $('#count-pitch').html(function(i, val) { return val*1+1 });
});

$('#minus').click(function() {
    $('#count-pitch').html(function(i, val) { return val*1-1 });
});


// Owl
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [
        "<i class='icon icon-arrow-left'></i>",
        "<i class='icon icon-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.jp-karaoke').click(function() {
    $(this).toggleClass('fa-microphone');
    $(this).toggleClass('fa-microphone-slash');
});

// iZiToast
iziToast.settings({
    timeout: 3000, // default timeout
    resetOnHover: true,
    // icon: '', // icon class
    transitionIn: 'flipInX',
    transitionOut: 'flipOutX',
    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
    onOpen: function() {
        console.log('callback abriu!');
    },
    onClose: function() {
        console.log("callback fechou!");
    }
});

// success
$('.successClick').click(function() {
    iziToast.success({ timeout: 5000, icon: 'fa fa-music', title: 'OK', message: 'Song success add to playlist!' });
}); // ! .click


// Basic customization.
var cust = document.querySelector('.js-customized');
var initCust = new Powerange(cust, { hideRange: true, klass: 'power-ranger', start: 60 });

// Min, max, start.
var vals = document.querySelector('.js-min-max-start');
var initVals = new Powerange(vals, { hideRange: true, min: 0, max: 100, start: 50 });
