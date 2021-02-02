<?php 
    session_start();
    require_once('connection.php');

    if(isset($_POST['btn-save'])){
        $regNo=$_POST['regno'];
        $Name=$_POST['name'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $addr=$_POST['addr'];
        $rNo=$_POST['rno'];
        $dept=$_POST['dept'];
        $staffId=$_POST['staffid'];
        $password=$_POST['password'];
        $rpassword=$_POST['rpassword'];
        $sec=$_POST['sec'];
        if($password!=$rpassword){
            echo '<script> alert("PASSWORD NOT MATCHED");window.location.href="studResister.php"</script>';
        }
        else{
            $pass=md5($password);
            $conf=mysqli_query($con,"SELECT regNo FROM stulogin WHERE regNo='$regNo' ");
            if(mysqli_num_rows($conf) > 0) {
                echo ' <script> alert("ALREADY REGISTERED");windows.location="StudLogin.php" </script> ';
            }
            else{
                //$sql=;
                $result=mysqli_query($con,"INSERT into student (regNo,name,dob,gender,email,addr,rno,dept,staffid,password,security) values ('$regNo','$Name','$dob','$gender','$email','$addr','$rNo','$dept','$staffId','$pass','$sec')");
                if($result){
                    echo '<script> alert("yes"); window.location.href="StudLogin.php"</script>';
                }
                else{
                    echo '<script> alert("no"); window.location.href="studResister.php"</script>';
                }
            }
        }

    }
 ?>