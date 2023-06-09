<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  </head>
  <body>
    <div class="form_container">
      <div class="left">
        <div class="login_container">
          <h1>Welcome back</h1>
          <span class="subtitle">Welcome back! Please enter your details</span>
          <button class="google_btn">
            <img src="images/google.png" alt="" />Log in with Google
          </button>

          <div class="line">
            <span></span>
            <small>or</small>
            <span></span>
          </div>

          <form action="">
            <input type="email" placeholder="Email" required/>
            <input type="password" placeholder="password"  required/>


            <div class="actions">
              <div class="wrapper">
                <input type="checkbox" id="remember" />
                <label for="remember">Remember me</label>

              </div>
              <a href="#">Forget Password</a>
            </div>

            <button type="submit" class="login_btn">Log in</button>
          </form>

          <p class="signup_info">
            Dont have an account? <a href="signUp.php">Sign up for free</a>
          </p>
        </div>
      </div>
        <div class="right">
          <div class="info">
             <p>
              Welcome to our bootcamp! We are excited to have you join us on this journey of learning and growth.
             </p>
             <h2>BOOTCAMP</h2>
             <div class="arrows">
              <img src="images/back.svg" alt="" />
              <img src="images/next.svg" alt="" />
             </div>
          </div>
        </div>
      </div>
      <script src="script.js"></script>
  </body>

</html>
