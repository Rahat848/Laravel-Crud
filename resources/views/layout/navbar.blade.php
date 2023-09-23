<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" https://simple-portfolio-20.netlify.app/">portfolio</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li> --}}
        </ul>
        <form action="" class="d-flex" role="search">
          <input class="form-control me-2" name="search" value="{{ $search ?? null}}" type="search" placeholder="Search" aria-label="Search">
          <button class="btn me-2 btn-outline-success" type="submit">Search</button>
        </form>
        <a class="me-2" href="/">
          <button class="btn bg-primary text-light">Signin</button>
        </a>
        <a class="me-2" href="#">
          <button class="btn bg-danger text-light">Logout</button>
        </a>
      </div>
    </div>
  </nav>
