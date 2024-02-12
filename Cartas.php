<?php
//#Dos jugadores están jugando a las cartas, gana el jugador que saque la carta más alta, siendo la más baja el 1 o as y la más alta la 10. Escriba un programa de dos páginas (usando variables de sesión) que muestre una carta para cada jugador y se indique qué jugador es el ganador y permita repetir la jugada mediante un botón. php
session_start();

$palos = array('Corazones','Diamantes','Treboles','Picas');
$cartas = array('As', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho', 'Nueve', 'Diez');
$puntos = array ( 'As' => 1, 'Dos' => 2, 'Tres' => 3, 'Cuatro' => 4, 'Cinco' => 5, 
'Seis' => 6, 'Siete' => 7, 'Ocho' => 8, 'Nueve' => 9, 'Diez' => 10);
$_SESSION["jugador1" ] = $jugador1 = array_rand($cartas,1);
$_SESSION["jugador2" ] = $jugador2 = array_rand($cartas,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
</head>
<body>
    <h1>Se van a enfrentar Jugador 1 contra Jugador 2, quien saque un numero más alto gana.</h1>

    <button onclick="location.href='Ganador.php'">Para ver el ganador haz click aquí</button>

    <br>