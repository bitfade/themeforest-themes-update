<?php  
/* 
	Plugin Name: Themeforest Themes Update
	Plugin URI: http://codecanyon.net 
	Description: Updates all themes purchased from themeforest.net 
	Author: pixelentity
	Version: 1.0.0
	Author URI: http://pixelentity.com
*/


// to debug
// set_site_transient('update_themes',null);

function themeforest_themes_update($updates) {
	if (isset($updates->checked)) {
		require_once("pixelentity-themes-updater/class-pixelentity-themes-updater.php");
		
		$username = defined('THEMEFOREST_USERNAME') ? THEMEFOREST_USERNAME : null;
		$apikey = defined('THEMEFOREST_APIKEY') ? THEMEFOREST_APIKEY : null;

		$updater = new Pixelentity_Themes_Updater($username,$apikey);
		$updates = $updater->check($updates);
	}
	return $updates;
}

add_filter("pre_set_site_transient_update_themes", "themeforest_themes_update");

