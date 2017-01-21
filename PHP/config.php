<?php
# Created by Chris Richards
# chrisrichardsdev@gmail.com

include_once 'user.php';
include_once 'database.php';

class Config {

	public function GetSiteConfig() {
		$User = new User;

		$stmt = $User->runQuery("SELECT * FROM site WHERE id=1");
		$stmt->execute();

		$siteRow = $stmt->fetch(PDO::FETCH_ASSOC);

		$Title = $siteRow['title'];
	}

	public function ChangeTitle($TitleInput) {
		$SanitizedTitleInput = strip_tags($TitleInput);
		$stmt = $User->runQuery("UPDATE site SET title=:title WHERE id=1");
		$stmt->execute(array(":title"=>$SanitizedTitleInput));
		header("Location: ../");
	}

}

?>