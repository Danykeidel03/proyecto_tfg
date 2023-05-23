<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<style>
    #delete {
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
        margin-left: 30px;
    }

    #delete:active,
    #delete:hover {
        outline: 0;
    }

    #delete:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .delete {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }
    }

    #id {
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
        width: 200px;
        height: 60px;
        margin-top: 15px;
        margin-left: 30px;
    }

    #id:active,
    #id:hover {
        outline: 0;
    }

    #id:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .id {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }
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
        /* margin-right: 50px; */

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

    #tab_next,
    #tab_previous,
    .paginate_button {
        position: relative;
        cursor: pointer;
    }

    .odd{
        margin-left: 30px;
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
                <h1>Eliminar Anuncios</h1>
            </div>

            <div class="linea">&nbsp;</div>
        </div>
        <br><br><br><br><br><br><br><br>

        <?php
        require_once('funciones.php');
        $car = mostrarAnuncios();
        $ids = obtenerId();

        echo "
        <form>
            <select id='id' name='id'>
        ";
        foreach ($ids as $id) {
            echo "
            <option value='$id[id]'>$id[id] --- $id[matricula]</option>
            ";
        }


        echo "
            </select>
            <input value='ELIMINAR' class='delete' id='delete' name='delete' type='submit'>

        </form>
        <br><br>
        <center>
            <table id='tab'>
            <thead class='table-dark'>
            <tr>
                <th>ID</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>MATRICULA</th>
                <th>FOTO</th>
            </tr>
            </thead>
            <tbody>
            
        ";
        foreach ($car as $coche) {
            $fo = $coche['foto'];

            echo "
        <tr id='prueba'>
            <td>$coche[id]</td>
            <td>$coche[marca]</td>
            <td>$coche[modelo]</td>
            <td>$coche[matricula]</td>
            <td><img src='fotoCoche/$fo' width='300px' height='150px'></td>
        </tr>
        ";
        }
        echo "</tbody></table>
        </center>";
        ?>
        <br><br><br>
        <a href="index.php">VOLVER</a>


    </div>
    <footer id="footer"></footer>
</body>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/searchbuilder/1.4.0/js/dataTables.searchBuilder.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tab').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            }
        });
    });
</script>

<script src="footer/añadirheadersfooters.js"></script>
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

    if (rol == null) {
        window.location.href = ('index.php')

    } else {
        let rol1 = desencriptar(rol, 'hola')

        if (localStorage.getItem('token') && (rol1 == "usuario")) {
            funciona.innerHTML = ''
            window.location.href = ('index.php')
        }
    }
</script>
<script>
    let borrarC = document.querySelector('.delete')
    borrarC.addEventListener('click', borrarCoche)

    function borrarCoche() {

        event.preventDefault();

        let imputUsuEdit = document.querySelector('#id');
        let id = imputUsuEdit.value;

        let token = localStorage.getItem('token')
        let username = localStorage.getItem('username')

        console.log(id);

        let persona = {
            id: id,
            username: username,
            token: token,
        }

        let usuario = JSON.stringify(persona);

        console.log(usuario);

        fetch(`APIS/deleteCoche.php`, {
                method: 'DELETE',
                headers: {
                    'Authorization': token,
                },
                body: usuario
            })

            .then(response => {
                switch (response.status) {
                    case 200:
                        alert("Vehiculo Eliminado");
                        return response.json();
                        break;
                    case 400:
                        alert("ERROR");
                        break;
                    case 404:
                        alert("No indicaste el id");
                        break;
                }
            })

            .then(data => {
                console.log(data);
            })
    }
</script>

</html>