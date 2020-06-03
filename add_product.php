<!DOCTYPE html>
<html lang="en">
<?php
include("./db.php");
error_reporting(0);
session_start();

if(isset($_POST['submit'])) //if upload btn is pressed
{
if(empty($_POST['p_name'])||empty($_POST['p_desc'])||$_POST['price']=='')
{	
$error = '<div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>All fields Must be Fillup!</strong>
        </div>';           
}
else
{
$fname = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];
$fsize = $_FILES['file']['size'];
$extension = explode('.',$fname);
$extension = strtolower(end($extension));  
$fnew = uniqid().'.'.$extension;

$store = "./product_images/".basename($fnew);  // the path to store the upload image

if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )  //image type
{        
if($fsize>=1000000)
    {
$error = '<div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Max Image Size is 1024kb!</strong> Try different Image.
    </div>';
    }
else
    {          
$sql = "INSERT INTO products(product_title,product_price,product_desc,product_image) VALUE('".$_POST['p_name']."','".$_POST['price']."','".$_POST['p_desc']."','".$fnew."')";  // store the submited data ino the database :images
mysqli_query($db, $sql); 
move_uploaded_file($temp, $store);
    $success = 	'<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Congrass!</strong> New Product Added Successfully.
        </div>';
    }
}
elseif($extension == '')
{
    $error = '<div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>select image</strong>
        </div>';
}
else{
    $error = '<div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>invalid extension!</strong>png, jpg, Gif are accepted.
        </div>';
}        
    }
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SamplePHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<!-- include navBar -->
<?php include 'navBar.php';?>
    <div id="main-wrapper">
        <div class="page-wrapper" >
            <div class="container">
            <?php  echo $error;
                    echo $success; ?>		
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h1 class="card-title">Add Product to Store</h1>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" name="p_name" class="form-control" placeholder="Enter Product Name">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Discription</label>
                                                    <input type="text" name="p_desc" class="form-control form-control-danger" placeholder="Enter Description">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">price </label>
                                                    <input type="number" name="price" class="form-control" placeholder="Rs">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="index.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>