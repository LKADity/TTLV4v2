<?php 
$item_number = 4;
// array of product display
$item = array(
	array(
		'name' => "Sakarias Armchair", 
		'type' => "chair",
		'star' => 10,
		'price' => 392
	), 
	array(
		'name' => "Baltsar Chair", 
		'type' => "chair",
		'star' => 8,
		'price' => 299
	), 
	array(
		'name' => "Anjay Chair", 
		'type' => "chair",
		'star' => 6,
		'price' => 519
	), 
	array(
		'name' => "Nyantuy Chair", 
		'type' => "chair",
		'star' => 9,
		'price' => 921
	)
);
$testimoni = array(
	array(
		'name' => "Bang Upin", 
		'job' => "Pedangan Asongan",
		'star' => 8,
		'quote' => "Terimakasih banyak, kini ruanganku menjadi lebih mewah dan terlihat mahal"
	), 
	array(
		'name' => "Ibuk Sukijan", 
		'job' => "Ibu Rumah Tangga",
		'star' => 10,
		'quote' => "Makasih Panto, aku sekarang berasa tinggal di apartement karena barang-barang yang terlihat mewah"
	), 
	array(
		'name' => "Mpok Ina", 
		'job' => "Karyawan Swasta",
		'star' => 9,
		'quote' => "Sangat terjangkau untuk kantong saya yang tidak terlalu banyak"
	)
);

// var_dump($item)
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="last-modified" content="17/06/2022">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Technical Test LV4</title>
	
