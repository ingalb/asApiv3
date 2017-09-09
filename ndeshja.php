<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
$java = $_GET['ndeshja'];
$app_id = $_GET['app_id'];

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/102-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/111/".$java.".html?format=raw&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/92-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/93-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
case "kupa":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/95-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/matchreport/".$id."/".$java.".html?format=raw&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;

curl_close($ch);
?>
