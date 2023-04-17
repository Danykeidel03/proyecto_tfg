<?php

// use phpGPX\phpGPX;

require 'conexion.php';
require '../vendor/autoload.php';
$db = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //RECOJO EL JSON Y LO DECODIFICO
    $json = file_get_contents('php://input');
    if (isset($json)) {
        $coche = json_decode($json);

        //RECOJO TODOS LOS PARAMETROS

        $username = $coche->username;
        $id = $coche->id;
        $marca = $coche->marca;
        $modelo = $coche->modelo;
        $acabado = $coche->acabado;
        $combustible = $coche->combustible;
        $ano = $coche->ano;
        $cv = $coche->cv;
        $cambio = $coche->cambio;
        $color_ext = $coche->color_ext;
        $color_int = $coche->color_int;
        $matricula = $coche->matricula;
        $km = $coche->km;
        $precio = $coche->precio;
        $descripcion = $coche->descripcion;
        $puertas = $coche->puertas;

        //CONSULTA

        $sql = "INSERT INTO `practicas`.`vehiculos_venta` (`marca`, `modelo`, `acabado`, `color_ext`, `color_int`, `precio`, `cv`, `combustible`, `puertas`, `km`, `ano`, `id_vendedor`, `matricula`, `cambio`) VALUES ('$marca', '$modelo', '$acabado', '$color_ext', '$color_int', '$precio', '$cv', '$combustible', '$puertas', '$km', '$ano', '$id', '$matricula', '$cambio');";

        //CONSULTA PARA COMPROBAR QUE EXISTE
        $sql2 = "SELECT * FROM `practicas`.`vehiculos_venta` WHERE matricula = '$matricula'";

        try {
            //SI XSITE NO LO INSERTA SI NO, SI
            $usuarios = $db->query($sql2)->fetch_all(MYSQLI_ASSOC);
            if (count($usuarios) > 0) {
                header("HTTP/1.1 409 Username exist");
                header("Content-Type: application/json");
                echo json_encode([
                    'success' => false,
                    'msg' => "El nombre de usuario ya existe"
                ]);
            } else {
                $db->query($sql);
                header("HTTP/1.1 201 Created");
                header("Content-Type: application/json");
                echo json_encode([
                    'success' => true,
                    'msg' => "El usuario se ha creado correctamente"
                ]);
            }
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 400 Bad Request");
        }
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
}
