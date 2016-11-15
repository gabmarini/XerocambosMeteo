/* Bulgarian text for ajaxWDwx.js */

var langPauseMsg = 'Updates paused - reload page to start'; // substitute this for ajaxindicator when
                             // maxupdates has been reached and updating paused.

var langMonths = new Array ( "������","��������","����","�����","���",
			"���","���","������","���������","��������","�������","��������");
var langDays = new Array ( "���","���","���","���","���","���","���","���");	

var langBaroTrend = new Array (
 "���������", "����� ���������� ��", "����� ��������� ��", "����� ���������� ��", "����� ���������� ��");

var langUVWords = new Array (
 "��� �������", "�����", "������", "�����",
 "�����&nbsp;�����", /* be sure to include &nbsp; for space */
 "���������" );

var langBeaufort = new Array ( /* Beaufort 0 to 12 in array */
 "����", "��� �����", "��� ����", "���� ����", "������ ����", "���� ����",
 "����� ����", "������� �����", "����� �����", "����� ����� �����", "����",
 "����� ����", "������"
);

var langWindDir = new Array( /* used for alt and title tags on wind dir arrow and wind direction display */
	"�", "���", "��", "���", 
	"�", "�θ", "θ", "�θ", 
	"�", "�η", "η", "�η", 
	"�", "���", "��", "���");

var langWindCalm = '����';
var langGustNone = '���';
var langWindFrom = '����� �� '; /* used on alt/title tags on wind direction arrow*/

var langBaroRising = '��������� �� %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langBaroFalling = '���������� �� %s ';
var langBaroPerHour = '/�.'; /* will be assembled as rising/falling + value + uom + perhour text */

var langThermoCurrently = '������: '; /* used on alt/title tags for thermometer */
var langThermoMax     = 'Max: ';
var langThermoMin     = 'Min: ';

var langTempRising = '��-����� %s '; /* used for trend arrow alt/title tags .. %s marks where value will be placed */
var langTempFalling = '��-������� %s ';
var langTempLastHour = ' � ��������� � ����. ���.';

var langHeatWords = new Array ( /* used for Heat Color Word */
 '������', '�������� - ����. ������', '�������� �� ��������', '�������� - ����. ������', '����. ������', '��������� ������',
 '������', '�����', '�������', '������', '�������', '��������� �������', '����� �������', '����. �������' );
