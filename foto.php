<?php

require 'funciones.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

$foto = $_GET['id'];


$conexion = conexion('galeria_practica', 'root', '');

$statement = $conexion->prepare("SELECT * FROM fotos WHERE id = $foto");
$statement->execute();

// Obtener los resultados
$resultado = $statement->fetch(PDO::FETCH_ASSOC);

$imagen = $resultado['imagen'];
$titulo = $resultado['titulo'];
$texto = $resultado['texto'];

function verificar_imagen($resultado){


    $imagen = $resultado['imagen'];

    if($imagen){
        return true;
    } else {
        return false;
    }
}

if(!verificar_imagen($resultado)){
    header ('Location: index.php');
}
require 'views/foto.view.php';

}

else{
    header('Location: index.php');
}

?>