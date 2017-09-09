<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
//$sezoni= $_GET[sezoni];
$division = $_GET['division'];
$app_id = $_GET['app_id'];

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/102-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/105-superliga.html?format=raw&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/98-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/96-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/".$id.".html?format=raw&division=".$division."&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;
curl_close($ch);
?>
