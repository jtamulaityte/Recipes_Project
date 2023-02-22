@extends('components.layout')
 
@section('title', 'edit ingredient '. $ingredient->name)
 
@section('content')
 
<h1>Edit Ingredient "{{ $ingredient->name }}"</h1>
 
<form action="{{ route('admin.ingredients.edit', ['id' => $ingredient->id]) }}" method="post" class="row g-3">
 
    @csrf
    <div class="form-group">
        <label class="form-label">Ingredient Name:</label>
        <input type="text" name="name" value="{{ old('name', $ingredient->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Category name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
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