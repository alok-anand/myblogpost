
<nav class="navbar fixed-top navbar-expand-lg">
  <div class="custom-container"> <a class="navbar--brand" href="{{ url('/testprep') }}"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/cp-logo.svg') }}" alt="CanamPrep"> <span class="sr-only">Canam</span></a>
    <div class="nav-right"> <a href="./contact.html" class="button-rounded button-rounded__dark mobile">Free Demo Class</a>
      <div class="hamburger hamburger--squeeze" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="header-menu">
      <div class="navbar-nav" id="header-menu-list">
        <div class="nav-item "> <a href="{{ url('/testprep') }}" class="text--primary @if($active =='Home') {{ 'active' }} @endif  @@home">Home</a> </div>
        <!--div class="nav-item @if($active ==='Canam plus') {{ 'active' }} @endif "> <a href="./canamprep-plus.html" class="text--primary @@prep">Canamprep Plus</a> </div-->
        <div class="nav-item @if($active ==='IELTS') {{ 'active' }} @endif "> <a href="{{ url('/testprep/exams/ielts') }}" class="text--primary @if($active ==='IELTS') {{ 'active' }} @endif @@ielts">IELTS</a> </div>
        <!--div class="nav-item @if($active ==='Events') {{ 'active' }} @endif  "> <a href="./event.html" class="text--primary @@events">Events</a> </div-->
        <div class="nav-item @if($active ==='Blogs') {{ 'active' }} @endif  "> <a href="{{ url('/blog') }}" class="text--primary @@blogs">Blogs</a> </div>
        <div class="nav-item web @if($active ==='Free Demo Class') {{ 'active' }} @endif  "> <a href="./contact.html" class="button-rounded button-rounded__dark" data-toggle="modal" data-target="#zoomModal" >Free Demo Class</a> </div>
        <div class="nav-item @if($active === 'Sign in') {{ 'active' }} @endif {{ $active == 'Sign in'?'active' :''; }} "> <a href="{{ url('/signup') }}" class="text--primary w-icon profile @@profile">Sign In</a> </div>
      </div>
    </div>
  </div>
</nav>