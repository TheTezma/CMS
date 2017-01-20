<?php
session_start();
include_once '../PHP/config.php';
include_once '../PHP/database.php';
include_once '../PHP/user.php';
include_once '../PHP/render.php';

$login = new USER();
$Config = new Config();
$Render = new Render();

if($login->is_loggedin()!="") {
    $login->checkPermission($_SESSION['user_session']);
}
$Render->Head("../");

$Render->AdminBar("goto-home");
?>
<body>
	<div class="page">
		<div class="side-menu">
			<ul>
				<li><a href="">Details</a></li>
				<li><a href="">Settings</a></li>
			</ul>
		</div>
		<div class="content">
			<form action="../PHP/handlers/update-settings.php" method="POST">
				<span class="input-label">Site Title:</span>
				<input class="input" type="text" name="site-title" value="<?= $Title ?>">
				<input type="submit" name="update-title" value="Update">
			</form>
		</div>
	</div>
</body>