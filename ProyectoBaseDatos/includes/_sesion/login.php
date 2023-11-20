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
            <input type="text" name="correo" id="correo" class="form-control" required>
            <br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" class="form-control" required>
            <br> <br>
            <input type="submit"class="btn btn-success btn-md space" value="Ingresar">
        </div>
        </form>
    </div>
</body>
</html>