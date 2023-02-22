@extends('components.layout')

@section('title', 'edit recipe '. $recipe->name)

@section('content')

<h1>Edit recipe "{{ $recipe->name }}"</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('recipe.edit', ['id' => $recipe->id]) }}" method="post" class="row g-3" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="form-label">Name:</label>
        <input type="text" name="name" value="{{ old('name', $recipe->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Recipe name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label">Category:</label>
        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
            <option value="">-</option>
            @foreach($categories as $category)
            <option @if(old('category_id', isset($recipe->category->id) ? $recipe->category->id : null) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label class="form-label">Ingredients:</label>
        <select name="ingredient_id[]" class="form-control" multiple>
            @foreach($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}" @if($recipe->ingredients->contains($ingredient->id))selected @endif>{{ $ingredient->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="form-label">Description:</label>
        <textarea type="text" name="description" value="{{ old('description', $recipe->description) }}" class="form-control @error('description') is-invalid @enderror" placeholder="Recipe description"></textarea>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Image</label>
        <input type="file" name="image" value="{{ old('image', $recipe->image) }}" class="form-control">
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