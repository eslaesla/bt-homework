<?php 

$data= array(

    array(
    'name'=> "Pera",
    'last_name'=>"Peric",
    'age'=>28,
    'gender'=>"male",
    'avg_rating'=>7.5,
    'married'=>false,
    'courses'=>['laravel','react','jQuery']
        ),

    array(
    'name'=> "Mika",
    'last_name'=>"Mikic",
    'age'=>45,
    'gender'=>"male",
    'avg_rating'=>7.9,
    'married'=>true,
    'courses'=>['php','react','js']
    ),

    array(
    'name'=> "Milka",
    'last_name'=>"Canic",
    'age'=>98,
    'gender'=>"female",
    'avg_rating'=>9.9,
    'married'=>true,
    'courses'=>['slagalica','rts1','ziri']
    ),

    array(
    'name'=> "Zika",
    'last_name'=>"Pavlovic",
    'age'=>19,
    'gender'=>"male",
    'avg_rating'=>3.4,
    'married'=>false,
    'courses'=>['nesto tamo','nesto drugo','nesto sesto']
    ),

    array(
    'name'=> "Nadezda",
    'last_name'=>"Petrovic",
    'age'=>146,
    'gender'=>"female",
    'avg_rating'=>17.9,
    'married'=>false,
    'courses'=>['srpski','jezik','i','knjizevnost']
    ),
);


foreach ($data as $key=>$podatak)
{
        
        $genderStatus='ozenjen';
        if($podatak['gender']=='female')
        {
            $genderStatus='udata ';
        }

        if(!$podatak['married'])
        {
            $genderStatus= 'nije' . " " . $genderStatus;
        }

        $message=$podatak['name']." ". $podatak['last_name']. " ". "ima" . " " .$podatak['age'] . " ". "godina i" . " ".$genderStatus.
        " ima prosek". $podatak['avg_rating'] . " ". "a kursevi koje trenutno slusa su:" . implode(",",$podatak['courses'])."<br>";
        echo $message;
        
    
}


?>