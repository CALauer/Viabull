<?php require '../includes/header.php'; ?>


    
<body>
    <section class="register">
    <div class="register-wrapper">



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
</section>
</body>

<?php require '../includes/footer.php'; ?>