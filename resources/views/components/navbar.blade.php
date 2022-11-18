<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Resepku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @if (Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{route('show')}}">My Resep</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}">Tulis Resep</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>