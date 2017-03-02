/**
 * Created by nasia on 02/02/17.
 */

'use strict';

(function(){
    //make menu mobile friendly
    window.addEventListener("load", function(){
        var nav_links_with_sub = document.querySelectorAll('li.parent_menu > a'); //all links with submenu in header nav

        //disable parent links when clicking
        nav_links_with_sub.forEach(function(link){
            link.addEventListener("click", function(e){e.preventDefault();}, false);
        });
    }, false);

    var gal_images = document.querySelectorAll(".gallery_block .gallery_box .flex_item img");
    gal_images.forEach(function (img) {
        img.addEventListener("click", function () {
            var gallery = new Gallery(this);
            gallery.openPopup();
        });
    });

    function initMap() {
        var map = new google.maps.Map(document.querySelector('#map_box'), {
            zoom: 14,
            center: {lat: 44.494611, lng: -81.376798},
            scrollwheel: false,
            styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#f2f2f2'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#ffffff'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#70b3f1'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#718c97'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9cdbf3'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#63d1d5'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#9bc0f7'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                }
            ]
        });

        var marker = new google.maps.Marker({
            position:  {lat: 44.494611, lng: -81.376798},
            map: map,
            title: "Chantry Island, Southampton, ON"
        });
    }
    window.addEventListener('load',function(){initMap();},false);
})();