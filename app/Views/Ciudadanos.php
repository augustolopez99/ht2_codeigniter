<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ciudadanos</title>
</head>
<body class="fondo">
    <h1>Ciudadanos</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Dpi</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>direccion</th>
                <th>telefono casa</th>
                <th>movil</th>
                <th>email</th>
                <th>fecha nacimiento</th>
                <th>cod nivel academico</th>
                <th>cod muni</th>
                <th>contra</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($ciudadanobd as $registros):
            ?>
            <tr>
                <td><?php echo $registros['dpi'] ?></td>
                <td><?php echo $registros['nombre'] ?></td>
                <td><?php echo $registros['apellido'] ?></td>
                <td><?php echo $registros['direccion'] ?></td>
                <td><?php echo $registros['tel_casa'] ?></td>
                <td><?php echo $registros['tel_movil'] ?></td>
                <td><?php echo $registros['email'] ?></td>
                <td><?php echo $registros['fechanac'] ?></td>
                <td><?php echo $registros['cod_nivel_acad'] ?></td>
                <td><?php echo $registros['cod_muni'] ?></td>
                <td><?php echo $registros['contra'] ?></td>
            </tr>
            <?php 
            endforeach
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>