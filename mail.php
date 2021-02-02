<?php 
    session_start();
    require_once('connection.php');
    if(isset($_POST['attendMail'])){    
        $to_email = 'poojam2022@srishakthi.ac.in';
        $subject = 'Attendance check';
        $message = 'to check the attendance of the student';
        $headers = "From: pooja17122@gmail.com";
        // mail($to_email,$subject,$message,$headers);
        if(mail($to_email,$subject,$message,$headers)){
            echo '<script> alert("yyyy");window.location.href="studview.php";</script>';
        }
        else{
            echo '<script> alert("nnnnn");
            // window.location.href="mail.php";
            </script>';
        }
        
    }
?>