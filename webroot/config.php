<?php
/**
 * Config-file for Tamara. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 

/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
 


/**
 * Define Tamara paths.
 *
 */
define('TAMARA_INSTALL_PATH', __DIR__ . '/..');
define('TAMARA_THEME_PATH', TAMARA_INSTALL_PATH . '/theme/render.php');
 
 /**
 * Include bootstrapping functions.
 *
 */
include(TAMARA_INSTALL_PATH . '/src/bootstrap.php');
  

 
 
/**
 * Create the Tamara variable.
 *
 */
$tamara = array();
 
 
/**
 * Site wide settings.
 *
 */
$tamara['lang']         = 'sv';
$tamara['title_append'] = ' | Tamara en webbtemplate';/**
 * Theme related settings.
 *
 
$tamara['stylesheet'] = 'css/style.css';
*/
$tamara['stylesheets'] = array('css/style.css');
$tamara['favicon']    = 'favicon_3.ico';

$tamara['header'] = <<<EOD
<img class='sitelogo' src='img/Me_logo.jpg' alt='OOP Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$tamara['footer'] = <<<EOD
<footer><span class='sitefooter'>Tanja Tchoumak | <a href='https://github.com/tanjatch/Tamara-base'>Tamara på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$tamara['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src="img/tanja.jpg" alt="Närbild Tanja" height="50"></figure>
  <p>Tanja Tchoumak undervisar matematik och programmering på gymnasiet</p>
</footer>
EOD;

/**
 * The navbar
 *
*/


/**
 * Settings for JavaScript.
 *
 */
$tamara['modernizr'] = 'js/modernizr.js';
/*
Setting for JavaScript
*/
$tamara['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';

//$tamara['jquery'] = null; // To disable jQuery

$tamara['javascript_include'] = array();
//$tamara['javascript_include'] = array('js/main.js'); // To add extra javascript files
//Add directly in sidecontroller 
/*

$tamara['javascript_include'][] = 'js/main.js';
$tamara['javascript_include'][] = 'js/other.js';
*/

/**
 * Google analytics.
 *
 */
$tamara['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics  