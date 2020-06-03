<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php include 'navBar.php';?>
<?php
include("db.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM user_info WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	if(is_array($row))  // if matching records in the array & if everything is right
		{
			$_SESSION["uid"] = $row['user_id']; // put user id into temp session
			$_SESSION["name"] = $row['username'];
			header("refresh:1;url=index.php"); // redirect to index.php page
		} 
	else
		{
			$message = "Invalid Username or Password!"; // throw error
		}
	}	
}
?>
<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-wrapper" style="padding: 0">
         <div class="breadcrumb" style="text-align: center" >
            <div class="container">
               <ul style="list-style-type: none;">
                  <li>
                     <span style="color:red;"><?php echo $message; ?></span>
                     <span style="color:green;"><?php echo $success; ?></span>
                  </li>
               </ul>
            </div>
         </div>
         <section class="contact-page inner-page" style="padding-left: 20%">
            <div class="container" style="color: red;">
               <div class="row">
                  <!-- Login -->
                  <div class="col-md-8">
                     <div class="widget">
                        <div class="widget-body">
                           <form action="" method="post">
                              <div class="row">
								<div class="form-group col-sm-12">
									<label for="exampleInputEmail1">UserName</label>
									<input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName"> 
								</div>
								<div class="form-group col-sm-12">
									<label for="exampleInputEmail1">Password</label>
									<input class="form-control" type="password" name="password" id="example-text-input" placeholder="Password"> 
								</div>
								<div class="row">
                                	<div class="col-sm-4" style="margin-left: 15px">
                                    	<input type="submit" value="login" name="submit" class="btn w3-button w3-red w3-borde">
									</div>
                                </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</body>
</html>
