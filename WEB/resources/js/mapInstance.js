import { faBus } from "@fortawesome/free-solid-svg-icons";

let selectedMapType = "stop";

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: { lat: 51.4414165, lng: 5.478717 },
        mapId: '15806e610799e501'
    });
    const infoWindow = new google.maps.InfoWindow({
        content: "",
        disableAutoPan: true,
    });

    new google.maps.Marker({
        position: { lat: 51.4414165, lng: 5.478717 },
        map,
        label: {
            text: "\ue9f4",
            fontFamily: "Material Icons",
            color: "#ffffff",
            fontSize: "18px",
        },
        title: "Material Icon Font Marker",
    });

    // This event listener calls addMarker() when the map is clicked.
    google.maps.event.addListener(map, "click", (event) => {
        addMarker(event.latLng, map, selectedMapType, "\ue530");
    });
    // Add a marker at the center of the map.
}

function addMarker(location, map, type, icon) {
    new google.maps.Marker({
        position: location,
        label: {
            text: icon,
            fontFamily: "Material Icons",
            color: "#ffffff",
            fontSize: "18px",
        },
        map: map,
    });
}


const locations = [
    { lat: 51.4414165, lng: 5.478717 },
];

window.initMap = initMap;
