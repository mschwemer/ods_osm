<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ods_osm".
 *
 * Auto generated 17-12-2013 19:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'OpenStreetMap',
	'description' => 'Add an interactive OpenStreetMap map to your website. Can also show other OpenLayers compatible maps.',
	'category' => 'plugin',
	'author' => 'Robert Heel',
	'author_email' => 'typo3@bobosch.de',
	'shy' => '',
	'dependencies' => 'tt_address',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_odsosm/map',
	'modify_tables' => 'fe_groups,fe_users,tt_address,tt_address_group',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.11.0',
	'constraints' => array(
		'depends' => array(
			'tt_address' => '',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:171:{s:9:"ChangeLog";s:4:"9ea4";s:19:"class.tx_lonlat.php";s:4:"9ddd";s:26:"class.tx_odsosm_common.php";s:4:"afb6";s:23:"class.tx_odsosm_div.php";s:4:"96e9";s:27:"class.tx_odsosm_leaflet.php";s:4:"1cf5";s:30:"class.tx_odsosm_openlayers.php";s:4:"fa1c";s:26:"class.tx_odsosm_static.php";s:4:"f126";s:27:"class.tx_odsosm_tcemain.php";s:4:"dc4a";s:21:"ext_conf_template.txt";s:4:"98ea";s:12:"ext_icon.gif";s:4:"0524";s:17:"ext_localconf.php";s:4:"d1af";s:14:"ext_tables.php";s:4:"efc2";s:14:"ext_tables.sql";s:4:"2280";s:25:"ext_tables_static+adt.sql";s:4:"fe13";s:28:"ext_typoscript_constants.txt";s:4:"df22";s:24:"ext_typoscript_setup.txt";s:4:"c5a2";s:27:"icon_tx_odsosm_geocache.png";s:4:"db36";s:24:"icon_tx_odsosm_layer.png";s:4:"6b4b";s:25:"icon_tx_odsosm_marker.png";s:4:"d1a1";s:24:"icon_tx_odsosm_track.png";s:4:"138f";s:25:"icon_tx_odsosm_vector.png";s:4:"d2e7";s:13:"locallang.xml";s:4:"e306";s:16:"locallang_db.xml";s:4:"9fca";s:7:"tca.php";s:4:"baa4";s:14:"doc/manual.sxw";s:4:"cb97";s:46:"func_wizards/class.tx_odsosm_geocodeWizard.php";s:4:"c3e0";s:14:"pi1/ce_wiz.png";s:4:"bc81";s:27:"pi1/class.tx_odsosm_pi1.php";s:4:"b71d";s:35:"pi1/class.tx_odsosm_pi1_wizicon.php";s:4:"2702";s:16:"pi1/flexform.xml";s:4:"a124";s:17:"pi1/locallang.xml";s:4:"97a6";s:14:"res/marker.png";s:4:"2429";s:27:"res/tx_odsosm_openlayers.js";s:4:"69ff";s:21:"res/geoPHP/geoPHP.inc";s:4:"0986";s:18:"res/geoPHP/LICENSE";s:4:"026a";s:20:"res/geoPHP/README.md";s:4:"47e4";s:23:"res/geoPHP/doc/api.html";s:4:"54ac";s:38:"res/geoPHP/lib/adapters/EWKB.class.php";s:4:"4c2e";s:38:"res/geoPHP/lib/adapters/EWKT.class.php";s:4:"7424";s:44:"res/geoPHP/lib/adapters/GeoAdapter.class.php";s:4:"5d64";s:41:"res/geoPHP/lib/adapters/GeoJSON.class.php";s:4:"dbbb";s:40:"res/geoPHP/lib/adapters/GeoRSS.class.php";s:4:"316e";s:47:"res/geoPHP/lib/adapters/GoogleGeocode.class.php";s:4:"e450";s:37:"res/geoPHP/lib/adapters/GPX.class.php";s:4:"460b";s:37:"res/geoPHP/lib/adapters/KML.class.php";s:4:"b2a4";s:37:"res/geoPHP/lib/adapters/WKB.class.php";s:4:"1b10";s:37:"res/geoPHP/lib/adapters/WKT.class.php";s:4:"c432";s:44:"res/geoPHP/lib/geometry/Collection.class.php";s:4:"58d1";s:42:"res/geoPHP/lib/geometry/Geometry.class.php";s:4:"494e";s:52:"res/geoPHP/lib/geometry/GeometryCollection.class.php";s:4:"39c8";s:44:"res/geoPHP/lib/geometry/LineString.class.php";s:4:"5807";s:49:"res/geoPHP/lib/geometry/MultiLineString.class.php";s:4:"cfc0";s:44:"res/geoPHP/lib/geometry/MultiPoint.class.php";s:4:"d153";s:46:"res/geoPHP/lib/geometry/MultiPolygon.class.php";s:4:"81ee";s:39:"res/geoPHP/lib/geometry/Point.class.php";s:4:"7647";s:41:"res/geoPHP/lib/geometry/Polygon.class.php";s:4:"5d2f";s:28:"res/geoPHP/tests/postgis.php";s:4:"4c42";s:25:"res/geoPHP/tests/test.php";s:4:"b18b";s:38:"res/geoPHP/tests/input/barret_spur.gpx";s:4:"3ad8";s:37:"res/geoPHP/tests/input/big_n_ugly.kml";s:4:"3340";s:33:"res/geoPHP/tests/input/box.georss";s:4:"f275";s:32:"res/geoPHP/tests/input/cdata.kml";s:4:"2462";s:36:"res/geoPHP/tests/input/circle.georss";s:4:"5154";s:37:"res/geoPHP/tests/input/fells_loop.gpx";s:4:"99df";s:48:"res/geoPHP/tests/input/geometrycollection.georss";s:4:"e202";s:45:"res/geoPHP/tests/input/geometrycollection.wkt";s:4:"ff13";s:34:"res/geoPHP/tests/input/line.georss";s:4:"b3d7";s:37:"res/geoPHP/tests/input/linestring.wkt";s:4:"1961";s:42:"res/geoPHP/tests/input/multilinestring.wkt";s:4:"3c38";s:39:"res/geoPHP/tests/input/multipolygon.wkb";s:4:"4f41";s:39:"res/geoPHP/tests/input/multipolygon.wkt";s:4:"4b4f";s:40:"res/geoPHP/tests/input/multipolygon2.wkt";s:4:"4fc6";s:43:"res/geoPHP/tests/input/multipolygon_big.wkt";s:4:"873a";s:31:"res/geoPHP/tests/input/path.kml";s:4:"e6d7";s:35:"res/geoPHP/tests/input/pentagon.kml";s:4:"dea3";s:35:"res/geoPHP/tests/input/point.georss";s:4:"56bd";s:32:"res/geoPHP/tests/input/point.kml";s:4:"e5a4";s:32:"res/geoPHP/tests/input/point.wkt";s:4:"39f6";s:37:"res/geoPHP/tests/input/polygon.georss";s:4:"78be";s:34:"res/geoPHP/tests/input/polygon.wkt";s:4:"bbfb";s:35:"res/geoPHP/tests/input/polygon2.wkt";s:4:"af54";s:35:"res/geoPHP/tests/input/polygon3.wkt";s:4:"0815";s:32:"res/geoPHP/tests/input/track.gpx";s:4:"af24";s:27:"res/layers/OpenStreetMap.js";s:4:"7a6d";s:17:"res/layers/opm.js";s:4:"4609";s:24:"res/layers/toolserver.js";s:4:"0c11";s:26:"res/leaflet/leaflet-src.js";s:4:"6b54";s:23:"res/leaflet/leaflet.css";s:4:"8272";s:26:"res/leaflet/leaflet.ie.css";s:4:"33b7";s:22:"res/leaflet/leaflet.js";s:4:"df34";s:29:"res/leaflet/images/layers.png";s:4:"2ba2";s:34:"res/leaflet/images/marker-icon.png";s:4:"87f6";s:37:"res/leaflet/images/marker-icon@2x.png";s:4:"1c82";s:36:"res/leaflet/images/marker-shadow.png";s:4:"e7bd";s:22:"res/leaflet-gpx/gpx.js";s:4:"1346";s:23:"res/leaflet-gpx/LICENSE";s:4:"10bb";s:32:"res/leaflet-gpx/pin-icon-end.png";s:4:"2541";s:34:"res/leaflet-gpx/pin-icon-start.png";s:4:"6b75";s:30:"res/leaflet-gpx/pin-shadow.png";s:4:"76aa";s:25:"res/leaflet-gpx/README.md";s:4:"40e1";s:26:"res/openlayers/license.txt";s:4:"8cf1";s:28:"res/openlayers/OpenLayers.js";s:4:"5e56";s:25:"res/openlayers/readme.txt";s:4:"fbd4";s:28:"res/openlayers/img/blank.gif";s:4:"accb";s:43:"res/openlayers/img/cloud-popup-relative.png";s:4:"5e25";s:41:"res/openlayers/img/drag-rectangle-off.png";s:4:"5cf6";s:40:"res/openlayers/img/drag-rectangle-on.png";s:4:"500c";s:32:"res/openlayers/img/east-mini.png";s:4:"339c";s:46:"res/openlayers/img/layer-switcher-maximize.png";s:4:"2dfe";s:46:"res/openlayers/img/layer-switcher-minimize.png";s:4:"d731";s:34:"res/openlayers/img/marker-blue.png";s:4:"cf04";s:34:"res/openlayers/img/marker-gold.png";s:4:"26bc";s:35:"res/openlayers/img/marker-green.png";s:4:"8e81";s:29:"res/openlayers/img/marker.png";s:4:"be39";s:42:"res/openlayers/img/measuring-stick-off.png";s:4:"7a33";s:41:"res/openlayers/img/measuring-stick-on.png";s:4:"112a";s:33:"res/openlayers/img/north-mini.png";s:4:"092d";s:39:"res/openlayers/img/panning-hand-off.png";s:4:"53a3";s:38:"res/openlayers/img/panning-hand-on.png";s:4:"b6ee";s:29:"res/openlayers/img/slider.png";s:4:"ff7a";s:33:"res/openlayers/img/south-mini.png";s:4:"2e6d";s:32:"res/openlayers/img/west-mini.png";s:4:"6686";s:38:"res/openlayers/img/zoom-minus-mini.png";s:4:"cc66";s:37:"res/openlayers/img/zoom-plus-mini.png";s:4:"5ef0";s:38:"res/openlayers/img/zoom-world-mini.png";s:4:"6340";s:30:"res/openlayers/img/zoombar.png";s:4:"1083";s:44:"res/openlayers/theme/default/framedCloud.css";s:4:"d41d";s:39:"res/openlayers/theme/default/google.css";s:4:"a6bc";s:44:"res/openlayers/theme/default/google.tidy.css";s:4:"ae75";s:42:"res/openlayers/theme/default/ie6-style.css";s:4:"97e9";s:47:"res/openlayers/theme/default/ie6-style.tidy.css";s:4:"256c";s:38:"res/openlayers/theme/default/style.css";s:4:"7177";s:43:"res/openlayers/theme/default/style.tidy.css";s:4:"7ddd";s:50:"res/openlayers/theme/default/img/add_point_off.png";s:4:"8c31";s:49:"res/openlayers/theme/default/img/add_point_on.png";s:4:"7d8c";s:42:"res/openlayers/theme/default/img/blank.gif";s:4:"accb";s:42:"res/openlayers/theme/default/img/close.gif";s:4:"47be";s:55:"res/openlayers/theme/default/img/drag-rectangle-off.png";s:4:"5cf6";s:54:"res/openlayers/theme/default/img/drag-rectangle-on.png";s:4:"500c";s:50:"res/openlayers/theme/default/img/draw_line_off.png";s:4:"4cf1";s:49:"res/openlayers/theme/default/img/draw_line_on.png";s:4:"2e10";s:51:"res/openlayers/theme/default/img/draw_point_off.png";s:4:"ac8e";s:50:"res/openlayers/theme/default/img/draw_point_on.png";s:4:"a36c";s:53:"res/openlayers/theme/default/img/draw_polygon_off.png";s:4:"e1aa";s:52:"res/openlayers/theme/default/img/draw_polygon_on.png";s:4:"a8cc";s:53:"res/openlayers/theme/default/img/editing_tool_bar.png";s:4:"326a";s:53:"res/openlayers/theme/default/img/move_feature_off.png";s:4:"5cb7";s:52:"res/openlayers/theme/default/img/move_feature_on.png";s:4:"abed";s:55:"res/openlayers/theme/default/img/navigation_history.png";s:4:"4b8e";s:57:"res/openlayers/theme/default/img/overview_replacement.gif";s:4:"287e";s:54:"res/openlayers/theme/default/img/pan-panel-NOALPHA.png";s:4:"89d2";s:46:"res/openlayers/theme/default/img/pan-panel.png";s:4:"3450";s:44:"res/openlayers/theme/default/img/pan_off.png";s:4:"0e73";s:43:"res/openlayers/theme/default/img/pan_on.png";s:4:"68b0";s:53:"res/openlayers/theme/default/img/panning-hand-off.png";s:4:"53a3";s:52:"res/openlayers/theme/default/img/panning-hand-on.png";s:4:"b6ee";s:53:"res/openlayers/theme/default/img/remove_point_off.png";s:4:"7878";s:52:"res/openlayers/theme/default/img/remove_point_on.png";s:4:"94c9";s:42:"res/openlayers/theme/default/img/ruler.png";s:4:"e920";s:54:"res/openlayers/theme/default/img/save_features_off.png";s:4:"32c5";s:53:"res/openlayers/theme/default/img/save_features_on.png";s:4:"19ee";s:50:"res/openlayers/theme/default/img/view_next_off.png";s:4:"29d0";s:49:"res/openlayers/theme/default/img/view_next_on.png";s:4:"6ed0";s:54:"res/openlayers/theme/default/img/view_previous_off.png";s:4:"e430";s:53:"res/openlayers/theme/default/img/view_previous_on.png";s:4:"6be7";s:55:"res/openlayers/theme/default/img/zoom-panel-NOALPHA.png";s:4:"56e7";s:47:"res/openlayers/theme/default/img/zoom-panel.png";s:4:"7afd";s:16:"wizard/index.php";s:4:"8f09";s:20:"wizard/locallang.xml";s:4:"94ba";s:14:"wizard/osm.png";s:4:"bc81";s:17:"wizard/vector.png";s:4:"511f";}',
	'suggests' => array(
	),
);

?>