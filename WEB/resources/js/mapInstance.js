import { faBus } from "@fortawesome/free-solid-svg-icons";

let selectedMapType = "stop";

let operation_ongoing = false;
let operation_location;

let perfectGoogleSampleCodeFix = false;

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: { lat: 51.4414165, lng: 5.478717 },
        mapId: '15806e610799e501',
        disableDefaultUI: true,
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
        title: "ballen",
    });

    // This event listener calls addMarker() when the map is clicked.
    google.maps.event.addListener(map, "click", (event) => {
        if(operation_ongoing){return;}
        addMarker(event.latLng, map, selectedMapType, "\ue530");
        window.setTimeout(() => {
            map.panTo(event.latLng);
            map.setZoom(20);
        }, 350);
    });

    map.addListener("center_changed", () => {
        if(!operation_ongoing || perfectGoogleSampleCodeFix){return;}
        perfectGoogleSampleCodeFix = true;
        window.setTimeout(() => {
            map.panTo(operation_location);
            perfectGoogleSampleCodeFix = false;
        }, 2000);
    });
}

function addMarker(location, map, type, icon) {
    operation_ongoing = true;
    operation_location = location;
    new google.maps.Marker({
        position: location,
        label: {
            text: icon,
            fontFamily: "Material Icons",
            color: "#ffffff",
            fontSize: "18px",
        },
        map: map,
        animation: google.maps.Animation.DROP,
    });
    $('#featureContainer').addClass('feature-in');
    $('#featureName').text('New Stop');
}


const locations = [
    { lat: 51.4414165, lng: 5.478717 },
];

window.initMap = initMap;
