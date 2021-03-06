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

    <!-- Slider Beginer -->
    <div class="container" id="slider">

        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin_area/slides_images/slider_1.jpeg" alt="Слайдер">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slider_2.jpeg" alt="Слайдер">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slider_3.jpeg" alt="Слайдер">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slider_4.jpeg" alt="Слайдер">
                    </div>
                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>

        </div>

    </div>
     <!-- Slider Finish -->

     <!-- advantages Beginer -->
    <div id="advantages">

        <div class="container">

            <div class="same-height-row">

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">We Love Our Costumer</a></h3>
                        <p>We know to provide the best posible service ever.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">Best Prices <br> . </a></h3>
                        <p>Compare us with another site, who have the best prices.</p>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">100% Original Products</a></h3>
                        <p>We just offer you the best and original products. Products best</p>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
    <!-- advantages Finish -->

    <!-- Hot Beginer -->
    <div id="hot">

        <div class="box">

            <div class="container">

                <div class="col-md-12">
                    
                    <h2>Our Lates Products</h2>

                </div>

            </div>
        
        </div>

    </div>
    <!-- Hot Finish -->

    <!-- Proucts Beginer -->
    <div id="content" class="container">

        <div class="row">

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product_1.jpg" alt="Продукт">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logo T-Shirt</a></h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shooping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Proucts Finish -->

    <?php 
    
        include("includeds/footer.php");
    
    ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
