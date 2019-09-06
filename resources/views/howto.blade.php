<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href=" {{asset('app/css/materialize.min.css')}} " media="screen,projection" />
  <link rel="stylesheet" href="{{asset('app/css/style.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{asset('app/css/flaticon.css')}} ">
  
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
                 
        
                  <!-- DROPDOWN TRIGGER -->
                  <li>
                  <a  href="{{route('donation-donation')}}">  Donation process
               
                    </a>
                  </li>
        
        
                     <li>
                     <a href="{{route('donation-about')}}"> About Us</a>
                      </li>
                        <a class="btn white red-text waves-effect waves-red login" href="/donor/login"> Log in</a>
                      </li>
            
                      <li>
                            <a class="btn red white-text waves-effect waves-light signup" href="/donor/register">Sign Up</a> 
                        </li>
                      <!-- ICON LINK -->
                     
                  
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

 


  <div class=" landing1">
      
        <div class="row">

                <div class="container">
                        <div class="col xl12 l12 m12 s12  left ">
                              
                                        <h1>
                                              {{$donation1->title}}
                                            </h1>
                                          
                                </div>
        
                               
                               
                            </div>
                
                           
                </div>
                   
              </div>
      
           
  </div>


  <section>
        <div class="row">

                <div class="container">
                        <div class="col xl12 l12 m12 s12  landing2 ">
                              
                                        <h3>
                                            {{$donation1->content}}
                                        </h3>
                                          
                                </div>
        
                               
                               
                            </div>
                
                           
                </div>
                   
     </div>
  </section>

  
       <section class="section section-main">
            <div class="container">
                    <div class="row row-1">
                        <div class="col xl6 l6 m6 s12 ">
                                <img src="app/img/15.jpg" alt="">
                        </div>
                            
                        <div class="col xl6 l6 m6 s12">
                                <h2> {{$donation2->title}}</h2>
                               <ul>
                                   <li>
                                       <p>We&#039;ll sign you in after the first online registration and go over basic eligibility.</p>
                                   </li>

                                   <li>
                                        <p>You&#039;ll be asked to show ID, such as your driver’s license</p>
                                    </li>

                                      <li>
                                        <p>You&#039;ll be asked if you want to be a public or private donor </p>
                                    </li>


                                    <li>
                                            <p>You&#039;ll read some information about donating blood</p>
                                        </li>

                                        <li>
                                            <p>
                                                    We&#039;ll ask you for your complete address.  Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation.
                                            </p>

                                        </li>
                               </ul>
                        </div>
                               
                      

                    </div>
                    <br><br>
                       

                      
                        <br><br><br>
                        <div class="row row-3 ">
                                <div class="col m6 s12">
                                        <div class="box">
                                                <h2> {{$donation3->title}}</h2>
                                                <ul>
                                                    <li>
                                                        <p>You&#039;ll answer a few questions about your health history and places you’ve traveled, during a private and confidential interview</p>
                                                    </li>
                 
                                                    <li>
                                                         <p>You&#039;ll tell us about any prescription and/or over the counter medications that may be in your system.</p>
                                                     </li>
                 
                                                    
                 
                                                         <li>
                                                             <p>
                                                                     We&#039;ll check your temperature, pulse, blood pressure and hemoglobin level. .
                                                             </p>
                 
                                                         </li>
                                                </ul>
                                              
                                        </div>
                                </div>

                                <div class="col m6 s12 box-si ">
                                        <div class="box-size ">
                                                <img src=" {{$donation3->avatar}}" alt="">    
                                        </div>
                                </div>
                        </div>

                            <br><br>


                        

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
                            
                     
                            
                                
                                <p>{{$post12->title}} <br><br><a class="btn btn-large" href="/donor/register"><b>Sign up</b></a></p>
                                    
                
                               
                                    
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