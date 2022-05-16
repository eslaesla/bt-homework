<?php
function pravougaonibazen($a,$b)
{
    return $a*$b;
   
}

function okruglibazen($b)
{
    return pow($b,2)* M_PI;
    
}

function velikibazen ($a,$b)
{
    return  pravougaonibazen($a,$b)+ okruglibazen($b/2)/2;
   
    
}
echo velikibazen(5,5) . "<br>";

?>