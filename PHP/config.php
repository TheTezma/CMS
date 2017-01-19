<?php
# Created by Chris Richards
# chrisrichardsdev@gmail.com

include_once 'user.php';

# SITE DETAILS
$Title = "";
$Tagline = "";

# Config Settings
$Setup = false;

class Config {

	public function run_setup() {
		$User = new USER();
		$User->redirect("");
	}

}

?>