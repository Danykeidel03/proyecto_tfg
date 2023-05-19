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
    $not = mostrarNoticias1();
    echo "
        <center>
            <table>
                <tH>ID</tH>
                <th>TITULO</th>
                <th>LINK</th>
                <th>FOTO</th>
                <th>CAMBIAR NOTICIA</th>
        ";
    foreach ($not as $noticia) {
        $fo = $noticia['foto'];

        echo "
        <tr>
            <td>$noticia[id]</td>
            <td>$noticia[titulo]</td>
            <td>$noticia[link]</td>
            <td><img src='$fo' width='300px' height='150px'></td>
            <td>
            <form action='#'>
            <input value='$noticia[id]' name='id' id='id' type='hidden'>
            <input value='EDITAR' name='edit' id='edit' class='edit' type='submit'>
            </form>
            </td>
        </tr>
        ";
    }
    echo "</table>
        </center>";
    if (isset($_REQUEST['edit'])) {
        $id = $_REQUEST['id'];
        $not1 = mostrarNoticias($id);
        echo "
        <div id='form_editar'>
        <h1>VAS A EDITAR LA NOTICIA NUMERO $id</h1>";
        foreach ($not1 as $noticia1) {
            echo "
            <form action='#' method='post' enctype='multipart/form-data' id='editar'>
            <label>TITULO DE LA NOTICIA:</label>
            <input value='$noticia1[titulo]' name='titulo' id='titulo' class='titulo' type='text' placeholder='$noticia1[titulo]'>
            <br><label>LINK DE LA NOTICIA:</label>
            <input value='$noticia1[link]' name='link' id='link' class='link' type='text' placeholder='$noticia1[link]'>
            <br><label>EDITAR LA FOTO:</label>
            <input name='fileTest' id='fileTest' type='file'>
            <br><input value='EDITAR' name='confirmar_edit' id='confirmar_edit' class='confirmar_edit' type='submit'>
            </form>
            </div>";

            if (isset($_POST['confirmar_edit'])) {
                $titulo = $_POST['titulo'];
                $link = $_POST['link'];

                $n_arch = $_FILES['fileTest']['name'];
                $archivo = $_FILES['fileTest']['tmp_name'];

                $ruta = "imagenes/" . $n_arch;
                $base_datos = "imagenes/" . $n_arch;

                move_uploaded_file($archivo, $ruta);

                guardarImg($base_datos, $titulo, $link, $id);
            }
        }
    } else {
        echo "<h1>NINGUNA NOTICIA SELECCIONADA</h1>";
    }
    ?>
    <br><br><br>
    <a href="index.php">VOLVER</a>


    </div>
    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>
<script>
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
</html>