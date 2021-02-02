<?php
    session_start();
    require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    html{
        height:100%;
        display:flex;
            justify-content:center;
            align-items:center;
            
    }
        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            
        }
        table{
            margin-top:15px;
            margin-bottom:15px;
            border:1px solid black;
        }
        table,td{
            /* border:1px solid black; */
            padding:5px;
        }
    </style>
    <title>LIBERTY INSTITUTE APP</title>
    </head>
    <body>
    <div class="container">
    <form action="ChangeDataProcess.php" method="post">
        <table>
            <tr>
                <td>Register Number</td>
                <td><?php echo $_SESSION['StudentRegister'];?></td>
            </tr>
            <tr>
                <td>Student Name</td>
                <td><input type="text" name="name" value="<?php echo $_SESSION["StudentName"];?>" </td>
            </tr>
            <tr>
                <td>Dob</td>
                <td><input type="date" name="dob" value="<?php echo $_SESSION["Studentdob"];?>" </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value="<?php echo $_SESSION["StudentGender"];?>" </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $_SESSION["StudentEmail"];?>" </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="addr" value="<?php echo $_SESSION["Studentaddr"];?>" </td>
            </tr>
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="rno" value="<?php echo $_SESSION["Studentrno"];?>" </td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" name="dept" value="<?php echo $_SESSION["Studentdept"];?>" </td>
            </tr>
            <tr>
                <td>StaffId</td>
                <td><input type="text" name="staffid" value="<?php echo $_SESSION["StudentStaffid"];?>" </td>
            </tr>
            <tr>
                <td>Security Key</td>
                <td><?php echo $_SESSION['StudentSecurityKey'];?></td>
            </tr>
            <tr>
                <td style="text-align:center;" colspan="2"><input type="submit" name="change-btnn" value="Request Change"></td>
            </tr>

        </table>
        </form>
    </div>       
    </body>
    
</html>