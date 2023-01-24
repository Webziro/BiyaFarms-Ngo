<?php

 function send_mail($email, $messag, $subject):int {
    require_once('mailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "server136.web-hosting.com";
    $mail->Port = 587;
    $mail->AddAddress($email);
    $mail->Username = "email@email.com";
    $mail->Password = "password here";
    $mail->SetFrom('email@email.com', 'Name Here');
    $mail->AddReplyTo("email@email.com", "Name Here");
    $mail->Subject = $subject;
    $mail->MsgHTML($messag);
    if($mail->Send()){ return 1; }else{ return 0; }
}

$email1 = "info.biflp@gmail.com";
$email2 = "info@biflp.ng";
$email_array = array(
    $email1, $email2
);

session_start();
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $sub = $_POST['subject'];
        $msg = $_POST['message'];

        
        if(empty($name) or empty ($email) or empty($pnumber) or ($subject) or empty($message)){
            $_SESSION['message'] = '<div style="color:red; padding: 12px;">All fields are required!</div>';
            header("location: ../contact.php"); 
        }else{
                    
                    $subject = "Contact Form From ".$title;
                    $message = "
                    <html>
                    <body style='background-color:#000033; color:white; padding: 10px; height:100vh'>
                        <h3>Name: </h3>$name<br>
                        <h3>Email: </h3>$email<br>
                        <h3>Phone: </h3>$pnumber <br>
                        <h3>Subject: </h3>$sub<br>
                        <h3>Message: </h3>$msg
                    </body>
                    </html>
                    ";
                
                    foreach($email_array as $email){
                        send_mail($email, $message, $subject);
                        $resp = 1;
                    }
            if($resp==1){
                $_SESSION['message'] = '<div style="color:red; padding: 12px;">Message was succesfully sent!</div>';
                header("location: ../index.php");
            }else{
            $_SESSION['message'] = '<div style="color:red; padding: 12px;">There was an error in processing your, Please try again!</div>';
            header("location:../contact.php");
            }
        }
    }else{
        header("location:../contact.php");
    }
?>