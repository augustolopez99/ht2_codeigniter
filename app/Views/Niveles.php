<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nivel academico</title>
</head>
<body class="fondo">
<br>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Agregar Departamento
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Departamento Nuevo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        
       
        <form action="<?=base_url('guardar_Municipio')?>" method="post">
            <div class="mb-3">
                <label for="txt_mun" class="form-label">Codigo de Departamento</label>
                <input type="text" class="form-control" id="txt_mun" name="txt_mun" placeholder="Nuevo Codigo de Departamento">
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nuevo Nombre">
            </div>
            <div class="mb-3">
                <label for="txt_coddep" class="form-label">Codigo de Region</label>
                <input type="text" class="form-control" id="txt_coddep" name="txt_coddep" placeholder="Codigo de Region">
            </div>
            <input type="submit" class="btn btn-primary" id="btn_guardar" name="btn_guardar" value="Agregar Nuevo Departamento">
        </form>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    </div>
    </div>
</div>
</div>

<br><br>





    <h1>Niveles academicos</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Nivel Academico</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($nivelbd as $registros):
            ?>
            <tr>
                <td><?php echo $registros['cod_nivel_acad'] ?></td>
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