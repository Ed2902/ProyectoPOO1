<?php    
    require_once('../Clases/producto.php');
    require_once('../Clases/proveedor.php');
    $productos=Producto::mostrar();
    $Proveedores=Proveedor::mostrar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="POST" action="../Objetos/GuardarCompra.php">
    <p>CantidadCompra<input type="number" name="CantidadCompra" id="CantidadCompra"/></p>  
    <p>Precio_Compra<input type="number" name="Precio_Compra" id="Cantidad" /></p>    
    <p>Precio_Compra<input type="number" name="Precio_Venta" id="Total" /></p>
   
    <p>Producto</p>
    <select class="form-select form-select mb-3" name="ID_ProductoFK">
           <option>Seleccione</option>
            <?php
            foreach ($productos as $producto) {
                echo "<option value='" . $producto['ID_Producto'] . "'>" . $producto['NombreProd'] . "</option>";
            }
            ?>
        </select>
       <p>Proveedor</p>
        <select class="form-select form-select mb-3" name="ID_ProveedorFK">
        <option>Seleccione</option>
            <?php
            foreach ($Proveedores as $proveedor) {
                echo "<option value='" . $proveedor['ID_Proveedor'] . "'>" . $proveedor['NombreProv'] . "</option>";
            }
            ?>
        </select>
    <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>