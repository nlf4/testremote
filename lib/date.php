<?php
//date_default_timezone_set("Europe/Brussels");
//setlocale(LC_TIME, 'nl_NL');
//
//de huidige systeemdatumtijd
$now = time();
var_dump($now);

////de huidige datum
$strdate = date("d/m/Y", $now);
var_dump($strdate);

////de actuele tijd
//$strtime = date("H:i:s", $now);
//var_dump($strtime);
//
////een array maken met alle mogelijke info over de huidige systeemdatumtijd
//$mydate = getdate($now);
//var_dump($mydate);
//
////een timestamp maken voor een opgegeven datumtijd
/// //H,i,s,m,d,Y
//$ts = mktime(14,30,0,3,21,2019);
//var_dump($ts);
//
////die datumtijd presentabel weergeven
//$strdate = date("l d/m/Y h:i:s", $ts);
//var_dump($strdate);
//
//twee weken later
$ts = mktime(14,30,0,3,21+14,2019);
$strdate = date("l d/m/Y h:i:s", $ts);
print 'twee weken later: ';
var_dump($strdate);

//twee weken later
$ts = mktime(14,30,0,3+3,0,2019);
$strdate = date("l d/m/Y h:i:s", $ts);
print 'laatste dag van vorige maand: ';
var_dump($strdate);
//
////laatste dag vorige maand
//$ts = mktime(14,30,0,3,0,2019);
//$strdate = date("l d/m/Y h:i:s", $ts);
//var_dump($strdate);
//
////strtotime functies
//echo strtotime("now"), "<br>";
//echo strtotime("10 September 2000"), "<br>";
//echo strtotime("+1 day"), "<br>";
//echo strtotime("+1 week"), "<br>";
//echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
//echo strtotime("next Thursday"), "<br>";
//echo strtotime("last Monday"), "<br>";
