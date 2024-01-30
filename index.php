<?php 
// http://localhost/...
// http://www.
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); 

try{
    if(empty($_GET['page'])){
        throw new Exception("La page n'exsite pas");
    } else {
        $url = explode("/",filter_var($_GET['page'],FILTER_SANITIZE_URL));
        var_dump($url);
        echo "La page demandé est : ".$_GET['page'];
    } 
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}