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
require_once("Settings.php");
require_once("common.php");
############################################################################
$TITLE = langtransstr($SITE['organ']) . " - " .langtransstr('Radar');
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
  
 
	  <h1 class="title"><?php langtrans('National Radar'); ?></h1> 

<!--    
	/* modificato MASSI
	collegamento a immagine radar satellite
	/* http://www.protezionecivile.gov.it/images/rete_radar/VMI/VMI.JPEG*/
-->      

<!--<p align=center><IMG SRC="http://en.sat24.com/image?type=forecastTemp&region=europa"></p>-->
	<p align=center><IMG SRC="http://api.sat24.com/animated/TU/visual/3/GTB%20Standard%20Time/8334810"></p>
	<h1 class="title"></h1>
</div><!-- end main-copy -->

<?php
############################################################################
include("footer.php");
############################################################################
# End of Page
############################################################################
?>