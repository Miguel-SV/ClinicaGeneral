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
                        <h4 class="center">Datos del Paciente</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Juan Perez" id="name" type="text" class="validate" name="nombre">
                            <label for="first_name">Nombres Completo del Paciente</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. Epilepsias" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Numero de DUI</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="ejm. 78435643" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Numero de Telefono</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="ejm. 23/04/1992" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s9">
                            <input placeholder="ejm. Juana Perez" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Nombre de Responsable</label>
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
