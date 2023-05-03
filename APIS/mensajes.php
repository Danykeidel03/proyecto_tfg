<?php

require 'conexion.php';
require '../vendor/autoload.php';
$db = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //HAGO LA CONSULTA
    $sql = "SELECT mensaje FROM chat WHERE 1 ";

    try {

        //APLICO LOS FILTROS
        if (isset($_GET['idVendedor'])) {
            $idVendedor = $_GET['idVendedor'];
            $sql .= "AND id_vendedor LIKE '%$idVendedor%' ";
        }

        if (isset($_GET['idComprador'])) {
            $idComprador = $_GET['idComprador'];
            $sql .= "AND id_persona LIKE '%$idComprador%' ";
        }
       
        $result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
        header("HTTP/1.1 200 OK");
        echo json_encode($result);
    } catch (mysqli_sql_exception $e) {
        header("HTTP/1.1 404 Not Found");
        echo json_encode($sql);
    }
    exit;
} else {
    header("HTTP/1.1 400 Bad Request");
}