<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
$ekipi = $_GET['ekipi'];
$player = $_GET['lojtari'];
 $app_id = $_GET['app_id'];

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/102/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/111/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/98/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/96/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
    break;
case "kupa":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/95/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/player/".$id."/".$ekipi."/".$player.".html?format=raw&app_id=".$app_id;
}
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
echo $content;
curl_close($ch);
?>
