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
        
        
        <form action="val_NuevaReceta.php" method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Datos de Recetas</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. 1 c/d 2 hrs" id="name" type="text" class="validate" name="dosis">
                            <label for="first_name">Nombre de Medicamento</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. 13/05/2018" id="last_names" type="text" class="validate" name="fecha">
                            <label for="last_name">Fecha</label>
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