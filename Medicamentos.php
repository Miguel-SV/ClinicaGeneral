<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->
<html>

    <body>
        <?php
        include 'head.php';
        ?>
        <?php
        include 'menu.php';
        ?>
        
        
        <form action="val_NuevoMedicamento.php" method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Medicamentos</h4>
                        <hr>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Epamil" id="name" type="text" class="validate" name="nombre">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Chacon" id="last_names" type="text" class="validate" name="laboratorio">
                            <label for="last_name">Laboratorio</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. 1" id="last_names" type="text" class="validate" name="cantidad">
                            <label for="last_name">Cantidad </label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Para epilepsias" id="last_names" type="text" class="validate" name="descripcion">
                            <label for="last_name">Descripcion</label>
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