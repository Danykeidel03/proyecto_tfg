<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
    form {
        margin-left: 30%;
    }

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

    html,
    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }

    html {
        min-height: 100%;
        position: relative;
    }

    body {
        margin: 0;
        margin-bottom: 40px;
    }

    footer {
        background-color: black;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 40px;
        color: white;
    }

    #foto_coche {
        /* margin-left: 34px; */
        background-color: white;
        width: 300px;

    }

    #ficha_coche {
        /* margin-left: -24px; */
        background-color: white;
        width: 300px;
    }

    /* CSS */
    #añadir_ficha {
        /* align-items: center; */
        background-color: rgba(240, 240, 240, 0.26);
        border: 1px solid #DFDFDF;
        border-radius: 16px;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: flex;
        font-family: Inter, sans-serif;
        font-size: 16px;
        justify-content: center;
        line-height: 5px;
        max-width: 100%;
        padding: 14px 22px;
        text-decoration: none;
        transition: all .2s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 40px;
        height: 40px;
    }

    #añadir_ficha:active,
    #añadir_ficha:hover {
        outline: 0;
    }

    #añadir_ficha:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .añadir_ficha {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }
    }

    #eliminar_ficha {
        /* align-items: center; */
        background-color: rgba(240, 240, 240, 0.26);
        border: 1px solid #DFDFDF;
        border-radius: 16px;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: flex;
        font-family: Inter, sans-serif;
        font-size: 16px;
        justify-content: center;
        line-height: 5px;
        max-width: 100%;
        padding: 14px 22px;
        text-decoration: none;
        transition: all .2s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 40px;
        height: 40px;
        margin-top: 15px;
    }

    #eliminar_ficha:active,
    #eliminar_ficha:hover {
        outline: 0;
    }

    #eliminar_ficha:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .eliminar_ficha {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }
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

    #nombre_coche,
    #foto_coche,
    #ficha_coche,
    #nombres {
        display: flex;
        width: 695px;
        padding: 10px;
        background-color: #f7f7f7;
        color: #333;
        border: none;
        border-radius: 4px;
        margin-top: 15px;
    }
</style>
<?php
include_once('footer/header.php')
?>

<body>
    <div id="funciona">
        <div style="width:1400px;margin-left:8%;margin-top:20px;">
            <div class="linea">&nbsp;</div>

            <div class="leyenda">
                <h1>Actualizar Fichas</h1>
            </div>

            <div class="linea">&nbsp;</div>
        </div>
        <br><br><br><br><br>
        <form action="#" method="post" enctype='multipart/form-data'>
            <label>Nombre Coche:</label>
            <input id="nombre_coche" class="nombre_coche" name="nombre_coche" type="text"><br><br>
            <label>Foto Coche:</label>
            <input id="foto_coche" class="foto_coche" name="foto_coche" type="file"><br><br>
            <label>PDF Ficha tecnica:</label>
            <input id="ficha_coche" class="ficha_coche" name="ficha_coche" type="file"><br><br>
            <input value='AÑADIR' name='añadir_ficha' id='añadir_ficha' class='añadir_ficha' type='submit'>
        </form> <br><br>

        <?php
        if (isset($_POST['añadir_ficha'])) {
            $nombre = $_POST['nombre_coche'];

            $n_arch = $_FILES['ficha_coche']['name'];
            $archivo = $_FILES['ficha_coche']['tmp_name'];

            $ruta = "fichas/" . $n_arch;
            $base_datos = "fichas/" . $n_arch;

            move_uploaded_file($archivo, $ruta);

            $n_arch1 = $_FILES['foto_coche']['name'];
            $archivo1 = $_FILES['foto_coche']['tmp_name'];

            $ruta1 = "fotoFichas/" . $n_arch1;
            $base_datos1 = "fotoFichas/" . $n_arch1;

            if ($nombre != "" && $base_datos1 != "" && $base_datos != "") {
                

                include_once('funciones.php');

                $f = fichaRep($nombre);

                if($f == null){
                    guardarFicha($nombre, $base_datos1, $base_datos);
                    move_uploaded_file($archivo1, $ruta1);
                }else{
                    echo "<script>alert('Nombre repetido')</script>";
                }

                
            }
            else{
                echo "<script>alert('Faltan Datos Por rellenar')</script>";
            }
        }
        ?>
        <form action="#" method="post">
            <select id="nombres" value="nombres" name="nombres">
                <?php
                include_once('funciones.php');
                $f = mostrarFichas1();
                foreach ($f as $fich) {
                    echo "<option value='$fich[nombre]'>$fich[nombre]</option>";
                }
                ?>
            </select>
            <input value='ELIMINAR' name='eliminar_ficha' id='eliminar_ficha' class='eliminar_ficha' type='submit'>
        </form>
        <?php
        if (isset($_POST['eliminar_ficha'])) {
            $nombres = $_POST['nombres'];
            include_once('funciones.php');
            $delted = deleteFicha($nombres);
            if ($delted) {
                echo "VEHICULO ELIMINADO";
            } else {
                echo "error";
            }
        }
        ?>
        <br><br><br>
        <a href="fichas.php">VOLVER</a>
        <br><br><br>
        <footer id="footer"></footer>
    </div>
</body>
<script>
    let funciona = document.getElementById('funciona')
    function desencriptar(palabraEncriptada, clave) {
  var palabra = "";
  for (var i = 0; i < palabraEncriptada.length; i++) {
    var letra = palabraEncriptada.charCodeAt(i) ^ clave.charCodeAt(i % clave.length);
    palabra += String.fromCharCode(letra);
  }
  return palabra;
}

    let rol = localStorage.getItem('rol')

    if(rol == null){
        window.location.href = ('index.php')

    }else{
        let rol1 = desencriptar(rol, 'hola')

if (localStorage.getItem('token') && (rol1 == "usuario" )) {
    funciona.innerHTML = ''
    window.location.href = ('index.php')
}
    }

    
</script>
<script src="footer/añadirheadersfooters.js"></script>

</html>