<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href=" {{asset('app/css/materialize.min.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href=" {{asset('app/css/flaticon.css')}} ">  
  
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
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
                      <a href="/" class="brand-logo">{{$title}}</a>
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
                     
            
                   
                      <li>
                      <a  href="{{route('donation-donation')}}">  Donation process
                   
                        </a>
                      </li>
            
            
                         <li>
                         <a href="{{route('donation-about')}}"> About Us</a>
                          </li>
                          <!-- BUTTON LINK -->
                            <li>
                            <a class="btn white red-text waves-effect waves-red login" href="{{route('donor.login')}}"> Log in</a>
                          </li>
                
                          <li>
                          <a class="btn red white-text waves-effect waves-light signup" href="{{route('donor.register')}}">Sign Up</a> 
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

 


  <div class=" landing  ">
      <div class="row">

        <div class="container">
                <div class="col xl7 l7 m6 s12  left ">
                      
                                <h1>
                                       {{$post1->title}}
                                    </h1>
                                    <h5 class="">
                                        {{$post1->content}}
                                    </h5>
                                          <br>
                                <a class="btn-large white-text" href="{{route('appointment.create')}}"> <b>Make an appointment</b> </a>
                        </div>

                        <div class="col xl5 l5 m6 s12 ">
                        
                              
                                <img src="{{$post1->avatar}}" alt=""> 
                                  
                               
                             
                            
                          </div>
                       
                    </div>
        
                   
        </div>
           
      </div>
  </div>

  
       <section class="section section-main">
            <div class="container">
                    <div class="row row-1">
                        <div class="col xl6 l6 m6 s12">
                                <img src="app/img/8.jpg" alt="">
                        </div>

                        <div class="col xl6 l6 m6 s12">
                                    <h2>
                                        {{$post2->title}}
                                    </h2>
                                    <p>
                                        {{$post2->content}}
                                    </p>
                                        <br>            
                                    <a class="btn btn-large " href="{{route('donation-about')}}">Read more</a>
                        </div>
                               
                      

                    </div>
                    <br><br>
                       

                        <div class="row row-2">

                                <h2> {{$post3->title}}</h2>
                                <br><br>
                                     <div class="col m3 s12">
                                        <div class="box">
                                                <i class="flaticon-stethoscope"></i>
                                                <h4 class="">
                                                        {{$post4->title}}   
                                                </h4>
                            
                                                <p class="">
                                                        {{$post4->content}}
                                                </p>
                                                    <br>
                                                <a class="" href="{{route('donation-eligibility')}}">
                                                  <b> Learn more</b> </a>
                                        </div>
                                      </div>

                                      <div class="col m3 s12">
                                        <div class="box">
                                                <i class="flaticon-healthcare-and-medical"></i>
                                                <h4 class="">
                                                        {{$post5->title}}       
                                                </h4>
                                                   
                                                <p class="">
                                                        {{$post5->content}}
                                                </p>
                                                    <br>
                                                <a class="" href="/donor/register">
                                                  <b> Register now</b> </a>
                                        </div>
                                      </div>

                                      <div class="col m3 s12">
                                        <div class="box">
                                                <i class="flaticon-dna"></i>
                                                <h4 class="">
                                                        {{$post6->title}}       
                                                </h4>
                            
                                                <p class="">
                                                        {{$post6->content}}
                                                </p>
                                                    <br>
                                                <a class="" href="{{route('donation-donation')}}">
                                                  <b>Learn more</b> </a>
                                        </div>
                                      </div>

                                      <div class="col m3 s12">
                                        <div class="box">
                                                <i class="flaticon-woman"></i>
                                                <h4 class="">
                                                        {{$post7->title}}       
                                                </h4>
                            
                                                <p class="">
                                                        {{$post7->content}}
                                                </p>
                                                    <br>
                                                <a class="" href="{{route('donation-about')}}">
                                                 <b> Learn more</b>  </a>
                                        </div>
                                      </div>
                        </div>
                        <br><br><br>
                        <div class="row row-3 ">
                                <div class="col m6 s12">
                                        <div class="box">
                                            <h2>
                                                    &quot; {{$post3->content}}

                                                    &quot;  
                                            </h2>

                                            <p class="copy">
                                                    Odutusin Moses , co-owner of bloodcare club                </p>    
                                              
                                        </div>
                                </div>

                                <div class="col m6 s12 box-si ">
                                      
                                                <img src=" {{$post3->avatar}}" alt="">    
                                       
                                </div>
                        </div>

                            <br><br>


                        <div class="row row-4">
                                <div class="col m4 s12">
                                        <div class="box ">
                                                <div class="img">
                                                        <img src=" {{$post8->avatar}}" alt="">
                                                </div>
                                                <h4 class="">
                                                        {{$post8->title}}       
                                                </h4>
                            
                                                <p class="">
                                                        {{$post8->content}}
                                                </p>
                                                    <br>
                                               
                                        </div>
                                 </div>

                                      <div class="col m4 s12">
                                        <div class="box">

                                            <div class="img">
                                                    <img src=" {{$post9->avatar}}" alt="">
                                            </div>
                                               
                                                <h4 class="">
                                                        {{$post9->title}}    
                                                </h4>
                            
                                                <p class="">
                                                        {{$post9->content}}
                                                </p>
                                                    <br>
                                               
                                        </div>
                                      </div>

                                        <div class="col m4 s12">
                                            <div class="box">
                                                    <div class="img">
                                                            <img src="app/img/16.jpg" alt="">
                                                    </div>
                                                    <h4 class="">
                                                        {{$post10->title}}
                                                    </h4>
                                
                                                    <p class="">
                                                        {{$post10->content}}
                                                    </p>
                                                        <br>
                                                
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

            
                <div class="foot">
                        
                          <div class="section-3">
                                <h1> {{$post11->content}}</h1>
                            
                     
                            
                                
                                <p> {{$post12->title}} <br> <br>   <a class="btn btn-large" href="/donor/register"><b>Sign up</b></a></p>
                                    
                
                               
                                 
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
                        <p>© {{$post12->content}}<b><a href="">Privacy &amp; Terms</a></b> </p>
                 </div>
                
                
                <br>
                </div>
       
                </div>
           
       </section>
  

 
 

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('app/js/materialize.min.js')}}"></script>

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
  
  
      });
    </script>
</body>

</html>