@extends('components.layout')

@section('title', 'Categories')

@section('content')

<h1>Categories</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col"> <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Create</a> </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">ID</th>
        <th scope="col">Category</th>
        <th scope="col">Is Active</th>
        <th scope="col" width="100">Edit</th>
        <th scope="col" width="100">Delete</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{ $category->id }}</th>
        <td class="list-group-flush" >
            {{ $category->name }}
        </td>
        <td>{{ $category->is_active }}</td>
        <td>
            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
        </td>
        <td>
            <form action="{{ route('category.delete', ['id' => $category->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection