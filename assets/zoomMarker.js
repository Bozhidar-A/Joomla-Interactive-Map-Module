import * as L from 'leaflet';

/**
 * ZoomMarker creates marker with text and zoom on click
 * @param {any} map Pass the map object from leaflet
 * @param {any} latlang Array containing coordinates for marker location
 * @param {any} zoomLevel The zoom level after a click
 * @param {any} msg The pop up text
 */
export default function ZoomMarker(map, latlng, zoomLevel, msg)
{
    // console.log(map, latlng, zoomLevel, msg)
    var marker = L.marker(latlng)//creates marker at these coordinates
    .bindPopup(msg)//sets the given msg to pop up on click
    .addTo(map);//adds it to the map

    marker.on('click', function(e){
        console.log(map, e.latlang, zoomLevel, "click func")
        map.setView(e.latlng, zoomLevel);
    });//zoom to the specified level when clicked
}
