<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Regiones</title>
</head>
<body class="fondo">
    <h1>Regiones</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Codigo de region</th>
                <th>Nombre de region</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($regionbd as $registros):
            ?>
            <tr>
                <td><?php echo $registros['cod_region'] ?></td>
                <td><?php echo $registros['nombre'] ?></td>
                <td><?php echo $registros['descripcion'] ?></td>
            </tr>
            <?php 
            endforeach
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>