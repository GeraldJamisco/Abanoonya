<?php
include_once "header.php";

?>
  <body class="login_body">
    <div class="login-wrapper">
      <section class="form signup">
        <header>Signup Ofune Omwagalwa</header>
        <!-- log in using google or facebook or apple  customized butons buttons -->

        <header class="social-logins-google-facebook">
          Here to use the facebook and google Apis to loginto and sign into the app
        </header>


        <form action="#" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field input">
              <label for="First Name">First Name</label>
              <input type="text" placeholder="First Name" name="AbanoonyaFname" required/>
            </div>
            <div class="field input">
              <label for="Last Name">Last Name</label>
              <input type="text" placeholder="Last Name" name="AbanoonyaLname" required/>
            </div>
          </div>
          <div class="field input">
            <label for="Email Address">Email Address</label>
            <input type="email" placeholder="Enter your email" name="AbanoonyaMail" required/>
          </div>
          <!-- for date of birth and gender -->
          <div class="name-details">
            <div class="field input">
            <label for="Email Address">Your Date of Birth</label>
            <input type="date" name="AbanoonyaDob" required/>  
          </div>
            <div class="field select">
              <label for="Gender">Gender</label>
              <select name="AbanoonyaGender" required="required">
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>            
          </div>          
          <div class="field input">
            <label for="Password">Password</label>
            <input type="password" placeholder="Create New Password" name="AbanoonyaPassword" required/>
            <i class="fas fa-eye"></i>
          </div>
          <!-- <div class="field input">
            <label for="Password2">Re-enter New Password</label>
            <input
              type="password"
              placeholder="Create Re-enter Your new Password"
              class="Password2" required
            />
            <i class="fas fa-eye"></i>
          </div> -->
          <div class="field image">
            <label for="Select Image">Select Image</label>
            <input type="file"  name="AbanoonyaImage" required/>
          </div>
          <div class="field button">
            <input type="submit" value="Join Abanoonya"/>
          </div>
        </form>
        <div class="link">Already Signed Up? <a href="index.php">Login Now</a></div>
      </section>
    </div>
    <script src="Javascript/password-show-hideveriyf.js"></script>
    <script src="javascript/signup.js"></script>
    <script src="css/Bootstrap/js/bootstrap.js"></script>
  </body>
</html>
