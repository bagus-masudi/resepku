@extends('layouts.app')

@section('content')
  <!-- Start Resep -->
  <div class="resep">
    <div class="container w-50 mt-5">
      <div class="row">
        <h3>Resep Terbaru</h3>
      </div>
      <div class="row mt-3">
        <div class="rowresep">
          @foreach ($recipe as $recipes)
          <div class="col-4 mb-5">
            <div class="card border-0">
              <img src="{{asset('images')}}/{{$recipes->photo}}" alt="">
              <p class="like m-0 mt-1">2 Orang Menyukai ini</p>
              <a class="title m-0 mt-1 bg-light p-0" href="{{route('detail' , '2')}}">{{$recipes->title}}</a>
              <p class="deskripsi m-0 mt-1">{{$recipes->description}}</p>
              <a href="#" class="btn-first text-center mt-3">Suka</a>
            </div>
          </div>
          @endforeach 
      </div>
    </div>
  </div>
  <!-- End Resep -->

@endsection