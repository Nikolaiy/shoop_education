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
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
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
                        <li class="active">
                            <a href="index.php">Главная</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
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

            <div class="col-md-3">

            <?php 

                include("includeds/sidebar.php");

            ?>

            </div>

            <div class="col-md-9">
                <div id="productMain" class="row">

                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slider" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Product"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Product"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Product"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">Shop Shirt Men</h1>

                            <form action="details.php" class="form-horizontal" method="post">
                                <div class="form-group">
                                    
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>

                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7">
                                        <select name="product_size" id="" class="form-control">
                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                </div>

                                <p class="price">$50</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                            </form>

                        </div>

                        <div class="row" id="thumbs">
                            
                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product_1.jpg" alt="product" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product_1.jpg" alt="product" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product_1.jpg" alt="product" class="img-responsive">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi commodi quos accusamus molestias perspiciatis quis cum aspernatur itaque id. 
                        Distinctio amet cumque dignissimos quia asperiores enim atque repellat repudiandae porro.
                    </p>

                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

                </div>

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
