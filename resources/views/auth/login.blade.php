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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
       
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           

               
                    <form method="POST" class="form-login" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                            <div class="form-login-title">
                                <i class="flaticon-login" ></i>
                            </div>
                            <div class="form-login-body">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text form-login-icono"> <span class="flaticon-avatar"></span></div>
                                    </div>
                                   
        
                                   
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-login-input" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                   
                                </div>
        
                                <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text form-login-icono"> <span class="flaticon-lock"></span></div>
                                        </div>
                                       
            
                                       
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-login-input" name="password" placeholder="Password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                       
                                    </div>

                               
        
                                
                                   
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                   
                               
        
                                <div class="form-group form-login-btn">
                                   
                                        <button type="submit" class="btn   btn-block" style="background:#245e71;">
                                           <b>  {{ __('Login') }}</b>
                                        </button>
        
                                      
                                   
                                </div>
                               <div class="form-login-op">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                               </div>
                                
                            </div>
                       
                    </form>
             
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
   

</body>
</html>
