function regular_map() {
    let var_location = new google.maps.LatLng(43.653226, -79.383184);

    let var_mapoptions = {
        center: var_location,
        zoom: 14
    };

    let var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    let var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Toronto"
    });
}

google.maps.event.addDomListener(window, 'load', regular_map);
