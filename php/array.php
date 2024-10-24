<?php
    $autos = ["Chevrolet","Mitsubishi","Kymco","Mazda"];
    $autos[] ="Volvo";
    $autos[] = "Volswagen";
    $edad = 15;
    $output= match (true) {
        $edad > 18 => "Mayor de edad",
        $edad < 18 => "Menor de edad",
        default => "No valido",
    };

    $person = [
        "name"=> "Pipe",
        "age"=> 21,
        "isDev" => true,
        "lenguages" => ["English","Spanish","PHP"],
    ];

        $person['name'] = 'Pipe Diaz';
        $person['lenguages'][] = 'Java';
    

?>

<h1><?= $output ?> </h1>
<h2><?= $autos[3]  ?></h2>
<h3><?= $person['lenguages'][3] ?></h3>


<ul>
    <?php foreach($autos as $key => $car) : ?>
        <li><?= $key . "    " . $car?></li>
        <?php endforeach; ?>
</ul>

