<?php
header ('Access-Control-Allow-Origin: *');
 $id = $_GET['id'];
 $ekipi = $_GET['ekipi'];
 $app_id = $_GET['app_id'];

 if($ekipi == "kombetarja")
 {
	$ekipi = 4;
 }
 elseif($ekipi == "vllaznia")
 {
	$ekipi = 13; 
 }

switch ($id)
{
case "kombetarja":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/112/".$ekipi.".html?format=raw&app_id=".$app_id;
  break;
case "superliga":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/125/".$ekipi.".html?format=raw&app_id=".$app_id;
  break;
case "superliga1":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/125/".$ekipi.".html?format=raw&app_id=".$app_id;
  $url1="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/126/".$ekipi.".html?format=raw&app_id=".$app_id;
  break;
case "109":
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/".$id."/".$ekipi.".html?format=raw&app_id=".$app_id;
//  $url1="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/112/".$ekipi.".html?format=raw&app_id=".$app_id;
//  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/9/".$ekipi.".html?format=raw&app_id=".$app_id;
  break;
case "kategoria1":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/98/".$ekipi.".html?format=raw&app_id=".$app_id;
    break;
case "kosova":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/96/".$ekipi.".html?format=raw&app_id=".$app_id;
    break;
case "kupa":
    $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/126/".$ekipi.".html?format=raw&app_id=".$app_id;
    break;
case "livescore":
    $url="http://www.albaniasoccer.com/livescore.html?format=raw&pp_id=".$app_id;
    break;
default:
  $url="http://www.albaniasoccer.com/statistika/shqiperi/kombetarja/teamplan/".$id."/".$ekipi.".html?format=raw&app_id=".$app_id;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
$content = str_replace('][', ',', $content);

curl_close($ch);

header('Content-Type: application/json; Charset=ISO-8859-1');

//echo $content;

if($id=="superliga1") // || $id=="109")
{

$ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_BINARYTRANSFER, true);
$content1 = curl_exec($ch1);
$content1 = str_replace('][', ',', $content1);

//echo $content;

curl_close($ch1);

$f= '{"data":';
$e = '}';

$string = str_replace("﻿","", $content);
//$string = str_replace("\u00eb","&euml;", $string);
$jdata = (json_decode($f.$string.$e, true));

$arr1 = $jdata['data'];

$string1 = str_replace("﻿","", $content1);
//$string1 = str_replace("\u00eb","&euml;", $string1);
$jdata1 = (json_decode($f.$string1.$e, true));

$arr2 = $jdata1['data'];

$arr = array_merge($arr1, $arr2);

usort($arr, function($dateArray1, $dateArray2) {

        $now = new \DateTime();

        $dateA = new \DateTime($dateArray1['date']);
        $dateB = new \DateTime($dateArray2['date']);

        $dayDifferenceA = abs($dateA->diff($now)->days);
        $dayDifferenceB = abs($dateB->diff($now)->days);

        if($dayDifferenceA == $dayDifferenceB) {
            return 0;
        }

        return ($dayDifferenceA < $dayDifferenceB) ? -1 : 1;
    });

   //print_r($jdata);
   $output = array_slice($arr, 0, 4);
   echo json_encode($output);

}
else{
  echo $content;
}

?>
