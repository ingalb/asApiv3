<?php
header ('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
$ekipi = $_GET['ekipi'];
$type = $_GET['type'];
$app_id = $_GET['app_id'];

if($ekipi=="kombetarja")
{
	$ekipi = 4;
}	

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/".$id."/4.html?format=raw&type=".$type."&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/121/13.html?format=raw&type=".$type."&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/121/".$ekipi.".html?format=raw&type=".$type."&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/96/".$ekipi.".html?format=raw&type=".$type."&app_id=".$app_id;
    break;
case "kupa":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/123/".$ekipi.".html?format=raw&type=".$type."&app_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/roster/".$id."/".$ekipi.".html?format=raw&type=".$type."&app_id=".$app_id;
}
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
echo $content;
?>
