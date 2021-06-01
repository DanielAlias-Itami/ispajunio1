<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<h1>PARA ACUDIENTES</h1>

<div class="container">
<form action="respuesta2.php" method="POST" >
  
  <div class="form-group">
    <label for="exampleInputName">Nombres</label>
    <input name="name" type="name" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Apellidos</label>
    <input name="apellido" type="apellido" class="form-control" id="exampleInputName2">
  </div>
  <div class="form-group">
    <label for="exampleInputColegio">Colegio</label>
    <input name="colegio" type="colegio" class="form-control" id="exampleInputColegio">
  </div>
  <div class="form-group">
    <label for="exampleInputGrado">Grado</label>
    <input name="Grado" type="grado" class="form-control" id="exampleInputGrado">
  </div>
  <div class="form-group">
    <label for="exampleInputTelefono">Teléfono</label>
    <input name="telefono" type="telefono" class="form-control" id="exampleInputTelefono">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="correo" type="email" class="form-control" id="exampleInputEmail1" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input name="acepta_tyc" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


  
</form>
</div>     
</body>
</html>