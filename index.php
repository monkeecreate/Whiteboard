<?php
ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);
session_start();

### AUTO CONFIG ##############################
$sSiteRoot = dirname(__FILE__)."/";
##############################################

##############################################
include("inc_config.php");

// Set timezone
putenv("TZ=".$aConfig["options"]["timezone"]);
date_default_timezone_set($aConfig["options"]["timezone"]);

ini_set("include_path", ini_get("include_path").":".$sSiteRoot."app/views/");

### URL VARIABLES ############################
// Remove _GET parameters from url
$sURL = array_shift(explode("?", $_SERVER["REQUEST_URI"]));
##############################################

### URL VARIABLES ############################
// Remove _GET parameters from url
$sURL = array_shift(explode("?", $_SERVER["REQUEST_URI"]));

// Force ending slash
if(substr($sURL, -1) != "/" && substr($sURL,-4,1) != "." && substr($sURL,-3,1) != ".")
{
	// Save _GET parameters
	if(!empty($_SERVER["QUERY_STRING"]))
		$sQueryString .= "?".$_SERVER["QUERY_STRING"];
	
	// Permanently redirect page
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$sURL."/".$sQueryString);
	exit;
}

// Break URL into peices
$aURL = explode("/", $sURL);
array_shift($aURL); // Remove first array item, always empty
array_pop($aURL); // Remove last array item, always empty

$sController = strtolower(preg_replace("/([^a-z0-9_-]+)/i", "", array_shift($aURL)));
$sAction = strtolower(preg_replace("/([^a-z0-9_-]+)/i", "", array_shift($aURL)));

if(empty($sController)) {
	$sController = "app";
}

if(empty($sAction)) {
	$sAction = "index";
}
##############################################

require($sSiteRoot."app/appController.php");

header("BoardController: ".$sController);
header("BoardAction: ".$sAction);

if(is_file($sSiteRoot."app/controllers/".$sController.".php")) {
	include($sSiteRoot."app/controllers/".$sController.".php");
	
	if(class_exists($sController)) {
		if(method_exists($sController, $sAction)) {
			$oController = new $sController($sController, $aURL);
			$oController->$sAction($aURL);
		} else {
			$oApp = new appController;
		$oApp->loadTemplate("error/404.php");
		}
	} else {
		$oApp = new appController;
		$oApp->loadTemplate("error/404.php");
	}
} else {
	$oApp = new appController;
	$oApp->loadTemplate("error/404.php");
}