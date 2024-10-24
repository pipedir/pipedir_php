<?php

    if (isset($_POST["enviado"])){

        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];
        $name = "pipe";

        if ($usuario == $name && $edad <17) {
            echo "<p class='valido'>Puedes entrar</p>";
        } else {
            echo "<p class=\"no-valido\">No puedes entrar</p>";
        }
    }   
    

    if (isset($_POST["enviado"])){
        
        $pass =$_POST["contra"];
        $name =$_POST["nombre_usuario"];
        $output;
            $output = $name == "Pipe" && $pass == "123" ? "Puedes acceder" :"";
        echo $output;


        /* $output= match(true){
            $edad <= 18 => "eres menor de edad",
            $edad <= 40 => 'eres joven',
            $edad <= 65 => "estas viejo mi papa",
            default => 'mera momia',
        };
        echo $output;
        */
    }

    
        

?>
