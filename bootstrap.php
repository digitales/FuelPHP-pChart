<?php
/**
 * Bootstrap to help with using pChart from within a FuelPHP application.
 *
 * @package		pchart
 * @version		1.0
 * @author		Ross Tweedie
 * @license		GPLv3
 * @link		http://fuelphp.com
 */

Autoloader::add_classes(array(
	'Pchart\\pBarcode128'       => __DIR__.'/class/pBarcode128.class.php',
    'Pchart\\pBbarcode39'        => __DIR__.'/class/pBarcode39.class.php',
    'Pchart\\pBubble'           => __DIR__.'/class/pBubble.class.php',
    'Pchart\\pCache'        => __DIR__.'/class/pCache.class.php',
    'Pchart\\pData'        => __DIR__.'/class/pData.class.php',
    'Pchart\\pDraw'        => __DIR__.'/class/pDraw.class.php',
    'Pchart\\pImage'        => __DIR__.'/class/pImage.class.php',
    'Pchart\\pIndicator'        => __DIR__.'/class/pIndicator.class.php',
    'Pchart\\pPie'        => __DIR__.'/class/pPie.class.php',
    'Pchart\\pRadar'        => __DIR__.'/class/pRadar.class.php',
    'Pchart\\pScatter'        => __DIR__.'/class/pScatter.class.php',
    'Pchart\\pSplit'        => __DIR__.'/class/pSplit.class.php',
    'Pchart\\pSpring'        => __DIR__.'/class/pSpring.class.php',
    'Pchart\\pStock'        => __DIR__.'/class/pStock.class.php',
    'Pchart\\pSurface'        => __DIR__.'/class/pSurface.class.php',
));


/* End of file bootstrap.php */
