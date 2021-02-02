<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['stbut'])){
        $regno=$_POST['regNo'];
        $password=$_POST['password'];
        $passw=md5($password);
        if($password==null || $regno==null){
            echo '<script>alert("ENTER ALL LOGIN CREDENTIALS");window.location.href="StudLogin.php";</script>';
        }
        else{
            $sql="SELECT * FROM student WHERE regNo='$regno'";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res) > 0){
               // echo '<script> alert("yes");</script>';
                if($row=mysqli_fetch_assoc($res)){
                    $dbpass=$row['password'];
                    if($passw==$dbpass){
                        echo '<script> alert("login successfull");window.location.href="studview.php";</script>';
                        $_SESSION["StudentRegister"]=$row['regNo'];
                        $_SESSION["StudentName"]=$row["name"];
                        $_SESSION["Studentdob"]=$row["dob"];
                        $_SESSION["StudentGender"]=$row["gender"];
                        $_SESSION["StudentEmail"]=$row["email"];
                        $_SESSION["Studentaddr"]=$row["addr"];
                        $_SESSION["Studentrno"]=$row["rno"];
                        $_SESSION["Studentdept"]=$row["dept"];
                        $_SESSION["StudentStaffid"]=$row["staffid"];
                        $_SESSION["StudentSecurityKey"]=$row["security"];
                        $marksql=mysqli_query($con,"SELECT * FROM mark WHERE regNo='$regno'");
                        $roww=mysqli_fetch_assoc($marksql);
                        $_SESSION["Sub1"]=$roww["s1"];
                        $_SESSION["Sub2"]=$roww["s2"];
                        $_SESSION["Sub3"]=$roww["s3"];
                        $_SESSION["Sub4"]=$roww["s4"];
                        $_SESSION["Sub5"]=$roww["s5"];
                        $_SESSION["cgpa"]=(($roww["s1"]+$roww["s2"]+$roww["s3"]+$roww["s4"]+$roww["s5"])/500)*10;
                        $attendsql=mysqli_query($con,"SELECT * FROM Attendance WHERE regNo='$regno'");
                        $rowww=mysqli_fetch_assoc($attendsql);
                        $_SESSION["present"]=$rowww["daysPresent"];
                        $_SESSION["total"]=$rowww["totaldays"];
                        $_SESSION["percentage"]=(($rowww["daysPresent"]/$rowww["totaldays"])*100);
                    }
                    else{
                        echo '<script> alert("PASSWORD AND USERNAME NOT MATCHED");window.location.href="StudLogin.php";</script>';
                    }
                }
            }
            else{
                echo '<script> alert("USER NOT FOUND !");window.location.href="studResister.php";</script> ';
            }
        }
        
    }


?>