<!DOCTYPE html>
<html>
<head>
    <title>LIBERTY INSTITUTE APP</title>
    <style>
        body{
            background-image: url(clgg.jpg);
            background-size:100% 500px;
            background-color:white;
	        background-repeat:repeat-y;
        }
       .container{
	        display:flex;
    	    justify-content:center;
    	    align-items: center;
        }
        .transbox{
            width:50%;
            padding:5px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .inside{
            border:10px solid grey;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            padding:10px;
        }
        .imagebox{
            width:50%;
        }

        @media only screen and (max-width:800px){
        	.container{
            	flex-direction: column;
        	}
        	.transbox{
		        width:100%;
        		flex:100%;
	        }
	        .imagebox{
        		width: 100%;
        		flex:100%;
            }
            .main{
                flex-direction:column;
            }
            .main div{
                width:100%;
                flex:100%;
            }
        }
        .but{
            float:left;
            clear:left;
        }
        .butt{
            float:left;
            clear:left;
            border-radius: 50%;
        	background-color: rgb(156, 6, 49);
        	color: white;
        	border: 2px solid black;
            transition-duration: 0.4s;
            margin-top:10px;
            margin-bottom:10px;
        }
        .chairman{
            padding:35px;
            text-indent:60px;

        }
        .butt:hover{
        	background-color: black;
        	color: red;
        }
        div.pur{
            opacity: 0.6;
            margin: 100px;
            border: 1px solid black;
            float: top right;
            background-color: #ffffff;
            filter: alpha(opacity=60);
        }
        div.pur p {
            margin: 5%;
           color: #000000;
           font-weight: bold;
        }
        .main{
            text-align:center;
            background-color: grey;
            color: white;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .dept{
            margin-left:100px;
            margin-right:100px;
            display:grid;
            grid-template-columns: repeat(auto-fill,minmax(200px,1fr));
            grid-gap:20px;
            margin-bottom:50px;
        }
        .box1{
            border:4px solid black;
            text-align:center;
            padding:40px;
            background-color:grey;
            opacity:0.7;
            font-size:15px;
        }
        .box1:hover{
            padding:60px;
            box-shadow:5px 5px 5px black,-6px -6px 5px black;
            text-align:center;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    
</head>
<body class="indlog">

<div class="pos-f-t" style="position:fixed;top:0;width:100%;" >

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <nav style=" margin-left:0; padding-left:0; width:100%; background-color:silver;">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#head" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#purpose" role="tab" aria-controls="nav-profile" aria-selected="false">Purpose</a>
    <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#chairman" role="tab" aria-controls="nav-contact" aria-selected="false">Chairman's Mission</a>
    <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#dept" role="tab" aria-controls="nav-contact" aria-selected="false">Department</a>
    <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
	<div id="head" style="text-align:center; margin-top:80px;">
		<h1>...LIBERTY INSTITUTE WELCOMES YOU...</h1>
	</div>
	<div class="container">
	<div class="transbox">
				<div class="inside">
				<h3 style="background-color: white;text-align:center;">SELECT THE USER TYPE</h3>
				<form>
					<img class="but" src="staff.jpg" height="100" width="100"><br>
					<a href="staffLogin.php"><input type="button" value="STAFF LOGIN" class="butt"></a>
					<img class="but" src="studd.jpg" height="100" width="100"><br>
					<a href="StudLogin.php"><input type="button" value="STUDENT LOGIN" class="butt"></a>
				</form>
                </div>
		</div>
		<div class="imagebox">
			<img class="log" src="logo.jpg"><br><br><br><br><br>
		</div>
		</div>
			<div  style="color:rgb(26, 128, 8);" class="pur" id="purpose">
				<h2 style="text-align:center;">PURPOSE<br></h2>
				<p>
					A digital platform for the interactions between College Development Council and Affiliated Colleges/University 
					Departments to manage the data on affiliation,Infrastructural details and teachers profile. Basic Institution details, 
					NAAC rating details, College Officer details,Non-teaching staff details,  hostel facilities and academic year based data 
					are collected from the College/Department.Data collection from College includes College/Department Basic Details, 
					Programme Details,Faculty Details, StudentStrength Details, Research Department Details, Other Officer Details,Extra Curricular Activity Details and Infrastructural Details.<a href="instruction.php" style="background-color: black">HELP-READ INSTRUCTION</a></p>
			</div>
            <div id="chairman" class="pur chairman">
                Change is always a goal of learning.There can be no growth without any change. Everything about us is constantly changing - society, individuals,
                our environment, the country... While some of these changes are looked forward to, others generate appehension about their fallouts.
                And since there can be no retreat, we must march forward even in the face of the most unwelcome changes, challenging a few, thwarting others, and transforming the rest to make them meaningfull to the society at large.
                This is what true education is about -- enabling the student to face changes with courage and poise. Liberty Institute has been carrying out this duty with unparalled and felicity. <br>It is hearting to observe that our students are second 
                to none in terms of creativity and enterprise. The activity undertaken by faculty and student embody the sprit of trust, teamwork, initiative and innovation.

            </div>
            <div class="dept" id="dept">
                <div class="box1">CSE</div>
                <div class="box1">EEE</div>
                <div class="box1">ECE</div>
                <div class="box1">MECH</div>
                <div class="box1">BIO-TECH</div>
                <div class="box1">BIO-MED</div>
                <div class="box1">IT</div>
                <div class="box1">CIVIL</div>
                <div class="box1">FOOD-TECH</div>
                <div class="box1">AERONAUTICAL</div>
                <div class="box1">AGRI</div>
            </div>

<div id="contact" class="main">
	<div style="float:left;width:30%">MAIL US THROUGH<br>
	<a href="">liberty_institute@gmail.com</a></div>
	<div  style="float:left;width:40%">YAHOO THROUGH<br>
	<a href="">liberty_inistitute@yahoo.co.in</a></div>
	<div style="float:left;width:30%">WEB<br>
	<a href="">www.libertyInstitute.ac.in</a></div><br>

</div>

</body>
</html>