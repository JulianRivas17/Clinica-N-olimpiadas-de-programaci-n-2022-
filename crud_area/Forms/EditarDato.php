<?php
    include_once('../Config/Conexion.php');
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM area WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-primary p-2 text-white text-center">Editar cliente</h1>
    <br>

    <div class="container">
        <form action="../CRUD/Editar.php" method="POST">
            <input type="Hidden" name="Id" value="<?php echo $fila['id']?>">
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" value="<?php echo $fila['descripcion']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Ubicacion</label>
                <input type="text" class="form-control" placeholder="Ubicacion" name="ubicacion" value="<?php echo $fila['ubicacion']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Area</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>