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
        
        
        <form action="val_NuevaConsulta.php" method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Datos de Consulta</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Dolor de Cabeza" id="name" type="text" class="validate" name="sintomas">
                            <label for="first_name">Sintomas</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Epilepsias" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Descripcion de Enfermedad</label>
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
