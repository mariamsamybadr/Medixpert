@extends('layout.app')
@section('content')
@section('title')
Edit Product
@endsection('title')
@section('description')
Edit
@endsection('description')
<form method="POST" action="/products/{{$product['id']}}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">  <input type="text" name="drug_name" value="{{$product->drug_name}}" class="form-control"><br>
    <div class="form-group"> <input type="text" name="description" value="{{$product->description}}" class="form-control"><br>
    <div class="form-group mt-3">  <input type="text" name="drug_image" value="{{$product->drug_image}}" class="form-control"><br>

   

    <div class="form-group"> <input type="submit" name="submit" class="btn btn-primary">
    <a  href="/products" class="btn btn-danger">Back</a>
</form>
@endsection('content')