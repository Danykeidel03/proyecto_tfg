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

    select,#foto,#modelo,#acabado,#año,#cv,#color_ext,#color_int,#km,#matricula,#precio {
        margin-bottom: 20px;
        width: 400px;
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

    #anuncio {
        background-color: #afafaf;
        margin: auto;
        width: 1500px;
        height: 700px;
        margin-top: 150px;
    }
</style>
<?php
include_once('footer/header.php')
?>

<body>
    <div style="width:1200px;margin:auto;margin-top:20px;">
        <div class="linea">&nbsp;</div>

        <div class="leyenda">
            <h1>Subir Anuncio</h1>
        </div>

        <div class="linea">&nbsp;</div>
    </div>
    <div id="anuncio">
        <?php
        require_once('funciones.php');
        $marcas = obtenerMarcas();
        ?>
        <form action="#" method="post" enctype='multipart/form-data'>
            <label id="foto1">Foto Del Vehiculo</label>
            <input name='foto' id='foto' type='file'><br>
            <label id="marca">Marca</label>
            <select>
                <?php
                foreach ($marcas as $marca) {
                    echo "<option value='$marca[Nombre]'>$marca[Nombre]</option>";
                }
                ?>
            </select><br>
            <label id="modelo1">Modelo</label>
            <input type="text" class="modelo" name="modelo" id="modelo"><br>
            <label id="acabado1">Acabado</label>
            <input type="text" class="acabado" name="acabado" id="acabado"><br>
            <label id="combustible">Combustible</label>
            <select>
                <option value='diesel'>Diesel</option>
                <option value='gasolina'>Gasolina</option>
                <option value='hibrido'>Hibrido</option>
                <option value='electrico'>Electrico</option>
            </select><br>
            <label id="año1">Año de Matriculacion</label>
            <input type="number" class="año" name="año" id="año" min='1900' max='2023'><br>
            <label id="cv1">Caballos</label>
            <input type="number" class="cv" name="cv" id="cv"><br>
            <label id="cambio">Cambio</label>
            <select>
                <option value='manual'>Manual</option>
                <option value='automatico'>Automatico</option>
            </select><br>
            <label id="color_ext1">Color exterior</label>
            <input type="text" class="color_ext" name="color_ext" id="color_ext"><br>
            <label id="color_int1">Color interior</label>
            <input type="text" class="color_int" name="color_int" id="color_int"><br>
            <label id="km1">Kilometros</label>
            <input type="number" class="km" name="km" id="km" placeholder="Minimo 1000 Kilometros" min='1000'><br>
            <label id="matricula1">Matricula</label>
            <input type="text" class="matricula" name="matricula" id="matricula"><br>
            <label id="precio1">Precio</label>
            <input type="number" class="precio" name="precio" id="precio"><br>
            <label for="descripcion1">Descripcion</label>
            <textarea id="descripcion" name="descripcion" rows="4" cols="50">
            </textarea>
        </form>
    </div>
    <br><br><br><br><br><br><br><br>

    <a href="catalogo.php">VOLVER</a>



    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>

</html>