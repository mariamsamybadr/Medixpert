@extends('layout.app')
@section('content')
@section('title')
View product
@endsection('title')
@section('description')
View
@endsection('description')
<ul class="list-group mt-3">
<li class="list-group-item">id={{$product->id}}</li>
<li class="list-group-item">drug_name={{$product->drug_name}}</li>
<li class="list-group-item">description={{$product->description}}</li>
<li class="list-group-item">created_at={{$product->created_at}}</li>
<li class="list-group-item">updated_at ={{$product->updated_at}}</li>

</ul>
<a href="/products" class="btn btn-danger">Back</a>
@endsection('content')
