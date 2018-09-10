<?php
header ('Access-Control-Allow-Origin: *');
$id = 1;

$id = $_GET[id];
$app_id = $_GET['app_id'];

switch ($id)
{
case "1": //Superliga
     $content = '[
        { "text": "Kategoria 1 2018-19", "value": 121 },
	{ "text": "Superliga 2017-18", "value": 117 },
	{ "text": "Superliga 2016-17", "value": 111 },
	{ "text": "Superliga 2015-16", "value": 105 },
        { "text": "Superliga 2014-15", "value": 100 },
        { "text": "Superliga 2013-14", "value": 97 },
        { "text": "Superliga 2012-13", "value": 86 },
        { "text": "Superliga 2011-12", "value": 79 },
        { "text": "Superliga 2010-11", "value": 15 },
        { "text": "Superliga 2009-10", "value": 10 }]';
  break;
case "2": //Kupa
  $content = '[
        { "text": "Kupa e Shqiperise 2018-19", "value": 123 },
        { "text": "Kupa e Shqiperise 2017-18", "value": 118 },
        { "text": "Kupa e Shqiperise 2016-17", "value": 113 },
        { "text": "Kupa e Shqiperise 2015-16", "value": 106 },
        { "text": "Kupa e Shqiperise 2014-15", "value": 104 },
        { "text": "Kupa e Shqiperise 2013-14", "value": 99 },
        { "text": "Kupa e Shqiperise 2011-12", "value": 83 },
        { "text": "Kupa e Shqiperise 2010-11", "value": 13 },
        { "text": "Kupa e Shqiperise 2009-10", "value": 8 }]';
  break;
case "3": //Kategoria 1
   $content = '[
        { "text": "Kategoria 1 2018-19", "value": 121 },
        { "text": "Play-Off 2016-17", "value": 116 },
        { "text": "Kategoria 1 2016-17", "value": 114 },
	{ "text": "Kategoria 1 2015-16", "value": 107 },
        { "text": "Kategoria 1 2014-15", "value": 101 },
        { "text": "Kategoria 1 2013-14", "value": 98 },
        { "text": "Kategoria 1 2012-13", "value": 92 },
        { "text": "Kategoria 1 2011-12", "value": 80 },
        { "text": "Kategoria 1 2010-11", "value": 11 },
        { "text": "Kategoria 1 2009-10", "value": 6 }]';
   break;
case "4":	
   $content = '[
       { "text": "Kualifikimi Boterori Rusi 2018", "value": 112 },
       { "text": "Euro France 2016", "value": 109 },
       { "text": "Kualifikimi France 2016", "value": 102 },
       { "text": "Kualifikimi Boterori Brazil 2014", "value": 94 },
       { "text": "Kualifikimi Euro 2012", "value": 70 },
       { "text": "Kualifikimi Boterori 2010", "value": 2 }]';
	break;
case "5":	
   $content = '[
       { "text": "Superliga Kosove 2016-17", "value": 115 },
       { "text": "Superliga Kosove 2015-16", "value": 108 },
       { "text": "Superliga Kosove 2014-15", "value": 103 },
       { "text": "Superliga Kosove 2013-14", "value": 96 },
       { "text": "Superliga Kosove 2012-13", "value": 93 },
       { "text": "Superliga Kosove 2011-12", "value": 81 },
       { "text": "Superliga Kosove 2010-11", "value": 12 },
       { "text": "Superliga Kosove 2009-10", "value": 7 }]';
	break;
default:
$content = '[
        { "text": "Kategoria 1 2018-19", "value": 121 },
        { "text": "Superliga 2017-18", "value": 117 },
        { "text": "Superliga 2016-17", "value": 111 },
	{ "text": "Superliga 2015-16", "value": 105 },
        { "text": "Superliga 2014-15", "value": 100 },
        { "text": "Superliga 2013-14", "value": 97 },
        { "text": "Superliga 2012-13", "value": 86 },
        { "text": "Superliga 2011-12", "value": 79 },
        { "text": "Superliga 2010-11", "value": 15 },
        { "text": "Superliga 2009-10", "value": 10 }]';
}

echo $content;
?>
