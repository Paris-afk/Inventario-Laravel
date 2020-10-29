<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <a href="{{url('/products/create')}}">Añadir nuevo producto</a>  
 <table class="table">
   <thead>
     <tr>
       <th>#</th>
       <th>Nombre</th>
       <th>Precio</th>
       <th>Categoria</th>
       <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
     @foreach($products as $product)
     <tr>
        <td scope="row">{{$product->$product}}</td>
       <td scope="row">{{$product->Nombre}}</td>
       <td scope="row">{{$product->Precio}}</td>
       @if($product->categories_id =='1')         
      <td scope="row">Potable</td >      
       @elseif($product->categories_id =='2')         
      <td scope="row">Comestible</td >     
      @else
        <td scope="row">Aseo</td >   
      @endif
       <!-- <td scope="row">{{$product->categories_id}}</td>
        --> 
     <td>
     <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>  
     |
       <form action="{{url('/products/'.$product->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" onclick="return confirm('Estas seguro de borrar?')">Borrar</button>
      </form>
     </td>
    
     </tr>
      @endforeach
   </tbody>
 </table>
</body>
</html>