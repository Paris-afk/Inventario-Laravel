<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<center>
  <form action="/create" method="post">
    {{ csrf_field() }}
    <label for="">Nombre del producto</label>
    <input type="text" name="nombre" placeholder="nombre del producto">
    <label for="">Precio del producto</label>
    <input type="text" name="precio" placeholder="precio del producto">
    <button type="submit">nuevo producto</button>
  </form>
</center>
</body>
</html>