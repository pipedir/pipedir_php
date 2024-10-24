<?php


// definimos una array multidimensional o anidado

$alimentos=array
("fruta" =>array("tropical"=>"kiwi",
                "citrico"=>"mandarina",
                "otros"=>"manzana"),

"leche"=>array("animal"=> "vaca",
                "vegetal"=>"coco"),

"carne"=>array("bovino" => "lomo",
                "porcino" => "pata"));


// echo $alimentos["fruta"]["citrico"];

/*foreach ($alimentos as $clave => $valor){
    echo "".$clave."".$valor["citrico"];
}*/

foreach ($alimentos as $claveali => $alim){
    echo "$claveali:<br>";

    /*
    while(list($clave, $valor) = each($alim)){
        echo "$clave=$valor<br>";
    }
        el each() actualmmente se considera obsoleto */
    
    foreach($alim as $clave => $valor) {
        echo "la referenccia es> ".$clave." con el valor asociado de> ".$valor." <br>";
    }


    echo "<br>";
}

echo var_dump($alimentos); // con el metodo var_dump podemos imprimir las arrays multidimencionales




?>