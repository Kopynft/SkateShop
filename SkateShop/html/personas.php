<!DOCTYPE html>
<html>
    <head>
        <title>
            Personas
        </title>

        <?php include ("../sql/select_persona_todos.php") ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php include ("navbar.php") ?>

        <form action = "../sql/insert_persona.php" method = "POST">

            <br/>

            <input type="text" name = "id" placeholder="Identificacion" required/><br/> <br/>

            <p> Seleccione tipo </p>

            <select name="t_id" required>
                <option value="CC">
                    Cédula de Ciudadanía
                </option>

                <option value="CE">
                    Cédula de Extranjero
                </option>

                <option value="P">
                    Pasaporte
                </option>

            </select> <br/> <br/>
            
            <input type="text" name = "nombre" placeholder="Nombre" required/><br/> <br/>

            <input type="radio" name="t_persona" value = "E" onchange = "yesnoCheck(this)"/> Empleado

            <input type="radio" name ="t_persona" value = "C" onchange = "yesnoCheck(this)"/> Cliente<br/>

            <div id="empleado" style="display: none;">
                <input type = "text" name = "salario" placeholder = "Salario" required/>
            </div>

            <div id="cliente" style="display: none;">
                <input type = "text" name = "direccion"  placeholder = "Dirección" /><br/>
                <input type = "text" name = "telefono" placeholder = "Telefono" /><br/>
            </div>

            <div id="send" style="display: none;">
                <input type="submit" value = "Enviar"> 
            </div>

        </form> <br/>

        <table class="table table-bordered">
            <thead>
                <th> Identificacion </th>
                <th> Tipo de Identificacion </th>
                <th> Nombre </th>
                <th> Salario </th>
                <th> Direccion </th>
                <th> Telefono </th>
                <th> Tipo </th>
            </thead>
            
            <tbody>
                
                <?php while($personas = mysqli_fetch_array($datospersona)) { ?>
                    <tr>
                        <td><?php echo $personas["identificacion"] ?></td>
                        <td><?php echo $personas["tipo_de_identificacion"] ?></td>
                        <td><?php echo $personas["nombre"] ?></td>
                        <td><?php echo $personas["salario"] ?></td>
                        <td><?php echo $personas["direccion"] ?></td>
                        <td><?php echo $personas["telefono"] ?></td>
                        <td><?php echo $personas["tipo"] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
    </body>
</html>

<script>
    function yesnoCheck(opcion)
    {
        if (opcion.value == "E")
        {
            document.getElementById("empleado").style.display = "block";
            document.getElementById("cliente").style.display = "none";
            document.getElementById("send").style.display = "block";
        }

        else if (opcion.value == "C")
        {
            document.getElementById("empleado").style.display = "none";
            document.getElementById("cliente").style.display = "block";
            document.getElementById("send").style.display = "block";
        }
    }
</script>