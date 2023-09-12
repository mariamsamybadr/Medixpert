@extends('layout.app')
@section('title') Create new category @endsection
@section( 'content')
<form method="post" action="/categories">
    @csrf
    <label>category name :</label> <input type="text" name='category_name' placeholder="category name"> <br> <br>
    <input type="submit" value=" ADD "  class="btn btn-primary">
</form>
@endsection