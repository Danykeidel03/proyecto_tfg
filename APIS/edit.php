<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require '../vendor/autoload.php';
require 'conexion.php';
$db = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    //RECOJO EL JSON Y LO DECODIFICO
    $json = file_get_contents('php://input');
    $user = json_decode($json);
    //DECODIFICO EL TOKEN Y LO COMPRUEBO
    $decoded = JWT::decode($user->token, new Key('classic_car_trader', 'HS256'));
    if ($user->username == $decoded->username) {
        if (
            // SI LOS CAMPOS HAN SIDO SELECCIONADOS
            isset($user->fullname) && isset($user->id) && isset($user->city) && isset($user->tfno) && isset($user->email) && $user->fullname != "" && $user->id != "" && $user->city != "" && $user->email != "" && $user->tfno != ""
        ) {
            //HAGO LA CONSULTA Y RECOJO LOS VALORES
            $id = $user->id;
            $fullname = $user->fullname;
            $city = $user->city;
            $tfno = $user->tfno;
            $email = $user->email;
            $sql = "UPDATE usuarios SET fullname='$fullname',
            city='$city', tfno='$tfno',
            email='$email' WHERE id_usuario='$id'";
            try {
                $db->query($sql);
                header("HTTP/1.1 200 OK");
                echo json_encode($db->insert_id);
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");
        }
    } else {
        header("HTTP/1.1 401 Bad Request");
    }

    exit;
}
