<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['change-btnn'])){
        $regNo= $_SESSION["StudentRegister"];
        $Name=$_POST['name'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $addr=$_POST['addr'];
        $rNo=$_POST['rno'];
        $dept=$_POST['dept'];
        $staffId=$_POST['staffid'];
        $result=mysqli_query($con,"UPDATE student SET name='$Name',dob='$dob',gender='$gender',email='$email',addr='$addr',rno='$rNo',dept='$dept',staffid='$staffId' WHERE regNo = $regNo");
        if($result){
            echo '<script> alert("Succussfully changed");alert("You need to login again");window.location.href="StudLogin.php";</script>';
        }
        else{
            echo '<script> alert("Not changed");window.location.href="ChangeData.php";</script>';
        }
    }
?>