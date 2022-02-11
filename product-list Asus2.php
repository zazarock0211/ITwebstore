product-detail.php lang="en">
    <head>
        <meta charset="utf-8">
        <title>IT WEB Store</title>
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <?php include('config/start.php')?>

    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        zazapooloo@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +66 80 615 4612
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Products</a>
                        product-detail.php" class="nav-item nav-link">Cart</a>
                            <a product-detail.php" class="nav-item nav-link">Address</a>
                            <aproduct-detail.php" class="nav-item nav-link">Contact Us</a>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                <!--<a href="login.php" class="dropdown-item">Login & Register</a>--> 
                                <a href="edproduct-detail.php" class="dropdown-item">My Account</a>
                                <a href="actions/adminform-list.php" class="dropdown-item">Table Data</a> 
                                <a href="actions/logout.inc.php" class="dropdown-item">logout</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            product-detail.php">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/IT WEB.gif" alt="Logo" height="auto" width="90px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                        product-detail.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->  
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">product-detail.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Products</a></li>
                    <li class="breadcrumb-item active">Product List</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">หมวด สินค้าใหม่</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item">News Set</a>
                                                        <a href="" class="dropdown-item">**** ****</a>
                                                        <a href="" class="dropdown-item">**** ****</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">ราคา</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item">฿100 to ฿500</a>
                                                        <a href="" class="dropdown-item">฿500 to ฿1,000</a>
                                                        <a href="" class="dropdown-item">฿1,000 to ฿5,000</a>
                                                        <a href="" class="dropdown-item">฿5,000 to ฿10,000</a>
                                                        <a href="" class="dropdown-item">฿10,000 to ฿50,000</a>
                                                        <a href="" class="dropdown-item">฿50,000 to ฿100,000</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="product-detail.php">Computer Set Basic</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="product-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>23,000</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Set Gaming</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com2 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>30,000</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Set Case Computer ใส</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com3 copy.png" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>19,000</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Com Test</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com11 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Test</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com6 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Test2</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com7 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Test3</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com4 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Test4</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com12 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Computer Test5</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/com13 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="product-list Asus.php">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="product-list Asus.php">1</a></li>
                                    <li class="page-item active disabled"><a class="page-link" href="prodproduct-detail.php">2</a></li>
                                    <li class="page-item"><a class="page-link" href="prodproduct-detail.php">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="prodproduct-detail.php">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Management</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="actions/editprofile_user.php?ID=<?php echo $_SESSION['ID']?>"><i class="fa fa-user " aria-hidden="true"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping cart </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fas fa-ticket-alt"></i> Ticket </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fas fa-globe-asia"></i> Web Manager</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fa fa-info" aria-hidden="true"></i> Contact </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <!--div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/product-10 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/product-9 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/product-8 copy.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="pproduct-detail.php"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>฿</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Our Brands</h2>
                            <ul>
                                <li><a href="product-list Asus.php">Asus </a><span>(0)</span></li>
                                <li><a href="">Acer </a><span>(0)</span></li>
                                <li><a href="">Intel </a><span>(0)</span></li>
                                <li><a href="">Lenovo </a><span>(0)</span></li>
                                <li><a href="">Microsoft </a><span>(0)</span></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget tag">
                            <h2 class="title">Tags</h2>
                            <a href="">Computer Set</a>
                            <a href="">RGB</a>
                            <a href="">Gaming</a>
                            <a href="">office</a>
                            <a href="">CPU</a>
                            <a href="">Mainboard</a>
                            <a href="">Mouse</a>
                            <a href="">Keyboard</a>
                            <a href="">Monitor</a>
                            <a href="">Case</a>
                            <a href="">Headphone</a>
                            <a href="">Microphone</a>
                            <a href="">Chair Gaming</a>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start >
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        < Brand End -->
        
<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>**** **** **** ****</p>
                        <p><i class="fa fa-envelope"></i>zazapooloo@gmail.com</p>
                        <p><i class="fa fa-phone"></i>+66 80 615 4612</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="">Mr.Kachen</a></li>
                        <li><a href="">Mr.Conana</a></li>
                        <li><a href="">Mr.Thanapat</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <!--img src="img/payment-method.png" alt="Payment Method" /-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <!--img src="img/godaddy.svg" alt="Payment Security" />
                    <img src="img/norton.svg" alt="Payment Security" />
                    <img src="img/ssl.svg" alt="Payment Security" /-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <!--p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p-->
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></scriproduct-detail.php>
