<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>M-DEV Store</title>
    
</head>
<body>
    
    <!-- Top Beginer -->
    <div id="top">

        <!-- container Beginer -->
        <div class="container">

            <div class="col-md-6 offer">

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>    

            </div>

            <div class="col-md-6">

                <ul class="menu">
                    <li>
                        <a href="customer-register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <!-- Top Finish -->

    <!-- navbar Beginer -->
    <div id="navbar" class="navbar navbar-default">

        <div class="container">

            <div class="navbar-header">
                
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="Интернет магазин" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="Интернет магазин" class="visible-xs">
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justufy"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>

            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">

                    <ul class="nav navbar-nav left">
                        <li>
                            <a href="index.php">Главная</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>

                </div>

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                        <span>4 Items In Your Cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
    <!-- navbar Finish -->

    <!-- content Beginer -->
    <div id="content">
        <div class="container">

            <div class="col-md-12">    
                <ul class=breadcrumb>
                    <li><a href="index.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>

            <div id="cart" class="col-md-9">
                <div class="form">
                    <form action="cart.php" method="post" enctype="muiltipart/form-data">
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You currently have 3 item(s) in oyur cart</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantily</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Shop Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checked" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Shop Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checked" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Shop Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checked" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$100</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>

                        <div class="box-footer">

                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                            </div>

                            <div class="pull-right">
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>

                        </div>

                    </form>
                </div>

                <!-- shdjkgghskl -->
                <div id="row same-height-row">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product_1.jpg" class="img-responsive" alt="Product">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Polo T-Shirt Women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product_1.jpg" class="img-responsive" alt="Product">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Polo T-Shirt Women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product_1.jpg" class="img-responsive" alt="Product">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Polo T-Shirt Women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- content Finish -->

<?php 

include("includeds/footer.php");

?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>