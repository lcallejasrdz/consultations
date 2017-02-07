/* Validator */
$('#rootwizard').bootstrapWizard({
    'tabClass': 'nav nav-pills',
    'onNext': function(tab, navigation, index) {
        var $validator = $('#commentForm').data('formValidation').validate();
        return $validator.isValid();
    },
    onTabClick: function(tab, navigation, index) {
        return false;
    }
});
$('#rootwizard .finish').click(function () {
    var $validator = $('#commentForm').data('formValidation').validate();
    if ($validator.isValid()) {
        document.getElementById("commentForm").submit();
    }
});

/* Validator */
$("#commentForm").formValidation({
    fields: {
        title: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Título'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'Se requiere la Dirección'
                }
            }
        },
        logo: {
            validators: {
                file: {
                    extension: 'jpeg,jpg,png',
                    type: 'image/jpeg,image/png',
                    maxSize: 2097152, // 2048 * 1024
                    message: 'El archivo seleccionado no es válido'
                }
            }
        }
    }
});

/* GoogleMaps */
function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 19.4336726, lng: -99.1454316},
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('searchmap');
    var searchBox = new google.maps.places.SearchBox(input);
    //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // [START region_getplaces]
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                //draggable: true,
                position: place.geometry.location
            }));

            $('#lat').val(place.geometry.location.lat);
            $('#lng').val(place.geometry.location.lng);
            $('#address').val(place.formatted_address);

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
        map.setZoom(17);
    });
    // [END region_getplaces]
}