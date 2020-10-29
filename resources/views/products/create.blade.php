<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <a href="{{url('/products/')}}">Regresar al menú</a>  
    <form action="{{url('/products')}}" method="post">
      {{csrf_field()}}
      <label for="Nombre">{{'Nombre del Producto'}}</label>
      <input type="text" name="Nombre" id="">
      <hr>
      <br>
      <label for="Precio">{{'Precio del Producto'}}</label>
      <input type="text" name="Precio" id="">
      <hr>
      <br>
        <input type="radio"  name="categories_id" value="1">
        <label for="Potable">Potable</label><br>
        <input type="radio" name="categories_id" value="2">
        <label for="Comestible">Comestible</label><br>
        <input type="radio"  name="categories_id" value="3">
        <label for="Aseo">Aseo</label>
      <hr>
      <br>
      <input type="submit" value="Agregar">
    </form>
</body>
</html>