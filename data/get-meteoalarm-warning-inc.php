<?php
//Get regional alarm/warning from http://www.meteoalarm.eu/
// Script by Ken True - saratoga-weather.org
// Version 1.00 - 13-Sep-2008 - Initial Release
// Version 1.01 - 20-Sep-2008 - removed TZ setting (not used), added $EUAtarget option for links
// Version 1.02 - 06-Oct-2008 - some XHTML 1.0-Strict changes for <br />
// Version 2.00 - 22-Apr-2010 - major changes to support major meteoalarm.eu website changes
// Version 2.01 - 23-Apr-2010 - changes for revised TOS of meteoalarm.eu website
// Version 2.02 - 26-Jan-2011 - added support for global $cacheFileDir for new templates
// Version 2.03 - 07-Feb-2011 - added color based on warning level
// Version 2.04 - 24-Feb-2011 - added UTF-8->template character set conversion
// Version 2.05 - 02-Mar-2011 - added slovenian (lang=si) capability
// Version 2.06 - 05-Jun-2011 - changes for updated meteoalarm.eu website
// Version 2.07 - 22-Oct-2011 - added more UTF-8->character set conversion for 'more info' area
// Version 2.08 - 18-Jul-2012 - added fixes for meteoalarm.eu website changes
//
// error_reporting(E_ALL); // uncomment for error checking
//
// this script is designed to be used by
//   include("get-meteoalarm-warning-inc.php");
//
// Find the warning area for your location by going to www.meteoalarm.eu
// Navigate to the warning area that represents your region and view the detail page for that area.
// For standalone script use,
// Copy the URL in the browser address bar into the $EUA_URL area as shown below.
//
// For Carterlake/WD/PHP template use, add to your Settings.php:
//
// $SITE['EUwarningURL'] = '<URL-to-use-on-meteoalarm.eu>';
//
// where the <URL-to-use-on-meteoalarm.eu> is replaced by the URL in the browser address bar found
// by the method above.  No other customization is needed in the script for use in the Carterlake/WD/PHP template.
// 
// -------------Settings ---------------------------------
  $Lang = 'en';  // default language to be used (lowercase, must correspond to available 
