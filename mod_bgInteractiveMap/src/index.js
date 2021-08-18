import L from '../node_modules/leaflet/dist/leaflet';
import '../node_modules/leaflet/dist/leaflet.css';
import ZoomMarker from './ZoomMarker';

/* This code is needed to properly load the images in the Leaflet CSS */
delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
  iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
  iconUrl: require('leaflet/dist/images/marker-icon.png'),
  shadowUrl: require('leaflet/dist/images/marker-shadow.png'),
});

const defaultCenter = [42.7249925, 25.4833039];
const SOFIA_GPS = [42.6977,23.3219]
const defaultZoom = 7.7;

const map = L.map('map', {
  zoomSnap: 0.1, //updates leaflet to allow fractinal zoom
  minZoom: defaultZoom, //user cant zoom out anymore then start
  maxBounds: [[44.267552653898946, 21.19562785223469], [41.24442015186197, 29.71685444362345]]
  //forces map to stay on Bulgaria
});

//tile map chnage this to chnage map look
const basemap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
  attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
});

//starts map on Bulgaria on defaultZoom zoom
map.setView(defaultCenter, defaultZoom);

//sets tiles to map object
basemap.addTo(map);

//creates marker with text and zoom on click
ZoomMarker(map, SOFIA_GPS, 10, `<a href="http://example.com/">Visit and explore Sofia!</a>`)