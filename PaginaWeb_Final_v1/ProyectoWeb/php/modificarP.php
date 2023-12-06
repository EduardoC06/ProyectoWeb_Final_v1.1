<?php 

include "conexion.php";

$idP=$_GET["id"];

$sql=$conexion->query(" SELECT * FROM Productos WHERE id=$idP ");

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar Producto</title>
</head>
<body>
<form class="col-4 p-3" method='POST' enctype="multipart/form-data">
<h2>Modificar productos</h2>
<input type="hidden" name="id" value="<?= $_GET["id"]?>">
<?php 
include "ModificarProducto.php";
while ($datos=$sql->fetch_object()) { ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" name="NombreP" value="<?= $datos->nombre?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio del producto</label>
    <input type="text" class="form-control" name="PrecioP" value="<?= $datos->precio?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Imagen</label>
    <input type="file" class="form-control" name="ImagenP" value="<?= $datos->imagen_url?>">
  </div>
  <button type="submit" class="btn btn-primary" name="btnModificar">Modificar</button>
<?php }
?>
</form>
</body>
</html>