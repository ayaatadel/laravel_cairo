<!DOCTYPE html>
<html lang="en">
<head>

    {{-- // fastly   => cdn --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
   <a href="{{route('product.create')}}">Add Product</a>
   <a href="{{route('category.index')}}">Categories</a>


    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Category Name</th>

                <th>Actions</th>


            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td>{{$product->category->name}}</td>

                <td>
                    {{-- <a href="{{route('product.show',$product->product_id)}}">show</a> --}}
                 <form action="{{route('product.show',$product->id)}}" method="get">
                    <button>Show</button>
                 </form>
                   <form action="{{route('product.destroy',$product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>

                   <form action="{{route('product.update',$product->id)}}" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</body>
</html>
