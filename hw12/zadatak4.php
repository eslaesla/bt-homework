<?php
$puz=0;
$drvo=99;
$dan=0;

while ($puz<=$drvo)
{
    $drvo=$drvo+1;
    $puz=$puz+3;
    $dan++;
    echo "$dan dan: puz je presao $puz cm a drvo je naraslo $drvo cm <br>";
}

?>