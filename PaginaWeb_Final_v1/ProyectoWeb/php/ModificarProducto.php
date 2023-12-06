<?php 
if (!empty($_POST["btnModificar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["imagen_url"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $imagen_url=$_POST["imagen_url"];
        $sql=$conexion->quary("UPDATE Productos SET nombre='$nombre', precio='$precio', imagen_url='$imagen_url' WHERE id=$id");
        if ($sql==1) {
            header("location:ProyectoWeb/crud_productos") ;
        } else {
            echo "<div class='alert alert_warning'>Error al modificar el producto</div>";
        }
    } else {
        echo "<div class='alert alert_warning'>Campo vacio</div>";
    }
}
?>