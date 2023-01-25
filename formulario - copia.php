<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: http://localhost:8080/productoOO/");
    return false;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <title>Productos</title>
  </head>

  <body onload="BuscarTodos();">
    <div class="container">
      <div class="row">
        <form class="row g-3" id="form" onsubmit="return false;">
          <div class="col-md-6">
            <input type="number" style="display:none" id="id" />
            <label for="inputNombre" class="form-label">Nombre</label>
            <input
              type="text"
              class="form-control"
              id="nombre"
            />
          </div>
          <div class="col-md-6">
            <label for="inputPrecio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" />
          </div>
          <div class="col-md-6">
            <label for="inputMarca" class="form-label">Marca</label>
            <select id="marca" class="form-select">
              <option selected>Seleccione...</option>
              <option value="View Sonic">View Sonic</option>
              <option value="Dell">Dell</option>
              <option value="Toshiba">Toshiba</option>
            </select>
          </div>
          <div class="col-6">
            <label for="inputFoto" class="form-label">Foto</label>
            <input
              type="text"
              class="form-control"
              id="foto"
              placeholder="Foto"
            />
          </div>
          <div class="col-6">
            <button type="submit" id="guardar" class="btn btn-primary" onclick="Guardar();">
              Guardar
            </button>
            <button type="submit" id="editar" class="btn btn-primary" onclick="Editar();">
              Editar
            </button>
          </div>
        </form>

        <div
          class="alert alert-success alert-dismissible mt-4"
          role="alert"
          id="res"
        >
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
          ></button>
          ...
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table table-info">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRECIO</th>
                <th scope="col">MARCA</th>
                <th scope="col">FOTO</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody id="datos"></tbody>
          </table>
        </div>
      </div>
    </div>
    <button class="btn btn-dark"><a href="index.php">Salir</a></button>
  </body>
</html>
