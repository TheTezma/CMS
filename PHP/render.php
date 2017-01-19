<?php
include_once 'config.php';

class Render {

	public function Head() {
		global $Title;
		
		echo 
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n"
    	.'<html xmlns="http://www.w3.org/1999/xhtml" lang="en">'. "\n"
    	.'<head>'. "\n"
    	.'<title>'.$Title.'</title>'. "\n"
		.'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>'. "\n"
		.'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>'. "\n"
    	.'<link rel="stylesheet" type="text/css" href="css/bootstrap.css">'. "\n"
    	.'<link href="CSS/style.css" media="screen" rel="stylesheet" type="text/css" />'. "\n"
    	.'<link rel="shortcut icon" href="ASSETS/favicon.ico"/>'. "\n"
    	.'</head>' . "\n";
	}

	public function Footer() {

	}

	public function AdminBar() {
		

	}

}

?>