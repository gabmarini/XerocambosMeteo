/* Slovenian text for ajaxWDwx.js by Marko of http://www.okroglovreme.com/  */

var langPauseMsg = 'za podatke "v �ivo", osve�ite stran'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Januar","Februar","Marec","April","Maj",
			"Junij","Julij","Avgust","September","Oktober","November","December");
var langDays = new Array ( "Nedelja","Ponedeljek","Torek","Sreda","�etrtek","Petek","Sobota","Nedelja");	

var langBaroTrend = new Array (
 "enakomeren", "po�asi rase", "hitro rase", "po�asi pada", "hitro pada");

var langUVWords = new Array (
 "Ni podatka", "Nizek", "Srednji", "Visok",
 "Zelo&nbsp;visok", /* be sure to include &nbsp; for space */
 "Ekstremen" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Ti�ina", "Lahek vetri�", "Vetri�", "Slab veter", "Zmeren veter",
 "Zmerno mo�an veter", "Mo�an veter", "Zelo mo�an veter", "Viharni veter", "Vihar", "Mo�an vihar",
 "Orkanski veter", "Orkan"
);

var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"S", "SSV", "SV", "VSV", 
	"V", "VJV", "JV", "JJV", 
	"J", "JJZ", "JZ", "ZJZ", 
	"Z", "ZSZ", "SZ", "SSZ");

var langWindCalm = 'brezvetrje';
var langGustNone = 'ni sunkov vetra';
var langWindFrom = 'veter iz smeri '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = '%s rase '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = '%s pada ';
var langBaroPerHour = '/uro.'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'Trenutno: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'Max: ';
var langThermoMin     = 'Min: ';

var langTempRising = '%s topleje '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling ='%s hladneje ';
var langTempLastHour = ' kot v zadnji uri.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 'Ni podatka', 'Izjemno nevarna vro�ina', 'Zelo nevarna vro�ina', 'Nevarna vro�ina', 'Zelo vro�e', 'Neudobna vro�ina',
 'Vro�e', 'Toplo', 'Prijetno', 'Hladno', 'Mrzlo', 'Zelo mrzlo', 'Ledeno', 'Nevarno ledeno' );


