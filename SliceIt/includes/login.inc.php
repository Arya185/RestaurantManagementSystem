<?php

session_start();

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $email = $_POST['mailuid'];
    $password = $_POST['pwd'];

  if (empty($email) || empty($password)) {
   header("Location: ../index.php?error1=emptyfields");
   exit();
  } else {
    
        $sql = "SELECT * FROM users WHERE email=?";     
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error1=error");
            
        exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
               
               if($password != $row['password']){
                    header("Location: ../index.php?error1=wrongpwd");
                    exit();   
                }
                else  {   
                                     
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['email'] = $row['email'];   
                    $_SESSION['role'] = 2; 
                    header("Location: http://localhost:8081/SliceIt/reservation.php"); 
                  
                    exit();
                }

            }
            else{
                header("Location: ../index.php?error1=nouser");
                exit();
            }
        }
    }
    
}
else{
    header("Location: ../index.php");
    exit();
}