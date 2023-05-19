<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html,
    body,
    footer,
    header {
        min-width: 1500px;
        max-width: 44000px;
        /* max-height: 44000px; */
    }

    html,
    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }

    .linea {
        margin: 0px 30px;
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

    #fichas {
        display: grid;
        grid-template-columns: repeat(3, 2fr);
        grid-template-rows: repeat(2, 1fr);
        margin: 40px;
        width: 75%;
        max-width: 750px;
        transition: all 0.15s;
        border-radius: 5px;
        grid-column-gap: 100px;
        grid-row-gap: 60px;
        margin-left: 6%;
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

    #act {
        margin-left: -860px;
        color: black;
        margin-top: 5px;
    }

    .parent_5 {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-template-rows: repeat(0, 0fr);
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        width: 400px;
    }

    .div1_5 {
        grid-area: 1 / 1 / 3 / 3;
    }

    .div2_5 {
        grid-area: 3 / 1 / 4 / 3;
    }

    .div3_5 {
        grid-area: 4 / 1 / 5 / 3;
    }

    .button-5 {
        align-items: center;
        background-clip: padding-box;
        background-color: #7f0000;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        width: auto;
    }

    .button-5:hover,
    .button-5:focus {
        background-color: #7f0000;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }

    .button-5:hover {
        transform: translateY(-1px);
    }

    .button-5:active {
        background-color: #c85000;
        box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
        transform: translateY(0);
    }

    html {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }

    footer {
        margin-top: auto;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500&family=Fjalla+One&family=IBM+Plex+Mono:wght@500&family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">

<body>
    <?php
    include_once('footer/header.php')
    ?>
    <div id="general">
        <div style="width:1340px;margin-left:9%;margin-top:20px;">
            <div class="linea">&nbsp;</div>

            <div class="leyenda">
                <h1>Fichas Tecnicas</h1>
            </div>

            <div class="linea">&nbsp;</div>
        </div>
        <br><br><br><br>
        <div id="añadir_not"></div>
        <?php
        include_once('funciones.php');
        $fichas = mostrarFichas();
        echo "
                <div id='fichas'>
            ";
        foreach ($fichas as $ficha) {
            echo "
                
                    <div class='parent_5'>
                    <div class='div1_5'><img src='$ficha[foto]' width='100%' height='270px'>  </div>
                    <div class='div2_5'><h4>$ficha[nombre]</h4> </div>
                    <div class='div3_5'> <a href='$ficha[pdf]' download='$ficha[pdf].pdf'><button class='button-5' role='button'>Ficha Tecnica</button>
                    </a> </div>
                </div>
            ";
        }
        echo "
                </div>
            ";
        ?>
    </div>

    <br><br>
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

    let rol1 = desencriptar(rol, 'hola')

    if (localStorage.getItem('token') && rol1 == "admin") {
        let crearRuta = document.getElementById('añadir_not');
        crearRuta.innerHTML = `<a href="actualizarFichas.php" id="act">Añadir Ficha</a>`;
    }
</script>

</html>