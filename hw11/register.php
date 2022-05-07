<?php
if(isset($_GET["name"]))
$name=$_GET["name"];
if(isset($_GET["last_name"]))
$last_name=$_GET["last_name"];
if(isset($_GET["email"]))
$email=$_GET["email"];
if(isset($_GET["pass"]))
$pass=$_GET["pass"];
if(isset($_GET["confirm_pass"]))
$conpass=$_GET["confirm_pass"];
// if(isset($_GET["kurs"]))
$course=$_GET["kurs"];



if(isset($_GET["gender"]))
{
$gender=$_GET["gender"];

if($gender=="muski")
{
    echo "Postovani $name $last_name , uspesno ste se registorvali na nasem sajtu! <br> 
    Vasa lozinka je: $pass <br> Vas username je: $email <br><br>
    Vasi odabrani kursevi su: <br>" ;
foreach ($course as $kurs) 
    {
     echo  "<br>"."$kurs";
    }
}
else
{
    echo "Postovana $name $last_name , uspesno ste se registorvali na nasem sajtu! <br> 
    Vasa lozinka je: $pass <br> Vas username je: $email <br><br>
    Vasi odabrani kursevi su: <br>" ;
foreach ($course as $kurs) 
    {
     echo  "<br>"."$kurs";
    }
}
}
else
{
    echo "Niste odabrali pol, vratite 'stranicu' unazad a zatim odaberi POL";
}



?>