//               template languages of
//              'en','ct','de','dk','el','es','fi','fr','it','nl','no','pl','pt','se'
//
$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=DK004&day=0&lang=en_UK';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?lang=en_UK&area=DE001&day=0';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=DE012&day=0&lang=fr_FR';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=IT001&day=0&lang=en_UK';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=UK013&day=0&lang=fr_FR';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=IE004&day=0&lang=fr_FR';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=SK012&day=0&lang=en_UK';
//$EUA_URL = 'http://www.meteoalarm.eu/index3.php?area=AT001&day=0&lang=en_UK';
//$EUA_URL = 'http://www.meteoalarm.eu/en_UK/0/0/DE004-Hessen.html';
//$EUA_URL = 'http://www.meteoalarm.eu/en_UK/0/0/ES051-El_Hierro.html';
//$EUA_URL = 'http://www.meteoalarm.eu/en_UK/1/0/AT001-Niederosterreich.html';
//
$cacheFileDir = './';   // default cache file directory
// create a 'meteoalarm-en.txt' file in the same directory as the script.
// you may have to set the permissions on the file to '666' so it is writable
// by the webserver.  Repeat for each language supported by your site.
//
$EUAcacheName = "meteoalarm.txt";  // prototype for path/filename for cache file
// note: $EUAcacheName will be changed to -$Lang.txt (like -en.txt) to allow languages to have unique cache files.
//
$EUArefetchSeconds = 300;  // refresh every 5 minutes
//
$EUAtarget  = '';  // set to 'target="_blank"' for links.. note: makes output not XHTML 1.0-Strict 
$charsetOutput = 'ISO-8859-1';        // default character encoding of output
//$EUAtarget = 'target="_blank"';  // to launch links in new page .. not XHTML 1.0-Strict though 
// -------------End Settings -----------------------------
//
$EUAversion = 'get-meteoalarm-warning-inc.php V2.08 - 18-Jul-2012';
// the following note is required by agreement with the authors of the website www.meteoalarm.eu
/* -----------------------------------------------------------------------------------------
Date: Thu, 11 Sep 2008 11:39:52 +0200
From: karin buchauer <karin.buchauer@zamg.ac.at>
Organization: zamg

Dear Mr True,

you are quite right:
you can use the material featured on the website, without modifying it, providing the source (link) as well as time and date of issue of the data, as stipulated in the Terms & Conditions.

With best regards,
Karin Buchauer



Ken True schrieb:
> Dear Sirs,
>
> I am an amateur weather enthusiast who also writes scripting for other weather enthusiasts to incorporate weather data into their personal, non-commercial weather websites.  Many of my scripts (which I write as a hobby, and are distributed gratis) are in use on personal weather websites worldwide.
>
> I've had requests to package the excellent data from www.meteoalarm.eu for weather advisories in EU countries, and before I generate a script for that purpose, I'd like to have your permission to proceed.
>
> Your Terms and Conditions page (http://www.meteoalarm.eu/terms.asp?lang=EN ) says:
>
> "The material featured on this site is the common property of the Meteoalarm partners, and is subject to copyright protection.
> The ownership and intellectual rights on all operational and updated awareness and warning information delivered to the Meteoalarm system remain with the Meteoalarm partners who originally delivered this information. The information on this web site may be used freely by the public.
> Before using information obtained from this server special attention should be given to the date & time of the data and products being displayed.
> In case this information is re-used: This information shall not be modified in content and the source of the information has always to be displayed as EUMETNET - MeteoAlarm, or if a single country, the providing national Institute (for internet application in all cases in the form of a link to: www.meteoalarm.eu). The time of issue at www.meteoalarm.eu must be count.
>
> Third parties producing copyrighted works consisting predominantly of the material of this website must provide notice with such work(s) identifying the source of material incorporated and stating that such material is not subject to copyright protection. Further information can be obtained from this following address: meteoalarm@zamg.ac.at"
>
> My reading of this implies that you do permit re-use/publishing of the information with attribution and an active link to the source page for the data on your site, and a note that the data is copyrighted by the data providing organization (and not subject to copyright by the 3rd-party website including/displaying the data).  Is that correct?
>
> Is it ok with you for me to generate a script for displaying national/regional weather alerts using your data from www.meteoalarm.eu with the appropriate attribution.
>
> Please feel free to examine other scripts I've written which use NOAA, Environment Canada, US Geological Services, and temis.nl as data sources (http://saratoga-weather.org/scripts.php ).
>
> Thank you in advance for your response,
>
> Best regards,
> Ken True
> webmaster@saratoga-weather.org
> Saratoga, California, USA

-- 

Karin Buchauer
Assistant to the Project Manager EMMA

Zentralanstalt f¸r Meteorologie und Geodynamik
Regionalstelle f¸r Salzburg und Oberˆsterreich
Freisaalweg 16
A - 5020 SALZBURG
Fon ++43 (0)662 626301-22
Fax ++43 (0)662 625838
karin.buchauer@zamg.ac.at       www.zamg.ac.at

 ----------------------------------------------------------------------------------------- */
//
// overrides from Settings.php if available
$langCharset = array( // for languages that DON'T use ISO-8859-1 (latin) set
 'bg' => 'ISO-8859-5',
 'el' => 'ISO-8859-7',
 'hu' => 'ISO-8859-2',
 'ro' => 'ISO-8859-2',
 'pl' => 'ISO-8859-2',
 'si' => 'ISO-8859-2',
);

global $SITE;
if (isset($SITE['tz'])) {$ourTZ = $SITE['tz']; }
if (isset($SITE['lang'])) {$Lang = $SITE['lang']; }
if (isset($SITE['langCharset'])) {$langCharset = $SITE['langCharset']; }
if (isset($SITE['EUwarningURL'])) {$EUA_URL = $SITE['EUwarningURL']; }
if(isset($SITE['cacheFileDir']))     {$cacheFileDir = $SITE['cacheFileDir']; }
// end of overrides from Settings.php

