<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href={{ route('home') }}>Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href={{ route('todo') }}>List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('todo.livewire') }}>List LiveWire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('salary') }}>salary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('todo.usermanagement') }}>User Penal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('manage.role') }}>User Role</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('profile.show') }}>User Profile</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="ml-auto">
      @auth
      <span class="text-white me-2">Hello, {{ Auth::user()->name }}</span>
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
  @endauth
  </div>
  </nav>