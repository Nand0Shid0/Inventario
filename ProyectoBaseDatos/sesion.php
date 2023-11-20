<?php
  session_start();
  
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "tienda";
 
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
  
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
  
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM user WHERE correo='%s' AND password = %s", mysql_real_escape_string($email), mysql_real_escape_string($password));
  $resultado = $conn->query($sql);
  
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
	// Guardo en la sesión el email del usuario.
	$_SESSION['email'] = $email;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
  }else{
	echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="formul">
        <form action="validar.php" method="POST">
        <h3>Login</h3>

        <div class="form-group">
            <label for="username">Email</label><br>
            <input type="text" name="email" id="email" class="form-control" required>
            <br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" class="form-control" required>
            <br> <br>
            <input type="submit"class="btn btn-success btn-md space" value="submit">
        </div>
        </form>
    </div>
</body>
</html>

>?