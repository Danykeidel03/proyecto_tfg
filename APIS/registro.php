<?php

require '../vendor/autoload.php';
require 'conexion.php';
$db = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //RECOJO EL JSON Y LO DECODIFICO
    $json = file_get_contents('php://input');
    if (isset($json)) {
        $user = json_decode($json);

        //RECOJO TODOS LOS PARAMETROS

        $fullname = $user->fullname;
        $username = $user->username;
        $email = $user->email;
        $pass = $user->pass;
        $city = $user->city;
        $dni = $user->dni;
        $tfno = $user->tfno;
        $password_hash = password_hash($pass, PASSWORD_BCRYPT);

        //CONSULTA

        $sql = "INSERT INTO usuarios (fullname, username, email, pass, city, dni, tfno, role) VALUES('$fullname', '$username', '$email', '$password_hash', '$city', '$dni', '$tfno', 'usuario')";

        //CONSULTA PARA COMPROBAR QUE EXISTE
        $sql2 = "SELECT * FROM usuarios WHERE username = '$username'";

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