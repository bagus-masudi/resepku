@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Login</h2>

                        @if (session()->has('error'))
                        <p class="text-danger">{{ session('error') }}</p>
                        @endif
                    
                        <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection