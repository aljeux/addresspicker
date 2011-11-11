#Yii extension for jquery addresspicker

The script is just a bridge to use the jquery-addresspicker with the Yii framework.
It provide a nice UI for widget for selecting an address. This widget has been develop
for a specific need but feel free to use it or fork the repository

#Usage
Put *addresspicker into your extensions folder. Then add the following code to use it:

```php
<?php $this->widget('application.extensions.addresspicker.addresspicker', array(
	'appendAddressString' => ', France',
	'address' => '#House_address',
	'locality' => '#House_city',
	'lat' => '#House_latitude',
	'lng' => '#House_longitude',
	'map' => '#map'));
?>
```

See directly the jquery-addresspicker on github for more.

#Credits 

* Alain Peyrat - Yii extension
* Sébastien Gruhier - JQuery plugin, https://github.com/sgruhier/jquery-addresspicker
