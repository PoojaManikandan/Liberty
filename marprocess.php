<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['mark-save'])){
        $regno=$_POST['regno'];
        $s1=$_POST['s1'];
        $s2=$_POST['s2'];
        $s3=$_POST['s3'];
        $s4=$_POST['s4'];
        $s5=$_POST['s5'];
        
        if($regno===null || $s1===null || $s2===null || $s3===null || $s4===null || $s5===null){
            echo '<script> alert("Enter all values");window.location.href="mark.php"</script>';
        }
        else{
            $conf=mysqli_query($con,"SELECT regNo FROM student WHERE regNo='$regno' ");
            if(mysqli_num_rows($conf) == 0) {
                echo ' <script>alert("NOT REGISTERED");window.location.href="mark.php"</script> ';
            }
            else{
                $conf=mysqli_query($con,"SELECT regNo FROM mark WHERE regNo='$regno' ");
                if(mysqli_num_rows($conf)>0) {
                    echo ' <script>alert("MARK ALREADY ENTERED");window.location.href="mark.php"</script> ';
                }
                else{
                    $check=mysqli_query($con,"SELECT * FROM student WHERE regNo='$regno'");
                    $row=mysqli_fetch_assoc($check);
                   // echo '<script>alert'($row['staffid'] )'</script>';
                    if($row['staffid']== $_SESSION["StaffId"]){
                        $sql="INSERT into mark (regNo,s1,s2,s3,s4,s5) values ('$regno','$s1','$s2','$s3','$s4','$s5')";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            echo '<script> alert("MARK ENTERED SUCCESSFULLY"); window.location.href="mark.php";</script>';
                            $to_email = 'rahulravisankarr@gmail.com';
                            $subject = 'Mark are entered in portal';
                            $message = 'You can enter into your portal and view your cgpa';
                            $headers = 'From: pooja17122@gmail.com';
                            mail($to_email,$subject,$message,$headers);
                        }
                        else{
                            echo '<script> alert("MARK NOT ADDED"); window.location.href="mark.php";</script>';
                        }
                    }
                    else{
                        echo '<script> alert("This student does not belong to you"); window.location.href="mark.php";</script>';
                    }
                }  
            }
        }
    }
    if(isset($_POST['reset-btn'])){
        $regno=$_POST['regno'];
        $re=mysqli_query($con,"DELETE FROM mark WHERE regNo='$regno'");
        if($re){
            echo '<script> alert("SUCCESSFULLY DELETED"); window.location.href="mark.php";</script>';
        }
    }
?>