<?php
               
    function MostrarData(){
        setlocale(LC_TIME,"portuguese");
        date_default_timezone_set('Brazil/East');
        $agora = getdate();

        $segundos = $agora['seconds'];
        $minutos = $agora['minutes'];
        $horas = $agora['hours'];

        $dia = $agora['mday'];
        $mes = strftime("%B");
        $ano = $agora['year'];

        
      // echo $horas . ":" . $minutos . ":" . $segundos . "<br>";

        echo strftime("%A") . "," . $dia . " de " . $mes . " de " . $ano;

    }



                
?>