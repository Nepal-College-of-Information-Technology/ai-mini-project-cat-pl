<?php

session_start();



if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    include_once 'Database/connection.php';

    if ($password == $confirmpass) {
        $conn = new Connection();
        $connection = $conn->signup($fullname, $email, $password);
    } else {
        echo "Password does not match";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cat.pl</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/loginstyle.css" />
  </head>
  <body>
    <!-- start of nav bar -->
    <div class="navbar">
      <a href="#"> Cat.pl </a>
    </div>
    <!-- end of nav bar -->

    <div class="box">
      <div class="inside-box">
        <div class="toggle-buttons">
          <button class="toggle-button signupbutton">Signup</button>
          <button class="toggle-button loginbutton">Login</button>
          <button class="toggleMove">Signup</button>
        </div>

        <!-- SIGNUP PAGE -->
        <div class="signup-form">
          <form action="#" class="form signupp signupform" method="post">
            <div class="input">
              <input
                type="text"
                name="fullname"
                id="full-name"
                placeholder="Full Name"
                autocomplete="off"
                required
              /><span
                id="name-error-area"
                style="color: red; font-size: medium"
              ></span>
            </div>
            <div class="input">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                required
              /><span
                id="email-error-area"
                style="color: red; font-size: medium"
              ></span>
            </div>

            <div class="input">
              <input
                type="password"
                name="password"
                id="password"
                placeholder="New password"
                autocomplete="off"
                required
              /><span
                id="password-error-area"
                style="color: red; font-size: medium"
              ></span>
            </div>
            <div class="input">
              <input
                type="password"
                name="confirmpass"
                id="confirm-pass"
                placeholder="Confirm password"
                autocomplete="off"
                required
              /><span
                id="confirm_password-error-area"
                style="color: red; font-size: medium"
              ></span>
            </div>

            <div class="submit-button-wrap">
              <button class="submit-button" type="submit" name="signup">
                Signup
              </button>
            </div>
          </form>

          <!-- SIGNIN PAGE -->

          <form action="" class="form loginn">
            <div class="input">
              <input
                type="email"
                name="email"
                id="login-email"
                placeholder="Email"
                autocomplete="off"
                required
              />
            </div>
            <div class="input">
              <input
                type="password"
                name="password"
                id="login-password"
                placeholder="Password"
                autocomplete="off"
                required
              />
            </div>
            <div class="submit-button-wrap">
              <button class="submit-button" type="submit" name="login">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const signupbutton = document.querySelector(".signupbutton");
      const loginbutton = document.querySelector(".loginbutton");
      const toggleMove = document.querySelector(".toggleMove");
      const signupp = document.querySelector(".signupp");
      const loginn = document.querySelector(".loginn");

      loginbutton.addEventListener("click", () => {
        toggleMove.classList.add("toggleMoveRight");
        loginn.classList.add("loginform");
        signupp.classList.remove("signupform");
        toggleMove.innerHTML = "Login";
      });

      signupbutton.addEventListener("click", () => {
        toggleMove.classList.remove("toggleMoveRight");
        loginn.classList.remove("loginform");
        signupp.classList.add("signupform");
        toggleMove.innerHTML = "Signup";
      });

      function chooseportal(event) {
        document.getElementById("login-block-wrapper").style.display = "flex";
      }
      function exitlogin(evt) {
        document.getElementById("login-block-wrapper").style.display = "none";
      }
    </script>
  </body>
</html>
