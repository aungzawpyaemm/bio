<header class="header-area">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                {{-- <a href="index.html" class="nav-brand"><img src="{{asset('fontend/img/core-img/logo.png')}}" alt=""></a> --}}

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="">Home</a></li>
                                    @foreach ($categories as $category)

                                      <li ><a href="{{ route('fontends.cat', $category->id) }}">{{ $category->name }}</a></li>

                                    @endforeach
                                <li><a href="#">About</a>
                                    <ul class="dropdown">
                                        
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                   

                    <div class="top-meta-data d-flex align-items-center ">
                        
                        <!-- Top Search Area -->
                        <div class="top-search-area mr-auto">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- User Form -->
                        <div class="classynav">
                            <ul>           
                                <li>
                                     @if (Auth::user())
                                              <a href="#" data-toggle="tooltip" data-placement="top" title="{{Auth::user()->name}}"> 
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                               </a>
                                               
                                     @else
                                                <a href="#"> 
                                                     <i class="fa fa-user" aria-hidden="true"></i>
                                                 </a>
                                    @endif   

                                    <ul class="dropdown">
                                        @guest
                                        <li><a href=""  data-toggle="modal" data-target="#loginModal">Login</a></li>
                                        <li><a href=""  data-toggle="modal" data-target="#register">Register</a></li>
                                        @endguest
                                            
                                        
                                        
                                        @auth
                                            <li><a href="">Settings</a></li>
                                            <li>
                                                <a class="" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                            </li>
                                           
                                        @endauth

                                    </ul>
                               </li>
                            </ul>
                        </div>
                        <!-- Usr Form End -->
                 
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
