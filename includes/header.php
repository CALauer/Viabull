<?php 
session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../portfolio_images-assets/cl_logo_big.png" type="image/x-icon" />
    <title>Demo Site</title>
</head>

<body>
    <?php 

    if (isset($_SESSION['id'])) {
        $sql = "SELECT * FROM users where id = '".$_SESSION['id']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo '
            <div id="header">
            <div>
            <ul> 
            <li><img src="../../portfolio_images-assets/cl_logo.png" alt="" class="" />
            <li><a href="../view/index.php">About</a></li>
            <li><a href="../view/records.php">Members</a></li>
            <li class="right"><a href="../../chrislauer.net/view/index.html">Chrislauer.net</a></li>
            </ul>
            </div>
            <div>
            <ul>
            <li class="right"><a href="profile.php?id='.$row["id"].'"><span class="blue">'. $row["username"] .'</span></a>|
            </li> <li><a href="../includes/logout.php">Logout</a></li></ul></div></div>';
            }
        }
    }

    
        else {
            echo '
            <div id="header">
            <div>
            <ul> 
            <li><img src="../../portfolio_images-assets/cl_logo.png" alt="" class="" />
            <li><a href="../view/index.php">About</a></li>
            <li><a href="../view/records.php">Members</a></li>
            <li class="right"><a href="../../chrislauer.net/view/index.html">Chrislauer.net</a></li>
            </ul>
            </div>
            <div>
            <ul>
            <li class="right"><a href="register.php">Register</a>|
            </li> <li><a href="../view/login.php">Login</a></li></ul></div>
            </div>';
        }
    
    ?>



    </div>

    </div>