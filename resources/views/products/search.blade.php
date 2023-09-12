@extends('layout.app')
@section('content')
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>drug_name</th>
        <th>description</th>
        <th>created_at</th>
        <th>updated_at</th>


        <th colspan="3" style="text-align: center;">Actions</th>
    </tr>
        @foreach($products as $product)
        <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['drug_name']}}</td>
        <td>{{$product['description']}}</td>
        <td>{{$product['created_at']}}</td>
        <td>{{$product['updated_at']}}</td>


        <td><a href="/producs/{{$product['id']}}" class="btn btn-success">View</a></td>
        <td><a href="/products/{{$product['id']}}/edit" class="btn btn-primary">Edit</a></td>
        <td><form method="post" action="/products/{{$product['id']}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
            
        </form>
        </td>
        </tr>
        @endforeach
</table>

@endsection('content')
