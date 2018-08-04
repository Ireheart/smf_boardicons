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
* =================================================================================== *
* BoardIconsInstall.php									                              *
**************************************************************************************/

// If SSI.php is in the same place as this file, and SMF isn't defined...
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
  require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
  die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

if((SMF == 'SSI') && !$user_info['is_admin']) 
    die('Admin priveleges required.');

// columns to add in SMF boards table
$columns_boards = array();
$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_new',
		'type' => 'varchar',
		'size' => 255,
		'null' => false,
		'default' => '',
	),
);

$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_new_type',
		'type' => 'tinyint',
		'size' => 1,
		'null' => false,
		'default' => 0,
		'unsigned' => true,
	),
);

$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_old',
		'type' => 'varchar',
		'size' => 255,
		'null' => false,
		'default' => '',
	),
);

$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_old_type',
		'type' => 'tinyint',
		'size' => 1,
		'null' => false,
		'default' => 0,
		'unsigned' => true,
	),
);

$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_redirect',
		'type' => 'varchar',
		'size' => 255,
		'null' => false,
		'default' => '',
	),
);

$columns_boards[] = array(
	'table' => '{db_prefix}boards',
	'info' => array(
		'name' => 'img_redirect_type',
		'type' => 'tinyint',
		'size' => 1,
		'null' => false,
		'default' => 0,
		'unsigned' => true,
	),
);

db_extend('packages');

if (!empty($columns_boards))
	foreach ($columns_boards as $column)
		$smcFunc['db_add_column']($column['table'], $column['info'], array(), 'ignore');

?>