<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
    .linea {
        margin: 0px 20px;
        width: 36%;
        border-top: 1px solid #999;
        position: relative;
        top: 40px;
        float: left;
    }

    h1,
    #act,
    a,
    h4 {
        color: #7f0000;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    .leyenda {
        font-weight: bold;
        float: left;
    }

    html,
    body,
    footer,
    header {
        min-width: 1500px;
        max-width: 54000px;
        max-height: 5000;
    }

    html,
    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }

    #general {
        /* width: 90%; */
        width: 1420px;
        height: 1600px;
        /* background-color: grey; */
        margin-left: 5%;
    }

    .parent_10 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1_10 {
        grid-area: 1 / 1 / 6 / 4;
        border: 1px black solid;
        height: 1400px;
    }

    .div2_10 {
        grid-area: 1 / 4 / 6 / 5;
        border: 1px black solid;
        height: 490px;
        /* text-align: center; */
    }

    #nm {
        margin-left: 40px;
        margin-top: 20px;
        font-size: 60px;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    #pr {
        margin-left: 40px;
        margin-top: 20px;
        font-size: 35px;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    #car {
        margin-left: 40px;
        margin-top: 20px;
        font-size: 25px;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    #d {
        height: 400px;
        width: 900px;
        word-wrap: break-word;
    }

    td {
        padding: 12px;
        padding-left: 20px;
    }

    #de {
        height: 300px;
        /* altura fija del div */
        overflow-y: auto;
        /* agregar barras de desplazamiento */
        border: 1px black solid;
        margin-top: 10px;
        margin-left: 4px;
    }

    #usu {
        margin-left: 20px;
        font-size: 20px;
    }

    button {
        margin-top: -10px;
        background: none;
        border: 0;
        color: inherit;
        /* cursor: default; */
        font: inherit;
        line-height: normal;
        overflow: visible;
        padding: 0;
        -webkit-user-select: none;
        /* for button */
        -webkit-appearance: button;
        /* for input */
        -moz-user-select: none;
        -ms-user-select: none;
    }

    button:hover{
        cursor: pointer;
    }
</style>
<?php
include_once('footer/header.php')
?>

<body>
    <div id="general">
        <div style="width:1100px;margin-left:14%;">
            <div class="linea">&nbsp;</div>

            <div class="leyenda">
                <h1>Vehiculo</h1>
            </div>

            <div class="linea">&nbsp;</div>
        </div>
        <br><br><br><br><br><br><br>
        <div class="parent_10">
            <div class="div1_10">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    require_once('funciones.php');

                    $coche = obtenerCoche($id);

                    $foto = $coche['foto'];
                    $marca = $coche['marca'];
                    $modelo = $coche['modelo'];
                    $precio = $coche['precio'] . "€";
                    $color = $coche['color_ext'];
                    $color_int = $coche['color_int'];
                    $cv = $coche['cv'] . "cv";
                    $km = $coche['km'] . "km";
                    $matricula = $coche['matricula'];
                    $cambio = $coche['cambio'];
                    $puertas = $coche['puertas'];
                    $combustible = $coche['combustible'];
                    $descripcion = $coche['descripcion'];
                    $ano = $coche['ano'];

                    echo "<div id='pht'><img src='fotoCoche/$foto' width='100%' height='550px'></div>";
                    echo "<div id='nm'>$marca  &nbsp;||&nbsp;  $modelo</div>";
                    echo "<div id='pr'>Valor de $precio</div>";
                    echo "<div id='car'>
                    <h3>Caracteristicas:</h3> 
                    <table class='greyGridTable'>
                    <tbody>
                    <tr>
                    <td>Color: <b>$color</b></td>
                    <td>Color del Interior: <b>$color_int</b></td>
                    <td>Caballos: <b>$cv</b></td>
                    </tr>
                    <tr>
                    <td>Kilometros: <b>$km</b></td>
                    <td>Año: <b>$ano</b></td>
                    <td>Matricula: <b>$matricula</b></td>
                    </tr>
                    <tr>
                    <td>Cambio: <b>$cambio</b></td>
                    <td>Numero de Puertas: <b>$puertas</b></td>
                    <td>Combustible: <b>$combustible</b></td>
                    </tr>
                    </tbody>
                    </table> 
                    <br>
                    <div id='d'>
                    Descripcion: <div id='de'>$descripcion</div> 
                    </div>
                    </div>";
                }
                ?>
            </div>
            <div class="div2_10">
                <center>
                    <h1>Propietario</h1>
                </center>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    require_once('funciones.php');

                    $coche = obtenerCoche($id);

                    $id_usu = $coche['id_vendedor'];

                    $usuario = obtenerUsu($id_usu);

                    $nombre = $usuario['fullname'];
                    $username = $usuario['username'];
                    $email = $usuario['email'];
                    $city = $usuario['city'];
                    $dni = $usuario['dni'];
                    $tfno = $usuario['tfno'];

                    echo "
                    <div id='usu'>
                        Usuario: <b>$username</b><br><br>
                        Nombre: <b>$nombre</b><br><br>
                        Ciudad: <b>$city</b><br><br>
                        DNI: <b>$dni</b><br><br>
                    </div>
                        <hr>
                    <div id='usu'>
                        <p>Contacto</p>
                        Mail: <b>$email</b><br><br>
                        Telefono: <b>$tfno</b><br>
                        <form action='chat.php'><br>
                        <div id='min'><button>Contacta</button></div>
                        <input id='id_1' name='id_1' type='hidden' value='$id_usu'>
                        <input type='hidden' name='miCampoOculto' id='miCampoOculto'>
                        </form>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            require_once('funciones.php');

            $coche = obtenerCoche($id);
        }
        ?>
    </div>
    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>
<script>
    let i = localStorage.getItem('id')
    document.getElementById('miCampoOculto').value = i;
</script>

</html>