<?php

require 'settings.php';

ob_start();
/**
* Navigation Menu originally coded by Ken Kasai <ken_kasai@commude.co.jp>
* Re-coded by:
* 
* @author Jayson Kenn Julian <jayson_julian@commmude.co.jp , jayson_julian@commude.ph>
*
* @param  string    $nav the file name to include
*
* @return string    full file name for including.
*/
function navigationMenu($nav)
{
	global $navlist;
	return $nav . '.php';
}

?>