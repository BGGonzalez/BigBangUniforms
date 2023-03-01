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
            <h3 class="text-center text-secondary">Registro de Personas</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <?php
            include "model/connect.php";
            include "controller/client_register.php";
            ?>
            <button type="submit" class="btn btn-primary" name="register_btn" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
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
                    include "model/connect.php";
                    $sql = $connector->query("select * from client_bbu");
                    while($dbdata = $sql->fetch_object()) {
                ?>
                <tr>
                    <td><?= $dbdata->id ?></td>
                    <td><?= $dbdata->name ?></td>
                    <td><?= $dbdata->last_name ?></td>
                    <td><?= $dbdata->email ?></td>
                    <td><?= $dbdata->phone ?></td>
                    <td>
                        <a href="" class="btn btn-small btn-primary"><i class="fa-solid fa-user-pen"></i> Editar</a>
                        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-user-minus"></i> Quitar</a>
                    </td>
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