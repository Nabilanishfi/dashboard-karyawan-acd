<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex justify-content-between" style="width: 90%; margin: 0px auto">
      <a class="navbar-brand" style="width: 80%" href="{{ route('admin.admin') }}">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.admin') ? 'active' : '' }}" aria-current="page" href="{{ route('admin.admin') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.manager') ? 'active' : '' }}" href="{{ route('admin.manager') }}">Manager</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>