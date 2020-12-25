<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 

    $id = $_GET['id'];
    if ($id <= 0) {
        $URL="../view/index.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    $sql = "SELECT * FROM registered where id = $id";
    $result = $conn->query($sql);
        if (isset($_SESSION['id'])) { //General view
            if ($_SESSION['id'] == $id ) { 
                if ($result->num_rows > 0)  { //profile view
                    while($row = $result->fetch_assoc()) {

                        include '../includes/personalProfile.php'; 
                    }
                }
            }
            include '../includes/generalProfileView.php';
        } else {
            include '../includes/generalProfileView.php';
    } 




       





    require "../includes/footer.php";
    ?>