<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUP VirCaF</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="{{ asset('img/logo.png')}}" alt="Logo" />
              <h3>PUP VirCaF</h3>

            </div>

            <div class="links">
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#" >About Us</a></li>
                <li><a href="#" >Companies</a></li>
                <li><a href="#" >Sign in</a></li>
                <li><a href="" class="btn" >Register Here</a></li>
               
               </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Opportunities</h1>
                <h2>are waiting</h2>
                <h2>for you,</h2>
                <h2>Apply Now.</h2>
              </div>
             
              <div class="cta">
                <form action="/action_page.php">
                  <input type="text" placeholder="Job Title or Keyword" name="search">
                  <button type="submit" name="Searchbtn">Search</button>
                </form>
              </div>

            </div>

            <div class="right"> 
              <h1 class="announcement">Announcement</h1>
            <div id="Announcement"><p>{{$announcement}}</p></div>
           <div class="social">
            <p>Follow us</p>
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button  class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>
    @yield('content')
    
    <div class="myft">
    <footer>
      <div class="main-content light">
        <div class="left box" id="about-us">
          <h2>About us</h2>
          <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis fugiat, cumque quos nesciunt molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, quas. </p>
           
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Sta. Mesa Anonas St.</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">09125171429</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">pup@edu.ph</span>
            </div>
          </div>
        </div>

        <div class="right box" id="con-us">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn1">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">BSCOE 5-1D <a href="#">PUP Job Fair</a> | </span>
          <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </center>
      </div>
    </footer>
  </div>
    <!-- JavaScript Files -->
     
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('js/app1.js')}}"></script>
  </body>
</html>
