@extends('components.min_layout')

@section('content')

<div class="row">
    <form action="{{ url('recipes') }}" method="get"> 
        
    <div class="col-12">    
        <label class="form-label">Recipe name:</label>
        <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Recipe name">
    </div>

        <div class="col-12">        
            <label class="form-label">Category:</label>        
            <select name="category_id" class="form-control"> 
            <option value=""></option>           
            @foreach($categories as $category)
            <option @if($category->id == $category_id) selected @endif
            value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="col-12 mt-2">        
            <button type="submit" class="btn btn-info">Filter</button>  
            <a href="{{ url('recipes') }}" >clear</a></div>  
        </div>
    </form>

<div class="row">
    @foreach($recipes as $recipe)
    <div class="col-3 mb-3">
        <div class="card h-100 bg-body-secondary">
            <div class="card-body">
                @if ($recipe->image)
                    <img class="card-img-top"  src="{{ asset($recipe->image) }}">
                @else
                    No image
                @endif
                <h5 class="card-title"><a href="{{ url('recipe', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a></h5>
                <h6 class="card-subtitle text-muted">
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif
                </h6>
                <a href="{{ url('recipe', ['id'=> $recipe->id]) }}">Make {{ $recipe->name }} recipe</a>  
            </div>
        </div>
    </div>
    @endforeach
    </div>
    
    <div class="row">
        <div class="col">
            {{ $recipes->links()}}
        </div>
    </div>

</div>
@endsection