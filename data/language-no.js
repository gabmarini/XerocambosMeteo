/* Norwegian settings for ajaxWDwx.js */

var langPauseMsg = 'Oppdateringer stanset - restart ved � oppdatere siden'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Januar","Februar","Mars","April","Mai",
			"Juni","Juli","August","September","Oktober","November","Desember");
var langDays = new Array ( "S�n","Man","Tir","Ons","Tor","Fre","L�r","S�n");	

var langBaroTrend = new Array (
 "Stabilt", "Langsomt stigende", "Kraftig stigende", "Langsomt fallende", "Kraftigt fallende");

var langUVWords = new Array (
 "Ingen", "Lav", "Moderat", "H�y",
 "Sv�rt&nbsp;H�y", /* be sure to include &nbsp; for space */
 "Ekstrem" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Stille", "Flau vind", "Svak vind", "Lett bris", "Laber bris", "Frisk bris",
 "Liten kuling", "Stiv kuling", "Sterk kuling", "Liten storm", "Full storm",
 "Sterk storm", "Orkan"
);


var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"N", "NN�", "N�", "�N�", 
	"�", "�S�", "S�", "SS�", 
	"S", "SSV", "SV", "VSV", 
	"V", "VNV", "NV", "NNV");

var langHeatWords = new Array ( /* used for Heat Color Word */
'Ukjent', 'Ekstrem hete fare!!', 'Hete fare!', 'Ekstremt hett', 'Ekstremt varmt', 'Ubehagelig varmt',
'Sv�rt varmt', 'Varmt', 'Komfortabelt', 'Kj�ligt', 'Kaldt', 'Ubehagelig kaldt', 'Sv�rt kaldt', 'Ekstremt kaldt' );


var langWindCalm = 'Stille';

var langGustNone = 'Ingen';

var langWindFrom = 'Vind fra '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Stigende: + %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */

var langBaroFalling = 'Fallende: - %s ';

var langBaroPerHour = '/time'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'N�: '; /* used on alt/title tags for thermometer */

var langThermoMax     = 'Max: ';

var langThermoMin     = 'Min: ';

var langTempRising = 'Varmere: + %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */

var langTempFalling = 'Kaldere: - %s ';

var langTempLastHour = ' siste time.';