if (isset($_REQUEST['sce']) && strtolower($_REQUEST['sce']) == 'view' ) {
   //--self downloader --
   $filenameReal = __FILE__;
   $download_size = filesize($filenameReal);
   header('Pragma: public');
   header('Cache-Control: private');
   header('Cache-Control: no-cache, must-revalidate');
   header("Content-type: text/plain");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header('Connection: close');
   
   readfile($filenameReal);
   exit;
}


$EUA_languages = array( // our names for lang= to meteoalarm.eu names for lang=
// the uncommented ones are supported by the WD/AJAX/PHP World-ML template set
  'en' => 'en_UK',  // english
  'ct' => 'ca_ES',  // catal‡
//  'xx' => 'ce_CZ',  // ceötina
  'dk' => 'da_DK',  // dansk
  'de' => 'de_GE',  // deutsch
  'es' => 'es_ES',  // espaÒol
//  'xx' => 'ee_EE',  // eesti
//  'xx' => 'eu_VA',  // euskera
  'fr' => 'fr_FR',  // franÁais
//  'xx' => 'ga_UK',  // galego
//  'xx' => 'hr_HR',  // hrvatski
//  'xx' => 'is_IS',  // Ìslenska
  'it' => 'it_IT',  // italiano
//  'xx' => 'li_LT',  // lietuviu
//  'xx' => 'la_LV',  // latvieöu
  'hu' => 'ma_HU',  // magyar
//  'xx' => 'ma_MT',  // malti
  'nl' => 'ne_NL',  // nederlands
  'no' => 'no_NO',  // norsk
  'pl' => 'po_PL',  // polski
  'pt' => 'po_PT',  // portuguÍs
  'ro' => 'ro_RO',  // rom‚na
//  'xx' => 'cp_RS',  // russian
  'si' => 'sl_SI',  // slovenöcina
//  'xx' => 'sl_SK',  // slovencina
  'fi' => 'su_FI',  // suomi
  'se' => 'sv_SE',  // svenska
  'el' => 'gr_GR',  // greek
);

$EUA_lang = $EUA_languages[$Lang];

if (isset($_REQUEST['lang'])) {  // 
  $tlang = strtolower($_REQUEST['lang']);
  if (isset($EUA_languages[$tlang])) {
    $EUA_lang = $EUA_languages[$tlang];
	$Lang = $tlang;
  }
}

if(isset($langCharset[$Lang])) {
	$charsetOutput = $langCharset[$Lang];        // default character encoding of output
}

/*  Old warning color array
$EUA_warncolors = array(
'wb0' =>'#fff',      // white .. Missing, insufficient, outdated or suspicious data.
'wb1' =>'#99ff99',   // green .. No particular awareness of the weather is required.
'wb2' => '#FFFF66',  // yellow ..The weather is potentially dangerous.
'wb3' => '#FECC33',  // orange ..The weather is dangerous.
'wb4' => '#FF6666'   // red ..   The weather is very dangerous. Exceptionally intense meteorological phenomena have been forecast.
);
*/
/* New Warning color array
.awt.l0 {   background-position-y:	    0px;  background-color:#ffffff; }
.awt.l1 {   background-position-y:	  -20px;  background-color:#29d660;  }
.awt.l2 {   background-position-y:	  -40px;  background-color:#ffff00; }
.awt.l3 {   background-position-y:	  -60px;  background-color:#fecb31; }
.awt.l4 {   background-position-y:	  -80px;  background-color:#fe0104; }

<div class="warnbox awt nt l l1">
*/
$EUA_warncolors = array(
'wl0' => '#ffffff',      // white .. Missing, insufficient, outdated or suspicious data.
'wl1' => '#29d660',   // green .. No particular awareness of the weather is required.
'wl2' => '#ffff00',  // yellow ..The weather is potentially dangerous.
'wl3' => '#fecb31',  // orange ..The weather is dangerous.
'wl4' => '#fe0104'   // red ..   The weather is very dangerous. Exceptionally intense meteorological phenomena have been forecast.
);

