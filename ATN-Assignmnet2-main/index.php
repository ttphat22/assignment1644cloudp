<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Shop </title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Tao menu cap -->
    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    
    <link href="css/salomon.css" rel="stylesheet">
    
<!--datatable-->
	<script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    
  </head>
  <body>
  
  <?php
  session_start();
    include_once("Connection.php"); 
  ?>

<header id="header"><!--header-->
		
		
		<div class="header-middle" style="background-color:#ff6699"><!--header-middle-->
			<div class="container" >
				<div>
					<div class="col-sm-6" >
						<div class="logo pull-left" >
                            <a href="index.php" style="background-color:#ff6699;color:#">
                            <img src="images/logo1234.jpg" width="125" height="125"></a>
                            <a href="index.php" style="background-color:#;color:#FFF">ATN
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" >
                                
                                
                                <?php
                                    if(isset($_SESSION['us']) && $_SESSION['us'] != ""){
                                ?>
                                    <li><a style="background-color:#ff6699;color:#FFF" href="?page=update_customer">
                                        <i class="fa fa-lock"></i>Hello, <?php echo $_SESSION['us']?></a></li>
                                    <li><a href="?page=logout" style="background-color:#ff6699;color:#FFF";color:#FFF>
                                        <i class="fa fa-crosshairs"></i>Logout</a></li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li><a href="?page=login" style="background-color:#ff6699;color:#FFF">
                                <i class="fa fa-lock"></i>Login</a></li>
                                <li><a href="?page=register" style="background-color:#ff6699;color:#FFF">
                                <i class="fa fa-star"></i>Register</a></li>
                                <?php
                                    }
                                    ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								
								<li class="dropdown"><a href="#">Management<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?page=category_management">Category</a></li>
										<li><a href="?page=product_management">Product</a></li>
                                    </ul>
                                </li> 
								<li><a href="?page=Detail">See More</a></li>
                               
                                
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
                            
          <button type="button" class="btn btn-info">Search</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
  
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page=="register"){
                include_once("Register.php");
            }
            elseif($page=="login"){
                include_once("Login1.php");
            }
            elseif($page=="category_management"){
                include_once("Category_Management.php");
            }
            elseif($page=="product_management"){
                include_once("Product_Management.php");
            }
            elseif($page=="add_category"){
                include_once("Add_Category.php");
            }
            elseif($page=="update_category"){
                include_once("Update_Category.php");
            }
            elseif($page=="logout"){
                include_once("Logout.php");
            }
            elseif($page=="add_product"){
                include_once("Add_Product.php");
            }
            elseif($page=="update_product"){
                include_once("Update_Product.php");
            }
            elseif($page=="update_customer"){
                include_once("Update_customer.php");
            }
            elseif ($page=="Detail"){
                include_once("His.php");
            }
        }
        else{
            include_once("Content.php");
        }
	?>
      
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>AT<span>N</span></h2>
                        <p>Contact </p>
                        >>>Nguyen Khanh An<br/>
                        Email : khanhan@gmail.com <br/>
                        Phone : 0388136123 <br/>
                        Address : CanTho, 99/5A, 30/4 <br/>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Directional</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>                      
                            <li><a href="?page=Detail">Detail</a></li>
                            
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">About us</h2>
                        <ul>
                            <p>We, ATN company was established under the business registration number: 4102013060 by the Department of National Ho Chi Minh City on 8 May 2010.</p>
                            <p>After more than 10 years of operation and continuous development, the company gradually asserted its position in the Vietnamese market. Currently, CompanyCPCP company is a reputable distributor and manufacturer in the world. We are proud of a team of professional, experienced staff including doctors, engineers, bachelor of economics,ready to be present anytime, anywhere to serve the needs of customers, with style. dedicated and professional. </p>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">News</h2>
                        <p>Sign up for our newsletter and get our exclusive deals.</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Enter Email Address">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021   </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    
    <!--data table - dat dung vi tri nay-->
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></script>
    
    
  </body>
</html>