<?php

/**
 *--------------------------------------------------------------------
 * settings.php -> Settings Configuration
 *--------------------------------------------------------------------
 * @copyright 2017 Commude Philippines Inc
 * @author    Jayson Kenn Julian <jayson_julian@commmude.co.jp>
 */

define('PROJECT_BASE_FOLDER',  substr($_SERVER['REQUEST_URI'], 0, 12) == '/practice01/' ? '/practice01/' : ''); // Project base for the test server
define('PROJECT_FOLDER',       substr($_SERVER['REQUEST_URI'], 0, 12) == '/practice01/' ? 'www/'       : ''); // Project base for the actual server 

define('INCLUDE_PATH', 'include/');
define('COMMON_PATH', INCLUDE_PATH . 'common/');
define('HTTP',            'http://');
define('LINK_PATTERN',     '?rq=');
define('SUBMENU_PATTERN',  '&sm=');

 //HOME PAGE
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']     .   '/' . PROJECT_BASE_FOLDER . PROJECT_FOLDER);
define('SITE_URL',  HTTP. $_SERVER['SERVER_NAME'] .   '/' . str_replace($_SERVER['DOCUMENT_ROOT'] . '/', '', BASE_PATH));

global $navlist, $page, $rq;

$navlist = array(
		'home'       => array('link' => 'home'       , 'label' => 'Home'),
		'about_us'   => array('link' => 'about_us'   , 'label' => 'About Us'),
		'gallery'    => array('link' => 'gallery'    , 'label' => 'Gallery'),
		'contact_us' => array('link' => 'contact_us' , 'label' => 'Contact Us')
);

$rq           = filter_input(INPUT_GET, 'rq', FILTER_SANITIZE_STRING);

?>