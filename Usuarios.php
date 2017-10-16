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
        
        
        <form action="val_NewMedicamento.php" method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Datos del Empleados</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Juan Perez" id="name" type="text" class="validate" name="nombre">
                            <label for="first_name">Nombres Completo del Paciente</label>
                        </div>
                        <div class="input-field col s9">
                            <input placeholder="ejm. 2 Avenida Norte Calle el calvario" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Direccion</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="ejm. 23/02/1994" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="ejm. Masculino" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Sexo</label>
                        </div>
                        <div class="input-field col s9">
                            <input placeholder="ejm. juanperez@gmail.com" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 9292929292" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Numero de DUI</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 78965445" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Numero Telefonico</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 1238765334" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Numero de NIT</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. Bachiller" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Grado Academico</label>
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
