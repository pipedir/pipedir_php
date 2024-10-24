<?php

$a="Pipe";
echo $a;
$advice="inside this bitch";
function get_name() {

   global $advice;
    echo $advice;

}
include ("other_data.php");
get_name ();





?>