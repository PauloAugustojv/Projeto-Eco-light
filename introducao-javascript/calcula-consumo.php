<?php
    $potencia = $_POST = ["potencia"];
    $horas_dia = $_POST = ["horas-dia"];
    $dias_uso = $_POST = ["dias-uso"];
    $aparelho = $_POST = ["aparelho"];

    
    $consumo = ($potencia * $horas_dia * $dias_uso) / 1000;

    echo "<script>console.log('$consumo');</script>;"   
    
?>