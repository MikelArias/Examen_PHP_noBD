<?php
session_start();

echo "La carta del jugador uno es: ".$_SESSION["jugador1" ] ." La carta del jugador dos es:". $_SESSION["jugador2" ]. "\n" ;
if($_SESSION["jugador1" ] > $_SESSION["jugador2" ]){
    echo "¡Ha ganado el jugador 1";
}
elseif($_SESSION["jugador1" ] < $_SESSION["jugador2" ]){
    echo "¡Ha ganado el jugador dos!";
}
else{
    echo "¡Hubo Empate!";
}
?>
<a href="Cartas.php"> Para volver a la pagina anterior y empezar de nuevo pulsa aqui </a>