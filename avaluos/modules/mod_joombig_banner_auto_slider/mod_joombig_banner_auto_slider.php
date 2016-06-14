<?php
/**
* @title		joombig banner auto slider module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
// Path assignments
$mosConfig_absolute_path = JPATH_SITE;
$mosConfig_live_site = JURI :: base();
if(substr($mosConfig_live_site, -1)=="/") { $mosConfig_live_site = substr($mosConfig_live_site, 0, -1); }

// Include helper.php
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once (dirname(__FILE__).DS.'helper.php');
$lists 					= modJoombigbannerautosliderHelper::getList($params);
$uri 					= JURI::getInstance();
$uniqid					= $module->id;
$enable_jQuery			= $params->get('enable_jQuery', 1);
$width_module			= $params->get('width_module', "100%");
$height_module 			= $params->get('height_module', "512");
$left_module 			= $params->get('left_module', "0");
$animation_style 		= $params->get('animation_style', "random");
$speed 					= $params->get('speed', "7000");

$display_bannertimer 	= $params->get('display_bannertimer',1);
$display_bullets 		= $params->get('display_bullets',1);
$items					= count($lists);
$images					= 16;
$document 				= JFactory::getDocument();
require(JModuleHelper::getLayoutPath('mod_joombig_banner_auto_slider'));
?>
