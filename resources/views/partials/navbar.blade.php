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
          @auth
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end rounded px-2 py-3" style="padding: 0px; border: none; outline: none;" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-1" href="{{ route('logout') }}">
                          <svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z" clip-rule="evenodd" />
                          </svg>
                            
                          Logout
                        </a>
                    </li>
                </ul>
            </li>
          @endauth
          @guest
            <li class="nav-item" style="width: 100px;">
                <a class="nav-link text-center fw-bold" style="padding: 8px; 20px; border-radius: 20px; background-color: #3C33FF; font-size: 13px; color: white;" href="{{ route('login') }}">Masuk</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li> --}}
          @endguest
        </ul>
      </div>
    </div>
  </nav>