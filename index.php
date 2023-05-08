<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">

</head>
<style>
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

    #letrasArriba {
        position: absolute;
        margin-top: -600px;
        margin-left: 50px;
        color: white;
    }

    .linea {
        margin: 0px 20px;
        width: 500px;
        border-top: 1px solid #999;
        position: relative;
        top: 40px;
        float: left;
    }

    .leyenda {
        font-weight: bold;
        float: left;
    }

    .parent_2 {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 40px;
        grid-row-gap: 40px;
        margin-left: -60px;
        margin-bottom: -50px;
    }

    .div1_2 {
        grid-area: 1 / 2 / 3 / 3;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    .div1_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div2_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div3_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div4_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div5_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div6_2:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.8);
        transition: all 0.5s;
        opacity: 0.5;

    }

    .div2_2 {
        grid-area: 1 / 3 / 3 / 4;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    .div3_2 {
        grid-area: 1 / 4 / 3 / 5;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    .div4_2 {
        grid-area: 3 / 2 / 5 / 3;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    .div5_2 {
        grid-area: 3 / 3 / 5 / 4;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    .div6_2 {
        grid-area: 3 / 4 / 5 / 5;
        width: 450px;
        height: 300px;
        border-radius: 5px;
        -webkit-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
        box-shadow: 7px 11px 24px -4px rgba(0, 0, 0, 0.59);
    }

    h1,
    #act,a,h4 {
        color: #7f0000;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }
    html{
        height: 100%;
    }

    body{
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }

    footer{
        margin-top: auto;
    }
    /* #ver_mas{
        margin-top : 266px;
        margin-left: -70px;
    } */
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500&family=Fjalla+One&family=IBM+Plex+Mono:wght@500&family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">

<body>
    <?php
    include_once('footer/header.php')
    ?>
    <?php
            if (isset($_REQUEST['marc_vend'])) {
                require_once('funciones.php');

                $id = $_REQUEST['id_d'];
                $edit = cambiarEst($id);
            }
            ?>
    <div id="general">

        <img src="img/inicio1.jpg" width="100%" height="700px">
        <!-- <H1 id="letrasArriba">ULTIMAS NOTICIAS</H1> -->


        <div style="width:1400px;margin:auto;margin-top:20px;">
            <div class="linea">&nbsp;</div>

            <div class="leyenda">
                <h1>ULTIMAS NOTICIAS</h1>
            </div>

            <div class="linea">&nbsp;</div>

            <br><br><br><br><br>
            <div id="añadir_not"></div>
            <br><br>
            <div class="parent_2">
                <?php
                require_once('funciones.php');
                $not = mostrarNoticias1();
                foreach ($not as $noticia) {
                    echo "
                        <div class='div$noticia[id]_2'>
                            <div class='parent_3'>
                                <div class='div1_3'>
                                    <img src='$noticia[foto]' width='100%' height='300px'> 
                                    <h4>$noticia[titulo]</h4>
                                    <a href='$noticia[link]' id='ver_mas'>Ver Mas</a>
                                </div> 
                            </div> 
                       </div>
                       ";
                }
                ?>
            </div>
        </div>
        <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>
<script>
    if (localStorage.getItem('token') && localStorage.getItem('rol') == "admin") {
        let crearRuta = document.getElementById('añadir_not');
        crearRuta.innerHTML = `<a href="actualizarNoticias.php" id="act">Añadir Noticia</a>`;
    }
</script>

</html>