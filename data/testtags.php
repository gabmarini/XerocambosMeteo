<?php
// converted tagslist.txt to .\tagslist.php for php tags
// by gen-PHP-tagslist.pl - Version 1.00 - 07-Apr-2006
// Author: Ken True - webmaster-weather.org
// Edited: 20-Apr-2006 to trim unused tags
// Version 1.01 - 25-Jan-2008 -- added Windy-rain to icon list
// Version 1.02 - 24-Jun-2008 -- added variables to replace old trends-inc.html with trends-inc.php
// --------------------------------------------------------------------------
// allow viewing of generated source

if ( isset($_REQUEST['sce']) && strtolower($_REQUEST['sce']) == 'view' ) {
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
// General OR Non Weather Specific/SUN/MOON
// ========================================
$time = "6:45 PM";	// current time
$date = "06/27/08";	// current date
$sunrise = "5:50am";	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute = "45";	// Current minute
$time_hour = "18";	// Current hour
$date_day = "27";	// Current day
$date_month = "06";	// Current month
$date_year = "2008";	// Current year
$monthname = "June";	// Current month name
$dayname = "Friday";	// Current day name
$sunset = "8:32pm";	// sunset time
$moonrise = "1:38am";	// moon rise time
$moonset = "3:53pm";	// moon set time
$moonage = "Moon age: 23 days,19 hours,22 minutes,33%";	// current age of the moon (days since new moon)
$moonphase = "33%";	// Moon phase %
$moonphasename = 'Waning Crescent Moon'; // 10.36z addition
$marchequinox = "05:49 UTC 20 March 2008";	// March equinox date
$junesolstice = "00:00 UTC 21 June 2008";	// June solstice date
$sepequinox = "15:45 UTC 22 September 2008";	// September equinox date
$decsolstice = "12:04 UTC 21 December 2008";	// December solstice date
$moonperihel = "08:14 UTC 3 January 2009";	// Next Moon perihel date
$moonaphel = "17:08 UTC 4 July 2008";	// Next moon perihel date
$moonperigee = "21:21 UTC 1 July 2008";	// Next moon perigee date
$moonapogee = "04:14 UTC 14 July 2008";	// Next moon apogee date
$newmoon = "19:23 UTC 3 June 2008";	// Date/time of the next/last new moon
$nextnewmoon = "02:19 UTC 3 July 2008";	// Date/time of the next new moon for next month
$firstquarter = "15:04 UTC 10 June 2008";	// Date/time of the next/last first quarter moon
$lastquarter = "12:10 UTC 26 June 2008";	// Date/time of the next/last last quarter moon
$fullmoon = "17:31 UTC 18 June 2008";	// Date/time of the next/last full moon
$fullmoondate = " 18 June 2008";	// Date of the next/last full moon (date only)
$suneclipse = "10:22 UTC 1 August 2008 Eclipse Total";	// Next sun eclipse
$mooneclipse = "14:39 UTC 9 February 2009 Eclipse Half shadow";	// Next moon eclipse date
$easterdate = "23 March 2008";	// Next easter date
$chinesenewyear = "7 February 2008 ()";	// Chinese new year
$hoursofpossibledaylight = "14:42:00 ";	// Total hours/minutes of possible daylight for today
//
$weatherreport = "clear
 -  haze";	// current weather conditions from selected METAR
$stationaltitude = "375";	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude = "037:16:28";	// Latitude (from the sun moon rise/set setup)
$stationlongitude = "0122:01:23";	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '6 Days 6 Hours 59 Minutes 59 Seconds'; // uptime for windows on weather pc
$freememory = ' 221.220 MB'; // amount of free memory on the pc
$Startimedate = '11:46:42 AM 6/21/2008'; // Time/date WD was started

$NOAAEvent = 'NO CURRENT ADVISORIES'; // NOAA Watch/Warning/Advisory
$noaawarningraw = '
There are no active watches, warnings or advisories'; // NOAA RAW watch/warning/advisory

// ADVISORIES)
// ADVISORIES)

$wdversion = '10.37k' . '-(b' . '10' . ')';	// Weather Display version number you are running
$wdversiononly = '10.37k';
$wdbuild   = '10';       // Weather Display build number you are running
// ---....What it says - for the weather warning....
$monthname = "June";	// Current month name
// 
// this under setup)
$noaacityname = "Saratoga";	// City name,from the noaa setup (in the av/ext setup)
// 
// level...enter this under setup)
// 
$timeofnextupdate = "6:50 PM";	// Time of next Update/Upload of the weather data to your web page (based on the web table update 
// 
// time)
// 
// must be first selected),,,,repeat up to day 8
$heatcolourword = "Comfortable";	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg 
// 
// image (which is updated with the gizmo.gif)
// i.e use this code:
// <img alt="WapSeer Control" src="graphtemp45.wbmp" vspace="0" hspace="0" align="middle"/>
// <img alt="WapSeer Control" src="graphwind45.wbmp" vspace="0" hspace="0" align="middle"/>
 
// 
// Averages/Extreme
// ================
// 
// 
// month and then the year numbers 
// e.g    for the average temperature for 8am (use a 24 hour clock) (hour preceding that, for the 
// 
// month of March 2003)
// 
// month and then the year numbers 
// 
// 
// 
// 
// (total for the current month)
// 
// current month as total)  (from your entered averages)
// 
// 
// 
// 

// 
// 
// 
// 
// 
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature = "74.9°F";	// temperature
$tempnodp = '75'; // temperature, no decimal place
$humidity = "57";	// humidity
$dewpt = "58.6°F";	// dew point
$maxtemp = "85.3°F";	// today's maximum temperature
$maxtempt = "1:17 PM";	// time this occurred
$mintemp = "56.2°F";	// today's minimum temperature
$mintempt = "5:46 AM";	// time this occurred
// VP soil temperature)
$feelslike = "77";	// Shows heat index or humidex or windchill (if less than 16oC)

$heati = "77.4°F";	// current heat index
$heatinodp = "77";	// current heat index,no decimal place
$windch = "74.9°F";	// current wind-chill
$windchnodp = "75°F";	// current wind-chill, no decimal place
$humidexfaren = "81.8°F";	// Humidex value in oF
$humidexcelsius = "27.7°C";	// Humidex value in oC

$apparenttemp = "76.8";	// Apparent temperature
$apparentsolartemp = "83.4";	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc = "24.9";	// Apparent temperature, °C
$apparentsolartempc = "28.6";	// Apparent temperature in the sun, °C (you need a solar sensor)
$apparenttempf = "76.8";	// Apparent temperature, °F
$apparentsolartempf = "83.4";	// Apparent temperature in the sun, °F (you need a solar sensor)

// 
// Yesterday:
// ----------
$tempchangehour = "-1.0 °F/last hr";	// Temperature change in the last hour
$maxtempyest = "83.4 °F";	// Yesterday's max temperature
$maxtempyestt = "2:47 PM";	// Time of yesterday's max temperature
$mintempyest = "49.5 °F";	// Yesterday's min temperature
$mintempyestt = "5:59 AM";	// Time of yesterday's min temperature
// 
// 
// Trends:
// -------
$temp24hoursago = "78.2";	// The temperature 24 hours ago
$humchangelasthour = "+ 2";	// Humidity change last hour
$dewchangelasthour = "+0.1";	// Dew point change last hour
$barochangelasthour = "-0.001";	// Baro change last hour
// 
// Wind
// ====
// Current:
// --------
// 
$avgspd = "1.9 mph";	// average wind speed (current)
$gstspd = "0.0 mph";	// current/gust wind speed
$maxgst = "13.0 mph";	// today's maximum wind speed
$maxgstt = "4:18 PM";	// time this occurred
$maxgsthr = "6.0 mph  NE";	// maximum gust last hour
$dirdeg = "25 °";	// wind direction (degrees)
$dirlabel = "NNE";	// wind direction (NNE etc)
//$maxgustlastimediatehourtime = "5:46PM";	// 5:46PM  time that the max gust last prior 1 hour occured
$avwindlastimediate10 = "1.1 mph";	// Average wind for the last immediate 10 minute period
// $avdir10minute = "26°";	// average ten minute wind direction (degrees)

$beaufortnum ='0'; //Beaufort wind force number
$currbftspeed = '0 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Light Air'; //Beaufort scale in text (i.e Fresh Breeze)

// 
// Yesterday:
// ----------
// 
// 
// Baromometer
// ===========
// Current:
// --------
$baro = '29.866 .in';  // current barometer
$baroinusa2dp = "29.87 inches";	// Current barometer reading in inches, 2 decimal places only.
$trend = "-0.001 in./hr";	// amount of change in the last hour
$pressuretrendname = "Steady";	// pressure trend (i.e. "falling"), last hour
$pressuretrendname3hour = "Steady";	// pressure trend (i.e. "falling"), last 3 hours

$vpforecasttext = 'increasing clouds with little temp. change.';	// Forecast text from the Davis VP
// 
// 
// Yesterday:
// ----------
// 
// Rain
// ====
// Current:
// --------
$dayrn = "0.00 in.";	// today's rain
$monthrn = "0.00 in.";	// rain so far this month
$yearrn = "21.49 in.";	// rain so far this year
$dayswithnorain = "65";	// Consecutative days with no rain
$dayswithrain = "0";	// Days with rain for the month
$dayswithrainyear = "37";	// Days with rain for the year
$currentrainratehr = "0.00";	// Current rain rate, mm/hr (or in./hr)
$maxrainrate = "0.000";	// Max rain rate,for the day, mm/min (or in./min)
$maxrainratehr = "0.000";	// Max rain rate,for the day, mm/hr (or in.mm)
$maxrainratetime = "00:00 AM";	// Time that occurred
// Yesterday:
// ----------
$yesterdayrain = "0.00 in.";	// Yesterday rain
//
$vpstormrainstart = '0/0/0';  //Davis VP Storm rain start date
$vpstormrain = '0.00 .in';           //Davis VP Storm rain value
//
// 
// Over the last Week
// ------------------
// 
// 
// Sunshine/Solar/ET
// =================
$VPsolar = "195";	//  Solar energy number (W/M2)
$VPuv = "0.5";	// UV number 
$highsolar = "832";	// Daily high solar (for Davis VP and Grow stations)
$highuv = "6.8";	// Daily high UV (for Davis VP stations)
$currentsolarpercent = "66 %";	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime = "12:56 PM";	// Time that the daily high solar occured
$lowsolartime = "12:00 AM";	// Time that the daily low solar occured
$highuvtime = "1:57 PM";	// Time that the daily high UV occured
$lowuvtime = "12:00 AM";	// Time that the daily low UV occured
$highuvyest = "6.2";	// Yesterday's high UV
$highuvyesttime = "12:06 PM";	// Time of yesterday's high UV
$burntime = "224";	// Time (minutes) to burn (normal skin) at the current UV rate, from the Davis VP with UV sensor
// 
// the solar setup.
// 
// 
// Number of resynchronizations, The largest number of packets in a row that were received., and the number of CRC errors 
// 
// detected. 
// 
// 
// Record Readings
// ===============
// 
// for current month to date:
// 
$mrecordwindgust = "18.1";	// All time record high wind gust
$mrecordhighgustday = "4";	// Day of record high wind gust
// 
// 
// Current weather warning/forecast from input daily weather
// ---------------------------------------------------------
// 
// GPS
// ---
// 
// 
// 
// Snow
// =====
// 
$snowseasonin = '0';	// Snow for season you have entered under input daily weather, inches
$snowmonthin = '0';	// Snow for month you have entered under input daily weather, inches
$snowtodayin = '0';	// Snow for today you have entered under input daily weather, inches
$snowseasoncm = '0';	// Snow for season you have entered under input daily weather, cm
$snowmonthcm = '0';	// Snow for month you have entered under input daily weather, cm
$snowtodaycm = '0';	// Snow for today you have entered under input daily weather, cm
$snowyesterday = '0';	// Yesterdays' snow
$snowheight = '416';	// Estimated height snow will fall at
$snowheightnew = '10361';	// Estimated height snow will fall at, new formula
// 
$snownowin = '0';	// Current snow depth, inches.
$snownowcm = '0';	// Current snow depth, cm.
// 
$snowrain = '0.00';	// rain measure by a heated rain gauge when temp below freezing times 10 to give estimated snow fall
//
// tags needed for trends-inc.php
//
$temp0minuteago = '75.1';  // ****this one is needed for all the others to work
$wind0minuteago = '2.3';
$gust0minuteago = '3.5';
$dir0minuteago = ' N ';
$hum0minuteago = '57';
$dew0minuteago = '58.8';
$baro0minuteago = '29.866';
$rain0minuteago = '0.00';
$VPsolar0minuteago = '197.0';
$VPuv0minuteago = '0.5';

$temp5minuteago = '75.2';  
$wind5minuteago = '1.2';
$gust5minuteago = '2.3';
$dir5minuteago = ' NE';
$hum5minuteago = '57';
$dew5minuteago = '58.9';
$baro5minuteago = '29.863';
$rain5minuteago = '0.00';
$VPsolar5minuteago = '211.0';
$VPuv5minuteago = '0.6';

$temp10minuteago = '75.4';  
$wind10minuteago = '1.2';
$gust10minuteago = '1.2';
$dir10minuteago = 'NNW';
$hum10minuteago = '56';
$dew10minuteago = '58.6';
$baro10minuteago = '29.862';
$rain10minuteago = '0.00';
$VPsolar10minuteago = '222.0';
$VPuv10minuteago = '0.6';

$temp15minuteago = '75.4';  
$wind15minuteago = '1.2';
$gust15minuteago = '3.5';
$dir15minuteago = 'NNW';
$hum15minuteago = '57';
$dew15minuteago = '59.1';
$baro15minuteago = '29.862';
$rain15minuteago = '0.00';
$VPsolar15minuteago = '238.0';
$VPuv15minuteago = '0.7';

$temp20minuteago = '75.5';  
$wind20minuteago = '1.2';
$gust20minuteago = '3.5';
$dir20minuteago = 'NNW';
$hum20minuteago = '56';
$dew20minuteago = '58.7';
$baro20minuteago = '29.860';
$rain20minuteago = '0.00';
$VPsolar20minuteago = '252.0';
$VPuv20minuteago = '0.8';

$temp30minuteago = '75.6';  
$wind30minuteago = '1.2';
$gust30minuteago = '2.3';
$dir30minuteago = 'NNW';
$hum30minuteago = '56';
$dew30minuteago = '58.8';
$baro30minuteago = '29.863';
$rain30minuteago = '0.00';
$VPsolar30minuteago = '282.0';
$VPuv30minuteago = '0.9';

$temp45minuteago = '75.6';  
$wind45minuteago = '1.2';
$gust45minuteago = '3.5';
$dir45minuteago = ' NW';
$hum45minuteago = '56';
$dew45minuteago = '58.8';
$baro45minuteago = '29.865';
$rain45minuteago = '0.00';
$VPsolar45minuteago = '327.0';
$VPuv45minuteago = '1.2';

$temp60minuteago = '76.1';  
$wind60minuteago = '1.2';
$gust60minuteago = '5.8';
$dir60minuteago = 'NNW';
$hum60minuteago = '55';
$dew60minuteago = '58.8';
$baro60minuteago = '29.867';
$rain60minuteago = '0.00';
$VPsolar60minuteago = '370.0';
$VPuv60minuteago = '1.4';

$temp75minuteago = '77.2';  
$wind75minuteago = '3.5';
$gust75minuteago = '5.8';
$dir75minuteago = 'NNW';
$hum75minuteago = '53';
$dew75minuteago = '58.7';
$baro75minuteago = '29.863';
$rain75minuteago = '0.00';
$VPsolar75minuteago = '408.0';
$VPuv75minuteago = '1.7';

$temp90minuteago = '78.0';  
$wind90minuteago = '3.5';
$gust90minuteago = '8.1';
$dir90minuteago = ' N ';
$hum90minuteago = '52';
$dew90minuteago = '59.0';
$baro90minuteago = '29.862';
$rain90minuteago = '0.00';
$VPsolar90minuteago = '452.0';
$VPuv90minuteago = '2.0';

$temp105minuteago = '79.2';  
$wind105minuteago = '3.5';
$gust105minuteago = '6.9';
$dir105minuteago = ' N ';
$hum105minuteago = '50';
$dew105minuteago = '59.0';
$baro105minuteago = '29.857';
$rain105minuteago = '0.00';
$VPsolar105minuteago = '500.0';
$VPuv105minuteago = '2.4';

$temp120minuteago = '80.1';  
$wind120minuteago = '5.8';
$gust120minuteago = '8.1';
$dir120minuteago = 'NNW';
$hum120minuteago = '48';
$dew120minuteago = '58.6';
$baro120minuteago = '29.855';
$rain120minuteago = '0.00';
$VPsolar120minuteago = '540.0';
$VPuv120minuteago = '2.8';

$VPet = '0.18';
$VPetmonth = '5.59';
$dateoflastrainalways = '4/3/2008';
$dayrnusa = '0.00 in.';
$highbaro = '29.880 in.';
$highbarot = '9:22 AM';
$highsolaryest = '834.0';
$highsolaryesttime = '12:55 PM';
$hourrn = '0.00';
$maxaverageyest = '6.9 mph   N';
$maxaverageyestt = '2:56 PM';
$maxavgdirectionletter = 'N';
$maxavgspd = '9.3 mph';
$maxavgspdt = '4:18 PM';
$maxbaroyest = '29.974 in.';
$maxbaroyestt = '12:00 AM';
$maxgstdirectionletter = 'NW';
$maxgustyest = '12.0 mph  NW';
$maxgustyestt = '2:55 PM';
$mcoldestdayonrecord = '64.0&deg;F  on: Jun 02 2008';
$mcoldestnightonrecord = '51.4&deg;F  on: Jun 02 2008';
$minchillyest = '49.5 °F';
$minchillyestt = '5:59 AM';
$minwindch = '56.2 °F';
$minwindcht = '5:46 AM';
$mrecordhighavwindday = '4';
$mrecordhighavwindmonth = '6';
$mrecordhighavwindyear = '2008';
$mrecordhighbaro = '30.088';
$mrecordhighbaroday = '1';
$mrecordhighbaromonth = '6';
$mrecordhighbaroyear = '2008';
$mrecordhighgustmonth = '6';
$mrecordhighgustyear = '2008';
$mrecordhightemp = '104.9';
$mrecordhightempday = '20';
$mrecordhightempmonth = '6';
$mrecordhightempyear = '2008';
$mrecordlowchill = '44.2';
$mrecordlowchillday = '2';
$mrecordlowchillmonth = '6';
$mrecordlowchillyear = '2008';
$mrecordlowtemp = '44.2';
$mrecordlowtempday = '2';
$mrecordlowtempmonth = '6';
$mrecordlowtempyear = '2008';
$mrecordwindspeed = '11.8';
$mwarmestdayonrecord = '91.9&deg;F  on: Jun 20 2008';
$mwarmestnightonrecord = '77.9&deg;F  on: Jun 21 2008';
$raincurrentweek = '0.000';
$raintodatemonthago = '0.00';
$raintodateyearago = '4.99';
$timeoflastrainalways = ' 6:22 AM';
$windruntodatethismonth = '787.35 miles';
$windruntodatethisyear = '5084.90 miles';
$windruntoday = '21.6';
$yesterdaydaviset = '0.177';
$yrecordhighavwindday = '27';
$yrecordhighavwindmonth = '1';
$yrecordhighavwindyear = '2008';
$yrecordhighbaro = '30.407';
$yrecordhighbaroday = '6';
$yrecordhighbaromonth = '2';
$yrecordhighbaroyear = '2008';
$yrecordhighgustday = '4';
$yrecordhighgustmonth = '1';
$yrecordhighgustyear = '2008';
$yrecordhightemp = '104.9';
$yrecordhightempday = '20';
$yrecordhightempmonth = '6';
$yrecordhightempyear = '2008';
$yrecordlowchill = '31.6';
$yrecordlowchillday = '1';
$yrecordlowchillmonth = '1';
$yrecordlowchillyear = '2008';
$yrecordlowtemp = '31.6';
$yrecordlowtempday = '1';
$yrecordlowtempmonth = '1';
$yrecordlowtempyear = '2008';
$yrecordwindgust = '38.0';
$yrecordwindspeed = '20.9';
$daysTmaxGT30C = '11';
$daysTmaxGT25C = '20';
$daysTminLT0C = '0';
$daysTminLTm15C = '0';

// end of trends-inc.php variables

//  
   // CURRENT CONDITIONS ICONS FOR clientraw.txt
   // create array for icons. There are 35 possible values in clientraw.txt
   // It would be simpler to do this with array() but to make it easier to 
   // modify each element is defined individually. Each index [#] corresponds
   // to the value provided in clientraw.txt
   $icon_array[0] = "day_clear.gif";            // imagesunny.visible
   $icon_array[1] = "night_clear.gif";          // imageclearnight.visible
   $icon_array[2] = "day_partly_cloudy.gif";    // imagecloudy.visible
   $icon_array[3] = "day_partly_cloudy.gif";    // imagecloudy2.visible
   $icon_array[4] = "night_partly_cloudy.gif";  // imagecloudynight.visible
   $icon_array[5] = "day_partly_cloudy.gif";            // imagedry.visible
   $icon_array[6] = "fog.gif";                  // imagefog.visible
   $icon_array[7] = "haze.gif";                 // imagehaze.visible
   $icon_array[8] = "day_heavy_rain.gif";       // imageheavyrain.visible
   $icon_array[9] = "day_mostly_sunny.gif";     // imagemainlyfine.visible
   $icon_array[10] = "mist.gif";                // imagemist.visible
   $icon_array[11] = "fog.gif";                 // imagenightfog.visible
   $icon_array[12] = "night_heavy_rain.gif";    // imagenightheavyrain.visible
   $icon_array[13] = "night_cloudy.gif";        // imagenightovercast.visible
   $icon_array[14] = "night_rain.gif";          // imagenightrain.visible
   $icon_array[15] = "night_light_rain.gif";    // imagenightshowers.visible
   $icon_array[16] = "night_snow.gif";          // imagenightsnow.visible
   $icon_array[17] = "night_tstorm.gif";        // imagenightthunder.visible
   $icon_array[18] = "day_cloudy.gif";          // imageovercast.visible
   $icon_array[19] = "day_partly_cloudy.gif";   // imagepartlycloudy.visible
   $icon_array[20] = "day_rain.gif";            // imagerain.visible
   $icon_array[21] = "day_rain.gif";            // imagerain2.visible
   $icon_array[22] = "day_light_rain.gif";      // imageshowers2.visible
   $icon_array[23] = "sleet.gif";               // imagesleet.visible
   $icon_array[24] = "sleet.gif";               // imagesleetshowers.visible
   $icon_array[25] = "snow.gif";                // imagesnow.visible
   $icon_array[26] = "snow.gif";                // imagesnowmelt.visible
   $icon_array[27] = "snow.gif";                // imagesnowshowers2.visible
   $icon_array[28] = "day_clear.gif.gif";       // imagesunny.visible
   $icon_array[29] = "day_tstorm.gif";          // imagethundershowers.visible
   $icon_array[30] = "day_tstorm.gif";          // imagethundershowers2.visible
   $icon_array[31] = "day_tstorm.gif";          // imagethunderstorms.visible
   $icon_array[32] = "tornado.gif";             // imagetornado.visible
   $icon_array[33] = "windy.gif";               // imagewindy.visible
   $icon_array[34] = "day_partly_cloudy.gif";   // stopped raining
   $icon_array[35] = "windyrain.gif";           // Wind+rain
   $iconnumber = '5';                // icon number

   $current_icon = $icon_array[5]; // name of our condition icon
// ----------------------------------------------------------------------------------
//   $current_summary = 'Dry' . "<br />" . 'Mostly Sunny/Dry ';
   $weathercond = 'Dry';
   $Currentsolardescription = 'Mostly Sunny/Dry ';
   $current_summary = $Currentsolardescription;
   $current_summary = preg_replace('|^/[^/]+/|','',$current_summary);
   $current_summary = preg_replace('|\\\\|',", ",$current_summary);
   $current_summary = preg_replace('|/|',", ",$current_summary);
//  
//  
//  
$cloudheightfeet = "3722";	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters = "1135";	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of generation script
// baroinmetric '1011.4'
// baro '29.866 .in'


?>
