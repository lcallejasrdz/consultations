/* Validator */
$('#rootwizard').bootstrapWizard();

/* GoogleMaps */
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())},
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

	var marker = new google.maps.Marker({
	    position: {lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())},
	    map: map,
	});
}