
<?php

    // crear una multiples usuario resividos por html y verificaran si la opcion existe
    // mostrar un mensaje diferente para cada uno de ellos Ejemplo 'netflix'
    // Mostrar las opciones que no existen usando switch 




    $nombre = (int) (isset($_REQUEST['nombre'])) ? $_REQUEST['nombre'] : 0;

    if($nombre == "juan")
    $servicio = "";
    switch ($nombre) {
        case "juan": $servicio = "Amazon prime video"; echo "Bienvenido Juan"; goto pasar;
        case "pedro": $servicio = "Netflix"; echo  "Bienvenido Pedro"; goto pasar;
        case "andrea": $servicio = "Disney +"; echo "Bienvenida Andrea"; goto pasar;
            pasar:
            echo "<br> accesso confirmado puedes disfrutar de $servicio por 30 dias";
            break;
        default:
            echo "El usuario $nombre no se encuentra registrado, intentelo nuevamente !";
            break;
    }
    echo '<hr><a href="index.html">Regresar</a>';


















    
    // if(isset($_REQUEST['opciones'])){
    //     $opcion = (int) $_REQUEST['opciones'];
    // }else{
    //     $opcion = (int) 0;
    // }

    // if(isset($_REQUEST['opciones'])): $opcion = (int) $_REQUEST['opciones'];
    // // else: $opcion = (int) 0;
    
    // $opcion = (int) (isset($_REQUEST['opciones'])) ? $_REQUEST['opciones'] : 0;
    
    // switch ($opcion) {

    //     case 1: echo "Hola soy el usuario Miguel"; goto pasar;

    //     case 2: echo "Hola soy el usuario Jaime"; goto pasar;

    //     case 3: echo "Hola soy el usuario Diana"; goto pasar;
    //         pasar:
    //         echo "<br> soy la opcion $opcion y estoy en un switch";
    //         break;
    //     default:
    //         echo "La opcion $opcion no tiene un usario registrado";
    //         break;
    // }
    // echo '<hr><a href="index.html">Volver</a>';
    // // echo "Enviar datos por medio del checkbox";
    // // var_dump($_REQUEST['lista']);


    // Opciones en switch 
    // $nombre = (string) "DiánA";
    // switch ($nombre) {
    //     case ('Miguel' == $nombre  || 'miguel' == $nombre || 'MIGUEL' == $nombre): echo "Usuario $nombre porfa mañana se te vence el plazo de renover tu menbresia <br>"; goto pasar; 
    //     case ("DIÁNA" == mb_strtoupper($nombre, 'UTF-8')): echo "Usuario $nombre eres un usuario platino :V <br>"; goto pasar;
    //     case 'Jaime':
    //     case 'Jose':
    //         pasar:
    //         echo "Puede pasar a ver netflix";
    //         break;
    //     default:
    //         echo "El usuario no esta registrado";
    //         break;
    // }


    // function mensaje(string $p1,string $p2): string{
    //     return "Hola estoy en el $arg[0] $arg[1] <br>";
    // }

    // Condicionales en una linea
    // $respuesta = (string) (false) 
    //                     ? mensaje('elseif',':P')
    //                     : ((false) ?  mensaje('elseif',':P')
    //                     : ((false) ? mensaje('elseif2',':P')
    //                     : mensaje('else',':(')));
    // echo $respuesta;

    //Condicionales resumidas sin el {} 'solo siver para una sola intruccion'
    // if(false):    echo mensaje('if',':P');
    // elseif(true): echo mensaje('elseif',':P');
    // else:         echo mensaje('else',':(');















// $nombre =(string)"diana";

// switch ($nombre){
//     case ('miguel'  ;
//     case 'diana': echo "usuario $nombre eres usuario platino:  <br>" goto pasar;
//     case 'jaime':
//     case 'jose':

//         pasar:
//         echo "puede pasar a ver netflix";
//         break;

        
//      default:
//             echo "usuario no registrado";
//             break;















// $nombre =(string)"diana";

// switch ($nombre){
//     case 'miguel':  echo "usuario $nombre maña se vence la membresia <br>"  goto pasar;

//    case 'diana': echo "usuario $nombre eres usuario platino:  <br>" goto pasar;
//     case 'jaime':
//     case 'jose':

//         pasar:
//         echo "puede pasar a ver netflix";
//         break;


//      default:
//             echo "usuario no registrado";
//             break;



// }
















// funcion mensaje (string $p1, string $p2){
// return "hola estoy en el, $arg [0] $arg[1]"


// }








// $respuesta =(string) (false) 
//             ? "hola estoy en el if :) <br>"
                    
//                 :  (false) ? "hola estoy en el elseif :P <br>"
//                         (
//                             (false) ? "hola estoy en el elseif2 :P <br>"
//                             : " hola estoy en el else :(")
//                             )
//                 );

// (true) ?

// echo $respuesta;









// if(false)
// echo "hola estoy en el if :)<br>";


// elseif(true) {
// echo 'hola estoy en el elseif :P)<br>';
// echo 5+2;
// }

// else 
// echo " hola esoty en el else :(";



?>