

let myMap;
let canvas;
const mappa = new Mappa('Leaflet','https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw');

const options = {
  lat: 0,
  lng: 0,
  zoom: 4,
  style: "http://{s}.tile.osm.org/{z}/{x}/{y}.png"
}

// p5.js setup
function setup(){
  //canvas
  canvas = createCanvas(640,640);
  canvas.parent('mapP5');

  myMap = mappa.tileMap(options);
  myMap.overlay(canvas)

  // Add a color to our ellipse
  fill(200, 100, 100);
}

// p5.js draw
function draw(){
  clear();
    // Every Frame, get the canvas position
   // for the latitude and longitude of Nigeria
   const nigeria = myMap.latLngToPixel(11.396396, 5.076543);
   // Using that position, draw an ellipse
   ellipse(nigeria.x, nigeria.y, 20, 20);
}
