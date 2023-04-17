<?php

// use phpGPX\phpGPX;

require 'conexion.php';
require '../vendor/autoload.php';
$db = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //HAGO LA CONSULTA
    $sql = "SELECT * FROM vehiculos_venta WHERE 1 ";

    try {

        //APLICO LOS FILTROS
        if (isset($_GET['marca'])) {
            $marca = $_GET['marca'];
            $sql .= "AND marca LIKE '%$marca%' ";
        }

        if (isset($_GET['precio'])) {
            $precio = $_GET['precio'];
            if($precio == ""){
                $precio = 100000000000000000000;
            };
            $sql .= "AND precio <= $precio ";
        }

        if (isset($_GET['cv'])) {
            $cv = $_GET['cv'];
            if($cv == ""){
                $cv = 0;
            };
            $sql .= "AND cv >= $cv ";
        }

        if (isset($_GET['km'])) {
            $km = $_GET['km'];
            if($km == ""){
                $km = 100000000000000000000;
            };
            $sql .= "AND km <= $km ";
        }

        if (isset($_GET['ano'])) {
            $ano = $_GET['ano'];
            if($ano == ""){
                $ano = 100000000000000000000;
            };
            $sql .= "AND ano <= $ano ";
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