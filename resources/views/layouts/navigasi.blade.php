<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel 7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="/posts">Posts</a>
      </li>
    </ul>
  </div>
</nav>