<?php
# Created by Chris Richards
# chrisrichardsdev@gmail.com

include_once 'user.php';
include_once 'database.php';

# Site Details #
$Title = "Personalised Party Treats";
$Tagline = "";

class Config {

	public $Title = "Personalised Party Treats";

	public function ChangeTitle($TitleInput) {

		$this->$Title = strip_tags($TitleInput);
		header("Location: ../");
	}

}

?>