<?php

$flag = 0 ; $suma = 0; $a = 0; $b = 1;

while ($flag <= 10) {


 echo $suma;   
 $suma = $a + $b;
 $a = $b;
 $b = $suma;
 $flag++;
 echo "<br>";


}    




?>