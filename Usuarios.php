<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <body>
        <?php
        include 'head.php';
        ?>
        <?php
        include 'menu.php';
        ?>
        
        
        <form action="val_NuevoUsuario.php" method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Datos del Empleados</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Juan Perez" id="name" type="text" class="validate" name="usuario">
                            <label for="first_name">Usuario</label>
                        </div>
                        <div class="input-field col s9">
                            <input placeholder="ejm. Juan Perez" id="last_names" type="text" class="validate" name="Nombre">
                            <label for="last_name">Nombre</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="ejm. Santo Domingo" id="last_names" type="text" class="validate" name="direccion">
                            <label for="last_name">Direccion</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="ejm. 20/07/1996" id="user" type="text" class="validate" name="FechNac">
                            <label for="user">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="ejm. Masculino" id="user" type="text" class="validate" name="sexo">
                            <label for="user">Sexo</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="ejm. *****" id="user" type="text" class="validate" name="clave">
                            <label for="user">Sexo</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 22222222" id="user" type="text" class="validate" name="tel">
                            <label for="user">Telefomo</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. juanperez@gmail.com" id="user" type="text" class="validate" name="correo">
                            <label for="user">E-Mail</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 1238765334-0" id="user" type="text" class="validate" name="dui">
                            <label for="user">DUI</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 9999999999999" id="user" type="text" class="validate" name="nit">
                            <label for="user">NIT</label>
                        </div>
                    </div>
                    <div class="center">
                        <button class="waves-effect waves-light btn" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
        <?php
        include 'script.php';
        ?>
    </body>
</html>
