<?php
session_start();
require_once("PHP/user.php");
include_once 'PHP/render.php';
include_once 'PHP/config.php';

$login = new USER();
$Render = new Render();
$Config = new Config();

if($Setup == false) {
    $Config->run_setup();
} elseif($Setup == true) {

}

if($login->is_loggedin()!="") {
    $login->checkPermission($_SESSION['user_session']);
}

$Render->Head();

?>
