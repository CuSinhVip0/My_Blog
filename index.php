<?

session_start();
define('ROOT', __DIR__);
define("__WEB_ROOT__", "http://" . $_SERVER['HTTP_HOST'] . "/");

require_once 'App/Library/Db.php';
require_once 'Core/function.php';
require_once 'App/App.php';
require_once 'Core/Controller.php';

$app = new App();
