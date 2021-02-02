<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['passsave'])){
        $value=$_POST['profession'];
        $id=$_POST['id'];
        $sec=$_POST['sec'];
        $new=$_POST['new'];
        if($value == "staff"){
            $sql=mysqli_query($con,"SELECT * FROM stafflogin WHERE staffId='$id'");
            if($row=mysqli_fetch_assoc($sql)){
                if($sec==$row['security']){
                    $pass=md5($new);
                    $res=mysqli_query($con,"UPDATE stafflogin SET password='$pass' WHERE staffId='$id'");
                    if($res){
                        echo '<script>alert("Request successfull! Password changed");window.location.href="staffLogin.php"</script>';
                    }

                }
            }
        }
        else if($value == "student"){
            $sql=mysqli_query($con,"SELECT * FROM student WHERE regNo='$id'");
            if($row=mysqli_fetch_assoc($sql)){
                if($sec==$row['security']){
                    $pass=md5($new);
                    $res=mysqli_query($con,"UPDATE student SET password='$pass' WHERE regNo='$id' ");
                    if($res){
                        echo '<script>alert("Request successfull! Password changed");window.location.href="StudLogin.php"</script>';
                    }

                }
            }
        }
    }
?>