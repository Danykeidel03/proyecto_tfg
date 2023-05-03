<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
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

    .parent_11 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1_11 {
        grid-area: 1 / 1 / 6 / 2;
        border: 1px black solid;
        height: 500px;
    }

    .div2_11 {
        grid-area: 1 / 2 / 6 / 3;
        height: 500px;
        border: 1px black solid;

    }

    #msg_2 {
        /* width: 300px; */
        margin-bottom: 5px;
    }

    #msg_1 {
        margin-bottom: 5px;
        /* width: 300px; */

    }
</style>
<?php
include_once('footer/header.php');
$idComp = $_REQUEST['miCampoOculto'];
$idVend = $_REQUEST['id_1'];
?>

<body>
    <div id="funciona">
        <div style="background-color: #f1f0f0; border-radius: 10px; padding: 10px; max-width: 400px; margin: 20px auto; ">
            <div style="background-color: white; border-radius: 10px; padding: 10px; margin-bottom: 10px;height: 500px">

                <div class="parent_11">
                    <div class="div1_11"></div>
                    <div class="div2_11"></div>
                </div>
            </div>
            <form id='formulario-mensaje' action="#">
                <input type="text" name='msg' id='msg' class='msg' placeholder="Escribe tu mensaje..." style="border: none; border-radius: 5px; padding: 5px; width: 80%;">
                <?php
                echo "
                    <input id='id_1' name='id_1' type='hidden' value='$idVend'>
                    <input type='hidden' name='miCampoOculto' id='miCampoOculto' value='$idComp'>
                    "
                ?>
                <button type="submit" name='env_msg' id='env_msg' class='env_msg' style="background-color: #4CAF50; border: none; color: white; border-radius: 5px; padding: 5px 10px;">Enviar</button>
            </form>
        </div>

        <?php
        if (isset($_REQUEST['env_msg'])) {
            $idComp1 = $_REQUEST['miCampoOculto'];
            $idVend1 = $_REQUEST['id_1'];
            $msg = $_REQUEST['msg'];

            include_once('funciones.php');

            evniarMsg($msg, $idVend1, $idComp1);
        }
        ?>

        <a href="catalogo.php">VOLVER</a>


    </div>
    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>
<script src="detallesCoche.php"></script>
<script>
    let id1 = document.getElementById('id_1').value;
    var id = localStorage.getItem('id');
    console.log(id);
    console.log(id1);

    if (id == id1) {
        funciona.innerHTML = ''
        window.location.href = ('http://localhost/DWES/tfg/index.php')
    } else {
        setInterval(() => {
            fetch(`APIS/mensajes.php?idVendedor=${id1}&idComprador=${id}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })

                .then(response => {
                    switch (response.status) {
                        case 200:
                            return response.json();
                            break;
                        case 404:
                            console.log("NO PUEDES INICIAR SESION");
                    }
                })

                .then(data => {
                    let str = '';
                    let div1 = document.querySelector('.div1_11')
                    data.forEach(element => {
                        msg = element.mensaje
                        str += `${msg}<br>`;
                    })
                    div1.innerHTML = str
                })

            fetch(`APIS/mensajes.php?idVendedor=${id}&idComprador=${id1}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })

                .then(response => {
                    switch (response.status) {
                        case 200:
                            return response.json();
                            break;
                        case 404:
                            console.log("NO PUEDES INICIAR SESION");
                    }
                })

                .then(data => {
                    let str = '';
                    let div2 = document.querySelector('.div2_11')
                    data.forEach(element => {
                        msg = element.mensaje
                        str += `${msg}<br>`;
                    })
                    div2.innerHTML = str
                })
        }, 500)
    }
</script>
<script>
    let funciona = document.getElementById('funciona')
    if (!localStorage.getItem('token')) {
        funciona.innerHTML = ''
        window.location.href = ('http://localhost/DWES/tfg/index.php')
    }
</script>

</html>