<!DOCTYPE html>
<html lang="en">
<?php
include("./db.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SamplePHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- include navBar -->
<?php include 'navBar.php';?>
	<div class="container" id="container_view" style="padding-left:20%">
        <div class="card-body">
            <div class="form-body">
                <?php $qml ="SELECT * FROM products WHERE product_id='".$_GET['pid']."'";
                    $rest=mysqli_query($db, $qml); 
                    $roww=mysqli_fetch_array($rest);

                    $pro_id    = $roww['product_id'];
                    $pro_title = $roww['product_title'];
                    $pro_price = $roww['product_price'];
					$pro_image = $roww['product_image'];
					$pro_desc  = $roww['product_desc'];
                ?>
            
				<div class="title">
                    <?php 
                        echo "
							<h2><b>
								$pro_title
							</b></h2>
                        ";
                    ?>
                </div>
                <div class="image">
                    <?php 
                        echo "
                            <div>
                            <img src='product_images/$pro_image' style='width:260px; height:350px;'/>
                            </div>
                        ";
                    ?>
				</div>
				<div class="price">
                    <?php 
                        echo "
							<h3>
								Price: Rs.$pro_price
							</h3>
                        ";
                    ?>
				</div>
				<div class="description">
                    <?php 
                        echo "
							<p>
								Descriptiopn: $pro_desc
							</p>
                        ";
                    ?>
				</div>
            </div>
        </div>
    </div>
</body>
</html>