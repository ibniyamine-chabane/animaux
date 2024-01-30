<?php 
// http://localhost/...
// http://www.
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); 

if(empty($_GET['page'])){
    echo "La page n'exsite pas";
} else {
    echo "La page demandé est : ".$_GET['page'];
} 