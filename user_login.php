<?php
require_once 'classes/config.php';
require_once 'classes/DBclass.php';
require_once 'classes/User.php';

session_start();

$roll = $_POST['roll'];
$passw = $_POST['pass'];

echo $roll, $passw;

$co = new Cl_User();
$co->login($roll,$passw);