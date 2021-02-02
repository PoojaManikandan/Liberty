<?php
    session_start();
    require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>LIBERTY INSTITUTE APP</title>
    <style>
        .container{
            display:flex;
            
        }
        .left{
            width:30%;
            background-color:darkturquoise;
        }
        .right{
            width:30%;
            background-color:darkturquoise;
        }
        .center{
            width:40%;
            background-color:darkcyan;
        }
        @media only screen and (max-width:800px){
            .container{
                flex-direction:column;
            }
            .left{
                width:100%;
                flex:100%;
            }
            table{
                margin-left:auto;
                margin-right:auto;
            }
            .center{
                width:100%;
                flex:100%;
            }
            .right{
                width:100%;
                flex:100%;
            }
        }

        td{
            text-align:center;
            padding:8px;
        }
        th{
            background-color:darkslategray;
            color:white;
        }
        tr:nth-child(even){
            background-color:lightslategray;
        }
        
        tr:nth-child(odd){
            background-color:lightgray;
        }
        .markshow{
            display:none;
            position:relative;
        }
        .containerr{
            position:absolute;   
        }
        button{
            background-color:silver;
            color:navy;
            width:100px;
        }
        .containerr:hover button{
            background-color:navy;
            color:white;
            height:50px;
            width:160px;
        }
        .containerr:active .markshow{
            display:block;
        }
        .markshow1{
            display:none;
            position:relative;
        }
        .container1{
            position:absolute;
            
            
        }
        button{
            background-color:silver;
            color:navy;
            width:100px;
        }
        .container1:hover button{
            background-color:navy;
            color:white;
            height:50px;
            width:160px;
        }
        .container1:active .markshow1{
            display:block;
        }
        
    </style>
</head>
<body>
    <p style="text-align:right;"><a href="StudLogin.php" style="color:black; font-size:17px; font-weight:bold;">Do you want to logout?</a></p>
    <div style="color:navy; font-size:30px;background-color:silver; margin-bottom:10px;">
        <?php
            echo 'Hello '.$_SESSION["StudentName"].',';
        ?>
    </div>
    <div class="container">
        <div class="left"><p style="text-align:center; font-size:20px;">PROFILE<p>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Register Number</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentRegister"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentName"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["Studentdob"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentGender"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentEmail"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Residential Address</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["Studentaddr"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Roll Number</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["Studentrno"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["Studentdept"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Staff Id</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentStaffid"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Security Key</td>
                    <td>
                        <?php
                            echo ''.$_SESSION["StudentSecurityKey"];
                        ?>
                    </td>
                </tr>
            </table><br><br>
            <p><a style="color:black;" href="ChangeData.php">Click here to change your profile data</a></p>
        </div>
        <div class="center"><p style="text-align:center;font-size:20px;">ATTENDENCE</p>
        <p style="background-color:yellow; width:80px; text-align:center;">
            <?php
               if(is_nan($_SESSION["percentage"])){
                   echo 'Still not updated';
               }
               else{
                echo sprintf('%.2f', $_SESSION["percentage"]);
               }
            ?>
        </p>
        <p>
            <?php
            if(!is_nan($_SESSION["percentage"])){
                if($_SESSION["percentage"]>=75){
                    echo 'You have sufficient attendance';
                }
                else{
                    echo'You do not have sufficient attendance';
                }
            }
            ?>
            </p>
            <p class="ptag">Do you want to view detailed view</p>
            <div class="container1">
                <button>Click me</button>
                <table class="markshow1">
                    <tr>
                        <th>Days Present</th>
                        <th>Total days</th>
                    </tr>
                    <tr>
                        <td><?php
                                echo $_SESSION["present"];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $_SESSION["total"];
                            ?>
                        </td>
                    </tr>          
                </table>
            </div><br><br>
            <form action="mail.php" method="post">
            <p>Is the data entered is not correct? click here<br><br>
            <input type="submit" value="Send Mail" name="attendMail"></p>
            </form>
        </div>
        <div class="right"><p style="text-align:center;font-size:20px;">MARKS</p>
            <p style="background-color:yellow; width:80px; text-align:center;">
                <?php
                    if($_SESSION["cgpa"]!=0){
                        echo ''.$_SESSION["cgpa"].'<br>';
                    }
                    else{
                        echo 'Still not upated';
                    }
                ?>
            </p>
            <p>
                <?php
                    if($_SESSION["cgpa"]!=0){
                        if($_SESSION["cgpa"]>=6.0){
                            echo 'Congradulations!! you have passed this exam';
                        }
                        else{
                            echo'You did not pass this exam';
                        }
                    }
                ?>
            </p>
            <p class="ptag">Do you want to view your individual mark</p>
            <div class="containerr">
                <button>Click me</button>
                <table class="markshow">
                    <tr>
                        <th>Subjects</th>
                        <th>Mark</th>
                    </tr>
                    <tr>
                        <td>Subject 1</td>
                        <td>
                            <?php
                                echo $_SESSION["Sub1"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Subject 2</td>
                        <td>
                            <?php
                                echo $_SESSION["Sub2"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Subject 3</td>
                        <td>
                            <?php
                                echo $_SESSION["Sub3"];
                            ?> 
                        </td>
                    </tr>
                    <tr>
                        <td>Subject 4</td>
                        <td>
                            <?php
                                echo $_SESSION["Sub4"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Subject 5</td>
                        <td>
                            <?php
                                echo $_SESSION["Sub5"];
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>