$t = parse_url($EUA_URL);
$EUA_hostname = $t['host'];

if (isset($_REQUEST['debug'])) {$doDebug = true; } else {$doDebug = false; }

print "<!-- lang=$Lang ($EUA_lang) used -->\n";
if(preg_match('|index3|',$EUA_URL)) { // use older format of URL
  $EUA_URL = preg_replace('|lang=[^&]+|',"lang=$EUA_lang",$EUA_URL);
} else { // use newer format of URL
  $EUA_URL = preg_replace('|meteoalarm.eu/[^/]+/|',"meteoalarm.eu/$EUA_lang/",$EUA_URL);
}
$EUAcacheName = $cacheFileDir.$EUAcacheName;
$EUAcacheName = preg_replace('|\.txt$|',"-$Lang.txt",$EUAcacheName);


$EUA_URLLink = htmlspecialchars($EUA_URL);
$requiredNoteEUA = "<a href=\"$EUA_URLLink\" $EUAtarget>Warning data</a> courtesy of and Copyright &copy; EUMETNET-METEOalarm (http://www.meteoalarm.eu/).<br />Used with permission.
<br/>Time delays between this website and the www.meteoalarm.eu website are possible, for the most up to date information about alert levels as published by the participating National Meteorological Services please use www.meteoalarm.eu";


print "<!-- $EUAversion -->\n<!-- ".strip_tags($requiredNoteEUA)." -->\n";

// You can now force the cache to update by adding ?force=1 to the end of the URL

if ( empty($_REQUEST['force']) ) 
        $_REQUEST['force']="0";

$Force = $_REQUEST['force'];

if ($Force==1) {
      $html = fetchEUAUrlWithoutHanging($EUA_URL,$EUAcacheName); 
      print "<!-- force reload from URL $EUA_URL -->\n";
      $fp = fopen($EUAcacheName, "w"); 
	  if($fp) {
        $write = fputs($fp, $html); 
        fclose($fp);
	  } else {
	    print "<!--Unable to write cache $EUAcacheName -->\n";
	  }
} 


// refresh cached copy of page if needed
// fetch/cache code by Tom at carterlake.org

if (file_exists($EUAcacheName) and filemtime($EUAcacheName) + $EUArefetchSeconds > time()) {
      $WhereLoaded = "from cache $EUAcacheName";
      $html = implode('', file($EUAcacheName));
    } else {
      $WhereLoaded = "from URL $EUA_URL";
      $html = fetchEUAUrlWithoutHanging($EUA_URL);
      $fp = fopen($EUAcacheName, "w"); 
	  if($fp) {
        $write = fputs($fp, $html); 
        fclose($fp);
	  } else {
	    print "<!--Unable to write cache $EUAcacheName -->\n";
	  }
	}
print "<!-- Meteoalarm data load from $WhereLoaded -->\n";


if(strlen($html) < 50 ) {
  print "<!-- data not available -->\n";
  return;
}

  preg_match('|charset=([^"]+)\r\n"|i',$html,$matches);
  
  if (isset($matches[1])) {
    $charsetInput = strtoupper($matches[1]);
  } else {
    $charsetInput = 'UTF-8';
  }
 print "<!-- using charsetInput='$charsetInput' charsetOutput='$charsetOutput' -->\n";

// now slice it up
// Get the table to use:
    preg_match_all('!<td[^>]*(class|width)="([^"]+)"[^>]*>(.*)</td>!Uis',$html,$betweenspan);

  if($doDebug) {
    print "<!-- betweenspan \n" . print_r($betweenspan,true) . " -->\n";
  }
  
//  $cTypes = $betweenspan[1];  // contains 'class' or 'width'
//  $cNames = $betweenspan[2];  // contains the class="(.*)" or width="(.*)" values
  $cData  = $betweenspan[3];  // contains the <td class="..">(.*)</td> data area
  
  $EUAregionName = '';
  $EUAwarning = '';
  $EUAMetOffice = '';
  
  $moreInfo = 'More...';

  if($doDebug) {
//    print "<!-- cTypes \n" . print_r($cTypes,true) . " -->\n";
//    print "<!-- cNames \n" . print_r($cNames,true) . " -->\n";
    print "<!-- cData \n" . print_r($cData,true) . " -->\n";
  }
