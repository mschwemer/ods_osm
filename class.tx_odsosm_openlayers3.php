<?php
class tx_odsosm_openlayers3 extends tx_odsosm_common {
	protected $layers;

	public function getMapCore($backpath=''){
 		$path=($backpath ? $backpath : $GLOBALS['TSFE']->absRefPrefix).t3lib_extMgm::siteRelPath('ods_osm').'res/';
 		$path=($this->config['local_js'] ? $path.'OpenLayers3/' : 'http://ol3js.org/en/master/');
		$GLOBALS['TSFE']->getPageRenderer()->addCssFile($path.'css/ol.css');
		tx_odsosm_div::addJsFiles(array($path.'build/ol.js'));
	}

	public function getMapMain(){
	}

	public function getMapCenter($lat,$lon,$zoom){
		return '
			view.setCenter(ol.proj.transform(['.$lon.', '.$lat.'], \'EPSG:4326\', \'EPSG:3857\'));
			view.setZoom('.$zoom.');
		';
	}

	protected function getLayer($layer,$i,$backpath=''){
		if(empty($layer['subdomains'])) $layer['subdomains']='abc';
		$layer['subdomains']=substr($layer['subdomains'],0,1).'-'.substr($layer['subdomains'],-1,1);
		$layer['tile_url']=strtr($layer['tile_url'],array('{s}'=>'{'.$layer['subdomains'].'}'));

		// TODO: Move map code to getMapMain
		return "
		view=new ol.View({
			center: [0, 0],
			zoom: 1
		});

		var map = new ol.Map({
			target: '".$this->config['id']."',
			controls: ol.control.defaults({
				attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
					collapsible: false
				})
			}),
			layers: [
				new ol.layer.Tile({
					source: new ol.source.OSM({
						attributions: [
							new ol.Attribution({
								html: '".$layer['attribution']."'
							})
						],
						url: '".$layer['tile_url']."'
					})
				})
			],
			view: view
		});
		";
	}

	protected function getMarker($item,$table){
	}
}
?>