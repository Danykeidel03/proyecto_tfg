<style>
    .modalContainer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modalContainer .modal-content {
        background-color: #fefefe;
        margin: auto;
        width: 700px;
        height: 500px;
    }

    .modalContainer .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        margin-left: 10px;
    }

    .modalContainer .close:hover,
    .modalContainer .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modalContainer1 {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modalContainer1 .modal-content1 {
        background-color: #fefefe;
        margin: auto;
        /* padding: 20px; */
        /* border: 1px solid lightgray; */
        /* border-top: 10px solid #58abb7; */
        width: 700px;
        height: 600px;
    }

    .modalContainer1 .close1 {
        color: #7f0000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        margin-left: 10px;
    }

    .modalContainer1 .close1:hover,
    .modalContainer1 .close1:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modCont {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 10px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modCont .modal-c {
        background-color: #fefefe;
        margin: auto;
        /* padding: 20px; */
        /* border: 1px solid lightgray; */
        /* border-top: 10px solid #58abb7; */
        width: 700px;
        height: 720px;
    }

    .modCont .cls {
        color: #7f0000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        margin-left: 10px;
    }

    .modCont .cls:hover,
    .modCont .cls:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    #form {
        margin-top: 30px;
        margin-left: 230px;
    }

    #form #pass_inicio{
        margin-left: -1px;
    }

    #form1 {
        margin-top: 30px;
        margin-left: 230px;
    }

    #form2 {
        margin-top: 30px;
        margin-left: 230px;
    }

    #form2 label {
        margin-left: -80px;
    }

    #form1 label {
        margin-left: -80px;
    }

    #form1 input {
        margin-left: 20px;
    }

    #form1 #nombre {
        margin-left: 2px;
    }

    #form1 #nombre_usu {
        margin-left: -9px;
    }

    #form1 #pass1 {
        margin-left: 65px;
    }

    #form1 #pass_rep {
        margin-left: -9px;
    }

    #form1 #ciudad {
        margin-left: 106px;
    }

    #form1 #dni {
        margin-left: 135px;
    }

    #form1 #tfno {
        margin-left: 87px;
    }

    #form2 #nombre_usu_edt {
        margin-left: -24px;
    }

    #form2 #ciudad_edt {
        margin-left: 78px;
    }

    #form2 #tfno_edt {
        margin-left: 59px;
    }

    #form2 #correo_edt {
        margin-left: 78px;
    }

    #form1 #correo {
        margin-left: 106px;
    }

    input {
        text-align: center;
        width: 200px;
        height: 25px;
        margin-left: 7px;
        margin-bottom: 15px;
        /* border-radius: 6px; */
        background-color: #d5d5d5;
    }

    #submit_inicio {
        background-color: #7f0000;
        color: white;
        height: 40px;
    }

    #submit_reg {
        background-color: #7f0000;
        color: white;
        height: 40px;
    }

    #submit_edit {
        background-color: #7f0000;
        color: white;
        height: 40px;
    }

    #submit_delete {
        background-color: #7f0000;
        color: white;
        height: 40px;
    }

    h1,
    #act,
    a,
    h4,label {
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    label {
        letter-spacing: 2px;
    }

    #p {
        margin-left: -26px;
    }

    .parent_3 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1_3 {
        grid-area: 1 / 1 / 4 / 3;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        position: absolute;
        margin-top: -35px;
        margin-left: 10px;
    }

    #act {
        /* margin-left: -15px; */
        color: black;
        margin-top: 5px;
    }

    h4 {
        position: absolute;
        margin-top: -280px;
        margin-left: 10px;
        color: white;
        /* text-align: justify */
        font-size: 20px;
        text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
    }

    #ver_mas {
        text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
        color: white;
    }

    header {
        width: 100%;
        height: 70px;
        background-color: #afafaf;
    }

    .parent_4 {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        margin-left: 40px;
    }

    .div1_4 {
        grid-area: 1 / 1 / 2 / 2;
        margin-top: 8px;
    }

    .div2_4 {
        grid-area: 1 / 2 / 2 / 3;
        margin-top: 8px;
    }

    .div3_4 {
        grid-area: 1 / 3 / 2 / 4;
        margin-top: 8px;
    }

    .div4_4 {
        grid-area: 1 / 4 / 2 / 5;
        margin-top: 8px;
    }

    .div5_4 {
        grid-area: 1 / 5 / 2 / 6;
        margin-top: 8px;
        margin-left: 14px;
    }

    #inicio {
        margin-top: 17px;
    }

    p,
    a {
        font-size: 17px;
        color: #7f0000;

    }

    .dropdown-li {
        position: relative;
        font-size: 15px;
        list-style: none;
        font-family: 'Cinzel', serif;
    }

    .dropdown-li:hover .dropdown {
        display: flex;
        opacity: 1;
    }

    .dropdown {
        margin: 0;
        padding: 0;
        width: 170px;
        height: 70px;
        position: absolute;
        left: 0;
        top: 100%;
        opacity: 0;
        background: white;
        display: none;

    }

    .dropdown li {
        font-size: 20px;
        list-style: none;
        font-family: 'Cinzel', serif;
        margin-top: 10%;
    }

    #crear {
        margin-top: -10px;
        font-size: 19px;

    }

    #iniciar {
        margin-top: 20px;
        font-size: 19px;

    }

    .modalContainer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modalContainer .modal-content {
        background-color: #fefefe;
        margin: auto;
        width: 700px;
        height: 500px;
    }

    .modalContainer .close {
        color: #7f0000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        margin-left: 10px;
    }

    .modalContainer .close:hover,
    .modalContainer .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    #btnModal {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
        font-size: 17px;
        /* margin-bottom: 10px;
        margin-left: 20px; */
        margin-top: 10px;
        margin-left: 15px;
        color: #7f0000;
        height: 10px;

    }

    #btnModal1 {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
        font-size: 17px;
        margin-top: 10px;
        margin-left: 15px;
        color: #7f0000;
        height: 10px;

    }

    #btnMod {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
        font-size: 17px;
        /* margin-top: 20px;
        margin-left: -64px; */
        margin-top: 37px;
        margin-left: -69px;
        color: #7f0000;
        height: 10px;

    }

    #btnCerrar {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
        font-size: 17px;
        /* margin-top: 20px;
        margin-left: -64px; */
        margin-top: 27px;
        margin-left: -64px;
        color: #7f0000;

    }

    a,
    p {
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500&family=Fjalla+One&family=IBM+Plex+Mono:wght@500&family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">
<header id="con_token">
    <div class="parent_4">
        <div class="div1_4">
            <p>LOGO</p>
        </div>
        <div class="div2_4">
            <a href="index.php" id="inicio">INICIO</a>
        </div>
        <div class="div3_4">
            <a href="fichas.php" id="inicio">FICHAS</a>
        </div>
        <div class="div4_4">
            <a href="catalogo.php" id="inicio">COMPRAR</a>
        </div>
        <div class="div5_4">
            <nav>
                <div class="main-links">
                    <div class="dropdown-li">
                        <p>SESION</p>
                        <div class="dropdown">
                            <button id="btnModal">INICIAR</button>
                            <br>
                            <button id="btnMod">REGISTRARSE</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<body>
    <div id="myModal" class="modalContainer">
        <div class="modal-content">
            <span class="close">X</span>
            <img src="img/inicio3.jpg" width="100%" height="270px">
            <div id="form">
                <label>Usuario:</label>
                <input type="text" id="usu_inicio" class="usu_inicio" name="usu_inicio"><br>
                <label id="p">Contraseña:</label>
                <input type="password" id="pass_inicio" class="pass_inicio" name="pass_inicio"><br>
                <input type="submit" id="submit_inicio" class="submit_inicio" name="submit_inicio" value="LOGIN">
            </div>
        </div>
    </div>
    <div id="myMod" class="modCont">
        <div class="modal-c">
            <span class="cls">X</span>
            <img src="img/inicio4.jpg" width="100%" height="270px">
            <div id="form1">
                <label>Nombre Completo:</label>
                <input type="text" id="nombre" class="nombre" name="nombre"><br>
                <label>Nombre De Usuario:</label>
                <input type="text" id="nombre_usu" class="nombre_usu" name="nombre_usu"><br>
                <label>Correo:</label>
                <input type="text" id="correo" class="correo" name="correo"><br>
                <label id="p">Contraseña:</label>
                <input type="password" id="pass1" class="pass1" name="pass1"><br>
                <label id="p">Repetir Contraseña:</label>
                <input type="password" id="pass_rep" class="pass_rep" name="pass_rep"><br>
                <label>Ciudad:</label>
                <input type="text" id="ciudad" class="ciudad" name="ciudad"><br>
                <label>DNI:</label>
                <input type="text" id="dni" class="dni" name="dni"><br>
                <label>Telefono:</label>
                <input type="number" id="tfno" class="tfno" name="tfno" min="600000000" max="799999999"><br>
                <input type="submit" id="submit_reg" class="submit_reg" name="submit_reg" value="REGISTRARSE">
            </div>
        </div>
    </div>
    <div id="myModal1" class="modalContainer1">
        <div class="modal-content1">
            <span class="close1">X</span>
            <img src="img/inicio5.jpg" width="100%" height="270px">
            <div id="form2">
                <label>Nombre Completo:</label>
                <input type="text" id="nombre_usu_edt" class="nombre_usu_edt" name="nombre_usu_edt"><br>
                <label>Ciudad:</label>
                <input type="text" id="ciudad_edt" class="ciudad_edt" name="ciudad_edt"><br>
                <label>Telefono:</label>
                <input type="number" id="tfno_edt" class="tfno_edt" name="tfno_edt" min="0"><br>
                <label>Correo:</label>
                <input type="text" id="correo_edt" class="correo_edt" name="correo_edt" min="0"><br>
                <input type="submit" id="submit_edit" class="submit_edit" name="submit_edit" value="CONFIRMAR">
                <br>
                <input type="submit" id="submit_delete" class="submit_delete" name="submit_delete" value="ELIMINAR CUENTA">
            </div>
        </div>
    </div>
</body>
<script>
    if (localStorage.getItem('token')) {


        boton1 = document.querySelector('.dropdown')
        boton1.innerHTML = (`<button id="btnModal1">EDITAR</button>
                                <br>
                                <button id="btnCerrar">CERRAR SESION</button>`)
    }
    let btnCerrar = document.getElementById('btnCerrar')
    btnCerrar.addEventListener('click', cerrarSesion)

    function cerrarSesion() {
        event.preventDefault();
        localStorage.removeItem('token')
        localStorage.removeItem('id')
        localStorage.removeItem('rol')
        localStorage.removeItem('username')
        window.location.href = ('#')
        window.location.reload()
    }
</script>
<script>
    if (document.getElementById("btnModal1")) {
        var modal2 = document.getElementById("myModal1");
        var btn2 = document.getElementById("btnModal1");
        var span2 = document.getElementsByClassName("close1")[0];
        var body2 = document.getElementsByTagName("body")[0];

        btn2.onclick = function() {
            modal2.style.display = "block";

            body2.style.position = "static";
            body2.style.height = "100%";
            body2.style.overflow = "hidden";
        }

        span2.onclick = function() {
            modal2.style.display = "none";

            body2.style.position = "inherit";
            body2.style.height = "auto";
            body2.style.overflow = "visible";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";

                body.style.position = "inherit";
                body.style.height = "auto";
                body.style.overflow = "visible";
            }
        }
    }
    if (document.getElementById("btnMod")) {
        var modal1 = document.getElementById("myMod");
        var btn1 = document.getElementById("btnMod");
        var span1 = document.getElementsByClassName("cls")[0];
        var body1 = document.getElementsByTagName("body")[0];

        btn1.onclick = function() {
            modal1.style.display = "block";

            body1.style.position = "static";
            body1.style.height = "100%";
            body1.style.overflow = "hidden";
        }

        span1.onclick = function() {
            modal1.style.display = "none";

            body1.style.position = "inherit";
            body1.style.height = "auto";
            body1.style.overflow = "visible";
        }

        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";

                body1.style.position = "inherit";
                body1.style.height = "auto";
                body1.style.overflow = "visible";
            }
        }
    }
    if (document.getElementById("btnModal")) {
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("btnModal");
        var span = document.getElementsByClassName("close")[0];
        var body = document.getElementsByTagName("body")[0];

        btn.onclick = function() {
            modal.style.display = "block";

            body.style.position = "static";
            body.style.height = "100%";
            body.style.overflow = "hidden";
        }

        span.onclick = function() {
            modal.style.display = "none";

            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";

                body.style.position = "inherit";
                body.style.height = "auto";
                body.style.overflow = "visible";
            }
        }
    }
