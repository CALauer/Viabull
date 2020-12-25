<?php 
    include 'config.php';
    $id = $_GET['id'];

    $phone = $_POST['phone'];
if(isset($_POST['updatePhone'])) {
    



    if (empty($phone)) { 
        header('Location: ../view/profile.php?error=emptyFields&id='.$id.'');
        exit();
    }
    else {
        $sql = "SELECT phone FROM registered WHERE id='$id'";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header('Location: ../view/profile.php?error=sqlError&id='.$id.'');
            exit();
        }
        else if (strlen($phone) > 10 || strlen($phone) <  7) {
            header('Location: ../view/profile.php?error=numberFormat&id='.$id.'');
            exit(); }
        else {
            if(strlen($phone) == 10) {
                $areaCode = substr($phone, 0, 3);
                $nextThree = substr($phone, 3, 3);
                $lastFour = substr($phone, 6, 4);      
                $phone = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
            } else if (strlen($phone) == 7) {
                    $nextThree = substr($phone, 0, 3);
                    $lastFour = substr($phone, 3, 4);
                    $phone = $nextThree.'-'.$lastFour;
            }
            $resultCheck = mysqli_stmt_num_rows($stmt);
                $sql = "UPDATE registered SET phone='$phone' WHERE id ='$id'";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header('Location: ../view/profile.php?id='.$id.'&error=SQLERROR');
                    exit(); 
        }
        else {         
            mysqli_stmt_execute($stmt);
            header('Location: ../view/profile.php?id='.$id.'&success="updatePhoneSuccessful');
            exit();
                }       
            }   
        }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);
}
else {
    header('Location: ../view/profile.php?id='.$id.'');
                    exit(); 
}