<!DOCTYPE html>
<html lang="en">
<?php
include("./db.php");
error_reporting(0);
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
<!-- include navBar -->
<?php include 'navBar.php';?>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
						<div class="card">
                            <div class="card-body">
                                <h1 class="card-title" style="color: red;">All Products</h1>								
                                <div class="table-responsive m-t-40">
                                    <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Discription</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Product</th>
                                                <th>Discription</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                               <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $sql="SELECT * FROM products order by product_id desc";
                                        $query=mysqli_query($db,$sql);
                                        
                                            if(!mysqli_num_rows($query) > 0 )
                                                {
                                                    echo '<td colspan="11"><center>No -Data!</center></td>';
                                                }
                                            else
                                            {				
                                                while($rows=mysqli_fetch_array($query))
                                                    {
                                                        echo '<tr>
                                                            <td>'.$rows['product_title'].'</td>
                                                            <td>'.$rows['product_desc'].'</td>
                                                            <td>Rs.'.$rows['product_price'].'</td>
                                                            <td>
                                                                <div class="col-md-3 col-lg-8 m-b-10">
                                                                    <center>
                                                                        <img src="./product_images/'.$rows['product_image'].'" class="img-responsive  radius" style="max-height:100px;max-width:150px;" />
                                                                    </center>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="delete_product.php?product_del='.$rows['product_id'].'" class="btn btn-danger btn-xs m-b-10"><i class="fa fa-trash"></i></a> 
                                                                <a href="update_product.php?product_upd='.$rows['product_id'].'" class="btn btn-info btn-xs m-b-10"><i class="fa fa-bars"></i></a>
                                                            </td>
                                                        </tr>';
                                                    }
                                                }
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>