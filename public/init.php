<?php	
use APISubiektGT\Logger;

$configId = $_POST['configId'] ?? '';
DEFINE('CONFIG_INI_FILE',dirname(__FILE__).'/../config/api-subiekt-gt'.$configId.'.ini');
DEFINE('LOG_DIR',dirname(__FILE__).'/../log/');	

include_once(dirname(__FILE__).'/../src/autoload.php');
Logger::getInstance(LOG_DIR);


?>