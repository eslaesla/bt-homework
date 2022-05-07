<?php

if(isset($_GET["tezina"]))
$tezina=$_GET["tezina"];
if(isset($_GET["godine"]))
$godine=$_GET["godine"];
if(isset($_GET["zanimanje"]))
$zanimanje=$_GET["zanimanje"];

$max=$tezina*$godine*$zanimanje;
echo "Maksimalan broj kalorija koji smete da unesete je $max";

?>