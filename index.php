<? 

session_start();
define('ROOT',__DIR__);
require_once 'App/Library/Db.php';
require_once 'Core/function.php';
require_once 'App/App.php';
require_once 'Core/Controller.php';

$c = new App();