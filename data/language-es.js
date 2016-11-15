/* Spanish text for ajaxWDwx.js */

var langPauseMsg = 'Actualizaci�n en pausa - Recarga la p�gina para comenzar de nuevo'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "Enero","Febrero","Marzo","Abril","Mayo",
			"Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var langDays = new Array ( "S�b", "Dom", "Lun", "Mar", "Mi�r", "Jue", "Vi�r", "S�b");	
// 
var langBaroTrend = new Array (
 "Estable", "Subiendo lentamente", "Subiendo r�pidamente", "Bajando lentamente", "Bajando r�pidamente");

var langUVWords = new Array (
 "Nulo", "Bajo", "Medio", "Alto",
 "Muy&nbsp;alto", /* be sure to include &nbsp; for space */
 "Extremo" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "Calma", "Ventolina", "Brisa muy d�bil", "Brisa d�bil", "Brisa moderada", "Brisa fresca",
 "Brisa fuerte", "Viento fuerte", "Viento duro", "Muy duro", "Temporal",
 "Borrasca", "Hurac�n"
);

var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"N", "NNE", "NE", "ENE", 
	"E", "ESE", "SE", "SSE", 
	"S", "SSO", "SO", "OSO", 
	"O", "ONO", "NO", "NNO");

var langWindCalm = 'Calma';
var langGustNone = 'Nula';
var langWindFrom = 'Viento del '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Subiendo %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = 'Bajando %s ';
var langBaroPerHour = '/hora.'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'Actual: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'M�x: ';
var langThermoMin     = 'M�n: ';

var langTempRising = '%s m�s'; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling = '%s menos';
var langTempLastHour = ' que en la �ltima hora.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 'Desconocido', 'Calor insoportable', 'Ahogo', 'Bochorno extremo', 'Bochorno', 'Calor extremo',
 'Mucho calor', 'Calor', 'Agradable', 'Fresco', 'Fr�o', 'Fr�o intenso', 'Helada', 'Fr�o polar' );

