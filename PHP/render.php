<?php
include_once 'config.php';

class Render {

	public function Head($Document_Path) {
		$Config = new Config;
		
		echo 
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n"
    	.'<html xmlns="http://www.w3.org/1999/xhtml" lang="en">'. "\n"
    	.'<head>'. "\n"
    	.'<title>'.$Config->$Title.'</title>'. "\n"
		.'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>'. "\n"
		.'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>'. "\n"
    	.'<link rel="stylesheet" type="text/css" href="css/bootstrap.css">'. "\n"
    	.'<link href="'.$Document_Path.'CSS/admin.css" media="screen" rel="stylesheet" type="text/css" />'. "\n"
    	.'<link href="'.$Document_Path.'CSS/style.css" media="screen" rel="stylesheet" type="text/css" />'. "\n"
    	.'<link rel="shortcut icon" href="ASSETS/favicon.ico"/>'. "\n"
    	.'</head>' . "\n";
	}

	public function Footer() {

	}

	public function AdminBar($Status) {
		
		if($Status == "goto-admin") {
			echo 
			'<ul class="admin-bar">' . "\n"
			.'<li><a href="admin/customize">Customize</a></li>'. "\n"
			.'</ul>'. "\n";
		} elseif($Status == "goto-home") {
			echo 
			'<ul class="admin-bar">' . "\n"
			.'<li><a href="../">'.$Config->$Title.'</a></li>'. "\n"
			.'</ul>'. "\n";
		}
	}

}

?>