@extends('layout.app')
@section('title') Create new Product @endsection
@section( 'content')
<form method="post" action="/products">
    @csrf
    <label>drug name :</label> <input type="text" name='drug_name' placeholder="drug name"> <br> <br>
    <label>description :</label> <input type="text" name='description' placeholder="descripe"> <br> <br>
    <label>drug_image :</label> <input type="text" name='drug_image' placeholder="drug_image"> <br> <br>


    <input type="submit" value=" ADD "  class="btn btn-primary">
</form>
@endsection