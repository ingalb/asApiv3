<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
$java = $_GET['java'];

switch ($id)
{
case "kombetarja":
  $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/94-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/117-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/92-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/93-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
case "kupa":
    $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/95-boterori-2014-brazil/".$java.".html?format=raw&app_id=".$app_id;
    break;
default:
  $url="http://albaniasoccer.com/statistika/shqiperi/kombetarja/results/".$id."/".$java.".html?format=raw&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;

//save to file
//$fp = fopen('kalendari-'.$id.'.json', 'w');
//fwrite($fp, $content);
//fclose($fp);
//save to file json end
curl_close($ch);
?>
