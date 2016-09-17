<?php
require_once 'classes/config.php';
require_once 'classes/DBclass.php';
require_once 'classes/User.php';

$mail = $_POST['email'];
$mob = $_POST['mobile'];
$passw = $_POST['pass'];
$co = new Cl_User();

$co->registration($mail,$mob,$passw);