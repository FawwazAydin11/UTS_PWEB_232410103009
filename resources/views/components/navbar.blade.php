<nav class="navbar navbar-expand-lg bg-info shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-danger" href="{{ url('/dashboard') }}?username={{ $username }}">SEWAFLIX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active fw-semibold' : '' }}"
               href="{{ url('/dashboard') }}?username={{ $username }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('pengelolaan') ? 'active fw-semibold' : '' }}"
               href="{{ url('/pengelolaan') }}?username={{ $username }}">Pengelolaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('profile') ? 'active fw-semibold' : '' }}"
               href="{{ url('/profile') }}?username={{ $username }}">Profile</a>
          </li>
          @if($username)
          <li class="nav-item">
            <span class="nav-link text-light fw-semibold">👤 {{ $username }}</span>
          </li>
          @endif
        </ul>
      </div>
    </div>
</nav>