</script>
<script>
    let btn_registrarse = document.getElementById('submit_reg');
    btn_registrarse.addEventListener('click', registrarse)



    function registrarse() {
        event.preventDefault();

        let segura = false;

        function validateDNI(dni) {
            var numero,
                let, letra;
            var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;

            dni = dni.toUpperCase();

            if (expresion_regular_dni.test(dni) === true) {
                numero = dni.substr(0, dni.length - 1);
                numero = numero.replace('X', 0);
                numero = numero.replace('Y', 1);
                numero = numero.replace('Z', 2);
                let = dni.substr(dni.length - 1, 1);
                numero = numero % 23;
                letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
                letra = letra.substring(numero, numero + 1);
                if (letra !=
                    let) {
                    alert('Dni erroneo, la letra del NIF no se corresponde');
                    return false;
                } else {
                    return true;
                }
            } else {
                alert('Dni erroneo, formato no válido');
                return false;
            }
        }

        function validarEmail(valor) {
            if (/^\w+([\.-]?\w+)*@(?:|hotmail|outlook|yahoo|live|gmail)\.(?:|com|es)+$/.test(valor)) {
                return true;
            } else {
                alert("La dirección de email es incorrecta.");
            }
        }

        let imputNombre = document.querySelector('#nombre');
        let nombre = imputNombre.value;

        let imputUsuario = document.querySelector('#nombre_usu');
        let usuario_reg = imputUsuario.value;

        let inputPass1 = document.querySelector('#pass1');
        let pass1 = inputPass1.value;

        let inputPassRep = document.querySelector('#pass_rep');
        let pass_rep = inputPassRep.value;

        let imputCiudad = document.querySelector('#ciudad');
        let ciudad = imputCiudad.value;

        let imputDNI = document.querySelector('#dni');
        let dni = imputDNI.value;

        let imputTfno = document.querySelector('#tfno');
        let tfno = imputTfno.value;

        let imputCorreo = document.querySelector('#correo');
        let correo = imputCorreo.value;


        if (nombre != "" && usuario_reg != "" && pass1 != "" && pass_rep != "" && ciudad != "" && dni != "" && tfno != "" && correo != "") {
            if (pass1 != pass_rep) {
                alert('Has puesto contraseñas distintas')
            } else {
                let pas = pass1.split('');
                if (pas.length < 8) {
                    alert('Has puesto una contraseña poco segura')
                } else {
                    let segura = validateDNI(dni);
                    if (segura) {
                        if (validarEmail(correo)) {
                            let persona = {
                                fullname: nombre,
                                username: usuario_reg,
                                email: correo,
                                pass: pass1,
                                city: ciudad,
                                dni: dni,
                                tfno: tfno
                            }
                            console.log(persona)
                            let usuario = JSON.stringify(persona);

                            fetch('APIS/registro.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json;charser=utf-8'
                                    },
                                    body: usuario
                                })

                                .then(response => {
                                    switch (response.status) {
                                        case 201:
                                            alert("REGITRADO CON EXITO");
                                            break;
                                        case 409:
                                            alert("USUARIO EXISTE");
                                            break;
                                        case 400:
                                            alert("ERROR");
                                    }
                                    return response.json();

                                })

                                .then(data => {
                                    modal1.style.display = "none";
                                    body1.style.position = "inherit";
                                    body1.style.height = "auto";
                                    body1.style.overflow = "visible";
                                    window.location.href = ('#')
                                    window.location.reload()
                                })
                        }
                    }
                }
            }
        } else {
            alert('Tienes que rellenar todos los campos')
        }

    }
