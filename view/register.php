<?php
include '../includes/config.php'; 
require '../includes/header.php'; 
// Check if user is already registered and redirect them to home page

?>

<body>
    <section class="register">
    <div class="register-wrapper">
    <div>
    <form action="../includes/register_inc.php" method="post" class="register-form">
    <img src="../images/viabull-lndg.svg" alt="viabull-logo" class="form-logo">
    <?php 

        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyFields") {
                echo '<p class="helper">Please fill in all fields</p>';
            }
            else if ($_GET['error'] == "invalidUsername&Email"){
                echo '<p class="helper">You have entered an invalid email or username</p>';
            }
            else if ($_GET['error'] == "invalidEmail"){
                echo '<p class="helper">You have entered an invalid email</p>';
            }
            else if ($_GET['error'] == "invalidUsername"){
                echo '<p class="helper">You have entered an invalid username</p>';
            }
            else if ($_GET['error'] == "passwordCheck"){
                echo '<p class="helper">Passwords do not match</p>';
            }
            else if ($_GET['error'] == "EmailTakenOrUsername"){
                echo '<p class="helper">An account is already registered 
                with that username or email</p>';
            }
        else if ($_GET['error'] == "RegistrationSuccess"){
            echo '<p class="helper_suc">You have successfully registered. You can now log in.</p>';
        }
    }
        ?>
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password-verify" placeholder="Verify Password">
            <button type="submit" name="Register" class="register-submit-btn">Register</button>
            <p class="form-questions-p">Already a member? <a href="login.php" class="form-questions-a">Login</a></p>
        </form>
    </div>
    <div><h1>Current Member Benefits</h1>
    <ul>
    <li>Dynamic Profile Page</li>
    <li>Ability to log out</li>
    </ul>
    <h1>Future Member Benefits</h1>
    <ul>
    <li>Dynamically Update Profile</li>
    <li>Profile Customization</li>
    <li>View Other Member Profiles</li>
    <li>Forum Access</li>
    <li>Real Time Stock Prices</li>
    <li>Watchlist</li>
    <li>Viabull Trading Game</li>
    </ul>
    </div>
    </div>
</section>
</body>

<?php require '../includes/footer.php'; ?>