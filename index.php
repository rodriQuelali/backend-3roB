
<?php
require_once('conecction.php');
if(isset($_GET['controller'])&& isset($_GET['action'])){
    $controller=$_GET['controller'];
    $action=$_GET['action'];
}
else{
    $controller='categoria';
    $action='index';
}
require_once('view/layout.php');

?>