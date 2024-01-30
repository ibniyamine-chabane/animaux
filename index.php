<?php 
// http://localhost/...
// http://www.
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); 

try{
    if(empty($_GET['page'])){
        throw new Exception("La page n'exsite pas");
    } else {
        echo "La page demandé est : ".$_GET['page'];
    } 
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}