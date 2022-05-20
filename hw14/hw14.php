<?php 

$dan;
// validacija dana
if (is_numeric($_GET["dan"]))
 {
     $dan=$_GET["dan"];
     if ($dan<=0 || $dan>31)
     {
 echo "Unesite validan dan";
     }
     else
     {
         $vdan=$dan;
         
     }
}



// validacija meseca
if (is_numeric($_GET["mesec"]))
 {
     $mesec=$_GET["mesec"];

     if ($mesec<=0 || $mesec>12)
 echo "Unesite validan mesec";
    else 
    {
        $vmesec=$mesec;
        
    }
 }


// validacija godine
 if (is_numeric($_GET["godina"]))
 {
     $godina=$_GET["godina"];
     if ($godina>0 && $godina<9999)
     {
        if ($godina%4==0 && $godina%100!==0 || $godina%400==0)
        {
         if ( $vmesec==2 && $vdan>29)
         {
    echo "Februar ne moze da ima vise od 29 dana, neispravan datum.";
         }
     
        else 
         {
            echo "$vdan" . "." . "$vmesec" . "." . "$godina.";
         }
        }
        else {
            if($vmesec==2 && $vdan>28)
            echo "Godina nije prestupna";
            else {
                echo "$vdan" . "." . "$vmesec" . "." . "$godina.";
            }

        }
        
    }
    else 
    {
        echo "Unesi godinu posle Hrista";
    }
       
    }   


 ?>







