<?php

require_once "controller/Libro.php";

header('Access-Control-Allow-Origin: *');

$dat = Libro::ListLibro();
echo ($dat);