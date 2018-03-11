
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fidelity System - Register</title>

</head>

<body>
<h2>Please register your account</h2>
<h4>The account will be set free by an admin after checking the provided data</h4>
  <div class="container">
          <div class="card cardregister-container">

              <form class="form-register">
                  <div class="register-left">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <input type="text" id="firstname" class="form-control" name="firstname" placeholder="firstname" value="">
                    <input type="text" id="street" class="form-control" name="street" placeholder="street" value="">
                  </div>
                  <div class="register-right">
                    <input type="email" id="verifyinputEmail" class="form-control" placeholder="Verify email address" required>
                    <input type="password" id="verifyinputPassword" class="form-control" placeholder="Verify password" required>
                    <input type="text" id="lastname" class="form-control" name="lastname" placeholder="lastname" value="">
                    <input type="text" id="number" class="form-control" name="number" placeholder="number" value="">
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Register account</button>
                  </div>
                  <!--<div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Remember me
                      </label>
                  </div>-->

              </form>
              <a href="/" class="login-account">
                  Login to account
              </a>
              <!--<a href="#" class="forgot-password">
                  Forgot the password?
              </a>-->
          </div>
      </div>

    </body>
</html>
