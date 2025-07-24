<?php
echo "<h1>Obtenemos la fecha en español</h1>";

date_default_timezone_set("America/Lima");

function fecha_completa_espaniol()
{
    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_anio = date("y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday " => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo",
    ];

    $meses = [
        "01"   => "Enero",
        "02"  => "Febrero",
        "03"     => "Marzo",
        "04"     => "Abril",
        "05"       => "Mayo",
        "06"      => "Junio",
        "07"      => "Julio",
        "08"    => "Agosto",
        "09" => "Septiembre",
        "10"   => "Octubre",
        "11"  => "Noviembre",
        "12"  => "Diciembre",
    ];

    $fecha_final = $dia_semana[date("l")] . " " . $fecha_dia . " de " . $meses[$fecha_mes]." de ".$fecha_anio;
    echo "<br>";
    echo "Dia de la semana: $fecha_final";
}

fecha_completa_espaniol();
