<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>
    <section class="login">
        <div class="login-wrapper">
            <form action="../includes/login_inc.php" class="login-form" method="post">
            <img src="../images/viabull-lndg.svg" alt="viabull-logo" class="form-logo">
            <?php 
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "RegistrationSuccess"){
                    echo '<p class="helper_suc">You have successfully registered. You can now log in.</p>';                    
                }
                else if ($_GET['error'] == "EmptyFields"){
                    echo '<p class="helper">Please fill in all fields</p>';
                }
                else if ($_GET['error'] == "wrongPassword="){
                    echo '<p class="helper">You have entered a wrong password, please re-enter your password.
                    </p>';
                }
                else if ($_GET['error'] == "noRegisteredUsers"){
                    echo '<p class="helper">No users are registered with that email or username.
                    </p>';
                }
            else if ($_GET['error'] == "RegistrationSuccess"){
                echo '<p class="helper_suc">You have successfully registered. You can now log in.</p>';
            }
            }
            ?>
                <input type="text" placeholder="Email or Username" name="emailUsername">
                <input type="password"  placeholder="Password" name="password">
                <input type="submit" class="login-submit-btn" name="Login">
                <p><br />
                    <a href="javascript:void(0)" class="form-questions-a" >Forgot Password?</a>  <a href="../view/register.php" class="form-questions-a">Nead an account?</a> 
                </p>
            </form>
        </div>
        <div class="login-bottom">
           <ul>
            <li class="nav-li">Test</li>
            <li class="nav-li">Test</li>
            <li class="nav-li">Test</li>
            <li class="nav-li">Test</li>
            <li class="nav-li">Test</li>
        </ul>
        <p>©2020 LAUER WEB DESIGN. ALL RIGHTS RESERVED.</p>
        </div>
    </section>

  </body>

  <!-- Include the jQuery library -->
  <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"
  ></script>

  <!-- Include the jQuery Mobile library -->

  <script
    type="text/javascript"
    src="../scripts/script.js"></script>
</html>
