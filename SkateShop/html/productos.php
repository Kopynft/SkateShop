<!DOCTYPE html>
<html>
    <head>
        <title>
            Prodcutos
        </title>

        <?php include ("../sql/select_producto_todos.php") ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php include ("navbar.php") ?>

        <br/>

        <form action = "../sql/insert_producto.php" method = "POST">

            <input type = "text" name = "codigo_p" placeholder = "Código del producto" required/><br/><br/>

            <input type = "text" name = "nombre_p" placeholder = "Nombre del producto" required/><br/><br/>

            <input type="radio" name="t_producto" value = "C" onchange = "yesnoCheck(this)"/> Skate Completa

            <input type="radio" name ="t_producto" value = "P" onchange = "yesnoCheck(this)"/> Parte para Skate<br/><br/>

            <div id="send" style = "display: none;">
                <input type = "text" name = "comprado" placeholder ="Distribudor" required/><br/><br/>
                <input type="submit" value = "Enviar"> 
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <th> Código </th>
                <th> Nombre </th>
                <th> Tipo </th>
                <th> Distribuidor </th>
            </thead>
            
            <tbody>
                
                <?php while($productos = mysqli_fetch_array($datosproducto)) { ?>
                    <tr>
                        <td><?php echo $productos["codigo_producto"] ?></td>
                        <td><?php echo $productos["nombre_producto"] ?></td>
                        <td><?php echo $productos["tipo"] ?></td>
                        <td><?php echo $productos["comprado_a"] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
    </body>
</html>

<script>
    function yesnoCheck(opcion)
    {
        if (opcion.value == "C" || opcion.value == "P")
        {
            document.getElementById("send").style.display = "block";
        }
    }
</script>