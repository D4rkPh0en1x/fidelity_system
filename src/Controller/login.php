<?php
$email = $password = "";
$email_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty(trim($_POST["email"]))){
      $email_err = 'Please enter your email address';
  } else{
      $email = trim($_POST["email"]);
  }
  if(empty(trim($_POST['password']))){
      $password_err = 'Please enter your password';
  } else{
      $password = trim($_POST['password']);
  }
  if(empty($email_err) && empty($password_err)){
    $pdo = Service\DBConnector::getConnection();
    $sql = "SELECT email, password FROM user WHERE email = :email";
    if($stmt = $pdo->prepare($sql)){
      $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
      $param_email = trim($_POST["email"]);
      if($stmt->execute()){
        if($stmt->rowCount() == 1){
          if($row = $stmt->fetch()){
            $db_password = $row['password'];
            if($password === $db_password){
              session_start();
              $_SESSION['email'] = $email;
              header("location: /index.php/account");
            } else{
              $password_err = 'The password you entered was not valid.';
            }
          }
        } else{
          $email_err = 'No account found with that email.';
        }
      } else{
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
  }
}
?>
<h2>Please login to your account</h2>
<div class="container">
  <div class="card card-container">
      <form class="form-signin">
          <span id="reauth-email" class="reauth-email"></span>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
      </form>
      <a href="/index.php/register" class="register-account">
          Register account
      </a>
  </div>
</div>
