@extends('components.layout')
 
@section('title', 'Recipes')
 
@section('content')
 
<h1>Add a new recipe</h1>
 
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
 
<form action="{{ url('admin/recipes/store') }}" method="post" class="row g-3" enctype="multipart/form-data">
 
    @csrf
    <div class="form-group">
        <label class="form-label">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Recipe name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>
 

    <div class="col-12">        
            <label class="form-label">Category:</label>        
            <select name="category_id" class="form-control"> 
            <option value=""></option>           
            @foreach($categories as $category)
            <option 
            value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        </div>

    <div class="form-group">
        <label class="form-label">Ingredients:</label>
        <select name="ingredient_id[]" class="form-control" multiple>
            @foreach($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
            @endforeach
        </select>
    </div>
 
    <div class="form-group">
        <label class="form-label">Description:</label>
        <textarea type="text" name="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" value="1" @if (old('is_active')) checked @endif>
        <label class="form-check-label">Active</label>
    </div>
 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
 
@endsection