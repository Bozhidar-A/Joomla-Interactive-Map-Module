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

require_once __DIR__.'/helper.php';

$items = getArticlesFromCategory(8);
// var_dump($items);

$coords = [];

foreach($items as $item) {
    // everyone
    if (! isset($item->coordinates) || $item->coordinates['lat'] === null) {
        continue;
    }

    $coords[$item->id] = [
            'id' => $item->id,
            'name' => $item->title,
            'alias' => $item->alias,
            'lat' => $item->coordinates['lat'],
            'long' => $item->coordinates['long'],
            'url' => JUri::base() . 'index.php/map/8-places/' . $item->id . '-' . $item->alias,
            // 'url' => JRoute::_('index.php?option=com_content&id='.$item->id)
    ];

}

//var_dump($coords);

// require ModuleHelper::getLayoutPath('mod_bgInteractiveMap', $params->get('layout', 'default'));

$tmp = [
    [
        "name"=> "Sofia",
        "lat"=> "42.6977",
        "long"=> "23.3219"
    ],
    [
        "name"=> "Plovdiv",
        "lat"=> "42.1354",
        "long"=> "24.7453"
    ],
    [
        "name"=> "Varna",
        "lat"=> "43.2141",
        "long"=> "27.9147"
    ],
    [
        "name"=> "Burgas",
        "lat"=> "42.5048",
        "long"=> "27.4626"
    ],
    [
        "name"=> "Ruse",
        "lat"=> "43.8356",
        "long"=> "25.9657"
    ],
    [
        "name"=> "Stara Zagora",
        "lat"=> "42.4258",
        "long"=> "25.6345"
    ],
    [
        "name"=> "Pleven",
        "lat"=> "43.417",
        "long"=> "24.6067"
    ],
    [
        "name"=> "Lovech",
        "lat"=> "43.137",
        "long"=> "24.7142"
    ],
    [
        "name"=> "Sliven",
        "lat"=> "42.6814",
        "long"=> "26.3229"
    ],
    [
        "name"=> "Dobrich",
        "lat"=> "43.5726",
        "long"=> "27.8273"
    ],
    [
        "name"=> "Kozludui",
        "lat"=> "43.7756",
        "long"=> "23.7246"
    ],
    [
        "name"=> "Shumen",
        "lat"=> "43.2712",
        "long"=> "26.9367"
    ],
    [
        "name"=> "Troiyan",
        "lat"=> "42.8904",
        "long"=> "24.713"
    ],
    [
        "name"=> "Kazanlak",
        "lat"=> "42.6194",
        "long"=> "25.393"
    ],
    [
        "name"=> "Pernik",
        "lat"=> "42.6052",
        "long"=> "23.0378"
    ],
    [
        "name"=> "Blagoevgrad",
        "lat"=> "42.0209",
        "long"=> "23.0943"
    ],
    [
        "name"=> "Yambol",
        "lat"=> "42.4842",
        "long"=> "26.5035"
    ],
    [
        "name"=> "Petrich",
        "lat"=> "41.3981",
        "long"=> "23.2067"
    ],
    [
        "name"=> "Kalofer",
        "lat"=> "42.613",
        "long"=> "24.9675"
    ],
    [
        "name"=> "Vidin",
        "lat"=> "43.9962",
        "long"=> "22.8679"
    ],
    [
        "name"=> "Sandanski",
        "lat"=> "41.5678",
        "long"=> "23.2804"
    ],
    [
        "name"=> "Karlovo",
        "lat"=> "42.6413",
        "long"=> "24.8059"
    ],
    [
        "name"=> "Melnik",
        "lat"=> "41.5246",
        "long"=> "23.3915"
    ],
    [
        "name"=> "Mezdra",
        "lat"=> "43.1462",
        "long"=> "23.7143"
    ],
    [
        "name"=> "Sunny Beach",
        "lat"=> "42.6883",
        "long"=> "27.7139"
    ],
    [
        "name"=> "Zlatni Pqsaci",
        "lat"=> "43.2856",
        "long"=> "28.0406"
    ],
    [
        "name"=> "Sozopol",
        "lat"=> "42.4173",
        "long"=> "27.6962"
    ],
    [
        "name"=> "Bansko",
        "lat"=> "41.8404",
        "long"=> "23.4857"
    ],
    [
        "name"=> "Pamporovo",
        "lat"=> "41.6568",
        "long"=> "24.6954"
    ],
    [
        "name"=> "Veliko Tarnovo",
        "lat"=> "43.0757",
        "long"=> "25.6172"
    ],
    [
        "name"=> "Ribarsko Selishte",
        "lat"=> "42.4681",
        "long"=> "27.5531"
    ],
    [
        "name"=> "Rila",
        "lat"=> "42.1333",
        "long"=> "23.5499"
    ],
    [
        "name"=> "Pirin",
        "lat"=> "41.6209",
        "long"=> "23.5504"
    ],
    [
        "name"=> "Stara Planina ",
        "lat"=> "42.7468",
        "long"=> "25.0788"
    ],
    [
        "name"=> "Vitosha",
        "lat"=> "42.55",
        "long"=> "23.25"
    ],
    [
        "name"=> "Rodopi",
        "lat"=> "41.0796",
        "long"=> "25.5681"
    ],
    [
        "name"=> "Yagodisnka Cave",
        "lat"=> "41.6288",
        "long"=> "24.33"
    ],
    [
        "name"=> "Koprivshtitsa",
        "lat"=> "42.6361",
        "long"=> "24.3603"
    ],
    [
        "name"=> "Zheravna",
        "lat"=> "42.833",
        "long"=> "26.459"
    ],
    [
        "name"=> "Granit oak",
        "lat"=> "43.6779",
        "long"=> "22.6919"
    ],
    [
        "name"=> "Tomb of Sheshtavi",
        "lat"=> "43.7451",
        "long"=> "26.7664"
    ],
    [
        "name"=> "Bezimenniq grad",
        "lat"=> "41.820223",
        "long"=> "23.5593"
    ],
    [
        "name"=> "Osogovska",
        "lat"=> "42.1581",
        "long"=> "22.5167"
    ],
    [
        "name"=> "Slavqnka",
        "lat"=> "41.2238",
        "long"=> "23.3714"
    ],
    [
        "name"=> "Belasitsa",
        "lat"=> "41.3662",
        "long"=> "23.1345"
    ],
    [
        "name"=> "Shumen Plateau",
        "lat"=> "43.2676",
        "long"=> "26.8771"
    ],
    [
        "name"=> "Strandzha",
        "lat"=> "42.0125",
        "long"=> "27.6086"
    ],
    [
        "name"=> "Berkovitsa",
        "lat"=> "43.237",
        "long"=> "23.1257"
    ],
    [
        "name"=> "Kamchia",
        "lat"=> "42.8866",
        "long"=> "26.9682"
    ],
    [
        "name"=> "Central Balkan",
        "lat"=> "42.7112",
        "long"=> "24.7612"
    ],
    [
        "name"=> "Devil's Throat",
        "lat"=> "41.6153",
        "long"=> "24.3795"
    ],
    [
        "name"=> "Magura",
        "lat"=> "43.728",
        "long"=> "22.5829"
    ],
    [
        "name"=> "God's eyes",
        "lat"=> "43.175",
        "long"=> "24.074"
    ]
];

?>




<script>console.log(Object.values(<?php echo json_encode($items)?>))</script>
<script>console.log(Object.values(<?php echo json_encode($coords)?>))</script>
<script>console.log(<?php echo json_encode($tmp)?>)</script>

<link rel="stylesheet" href="<?php JUri::base(); ?>modules/mod_bgInteractiveMap/assets/module.css">

<div class="bgmap" data-id="<?php echo $module->id; ?>">
    <input type="hidden" id="mapData" value="<?php echo htmlentities(json_encode($coords)) ; ?>" />
    <div id="mapid"></div>

    <!-- <ul>
        <?php foreach($items as $item) {?>
            <li><a href="<?php echo JUri::base(); ?>index.php/map/8-places/<?php echo $item->id; ?>-<?php echo $item->alias ?>"><?php echo $item->title ?></a></li>
        <?php } unset($item)?>
    </ul> -->
</div>

<script src="<?php JUri::base();?>modules/mod_bgInteractiveMap/dist/bundle.js" defer></script>
