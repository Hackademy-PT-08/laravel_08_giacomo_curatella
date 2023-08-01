<nav class="navbar navbar-expand-lg bg-info shadow" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('articoli') }}">Blog.it (GiacomoCuratella)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          
          @if(!auth()->check())
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Sign-in</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articoli') }}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('creaArticolo') }}">Crea Articolo</a>
          </li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class=" p-1" style="background-color: red; color:white">Esci</button>
          </form>
          @endif
        </ul>
      </div>
    </div>
</nav>