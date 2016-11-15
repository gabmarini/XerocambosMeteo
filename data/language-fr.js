/* English text for ajaxWDwx.js */

var langPauseMsg = 'Mises � jour suspendues - pour d�marrer, recharger la page'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "janvier","f�vrier","mars","avril","mai",
			"juin","juillet","ao�t","septembre","octobre","novembre","d�cembre");
var langDays = new Array ( "dim","lun","mar","mer","jeu","ven","sam","dim");	

var langBaroTrend = new Array (
 "Soutenu", "Monte lentement", "Monte rapidment", "Tombe lentement", "Tombe rapidement");

var langUVWords = new Array (
 "aucun", "faible", "moyen", "�lev�",
 "tr�s&nbsp;�lev�", /* be sure to include &nbsp; for space */
 "extr�me" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "calme", "tr�s l�g�re brise", "l�g�re brise", "petite brise", "jolie brise", "bonne brise",
 "vent frais", "grand frais", "coup de vent", "fort coup de vent", "temp�te",
 "violente temp�te", "ouragan"
);

var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"N", "NNE", "NE", "ENE", 
	"E", "ESE", "SE", "SSE", 
	"S", "SSO", "SO", "OSO", 
	"O", "ONO", "NO", "NNO");

var langWindCalm = 'calme';
var langGustNone = 'aucune';
var langWindFrom = 'vent '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = 'Monte %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = 'Baisse %s ';
var langBaroPerHour = '/heure.'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = 'actuellement: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'maxi: ';
var langThermoMin     = 'mini: ';

var langTempRising = 'plus chaud %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling = 'plus froid %s ';
var langTempLastHour = " qu'il y a une heure.";

var langHeatWords = new Array ( /* used for Heat Color Word */
 'inconnu', 'extr�me danger de chaleur', 'danger de chaleur', 'fort risque de chaleur', 'extr�mement chaud', 'inconfortablement chaud',
 'chaud', 'mod�r�ment chaud', 'confortable', 'frais', 'froid', 'inconfortablement froid', 'tr�s froid', 'extr�mement froid' );

