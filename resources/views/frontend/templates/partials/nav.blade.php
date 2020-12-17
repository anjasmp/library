<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
<a class="navbar-brand" href="/">
    <img src="{{ asset ('/assets/open-book.svg')}}" width="30" height="30" style="color: white;" class="d-inline-block align-top" alt="">
    Libraries
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right"> 
        @guest
        <li><a class="nav-item nav-link" href="{{ route ('login')}}">Login</a></li>
        <li><a class="nav-item nav-link " href="{{ route ('register')}}">Register</a></li>
        @else
        <!-- <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('home') }}">Home</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
            <a class="dropdown-item" href="#" data-target="dropdown1">{{ auth()->user()->name }}</a>
          </div> 
        </div>-->
        <li><a class="nav-item nav-link" href="/">Home</a></li>
        <li><a class="nav-item nav-link" href="{{ route('home') }}">Bookmarks</a></li>
        <li><a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></li>
        
        <li><a href="#" class="nav-item nav-link" data-target="dropdown1">{{ auth()->user()->name }}</a></li>
            
        @endguest
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
      
  </div>
</nav>