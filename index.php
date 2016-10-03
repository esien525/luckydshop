<?php

// change the following paths if necessary
//$yii=dirname(__FILE__).'/./lib/framework/yii.php';
$yii=dirname(__FILE__).'/./yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config);

/*---- define ----*/
define('HTTPS', false);
if(HTTPS) 
{
	define('PROTOCOL', 'https://');
} 
else 
{
	define('PROTOCOL', 'http://');
}
define ('HTTP_SERVER', PROTOCOL.$_SERVER['SERVER_NAME']);
define ('HTTP_ROOT', Yii::app()->baseUrl);
define ('DB_USERNAME', 'root');
//define ('DB_USERNAME', 'maris581_hk20');
define ('DB_PASSWORD', '');
//define ('DB_NAME', 'maris581_venuescape');
define ('DB_NAME', 'luckydsh_data');
/*---- end of define ----*/

Yii::app()->run();
