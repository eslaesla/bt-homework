<?php 


function filtriranjemaila(array $niz): array
{
foreach ($niz as $key=>$value) 
{
    if(!str_contains($value,"@"))
    {
        unset($niz[$key]);
    }
    
}
return $niz;
}


 $niz= ["eslaesadsadsla@gmail.com",'sasa@sadasd.com','sadsad','12312','231sadasf',"21qe@adsad"];

foreach(filtriranjemaila($niz) as $mail)
{

echo $mail . "<br>";
}


?>