<?php
    include '../includes/config.php'; 
    session_start();

    $stockID = $_POST['stockID'];
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM userstocks WHERE userId = '$id' AND stockId ='$stockID'";
        $stmt = mysqli_stmt_init($conn);
        $result = $conn->query($sql); 
        if($result->num_rows > 0) {
            echo 'This stock has already been added to your stocklist.';
            exit();
        } $sql = "SELECT * FROM userstocks WHERE userId = '$id'";
            $stmt = mysqli_stmt_init($conn);
            $result = $conn->query($sql); 
         if ($result->num_rows > 4 ){
            
            echo 'You can currrently only have 5 stocks added to your watchlist.';
            exit();
        } else {
            $sql = "INSERT INTO userstocks (stockId, userId) values ('$stockID', '$id')";
            $stmt = mysqli_stmt_init($conn);
            $result = $conn->query($sql);
            echo ''.$stockID. ' has been added to your Watchlist.';
        }
    }
    else {
        echo 'You must be logged in to add stocks.';
    }
?>