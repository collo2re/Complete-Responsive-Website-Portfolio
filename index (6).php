<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stinko.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <section>
    <div class="wrapper">
      <span class="bg-animate"></span>
      <span class="bg-animate2"></span>
       
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form action="#">
                <div class="input-box animation" style="-i:1; --j:22;">
            <input type="text" required>
                        <label id="username">Username</label>
                        <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" required>
                        <label id="password">Password</label>
                        <i class='bx bxs-lock' ></i>
                </div>
              <button class="btn animation"  style="--i:3; --j:24;">
                Login
              </button>  
              <div class="logreg-link animation"  style="--i:4; --j:25;"><p>
                Don't have an account? <a href="#" class="register-link"> Sign Up!</a></p>
              </div>                       
            </form>
            <script>
              function func(){
                var email = document.getElementsById("username").value;
                var pass = document.getElementById("password").value;
                if email == 'ochiengc026@gmail.com' && pass == '0701488299'{
                  alert ("success full!")
                  window.location.assign ("index.html")
                }
                else {
                  alert ("Wrong entry invalid!")
                }
              }
            </script>
        </div>
        <div class="info-text login">
          <h2 class="animation" style="--i:0; --j:20;">White Family!</h2>
          <p class="animation" style="--i:1; --j:21">We deal with Back End and Front End Website Development, Graphic Designs, Online Marketing and Online Cyber Services, e.t.c.    </div>

        <div class="form-box register">
          <h2 class="animation" style="--i:17; --j:0;">Sign Up!</h2>
          <form action="#">
              <div class="input-box animation" style="--i:18; --j:1">
          <input type="text" required>
                      <label>Username</label>
                      <i class='bx bxs-user'></i>
              </div>
              <div class="input-box animation" style="--i:19; --j:2">
                 <input type="text" required>
                    <label>Email  </label>
                    <i class='bx bxs-envelop'></i>
            </div>
              <div class="input-box animation" style="--i:20; --j:3">
                    <input type="password" required>
                      <label>Password</label>
                      <i class='bx bxs-lock' ></i>
              </div>
            <button class="btn animation" style="--i:21; --j:4">
              Sign Up
            </button>  
            <div class="logreg-link animation" style="--i:22; --j:5"><p>Already have an account? <a href="#"class="login-link"> Login </a></p>
            </div>                       
          </form>
      </div>
      <div class="info-text register">
        <h2 class="animation" style="--i:17; --j:0;">White Family!</h2>
        <p class="animation" style="--i:18; --j:1">We deal with Back End and Front End Website
         Development, Graphic Designs, Online Marketing and Online Cyber 
         Services e.t.c. </p>
         </div>
       </div>


    <script src="script.js"></script>
  </section>
</body>
</html>