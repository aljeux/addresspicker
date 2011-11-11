<?php
/**
 * addresspicker.php
 *
 * @author Alain Peyrat <aljeux@free.fr>
 * @copyright 2011 Alain Peyrat
 * @license released under dual license BSD License and LGP License
 * @package addresspicker
 * @version 0.1
 */

class addresspicker extends CInputWidget
{
	var $appendAddressString;
	var $map;
	var $address;
	var $lat;
	var $lng;
	var $locality;

	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{
		$assets = dirname(__FILE__).'/assets';
		$baseUrl = Yii::app()->assetManager->publish($assets);

		// Add jquery.ui.addresspicker.js
		Yii::app()->getClientScript()->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false');
		Yii::app()->getClientScript()->registerCoreScript('jquery.ui');

		if(is_dir($assets)){
			Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.ui.addresspicker.js');
		} else
			throw new Exception(Yii::t('addresspicker - Error: Couldn\'t find assets folder to publish.'));

		Yii::app()->getClientScript()->registerScript('addresspicker', '
var addresspickerMap = jQuery("'.$this->address.'").addresspicker({
  appendAddressString: "'.$this->appendAddressString.'",
  elements: {
    map:      "'.$this->map.'",
    lat:      "'.$this->lat.'",
    lng:      "'.$this->lng.'",
    locality: "'.$this->locality.'"
  }
});
var gmarker = addresspickerMap.addresspicker("marker");
gmarker.setVisible(true);
addresspickerMap.addresspicker("updatePosition");
');
	}
}

?>