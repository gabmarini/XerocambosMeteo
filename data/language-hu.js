/* English text for ajaxWDwx.js */

var langPauseMsg = 'Updates paused - reload page to start'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Janu�r","Febru�r","M�rcius","�prilis","M�jus",
			"Junius","J�lius","Augusztus","Szeptember","Oct�ber","November","December");
var langDays = new Array ( "Nap","H�tf�","Kedd","Szerda","Cs�t�rt�k","P�ntek","Szombat","Nap");

var langBaroTrend = new Array (
 "Nem v�ltozik", "Emelkedik", "Emelkedik", "Cs�kken", "Cs�kken");

var langUVWords = new Array (
 "Nincs", "Alacsony", "Norm�l", "Magas",
 "Nagyon&nbsp;Magas", /* be sure to include &nbsp; for space */
 "Extr�m" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Sz�lcsend", "Leheletszer�", "", "Szell�", "Gyenge", "M�rs�kelt",
 "�l�nk", "Er�s", "Igen er�s", "Viharos", "Vihar",
 "Er�s vihar", "Sz�lvihar"
);

var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
    "N", "NNE", "NE", "ENE",
	"E", "ESE", "SE", "SSE",
	"S", "SSW", "SW", "WSW",
	"W", "WNW", "NW", "NNW");

var langWindCalm = 'calm';
var langGustNone = 'NINCS';
var langWindFrom = 'Wind from '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Emelkedik %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = 'Cs�kken %s ';
var langBaroPerHour = '/�ra.'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'Currently: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'Max: ';
var langThermoMin     = 'Min: ';

var langTempRising = 'Melegebb %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling = 'H�v�sebb %s ';
var langTempLastHour = ' Az elmult �r�ban.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 'Unknown', 'Extr�m h�vesz�ly', 'H�s�g vesz�ly', 'Extr�m meleg', 'Rendkiv�li meleg', 'H�s�g',
 'Nagyon meleg', 'Meleg', 'Kellemes', 'H�v�s', 'Nagyon H�v�s', 'Hideg', 'Extr�m hideg', 'Extreme Cold' );

