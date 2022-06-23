  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
          <li class="drop-down"><a href="">Kirim Pengaduan</a>
            <ul>
              <li><a href="{{route('login')}}">Login</a></li>
              <li class="drop-down"><a href="{{route('register')}}">Register</a>
              </li>
              </ul>
          </li>
          <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->