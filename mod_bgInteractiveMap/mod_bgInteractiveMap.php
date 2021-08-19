<?php
/**
 * @package    Bulgaria Interactive Map
 *
 * @author     Cybertrain <Cybertrain@padova.it>
 * @copyright  https://git.asdev.io/
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://git.asdev.io/
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_bgInteractiveMap', $params->get('layout', 'default'));

$tmp = [
    [
        'name' => 'Sofia',
        'lat' => 42.6977,
        'long' => 23.3219
    ],
    [
        'name' => 'Karlovo',
        'lat' => 42.6413,
        'long' => 24.8059
    ]    
];

?>
<link rel="stylesheet" href="<?php JUri::base(); ?>modules/mod_bgInteractiveMap/node_modules/leaflet/dist/leaflet.css">
<link rel="stylesheet" href="<?php JUri::base(); ?>modules/mod_bgInteractiveMap/src/styles.css">

<!-- <script>console.log(<?php echo json_encode($tmp)?>)</script> -->

<div class="bgmap" data-id="<?php echo $module->id; ?>">
<input type="hidden" id="mapData" value="<?php echo htmlentities(json_encode($tmp)) ; ?>" />

<div id="map"></div>


<script src="<?php JUri::base();?>modules/mod_bgInteractiveMap/dist/bundle.js"></script> 