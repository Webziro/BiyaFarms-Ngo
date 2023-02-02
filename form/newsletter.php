<?php
  session_start();
include "conn.php";
if(isset($_POST['semail'])){
    $email = mysqli_real_escape_string($conn, $_POST['semail']);
    if(empty($email)){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Please fill in all fields!</div>";
        header("location: ../index.php");
        print_r($_POST['semail']); die;
    }else{

        $email_exit = mysqli_query($conn, "SELECT * FROM fiblform WHERE s_email = '$email'") or die(mysqli_error($conn));
        if (mysqli_num_rows($email_exit)>0) {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Your email has already been added!</div>";
            header("location: ../index.php");
        } else {
            if(!filter_var($_POST['semail'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['msg'] = "<div class='alert alert-danger'>Your email is not correct!</div>";
                header("location: ../index.php");
            }else{
                $query = mysqli_query($conn, "INSERT INTO fiblform (s_email) VALUES ('$email')");
                if($query){
                    $_SESSION['msg'] = "<div class='alert alert-danger'>Your email has succesfully been added, Thank you!</div>";
                    header("location: ../donate.php");
                }else{
                    $_SESSION['msg'] = "<div class='alert alert-danger'>Error Subscribing!</div>";
                    header("location: ../index.php");
                }
            }
        }
        
        
    }
} else{
    echo "0";
}
?>