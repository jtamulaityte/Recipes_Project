@extends('components.layout')

@section('title', 'Save category')

@section('content')

<h3>Fill name</h3>
<form action="{{ url('admin/categories/create') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <button type="submit">Send</button>
</form>

@if (isset($name))
<div>
    My name is: {{ $name }}
</div>
@endif

@endsection