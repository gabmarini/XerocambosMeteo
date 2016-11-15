/* Swedish settings for ajaxWDwx.js */

var langPauseMsg = 'Uppdateringarna pausade - ladda om sidan f�r att �teruppta'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Januari","Februari","Mars","April","Maj",
			"Juni","Juli","Augusti","September","Oktober","November","December");
var langDays = new Array ( "S�n","M�n","Tis","Ons","Tor","Fre","L�r","S�n");	

var langBaroTrend = new Array (
 "Stabilt", "L�ngsamt stigande", "Snabbt stigande", "L�ngsamt fallande", "Snabbt fallande");

var langUVWords = new Array (
 "Ingen", "L�g", "Medel", "H�g",
 "Mycket&nbsp;H�gt", /* be sure to include &nbsp; for space */
 "Extremt" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Vindstilla", "N�stan stilla", "Svag vind", "L�tt vind", "M�ttlig vind", "Frisk vind",
 "H�rd vind", "Styv kuling", "H�rd kuling", "Halv storm", "Storm",
 "Sv�r storm", "Orkan"
);


var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"N", "NNO", "NO", "ONO", 
	"O", "OSO", "SO", "SSO", 
	"S", "SSV", "SV", "VSV", 
	"V", "VNV", "NV", "NNV");

var langWindCalm = 'Vindstilla';
var langGustNone = 'Ingen';
var langWindFrom = 'Vind fr�n '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Stigande %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = 'Fallande %s ';
var langBaroPerHour = '/tim'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'Nu: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'Max: ';
var langThermoMin     = 'Min: ';

var langTempRising = 'Varmare %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling = 'Kallare %s ';
var langTempLastHour = ' sista timmen.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 'Ok�nt', 'Extrem v�rme fara', 'Hetta', 'Extrem hetta', 'Extremt varmt', 'V�ldigt varmt',
 'Mycket varmt', 'Varmt', 'Komfortabelt', 'Kyligt', 'Kallt', 'V�ldigt kallt', 'Mycket kallt', 'Extremt kallt' );