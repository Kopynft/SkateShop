<!DOCTYPE html>
<html>
    <head>
        <title>
            Sedes
        </title>

        <?php include ("../sql/select_sede_todos.php") ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php include ("navbar.php") ?>

        <br/>

        <form action = "../sql/insert_sede.php" method = "POST">

            <input type = "text" name = "direccion_s" placeholder = "Dirección de la sede" required/><br/><br/>

            <input type = "text" name = "telefono_s" placeholder = "Teléfono de la sede" required/><br/><br/>    

            <input type = "submit" value = "Enviar"/>

        </form> <br/>

        <table>
            <thead>
                <div class="card">
                    <h5 class="card-header"> Dirección de la sede </h5>
                    <div class="card-body">
                        <h5 class="card-title"> Telefono de la sede </h5>
                    </div>
                </div>
            </thead>
            <tbody>
                <br/>
                <?php while($sedes = mysqli_fetch_array($datossede)) { ?>
                    <tr>
                        <div class="card">
                            <h5 class="card-header"><?php echo $sedes["direccion_sede"] ?></h5>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $sedes ["telefono_sede"] ?></h5>
                            </div>
                        </div>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>