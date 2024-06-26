<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container ">
      <a class="navbar-brand" href="#">Blog post</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link {{ ( $title  === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ ($title  === "About") ? 'active' : '' }}" aria-current="page" href="/about">About</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Contact") ? 'active' : '' }}" aria-current="page" href="/contact">List Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Categories") ? 'active' : '' }}" aria-current="page" href="/categories">Category</a>
            </li>
        </ul>

        @auth
         <div class="text-end">

             <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome {{ auth()->user()->name }} Yan!!
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                      <li>
                        <form action="/logout" method="POST">
                           @csrf
                           <button type="submit" class="dropdown-item">Logout</button>

                        </form>

                    </ul>
                  </li>
                </ul>
              </div>
         </div>

            @else
            <a class="text-light text-decoration-none" href="/login"><button class="btn btn-success px-md-5 shadow">  Login
            </button></a>
        @endauth



      </div>
    </div>
  </nav>
