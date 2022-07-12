<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('web/img/logo.png') }}" alt="logo" class="img-fluid" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link active dropdown-toggle"
              href=""
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Our services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('/') }}">Home</a></li>
              <li><a class="dropdown-item" href="{{ url('service') }}">Service</a></li>

              <li>
                <li><a class="dropdown-item" href="Ilets.html">ILETS Coaching</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('service.pte') }}">PTE coaching</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('service.migration') }}">Migration </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('contact') }}">contact</a>
          </li>
        </ul>
        <button type="button" class="btn btn-primary">
          book appointment
        </button>
      </div>
    </div>
  </nav>