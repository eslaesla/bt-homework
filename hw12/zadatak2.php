<?php 
if(isset($_GET["visinazida"]))
$vz=$_GET["visinazida"];
if(isset($_GET["sirinazida"]))
$sz=$_GET["sirinazida"];

if(isset($_GET["visinaplocice"]))
$vp=$_GET["visinaplocice"];
if(isset($_GET["sirinaplocice"]))
$sp=$_GET["sirinaplocice"];

$povzida=$vz*$sz;
$povplocice=$vp*$sp;

$br=$povzida / $povplocice;
$br=(round($br,1));
echo "broj plocica potrebnih da se poploca zid $br";




?>