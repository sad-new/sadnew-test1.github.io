<?php

/**
 * This is a practice exercise given by Gen. Mngr. Ken Kasai
 * This exercise is composed of a Navigation Menu
 * The Navigation Menu are composed of the Following
 * - Home
 * - About Us
 * - Gallery
 * - Contact
 * It is required to apply the ff:
 * Arrays (settings.php)
 * Foreach or For Loops to manipulate arrays
 * Global Variables / Constant Definitions
 *
 * @package	    Practice 01 - Navigation Menu
 * @author	    Jayson Kenn Julian <jayson_julian@commmude.co.jp , jayson_julian@commude.ph>
 * @copyright	Copyright (c) 2017 Commude Philippines Inc. <http://commude.ph/>
 * @since	    Version 0.0.1
 */

/**
*--------------------------------------------------------------------
* index.php -> Start of Practice 01 - Navigation Menu
*--------------------------------------------------------------------
* This file loads the settings.php that is used for the configuration of the whole environment for the system to be developed
*/

require 'functions.php';
	$nav  = (!isset($_GET['rq']) || $_GET['rq'] == 'home') 
      ? 'home' 
      : $_GET['rq'];
    $body = ($nav  = (!isset($_GET['rq']) || $_GET['rq'] == 'home') 
      ? 'home' 
      : $_GET['rq']);
require COMMON_PATH  . 'html-head.php';
require COMMON_PATH  . 'header.php';
include INCLUDE_PATH .  navigationMenu($nav);
require COMMON_PATH  . 'footer.php';

?>