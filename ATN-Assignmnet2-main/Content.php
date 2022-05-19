<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">

		<title>Laptop Store Website </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		
	</head>  
<?php
include_once("Connection.php");
?>
     
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h3 class="section-title"> New Product</h3>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . pg_errormessage($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?page=Detail" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> See More</a></a>
                                        
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['price']?></ins> <del><?php echo  $row['oldprice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
                        <div class="product-widget-area">
      
                        <div class="container">
                        <div class="span12">
                                <h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="product_detail.html"><strong>Best Selling Products</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh1.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="?page=Detail" class="category"><p class="price">11.000.000đ</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh2.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="?page=Detail" class="category"><p class="price">12.679.000đ</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh3.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="?page=Detail" class="category"><p class="price">15.679.000đ</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh4.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="?page=Detail" class="category"><p class="price">16.500.000đ</p></a>
													</div>
												</li>
											</ul>
										</div>
                                        <div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh18.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Know exactly</a><br/>
														
														<p class="price">28.500.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh9.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Ut wisi enim ad</a><br/>
														
														<p class="price">19.500.000đ</p>
													</div>
												</li>
																																	
											</ul>
										</div>
                                    </div>   
                                <h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="product_detail.html"><strong>Best View Products</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-3" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh5.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="?page=Detail" class="category"><p class="price">11.000.000đ</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh16.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="?page=Detail" class="category"><p class="price">12.679.000đ</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh17.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="?page=Detail" class="category"><p class="price">15.679.000đ</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh8.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="?page=Detail" class="category"><p class="price">16.500.000đ</p></a>
													</div>
												</li>
                                                <li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh7.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="?page=Detail" class="category"><p class="price">15.679.000đ</p></a>
													</div>
												</li>
                                                <li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh5.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="?page=Detail" class="category"><p class="price">15.679.000đ</p></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh10.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Know exactly</a><br/>														
														<p class="price">18.500.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh9.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">Ut wisi enim ad</a><br/>											
														<p class="price">16.500.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">You think water</a><br/>													
														<p class="price">16.500.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="?page=Detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="?page=Detail" class="title">You think water</a><br/>													
														<p class="price">16.500.000đ</p>
													</div>
												</li>																														
											</ul>
										</div>
		
									</div>							
								</div>
							</div>						
						</div>
                        <div class="row feature_box">						
				<div class="span4">
					<div class="service">
						<div class="responsive">	
							<img src="themes/images/feature_img_2.png" alt="" />
							<h4>Modern <strong>Design</strong></h4>
							<p>The products are designed according to modern and trendy designs in accordance with current user trends.</p>
						</div>
					</div>
				</div>
				<div class="span4">	
					<div class="service">
						<div class="customize">			
							<img src="themes/images/feature_img_1.png" alt="" />
							<h4>Delivery <strong>Free</strong></h4>
							<p>Products are delivered quickly, neatly in many forms to meet customer requirements.</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="service">
						<div class="support">	
							<img src="themes/images/feature_img_3.png" alt="" />
							<h4>Serve <strong>24/7</strong></h4>
							<p>Customers are always first priority and are served 24/7.</p>
						</div>
					</div>
				</div>
			</div>
			
    <div class="product-widget-area">
        <div class="container">
					<div class="span12">													
						<div class="row">    
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- End product widget area -->
    
   
  