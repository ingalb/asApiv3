<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
$limit = $_GET['limit'];
//$sezoni= $_GET[sezoni];


switch ($id)
{
case "euro2016":
  $url="http://www.albaniasoccer.com/lajme/shqiperi/1.html?format=raw&limit=$limit";
  break;
case "kombetarja":
  $url="http://www.albaniasoccer.com/lajme/shqiperi/1.html?format=raw&limit=$limit";
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/lajme/shqiperi/3.html?format=raw&limit=$limit";
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/lajme/shqiperi/35.html?format=raw&limit=$limit";
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/lajme/kosova.html?format=raw&limit=$limit";
    break;
default:
  $url="http://www.albaniasoccer.com/lajme/shqiperi/$id.html?format=raw&limit=$limit";
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;
curl_close($ch);
?>
