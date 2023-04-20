<?php
function mostrarNoticias1()
{
    $alumnos = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT * FROM pruebas ";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        if (mysqli_num_rows($result) > 0) {
            $alumnos = array();
            while ($reg = mysqli_fetch_assoc($result)) {
                $alumnos[] = $reg;
            }
        }
    } catch (mysqli_sql_exception $e) {
        $alumnos = false;
    }
    return $alumnos;
}
function mostrarNoticias($id)
{
    $alumnos = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT * FROM pruebas where id = $id limit 1";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        if (mysqli_num_rows($result) > 0) {
            $alumnos = array();
            while ($reg = mysqli_fetch_assoc($result)) {
                $alumnos[] = $reg;
            }
        }
    } catch (mysqli_sql_exception $e) {
        $alumnos = false;
    }
    return $alumnos;
}

function guardarImg($foto, $titulo, $link, $id)
{
    $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
    $sql = "UPDATE `pruebas` SET `titulo` = '$titulo', `link` = '$link', `foto` = '$foto' where id = $id";
    $result = mysqli_query($con, $sql);
    return $result;
}

function guardarFicha($nombre, $foto, $ficha)
{
    $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
    $sql = "INSERT INTO `fichas_tecnicas` (`nombre`, `foto`, `pdf`) VALUES ('$nombre', '$foto', '$ficha');";
    $result = mysqli_query($con, $sql);
    return $result;
}

function eliminarFicha($nombre){
    $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
    $sql = "DELETE FROM `fichas_tecnicas` WHERE  `nombre`=$nombre;";
    $result = mysqli_query($con, $sql);
    return $result;
}

function mostrarFichas()
{
    $alumnos = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT * FROM fichas_tecnicas";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        if (mysqli_num_rows($result) > 0) {
            $alumnos = array();
            while ($reg = mysqli_fetch_assoc($result)) {
                $alumnos[] = $reg;
            }
        }
    } catch (mysqli_sql_exception $e) {
        $alumnos = false;
    }
    return $alumnos;
}

function mostrarFichas1()
{
    $alumnos = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT nombre FROM fichas_tecnicas ";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        if (mysqli_num_rows($result) > 0) {
            $alumnos = array();
            while ($reg = mysqli_fetch_assoc($result)) {
                $alumnos[] = $reg;
            }
        }
    } catch (mysqli_sql_exception $e) {
        $alumnos = false;
    }
    return $alumnos;
}

function deleteFicha($nombre){
    $eliminado = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "DELETE FROM `practicas`.`fichas_tecnicas` WHERE  `nombre`='$nombre';";
        $result = mysqli_query($con, $sql);
        if($result && mysqli_affected_rows($con)){
            $eliminado = true;
        }
        mysqli_close($con);
    } catch (mysqli_sql_exception $e) {
        $eliminado = false;
    }
    return $eliminado;
}

function obtenerMarcas(){
    $alumnos = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT distinct Nombre FROM marcas ";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        if (mysqli_num_rows($result) > 0) {
            $alumnos = array();
            while ($reg = mysqli_fetch_assoc($result)) {
                $alumnos[] = $reg;
            }
        }
    } catch (mysqli_sql_exception $e) {
        $alumnos = false;
    }
    return $alumnos;
}


function obtenerCoche($id) {
    $coche = false;
    try {
        $con = mysqli_connect("practicas.appsbecallgroup.com", "practicas", "Vareta69*", "practicas");
        $sql = "SELECT * FROM vehiculos_venta WHERE id='$id'";
        $coche = $con->query($sql)->fetch_assoc();
        $usuario = $coche['id_vendedor'];
        $sqlUser = "SELECT username FROM usuarios WHERE id_usuario='$usuario'";
        $user = @$con->query($sqlUser)->fetch_assoc();
        @$coche['username'] = $user['username'];
    } catch(mysqli_sql_exception $e) {
        $coche = false;
    }
    return $coche;
}