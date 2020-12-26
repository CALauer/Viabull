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
        $sql = "SELECT * FROM registered where id = '".$_SESSION['id']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

    include 'memberHeader-test.php';
          }
        }
      }

    else {
      include 'nonMemberHeader.php';
       } 
       ?>

    <!-- <li class="nav-li"><a href="profile.php?id='.$row["id"].'"><span class="blue">'. $row["username"] .'</span></a>| -->