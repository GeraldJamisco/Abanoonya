<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abanoonya</title>
    <!-- css -->
    <link rel="stylesheet" href="css/Style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/fontawesome/css/all.css" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  </head>
  <body class="login_body">
    <div class="login-wrapper">
      <section class="form signup">
        <header>Signup Ofune Omwagalwa</header>
        <form action="#">
          <div class="error-text">This is an error message!</div>
          <div class="name-details">
            <div class="field input">
              <label for="First Name">First Name</label>
              <input type="text" placeholder="First Name" />
            </div>
            <div class="field input">
              <label for="Last Name">Last Name</label>
              <input type="text" placeholder="Last Name" />
            </div>
          </div>
          <div class="field input">
            <label for="Email Address">Email Address</label>
            <input type="email" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label for="Password">Password</label>
            <input type="password" placeholder="Create New Password" />
            <i class="fas fa-eye"></i>
          </div>
          <!-- <div class="field input">
            <label for="Password2">Re-enter New Password</label>
            <input
              type="password"
              placeholder="Create Re-enter Your new Password"
              class="Password2"
            />
            <i class="fas fa-eye"></i>
          </div> -->
          <div class="field image">
            <label for="Select Image">Select Image</label>
            <input type="file" />
          </div>
          <div class="field button">
            <input type="submit" value="Join Abanoonya" />
          </div>
        </form>
        <div class="link">Already Signed Up? <a href="#">Login Now</a></div>
      </section>
    </div>
    <script src="Javascript/password-show-hideveriyf.js"></script>
    <script src="css/Bootstrap/js/bootstrap.js"></script>
  </body>
</html>