<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require '../vendor/autoload.php';
require 'conexion.php';
$db = new Conexion();

//ELIMINAR USUARIO

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    //RECOJO EL JSON Y LO DECODIFICO
    $json = file_get_contents('php://input');
    $user = json_decode($json);
    //DECODIFICO EL TOKEN Y LO COMPRUEBO
    $decoded = JWT::decode($user->token, new Key('classic_car_trader', 'HS256'));
    if ($user->username == $decoded->username) {
        //HAGO LA CONSULTA
        $sql = "DELETE FROM usuarios WHERE id_usuario = '$user->id'";
        try {
            $db->query($sql);
            header("HTTP/1.1 200 OK");
            echo json_encode($user->id);
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 400 Bad Request");
        }
    } else {
        header("HTTP/1.1 401 Bad Request");
    }
    exit;
}
