<?php

use Firebase\JWT\JWT;
use Firebase\JWT\key;

require '../vendor/autoload.php';
require 'conexion.php';
$db = new Conexion();

//INICIAR SESION BD

    //RECOJO EL JSON Y LO DECODIFICO
    $json = file_get_contents('php://input');
    if (isset($json)) {
        $user = json_decode($json);

        //RECOJO LOS PARAMETROS Y HAGO LA CONSULTA
        $username = $user->username;
        $pass = $user->pass;
        $sql = "SELECT id_usuario,username,pass,role FROM `usuarios` WHERE username like '{$username}'";


        try {
            $result = $db->query($sql);
            $row = $result->fetch_assoc();

            $pass2 = $row['pass'];
            $rol = $row['role'];
            $sql2 = $row['id_usuario'];

            if (password_verify($pass, $pass2)) {
                // HAGO LAS VARIABLES DEL JWT Y LO CODIFICO
                $key = 'classic_car_trader';
                $payload = [
                    'username' => $username,
                    'id' => $sql2,
                    'rol' => $rol,
                ];
                $jwt = JWT::encode($payload, $key, 'HS256');
                $result = $db->query($sql);

                //MANDO EN USERNAME , ID Y TOKEN
                $alumnos = [
                    "id" => $result->fetch_all(MYSQLI_ASSOC),
                    "token" => $jwt,
                    "username" => $username,
                    "rol" => $rol
                ];
                header("HTTP/1.1 201 Created");
                echo json_encode($alumnos);
            }
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 404 Not Found");
        }
    } else {
        header("HTTP/1.1 400 Bad Request");
    }

