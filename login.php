<?php

require_once "controller/Login.php";

header('Access-Control-Allow-Origin: *');

$dat = Login::validarDatos();
echo ($dat);
