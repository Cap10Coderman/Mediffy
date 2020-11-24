<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">

       <script src="{{ url('js/visibility.js') }}"></script>
    </head>

    <!-- ////////////////////////////////////////////////////////////// -->


    <body >

    
      <div class="split left">
         <div class="centered1">
                   <h1>
                       Mediffy 
                  </h1>
                  
                <button class="button button1" style="vertical-align:middle" onclick="docformvisibility()"><span>DOCTOR LOGIN</span></button>
                  
                  <button class="button button2" style="vertical-align:middle" onclick="patformvisibility()"><span>PATIENT LOGIN</span></button>
               
                  <button class="button button3" style="vertical-align:middle"><span>PHARMACY LOGIN</span></button>
                               
          </div>
      </div>     

      <div class="split right">
         <div class="centered2">
                     
            <div class="login-box" id="doc">
               <h2> Doctor Login</h2>
               <form action="" id="docform">
                  <div class="user-box">
                     <input type="text" name="" required="">
                     <label>Doctor Id</label>
                  </div>
                  <div class="user-box">
                     <input type="password" name="" required="">
                     <label>Password</label>
                  </div>
                  <a href="">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     LOGIN
                  </a>
               </form>
            </div>

            <!--PATINT FORM--->

            <div class="login-box" id="pat">
               <h2> Patient Login</h2>
               <form action="" id="patform">
                  <div class="user-box">
                     <input type="text" name="" required="">
                     <label>Patient Id</label>
                  </div>
                  <div class="user-box">
                     <input type="password" name="" required="">
                     <label>Password</label>
                  </div>
                  <a href="">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     LOGIN
                  </a>
               </form>
            </div>
                     
          </div>
      </div>
                     
        
    

    </body>
</html>
