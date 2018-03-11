
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fidelity System - Login</title>

</head>

<body>
  <h2>Please login to your account</h2>
  <div class="container">
          <div class="card card-container">

              <form class="form-signin">
                  <span id="reauth-email" class="reauth-email"></span>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <!--<div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Remember me
                      </label>
                  </div>-->
                  <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
              </form>
              <a href="/index.php/register" class="register-account">
                  Register account
              </a>
              <!--<a href="#" class="forgot-password">
                  Forgot the password?
              </a>-->
          </div>
      </div>

    </body>
</html>
