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

    .leyenda {
        font-weight: bold;
        float: left;
    }

    table {
        width: 100%;
        text-align: center;
        margin-left: -140px;
    }

    td {
        width: 250px;
    }

    h1 {
        text-align: left;
    }

    label {
        padding: 10px;
        margin-right: 50px;

    }

    input {
        margin-bottom: 20px;
    }

    html,
    body,
    footer,
    header {
        min-width: 1500px;
        max-width: 54000px;
        max-height: 5000;
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

    html,
    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
</style>
<?php
include_once('footer/header.php')
?>

<body>
    <div id="funciona">


        <div style="width:1400px;margin:auto;margin-top:20px;">
            <div class="linea">&nbsp;</div>

            <div class="leyenda">
                <h1>Actualizar Noticias</h1>
            </div>

            <div class="linea">&nbsp;</div>
        </div>
        <br><br><br><br><br><br><br><br>

        <?php
        require_once('funciones.php');
        $car = mostrarAnuncios();
        echo "
        <center>
            <table>
                <tH>ID</tH>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>MATRICULA</th>
                <th>FOTO</th>
                <th>ELIMINAR ANUNCIO</th>
        ";
        foreach ($car as $coche) {
            $fo = $coche['foto'];

            echo "
        <tr>
            <td>$coche[id]</td>
            <td>$coche[marca]</td>
            <td>$coche[modelo]</td>
            <td>$coche[matricula]</td>
            <td><img src='fotoCoche/$fo' width='300px' height='150px'></td>
            <td>
            <form action='#'>
            <input value='$coche[id]' name='id' id='id' type='hidden'>
            <input value='ELIMINAR' name='delete' id='delete' class='delete' type='submit'>
            </form>
            </td>
        </tr>
        ";
        }
        echo "</table>
        </center>";

        if(isset($_REQUEST['delete'])){

            $id = $_REQUEST['id'];

            $eliminado = deleteAnuncio($id);

            if($eliminado){
                echo "<h2>El coche con id $id ha sido eliminado</h2>";
            }
        }
        ?>
        <br><br><br>
        <a href="index.php">VOLVER</a>


    </div>
    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>
<script>
    let funciona = document.getElementById('funciona')
    if (!localStorage.getItem('token') || localStorage.getItem('rol') == "usuario") {
        funciona.innerHTML = ''
        window.location.href = ('http://localhost/DWES/tfg/index.php')
    }
</script>

</html>