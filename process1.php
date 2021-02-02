<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['btsave'])){
        $staffid=$_POST['staffid'];
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $password=$_POST['password'];
        $rpassword=$_POST['rpassword'];
        $sec=$_POST['sec'];
        if($password!=$rpassword){
            echo '<script> alert("PASSWORD NOT MATCH");windows.location="sfreg.php" </script> ';
        }
        else{
            $pass=md5($password);
            $conf=mysqli_query($con,"SELECT staffId FROM stafflogin WHERE staffId='$staffid' ");
            if(mysqli_num_rows($conf) > 0) {
                echo ' <script>alert("ALREADY REGISTERED");windows.location="sfreg.php"</script> ';
            }
            else{
                $sql="INSERT into stafflogin (staffId,name,dept,password,security) values ('$staffid','$name','$dept','$pass','$sec' )";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo '<script> alert("yes"); window.location.href="staffLogin.php";</script>';
                }
                else{
                    echo '<script> alert("no"); window.location.href="sfreg.php";</script>';
                }
            }
        }
    }
?>