/* Danish settings for ajaxWDwx.js */

var langPauseMsg = 'Opdateringer pauserede - genoplader side for at starte'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Januar","Februar","Marts","April","Maj",
			"Juni","Juli","August","September","Oktober","November","December");
var langDays = new Array ( "S�n","Man","Tir","Ons","Tor","Fre","L�r","S�n");	

var langBaroTrend = new Array (
 "Stabil", "Langsomt stigende", "Hurtigt stigende", "Langsomt faldende", "Hurtigt faldende");

var langUVWords = new Array (
 "Ingen", "Lav", "Moderat", "H�j",
 "Meget&nbsp;H�j", /* be sure to include &nbsp; for space */
 "Ekstremt" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Vindstille", "N�sten stille", "Svag vind", "Let vind", "J�vn vind", "Frisk vind",
 "H�rd vind", "Stiv kuling", "H�rd kuling", "Stormende kuling", "Storm",
 "St�rk storm", "Orkan"
);


var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"N", "NN�", "N�", "�N�", 
	"�", "�S�", "S�", "SS�", 
	"S", "SSV", "SV", "VSV", 
	"V", "VNV", "NV", "NNV");

var langWindCalm = 'Vindstille';

var langGustNone = 'Ingen';

var langWindFrom = 'Vind fra '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Stigende %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */

var langBaroFalling = 'Faldende %s ';

var langBaroPerHour = '/timen'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'Nu: '; /* used on alt/title tags for thermometer */

var langThermoMax     = 'Max: ';

var langThermoMin     = 'Min: ';

var langTempRising = 'Varmere %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */

var langTempFalling = 'Koldere %s ';

var langTempLastHour = ' end sidste time.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 'Ukendt', 'Ekstrem hede fare!!', 'Hede fare!', 'Ekstrem hede', 'Ekstremt varmt', 'Ubehageligt varmt',
 'Meget varmt', 'Varmt', 'Komfortabelt', 'K�ligt', 'Koldt', 'Ubehageligt koldt', 'Meget koldt', 'Ekstremt koldt' );

