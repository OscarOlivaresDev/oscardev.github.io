<?php
    session_start();
    if($_POST){
        if(($_POST['user'] == "administracion") && ($_POST['password']=="123456")){
            $_SESSION['user']="administracion";
            header('location: index.php');
        }else{
            echo "<script>alert('Usuario o Contraseña incorrectos.')</script>";
        }
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>       
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="title-login">
                        <h1>¡Bienvenido!</h1>
                    </div>
                    <div class="card-header">
                        <b>Iniciar Sesión</b>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div>
                                <label for=""><b>Usuario</b></label>
                                <input class="form-control" type="text" name="user" id="" placeholder="Usuario" required>
                            </div>
                            <div>
                                <label for=""><b>Contraseña</b></label>
                                <input class="form-control" type="password" name="password" id="" placeholder="Contraseña" required>
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit" onclick = "alertaLogin()">Ingresar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <p><b>Credenciales de acceso</b><br> <b>Usuario:</b> administracion <br> <b>Contraseña:</b> 123456</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>