<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<H2>Prvi zadatak</H2>
<?php 

//Prvi zadatak
$a=200;
$b=80;
echo  "Zbir je ". " " .$a+$b . "<br>";
echo "Razlika je " . " " .$a-$b. " <br>";
echo "Proizvod je " . " " .$a*$b. "<br> ";
echo "Kolicnik je " . " " .$a/$b. " <br>";
?>
<br>
<br>
<br>

<h2>Drugi zadatak</h2>
<?php
//Drugi zadatak
$dan=array ("Nedelja","Ponedeljak","Utorak","Sreda","Cetvrtak","Petak","Subota");
$a=3;
echo "Danas je" . " " .$dan[$a];
?>
<br><br><br>

<h3>Treci zadatak</h3>

<?php
$a=2;
$b=4;
$c=7;
echo "Zbir brojeva $a i $b i $c je" . " " .$a+$b+$c ;
echo "<br>";
echo max($a,$b,$c);

?>

</html>