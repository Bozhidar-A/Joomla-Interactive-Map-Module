import L from 'leaflet';

/**
 * ZoomMarker creates marker with text and zoom on click
 * @param {any} map Pass the map object from leaflet 
 * @param {any} latlang Array containing coordinates for marker location
 * @param {any} map The zoom level after a click
 * @param {any} map The pop up text
 */
export default function ZoomMarker(map, latlng, zoomLevel, msg)
{
    var marker = L.marker(latlng)//creats marker at these coordinates
    .addTo(map)//adds it to the map
    .bindPopup(msg);//sets the given msg to pop up on click

    marker.on('click', function(e){
        map.setView(e.latlng, zoomLevel);
    });//zoom to the specified level when clicked
}