<?php
include "../model/connect.php";
$id=$_GET["id"];
$sql=$connector->query(" SELECT * from client_bbu WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">BigBang Uniforms</h1>
    <!-- Customer Registration Form -->
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Modificar Datos</h3>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled value="<?= $_GET["id"] ?>">
            </div>
            <?php
            
            while ($dbdata=$sql->fetch_object()) {
            
            ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $dbdata->name ?>">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $dbdata->last_name ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $dbdata->email ?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?= $dbdata->phone ?>">
            </div>

            <?php
            }
            ?>
            <?php
            include "../model/connect.php";
            include "../controller/client_edit.php";
            ?>
            <button type="submit" class="btn btn-primary" name="edit_btn" value="ok">Modificar</button>
        </form>
        <div class="col-8 p-4">
        <h3 class="text-center text-secondary">Tabla de Clientes</h3>
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../model/connect.php";
                    $sql = $connector->query("select * from client_bbu");
                    while($dbdata = $sql->fetch_object()) {
                ?>
                <tr>
                    <td><?= $dbdata->id ?></td>
                    <td><?= $dbdata->name ?></td>
                    <td><?= $dbdata->last_name ?></td>
                    <td><?= $dbdata->email ?></td>
                    <td><?= $dbdata->phone ?></td>
                    <td></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/c660771143.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>