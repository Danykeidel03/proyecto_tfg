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

    .linea {
        margin: 0px 30px;
        width: 29%;
        border-top: 1px solid #999;
        position: relative;
        top: 40px;
        float: left;
    }

    .leyenda {
        font-weight: bold;
        float: left;
    }

    h1,
    #act,
    a,
    h4,
    .parent_8 {
        color: #7f0000;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    .parent_8{
        color: black;
    }

    #act {
        margin-left: 10px;
        color: black;
    }

    #inside_filtros {
        margin-left: 20px;
    }

    .parent_6 {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        width: 100%;
    }

    .div1_6 {
        grid-area: 1 / 1 / 6 / 2;
        margin-top: 30px;

    }

    .div2_6 {
        grid-area: 1 / 2 / 6 / 6;
        margin-left: -30px;
        margin-top: 30px;
    }

    #tx {
        padding: 10px;
        margin-top: 10px;

    }

    #marca,
    #precio,
    #cv,
    #km,
    #ano,
    select {
        border: black solid 0px;
        border-bottom: 1px black solid;
        width: 200px;
        text-align: left;
        background-color: white;
        margin-bottom: 50px;
    }

    input:focus {
        outline: none;
    }

    #submit_filtro {
        width: 200px;
        background-color: #7f0000;
        color: white;
        border-radius: 10px;
        margin-bottom: 50px;
    }

    .parent_8 {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        /* background-color: grey; */
        height: 200px;
        width: 1000px;
        margin-bottom: 50px;
        /* border: 1px solid black; */
        -webkit-box-shadow: 6px 6px 15px 2px rgba(0, 0, 0, 0.64);
        -moz-box-shadow: 6px 6px 15px 2px rgba(0, 0, 0, 0.64);
        box-shadow: 6px 6px 15px 2px rgba(0, 0, 0, 0.64);
        border-radius: 4px 4px 4px 4px;
        -webkit-border-radius: 4px 4px 4px 4px;
        -moz-border-radius: 4px 4px 4px 4px;
    }

    .div1_8 {
        grid-area: 1 / 2 / 3 / 7;
    }

    .div2_8 {
        grid-area: 1 / 2 / 3 / 4;
        /* border: 1px solid black; */
        width: 326px;
        margin-left: -143px;
    }

    .div3_8 {
        grid-area: 2 / 4 / 3 / 7;
        /* border: 1px solid black; */
        margin-left: -100px;
        width: 670px;
    }

    .div4_8 {
        grid-area: 1 / 4 / 2 / 7;
        /* border: 1px solid black; */
        margin-left: -100px;
        width: 670px;
    }

    #coches {
        margin-top: 100px;
        /* width: 1000px; */
        margin-left: 130px;
    }

    #añadir_not {
        margin-left: -9px;
        margin-top: -40px;
    }

    #ano1 {
        margin-left: 30px;
        border: 0;
        margin-top: 15px;
        font-size: 30px;
    }

    #prec {
        margin-left: 30px;
        font-size: 25px;
        color: #7f0000;
        margin-top: -10px;
    }

    #dat {
        margin-left: 30px;
        font-size: 20px;
        margin-top: 10px;
    }

    #estado {
        margin-left: 550px;
        margin-top: -82px;
        font-size: 15px;

    }

    #ver {
        margin-left: 560px;
        margin-top: -20px;
    }

    button {
        background: none;
        border: 0;
        color: inherit;
        /* cursor: default; */
        font: inherit;
        line-height: normal;
        overflow: visible;
        padding: 0;
        cursor: pointer;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500&family=Fjalla+One&family=IBM+Plex+Mono:wght@500&family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">

<body>
    <?php
    include_once('footer/header.php')
    ?>
    <div class="parent_6">
        <div class="div1_6">
            <div id="inside_filtros">
                <h1>FILTROS</h1>
                <div>
                    <form id="f">
                        <div id="tx">
                            <input type="text" id="marca" name="marca" placeholder="Marca Coche">
                            <input type="number" id="precio" name="precio" placeholder="Precio Maximo Coche" pattern="[0-9]*">
                            <input type="number" id="cv" name="cv" placeholder="Minimo De Caballos Coche">
                            <input type="number" id="km" name="km" placeholder="Maximo De Kilometros Coche">
                            <input type="number" id="ano" name="ano" placeholder="Hasta El Año">
                            <!-- <input type="submit" id="submit_filtro" name="submit_filtro" value="Buscar"> -->
                        </div>
                    </form>
                </div>
                <div id="añadir_not"></div>
            </div>

        </div>
        <div class="div2_6">
            <div style="width:1100px;margin-left:110px;">
                <div class="linea">&nbsp;</div>

                <div class="leyenda">
                    <h1>Coches A La Venta</h1>
                </div>

                <div class="linea">&nbsp;</div>
            </div>
            <div id="coches">

            </div>
        </div>
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

    let rol1 = desencriptar(rol, 'hola')

    if (localStorage.getItem('token') && rol1 == "admin") {
        let crearRuta = document.getElementById('añadir_not');
        crearRuta.innerHTML = `<a href="añadirVehiculo.php" id="act">Subir Anuncio</a><br><br><a href="verVehiculo.php" id="act">Ver Anuncios</a>`;
    }
    else if(localStorage.getItem('token')){
        let crearRuta = document.getElementById('añadir_not');
        crearRuta.innerHTML = `<a href="añadirVehiculo.php" id="act">Subir Anuncio</a>`;
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        mostrarVehiculos();
    })

    let formulario = document.forms[0]

    let imputNombre = document.querySelector('#marca');
    let marca = formulario.elements.marca;
    marca.addEventListener("keyup", mostrarVehiculos)

    let imputprecio = document.querySelector('#precio');
    let precio = formulario.elements.precio;
    precio.addEventListener("keyup", mostrarVehiculos)

    let imputcv = document.querySelector('#cv');
    let cv = formulario.elements.cv;
    cv.addEventListener("keyup", mostrarVehiculos)

    let imputkm = document.querySelector('#km');
    let km = formulario.elements.km;
    km.addEventListener("keyup", mostrarVehiculos)

    let imputano = document.querySelector('#ano');
    let ano = formulario.elements.ano;
    ano.addEventListener("keyup", mostrarVehiculos)

    function mostrarVehiculos() {

        let imputNombre = document.getElementById('marca');
        let marca = imputNombre.value;

        let imputprecio = document.querySelector('#precio');
        let precio = imputprecio.value;

        let imputcv = document.querySelector('#cv');
        let cv = imputcv.value;

        let imputkm = document.querySelector('#km');
        let km = imputkm.value;

        let imputano = document.querySelector('#ano');
        let ano = imputano.value;

        // ?marca=${marca}&precio=${precio}&cv=${cv}&km=${km}&ano=${ano}

        fetch(`APIS/coches_venta.php?marca=${marca}&precio=${precio}&cv=${cv}&km=${km}&ano=${ano}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })

            .then(response => {
                switch (response.status) {
                    case 200:
                        console.log("SACASTE LOS VEHICULOS");
                        return response.json();
                        break;
                    case 404:
                        console.log("NO PUEDES INICIAR SESION");
                }
            })

            .then(data => {
                console.log(data);
                let divCoches = document.getElementById('coches')
                let str = "";
                data.forEach(element => {
                    let id = element.id
                    let marca = element.marca
                    let modelo = element.modelo
                    let foto = element.foto
                    let km = element.km
                    let ano = element.ano
                    let precio = element.precio
                    let color = element.color_ext
                    let acabado = element.acabado
                    let estado = element.estado

                    str += `
                    <div class="parent_8">
                        <div class="div2_8"> <img src='fotoCoche/${foto}' width= 326px height= 200px></div>
                        <div class="div4_8"> 
                        <div id='ano1'>${ano} | ${marca}  ${modelo}</div><br>
                        <div id='prec'>${precio}€</div>
                        <div id='estado'>Estado: ${estado}</div>
                        </div>
                        <div class="div3_8">
                        <div id='dat'>
                            Acabado: ${acabado}<br>
                            Kilometros: ${km} Km<br>
                            Color: ${color}<br>
                        </div>
                        <div id='ver'>
                            <form action='detalleCoche.php'>
                                <div id='min'><button>Ver Mas >></button></div>
                                <input id="id" name="id" type="hidden" value="${id}">
                            </form>
                        </div>
                        </div>
                    </div> 
                `
                })
                divCoches.innerHTML = str
            })
    }
</script>

</html>