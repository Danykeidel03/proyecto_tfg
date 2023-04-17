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

    select,
    #foto,
    #modelo,
    #acabado,
    #ano,
    #cv,
    #color_ext,
    #color_int,
    #km,
    #matricula,
    #precio {
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
        height: 900px;
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
            <label id="marca1">Marca</label>
            <select id="marca" name="marca">
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
            <label id="combustible1">Combustible</label>
            <select id="combustible" name="combustible">
                <option value='diesel'>Diesel</option>
                <option value='gasolina'>Gasolina</option>
                <option value='hibrido'>Hibrido</option>
                <option value='electrico'>Electrico</option>
            </select><br>
            <label id="ano1">Año de Matriculacion</label>
            <input type="number" class="ano" name="ano" id="ano" min='1900' max='2023'><br>
            <label id="cv1">Caballos</label>
            <input type="number" class="cv" name="cv" id="cv"><br>
            <label id="cambio1">Cambio</label>
            <select id="cambio" name="cambio">
                <option value='manual'>Manual</option>
                <option value='automatico'>Automatico</option>
            </select><br>
            <label id="puertas1">Numero de Puertas</label>
            <select id="puertas" name="puertas">
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
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
            <br>
            <input id="subir_coche" class="subir_coche" name="subir_coche" type="submit" value="Subir Coche">
            <br>
        </form>

    </div>
    <br><br><br><br><br><br><br><br>

    <a href="catalogo.php">VOLVER</a>



    <footer id="footer"></footer>
</body>
<script src="footer/añadirheadersfooters.js"></script>

<script>
    let insert = document.getElementById('subir_coche')
    insert.addEventListener('click', añadirCoche)

    function añadirCoche() {

        event.preventDefault();

        let marcaImput = document.getElementById('marca')
        let marca = marcaImput.value;

        let modeloImput = document.getElementById('modelo')
        let modelo = modeloImput.value;

        let acabadoImput = document.getElementById('acabado')
        let acabado = acabadoImput.value;

        let combustibleImput = document.getElementById('combustible')
        let combustible = combustibleImput.value;

        let anoImput = document.getElementById('ano')
        let ano = anoImput.value;

        let cvImput = document.getElementById('cv')
        let cv = cvImput.value;

        let cambioImput = document.getElementById('cambio')
        let cambio = cambioImput.value;

        let color_extImput = document.getElementById('color_ext')
        let color_ext = color_extImput.value;

        let color_intImput = document.getElementById('color_int')
        let color_int = color_intImput.value;

        let matriculaImput = document.getElementById('matricula')
        let matricula = matriculaImput.value;

        let kmImput = document.getElementById('km')
        let km = kmImput.value;

        let precioImput = document.getElementById('precio')
        let precio = precioImput.value;

        let descripcionImput = document.getElementById('descripcion')
        let descripcion = descripcionImput.value;

        let puertasImput = document.getElementById('puertas')
        let puertas = puertasImput.value;

        let id = localStorage.getItem('id')
        let usernme = localStorage.getItem('usernme')

        if (modelo != "" && acabado != "" && ano != "" && cv != "" && color_ext != "" && color_int != "" && matricula != "" && km != "" && precio != "" && descripcion != "") {
            let coche = {
                id: id,
                username: username,
                marca: marca,
                modelo: modelo,
                acabado: acabado,
                combustible: combustible,
                ano: ano,
                cv: cv,
                cambio: cambio,
                color_ext: color_ext,
                color_int: color_int,
                matricula: matricula,
                km: km,
                precio: precio,
                descripcion: descripcion,
                puertas: puertas
            }

            let cocheJson = JSON.stringify(coche);
            console.log(cocheJson);

            fetch('APIS/insertar_coche.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charser=utf-8'
                    },
                    body: rutaJson
                })

                .then(response => {
                    switch (response.status) {
                        case 201:
                            alert("Insertado Con Exito");
                            break;
                        case 409:
                            alert("Vehiculo existente");
                            break;
                        case 400:
                            alert("ERROR");
                    }
                    return response.json();

                })

                .then(data => {
                    console.log(data);

                })
        } else {
            alert('Faltan Datos Por Rellenar')
        }

    }
</script>

</html>