<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data">


<div class="row-cols-2">
    <div class="col-sm-7">
    <div class="mb-2">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control" required>
<label for="color" class="form-label">Numero Serie *</label>
<input type="text"  id="color" name="color" class="form-control" required>
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" class="form-control" required >
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="electronico">electronico</option>
    <option value="cocina">cocina</option>
    <option value="farmaceutico">farmaceutico</option>
    <option value="mascotas">mascotas</option>
    <option value="jugueteria">jugueteria</option>
    <option value="automovilstico">automovilstico</option>
    <option value="vestimenta">vestimenta</option>
    <option value="telefonia">telefonia</option>
    <option value="deportes">deportes</option>

  </select>
    </div>   
</div>
</div>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="insertar_productos">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../../includes/_footer.php' ?>
</html>