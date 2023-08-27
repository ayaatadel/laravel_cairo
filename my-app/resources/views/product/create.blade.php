<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
      @csrf
     <input type="text" name="product_name" placeholder="product_name" >
     <input type="text" name="product_price" placeholder="product_price">
     <input type="text" name="product_availability"placeholder="product_availability">
     <input type="text" name="category_id"placeholder="category_id">
     <input type="text" name="admin_id" placeholder="admin_id">

     <input type="submit" >


    </form>
</body>
</html>
