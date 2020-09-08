<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="{{ url('/') }}">ポートフォリオへようこそ(仮)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">TOP<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('content') }}">Contents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('list') }}">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
        </li>
        <li class="nav-item dropdown"></li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          App
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/') }}">APP1</a>
          <a class="dropdown-item" href="{{ url('/') }}">APP2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/') }}">APP3</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>