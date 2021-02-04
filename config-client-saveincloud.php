<?php
// HTTP
define('HTTP_SERVER', 'http://bitstore.jelastic.saveincloud.net/');
//define('HTTP_SERVER', 'http://www.bitstore.com.br/');


// HTTPS
define('HTTPS_SERVER', 'https://bitstore.jelastic.saveincloud.net/');
//define('HTTPS_SERVER', 'https://www.bitstore.com.br/');


// DIR
define('DIR_APPLICATION', '/var/www/webroot/ROOT/catalog/');
define('DIR_SYSTEM', '/var/www/webroot/ROOT/system/');
define('DIR_IMAGE', '/var/www/webroot/ROOT/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '10.100.23.195');
define('DB_USERNAME', 'opencart');
define('DB_PASSWORD', '7274366');
define('DB_DATABASE', 'opencart');
define('DB_PREFIX', 'oc_');
define('DB_PORT', '3306');

