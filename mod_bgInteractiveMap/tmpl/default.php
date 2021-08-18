<?php
/**
 * @package    Bulgaria Interactive Map
 *
 * @author     Cybertrain <Cybertrain@padova.it>
 * @copyright  https://git.asdev.io/
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://git.asdev.io/
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');


$document = JFactory::getDocument();
// $document->addScript('modules/mod_bgInteractiveMap/tmpl/index.js');
?>

<!-- <div id="map" style="width: 100%; height: 100%;"></div>
<script src='modules/mod_bgInteractiveMap/tmpl/index.js'></script> -->

<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


<div id="mapid" style="width: 600px; height: 400px;"></div> -->