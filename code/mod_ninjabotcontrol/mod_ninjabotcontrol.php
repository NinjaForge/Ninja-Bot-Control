<?php
/* NINJA BOT CONTROL
* By Ricardo Sousa
* http://www.aiedilabs.com
* http://www.ninjoomla.com
* Based on http://www.joostdevalk.nl/wordpress/meta-robots-wordpress-plugin/robots-meta-tags/
* Copyright (C) 2007 Ricardo Sousa www.ninjoomla.com - Code so sharp, it hurts.
* email: ricardosousa@aiedi.com
* date: January 2008
* Release: 1.0
* License : http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Changelog
*
* 1.0 - Initial Version
*        JOOMLA 1.5 VERSION
*
*
*/
###################################################################
//Ninja Bot Control
//Copyright (C) 2007 Ricardo Sousa. Ninjoomla.com. All rights reserved.
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.
//
//You should have received a copy of the GNU General Public License
//along with this program; if not, write to the Free Software
//Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
###################################################################

// Kepp Direct Acces to this page not allowed
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// Getting the Parameters from Backend
$robottype = $params->get ('robots', ''); // The type of robots to aplly the settings: Supported: MSN/LIVE , GOOGLE, ASK, YAHOO, ALL
$robot1 = $params->get ('robotse1' , '') ;  // First element to BLOCK
$robot2 = $params->get ('robotse2' , '') ;  // First element to BLOCK
$robot3 = $params->get ('robotse3' , '') ;  // First element to BLOCK
$robot4 = $params->get ('robotse4' , '') ;  // First element to BLOCK
 $forceValid = $params->get( 'forceValid' );
 
// Arranjing the TAG that we will put in the header
$headertag = "<meta name=\"".$robottype."\" content=\"".$robot1."".$robot2."".$robot3."".$robot4."\">";

//To set the module up for XHTML and CSS validation take the current php buffer output
    //and cut it in half just before the </head> tag. Then insert our CSS and JS in between the two pieces
	if ($forcevalid == 1) {
    $buffer = ob_get_contents();
$hdrPos = strpos ($buffer, '</head>');
$buffer = substr ($buffer, 0, $hdrPos) . "\n$headertag\n". substr($buffer, $hdrPos);
ob_clean();
echo $buffer;
    } else {

          echo $headertag;

      }

?>

