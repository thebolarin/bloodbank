<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{asset('app/css/materialize.min.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app/css/flaticon.css')}}">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Bloodcare</title>
</head>

<body>
  
  <!-- RESPONSIVE WITH SIDE MENU -->
  <div class="navbar-fixed">
        <nav class="white ">
                <div class="container">
                  <div class="nav-wrapper">
                      <b>
                            <a href="/" class="brand-logo">{{$title}} </a>
                      </b>
                   
                    <a class="button-collapse" data-activates="mobile-nav" href="#">
                      <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down  black-text">
                      
                      <li>
                        <a  href="{{route('donation-eligibility')}}">Eligibility Requirements
                                  
                                </a>
                              </li>

                              <li>
                              <a  href="{{route('donation-hospital')}}">For Hospitals
                                     
                                    </a>
                                  </li>
                 
        
                  <!-- DROPDOWN TRIGGER -->
                  <li>
                  <a  href="{{route('donation-donation')}}">  Donation process
               
                    </a>
                  </li>
        
        
                     <li>
                     <a href="{{route('donation-about')}}"> About Us</a>
                      </li>
                      <!-- BUTTON LINK -->
                        <li>
                        <a class="btn white red-text waves-effect waves-red login" href="/donor/login"> Log in</a>
                      </li>
            
                      <li>
                            <a class="btn red white-text waves-effect waves-light signup" href="/donor/register">Sign Up</a> 
                        </li>
                      <!-- ICON LINK -->
                     
                    </ul>
                   
                  </div>
                </div>
              </nav>
            
  </div>
  

  <ul class="side-nav" id="mobile-nav">
      <br>
        <b>
            <a href="/" class="brand-logo">{{$title}}</a>
            </b>
            <br>
            <hr>
        <li>
            <a  href="{{route('donation-eligibility')}}">Eligibility Requirements
                      
                    </a>
                  </li>
                 
                  <li>
                  <a  href="{{route('donation-hospital')}}">For Hospitals
                         
                        </a>
                      </li>
     

                    
                  <li>
                  <a  href="{{route('donation-donation')}}">  Donation process
              
                    </a>
                  </li>
                 
        
                    <li>
                    <a href="{{route('donation-about')}}"> About Us</a>
                      </li>
                      <hr>
                      <!-- BUTTON LINK -->
                        <li>
                        <a class="btn white red-text waves-effect waves-red login" href="{{route('donor.login')}}"> Log in</a>
                      </li>
            
                      <li>
                      <a class="btn red white-text waves-effect waves-light signup" href="{{route('donor.register')}}">Sign Up</a> 
                        </li>
    </ul>


  <!-- DROPDOWN MENU -->
  <ul id="my-dropdown" class="dropdown-content">
    <li>
      <a href="#">Blood donation overview</a>
    </li>
    <li>
      <a href="#">What to do before,during and after</a>
    </li>
    <li>
      <a href="#">What happens to donated blood</a>
    </li>

    <li>
    <a href="#">First time blood donors</a>
    </li>
  </ul>

  <ul id="my-dropdown1" class="dropdown-content">
        <li>
          <a href="#">Eligibility requirements</a>
        </li>
        <li>
          <a href="#">Learn about blood</a>
        </li>
        <li>
          <a href="#">How blood donations help</a>
        </li>

        <li>
                <a href="#">Common concerns</a>
              </li>
      </ul>

 


  <div class=" landing1 land3">
      
        <div class="row">

                <div class="container">
                        <div class="col xl12 l12 m12 s12  left ">
                              
                                        <h1>
                                               {{$hospital1->title}}
                                            </h1>
                                          
                                </div>
        
                               
                               
                            </div>
                
                           
                </div>
                   
              </div>
      
           
  </div>




  
       <section class="section section-main">
            <div class="container fast">
                    <div class="row row-1">
                        <div class="col xl6 l6 m6 s12 cheap-left">
                                <img src=" {{$hospital2->avatar}}" alt="">
                        </div>
                            
                        <div class="col xl6 l6 m6 s12 ">
                                <h2>  {{$hospital2->title}} </h2>
                              
                                       <p> {!!$hospital2->content!!}</p>
                                  
                        </div>
                               
                      

                    </div>
                    <br><br>
                       

                      
                        <br><br><br>
                        <div class="row row-1  ">
                                <div class="col m6 s12 cheap-left">
                                        <div class="box">
                                                <h2> {{$hospital3->title}}</h2>
                                              
                                                        <p style="line-height:10px;"> {!!$hospital3->content!!}</p>
                                                    
                                        </div>
                                </div>

                                <div class="col m6 s12 box-si ">
                                        <div class="box-size ">
                                                <img src=" {{$hospital3->avatar}}" alt="">    
                                        </div>
                                </div>
                        </div>

                            <br><br>

                            <div class="row row-1">
                                    <div class="col xl6 l6 m6 s12 ">
                                            <img src=" {{$hospital4->avatar}}" alt="">
                                    </div>
                                        
                                    <div class="col xl6 l6 m6 s12">
                                            <h2> {{$hospital4->title}}</h2>
                                          
                                                   <p> {!!$hospital4->content!!}</p>
                                              
                                    </div>
                                           
                                  
            
                                </div>
    
                                <br><br>


                                <div class="row row-1">
                                                
                                       <div class="container">
                                            <div class="col xl12 l12 m12 s12">
                                                    <h2> {!!$hospital1->content!!}</h2>
                                                  
                                                    <div>
                                                         @if (session('status'))
                                                            <div class="card-panel cyan lighten-5" >
                                                                {{ session('status') }}
                                                            </div>
                                                        @endif
                                                        <form action="{{route('order.store')}}" method="post" >
                                                            {{ csrf_field() }}
                                                                    <!-- TEXT FIELD -->
                                                                    <div class="input-field">
                                                                      <input id="name" type="text"  name="name" class="form-control">
                                                                      <label for="name">Name</label>
                                                                    </div>
    
                                                                    
                                                                    
                                                                    <div class="input-field">
                                                                    <input id="name" type="text"  name="hospital" class="form-control">
                                                                    <label for="name">Hospital Name</label>
                                                                    </div>

                                                                    
    
                                                                    <div class="input-field">
                                                                    <input id="mobile" type="text"  name="mobile" class="form-control">
                                                                    <label for="name">Mobile</label>
                                                                    </div>
    
                                                                    <div class="input-field">
                                                                    <input id="email" type="text" name="email" class="form-control">
                                                                    <label for="email">Email</label>
                                                                    </div>

                                                                     
                                                                    
                                                                    <div>
                                                                            <label for="bloodType">Blood Type:</label><br>
                                                                            <select name="blood_id" id="blood" class="form-control">
                                                                                @foreach($blood as $blood)
                                                                                <option value="{{$blood->id}}">{{$blood->blood_group}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                        </div>
                
                                                                       
                                                                        <div>
                                                                            <label for="qty">Qty:</label><br>
                                                                            <input type="number" name="quantity" id="qty"  class="form-control">
                                                                        </div>
    
                                                                    <br>
                                                                    <br>
                                                                    <div>
                                                                    <input type="submit" value="Submit" class="btn white-text ">
                                                                    </div>
                                                            </form>
                                                        </div>
                                                      
                                            </div>
                                       </div>
                                            
                                       
                
                                    </div>


                        

            <br><br>
            <div class="section-2">
                 <h2 class="">
                    {{$post11->title}}         
                  </h2>
            </div>
    </div>         
    
    <br><br>

            
                <div class="foot red">
                        
                          <div class="section-3">
                                <h1> {{$post11->content}}</h1>
                            
                     
                            
                                
                                <p>{{$post12->title}} <br><br> <a class="btn btn-large" href="/donor/register"><b>Sign up</b></a></p>
                                    
                
                               
                                   
                          </div>     
                

                 <hr>


                 <div class="row row-5 ">
                     <div class="container">
                            <div class="col m6 s12 first">
                                    <div class="box">
                                        <div class="img">
                                               <img src="app/img/5.jpg" alt="">
                                        </div>
                                      
                                           
                                                <br>
                                           
                                    </div>
                                  </div>
   
                                  <div class="col m6 s12 second">
                                    <div class="box">
                                          
                        
                                        <p class="lead">
                                            <b>
                                               {{$address}}
                                           </b>            
                                   </p>
                                   <p class="">
                                       <b>{{$contact}}</b>  
                                       </p>
                                   <p class="">
                                   <b>{{$email}}</b>                      
                                   </p>
                                           
                                                <br>
                                           
                                    </div>
                                  </div>  
                     </div>
                         
                 </div>

                 <div class="container footer">
                        <p>©{{$post12->content}}<b><a href="">Privacy &amp; Terms</a></b> </p>
                 </div>
                
                
                <br>
                </div>
       
                </div>
           
       </section>
  

 
 

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="{{asset('app/js/materialize.min.js')}}"></script>
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
    $(document).ready(function () {
      $('.dropdown-button').dropdown({
        constrainWidth: false,
        hover: true,
        belowOrigin: true,
        alignment: 'left'
      });

      // JAVASCRIPT START HERE //

      $('.button-collapse').sideNav();

      $('select').material_select();

     


    });


    qty.addEventListener('keyup', function () {
            var bloodType = document.getElementById('bloodType').value;
            var qty = document.getElementById('qty');
            var price = 0;
            console.log(bloodType)
            if (bloodType == "A-" || bloodType == "O-" || bloodType == "AB-" || bloodType == "B-") {
                price = 19000
                var cost = price * qty.value
                document.getElementById('cost').value = cost;
            } else if (bloodType == "A+" || bloodType == "O+" || bloodType == "AB+" || bloodType == "B+") {
                price = 14000
                var cost = price * qty.value
                document.getElementById('cost').value = cost;
            }
        })
  </script>
</body>

</html>