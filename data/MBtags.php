<?php
/*
 File: MBtags.php

 Purpose: load Meteobridge variables into a $WX[] array for use with the Canada/World/USA template sets
 NOTE: this file must be processed by Meteobridge as a template file and uploaded to the website
   as MBtags.php using the Meteobridge extended Push Services configuration.

 Author: Ken True - webmaster@saratoga-weather.org

 (created by gen-MBtags.php - V1.03 - 18-Aug-2013)

 These tags generated on 2016-11-15 20:11:15 GMT
   From MBtags-template.txt updated 2016-10-25 17:10:26 GMT

*/
// --------------------------------------------------------------------------

// allow viewing of generated source

if (isset($_REQUEST["sce"]) and strtolower($_REQUEST["sce"]) == "view" ) {
//--self downloader --
   $filenameReal = __FILE__;
   $download_size = filesize($filenameReal);
   header("Pragma: public");
   header("Cache-Control: private");
   header("Cache-Control: no-cache, must-revalidate");
   header("Content-type: text/plain");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header("Connection: close");
   
   readfile($filenameReal);
   exit;
}
$WXsoftware = 'MB';  
$defsFile = 'MB-defs.php';  // filename with $varnames = $WX['MB-varnames']; equivalents
 
$rawdatalines = '
date|2016-11-15|// local date:|:
time|22:34:42|// local time:|:
dateUTC|2016-11-15|// UTC date:|:
timeUTC|20:34:42|// UTCtime:|:
uomTemp|&deg;C|// UOM temperature:|:
uomWind| km/h|// UOM wind:|:
uomBaro| hPa|// UOM barometer:|:
uomRain| mm|// UOM rain:|:
mbsystem-swversion|3.1|// Meteobridge version string (example: "1.1"):|:
mbsystem-buildnum|10731|// build number as integer (example: 1673):|:
mbsystem-platform|TL-MR3020|// string that specifies hw platform (example: "TL-MR3020"):|:
mbsystem-language|English|// language used on Meteobridge web interface (example: "English"):|:
mbsystem-timezone|Europe/Athens|// defined timezone (example: "Europe/Berlin"):|:
mbsystem-latitude|35.043122|// latitude as float (example: 53.875120):|:
mbsystem-longitude|26.227628|// longitude as float (example: 9.885357):|:
mbsystem-lunarage|16|// days passes since new moon as integer (example: 28):|:
mbsystem-lunarpercent|97.6|// lunarphase given as percentage from 0% (new moon) to 100% (full moon):|:
mbsystem-lunarsegment|4|// lunarphase segment as integer (0 = new moon, 1-3 = growing moon: quarter, half, three quarters, 4 = full moon, 5-7 = shrinking moon: three quarter, half, quarter):|:
mbsystem-daylength|10:20|// length of day (example: "11:28"):|:
mbsystem-civildaylength|11:13|// alternative method for daylength computation (example: "12:38"):|:
mbsystem-nauticaldaylength|12:14|// alternative method for daylength computation (example: "14:00"):|:
mbsystem-sunrise|06:50|// time of sunrise in local time. Can be converted to UTC by applying "=utc" to the variable (example: "06:47", resp. "05:47"):|:
mbsystem-sunset|17:10|// time of sunset in local time. Can be converted to UTC by applying "=utc" to the variable (example: "18:15", resp. "17:15"):|:
mbsystem-civilsunrise|06:23|// alternative computation for sunrise.:|:
mbsystem-civilsunset|17:36|// alternative computation for sunset.:|:
mbsystem-nauticalsunrise|05:53|// alternative computation for sunrise.:|:
mbsystem-nauticalsunset|18:07|// alternative alternative computation for sunset..:|:
mbsystem-daynightflag|N|// returns "D" when there is daylight, otherwise "N".:|:
mbsystem-moonrise|18:19|// time of moonrise in local time. Please notice that not every day has a moonrise time, therefore, variable can be non-existent on certain days (example: "05:46", resp. "04:46"):|:
mbsystem-moonset|07:26|// time of moonset in local time. Please notice that not every day has a moonset time, therefore, variable can be non-existent on certain days.:|:
forecast-rule|-1|// Davis forecast rule number:|:
forecast-text||// Davis forecast reports in English:|:
th0temp-act|15.8|// outdoor temperature most recent:|:
th0temp-val5|15.7|// outdoor temperature value 5 minutes ago:|:
th0temp-val10|15.6|// outdoor temperature value 10 minutes ago:|:
th0temp-val15|15.7|// outdoor temperature value 15 minutes ago:|:
th0temp-val30|--|// outdoor temperature value 30 minutes ago:|:
th0temp-val60|--|// outdoor temperature value 60 minutes ago:|:
th0temp-hmin|15.6|// outdoor temperature min of this hour:|:
th0temp-hmintime|20161115222150|// outdoor temperature timestamp min of this hour:|:
th0temp-hmax|15.8|// outdoor temperature max of this hour:|:
th0temp-hmaxtime|20161115220002|// outdoor temperature timestamp max of this hour:|:
th0temp-dmin|15.5|// outdoor temperature min of today:|:
th0temp-dmintime|20161115200959|// outdoor temperature timestamp min of today:|:
th0temp-dmax|18.4|// outdoor temperature max of today:|:
th0temp-dmaxtime|20161115005657|// outdoor temperature timestamp max of today:|:
th0temp-ydmin|17.8|// outdoor temperature min of yesterday:|:
th0temp-ydmintime|20161114061729|// outdoor temperature timestamp min of yesterday:|:
th0temp-ydmax|21.2|// outdoor temperature max of yesterday:|:
th0temp-ydmaxtime|20161114120929|// outdoor temperature timestamp max of yesterday:|:
th0temp-mmin|14.7|// outdoor temperature min of this month:|:
th0temp-mmintime|20161101062658|// outdoor temperature timestamp min of this month:|:
th0temp-mmax|24.6|// outdoor temperature max of this month:|:
th0temp-mmaxtime|20161108124909|// outdoor temperature timestamp max of this month:|:
th0temp-ymin|14.2|// outdoor temperature min of this year:|:
th0temp-ymintime|20161031181258|// outdoor temperature timestamp min of this year:|:
th0temp-ymax|24.8|// outdoor temperature max of this year:|:
th0temp-ymaxtime|20161024140918|// outdoor temperature timestamp max of this year:|:
th0temp-amin|14.2|// outdoor temperature min of all time:|:
th0temp-amintime|20161031181258|// outdoor temperature timestamp min of all time:|:
th0temp-amax|24.8|// outdoor temperature max of all time:|:
th0temp-amaxtime|20161024140918|// outdoor temperature timestamp max of all time:|:
th0temp-starttime|20161019001300|// outdoor temperature timestamp of first recorded data:|:
th0hum-act|58|// outdoor humidity most recent:|:
th0hum-val5|58|// outdoor humidity value 5 minutes ago:|:
th0hum-val10|59|// outdoor humidity value 10 minutes ago:|:
th0hum-val15|59|// outdoor humidity value 15 minutes ago:|:
th0hum-val30|--|// outdoor humidity value 30 minutes ago:|:
th0hum-val60|--|// outdoor humidity value 60 minutes ago:|:
th0hum-hmin|58|// outdoor humidity min of this hour:|:
th0hum-hmintime|20161115220002|// outdoor humidity timestamp min of this hour:|:
th0hum-hmax|60|// outdoor humidity max of this hour:|:
th0hum-hmaxtime|20161115222549|// outdoor humidity timestamp max of this hour:|:
th0hum-dmin|57|// outdoor humidity min of today:|:
th0hum-dmintime|20161115021829|// outdoor humidity timestamp min of today:|:
th0hum-dmax|66|// outdoor humidity max of today:|:
th0hum-dmaxtime|20161115055049|// outdoor humidity timestamp max of today:|:
th0hum-ydmin|50|// outdoor humidity min of yesterday:|:
th0hum-ydmintime|20161114160431|// outdoor humidity timestamp min of yesterday:|:
th0hum-ydmax|79|// outdoor humidity max of yesterday:|:
th0hum-ydmaxtime|20161114012659|// outdoor humidity timestamp max of yesterday:|:
th0hum-mmin|33|// outdoor humidity min of this month:|:
th0hum-mmintime|20161102121119|// outdoor humidity timestamp min of this month:|:
th0hum-mmax|87|// outdoor humidity max of this month:|:
th0hum-mmaxtime|20161106111539|// outdoor humidity timestamp max of this month:|:
th0hum-ymin|33|// outdoor humidity min of this year:|:
th0hum-ymintime|20161102121119|// outdoor humidity timestamp min of this year:|:
th0hum-ymax|96|// outdoor humidity max of this year:|:
th0hum-ymaxtime|20161031134538|// outdoor humidity timestamp max of this year:|:
th0hum-amin|33|// outdoor humidity min of all time:|:
th0hum-amintime|20161102121119|// outdoor humidity timestamp min of all time:|:
th0hum-amax|96|// outdoor humidity max of all time:|:
th0hum-amaxtime|20161031134538|// outdoor humidity timestamp max of all time:|:
th0hum-starttime|20161019001300|// outdoor humidity timestamp of first recorded data:|:
th0dew-act|7.6|// outdoor dewpoint most recent:|:
th0dew-val5|7.5|// outdoor dewpoint value 5 minutes ago:|:
th0dew-val10|7.6|// outdoor dewpoint value 10 minutes ago:|:
th0dew-val15|7.7|// outdoor dewpoint value 15 minutes ago:|:
th0dew-val30|--|// outdoor dewpoint value 30 minutes ago:|:
th0dew-val60|--|// outdoor dewpoint value 60 minutes ago:|:
th0dew-hmin|7.5|// outdoor dewpoint min of this hour:|:
th0dew-hmintime|20161115221532|// outdoor dewpoint timestamp min of this hour:|:
th0dew-hmax|7.9|// outdoor dewpoint max of this hour:|:
th0dew-hmaxtime|20161115222549|// outdoor dewpoint timestamp max of this hour:|:
th0dew-dmin|7.5|// outdoor dewpoint min of today:|:
th0dew-dmintime|20161115212249|// outdoor dewpoint timestamp min of today:|:
th0dew-dmax|11.6|// outdoor dewpoint max of today:|:
th0dew-dmaxtime|20161115000003|// outdoor dewpoint timestamp max of today:|:
th0dew-ydmin|9.6|// outdoor dewpoint min of yesterday:|:
th0dew-ydmintime|20161114160431|// outdoor dewpoint timestamp min of yesterday:|:
th0dew-ydmax|15.7|// outdoor dewpoint max of yesterday:|:
th0dew-ydmaxtime|20161114013609|// outdoor dewpoint timestamp max of yesterday:|:
th0dew-mmin|2.4|// outdoor dewpoint min of this month:|:
th0dew-mmintime|20161102100409|// outdoor dewpoint timestamp min of this month:|:
th0dew-mmax|19.9|// outdoor dewpoint max of this month:|:
th0dew-mmaxtime|20161109144529|// outdoor dewpoint timestamp max of this month:|:
th0dew-ymin|2.4|// outdoor dewpoint min of this year:|:
th0dew-ymintime|20161102100409|// outdoor dewpoint timestamp min of this year:|:
th0dew-ymax|19.9|// outdoor dewpoint max of this year:|:
th0dew-ymaxtime|20161109144529|// outdoor dewpoint timestamp max of this year:|:
th0dew-amin|2.4|// outdoor dewpoint min of all time:|:
th0dew-amintime|20161102100409|// outdoor dewpoint timestamp min of all time:|:
th0dew-amax|19.9|// outdoor dewpoint max of all time:|:
th0dew-amaxtime|20161109144529|// outdoor dewpoint timestamp max of all time:|:
th0dew-starttime|20161019001300|// outdoor dewpoint timestamp of first recorded data:|:
thb0temp-act|22.9|// indoor temperature most recent:|:
thb0temp-val5|22.9|// indoor temperature value 5 minutes ago:|:
thb0temp-val10|22.9|// indoor temperature value 10 minutes ago:|:
thb0temp-val15|22.9|// indoor temperature value 15 minutes ago:|:
thb0temp-val30|--|// indoor temperature value 30 minutes ago:|:
thb0temp-val60|--|// indoor temperature value 60 minutes ago:|:
thb0temp-hmin|22.9|// indoor temperature min of this hour:|:
thb0temp-hmintime|20161115220000|// indoor temperature timestamp min of this hour:|:
thb0temp-hmax|23.0|// indoor temperature max of this hour:|:
thb0temp-hmaxtime|20161115221239|// indoor temperature timestamp max of this hour:|:
thb0temp-dmin|22.4|// indoor temperature min of today:|:
thb0temp-dmintime|20161115203706|// indoor temperature timestamp min of today:|:
thb0temp-dmax|24.2|// indoor temperature max of today:|:
thb0temp-dmaxtime|20161115013927|// indoor temperature timestamp max of today:|:
thb0temp-ydmin|23.4|// indoor temperature min of yesterday:|:
thb0temp-ydmintime|20161114235949|// indoor temperature timestamp min of yesterday:|:
thb0temp-ydmax|25.9|// indoor temperature max of yesterday:|:
thb0temp-ydmaxtime|20161114110810|// indoor temperature timestamp max of yesterday:|:
thb0temp-mmin|21.1|// indoor temperature min of this month:|:
thb0temp-mmintime|20161102063423|// indoor temperature timestamp min of this month:|:
thb0temp-mmax|28.1|// indoor temperature max of this month:|:
thb0temp-mmaxtime|20161111115406|// indoor temperature timestamp max of this month:|:
thb0temp-ymin|21.1|// indoor temperature min of this year:|:
thb0temp-ymintime|20161102063423|// indoor temperature timestamp min of this year:|:
thb0temp-ymax|29.6|// indoor temperature max of this year:|:
thb0temp-ymaxtime|20161026123705|// indoor temperature timestamp max of this year:|:
thb0temp-amin|21.1|// indoor temperature min of all time:|:
thb0temp-amintime|20161102063423|// indoor temperature timestamp min of all time:|:
thb0temp-amax|29.6|// indoor temperature max of all time:|:
thb0temp-amaxtime|20161026123705|// indoor temperature timestamp max of all time:|:
thb0temp-starttime|20161019001302|// indoor temperature timestamp of first recorded data:|:
thb0hum-act|42|// indoor humidity most recent:|:
thb0hum-val5|42|// indoor humidity value 5 minutes ago:|:
thb0hum-val10|42|// indoor humidity value 10 minutes ago:|:
thb0hum-val15|42|// indoor humidity value 15 minutes ago:|:
thb0hum-val30|--|// indoor humidity value 30 minutes ago:|:
thb0hum-val60|--|// indoor humidity value 60 minutes ago:|:
thb0hum-hmin|41|// indoor humidity min of this hour:|:
thb0hum-hmintime|20161115222049|// indoor humidity timestamp min of this hour:|:
thb0hum-hmax|43|// indoor humidity max of this hour:|:
thb0hum-hmaxtime|20161115220000|// indoor humidity timestamp max of this hour:|:
thb0hum-dmin|41|// indoor humidity min of today:|:
thb0hum-dmintime|20161115214816|// indoor humidity timestamp min of today:|:
thb0hum-dmax|53|// indoor humidity max of today:|:
thb0hum-dmaxtime|20161115074729|// indoor humidity timestamp max of today:|:
thb0hum-ydmin|44|// indoor humidity min of yesterday:|:
thb0hum-ydmintime|20161114163128|// indoor humidity timestamp min of yesterday:|:
thb0hum-ydmax|59|// indoor humidity max of yesterday:|:
thb0hum-ydmaxtime|20161114000002|// indoor humidity timestamp max of yesterday:|:
thb0hum-mmin|35|// indoor humidity min of this month:|:
thb0hum-mmintime|20161102123518|// indoor humidity timestamp min of this month:|:
thb0hum-mmax|70|// indoor humidity max of this month:|:
thb0hum-mmaxtime|20161108172744|// indoor humidity timestamp max of this month:|:
thb0hum-ymin|35|// indoor humidity min of this year:|:
thb0hum-ymintime|20161102123518|// indoor humidity timestamp min of this year:|:
thb0hum-ymax|70|// indoor humidity max of this year:|:
thb0hum-ymaxtime|20161108172744|// indoor humidity timestamp max of this year:|:
thb0hum-amin|35|// indoor humidity min of all time:|:
thb0hum-amintime|20161102123518|// indoor humidity timestamp min of all time:|:
thb0hum-amax|70|// indoor humidity max of all time:|:
thb0hum-amaxtime|20161108172744|// indoor humidity timestamp max of all time:|:
thb0hum-starttime|20161019001302|// indoor humidity timestamp of first recorded data:|:
thb0dew-act|9.0|// indoor dewpoint most recent:|:
thb0dew-val5|9.0|// indoor dewpoint value 5 minutes ago:|:
thb0dew-val10|9.0|// indoor dewpoint value 10 minutes ago:|:
thb0dew-val15|9.0|// indoor dewpoint value 15 minutes ago:|:
thb0dew-val30|--|// indoor dewpoint value 30 minutes ago:|:
thb0dew-val60|--|// indoor dewpoint value 60 minutes ago:|:
thb0dew-hmin|8.0|// indoor dewpoint min of this hour:|:
thb0dew-hmintime|20161115222049|// indoor dewpoint timestamp min of this hour:|:
thb0dew-hmax|9.0|// indoor dewpoint max of this hour:|:
thb0dew-hmaxtime|20161115220000|// indoor dewpoint timestamp max of this hour:|:
thb0dew-dmin|8.0|// indoor dewpoint min of today:|:
thb0dew-dmintime|20161115214816|// indoor dewpoint timestamp min of today:|:
thb0dew-dmax|13.0|// indoor dewpoint max of today:|:
thb0dew-dmaxtime|20161115012412|// indoor dewpoint timestamp max of today:|:
thb0dew-ydmin|11.0|// indoor dewpoint min of yesterday:|:
thb0dew-ydmintime|20161114100104|// indoor dewpoint timestamp min of yesterday:|:
thb0dew-ydmax|16.0|// indoor dewpoint max of yesterday:|:
thb0dew-ydmaxtime|20161114002134|// indoor dewpoint timestamp max of yesterday:|:
thb0dew-mmin|6.0|// indoor dewpoint min of this month:|:
thb0dew-mmintime|20161101092030|// indoor dewpoint timestamp min of this month:|:
thb0dew-mmax|19.0|// indoor dewpoint max of this month:|:
thb0dew-mmaxtime|20161108115820|// indoor dewpoint timestamp max of this month:|:
thb0dew-ymin|6.0|// indoor dewpoint min of this year:|:
thb0dew-ymintime|20161101092030|// indoor dewpoint timestamp min of this year:|:
thb0dew-ymax|19.0|// indoor dewpoint max of this year:|:
thb0dew-ymaxtime|20161108115820|// indoor dewpoint timestamp max of this year:|:
thb0dew-amin|6.0|// indoor dewpoint min of all time:|:
thb0dew-amintime|20161101092030|// indoor dewpoint timestamp min of all time:|:
thb0dew-amax|19.0|// indoor dewpoint max of all time:|:
thb0dew-amaxtime|20161108115820|// indoor dewpoint timestamp max of all time:|:
thb0dew-starttime|20161019001302|// indoor dewpoint timestamp of first recorded data:|:
thb0press-act|1017.9|// station pressure most recent:|:
thb0press-val5|1017.9|// station pressure value 5 minutes ago:|:
thb0press-val10|1018.3|// station pressure value 10 minutes ago:|:
thb0press-val15|1018.3|// station pressure value 15 minutes ago:|:
thb0press-val30|--|// station pressure value 30 minutes ago:|:
thb0press-val60|--|// station pressure value 60 minutes ago:|:
thb0press-hmin|1017.9|// station pressure min of this hour:|:
thb0press-hmintime|20161115222820|// station pressure timestamp min of this hour:|:
thb0press-hmax|1018.3|// station pressure max of this hour:|:
thb0press-hmaxtime|20161115221318|// station pressure timestamp max of this hour:|:
thb0press-dmin|1017.1|// station pressure min of today:|:
thb0press-dmintime|20161115035820|// station pressure timestamp min of today:|:
thb0press-dmax|1018.5|// station pressure max of today:|:
thb0press-dmaxtime|20161115150440|// station pressure timestamp max of today:|:
thb0press-ydmin|1016.5|// station pressure min of yesterday:|:
thb0press-ydmintime|20161114041318|// station pressure timestamp min of yesterday:|:
thb0press-ydmax|1018.4|// station pressure max of yesterday:|:
thb0press-ydmaxtime|20161114092818|// station pressure timestamp max of yesterday:|:
thb0press-mmin|1006.9|// station pressure min of this month:|:
thb0press-mmintime|20161109175819|// station pressure timestamp min of this month:|:
thb0press-mmax|1018.9|// station pressure max of this month:|:
thb0press-mmaxtime|20161104095818|// station pressure timestamp max of this month:|:
thb0press-ymin|1006.9|// station pressure min of this year:|:
thb0press-ymintime|20161109175819|// station pressure timestamp min of this year:|:
thb0press-ymax|1018.9|// station pressure max of this year:|:
thb0press-ymaxtime|20161104095818|// station pressure timestamp max of this year:|:
thb0press-amin|1006.9|// station pressure min of all time:|:
thb0press-amintime|20161109175819|// station pressure timestamp min of all time:|:
thb0press-amax|1018.9|// station pressure max of all time:|:
thb0press-amaxtime|20161104095818|// station pressure timestamp max of all time:|:
thb0press-starttime|20161019001302|// station pressure timestamp of first recorded data:|:
thb0seapress-act|1020.1|// sealevel pressure most recent:|:
thb0seapress-val5|1020.1|// sealevel pressure value 5 minutes ago:|:
thb0seapress-val10|1020.5|// sealevel pressure value 10 minutes ago:|:
thb0seapress-val15|1020.5|// sealevel pressure value 15 minutes ago:|:
thb0seapress-val30|--|// sealevel pressure value 30 minutes ago:|:
thb0seapress-val60|--|// sealevel pressure value 60 minutes ago:|:
thb0seapress-hmin|1020.1|// sealevel pressure min of this hour:|:
thb0seapress-hmintime|20161115222820|// sealevel pressure timestamp min of this hour:|:
thb0seapress-hmax|1020.5|// sealevel pressure max of this hour:|:
thb0seapress-hmaxtime|20161115221318|// sealevel pressure timestamp max of this hour:|:
thb0seapress-dmin|1019.3|// sealevel pressure min of today:|:
thb0seapress-dmintime|20161115035820|// sealevel pressure timestamp min of today:|:
thb0seapress-dmax|1020.7|// sealevel pressure max of today:|:
thb0seapress-dmaxtime|20161115150440|// sealevel pressure timestamp max of today:|:
thb0seapress-ydmin|1018.7|// sealevel pressure min of yesterday:|:
thb0seapress-ydmintime|20161114041318|// sealevel pressure timestamp min of yesterday:|:
thb0seapress-ydmax|1020.6|// sealevel pressure max of yesterday:|:
thb0seapress-ydmaxtime|20161114092818|// sealevel pressure timestamp max of yesterday:|:
thb0seapress-mmin|1009.1|// sealevel pressure min of this month:|:
thb0seapress-mmintime|20161109175819|// sealevel pressure timestamp min of this month:|:
thb0seapress-mmax|1021.1|// sealevel pressure max of this month:|:
thb0seapress-mmaxtime|20161104095818|// sealevel pressure timestamp max of this month:|:
thb0seapress-ymin|1009.1|// sealevel pressure min of this year:|:
thb0seapress-ymintime|20161109175819|// sealevel pressure timestamp min of this year:|:
thb0seapress-ymax|1021.1|// sealevel pressure max of this year:|:
thb0seapress-ymaxtime|20161104095818|// sealevel pressure timestamp max of this year:|:
thb0seapress-amin|1009.1|// sealevel pressure min of all time:|:
thb0seapress-amintime|20161109175819|// sealevel pressure timestamp min of all time:|:
thb0seapress-amax|1021.1|// sealevel pressure max of all time:|:
thb0seapress-amaxtime|20161104095818|// sealevel pressure timestamp max of all time:|:
thb0seapress-starttime|20161019001302|// sealevel pressure timestamp of first recorded data:|:
wind0wind-act|31.0|// windspeed most recent:|:
wind0wind-val5|30.6|// windspeed value 5 minutes ago:|:
wind0wind-val10|10.4|// windspeed value 10 minutes ago:|:
wind0wind-val15|6.8|// windspeed value 15 minutes ago:|:
wind0wind-val30|--|// windspeed value 30 minutes ago:|:
wind0wind-val60|--|// windspeed value 60 minutes ago:|:
wind0wind-hmin|3.2|// windspeed min of this hour:|:
wind0wind-hmintime|20161115222341|// windspeed timestamp min of this hour:|:
wind0wind-hmax|48.6|// windspeed max of this hour:|:
wind0wind-hmaxtime|20161115223116|// windspeed timestamp max of this hour:|:
wind0wind-dmin|2.2|// windspeed min of today:|:
wind0wind-dmintime|20161115011524|// windspeed timestamp min of today:|:
wind0wind-dmax|49.7|// windspeed max of today:|:
wind0wind-dmaxtime|20161115193534|// windspeed timestamp max of today:|:
wind0wind-ydmin|0.0|// windspeed min of yesterday:|:
wind0wind-ydmintime|20161114002946|// windspeed timestamp min of yesterday:|:
wind0wind-ydmax|34.2|// windspeed max of yesterday:|:
wind0wind-ydmaxtime|20161114173004|// windspeed timestamp max of yesterday:|:
wind0wind-mmin|0.0|// windspeed min of this month:|:
wind0wind-mmintime|20161101075233|// windspeed timestamp min of this month:|:
wind0wind-mmax|99.7|// windspeed max of this month:|:
wind0wind-mmaxtime|20161101044651|// windspeed timestamp max of this month:|:
wind0wind-ymin|0.0|// windspeed min of this year:|:
wind0wind-ymintime|20161019191755|// windspeed timestamp min of this year:|:
wind0wind-ymax|102.2|// windspeed max of this year:|:
wind0wind-ymaxtime|20161026062013|// windspeed timestamp max of this year:|:
wind0wind-amin|0.0|// windspeed min of all time:|:
wind0wind-amintime|20161019191755|// windspeed timestamp min of all time:|:
wind0wind-amax|102.2|// windspeed max of all time:|:
wind0wind-amaxtime|20161026062013|// windspeed timestamp max of all time:|:
wind0wind-starttime|20161019001302|// windspeed timestamp of first recorded data:|:
wind0avgwind-act|17.3|// average windspeed most recent:|:
wind0avgwind-val5|10.4|// average windspeed value 5 minutes ago:|:
wind0avgwind-val10|10.4|// average windspeed value 10 minutes ago:|:
wind0avgwind-val15|14.8|// average windspeed value 15 minutes ago:|:
wind0avgwind-val30|--|// average windspeed value 30 minutes ago:|:
wind0avgwind-val60|--|// average windspeed value 60 minutes ago:|:
wind0avgwind-hmin|10.4|// average windspeed min of this hour:|:
wind0avgwind-hmintime|20161115222152|// average windspeed timestamp min of this hour:|:
wind0avgwind-hmax|17.3|// average windspeed max of this hour:|:
wind0avgwind-hmaxtime|20161115223152|// average windspeed timestamp max of this hour:|:
wind0avgwind-dmin|7.6|// average windspeed min of today:|:
wind0avgwind-dmintime|20161115012151|// average windspeed timestamp min of today:|:
wind0avgwind-dmax|25.6|// average windspeed max of today:|:
wind0avgwind-dmaxtime|20161115171151|// average windspeed timestamp max of today:|:
wind0avgwind-ydmin|0.0|// average windspeed min of yesterday:|:
wind0avgwind-ydmintime|20161114021151|// average windspeed timestamp min of yesterday:|:
wind0avgwind-ydmax|19.8|// average windspeed max of yesterday:|:
wind0avgwind-ydmaxtime|20161114173151|// average windspeed timestamp max of yesterday:|:
wind0avgwind-mmin|0.0|// average windspeed min of this month:|:
wind0avgwind-mmintime|20161105075151|// average windspeed timestamp min of this month:|:
wind0avgwind-mmax|43.2|// average windspeed max of this month:|:
wind0avgwind-mmaxtime|20161101023151|// average windspeed timestamp max of this month:|:
wind0avgwind-ymin|0.0|// average windspeed min of this year:|:
wind0avgwind-ymintime|20161030054150|// average windspeed timestamp min of this year:|:
wind0avgwind-ymax|68.8|// average windspeed max of this year:|:
wind0avgwind-ymaxtime|20161026062150|// average windspeed timestamp max of this year:|:
wind0avgwind-amin|0.0|// average windspeed min of all time:|:
wind0avgwind-amintime|20161030054150|// average windspeed timestamp min of all time:|:
wind0avgwind-amax|68.8|// average windspeed max of all time:|:
wind0avgwind-amaxtime|20161026062150|// average windspeed timestamp max of all time:|:
wind0avgwind-starttime|20161019001302|// average windspeed timestamp of first recorded data:|:
wind0dir-act|330|// wind direction most recent:|:
wind0dir-val5|90|// wind direction value 5 minutes ago:|:
wind0dir-val10|90|// wind direction value 10 minutes ago:|:
wind0dir-val15|90|// wind direction value 15 minutes ago:|:
wind0dir-val30|--|// wind direction value 30 minutes ago:|:
wind0dir-val60|--|// wind direction value 60 minutes ago:|:
wind0dir-hmin|0|// wind direction min of this hour:|:
wind0dir-hmintime|20161115222512|// wind direction timestamp min of this hour:|:
wind0dir-hmax|358|// wind direction max of this hour:|:
wind0dir-hmaxtime|20161115222644|// wind direction timestamp max of this hour:|:
wind0dir-dmin|0|// wind direction min of today:|:
wind0dir-dmintime|20161115000011|// wind direction timestamp min of today:|:
wind0dir-dmax|359|// wind direction max of today:|:
wind0dir-dmaxtime|20161115000047|// wind direction timestamp max of today:|:
wind0dir-ydmin|0|// wind direction min of yesterday:|:
wind0dir-ydmintime|20161114143724|// wind direction timestamp min of yesterday:|:
wind0dir-ydmax|359|// wind direction max of yesterday:|:
wind0dir-ydmaxtime|20161114143526|// wind direction timestamp max of yesterday:|:
wind0dir-mmin|0|// wind direction min of this month:|:
wind0dir-mmintime|20161101000051|// wind direction timestamp min of this month:|:
wind0dir-mmax|359|// wind direction max of this month:|:
wind0dir-mmaxtime|20161101000911|// wind direction timestamp max of this month:|:
wind0dir-ymin|0|// wind direction min of this year:|:
wind0dir-ymintime|20161019180952|// wind direction timestamp min of this year:|:
wind0dir-ymax|359|// wind direction max of this year:|:
wind0dir-ymaxtime|20161019004617|// wind direction timestamp max of this year:|:
wind0dir-amin|0|// wind direction min of all time:|:
wind0dir-amintime|20161019180952|// wind direction timestamp min of all time:|:
wind0dir-amax|359|// wind direction max of all time:|:
wind0dir-amaxtime|20161019004617|// wind direction timestamp max of all time:|:
wind0dir-starttime|20161019001302|// wind direction timestamp of first recorded data:|:
wind0chill-act|14.1|// outdoor wind chill temperature most recent:|:
wind0chill-val5|14.0|// outdoor wind chill temperature value 5 minutes ago:|:
wind0chill-val10|15.3|// outdoor wind chill temperature value 10 minutes ago:|:
wind0chill-val15|15.7|// outdoor wind chill temperature value 15 minutes ago:|:
wind0chill-val30|--|// outdoor wind chill temperature value 30 minutes ago:|:
wind0chill-val60|--|// outdoor wind chill temperature value 60 minutes ago:|:
wind0chill-hmin|13.3|// outdoor wind chill temperature min of this hour:|:
wind0chill-hmintime|20161115223114|// outdoor wind chill temperature timestamp min of this hour:|:
wind0chill-hmax|15.8|// outdoor wind chill temperature max of this hour:|:
wind0chill-hmaxtime|20161115220001|// outdoor wind chill temperature timestamp max of this hour:|:
wind0chill-dmin|13.1|// outdoor wind chill temperature min of today:|:
wind0chill-dmintime|20161115192854|// outdoor wind chill temperature timestamp min of today:|:
wind0chill-dmax|18.4|// outdoor wind chill temperature max of today:|:
wind0chill-dmaxtime|20161115005658|// outdoor wind chill temperature timestamp max of today:|:
wind0chill-ydmin|17.1|// outdoor wind chill temperature min of yesterday:|:
wind0chill-ydmintime|20161114064744|// outdoor wind chill temperature timestamp min of yesterday:|:
wind0chill-ydmax|21.2|// outdoor wind chill temperature max of yesterday:|:
wind0chill-ydmaxtime|20161114120931|// outdoor wind chill temperature timestamp max of yesterday:|:
wind0chill-mmin|11.3|// outdoor wind chill temperature min of this month:|:
wind0chill-mmintime|20161101055141|// outdoor wind chill temperature timestamp min of this month:|:
wind0chill-mmax|24.6|// outdoor wind chill temperature max of this month:|:
wind0chill-mmaxtime|20161108124911|// outdoor wind chill temperature timestamp max of this month:|:
wind0chill-ymin|10.7|// outdoor wind chill temperature min of this year:|:
wind0chill-ymintime|20161031180818|// outdoor wind chill temperature timestamp min of this year:|:
wind0chill-ymax|24.8|// outdoor wind chill temperature max of this year:|:
wind0chill-ymaxtime|20161024140920|// outdoor wind chill temperature timestamp max of this year:|:
wind0chill-amin|10.7|// outdoor wind chill temperature min of all time:|:
wind0chill-amintime|20161031180818|// outdoor wind chill temperature timestamp min of all time:|:
wind0chill-amax|24.8|// outdoor wind chill temperature max of all time:|:
wind0chill-amaxtime|20161024140920|// outdoor wind chill temperature timestamp max of all time:|:
wind0chill-starttime|20161019001302|// outdoor wind chill temperature timestamp of first recorded data:|:
rain0rate-act|0.0|// rain rate most recent:|:
rain0rate-val5|0.0|// rain rate value 5 minutes ago:|:
rain0rate-val10|0.0|// rain rate value 10 minutes ago:|:
rain0rate-val15|0.0|// rain rate value 15 minutes ago:|:
rain0rate-val30|--|// rain rate value 30 minutes ago:|:
rain0rate-val60|--|// rain rate value 60 minutes ago:|:
rain0rate-hmin|0.0|// rain rate min of this hour:|:
rain0rate-hmintime|20161115220001|// rain rate timestamp min of this hour:|:
rain0rate-hmax|0.0|// rain rate max of this hour:|:
rain0rate-hmaxtime|20161115220001|// rain rate timestamp max of this hour:|:
rain0rate-dmin|0.0|// rain rate min of today:|:
rain0rate-dmintime|20161115000000|// rain rate timestamp min of today:|:
rain0rate-dmax|0.0|// rain rate max of today:|:
rain0rate-dmaxtime|20161115000000|// rain rate timestamp max of today:|:
rain0rate-ydmin|0.0|// rain rate min of yesterday:|:
rain0rate-ydmintime|20161114000001|// rain rate timestamp min of yesterday:|:
rain0rate-ydmax|0.0|// rain rate max of yesterday:|:
rain0rate-ydmaxtime|20161114000001|// rain rate timestamp max of yesterday:|:
rain0rate-mmin|0.0|// rain rate min of this month:|:
rain0rate-mmintime|20161101000000|// rain rate timestamp min of this month:|:
rain0rate-mmax|1.0|// rain rate max of this month:|:
rain0rate-mmaxtime|20161106111539|// rain rate timestamp max of this month:|:
rain0rate-ymin|0.0|// rain rate min of this year:|:
rain0rate-ymintime|20161019001300|// rain rate timestamp min of this year:|:
rain0rate-ymax|13.7|// rain rate max of this year:|:
rain0rate-ymaxtime|20161031115218|// rain rate timestamp max of this year:|:
rain0rate-amin|0.0|// rain rate min of all time:|:
rain0rate-amintime|20161019001300|// rain rate timestamp min of all time:|:
rain0rate-amax|13.7|// rain rate max of all time:|:
rain0rate-amaxtime|20161031115218|// rain rate timestamp max of all time:|:
rain0rate-starttime|20161019001300|// rain rate timestamp of first recorded data:|:
rain0total-act|92.5|// rain most recent:|:
rain0total-val5|92.5|// rain value 5 minutes ago:|:
rain0total-val10|92.5|// rain value 10 minutes ago:|:
rain0total-val15|92.5|// rain value 15 minutes ago:|:
rain0total-val30|--|// rain value 30 minutes ago:|:
rain0total-val60|--|// rain value 60 minutes ago:|:
rain0total-hmin|92.5|// rain min of this hour:|:
rain0total-hmintime|20161019001300|// rain timestamp min of this hour:|:
rain0total-hmax|0.0|// rain max of this hour:|:
rain0total-hmaxtime|20161019001300|// rain timestamp max of this hour:|:
rain0total-dmin|92.5|// rain min of today:|:
rain0total-dmintime|20161019001300|// rain timestamp min of today:|:
rain0total-dmax|0.0|// rain max of today:|:
rain0total-dmaxtime|20161019001300|// rain timestamp max of today:|:
rain0total-ydmin|92.5|// rain min of yesterday:|:
rain0total-ydmintime|--|// rain timestamp min of yesterday:|:
rain0total-ydmax|0.0|// rain max of yesterday:|:
rain0total-ydmaxtime|--|// rain timestamp max of yesterday:|:
rain0total-mmin|92.5|// rain min of this month:|:
rain0total-mmintime|20161019001300|// rain timestamp min of this month:|:
rain0total-mmax|2.3|// rain max of this month:|:
rain0total-mmaxtime|20161019001300|// rain timestamp max of this month:|:
rain0total-ymin|92.5|// rain min of this year:|:
rain0total-ymintime|20161019001300|// rain timestamp min of this year:|:
rain0total-ymax|55.7|// rain max of this year:|:
rain0total-ymaxtime|20161019001300|// rain timestamp max of this year:|:
rain0total-amin|92.5|// rain min of all time:|:
rain0total-amintime|20161019001300|// rain timestamp min of all time:|:
rain0total-amax|55.7|// rain max of all time:|:
rain0total-amaxtime|20161019001300|// rain timestamp max of all time:|:
rain0total-starttime|20161019001300|// rain timestamp of first recorded data:|:
uv0index-act|--|// uv index most recent:|:
uv0index-val5|--|// uv index value 5 minutes ago:|:
uv0index-val10|--|// uv index value 10 minutes ago:|:
uv0index-val15|--|// uv index value 15 minutes ago:|:
uv0index-val30|--|// uv index value 30 minutes ago:|:
uv0index-val60|--|// uv index value 60 minutes ago:|:
uv0index-hmin|--|// uv index min of this hour:|:
uv0index-hmintime|19691220121321|// uv index timestamp min of this hour:|:
uv0index-hmax|--|// uv index max of this hour:|:
uv0index-hmaxtime|19691220121321|// uv index timestamp max of this hour:|:
uv0index-dmin|--|// uv index min of today:|:
uv0index-dmintime|19691220121321|// uv index timestamp min of today:|:
uv0index-dmax|--|// uv index max of today:|:
uv0index-dmaxtime|19691220121321|// uv index timestamp max of today:|:
uv0index-ydmin|--|// uv index min of yesterday:|:
uv0index-ydmintime|19691220121321|// uv index timestamp min of yesterday:|:
uv0index-ydmax|--|// uv index max of yesterday:|:
uv0index-ydmaxtime|19691220121321|// uv index timestamp max of yesterday:|:
uv0index-mmin|--|// uv index min of this month:|:
uv0index-mmintime|19691220121321|// uv index timestamp min of this month:|:
uv0index-mmax|--|// uv index max of this month:|:
uv0index-mmaxtime|19691220121321|// uv index timestamp max of this month:|:
uv0index-ymin|--|// uv index min of this year:|:
uv0index-ymintime|19691220121321|// uv index timestamp min of this year:|:
uv0index-ymax|--|// uv index max of this year:|:
uv0index-ymaxtime|19691220121321|// uv index timestamp max of this year:|:
uv0index-amin|--|// uv index min of all time:|:
uv0index-amintime|19691220121321|// uv index timestamp min of all time:|:
uv0index-amax|--|// uv index max of all time:|:
uv0index-amaxtime|19691220121321|// uv index timestamp max of all time:|:
uv0index-starttime|19691220121321|// uv index timestamp of first recorded data:|:
sol0rad-act|--|// solar rad most recent:|:
sol0rad-val5|--|// solar rad value 5 minutes ago:|:
sol0rad-val10|--|// solar rad value 10 minutes ago:|:
sol0rad-val15|--|// solar rad value 15 minutes ago:|:
sol0rad-val30|--|// solar rad value 30 minutes ago:|:
sol0rad-val60|--|// solar rad value 60 minutes ago:|:
sol0rad-hmin|--|// solar rad min of this hour:|:
sol0rad-hmintime|19691220121321|// solar rad timestamp min of this hour:|:
sol0rad-hmax|--|// solar rad max of this hour:|:
sol0rad-hmaxtime|19691220121321|// solar rad timestamp max of this hour:|:
sol0rad-dmin|--|// solar rad min of today:|:
sol0rad-dmintime|19691220121321|// solar rad timestamp min of today:|:
sol0rad-dmax|--|// solar rad max of today:|:
sol0rad-dmaxtime|19691220121321|// solar rad timestamp max of today:|:
sol0rad-ydmin|--|// solar rad min of yesterday:|:
sol0rad-ydmintime|19691220121321|// solar rad timestamp min of yesterday:|:
sol0rad-ydmax|--|// solar rad max of yesterday:|:
sol0rad-ydmaxtime|19691220121321|// solar rad timestamp max of yesterday:|:
sol0rad-mmin|--|// solar rad min of this month:|:
sol0rad-mmintime|19691220121321|// solar rad timestamp min of this month:|:
sol0rad-mmax|--|// solar rad max of this month:|:
sol0rad-mmaxtime|19691220121321|// solar rad timestamp max of this month:|:
sol0rad-ymin|--|// solar rad min of this year:|:
sol0rad-ymintime|19691220121321|// solar rad timestamp min of this year:|:
sol0rad-ymax|--|// solar rad max of this year:|:
sol0rad-ymaxtime|19691220121321|// solar rad timestamp max of this year:|:
sol0rad-amin|--|// solar rad min of all time:|:
sol0rad-amintime|19691220121321|// solar rad timestamp min of all time:|:
sol0rad-amax|--|// solar rad max of all time:|:
sol0rad-amaxtime|19691220121321|// solar rad timestamp max of all time:|:
sol0rad-starttime|19691220121321|// solar rad timestamp of first recorded data:|:
rain0total-daysum|0.0|// rain total today:|:
rain0total-monthsum|2.3|// rain total this month:|:
rain0total-yearsum|55.7|// rain total this year:|:
rain0total-ydaysum|0.0|// rain total yesterday:|:
rain0total-sum60|0.0|// rain total last 60 minutes:|:
'; // END_OF_RAW_DATA_LINES;

// end of generation script

// put data in  array
//
$WX = array();
global $WX;
$WXComment = array();
$data = explode(":|:",$rawdatalines);
$nscanned = 0;
foreach ($data as $v => $line) {
  list($vname,$vval,$vcomment) = explode("|",trim($line).'|||');
  if ($vname <> "" and strpos($vval,'$') === false) {
    $WX[$vname] = trim($vval);
    if($vcomment <> "") { $WXComment[$vname] = trim($vcomment); }
  }
  $nscanned++;
}
if(isset($_REQUEST['debug'])) {
  print "<!-- loaded $nscanned $WXsoftware \$WX[] entries -->\n";
}

if (isset($_REQUEST["sce"]) and strtolower($_REQUEST["sce"]) == "dump" ) {

  print "<pre>\n";
  print "// \$WX[] array size = $nscanned entries.\n";
  foreach ($WX as $key => $val) {
	  $t =  "\$WX['$key'] = '$val';";
	  if(isset($WXComment[$key])) {$t .=  " $WXComment[$key]"; }
	  print "$t\n";
  }
  print "</pre>\n";

}
if(file_exists("MB-defs.php")) { include_once("MB-defs.php"); }
?>