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
                    <h4 class="center">Nuevo Medicamento</h4>
                    <hr>
                    <div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Epamin" id="name" type="text" class="validate" name="nombre">
                            <label for="first_name">Nombres del medicamento</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Epilepsias" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Descripcion</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. 23" id="user" type="text" class="validate" name="cantidad">
                            <label for="user">Cantidad</label>
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
