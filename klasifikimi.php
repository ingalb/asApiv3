<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
//$sezoni= $_GET[sezoni];
$app_id = $_GET['app_id'];

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/112-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/121-superliga.html?format=raw&division=40&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/114-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/115-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
    break;
case "109":	
	$url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/109.html?format=raw&division=24&app_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/ranking/$id-boterori-2014-brazil.html?format=raw&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;
curl_close($ch);
?>
