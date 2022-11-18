@extends('layouts.app')

@section('content')
  <!-- Start Tulis Resep -->
  <div class="tresep">
    <div class="container">
        <div class="col-12 mt-5">
            <div class="card border-0">
                <img src="{{asset('images')}}/{{$recipe->photo}}" alt="">
                <p class="title">{{ $recipe->title}}</p>
                <p class="description">{{ $recipe->description }}</p>
                <p class="title2">Bahan - bahan</p>
                @foreach ($ingredient as $ingredients)
                    <p class="m-0 mb-2">{{ $ingredients->name }}</p>
                @endforeach
                <p class="title2">Langkah Pembuatan</p>
                @foreach ($step as $steps)
                    <p class="m-0 mb-2">{{ $steps->name }}</p>
                @endforeach
            </div>
        </div>
    </div>
  </div>
  <!-- End Resep -->
@endsection