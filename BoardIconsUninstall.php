<?php
/**************************************************************************************
* Board Icons																		  *
* Version 1.1				                                                          *
***************************************************************************************												
* https://github.com/Ireheart	                                                      *
* Copyright 2011 Solomon Closson and Ireheart 2018									  *
* =================================================================================== *
* License Information:																  *
* 	- ABOVE INFO MUST REMAIN INTACT!												  *
*	- You are not allowed to redistribute any modifications to this mod.			  *
*	- You are FREE to redistribute this package "AS IS" ONLY						  *
*		granted all of the information for this mod stays INTACT!					  *
* BoardIconsUninstall.php									                          *
**************************************************************************************/

if (file_exists(dirname(__FILE__) . '/SSI.php'))
  require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
  die('<b>Error:</b> Cannot uninstall - please verify you put this in the same place as SMF\'s index.php.');

// Only Admin can uninstall...
if((SMF == 'SSI') && !$user_info['is_admin']) 
    die('Admin priveleges required.');

$board_icon_columns = array('img_new', 'img_new_type', 'img_old', 'img_old_type', 'img_redirect', 'img_redirect_type');
	
db_extend('packages');

// Get rid of the added columns in the SMF Boards table.
foreach($board_icon_columns as $col2remove)
	$smcFunc['db_remove_column'] ('{db_prefix}boards', $col2remove);


?>