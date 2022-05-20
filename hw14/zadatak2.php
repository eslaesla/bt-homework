<?php


function kamioni($potrosnjapokamionu, $ukupnogorivo, $ostatakgorivaflag=false)
{
    $brojkamiona=0;
    while ($ukupnogorivo!=0)
    {
        if($ukupnogorivo<$potrosnjapokamionu)
        {
        break;
        }
        $brojkamiona++;
        $ukupnogorivo-=$potrosnjapokamionu;
    }

    if(!$ostatakgorivaflag)
    {
        return "Broj kamiona koji moze da predje rutu je:" . $brojkamiona;
    }
    else
    {
        return "Ostatak goriva je:" . $ukupnogorivo;
    }

}

echo kamioni(16,200,true);

?>