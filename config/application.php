<?php
	define("SITE_ROOT", "/aps-02");
	define("APP_ROOT_FOLDER", $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_ROOT);
	define("ASSETS_FOLDER", SITE_ROOT."/assets/");
	
	set_include_path(get_include_path() . PATH_SEPARATOR .  APP_ROOT_FOLDER);
	set_include_path(get_include_path() . PATH_SEPARATOR .  APP_ROOT_FOLDER . "/pages/layout");

	session_start();

	require "lib/utils.php";
	require "lib/sessions.php";
	require "auto_load_class.php";
?>