<nav class="navbar navbar-expand-lg bg-body-tertiary py-3" style="backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); background-color: rgba(255, 255, 255, 0.7);">
    <div class="container d-flex justify-content-between" style="width: 90%; margin: 0px auto">
      <a class="navbar-brand d-flex gap-2" style="width: 25%" href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('./img/angkasapura.svg') }}" alt="angkasapura">
        <img src="{{ asset('./img/acd.svg') }}" alt="acd">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            Halo, {{ auth()->user()->name }}
          </li>
        </ul>
      </div>
    </div>
  </nav>