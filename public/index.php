<?php
define("DS" ,DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__) .DS);
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLORS",APP.'controllers'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);


define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","localhost");
define("DATABASE_TYPE","mysql");


//config
define("NAME", "http://localhost:8080/newspro/public");
define("CSS_PATH",NAME.'/');

define("PATH",NAME.'/');



require_once  ("../vendor/autoload.php");
$app= new MVC\core\app();


?>
