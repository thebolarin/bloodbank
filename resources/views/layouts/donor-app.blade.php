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

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/flaticon.css"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/back.css') }}" rel="stylesheet">
    <link href="{{ asset('css/donorlogin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
               {{--{{ config('app.name', 'Laravel') }} --}}        <b>Bloodcare</b>
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
                        @if(!auth()->guard('donor')->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('donor.login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('donor.register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img src ="{{asset(Auth::guard('donor')->user()->profile->avatar)}}" alt="" width="30px" height="30px" style="border-radius:50%;"> 
                                   <b>{{ Auth::guard('donor')->user()->name }}</b>  <span class="caret"></span>
                                </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @if(Auth::guard('donor')->user()->donor)
                                                    <a class="dropdown-item" href="{{ route('donor.profile') }}"
                                    >
                                        {{ __('My profile') }}
                                    </a>
                                @endif

                                    <a class="dropdown-item" href="{{ route('donor.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('donor.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

      
                
            <div class="row " >
           
                    @if(auth()->guard('donor')->check())
 
                         <div class="col-lg-2 front">
                                    
                                
                                        <br>                             
                            <ul class="list-group">
    
                                <li class="">
                                    <a href="/donor/home"><i class="flaticon-house fa"></i>Dashboard</a>
                                </li>
                        @if(Auth::guard('donor')->user()->donor)
                             <li class="">
                                    <a href="{{route('donor.fetch')}}"><i class="flaticon-list fa"></i> My Donation records</a>
                                </li>
                              
                                <li class="">
                                    <a href="{{ route('donor.profile') }}"><i class="flaticon-swab fa"></i>Profile</a>
                                </li>

                                <li class="">
                                    <a href="{{ route('appointment') }}"><i class="flaticon-no-trolley fa"></i>Appointments</a>
                                </li>
    
                                <li class="">
                                    <a href="{{ route('appointment.create') }}"><i class="flaticon-pole fa"></i>Make an appointment</a>
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
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
