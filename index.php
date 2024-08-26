<?php

//include functions and data
if(file_exists(__DIR__ .'/autoload.php')) {
    require_once __DIR__.'/autoload.php';
}
?>


<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Site Metas -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>Edg</title>


	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	<!-- fonts style -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

	<!-- font awesome style -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

	<div class="hero_area">
		<!-- header section strats -->
		<header class="header_section long_section px-0">

			<nav class="navbar navbar-expand-lg custom_nav-container ">
				<a class="navbar-brand" href="index.html">
					<span
						style="color:<?php echo $topbar['txt-color'];?>">
						<?php echo $topbar['title']; ?>
					</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class=""> </span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
						<ul class="navbar-nav">
							<?php foreach($topbar['topmenu'] as $topMenu):?>
							<li class="nav-item active">
								<a class="nav-link"
									style="color:<?php echo $topMenu['txt-color'];?>; font-weight: <?php echo $topMenu['txt_weight'];?>"
									href="<?php echo $topMenu['link'];?>"><?php echo $topMenu['name'];?>
									<span class="sr-only">(current)</span></a>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
					<div class="quote_btn-container">
						<a href="">
							<span>
								Login
							</span>
							<i class="fa fa-user" aria-hidden="true"></i>
						</a>
						<form class="form-inline">
							<button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
		<!-- end header section -->
		<!-- slider section -->

		<section class="slider_section long_section">
			<div id="customCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php

          foreach($sliders as $slide):?>
					<div class="carousel-item <?php echo $sliders[0]['title'] == $slide['title'] ? 'active' : '';
              ?>">
						<div class="container ">
							<div class="row">
								<div class="col-md-5">
									<div class="detail-box">
										<h1
											style="color: <?php echo $slide['txt-color']; ?>">
											<?php echo $slide ['title'];?>
										</h1>
										<p>
											<?php echo $slide ['desc'];?>
										</p>
										<div class="btn-box">
											<?php  foreach($slide['button'] as $btn):
											    ?>
											<a href="<?php echo $btn['link']; ?>"
												class="btn1"
												style="background-color: <?php echo $btn['bg_color']; ?>">
												<?php echo $btn['title']; ?>
											</a>
											<?php endforeach;?>
											<!--<a href="" class="btn2">
                        
                      </a>-->
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="img-box">
										<img src="<?php echo $slide ['photo'];?>"
											alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
					<!--<div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>-->
				</div>
				<ol class="carousel-indicators">
					<li data-target="#customCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#customCarousel" data-slide-to="1"></li>
					<li data-target="#customCarousel" data-slide-to="2"></li>
				</ol>
			</div>
		</section>
		<!-- end slider section -->
	</div>

	<!-- furniture section -->

	<section class="furniture_section layout_padding">
		<div class="container">
			<div class="heading_container">
				<h2
					style="color: <?php echo $flowerFerns['txt-color'];?>">
					<?php echo $flowerFerns['title'];?>
				</h2>
				<p
					style="font-style: <?php echo $flowerFerns['font_style'];?>; font-weight: <?php echo $flowerFerns['font_weight'];?>">
					<?php echo $flowerFerns['subtitle'];?>
				</p>
			</div>
			<div class="row">
				<?php foreach($flowerFerns['products'] as $product) :?>
				<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="<?php echo $product['photo'];?>"
								alt="">
						</div>
						<div class="detail-box">
							<h5>
								<?php echo $product['name'];?>
							</h5>
							<div class="price_box">
								<h6 class="price_heading">

									<?php if($product['sale_price'] == null): ?>
									<span>$</span>
									<?php echo $product['regular_price']; ?>
									<?php else: ?>
									<del><?php echo $product['regular_price']; ?></del>
									<?php echo $product['sale_price']; ?>
									<?php endif; ?>


								</h6>
								<a href="<?php echo $product['button']['link'];?>"
									style="color: <?php echo $product['button']['txt_color'];?>">
									<?php echo $product['button']['title'];?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<!--<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="images/f2.png" alt="">
						</div>
						<div class="detail-box">
							<h5>
								Double Bed Design
							</h5>
							<div class="price_box">
								<h6 class="price_heading">
									<span>$</span> 200.00
								</h6>
								<a href="">
									Buy Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="images/f3.png" alt="">
						</div>
						<div class="detail-box">
							<h5>
								House Chair Design
							</h5>
							<div class="price_box">
								<h6 class="price_heading">
									<span>$</span> 200.00
								</h6>
								<a href="">
									Buy Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="images/f4.png" alt="">
						</div>
						<div class="detail-box">
							<h5>
								brown Table Design
							</h5>
							<div class="price_box">
								<h6 class="price_heading">
									<span>$</span> 100.00
								</h6>
								<a href="">
									Buy Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="images/f5.png" alt="">
						</div>
						<div class="detail-box">
							<h5>
								Blue Chair Design
							</h5>
							<div class="price_box">
								<h6 class="price_heading">
									<span>$</span> 200.00
								</h6>
								<a href="">
									Buy Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="box">
						<div class="img-box">
							<img src="images/f6.png" alt="">
						</div>
						<div class="detail-box">
							<h5>
								Brown Table Design
							</h5>
							<div class="price_box">
								<h6 class="price_heading">
									<span>$</span> 200.00
								</h6>
								<a href="">
									Buy Now
								</a>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</section>

	<!-- end furniture section -->


	<!-- about section -->

	<section class="about_section layout_padding long_section"
		style="background-color:<?php echo $about['backgroung-color']; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="img-box">
						<img src="<?php echo $about['photo'];?>"
							alt="">
					</div>
				</div>

				<div class="col-md-6">
					<div class="detail-box">
						<div class="heading_container">
							<h2
								style="color:<?php echo $about['txt-color']; ?>">
								<?php echo $about['title'];?>
							</h2>
						</div>
						<p>
							<?php echo $about['desc'];?>
						</p>
						<a style="background-color: <?php echo $about['button']['bg_color'];?> "
							href="<?php echo $about['button']['link'];?>">
							<?php echo $about['button']['title'];?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end about section -->

	<!-- blog section -->

	<section class="blog_section layout_padding"
		style="background-color:  <?php echo $blogs['bg_color'];?>">
		<div class="container">
			<div class="heading_container">
				<h2
					style="color: <?php echo $blogs['txt_color'];?>">
					<?php echo $blogs['title'];?>
				</h2>
			</div>
			<div class="row">
				<?php foreach($blogs['blogList'] as $blog): ?>
				<div class="col-md-6 col-lg-4 mx-auto">
					<div class="box"
						style="display: <?php $blog['box-display'];?>">
						<div class="img-box"
							style="display: <?php echo $blog['box-display'];?>;">
							<img src="<?php echo $blog['photo']; ?>"
								alt="">
						</div>
						<div class="detail-box">
							<h5
								style="color:<?php echo $blog['txt_color'];?>">
								<?php echo $blog['title']; ?>
							</h5>
							<p>
								<?php echo $blog['desc']; ?>
							</p>
							<a href="<?php echo $blog['button']['link']; ?>"
								style="background-color: <?php echo $blog['button']['bg_color']; ?>;">
								<?php echo $blog['button']['title']; ?>
							</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<!-- end blog section -->

	<!-- client section -->

	<section class="client_section layout_padding-bottom">
		<div class="container">
			<div class="heading_container">
				<h2
					style="color: <?php echo $testimonial['txt_color'];?>; padding-top: <?php echo $testimonial['paddingTop'];?>">
					<?php echo $testimonial['title'];?>
				</h2>
			</div>
			<div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php foreach($testimonial['card'] as $cards):?>

					<div class="carousel-item <?php echo $testimonial['card'][0] == $cards[0] ? 'active' : '';
					    ?>">
						<div class="row">
							<div class="col-md-11 col-lg-10 mx-auto">
								<div class="box">
									<div class="img-box">
										<img src="<?php echo $cards['photo'];?>"
											alt="" />
									</div>
									<div class="detail-box">
										<div class="name">
											<i class="<?php echo $cards['icon'];?>"
												aria-hidden="true"></i>
											<h6>
												<?php echo $cards['name'];?>
											</h6>
										</div>
										<p>
											<?php echo $cards['desc'];?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>

					<div class="carousel_btn-container">
						<a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
							data-slide="prev">
							<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExample2Controls" role="button"
							data-slide="next">
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
	</section>

	<!-- end client section -->

	<!-- contact section -->
	<section class="contact_section  long_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="form_container">
						<div class="heading_container">
							<h2>
								Contact Us
							</h2>
						</div>
						<form action="">
							<div>
								<input type="text" placeholder="Your Name" />
							</div>
							<div>
								<input type="text" placeholder="Phone Number" />
							</div>
							<div>
								<input type="email" placeholder="Email" />
							</div>
							<div>
								<input type="text" class="message-box" placeholder="Message" />
							</div>
							<div class="btn_box">
								<button>
									SEND
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="map_container">
						<div class="map">
							<div id="googleMap"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact section -->

	<!-- info section -->
	<section class="info_section long_section">

		<div class="container">
			<div class="contact_nav">
				<a href="">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span>
						Call : +01 123455678990
					</span>
				</a>
				<a href="">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span>
						Email : demo@gmail.com
					</span>
				</a>
				<a href="">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>
						Location
					</span>
				</a>
			</div>

			<div class="info_top ">
				<div class="row ">
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="info_links">
							<h4>
								QUICK LINKS
							</h4>
							<div class="info_links_menu">
								<a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
								<a class="" href="about.html"> About</a>
								<a class="" href="furniture.html">Furniture</a>
								<a class="" href="blog.html">Blog</a>
								<a class="" href="contact.html">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
						<div class="info_post">
							<h5>
								INSTAGRAM FEEDS
							</h5>
							<div class="post_box">
								<div class="img-box">
									<img src="images/f1.png" alt="">
								</div>
								<div class="img-box">
									<img src="images/f2.png" alt="">
								</div>
								<div class="img-box">
									<img src="images/f3.png" alt="">
								</div>
								<div class="img-box">
									<img src="images/f4.png" alt="">
								</div>
								<div class="img-box">
									<img src="images/f5.png" alt="">
								</div>
								<div class="img-box">
									<img src="images/f6.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info_form">
							<h4>
								SIGN UP TO OUR NEWSLETTER
							</h4>
							<form action="">
								<input type="text" placeholder="Enter Your Email" />
								<button type="submit">
									Subscribe
								</button>
							</form>
							<div class="social_box">
								<a href="">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
								<a href="">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
								<a href="">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a>
								<a href="">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end info_section -->


	<!-- footer section -->
	<footer class="footer_section">
		<div class="container">
			<p>
				&copy; <span id="displayYear"></span> All Rights Reserved By
				<a href="https://html.design/">Free Html Templates</a>
			</p>
		</div>
	</footer>
	<!-- footer section -->


	<!-- jQery -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.js"></script>
	<!-- custom js -->
	<script src="js/custom.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
	</script>
	<!-- End Google Map -->

</body>

</html>