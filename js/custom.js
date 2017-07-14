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
$('.main-slide').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    navText: [
        "<i class='icon icon-arrow-left'></i>",
        "<i class='icon icon-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        }
    }
});

$('.playlist').owlCarousel({
    loop:false,
    nav:false,
    responsive:{
        0:{
            items:1
        }
    }
});


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

// Wave Playing

var ctx = document.createElement('canvas').getContext('2d');
var linGrad = ctx.createLinearGradient(0.000, 150.000, 300.000, 150.000);
  linGrad.addColorStop(0.000, 'rgba(69, 63, 157, 1.000)');
  linGrad.addColorStop(0.521, 'rgba(168, 89, 98, 1.000)');
  linGrad.addColorStop(1.000, 'rgba(224, 218, 33, 1.000)');

var wavesurfer = WaveSurfer.create({
  // Use the id or class-name of the element you created, as a selector
  container: '#waveform',
  // The color can be either a simple CSS color or a Canvas gradient
  waveColor: '#9ea2a9',
  progressColor: '#fff',
  cursorColor: '#fff',
  // This parameter makes the waveform look like SoundCloud's player
  barWidth: 3,
  barHeight: 0.5
});

var song = ('The_Moose_-_We_Got_The_Love.mp3');
 wavesurfer.load(song);
 wavesurfer.on('ready', function () {wavesurfer.pause();
});