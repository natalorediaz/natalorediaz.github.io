<?php

ini_set ("display_errors", 1);
error_reporting (E_ALL);

echo "<pre>"; 
var_dump ( $_POST );

$Nombre= '' ;
$Apellido= '';
$email = '';
$comentario= '';


    if ( ! empty ( $_POST [ 'Nombre' ] ) &&  is_string ( $_POST [ 'Nombre' ] ) )  {
        $Nombre=  $_POST [ 'Nombre' ];
    }
    if ( ! empty ( $_POST [ 'Apellido' ] ) &&  is_string ( $_POST [ 'Apellido' ] ) )  {
        $Apellido=  $_POST [ 'Apellido' ];

    }
    if ( ! empty ( $_POST [ 'email' ] ) &&  is_string ( $_POST [ 'email' ] ) )  {
    if ( filter_var ( $_POST [ 'email' ] , FILTER_VALIDATE_EMAIL ) !== false ) {
       $email = $_POST [ 'email' ]; 
    }
    if ( ! empty ( $_POST [ 'comentario' ] ) &&  is_string ( $_POST [ 'comentario' ] ) )  {
        $comentario=  $_POST [ 'comentario' ];

    }
}
   $connection = new  mysqli ( 'localhost', 'root', '', 'comentarios' );

    echo '<pre>'; 

    var_dump ( $connection -> connect_error);

if ( $Nombre !== '' && $Apellido !== '' &&  $email !== '' &&  $comentario !== '') {
    $result= $connection-> query(
        'INSERT INTO comentariosclientes ( nombre, apellido, email , comentario)
        VALUES ( "' . $Nombre . '", "' . $Apellido . '", "' . $email . '", "' . $comentario . '")'
    
);
var_dump ($result);

} else {
   echo 'Hubo un error';
}
 

?> 