/* $cData now contains:
<!-- cData 
Array
(
    [0] => <h1>Weather warnings: Bremen und Niedersachsen&nbsp;<a style="right:13px; position:absolute;" href="/documents/rss/de/DE001.rss"><img src="/theme/style1/img/object_rss.png" border="0" alt="Show RSS version" title="Show RSS version"> </a></h1>
    [1] => <div class="warnbox wb2">
								<img src="http://meteoalarm.eu/intranet/images/aw12.jpg">
								<div class="info"><b>valid from</b> 21.04.2010 21:03 CET <b>Until</b> 22.04.2010 03:03 CET </div>
								<div class="info"><b>Wind&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Gefahr einzelner Bˆen um 55 km/h (St‰rke Bft 7) aus West bis Nordwest, anfangs vereinzelt auch Bˆen bis 70 hm/h (St‰rke Bft 8) mˆglich.&nbsp;</div>
							</div><div class="warnbox wb2">
						<img src="http://meteoalarm.eu/intranet/images/aw62.jpg">
								<div class="info"><b>valid from</b> 21.04.2010 20:03 CET <b>Until</b> 22.04.2010 09:03 CET </div>
								<div class="info"><b>Extreme low temperature&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Frost mit Tiefstwerten zwischen 0 und minus 4 Grad, in Bodenn‰he minus 3 bis minus 8 Grad.&nbsp;</div>
							</div>					<div class="warn-nav" 					<form method="GET" name="warn-nav" action="">
								<script>
									function WM(day){
									if(day == "") day = 0;
									document.location.href = "index3.php?area=DE001&lang=EN&day="+day;
									}
								</script>
								
								<input type="hidden" name="lang" value="EN">
								<span class="right-colum">
								<input id="day" name="day" type="hidden" value="0">
								Display:&nbsp;&nbsp;<input name="day" class="day active" type="button" value="today" onclick="WM(0)"> <input name="day" class="day " type="button" value="tomorrow" onclick="WM(1)">
								</span>
								</form>
							</div>
						
    [2] => &nbsp;&nbsp;
						
    [3] => 
										<a href="index.php?lang=EN&day=0">
											<p>Back to Europe:</p>
											<img src="map.php?iso=euro&data=0&type=0&tiny=1" border="0"> 
										</a>
									<br>
										<a href="index2.php?lang=EN&country=DE&day=0">
											<p>Back to Germany:</p>
											<img src="map.php?iso=DE&data=0&tiny=1" border="0">
										</a>
								<br>
						
					<a href="http://www.wettergefahren.de/index.htm?Land=HN00&Art=O" target="_blank">
					<p>more information:</p>
					<img src="/documents/societe/logos/DWD-Logo_7.JPG" border="0" alt="Regionalzentrale Hamburg" name="Regionalzentrale Hamburg">
					</a>
								
    [4] => 

					
)


*/

//	if (preg_match_all('|<a href="(.*)".*>\s*<p>(.*)</p>|Uis',$cData[$idx],$matches) ) {
	$temp = explode('<br>',$cData[3]);  // split out the links
	if ($doDebug) { print "<!-- moreInfo temp \n".print_r($temp,true)." -->\n"; }
	$tstr = $temp[count($temp)-1];
	if ($doDebug) { print "<!-- moreInfo tstr ='$tstr' -->\n"; }
	preg_match('|<a href="(.*)".*>\s*<p>(.*)</p>\s*<img.*alt="(.*)"|Uis',$tstr,$matches);
	if ($doDebug) { print "<!-- moreInfo matches \n".print_r($matches,true)." -->\n"; }
