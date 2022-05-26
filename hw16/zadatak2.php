<?php 


// Mnogo sam se iznapeo sa zadatak, sa Foreach ne moze da se offsetuje petlja, sa FOR moze.
function racunskeoperacije($niz, $default="+")
{
    $sub=NULL;
     if($default=="+"){
        $sub=array_sum($niz);
     }
     if($default=='-'){
         $sub=$niz[0];
         for ($i = 1; $i < count($niz); $i++) {
        $sub -= $niz[$i];
         }
      
     }
     elseif ($default=='*') {
        $sub=$niz[0];
        for ($i = 1; $i < count($niz); $i++) {
        $sub=$sub* $niz[$i];
        }

     }
     elseif ($default=='/') {
         $sub=$niz[0];
         for ($i = 1; $i < count($niz); $i++){
             $sub=$sub/$niz[$i];
         }
     }
     return $sub;
     
 }

$niz=[9,3,2];
echo racunskeoperacije($niz,"-");




?>