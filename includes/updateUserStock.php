<?php
    include '../includes/config.php'; 
    session_start();
    $stockID = $_POST['stockID'];

    if (isset($_SESSION['id'])) {

        echo ''.$stockID.' stock has been added your Watchlist.';

    }
    
    // if ($stockID != null) {
        
        
    // }
    else {
        echo 'You need to login to add stocks.';
    }

    // echo ''.$stockID.'';

?>