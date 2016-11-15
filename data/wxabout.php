<?php
############################################################################
# A Project of TNET Services, Inc. and Saratoga-Weather.org (Canada/World-ML template set)
############################################################################
#
#   Project:    Sample Included Website Design
#   Module:     sample.php
#   Purpose:    Sample Page
#   Authors:    Kevin W. Reed <kreed@tnet.com>
#               TNET Services, Inc.
#
# 	Copyright:	(c) 1992-2007 Copyright TNET Services, Inc.
############################################################################
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA
############################################################################
#	This document uses Tab 4 Settings
############################################################################
//Version 1.01 - 24-Jul-2012 - corrected default text to display current weather software
require_once("Settings.php");
require_once("common.php");
############################################################################
$TITLE= $SITE['organ'] . " - " . langtransstr("About Us");
$showGizmo = true;  // set to false to exclude the gizmo
include("top.php");
############################################################################
?>
</head>
<body>
<?php
############################################################################
include("header.php");
############################################################################
include("menubar.php");
############################################################################
?>

<div id="main-copy">
<?php if($SITE['lang'] == 'en') { ?>  
	

	<h3>Informazioni sulla stazione Meteo</h3> 

	<p>Il sito e la raccolta dati sono gestiti dal programma <a href="<?php echo $SITE['WXsoftwareURL']; ?>"><?php echo $SITE['WXsoftwareLongName']; ?></a>. La stazione comprende l'anemometro, un pluviometro e un sensore di temperatura/umidità collocati in posizione ottimale al fine di ottenere misure il più accurate possibile.</p>

	<h3>Riguardo la città</h3> 
<p align=left>
Informazioni sulla città.
</p>

	
	<h3>Note sul Sito</h3> 

	<p>Questo sito utilizza il template design di <a href="http://www.carterlake.org">CarterLake.org</a> convertito in PHP da <a href="http://saratoga-weather.org/">Saratoga-Weather.org</a>.<br/>
	
	<p>Il template utilizzato è conforme alle specifiche XHTML 1.0. Verifica codice <a href="http://validator.w3.org/check/referer">XHTML</a> e <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> di questa pagina.</p>

<?php }
// end of english specific site description
  if ($SITE['lang'] <> 'en') { 
// handle included files for other language wxabout-XX.html 
   
   if(file_exists("wxabout-".$SITE['lang'].'.html') ) {
     include_once("wxabout-".$SITE['lang'].'.html');
   } else {
     print "<p>Sorry, no '".$SITE['lang']."' version of this page can be found.</p>\n";
   }
   
  }// end of non-english inclusion
?>

</div><!-- end main-copy -->

<?php
############################################################################
include("footer.php");
############################################################################
# End of Page
############################################################################
?>