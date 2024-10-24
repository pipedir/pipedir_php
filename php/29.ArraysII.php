<?php

    $autos = ["Mitsubishi","Chevrolet","Mazda"];

    if(is_array($autos)) {
        echo "Es un array<br>   ";
    } else "No lo es";


    // metodo de recorrido a un array asociativo
    $datos = array("Nombre"=>"Pipe","Apellido"=>"Diaz","Edad"=>21);


    $datos["Pais"]="Colombia"; // para agregar otro elemento al array asociativo, referimos su texto asociativo y le damos valor


    foreach ($datos as $clave => $valores) {

        echo "A la clave> ". $clave ." le corresponde el valor> ". $valores ." <br>";
    }

    $semana[] = "Lunes"; $semana[] = "Martes"; $semana[] = "Miercoles"; $semana[] = "Jueves";


    // en la opcion con count nos referimos al metodo que cuenta los indices de la array
    for ($i=0; $i < count($semana); $i++) { 
        echo $semana[$i] . "<br>";
    }

    $semana[] = "Viernes";


    // utilizamos la funcion sort()

    sort($semana);

    // en la opcion con count nos referimos al metodo que cuenta los indices de la array
    for ($i=0; $i < count($semana); $i++) { 
        echo $semana[$i] . "<br>";
    }




?>





// metodo de recorrido de arrays lineal

<ul>
    <?php foreach($autos as $key => $car) : ?>
        <li><?= $key . "    " . $car?></li>
        <?php endforeach; ?>
</ul>

