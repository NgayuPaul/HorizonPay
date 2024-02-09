<?php 
    $pagetitle = "LOGIN";
    require_once "assets/header.php";
?>

<!-- loginpage as its on the wema page -->

<div class="LoginPage">
      <h1>Welcome Back!</h1>
      <div class='loginpage'>
      <form onSubmit={handleSubmit}>
        <label>
          <p> Email Address/Username</p>
          <input class='bar' type="text">
        </label>
        <label>
          <div class='password'>
          <p>Password</p>
          <p><a href="">Forgot password?</a></p>
          </div>
          <input class='bars' type="password"><br>
          
        </label>
        <input class='submitbutton' type="submit" value="Login" />
        
      </form>
      
      <div class='login footer'>
        <p>New to HORIZONPAY? <a href="registration.php">Sign up</a></p>
        <p>help@HORIZONPAY.NG</p>
        <p>0700025557845</p>
      </div>
      </div>
    </div>