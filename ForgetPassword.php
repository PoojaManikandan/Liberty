<!DOCTYPE html>
<html>
<head>
    <title>LIBERTY INSTITUTE APP</title>
    <style>
        .box{
            border:2px solid black;
            width:70%;
            top:100px;
            position:relative;
            color:white;
        }
        td{
            padding:10px;
        }
        .container{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        body{
            background-color: #e9bcb7;
            background-image: linear-gradient(315deg, #e9bcb7 0%, #29524a 74%);
            height:410px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="box">
    <form action="forgetPassProcess.php" method="post">
    <table>
        <tr>
        <td colspan="2"><label>You are a <label>
        <input type="radio" name="profession" value="staff" id="staff"><label for="staff">Staff</label>
        <input type="radio" name="profession" value="student" id="student"><label for="student">Student</label></td>
        </tr>
        <tr>
        <td><label for="id">Enter your Id</label></td>
        <td><input type="text" name="id" id="id" required></td>
        </tr>
        <tr>
        <td><label for="sec">Do you remember the security key you gave during your register process</label></td>
        <td><input type="text" name="sec" id="sec" required></td>
        </tr>
        <tr>
        <td><label for="new">Enter your new password</label></td>
        <td><input type="password" name="new" id="new" required></td>
        </tr>
        <tr>
        <td colspan="2"><input type="submit" name="passsave" value="Request Change"></td>
        </tr>
    </table>
    </form>
    </div>
    </div>
</body>
</html>