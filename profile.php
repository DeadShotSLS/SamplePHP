<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- include navBar -->
    <?php include 'navBar.php';?>

    <!-- view products -->
    <div class="container">
		<div class="row">
            <?php
                $product_query = "SELECT * FROM products";
                $run_query = mysqli_query($db,$product_query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        echo "
                        <div class='col-md-4' style='box-shadow: 0 4px 4px 0 gray; max-width: 300px; margin: 5px 1% 10px 1%; text-align: center; padding: 0 0 5px 0;'>
                            <div class='panel panel-info'>
                                <div class='panel-heading' style='color: red;'><h3>$pro_title</h3></div>
                                <div class='panel-body'>
                                    <img src='product_images/$pro_image' style='width:160px; height:250px;'/>
                                </div>
                                <div class='panel-heading'>
                                    Rs.$pro_price.00
                                </div>
                                <div>
                                    <a href='view_product.php?pid=".$pro_id."' id='product_view' class='btn btn-info btn-xs'>ViewItem</a>
                                </div>
                            </div>
                        </div>	
                        ";
                    }
                }else{
                    echo "<center><h1>No -Data!</h1></center>";
                }
            ?>
        </div>
	</div>
</body>
</html>