</head>
<body>
	<!-- Navigation Bar -->
	<nav id="navigationBar" class="navbar navbar-expand-lg bg-dark bg-opacity-75 fixed-top">
		<div class="container-fluid m-3">
		    <a class="navbar-brand text-light fw-bold" href="#">Panto</a>	    
		    
		    <!-- Hamburger Menu Enabler in SP Display -->
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburgerMenu" aria-controls="hamburgerMenu" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
	    	</button> 
		    
		    <!-- Hamburger Menu Content -->
		    <div class="collapse navbar-collapse justify-content-center" id="hamburgerMenu">
		    	<ul class="navbar-nav">
			        <li class="nav-item dropdown ms-3 me-3">
		            	<a class="nav-link dropdown-toggle text-light" href="#" id="furniture" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            		Furniture
		            	</a>
		            	<ul class="dropdown-menu bg-dark" aria-labelledby="furniture">
			                <li><a class="dropdown-item text-light text-opacity-75" href="#">Chair</a></li>
			                <li><a class="dropdown-item text-light text-opacity-75" href="#">Beds</a></li>
			                <li><a class="dropdown-item text-light text-opacity-75" href="#">Sofa</a></li>
			                <li><a class="dropdown-item text-light text-opacity-75" href="#">Lamp</a></li>

			                <!-- Dropdown Divider if needed  -->
			                <!-- <li><hr class="dropdown-divider"></li> -->

		            	</ul>
		            </li>
			        <li class="nav-item ms-3 me-3">
			          <a class="nav-link text-light" href="#">Shop</a>
			        </li>
			        <li class="nav-item ms-3 me-3">
			          <a class="nav-link text-light" href="#">About Us</a>
			        </li>
			        <li class="nav-item ms-3 me-3">
			          <a class="nav-link text-light">Contact</a>
			        </li>
	                <li><hr class="dropdown-divider"></li>
	                <!-- The Search Box Moved to Navbar in SP Display -->
	                <li class="nav-item border border-light rounded-pill d-block d-md-none ms-2 me-3">
		    			<form class="d-flex " role="search">
		    			    <input class="form-control bg-transparent border-0 text-light" type="search" placeholder="Search" aria-label="Search">
		    			    <button class="btn bg-warning rounded-circle" type="submit">
		    			    	<img src="assets\icon\search.svg" class="img-fluid rounded-circle">
		    			    </button>
					    </form>
	                </li>
				</ul>
		    </div>
		</div>
	    <!-- The Difficult Icon to manage -->
		<div class="container-fluid position-absolute d-none d-lg-block" style="left: 95%;">
		    <img class="" src="assets/icon/00-cart-01.png" alt="00-cart-01">
		</div>
	</nav>

	<!-- Something Under Construction Here -->

	<!-- Main Banner Section -->
	<div id="mainBanner" class="carousel slide mb-5" data-bs-ride="false">
		<div class="carousel-indicators">
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		
		<!-- Main Banner Content -->
		<div class="carousel-inner">
		    <div class="carousel-item active">
			    <img src="assets/picture/01_TopBanner_01.png" class="d-block w-100" alt="01_TopBanner_01">
			</div>
			<div class="carousel-item">
			    <img src="assets/picture/01_TopBanner_02.png" class="d-block w-100" alt="01_TopBanner_02">
			</div>
			<div class="carousel-item">
			    <img src="assets/picture/01_TopBanner_03.png" class="d-block w-100" alt="01_TopBanner_03">
		    </div>

		    <!-- PC Display Container -->
		    <div class="container-fluid position-absolute d-none d-lg-block" style="top: 10%">
		    	<div class="row row-cols-3">
		    		<div class="col-sm-2"></div>
		    		<div class="col-sm-8">
		    			<p class="fw-bold text-light text-center" style="font-size: 60px;">Make Your Interior More Minimalistic & Modern</p>
		    		</div>
		    		<div class="col-sm-2"></div>
		    		<div class="col-sm-3"></div>
		    		<div class="col col-sm-6">
		    			<p class="fs-5 text-light text-opacity-75 text-center">Turn your room with panto into a lot more minimalist and modern with ease and speed</p>
		    		</div>
		    		<div class="col-sm-3"></div>
		    		<div class="col-sm-4 me-5"></div>
		    		<div class="col-sm-3 border border-light bg-secondary bg-opacity-50 rounded-pill">
		    			<form class="d-flex " role="search">
		    			    <input class="form-control bg-transparent border-0 text-light" type="search" placeholder="Search" aria-label="Search">
		    			    <button class="btn bg-warning rounded-circle" type="submit">
		    			    	<img src="assets\icon\search.svg" class="img-fluid rounded-circle">
		    			    </button>
	    			    </form>
		    		</div>
		    		<div class="col-sm-4"></div>
		    	</div>
		    </div>

		    <!-- SP Display Container -->
		    <div class="container-fluid position-absolute d-block d-lg-none" style="top: 25%">
		    	<div class="row row-cols-1">
		    		<div class="col ps-3 pe-3">
		    			<h5 class="text-light text-center text-break">Make Your Interior More Minimalistic & Modern</h5>
		    		</div>
		    		<div class="col-sm-6 ps-5 pe-5">
		    			<p class="text-secondary text-center text-break" style="font-size: 10px;">Turn your room with panto into a lot more minimalist and modern with ease and speed</p>
		    		</div>
		    	</div>
		    </div>
		</div>

		<!-- Caroussel Control -->
		<button class="carousel-control-prev" type="button" data-bs-target="#mainBanner" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#mainBanner" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>
	</div>
	
	<!-- Benefit Section -->
	<div id="benefit" class="container-fluid bg-body mt-5 mb-5">
		<div class="row">
			<div class="col-sm pt-5 pb-1">
				<h2 href="fw-bold text-start">Why Choosing Us</h2>
			</div>
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Luxury facilities</h4>
				<p>You can get a workspace of the highst quality at an affordable price and still enjoy the facilities that are oly here.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Affordable Price</h4>
				<p>The advantage of hiring a workspace with us is that givees you comfortable service and all-around facilities.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Many Choices</h4>
				<p>We provide many unique work space choices so that you can choose the workspace to your liking.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
		</div>
	</div>

	<!-- Product Display Section -->
	<div id="productDisplayFilter" class="container-fluid bg-secondary bg-opacity-10 mt-5 pt-5">
		<div class="row row-cols-1">
			<div class="col">
				<h1 class="text-dark text-center">Best Selling Product</h1>
			</div>
			<div class="col-sm-4"></div>
			<div class="col col-sm-4 bg-secondary bg-opacity-25 rounded-pill">
				<div class="row row-cols-4">
					<div class="col-sm-3">
						<button class="btn bg-light rounded-pill w-100 active" id="chairButton">Chair</button>
					</div>
					<div class="col-sm-3">
						<button class="btn rounded-pill w-100" id="bedsButton">Beds</button>
					</div>
					<div class="col-sm-3">
						<button class="btn rounded-pill w-100" id="sofaButton">Sofa</button>
					</div>
					<div class="col-sm-3">
						<button class="btn rounded-pill w-100" id="lampButton">Lamp</button>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<div id="productDisplayPCBox" class="container-fluid bg-secondary bg-opacity-10 d-none d-md-block mb-5 p-5">
		<div id="productDisplayPC" class="carousel slide" data-bs-ride="carousel">
			<!-- Multiple Item Display per Slide -->
			<div class="carousel-inner">

			    <!-- PC Display Item set 1 -->
			    <div class="carousel-item active">
			    	<div class="row">
			    		<div class="col">
					    	<div class="card bg-transparent mt-3 mb-3 ms-3">
						    	<img src="assets\picture\03b_ChairDisplay_01.png" class="img-fluid" alt="03b_ChairDisplay_01">
						    	<div class="card-body bg-light">
							    	<p class="card-text text-muted mb-0"><?php echo $item[0]['type']; ?></p>
							    	<h4 class="card-text text-black"><?php echo $item[0]['name']; ?></h4>
							    	<img src="assets\icon\Star\10.png" class="img-fluid w-25">
							    	<div class="row row-cols-2">
								    	<p class="card-text text-warning col">$<?php echo $item[0]['price']; ?></p>
							    		<h1 class="card-text text-dark col text-end">+</h1>
							    	</div>
						    	</div>
					    	</div>
			    		</div>
			    		<div class="col">
					    	<div class="card bg-transparent mt-3 mb-3">
						    	<img src="assets\picture\03b_ChairDisplay_02.png" class="img-fluid" alt="03b_ChairDisplay_02">
						    	<div class="card-body bg-light">
							    	<p class="card-text text-muted mb-0"><?php echo $item[1]['type']; ?></p>
							    	<h4 class="card-text text-black"><?php echo $item[1]['name']; ?></h4>
							    	<img src="assets\icon\Star\7.png" class="img-fluid w-25">
							    	<div class="row row-cols-2">
								    	<p class="card-text text-warning col">$<?php echo $item[1]['price']; ?></p>
							    		<h1 class="card-text text-dark col text-end">+</h1>
							    	</div>
						    	</div>
					    	</div>
			    		</div>
			    		<div class="col">
					    	<div class="card bg-transparent mt-3 mb-3">
						    	<img src="assets\picture\03b_ChairDisplay_03.png" class="img-fluid" alt="03b_ChairDisplay_03">
						    	<div class="card-body bg-light">
							    	<p class="card-text text-muted mb-0"><?php echo $item[2]['type']; ?></p>
							    	<h4 class="card-text text-black"><?php echo $item[2]['name']; ?></h4>
							    	<img src="assets\icon\Star\6.png" class="img-fluid w-25">
							    	<div class="row row-cols-2">
								    	<p class="card-text text-warning col">$<?php echo $item[2]['price']; ?></p>
							    		<h1 class="card-text text-dark col text-end">+</h1>
							    	</div>
						    	</div>
					    	</div>
			    		</div>
			    		<div class="col">
					    	<div class="card bg-transparent mt-3 mb-3 me-3">
						    	<img src="assets\picture\03b_ChairDisplay_04.png" class="img-fluid" alt="03b_ChairDisplay_04">
						    	<div class="card-body bg-light">
							    	<p class="card-text text-muted mb-0"><?php echo $item[3]['type']; ?></p>
							    	<h4 class="card-text text-black"><?php echo $item[3]['name']; ?></h4>
							    	<img src="assets\icon\Star\9.png" class="img-fluid w-25">
							    	<div class="row row-cols-2">
								    	<p class="card-text text-warning col">$<?php echo $item[3]['price']; ?></p>
							    		<h1 class="card-text text-dark col text-end">+</h1>
							    	</div>
						    	</div>
					    	</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			<!-- Caroussel Control -->
			<button class="carousel-control-prev" type="button" data-bs-target="#productDisplayPC" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#productDisplayPC" data-bs-slide="next">
			    <span class="carousel-control-next-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="d-flex flex-row p-5">
			<div class="col">
				<a class="text-danger text-center" href="#">View All =></a>
			</div>
			
		</div>
	</div>
	
	<div id="productDisplaySPBox" class="container-sm  bg-secondary bg-opacity-10 col-sm-12 d-block d-md-none mb-5 p-5">
		<div id="productDisplaySP" class="carousel slide bg-secondary bg-opacity-10" data-bs-ride="carousel">
			<div class="carousel-inner">
			    <!-- SP Display Item 1 -->
			    <div class="carousel-item active">
			    	<div class="card bg-transparent">
				    	<img src="assets\picture\03b_ChairDisplay_01.png" class="img-fluid" alt="03b_ChairDisplay_01">
				    	<div class="card-body bg-light">
					    	<p class="card-text text-muted mb-0"><?php echo $item[0]['type']; ?></p>
					    	<h4 class="card-text text-black"><?php echo $item[0]['name']; ?></h4>
					    	<img src="assets\icon\Star\10.png" class="img-fluid w-25">
					    	<div class="row row-cols-2">
						    	<p class="card-text text-warning col">$<?php echo $item[0]['price']; ?></p>
					    		<h1 class="card-text text-dark col text-end">+</h1>
					    	</div>
				    	</div>
			    	</div>
			    </div>
			    <!-- SP Display Item 2 -->
			    <div class="carousel-item">
			    	<div class="card bg-transparent">
				    	<img src="assets\picture\03b_ChairDisplay_02.png" class="img-fluid" alt="03b_ChairDisplay_02">
				    	<div class="card-body bg-light">
					    	<p class="card-text text-muted mb-0"><?php echo $item[1]['type']; ?></p>
					    	<h4 class="card-text text-black"><?php echo $item[1]['name']; ?></h4>
					    	<img src="assets\icon\Star\7.png" class="img-fluid w-25">
					    	<div class="row row-cols-2">
						    	<p class="card-text text-warning col">$<?php echo $item[1]['price']; ?></p>
					    		<h1 class="card-text text-dark col text-end">+</h1>
					    	</div>
				    	</div>
			    	</div>
			    </div>
			    <!-- SP Display Item 3 -->
		    	<div class="carousel-item">
			    	<div class="card bg-transparent">
				    	<img src="assets\picture\03b_ChairDisplay_03.png" class="img-fluid" alt="03b_ChairDisplay_03">
				    	<div class="card-body bg-light">
					    	<p class="card-text text-muted mb-0"><?php echo $item[1]['type']; ?></p>
					    	<h4 class="card-text text-black"><?php echo $item[1]['name']; ?></h4>
					    	<img src="assets\icon\Star\6.png" class="img-fluid w-25">
					    	<div class="row row-cols-2">
						    	<p class="card-text text-warning col">$<?php echo $item[1]['price']; ?></p>
					    		<h1 class="card-text text-dark col text-end">+</h1>
					    	</div>
				    	</div>
			    	</div>
			    </div>
			    <!-- SP Display Item 4 -->
			    <div class="carousel-item">
			    	<div class="card bg-transparent">
				    	<img src="assets\picture\03b_ChairDisplay_04.png" class="img-fluid" alt="03b_ChairDisplay_04">
				    	<div class="card-body bg-light">
					    	<p class="card-text text-muted mb-0"><?php echo $item[1]['type']; ?></p>
					    	<h4 class="card-text text-black"><?php echo $item[1]['name']; ?></h4>
					    	<img src="assets\icon\Star\9.png" class="img-fluid w-25">
					    	<div class="row row-cols-2">
						    	<p class="card-text text-warning col">$<?php echo $item[1]['price']; ?></p>
					    		<h1 class="card-text text-dark col text-end">+</h1>
					    	</div>
				    	</div>
			    	</div>
			    </div>
			</div>
			<!-- Caroussel Control -->
			<button class="carousel-control-prev" type="button" data-bs-target="#productDisplaySP" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#productDisplaySP" data-bs-slide="next">
			    <span class="carousel-control-next-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<!-- Explanation Section -->
	<div id="explainationPC" class="container-fluid bg-body mt-5 mb-5">
		<div class="row">
			<div class="col-sm-6 pt-5">
				<img src="assets\picture\04a_Showcase_00.png" class="img-fluid rounded float-left">
			</div>
			<div class="col-sm-6 pt-5">
				<h4 class="mb-3">Luxury facilities</h4>
				<p>You can get a workspace of the highst quality at an affordable price and still enjoy the facilities that are oly here.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<div class="col-sm-6 pt-5">
				<h4 class="mb-3">Affordable Price</h4>
				<p>The advantage of hiring a workspace with us is that givees you comfortable service and all-around facilities.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<div class="col-sm-6 pt-5">
				<img src="assets\picture\04b_Showcase_00.png" class="img-fluid rounded float-right">
			</div>
		</div>
	</div>

	<!-- Testimoni Display Section -->
	<div id="testimonialDisplayPCBox" class="container-fluid bg-secondary bg-opacity-10 d-none d-md-block mb-5 p-5">
		<div id="testimonialDisplayPC" class="carousel slide" data-bs-ride="carousel">
			<!-- Multiple Item Display per Slide -->
			<div class="carousel-inner">

			    <!-- PC Display Item set 1 -->
			    <div class="carousel-item active">
			    	<div class="row">
			    		<div class="col">
					    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
						    	<img src="assets\picture\05_BottomCarousel_01.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
						    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
							    	<div class="row row-cols-1">
						    			<div class="col">
									    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[0]['name']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-muted mb-3"><?php echo $testimoni[0]['job']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-break ps-3 pe-3"><?php echo $testimoni[0]['quote']; ?></p>
						    			</div>
						    			<div class="col">
									    	<img src="assets\icon\Star\8.png" class="img-fluid w-25">
						    			</div>
						    		</div>
						    	</div>
						    	<div class="container-fluid position-absolute" style="top: 44%;">
							    	<img src="assets/picture/05_BottomCarousel_01b.png" class="img-fluid border border-5 border-light rounded-circle">
						    	</div>
					    	</div>
			    		</div>
			    		<div class="col">
					    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
						    	<img src="assets\picture\05_BottomCarousel_02.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
						    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
						    		<div class="row row-cols-1">
						    			<div class="col">
									    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[1]['name']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-muted mb-3"><?php echo $testimoni[1]['job']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-break ps-3 pe-3"><?php echo $testimoni[1]['quote']; ?></p>
						    			</div>
						    			<div class="col">
									    	<img src="assets\icon\Star\10.png" class="img-fluid w-25">
						    			</div>
						    		</div>
						    	</div>
						    	<div class="container-fluid position-absolute" style="top: 44%;">
							    	<img src="assets/picture/05_BottomCarousel_02b.png" class="img-fluid border border-5 border-light rounded-circle">
						    	</div>
					    	</div>
			    		</div>
			    		<div class="col">
					    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
						    	<img src="assets\picture\05_BottomCarousel_03.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
						    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
							    	<div class="row row-cols-1">
						    			<div class="col">
									    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[2]['name']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-muted mb-3"><?php echo $testimoni[2]['job']; ?></p>
						    			</div>
						    			<div class="col">
									    	<p class="card-text text-break ps-3 pe-3"><?php echo $testimoni[2]['quote']; ?></p>
						    			</div>
						    			<div class="col">
									    	<img src="assets\icon\Star\9.png" class="img-fluid w-25">
						    			</div>
						    		</div>
						    	</div>
						    	<div class="container-fluid position-absolute" style="top: 50%;">
							    	<img src="assets/picture/05_BottomCarousel_03b.png" class="img-fluid border border-5 border-light rounded-circle">
						    	</div>
					    	</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			<!-- Caroussel Control -->
			<button class="carousel-control-prev" type="button" data-bs-target="#testimonialDisplayPC" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#testimonialDisplayPC" data-bs-slide="next">
			    <span class="carousel-control-next-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="d-flex flex-row p-5">
			<div class="col">
				<a class="text-danger text-center" href="#">View All =></a>
			</div>
			
		</div>
	</div>

	<div id="testimonialDisplaySPBox" class="container-fluid bg-secondary bg-opacity-10 d-block d-md-none mb-5 p-5">
		<div id="testimonialDisplaySP" class="carousel slide" data-bs-ride="carousel">
			<!-- Multiple Item Display per Slide -->
			<div class="carousel-inner">

			    <!-- SP Display Item 1 -->
			    <div class="carousel-item active">
			    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
				    	<img src="assets\picture\05_BottomCarousel_01.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
				    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
					    	<div class="row row-cols-1">
				    			<div class="col">
							    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[0]['name']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-muted mb-3"><?php echo $testimoni[0]['job']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-break ps-3 pe-3"><?php echo $testimoni[0]['quote']; ?></p>
				    			</div>
				    			<div class="col">
							    	<img src="assets\icon\Star\8.png" class="img-fluid w-25">
				    			</div>
				    		</div>
				    	</div>
				    	<div class="container-fluid position-absolute" style="top: 32%;">
					    	<img src="assets/picture/05_BottomCarousel_01b.png" class="img-fluid border border-5 border-light rounded-circle">
				    	</div>
			    	</div>
	    		</div>
			    
			    <!-- SP Display Item 2 -->
			    <div class="carousel-item">
			    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
				    	<img src="assets\picture\05_BottomCarousel_02.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
				    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
				    		<div class="row row-cols-1">
				    			<div class="col">
							    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[1]['name']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-muted mb-3"><?php echo $testimoni[1]['job']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-break ps-3 pe-3"><?php echo $testimoni[1]['quote']; ?></p>
				    			</div>
				    			<div class="col">
							    	<img src="assets\icon\Star\10.png" class="img-fluid w-25">
				    			</div>
				    		</div>
				    	</div>
				    	<div class="container-fluid position-absolute" style="top: 25%;">
					    	<img src="assets/picture/05_BottomCarousel_02b.png" class="img-fluid border border-5 border-light rounded-circle">
				    	</div>
			    	</div>
	    		</div>
			    
			    <!-- SP Display Item 2 -->
			    <div class="carousel-item">
			    	<div class="card bg-transparent text-center rounded-4 mt-3 mb-3 ms-3">
				    	<img src="assets\picture\05_BottomCarousel_03.png" class="img-fluid rounded-4" alt="05_BottomCarousel_01">
				    	<div class="card-body bg-light position-absolute bottom-0 rounded-4 m-3">
					    	<div class="row row-cols-1">
				    			<div class="col">
							    	<p class="card-text fs-5 fw-bold text-black mt-2"><?php echo $testimoni[2]['name']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-muted mb-3"><?php echo $testimoni[2]['job']; ?></p>
				    			</div>
				    			<div class="col">
							    	<p class="card-text fs-6 text-break ps-3 pe-3"><?php echo $testimoni[2]['quote']; ?></p>
				    			</div>
				    			<div class="col">
							    	<img src="assets\icon\Star\9.png" class="img-fluid w-25">
				    			</div>
				    		</div>
				    	</div>
				    	<div class="container-fluid position-absolute" style="top: 32%;">
					    	<img src="assets/picture/05_BottomCarousel_03b.png" class="img-fluid border border-5 border-light rounded-circle">
				    	</div>
			    	</div>
			    </div>
			</div>
			<!-- Caroussel Control -->
			<button class="carousel-control-prev" type="button" data-bs-target="#testimonialDisplaySP" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#testimonialDisplaySP" data-bs-slide="next">
			    <span class="carousel-control-next-icon bg-dark bg-opacity-25" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<!-- Section Break Point -->

	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		.form-control::placeholder {
		  color: white;
		  opacity: 1;
		}
	</style>
</body>
</html>