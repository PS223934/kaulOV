import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader";
import { ThreeJSOverlayView } from "@googlemaps/three";
let map;
const mapOptions = {
    tilt: 45,
    heading: 0,
    zoom: 18,
    center: { lat: 51.4412493, lng: 5.4798477 },
    mapId: "15431d2b469f209e",
};

function initMap() {
    const mapDiv = document.getElementById("map");
    map = new google.maps.Map(mapDiv, mapOptions);

    const transitLayer = new google.maps.TransitLayer();
    transitLayer.setMap(map);


    const scene = new THREE.Scene();
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.75);

    scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.25);

    directionalLight.position.set(0, 10, 50);
    scene.add(directionalLight);

    // Load the model.
    const loader = new GLTFLoader();
    const url =
        "https://raw.githubusercontent.com/googlemaps/js-samples/main/assets/pin.gltf";

    loader.load(url, (gltf) => {
        gltf.scene.scale.set(10, 10, 10);
        gltf.scene.rotation.x = Math.PI / 2;
        scene.add(gltf.scene);

        let { tilt, heading, zoom } = mapOptions;

    });
    new ThreeJSOverlayView({
        map,
        scene,
        anchor: { ...mapOptions.center, altitude: 100 },
        THREE,
    });
}

window.initMap = initMap;
