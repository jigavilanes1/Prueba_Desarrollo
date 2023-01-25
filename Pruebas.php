<?php
include ("Model/ProductoModel.php");
$objProducto = new Producto();

// $objProducto->setNombre("Pruebas 1");
// $objProducto->setPrecio(123);
// $objProducto->setMarca("Marca 1");
// $objProducto->setFoto("Foto");

// $objProducto->InsertarProducto();
$objProducto->setId("2");
echo $objProducto->BuscarProducto();

?>