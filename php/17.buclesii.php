<?php


for($i=0;$i<=10;$i++){

    
 
     if($i == 6){echo "<p>Bucle interrumpido</p>"; break;}
 
     echo "9 x $i = " . 9*$i . "<br>"; 
 
 }
 

for($i=10;$i>=-10;$i--){
    
    if($i == 0){

        echo"Division por 0 no es posible <br>" ;
        continue;
    }
    
    echo"9/$i = ". 9/$i ."<br>"; 
}


?>