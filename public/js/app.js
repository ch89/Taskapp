var coordinates = new google.maps.LatLng(56.663445, 16.356779);

var styles = [
    {
        stylers: [
            { saturation: -70 }
        ]
    },
    {
        featureType: 'building',
        elementType: 'labels'
    },
    {
        featureType: 'poi',
        stylers: [
            { hue: '#0044ff' }
        ]
    }
];

var options = {
    center: coordinates,
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    panControl: false,
    mapTypeControl: false,
    streetViewControl: false,
    scrollwheel: false,
    styles: styles
}

var container = document.querySelector('.map');
var map = new google.maps.Map(container, options);

var marker = new google.maps.Marker({
    position: coordinates,
    map, map,
    icon: 'images/marker.png'
});

var info = new google.maps.InfoWindow({
    content: 'Loremsvägen 6A'
});

google.maps.event.addListener(marker, 'click', function() {
    info.open(map, marker);
});

/*---Scroll---*/

// var win = $(window);
// var root = $('html, body');
// var nav = $('.navbar-collapse');
// var header = $('.navbar-header');
// var a = $("nav ul").eq(0).find('a');

// a.on('click', function(e) {
//     e.preventDefault();

//     if(win.width() < 768) {
//         nav.collapse('hide');
//     }

//     var section = $(this).attr('href');

//     root.animate({
//         scrollTop: $(section).offset().top - header.outerHeight()
//     }, 800);
// });