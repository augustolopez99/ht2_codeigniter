<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Municipios</title>
</head>
<body class="fondo">
    <h1>Municipios</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Codigo de Municipios</th>
                <th>Nombre de municipio</th>
                <th>Codigo de departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($municipiobd as $registros):
            ?>
            <tr>
                <td><?php echo $registros['cod_muni'] ?></td>
                <td><?php echo $registros['nombre_municipio'] ?></td>
                <td><?php echo $registros['cod_depto'] ?></td>
            </tr>
            <?php 
            endforeach
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>