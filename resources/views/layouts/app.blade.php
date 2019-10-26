<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bloodcare</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="/css/flaticon.css"> 

    <!-- Styles -->
     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/back.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light " style="background-color:#0c5061; color:white;">
            <div class="container">
                <a class="navbar-brand mb-0 h1" href="{{ url('/') }}">
                    <b style="color:white;">Bloodcare</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                              <li class="nav-item dropdown " >
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src ="{{asset(Auth::user()->profile->avatar)}}" alt="" width="35px" height="35px" style="border-radius:20%;"> 
                                   <b> {{Auth::user()->name}}</b> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                                
                                   
                                    <b> <a class="dropdown-item" href="{{ route('user.profile') }}"
                                        >
                                            {{ __('My profile') }}
                                        </a>
    </b>
                                    
                                               

                                    <a class="dropdown-item" href="{{ route('donor.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         
                
            <div class="row" style="background:white;">
                    @if(Auth::check())

                         <div class="col-lg-2 aside">

                            <ul class="list-group">
    
                                <li class="">
                                    <a   href="{{route('home')}}"><i class=" fa flaticon-tent"></i> Home</a>
                                </li>
                        @if(Auth::user()->admin)
                             <li class="">
                                    <a href="{{route('users')}}"><i class=" fa flaticon-user"></i>All Users</a>
                                </li>
                              
                                <li class="">
                                    <a href="{{route('donor')}}"><i class="fa flaticon-woman"></i></i></i>Donors</a>
                                </li>

                                <li class="">
                                    <a href="{{route('blood')}}"><i class="fa flaticon-dna"></i> Blood Groups</a>
                                </li>
    
                              

                               

                                <li class="">
                                    <a href="{{route('appointments')}}"><i class="fa flaticon-healthcare-and-medical"></i></i>Appointment</a>
                                 </li>


                                  <li class="">
                                    <a href="{{route('record')}}"><i class="fa flaticon-medical-history"></i></i>Donation Records</a>
                                 </li>

                                

                                  <li class="">
                                    <a href="{{route('status')}}"><i class="fa flaticon-view"></i></i>Donor status</a>
                                 </li>

                                

                                  <li class="">
                                    <a href="{{route('orders')}}"><i class="fa flaticon-worker-loading-boxes"></i></i>Blood Orders</a>
                                 </li>

                               

                                  <li class="">
                                    <a href="{{route('stocks')}}"><i class="fa flaticon-list"></i></i>Blood stocks</a>
                                 </li>

                                  


                                <li class="">
                                    <a href="{{route('donor.trash')}}"><i class="fa flaticon-delete"></i> Trashed donor</a>
                                </li>

                                <li class="">
                                    <a href="{{route('settings')}}"><i class="fa flaticon-desk"></i> Site settings</a>
                                </li>
                                  

                               
                                    <a>--------------------------------</a>
                                    <br>
                                

                                <li class="">
                                    <a href="{{route('posts')}}"><i class="fa flaticon-thread"></i> Home post</a>
                                </li>


                                
                                <li class="">
                                    <a href="{{route('eligible')}}"><i class="fa flaticon-thread"></i> Eligibility post</a>
                                </li>


                                
                                <li class="">
                                    <a href="{{route('hospital')}}"><i class="fa flaticon-thread"></i> Hospital post</a>
                                </li>


                                
                                <li class="">
                                    <a href="{{route('donation')}}"><i class="fa flaticon-thread"></i> Donation process</a>
                                </li>


                                
                                <li class="">
                                    <a href="{{route('about')}}"><i class="fa flaticon-thread"></i> About Us post</a>
                                </li>
                        @endif
                               
     
                            </ul>
                        </div>
                   
    
                       
                    @endif

                  
                    <div class="container">
                      <main class="py-4 col-lg-10">
                         
                                @yield('content')
                         
                      
                    </main>
                </div>
               

            </div>
        </div>
       
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>

<script>
        $("#sub-btn").click(function(e) {
          var logoimg = document.getElementById("upload");
                let size = logoimg.files[0].size; 
                if (size > 2000000) {
                    alert(" Image Size is exceeding 2 Mb");
                    event.preventDefault(); 
                }
        });
    </script>

    @yield('scripts')
</body>
</html>
