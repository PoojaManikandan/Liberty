<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['attend-save'])){
        $regno=$_POST['regno'];
        $present=$_POST['pres'];
        $total=$_POST['total'];
        if($regno===null || $present===null || $total===null){
            echo '<script> alert("Enter all values");window.location.href="mark.php"</script>';
        }
        else{
            $conf=mysqli_query($con,"SELECT regNo FROM student WHERE regNo='$regno' ");
            if(mysqli_num_rows($conf) == 0) {
                echo ' <script>alert("NOT REGISTERED");window.location.href="mark.php"</script> ';
            }
            else{
                $conf=mysqli_query($con,"SELECT regNo FROM Attendance WHERE regNo='$regno' ");
                if(mysqli_num_rows($conf)>0) {
                    echo ' <script>alert("ATTENDANCE ALREADY ENTERED");window.location.href="attendance.php"</script> ';
                }
                else{
                    $check=mysqli_query($con,"SELECT * FROM student WHERE regNo='$regno'");
                    $row=mysqli_fetch_assoc($check);
                    if($row['staffid']==$_SESSION["StaffId"]){
                        $sql="INSERT into Attendance (regNo,daysPresent,totaldays) values ('$regno','$present','$total')";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            echo '<script> alert("ATTENDANCE ENTERED SUCCESSFULLY"); window.location.href="attendance.php";</script>';
                        }
                        else{
                            echo '<script> alert("NOT ADDED"); window.location.href="attendance.php";</script>';
                        }
                    }
                    else{
                        echo '<script> alert("This student does not belong to you"); window.location.href="attendance.php";</script>';
                    }
                }  
            }
        }
    }
    if(isset($_POST['reset-btn'])){
        $regno=$_POST['regno'];
        $re=mysqli_query($con,"DELETE FROM Attendance WHERE regNo='$regno'");
        if(mysqli_num_rows($re)==0){
            echo '<script> alert("ALREADY DELETED"); window.location.href="attendance.php";</script>';
        }
        else if($re){
            echo '<script> alert("SUCCESSFULLY DELETED"); window.location.href="attendance.php";</script>';
        }
        
    }
?>
