<?php
############################################################################
# A Project of TNET Services, Inc. and Saratoga-Weather.org (WD-USA-ML template set)
############################################################################
#
#	Project:	Sample Included Website Design
#	Module:		footer.php
#	Purpose:	Provides the bottom section of the website
# 	Authors:	Kevin W. Reed <kreed@tnet.com>
#				TNET Services, Inc.
#               Ken True <webmaster@saratoga-weather.org>
#               Saratoga-Weather.org
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
//Version 1.01 - 05-Feb-2012 - fixup for HTML5 validation
require_once("Settings.php");
require_once("common.php");
############################################################################
?>
		<!-- ##### Footer ##### -->

		<div id="footer">
			<div class="doNotPrint">
				<!-- <a href="#header"><?php langtrans('Top'); ?></a> | -->

				<a href="<?php print $SITE['email']; ?>" title="E-mail us"><?php langtrans('Contact Us'); ?></a>
				<script type="text/javascript">
				<!--
				if (navigator.appName == 'Microsoft Internet Explorer' && 
				parseInt(navigator.appVersion) >= 4)
				{
				document.write('| <a href=\"#\" onclick=\"javascript:window.external.AddFavorite        (location.href,document.title)\">');
				document.write('<?php langtrans('Bookmark Page'); ?></a>');
				}else
				{var msg = '| <a href="" title="<?php langtrans('Bookmark Page'); ?>" onClick="alert(' + "'Hit CTRL-D to bookmark this page'"+ ');"><?php langtrans('Bookmark Page'); ?></a>';
				if(navigator.appName == "Netscape") msg += " (CTRL-D)";
document.write(msg);
				}
				// -->
				</script>
			</div><!-- end doNotPrint -->

<div>
	<?php print $SITE['copyr'] ?><span class="doNotPrint"> |  
	<a href="<?php echo $SITE['WXsoftwareURL']; ?>" target="_blank" title="Powered by <?php echo $SITE['WXsoftwareLongName']; ?>"><?php echo $SITE['WXsoftwareLongName'];?>
	<?php if(isset($wdversion)) {echo " (".$wdversion.")";} ?> </a>
	<!-- <a href="http://validator.w3.org/check?uri=referer"><?php langtrans('Valid'); ?> 
	<?php  print (isset($useHTML5) and $useHTML5)?'HTML5':'XHTML 1.0'; ?></a> |
	<a href="http://jigsaw.w3.org/css-validator/check/referer"><?php langtrans('Valid'); ?> CSS</a> -->
	</span><br class="doNotPrint" />
	
		<!--<br/><?php langtrans('Never base important decisions on this or any weather information obtained from the Internet'); ?>.<br class="doNotPrint" />-->

</div>

<div>

<!--AAA-->

<br>


			<!-- Histats.com START counter ANDREA-->
<!--			<a href="http://www.histats.com/it/" target="_blank" title="contatore free"> -->
			<script  type="text/javascript" language="javascript">
			var s_sid = 293098;var st_dominio = 4;
			var cimg = 424;var cwi =112;var che =75;
			</script>

			<script  type="text/javascript" language="javascript" src="http://s11.histats.com/js9.js"></script>
			<noscript>
<!--			<a href="http://www.histats.com/it/" target="_blank"> -->
			<img src="http://s103.histats.com/stats/0.gif?293098&1" alt="contatore free" border="0"></a></noscript>
			<!-- Histats.com END counter ANDREA-->
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</div>

<!--      
/* modificato MASSI
eliminato collegamento informativa -->
<!--<a href=""> Informativa cookie </a>-->


		</div><!-- end id="footer" -->
	</div><!-- end id="page" wrapper -->

<script type="text/javascript">  
$(document).ready(function () {
		$(".dropdown").click(function () {
				$('.dropdown > ul').not($(this).children("ul").toggle("slow"));
				if ($(this).children("a").hasClass("drop-open")){
					$(this).children("a").removeClass("drop-open");
					$(this).children("a").css("color","").css("background-color", "");
					$(this).children("ul").fadeOut(1000);
				} else {
					$(this).children("a").addClass("drop-open");
					$(this).children("a").css("color","#000066").css("background-color", "#AAFFFF");
				}        
		});

		$(".drop-link").click(function(e) {
		e.preventDefault(); // one way 
	});
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var handle = $( "#custom-handle" );
        var prova = <?php echo $json; ?>;
        var max = prova.length-1;
        var i = 0;
        var intervalID;

        function startTimelapse() {
            intervalID = setInterval(function(){
                prova[i] != undefined ? i : i=0;
                $('#image').attr('src', '../Kavalo1/FI9900P_00626E65B357/snap/'+prova[i]);
                $('#slider').slider('value', i);
                handle.text(i);
                i++;
            }, 500);
        }


        handle.focusout(function() {
            startTimelapse();
        });

        $( "#slider" ).slider({
            max: max,
            create: function() {
                handle.text( $( this ).slider( "value" ) );
            },
            start: function( event, ui ) {
                clearInterval(intervalID);
            },
            slide: function( event, ui ) {
                handle.text( ui.value );
                $('#image').attr('src', '../Kavalo1/FI9900P_00626E65B357/snap/'+prova[ui.value]);
                i = ui.value;
            }
        });
        startTimelapse();
    });
    </script>

	</body>
</html>
<?php 
# Leave this code here .. it will help you see what language translations are missing by running any page on your
# website with a ?show=missing argument
#
	global $missingTrans,$SITE;
	if(isset($_REQUEST['show']) and strtolower($_REQUEST['show']) == 'missing') {
	echo "<!-- missing langlookup entries for lang=".$SITE['lang']." \n";
	foreach ($missingTrans as $key => $val) {
		echo "langlookup|$key|$key|\n";
	}
	echo "\n ".count($missingTrans)." entries.  End of missing langlookup entries -->\n";
	}
?>