/*Array
(
    [0] => <a href="http://www.meteoam.it" target="_blank">
					<p>ulteriorii informazioni:</p>
					<img src="/documents/societe/logos/Servizio Meteorologicostemma_16.jpg" border="0" alt="CNMCA"
    [1] => http://www.meteoam.it
    [2] => ulteriorii informazioni:
    [3] => CNMCA
)
*/	if(isset($matches[0]) and count($matches[0]) > 0) {
		$moreInfo = '<a href="' . trim($matches[1]) . '">' . trim($matches[2]).'</a>';
		$EUAMetOffice = '<a href="' . trim($matches[1]) . '">' . trim($matches[3]).'</a>';
		$EUAMetOffice = preg_replace('|Go to |i','',$EUAMetOffice);
		if ($doDebug) { print "<!-- moreInfo ='$moreInfo' -->\n"; }
	}
 	
  
  $EUAregionName = 'METEOalarm.eu '. preg_replace('|&nbsp;|',"",strip_tags($cData[0]));
  $EUAregionName = preg_replace('|&amp;amp;|is','&amp;',$EUAregionName);
  $EUAwarning = '<table width="99%">'."\n";
  //warnbox awt nt l l1
  preg_match_all('|<div class="warnbox[^"]+">(.*)\t</div>|Uis',$cData[1],$warnboxes);
/*
<!-- warnboxes
Array
(
    [0] => Array
        (
            [0] => <div class="warnbox awt nt l l2">
								<img src="/theme/common/pictures/aw12.jpg">
								<div class="info"><b>valid from</b> 18.07.2012 17:44 CET <b>Until</b> 18.07.2012 21:00 CET </div>
								<div class="info"><b>Wind&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Weiterhin zeitweise Windb√∂en um 55 km/h aus S√ºdwest.&nbsp;</div>
							</div>
            [1] => <div class="warnbox awt nt l l2">
								<img src="/theme/common/pictures/aw32.jpg">
								<div class="info"><b>valid from</b> 18.07.2012 20:05 CET <b>Until</b> 18.07.2012 22:00 CET </div>
								<div class="info"><b>Thunderstorms&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Einzelne starke Schauer, dabei√∂rtlich Gewitter mit 
Windb√∂en um 55 km/h aus S√ºdwest.
ACHTUNG! Hinweis auf m√∂gliche Gefahren:
√ñrtlich kann es Blitzschlag geben. Bei Blitzschlag besteht 
Lebensgefahr!&nbsp;</div>
							</div>
        )

    [1] => Array
        (
            [0] => 
								<img src="/theme/common/pictures/aw12.jpg">
								<div class="info"><b>valid from</b> 18.07.2012 17:44 CET <b>Until</b> 18.07.2012 21:00 CET </div>
								<div class="info"><b>Wind&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Weiterhin zeitweise Windb√∂en um 55 km/h aus S√ºdwest.&nbsp;</div>
						
            [1] => 
								<img src="/theme/common/pictures/aw32.jpg">
								<div class="info"><b>valid from</b> 18.07.2012 20:05 CET <b>Until</b> 18.07.2012 22:00 CET </div>
								<div class="info"><b>Thunderstorms&nbsp;</b><span style="position:absolute; right:0px;"> Awareness Level: <b>Yellow&nbsp;</b> </span></div>
								<div class="text">Einzelne starke Schauer, dabei√∂rtlich Gewitter mit 
Windb√∂en um 55 km/h aus S√ºdwest.
ACHTUNG! Hinweis auf m√∂gliche Gefahren:
√ñrtlich kann es Blitzschlag geben. Bei Blitzschlag besteht 
Lebensgefahr!&nbsp;</div>
						
        )

) -->
*/
  if ($doDebug) { print "<!-- warnboxes\n".print_r($warnboxes,true)." -->\n"; }
  for ($idx = 0;$idx < count($warnboxes[1]);$idx++) {  // loop over the warning box notices
     $rawWarning = trim($warnboxes[1][$idx]);
	 // find color from <div class="warnbox awt nt l l2">
	 preg_match('|<div class="warnbox awt\s+\S+\s+\S+\s+([^"]+)">|is',$warnboxes[0][$idx],$colormatches);
	 if($doDebug) {
		// print "<!-- looked at \n".$warnboxes[0][$idx]." -->\n";
		 print "<!-- warnbox color matches\n".print_r($colormatches,true)." -->\n";
		 if(isset($colormatches[1])) { print "<!-- color='".$colormatches[1]."' used -->\n"; }
		 //print "<!-- EUA_warncolors\n".print_r($EUA_warncolors,true)." -->\n";
	 }
	 if(isset($colormatches[1]) ) {
	   $tColorCode = 'w'.$colormatches[1];
	   $WarnColor = $EUA_warncolors[$tColorCode];
	 }
	 if ($doDebug) { print "<!-- rawWarning ='$rawWarning' \n WarnColor='$WarnColor' -->\n"; }
	 $EUAwarning .= "<tr>\n";
	 preg_match('|<img src="(.*)"|',$rawWarning,$matches);
	 $warnImg = "http://" . $EUA_hostname . $matches[1];
	 if ($doDebug) { print "<!-- warnImg ='$warnImg' -->\n"; }
	 preg_match_all('|<div class="([^"]+)".*>(.*)</div>|Uis',$rawWarning,$matches);
     if($doDebug) { print "<!-- detail matches \n".print_r($matches,true)." -->\n"; }
	 $warnTxt = '';
	 foreach ($matches[2] as $i => $txt) {
		 $t = strip_tags($txt,'<b>');
		 if (strlen($t)>0) {$warnTxt .= $t . "<br/>\n";}
	 }
	 if ($doDebug) { print "<!-- warnTxt ='$warnTxt' -->\n"; }
	 $warnTxt = iconv($charsetInput,$charsetOutput.'//TRANSLIT',$warnTxt);
	 $EUAwarning .= "    <td width=\"250\"><img src=\"$warnImg\" alt=\" \" width=\"250\" height=\"167\"/></td>\n";
	 $EUAwarning .= "    <td align=\"left\" style=\"background-color: $WarnColor;\">$warnTxt</td>\n";
	 $EUAwarning .= "  </tr>\n";
	 
  }
  $EUAwarning .= "</table>\n";
  $EUAregionName = iconv($charsetInput,$charsetOutput.'//TRANSLIT',$EUAregionName);
