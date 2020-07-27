<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('post.index')}}">Larablog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('post.index')}}">Post<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.create')}}">Create</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CRUD
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('post.create')}}">Create</a>
            <a class="dropdown-item" href="{{route('post.index')}}">Read</a>
            {{-- <a class="dropdown-item" href="{{route('post.update')}}">Update</a> --}}
            {{-- <a class="dropdown-item" href="{{route('post.destroy')}}">Detele</a> --}}
          </div>
        </li>
      </ul>
      <ul class="nav justify-content-center">
          <li class="nav-item">
              <a class="nav-link active" href="#">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pefil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Usuario</a>
            </div>
          </li>
      </ul>
    </div>
  </nav>