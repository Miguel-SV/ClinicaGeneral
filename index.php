<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Intel</title>



        <link rel="stylesheet" href="css/style.css">


    </head>


    <body>
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h2>Clinica General</h2>
                    <h1>Intel</h1>
                </div>
                <form action="val_login.php" method="post">
                    <div class="login-form">
                        <div class="control-group">
                            <input type="text" class="login-field" value="" placeholder="Usuario" id="login-name" name="user">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="control-group">
                            <input type="password" class="login-field" value="" placeholder="Password" id="login-pass" name="pass">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <button type="submit"  class="btn btn-primary btn-large btn-block" href="principal.php">Entrar</button>

                    </div>
                </form>
            </div>
        </div>
    </body>



</html>
