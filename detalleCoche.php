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
    #general{
        width: 1500px;
        height: 100px;
        /* background-color: grey; */
        margin-left: 3%;
    }
</style>
<?php
include_once('footer/header.php')
?>

<body>
    <div id="general">
    <div style="width:1100px;margin-left:240px;">
        <div class="linea">&nbsp;</div>

        <div class="leyenda">
            <h1>Vehiculo</h1>
        </div>

        <div class="linea">&nbsp;</div>
    </div>
    <div id="vehiculo">
        

    </div>
    <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
    ?>
    </div>
    
    <br><br><br><br><br><br>
    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>

</html>