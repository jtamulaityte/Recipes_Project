@extends('components.min_layout')
@section('title', $recipe->name . ' recipe')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card bg-body-secondary">
        <div class="card-body">
            <img class="card-img-top" src="{{ asset($recipe->image) }}">
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card h-100 bg-body-secondary">
        <div class="card-body">
          <h2 class="card-title">{{ $recipe->name }}</h2>
          <h4 class="card-subtitle mb-2 text-muted">
            {{ $recipe->category->name }} 
          </h4>
          <br>
          <h5 class="card-subtitle mb-2 text-muted">Ingredients:</h5>
          <ul class="list-unstyled">
            <li>
              @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                  <li style="list-style-type: circle; margin-left: 25px">{{ $ingredient->name }} </li>
                @endforeach
              @endif
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <p></p>

  <div class="card bg-body-secondary">
    <div class="card-body">
      <p class="card-text">{{ $recipe->description }}</p>
    </div>
  </div>
  
</div>

@endsection