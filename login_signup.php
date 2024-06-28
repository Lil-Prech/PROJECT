<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <link href="CSS/login_signup.css" rel="stylesheet">
      <title>Login and Signup Form</title>
      
      
    </head>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form action="">
                    <h1> Create Account </h1>
                    <div class="social-icon">
                        <a href="#" class="icon"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#" class="icon"><ion-icon name="logo-instagram"></ion-icon></a> 
                        <a href="#" class="icon"><ion-icon name="logo-github"></ion-icon></a> 
                    </div> 
                    <span>Use your email for registration</span> 
                    <input type="text" placeholder="Name"> 
                    <input type="email" placeholder="Email"> 
                    <input type="number" placeholder="Phone-number">  
                    <input type="password" placeholder="Create Password">
                    <input type="password" placeholder="Confirm Password">
                    

                    <button>Signup</button>                   
                </form>   
            </div>

            <div class="form-container sign-in">
                <form action="">
                    <h1>Login</h1>
                    <div class="social-icon">
                        <a href="#" class="icon"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#" class="icon"><ion-icon name="logo-instagram"></ion-icon></a> 
                        <a href="#" class="icon"><ion-icon name="logo-github"></ion-icon></a> 
                    </div> 
                    <span>Or use Email password</span> 
                    <input type="text" placeholder="Username"> 
                    <input type="email" placeholder="Email">  
                    <input type="password" placeholder="password">
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>                   
                </form>   
            </div>
            <div class="toggle-container">
               <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features </p>
                    <button class="hidden" id="login">  Sign IN</button> 
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello,Friend!</h1>
                    <p>Register with your personal details to use all site features  </p>
                    <button class="hidden" id="register"> Sign Up</button> 
                </div>
               </div> 
            </div>
        </div>
    



    <script src="JS/login.js"></script>  
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
