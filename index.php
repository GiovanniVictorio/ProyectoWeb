<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Planet</title>
    <link rel="stylesheet" href="access/Css/styles.css">
</head>
<body>

    <div class="con-container">
        <div class="form-header">
            <img src="access/Img/logo.png" alt="Logo de la pagina">
            <h1>Movies<span>Planet</span></h1>
        </div>

        <div class="form-content">
            <form action="#" class="con-form">
                <div class="form-title">
                    <h3>Iniciar sesión</h3>
                </div>

                <div class="input-group">
                    <input type="email" class="form-input" name="form-input" id="correo">
                    <label class="label" for="correo">Correo</label>
                </div>
                <div class="input-group">
                	<input type="password" class="form-input" name="form-input" id="pass">
                	<label class="label" for="pass">Contraseña</label>
                </div>

                <div class="input-group">
                    <input type="submit" class="form-input" value="Iniciar sesión">
                	<p>No tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
            </form>
        </div>

        <div class="form-content">
            <form action="#" class="con-form">
                <div class="form-title">
                    <h3>Registrate</h3>
                </div>

                <div class="input-group">
                    <input type="text" class="form-input" name="form-input" id="nombre">
                    <label class="label" for="nombre">Usuario</label>
                </div>

                <div class="input-group">
                    <input type="email" class="form-input" name="form-input" id="reg-correo">
                    <label class="label" for="reg-correo">Correo</label>
                </div>

                <div class="input-group">
                    <input type="text" class="form-input" name="form-input" id="reg-celular">
                    <label class="label" for="reg-celular">Numero telefónico</label>
                </div>

                <div class="input-group">
                	<input type="password" class="form-input" name="form-input" id="reg-pass">
                	<label class="label" for="reg-pass">Contraseña</label>
                </div>

                <div class="input-group">
                	<input type="password" class="form-input" name="form-input" id="reg-pass">
                	<label class="label" for="reg-pass">Confirmar Contraseña</label>
                </div>

                <div class="input-group">
                	<input type="submit" class="form-input" value="Registrate">
                	<p>Ya tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="access/Js/jquery-3.4.1.min.js"></script>
    <script src="access/Js/form.js"></script>
    <script text="javascript">
        function redirect(){
            window.location="menu-Principal.php"; 
        }
    </script>
</body>
</html>