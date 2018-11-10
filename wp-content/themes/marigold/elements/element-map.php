<div id="map" style="height: 500px; z-index: 2;"></div>

<style>
#discover{display: none;}
</style>

<script>
    function initMap() {
        // Styles a map in night mode.
        var icon = "<?php the_sub_field('marker_image');?>";
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: <?php the_sub_field('map-latitude');?>, lng: <?php the_sub_field('map-longitude');?> },
            disableDefaultUI: false,
            scrollwheel: false,
            zoom: 15,
            styles: [
                {
                    "elementType": "labels.text",
                    "stylers": [
                        { "color": "#fa656b" },
                        { "weight": 0.5 }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#193090" }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#364aa0" },
                        { "weight": 2 }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        { "color": "#364aa0" }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "weight": 8 }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#364aa0" },
                        { "weight": 8 }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        { "color": "#4a54a4" },
                        { "weight": 2 }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#2842e0" }
                  ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                }
            ]
        });
        var marker = new google.maps.Marker({
            position: {lat: <?php the_sub_field('map-latitude');?>, lng: <?php the_sub_field('map-longitude');?>},
            icon: icon,
            map: map
        });
      }
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3AV2KCXB0lXJZop_zG3tQghGnnV_SATA&callback=initMap" async defer></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3E-o-8yly2ttOFovGRf6_kdzLhsmdLO0&callback=initMap" async defer></script>
