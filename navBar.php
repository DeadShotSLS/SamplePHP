<!DOCTYPE html>
<html lang="en">
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
    <div class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
        <div class="container-fluid">	
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">SamplePHP</a>
            </div>
            <div class="collapse navbar-collapse" id="collapse" style="margin-left: 70%">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION["uid"])){
                            echo  '<li class="nav-item"><a href="add_product.php" class="nav-link active">Add Product</a> </li>';
                            echo  '<li class="nav-item"><a href="all_products.php" class="nav-link active">All Products</a> </li>';
                            echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
                        }else{
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>';
						    echo '<li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>