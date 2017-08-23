<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Medica</title>
    </head>
    <body><?php
        include 'head.php';
        ?>
        <?php
        include 'menu.php';
        ?>
        <br>
        <br>
        <br>
        <form action="val_NewMedicamento.php" method="post">
            <div class="container">
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
        </form>
        <?php
        include 'script.php';
        ?>
    </body>
</html>
