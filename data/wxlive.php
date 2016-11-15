<?php
############################################################################
# A Project of TNET Services, Inc. and Saratoga-Weather.org (WD-USA template set)
############################################################################
#
#   Project:    Sample Included Website Design
#   Module:     sample.php
#   Purpose:    Sample Page
#   Authors:    Kevin W. Reed <kreed@tnet.com>
#               TNET Services, Inc.
#
#         Copyright:        (c) 1992-2007 Copyright TNET Services, Inc.
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
#        This document uses Tab 4 Settings
############################################################################
require_once("Settings.php");
require_once("common.php");
############################################################################
$TITLE= $SITE['organ'] . " - Weather Display Live";
$showGizmo = true;  // set to false to exclude the gizmo
include("top.php");
############################################################################
?>

<!-- mchallis begin added for WDL or MML-->
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="wdl-mml-forcesize.js"></script>
<style type="text/css" media="screen">
  html, body, #page, #main-copy, #flashcontent {
    height:100%;
  }
</style>
<!-- mchallis end added for WDL or MML -->

</head>
<body>
<?php
############################################################################
include("header.php");
############################################################################
include("menubar.php");
############################################################################
?>

<!--
Note: Do not add any html content to this portion of this page!
-->

<div id="main-copy">

<h3>Weather Display Live</h3>

<!--
Note: If you add or remove any html content in this portion of this page,
you will need to adjust the settings for the swf below:
var BelowDivPadding, and var PageHeightPadding will have to be set to a higher number(add)
or lower number(remove),
otherwise your swf will overflow the bounds of where it is supposed to be positioned.
-->

<p>
<b>What is Weather Display Live?</b><br />
Weather Display Live is an add-on Flash movie for Weather Display which allows you to view live
weather data over the web from your weatherstation in nearly real time.
This Weather Display weather station data is updated every 5 minutes.
</p>

<p>
Find out more about Weather Display Live (WDL) ...
<a href="http://www.weather-display.com/wdlive.php" title="Add WDL to your website," target="_blank">Add WDL to your website</a>
</p>

<!--
Note: Do not add any html content below this portion of this page!
or your swf will overflow the bounds of where it is supposed to be positioned.
-->

<!-- http://www.weather-display.com-->
<!-- Weather Display Live for Weather Display, the Weather Software for Weather Stations -->

<div id="flashcontent">
<noscript>Javascript must be enabled to view the live content.</noscript>
<br />
<br />
You need to install v8, or greater, of Flash Player from
<a href="http://www.adobe.com">Adobe</a> to view this live content.
</div>

<script type="text/javascript">

// This version is customm tailored for the Weather Display/PHP/AJAX Website Template set WDL or MML page
// http://saratoga-weather.org/template/

// This is a custom version by Mike Challis
// http://www.642weather.com/weather/scripts.php

// This version is compatible with valid doc type xhtml while allowing dynamic resize
// the SWF while resizing the window in Firefox or IE

// The alternative to this method is to set the swf width and height to static settings
// Swf width and height can be set to 100% but then it will not work correctly in
// firefox when a xhtml doc type is used

// This version requires the files swfobject.js and wdl-mml-forcesize.js to be
// located in the same folder on your web server as this page
// also, the script and style html is REQUIRED to be inside the head  /head container on this page

//  This method assumes that the swf 'flashcontent' div is inside a 'main-copy' div that is inside a 'page' div
//  as is standard for the Weather Display/PHP/AJAX Website Template set wdl page or mml page
//  or it will not work! If you delete one of these divs, or add an extra div inside these divs it will break
//  the correct display of the swf!

// #######################
// # Begin settings
// #######################

// # # # # # #
// # Two mandatory settings:

   // # You must enter the correct URL to your WDL or MML xml settings
var pathToConfig = "http://saratoga-weather.org/wdlconfig5.01.xml";
   // # you must set to your WDL or MML swf file name
   // # (note: this name will change every time you upgrade the version)
var swfFileName = "wdlv5_03.swf";



// # # # # # #
// # Optional settings:

   // set to minimum width size your swf can resize to,
   // usually leave this as is, SWFForceSize resizes it dynamically
var MinWidth = "610";
   // set to minimum height size your swf can resize to,
   // usually leave this as is, SWFForceSize resizes it dynamically
var MinHeight = "470";
   // set to maximum width size your swf can resize to,
   // usually leave this as is, SWFForceSize resizes it dynamically
var MaxWidth = 900;
   // Width to Height Ratio  Ie: 0.75 makes Width of 800 have Height of 600
var Ratio = 0.75;
   // If you want to add a little html content above WDL increase this pixel value,
   // otherwise the swf may overflow your footer (do not add quotes to the value!)
var BelowDivPadding = 200; // usually set to 100 or 200, unless you have a very long side menu, then higher
  // If you want to add a little html content above WDL increase this pixel value,
   // otherwise the swf may overflow your footer (do not add quotes to the value!)
var PageHeightPadding = 300; // usually set to 300, unless you have a very long side menu, then higher
   // Background color white is fine, unless you really want to change it
var backgroundColourOfSWF = "#ffffff"; // #ffffff is white


// #######################
// # End settings
// #######################

var so = new SWFObject(swfFileName+"?"+pathToConfig, swfFileName, MinWidth, MinHeight, "8", backgroundColourOfSWF);
so.addParam("quality", "high");
so.addParam("wmode", "opaque"); // needed for the flyout menu to float on top, instead of behind
so.addParam('salign', 'lt');           // align left top
if( so.write('flashcontent') ) {
    var forcesize = new SWFForceSize( so, MinWidth, MaxWidth, Ratio, BelowDivPadding, PageHeightPadding );
}
</script>

<!--
Note: Do not add any html content to this portion of this page!
-->

</div><!-- end main-copy -->

<?php
############################################################################
include("footer.php");
############################################################################
# End of Page
############################################################################
?>