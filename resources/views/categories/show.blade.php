@extends('layout.app')
@section('content')
@section('title')
View category
@endsection('title')
@section('description')
View
@endsection('description')
<ul class="list-group mt-3">
<li class="list-group-item">id={{$category->id}}</li>
<li class="list-group-item">category_name={{$category->category_name}}</li>
<li class="list-group-item">created_at={{$category->created_at}}</li>
<li class="list-group-item">updated_at ={{$category->updated_at}}</li>

</ul>
<a href="/categories" class="btn btn-danger">Back</a>
@endsection('content')