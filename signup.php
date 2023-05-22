<?php
session_start();
?>
<!------
   _       _    _   _____     _    _____   _       _______  __   __
  | |     | |  | | |  __ \   (_)  |  ___| | |     |  _____| \ \_/ /
  | |     | |  | | | |  \ \   _   | |__   | |     | |___     \   /
  | |___  | |__| | | |___| | | |  |  __|  | |___  |  ___|    / _ \
  |_____| |______| |_______| |_|  |_|     |_____| |_______| /_/ \_\

 
          Ludiflex - www.youtube.com/@ludiflex - www.ludiflex.ga
       
------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Boostrap Login | Ludiflex</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="images/1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hello</h2>
                     <p>You can sign up here.</p>
                </div>
                <form action="/includes/signup.inc.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="uid" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pwd" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" name="pwdrepeat" class="form-control form-control-lg bg-light fs-6" placeholder="Password repeat">
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button>
                    </div>
                </form>
                <div class="row">
                    <small>Don't have account? <a href="login.php">Login</a></small>
                </div>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>