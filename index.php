<?php
include_once "header.php";

?>
  <body class="login_body">
    <div class="login-wrapper">
      <section class="form login">
        <header>Login Ofune Omwagalwa! Webale Kudda</header>
        <form action="#">
          <div class="error-text"></div>
          <div class="field input">
            <label for="Email Address">Email Address</label>
            <input type="email" placeholder="Enter your email" name="AbanoonyaMail" />
          </div>
          <div class="field input">
            <label for="Password">Password</label>
            <input type="password" placeholder="Enter Your Password" name="AbanoonyaPassword" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Join Abanoonya" />
          </div>
        </form>
        <div class="link">No Account Yet?<a href="signup.php"> SignUp Now</a></div>
      </section>
    </div>
    <script src="Javascript/password-show-hideveriyf.js"></script>
    <script src="Javascript/login.js"></script>
    <script src="css/Bootstrap/js/bootstrap.js"></script>
   
  </body>
</html>
