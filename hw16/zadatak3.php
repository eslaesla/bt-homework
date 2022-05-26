<?php 
function if_exists ($niz,$data)
{
    $a=false;
    foreach ($niz as $kljuc=>$value)
    {
        if($kljuc==$data)
        {
        $a=true;
        break;
        }
        
    }
if($a!=false)
{
echo "Kljuc postoji";
}
else {
    echo "Kljuc ne postoji";
}
}

$niz=[
'idea'=>'krompir',
'roda'=>'krompir',
'maxi'=>'krompir'];


$data='idea';

if_exists ($niz,$data);

?>