import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import ZoomMarker from './zoomMarker';

// stupid hack so that leaflet's images work after going through webpack
import marker from 'leaflet/dist/images/marker-icon.png';
import marker2x from 'leaflet/dist/images/marker-icon-2x.png';
import markerShadow from 'leaflet/dist/images/marker-shadow.png';

delete L.Icon.Default.prototype._getIconUrl;

L.Icon.Default.mergeOptions({
  iconRetinaUrl: marker2x,
  iconUrl: marker,
  shadowUrl: markerShadow
});


const defaultCenter = [42.7249925, 25.4833039];
const defaultZoom = 7;
const maxBoundsTopLeft = [44.267552653898946, 21.19562785223469];
const maxBoundsBottomRight = [41.24442015186197, 29.71685444362345]

const map = L.map('mapid', {
  zoomSnap: 0.1, //updates leaflet to allow fractional zoom
  minZoom: defaultZoom, //user cant zoom out anymore then on start
  maxBounds: [maxBoundsTopLeft, maxBoundsBottomRight] //forces map to stay between both
});

//tile map
//change this to change map look
const basemap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
  attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
});

//starts map on bounds on defaultZoom zoom
map.setView(defaultCenter, defaultZoom);

//sets tiles to map object
basemap.addTo(map);

//get the data from php
//get the mapData dom element
var mapData = document.getElementById("mapData")

//check if it got anyhting
if(mapData.value === null)
{
  console.error("NO MAP DATA")
}
//parse the obj
Object.values(JSON.parse(mapData.value)).forEach(el => {
    //creates marker with text and zoom on click
    ZoomMarker(map, [el.lat,el.long], 10, `<a href="${el.url}">Visit and explore ${el.name}!</a>`)
});
