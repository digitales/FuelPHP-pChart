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
Autoloader::add_core_namespace('Pchart');

Autoloader::add_classes(array(
	'pBarcode128'       => __DIR__.'/pChart2.1.3/class/pBarcode128.class.php',
    'pBbarcode39'       => __DIR__.'/pChart2.1.3/class/pBarcode39.class.php',
    'pBubble'           => __DIR__.'/pChart2.1.3/class/pBubble.class.php',
    'pCache'            => __DIR__.'/pChart2.1.3/class/pCache.class.php',
    'pData'             => __DIR__.'/pChart2.1.3/class/pData.class.php',
    'pDraw'             => __DIR__.'/pChart2.1.3/class/pDraw.class.php',
    'pImage'            => __DIR__.'/pChart2.1.3/class/pImage.class.php',
    'pIndicator'        => __DIR__.'/pChart2.1.3/class/pIndicator.class.php',
    'pPie'              => __DIR__.'/pChart2.1.3/class/pPie.class.php',
    'pRadar'            => __DIR__.'/pChart2.1.3/class/pRadar.class.php',
    'pScatter'          => __DIR__.'/pChart2.1.3/class/pScatter.class.php',
    'pSplit'            => __DIR__.'/pChart2.1.3/class/pSplit.class.php',
    'pSpring'           => __DIR__.'/pChart2.1.3/class/pSpring.class.php',
    'pStock'            => __DIR__.'/pChart2.1.3/class/pStock.class.php',
    'pSurface'          => __DIR__.'/pChart2.1.3/class/pSurface.class.php',
));

/*
 Autoloader::add_classes(array(
	'Pchart\\pBarcode128'       => __DIR__.'/pChart2.1.3/class/pBarcode128.class.php',
    'Pchart\\pBbarcode39'       => __DIR__.'/pChart2.1.3/class/pBarcode39.class.php',
    'Pchart\\pBubble'           => __DIR__.'/pChart2.1.3/class/pBubble.class.php',
    'Pchart\\pCache'            => __DIR__.'/pChart2.1.3/class/pCache.class.php',
    'Pchart\\pData'             => __DIR__.'/pChart2.1.3/class/pData.class.php',
    'Pchart\\pDraw'             => __DIR__.'/pChart2.1.3/class/pDraw.class.php',
    'Pchart\\pImage'            => __DIR__.'/pChart2.1.3/class/pImage.class.php',
    'Pchart\\pIndicator'        => __DIR__.'/pChart2.1.3/class/pIndicator.class.php',
    'Pchart\\pPie'              => __DIR__.'/pChart2.1.3/class/pPie.class.php',
    'Pchart\\pRadar'            => __DIR__.'/pChart2.1.3/class/pRadar.class.php',
    'Pchart\\pScatter'          => __DIR__.'/pChart2.1.3/class/pScatter.class.php',
    'Pchart\\pSplit'            => __DIR__.'/pChart2.1.3/class/pSplit.class.php',
    'Pchart\\pSpring'           => __DIR__.'/pChart2.1.3/class/pSpring.class.php',
    'Pchart\\pStock'            => __DIR__.'/pChart2.1.3/class/pStock.class.php',
    'Pchart\\pSurface'          => __DIR__.'/pChart2.1.3/class/pSurface.class.php',
));
*/


/* End of file bootstrap.php */
