<?php
$hwarray=['Sasa','Milka','Pera','Sonja','Danilo','Marica','Ivica','Sonja','Vanja','Mira'];

// dodajem svoje ime
foreach($hwarray as $key=>$ime)
{
    if(strcasecmp($hwarray[$key],'Sasa')==0)
    break;
    else
    array_push($hwarray,'Sasa');
}

// dodajem rodjaka

foreach($hwarray as $key=>$ime)
{
    if(strcasecmp($hwarray[$key],'Ivan')==0)
    break;
    else
    array_splice($hwarray,2,1,"Ivan");
}

$c=count($hwarray);

//dodajem novog clana na pocetku niza

foreach($hwarray as $key=>$ime)
{
    if(strcasecmp($hwarray[$key],'Milica')==0)
    {
    break;
    }
    else
    {
    array_unshift($hwarray,"Milica");
    break;
    }
    
}


print_r($hwarray);

foreach($hwarray as $key=>$ime)
{
    if($ime=='Danilo')
    array_splice($hwarray,$key,1);
}

$b=array();
foreach ($hwarray as $key=>$ime)
{
    if(!in_array($ime,$b))
    $b[$key]=$ime;
}




?>