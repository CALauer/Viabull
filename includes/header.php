<?php 
session_start();
?>

<!DOCTYPE lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viabull | Invest</title>
    <link
      rel="stylesheet"
      href="../style/style.css"
    />
    <link rel="shortcut icon" href="../images/viabull-bg.jpg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"></head>
   
    <?php 
    if (isset($_SESSION['id'])) {
        $sql = "SELECT * FROM users where id = '".$_SESSION['id']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo '<nav>
            <div class="nav-wrapper">
              <div>
                  <ul class="nav-ul">
                      <li class="nav-li">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.4 47.5" class="icon-logo" id="go-home"><g id="a6849f81-f728-4c40-8dc6-b17568495b44" data-name="Layer 2">
                              <g id="efc751b0-10c3-4f4a-ba7a-27bf338c9014" data-name="Layer 2">
                                  <path d="M44.8,14,35.9,33.6l-2.7,6.1-2.7-6.1L21.7,14A23.4,23.4,0,0,1,0,0,23.9,23.9,0,0,0,1.6,8.7a24,24,0,0,0,13,12.6l4.9,9.4,7.7,16.8H39.3l7.6-16.8,4.9-9.4a24,24,0,0,0,13-12.6A22,22,0,0,0,66.4,0,23.3,23.3,0,0,1,44.8,14" />
                              </g></g>
                          </svg>
                      </li>
                      <li class="nav-li"><a href="../view/updates.php" class="nav-links">News</a></li>
                      <li class="nav-li"><a href="stocks.php" class="nav-links">Stocks</a></li>
                      <li class="nav-li"><a href="javascript:void(0)" class="nav-links">Download</a></li>
                      <li class="nav-li"><a href="../../../view/index.html" class="nav-links">Back to portfolio</a></li>
                  </ul>
                </div>
                <div>
                    <ul>
                      <li class="nav-li"><a href="javascript:void(0)" class="nav-links-2">Support</a></li>
                      <li class="nav-li"><a href="javascript:void(0)" class="nav-links-2" id="test">My Account</a></li>
                  </ul>
                </div>
            </div>
        </nav>
        <div class="login-drop-down" id="login-drop-down">
    <a href="../view/login.php" class="login-nav-btn">Log In</a>
   <ul class="myaccount-ul">
    <li class="myaccount-li"><a href="" class="myaccount-links"> Account Settings</a></li>
    <li class="myaccount-li"><a href="" class="myaccount-links"> Create a free account</a></li>
    <li>
</ul>
</div>';}
    }
}
    else {
        echo '<nav>
        <div class="nav-wrapper">
          <div>
              <ul class="nav-ul">
                  <li class="nav-li">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.4 47.5" class="icon-logo" id="go-home"><g id="a6849f81-f728-4c40-8dc6-b17568495b44" data-name="Layer 2">
                          <g id="efc751b0-10c3-4f4a-ba7a-27bf338c9014" data-name="Layer 2">
                              <path d="M44.8,14,35.9,33.6l-2.7,6.1-2.7-6.1L21.7,14A23.4,23.4,0,0,1,0,0,23.9,23.9,0,0,0,1.6,8.7a24,24,0,0,0,13,12.6l4.9,9.4,7.7,16.8H39.3l7.6-16.8,4.9-9.4a24,24,0,0,0,13-12.6A22,22,0,0,0,66.4,0,23.3,23.3,0,0,1,44.8,14" />
                          </g></g>
                      </svg>
                  </li>
                  <li class="nav-li"><a href="../view/updates.php" class="nav-links">News</a></li>
                  <li class="nav-li"><a href="stocks.php" class="nav-links">Stocks</a></li>
                  <li class="nav-li"><a href="javascript:void(0)" class="nav-links">Download</a></li>
                  <li class="nav-li"><a href="../../../view/index.html" class="nav-links">Back to portfolio</a></li>
              </ul>
            </div>
            <div>
                <ul>
                  <li class="nav-li"><a href="javascript:void(0)" class="nav-links-2">Support</a></li>
                  <li class="nav-li"><a href="javascript:void(0)" class="nav-links-2" id="test">My Account</a></li>
              </ul>
            </div>
        </div>
    </nav>
    <div class="login-drop-down" id="login-drop-down">
<a href="../view/login.php" class="login-nav-btn">Log In</a>
<ul class="myaccount-ul">
<li class="myaccount-li"><a href="" class="myaccount-links"> Account Settings</a></li>
<li class="myaccount-li"><a href="" class="myaccount-links"> Create a free account</a></li>
<li>
</ul>
</div>';} ?>

    <!-- <li class="nav-li"><a href="profile.php?id='.$row["id"].'"><span class="blue">'. $row["username"] .'</span></a>| -->