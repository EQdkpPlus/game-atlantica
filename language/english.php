<?php
/*	Project:	EQdkp-Plus
 *	Package:	Atlantica Online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found'); exit;
}

$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Axe',
		2	=> 'Bow',
		3	=> 'Cannon',
		4	=> 'Gun',
		5	=> 'Maniac',
		6	=> 'Musician',
		7	=> 'Spear',
		8	=> 'Staff',
		9	=> 'Sword'
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Atlantian',
	),
	'lang' => array(
		'atlantica'					=> 'Atlantica Online',
		'melee'						=> 'Melee',
		'ranged'					=> 'Ranged',
		'magic'						=> 'Magic',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Atlantica Online Settings',
	),
);
?>