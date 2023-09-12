@extends('layout.app')
@section('content')
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>category_name</th>
        <th>created_at</th>
        <th>updated_at</th>


        <th colspan="3" style="text-align: center;">Actions</th>
    </tr>
        @foreach($categories as $category)
        <tr>
        <td>{{$category['id']}}</td>
        <td>{{$category['category_name']}}</td>
        <td>{{$category['created_at']}}</td>
        <td>{{$category['updated_at']}}</td>


        <td><a href="/categories/{{$category['id']}}" class="btn btn-success">View</a></td>
        <td><a href="/categotries/{{$category['id']}}/edit" class="btn btn-primary">Edit</a></td>
        <td><form method="post" action="/categories/{{$category['id']}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
            
        </form>
        </td>
        </tr>
        @endforeach
</table>

@endsection('content')