</script>

<script>
    let btn_inicio = document.getElementById('submit_inicio')
    btn_inicio.addEventListener('click', iniciarSesion)

    function iniciarSesion() {
        event.preventDefault();

        let imputUsuSesion = document.querySelector('#usu_inicio');
        let usu_inicio = imputUsuSesion.value;

        let imputPassSesion = document.querySelector('#pass_inicio');
        let pass_inicio = imputPassSesion.value;

        if (usu_inicio != "" && pass_inicio != "") {
            let persona = {
                username: usu_inicio,
                pass: pass_inicio,
            }

            let usuario = JSON.stringify(persona);

            fetch(`APIS/inicio.php`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charser=utf-8'
                    },
                    body: usuario
                })

                .then(response => {
                    switch (response.status) {
                        case 201:
                            alert("SESION INICIADA");
                            return response.json();
                            break;
                        case 401:
                            alert("NO EXISTE EL USUARIO");
                            break;
                        case 404:
                            alert("NO PUEDES INICIAR SESION");
                    }

                })

                .then(data => {
                    if (data != undefined) {
                        console.log(data);
                        let username = (data.username);
                        let token = data.token;
                        let id = data.id[0].id_usuario;
                        let rol = data.rol;
                        localStorage.setItem('username', username);
                        localStorage.setItem('token', token);
                        localStorage.setItem('id', id);
                        localStorage.setItem('rol', rol);
                        modal.style.display = "none";
                        body.style.position = "inherit";
                        body.style.height = "auto";
                        body.style.overflow = "visible";
                        window.location.href = ('#')
                        window.location.reload()
                    } else {
                        alert('Usuario Y Contraseña Erroneos')
                    }

                })
        } else {
            alert('No has rellenado todos los campos')
        }


    }
