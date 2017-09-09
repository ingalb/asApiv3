<?php
header ('Access-Control-Allow-Origin: *');

$id = 109;
$division = 0;
$division = $_GET['division'];
$java = $_GET['java'];
$type = $_GET['type'];
$id = $_GET['id'];
$app_id = $_GET['app_id'];

switch ($type)
{
case 0:
  //get current round results
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id.".html?format=raw&type=0&division=".$division."&r=".$java."&app_id=".$app_id;
  break;
case 2:
    //get games ordered by date for division only
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id.".html?format=raw&type=2&division=".$division."&r=".$java."&app_id=".$app_id;
    break;
case 3:
  //get all games from given division
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id.".html?format=raw&type=3&division=".$division."&r=".$java."&app_id=".$app_id;
  break;
case 4:
  //get all games from given division ordered by date
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id.".html?format=raw&type=4&division=".$division."&r=".$java."&app_id=".$app_id;
  break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id.".html?format=raw&type=".$type."&r=".$java."&division=".$division."&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);

echo $content;

?>
