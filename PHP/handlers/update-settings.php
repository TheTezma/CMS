<?php
session_start();
include_once '../config.php';
include_once '../database.php';
include_once '../user.php';

$Config = new Config;
$User = new User;


if(isset($_POST['site-title'])) {
	$NewTitle = strip_tags($_POST['site-title']);

	$Config->ChangeTitle($NewTitle);
} else {
	$User->redirect("../../");
}
?>