</script>
<script>
    let btn_edit = document.getElementById('submit_edit')
    btn_edit.addEventListener('click', edit_user)

    function edit_user() {
        let imputUsuEdit = document.querySelector('#nombre_usu_edt');
        let usu_inicio = imputUsuEdit.value;

        let imputCiudadEdit = document.querySelector('#ciudad_edt');
        let ciudad_edt = imputCiudadEdit.value;

        let imputTfnoEdit = document.querySelector('#tfno_edt');
        let tfno_edt = imputTfnoEdit.value;

        let imputCorreoEdit = document.querySelector('#correo_edt');
        let correo_edt = imputCorreoEdit.value;

        let id = localStorage.getItem('id')
        let token = localStorage.getItem('token')
        let username = localStorage.getItem('username')

        function validarEmail(valor) {
            if (/^\w+([\.-]?\w+)*@(?:|hotmail|outlook|yahoo|live|gmail)\.(?:|com|es)+$/.test(valor)) {
                return true;
            } else {
                alert("La dirección de email es incorrecta.");
            }
        }

        let c = validarEmail(correo_edt)

        if (c) {
            let persona = {
                id: id,
                username: username,
                token: token,
                fullname: usu_inicio,
                city: ciudad_edt,
                tfno: tfno_edt,
                email: correo_edt
            }

            let usuario = JSON.stringify(persona);

            fetch(`APIS/edit.php`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': token
                    },
                    body: usuario
                })

                .then(response => {
                    switch (response.status) {
                        case 200:
                            alert("Actualizado");
                            break;
                        case 400:
                            alert("Id error");
                            break;
                        case 401:
                            alert("Token no valido");
                    }
                    return response.json();
                })

                .then(data => {
                    modal2.style.display = "none";
                    body2.style.position = "inherit";
                    body2.style.height = "auto";
                    body2.style.overflow = "visible";
                    window.location.href = ('#')
                    window.location.reload()
                })
        }
    }


    let borrar = document.getElementById('submit_delete')
    borrar.addEventListener('click', borrarCuenta)

    function borrarCuenta() {

        event.preventDefault();


        let id = localStorage.getItem('id')
        let token = localStorage.getItem('token')
        let username = localStorage.getItem('username')

        let persona = {
            id: id,
            username: username,
            token: token,
        }

        let usuario = JSON.stringify(persona);

        fetch(`APIS/delete.php`, {
                method: 'DELETE',
                headers: {
                    'Authorization': token,
                },
                body: usuario
            })

            .then(response => {
                switch (response.status) {
                    case 200:
                        alert("Uusario Eliminado");
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
                if (data == null) {
                    console.log(data);
                    localStorage.removeItem('token')
                    localStorage.removeItem('id')
                    modal2.style.display = "none";
                    body2.style.position = "inherit";
                    body2.style.height = "auto";
                    body2.style.overflow = "visible";
                    window.location.href = ('#')
                    window.location.reload()
                } else {
                    console.log(data);
                    localStorage.removeItem('token')
                    localStorage.removeItem('id')
                    modal2.style.display = "none";
                    body2.style.position = "inherit";
                    body2.style.height = "auto";
                    body2.style.overflow = "visible";
                    window.location.href = ('#')
                    window.location.reload()
                }
            })
    }
</script>