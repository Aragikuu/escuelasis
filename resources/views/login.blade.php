<!DOCTYPE html>
<html lang="es">

<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBs-k8Lz8KBqhmG0JshSJz55iU9_eKE5BE",
        authDomain: "capor-b6936.firebaseapp.com",
        databaseURL: "https://capor-b6936-default-rtdb.firebaseio.com",
        projectId: "capor-b6936",
        storageBucket: "capor-b6936.appspot.com",
        messagingSenderId: "21529871202",
        appId: "1:21529871202:web:5380ccd12b780968e1e23b"
    };
    firebase.initializeApp(config);
    const auth = firebase.auth();
</script>

<head>

    <meta chorset="UTF-8">

    <title>login</title>

    <link rel="stylesheet" href="/public/css/login.css">

</head>

<body>

    <div class="caja">

    </div>

    <div class="box">
        <form id="formm">
            <div class="form">

                <h2>Iniciar Sesion</h2>

                <div class="inputBox">

                    <input type="text" required class="form-control" id="correo">

                    <span>Correo</span>

                    <i></i>

                </div>

                <div class="inputBox">

                    <input type="password" required class="form-control" id="contra">

                    <span>Contraseña</span>

                    <i></i>

                </div>

                <button class="boton">Entrar</button>

            </div>
        </form>

    </div>

</body>
<script src="js/apis/login.js"></script>

</html>