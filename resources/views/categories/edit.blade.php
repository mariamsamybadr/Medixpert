@extends('layout.app')
@section('content')
@section('title')
Edit Product
@endsection('title')
@section('description')
Edit
@endsection('description')
<form method="POST" action="/categories/{{$category['id']}}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">  <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control"><br>

    <div class="form-group"> <input type="submit" name="submit" class="btn btn-primary">
    <a  href="/categories" class="btn btn-danger">Back</a>
</form>
@endsection('content')