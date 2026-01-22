<header class="header header-4">
        <div class="navbar-area fixed-top bg-dark">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{('base/img/logo/logo.svg')}}" alt="Logo" />
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent4">
                    <ul id="nav4" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll text-white" href="{{ route('home') }}">Home</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="page-scroll active" href="{{ route('home') }}"  data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                        aria-expanded="false" aria-label="Toggle navigation">Home
                          <div class="sub-nav-toggler">
                            <span> <i class="lni lni-chevron-down"></i> </span>
                          </div>
                        </a>
                        <ul class="sub-menu collapse" id="sub-nav">
                          <li><a href="index.html" class="active">Home Style One</a></li>
                          <li><a href="index-2.html">Home Style Two</a></li>
                          <li><a href="index-3.html">Home Style Three</a></li>
                        </ul>
                      </li> -->
                      <li class="nav-item">
                        <a class="page-scroll  text-white" href="{{ route('blog') }}"  data-toggle="collapse" data-target="#sub-nav2" aria-controls="sub-nav2"
                        aria-expanded="false" aria-label="Toggle navigation">Blogs
                          <div class="sub-nav-toggler">
                            <span> <i class="lni lni-chevron-down"></i> </span>
                          </div>
                        </a>
                        <ul class="sub-menu collapse" id="sub-nav2">
                          <li><a href="{{ route('sport') }}">Sports</a></li>
                          <li><a href="{{ route('technology') }}">Technology</a></li>
                          <li><a href="{{ route('nature') }}">Nature</a></li>
                          <li><a href="{{ route('political') }}">Political</a></li>
                          <li><a href="{{ route('blog') }}">Blog Page</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll text-white" href="{{ route('about') }}">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll text-white" href="{{ route('contact') }}">Contact Us</a>
                      </li>
                      <li class="nav-item d-flex align-items-center border border-dark rounded px-2 ms-3">
                            <a class="nav-link px-2 text-white" href="{{('login')}}">Login</a>
                            <span class="text-muted">|</span>
                            <a class="nav-link px-2 text-white" href="{{('register')}}">Sign-Up</a>
                        </li>
                    </ul>
                    
                  </div>
                  <div class="header-search">
                    <a href="#0"> <i class="lni lni-search-alt"></i> </a>
                    <form action="#">
                      <input type="text" placeholder="Type for search...">
                    </form>
                  </div>
                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>