print "<h1>$EUAregionName</h1>\n";
print "$EUAwarning";
if ($EUAMetOffice <> "") {
  $EUAMetOffice = iconv($charsetInput,$charsetOutput.'//TRANSLIT',$EUAMetOffice);
  $moreInfo = iconv($charsetInput,$charsetOutput.'//TRANSLIT',$moreInfo);
  print "<p>$moreInfo ";
  if(strlen(strip_tags($EUAMetOffice)) > 1) {print "Data provided by $EUAMetOffice."; }
  print "</p>\n";
}
print "<p>$requiredNoteEUA</p>\n";

return; 

// ----------------------------functions ----------------------------------- 
 
 function fetchEUAUrlWithoutHanging($url) // thanks to Tom at Carterlake.org for this script fragment
   {
   // Set maximum number of seconds (can have floating-point) to wait for feed before displaying page without feed
   $numberOfSeconds=4;   

   // Suppress error reporting so Web site visitors are unaware if the feed fails
   error_reporting(0);

   // Extract resource path and domain from URL ready for fsockopen

   $url = str_replace("http://","",$url);
   $urlComponents = explode("/",$url);
   $domain = $urlComponents[0];
   $resourcePath = str_replace($domain,"",$url);

   // Establish a connection
   $socketConnection = fsockopen($domain, 80, $errno, $errstr, $numberOfSeconds);

   if (!$socketConnection)
       {
       // You may wish to remove the following debugging line on a live Web site
        print("<!-- Network error: $errstr ($errno) -->\n");
       }    // end if
   else    {
       $xml = '';
       fputs($socketConnection, "GET $resourcePath HTTP/1.1\r\nHost: $domain\r\nConnection: Close\r\n\r\n");
   
       // Loop until end of file
       while (!feof($socketConnection))
           {
           $xml .= fgets($socketConnection, 4096);
           }    // end while

       fclose ($socketConnection);

       }    // end else
	  

   return($xml);

   }    // end function
   
// ----------------------------------------------------------
      
?>