<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Pfizer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">

	<script type="text/javascript">
		function shownews(num)
		{
			//var in = 2;
			//document.getElementById("i"+num).src = "images1/n"+num+".jpg";
			document.getElementById("feed"+num).showModal();
		}
		function shownews2(num,img_id)
		{
			//var in = 2;
			document.getElementById("i"+num).src = "images1/n"+img_id+".jpg";
			document.getElementById("feed"+num).showModal();
		}
		function closefeed(num)
		{
			document.getElementById("feed"+num).close();
		}
	</script>
	
	
</head>
<body>
	
	<header>
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
						<li><a class="pl-0 pl-sm-10" href="our_purpose.html">Our purpose</a></li>
						<li><a href="our_people.html">Our people</a></li>
						<li><a href="list_drugs.php">Our products</a></li>
						<li><a href="contact_us.html">Connect with us</a></li>
					</ul>
					<!-- <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
					</ul>
					 -->
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<!-- <a class="logo" href="index.html"><img src="images/logo-black.png" alt="Logo"></a> -->
			
			<!-- <a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div> --><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li style="background-color: black;color: white "><a href="index.html"><b>HOME</b></a></li>
				<li class="drop-down"><a href="03_single-post.html">ANALYTICS<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="activity_ratio_graph.html">Activity Ratio</a></li>
						<li><a href="production_time_series_graph.html">production time series</a></li>
						<li><a href="loss_incurred_bar.html">production loss analytics</a></li>
						
					</ul>
				</li>
				<li><a href="drug_index.php">DRUG INDEX</a></li>
				<li><a href="search_failed_index.php">NEW DRUGS REQUESTED</a></li>
				<li><a href="search_history_index.php">DRUGS SEARCHED</a></li>
				
				<!-- <li><a href="symptoms_index.php">FIND YOUR DRUG</a></li>
				<li><a href="find_sellers_near_me.php">FIND SELLERS NEAR YOU</a></li>
				 --><!-- <li><a href="feedbacks.html">FEEDBACK</a></li> -->
				<li><a href="stock_index.php">PFIZER STOCK CHECK</a></li>
				<li><a href="seller_stock_check.php">STOCK CHECK</a></li>
				<li><a href="order_index.php">ORDER STOCK</a></li> 
				<li><a href="seller_loss_index.php">CHECK LOSS</a></li> 
				
				<li><a href="logout_producer.php">LOGOUT</a></li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
	<dialog id="feed1" ><div style="width: 300px;margin-left: 40% " ><img id = "i1" src="./images1/pfizer_growing_leadership.jpg" width="200px" height="300px"> </div>We are in the midst of a global public health threat. Without intervention, it is projected that 10 million lives will be lost each year by 2050 – that’s more people than currently die from cancer, measles and diabetes combined.Pfizer is deeply committed to working closely with the public health community and governments to take steps to tackle AMR. Two key reports from the Access to Medicines Foundation and AMR Industry Alliance were recently published to update on progress made by the pharmaceutical industry. The 2020 Benchmark report in particular recognizes Pfizer as one of the top two leading large research and development-based pharmaceutical companies in the infectious disease market. In fact, our leadership is growing, as recognized by a 9% increase in our overall score compared to the 2018 Benchmark report. <br><br><br><button onclick="closefeed(1)" style="color: red"><--close--></button></dialog>
	

	<dialog id="feed2" ><div style="width: 300px;margin-left: 40% " ><img id = "i2" src="./images1/n1.jpg" width="200px" height="300px"> </div><b>What is a coronavirus?</b><br>
Coronaviruses are a large family of viruses that are known to cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).
<br><br>
<b>What is a novel coronavirus?</b><br>
A novel coronavirus (CoV) is a new strain of coronavirus that has not been previously identified in humans.
<br><br>
<b>Can humans become infected with a novel coronavirus of animal source?</b><br>
Detailed investigations found that SARS-CoV was transmitted from civet cats to humans in China in 2002 and MERS-CoV from dromedary camels to humans in Saudi Arabia in 2012. Several known coronaviruses are circulating in animals that have not yet infected humans. As surveillance improves around the world, more coronaviruses are likely to be identified.
<br><br>
<b>What are the symptoms of someone infected with a coronavirus?</b><br>
It depends on the virus, but common signs include respiratory symptoms, fever, cough, shortness of breath, and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death. <br><br><br><button onclick="closefeed(2)" style="color: red"><--close--></button></dialog>
	



	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block"  onclick="shownews(1)">
					
						<div class="img-bg bg-grad-layer-6" style="background: url(./images1/pfizer_growing_leadership.jpg) no-repeat center; background-size: cover;"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>PFIZER'S GROWING LEADERSHIP IN AMR RECOGNIZED</b></h3>
							
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" onclick="shownews(2)">
						
							<div class="img-bg bg-2 bg-grad-layer-6" style="background: url(./images1/n1.jpg) no-repeat center; background-size: cover;"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>Coronavirus</b></h4>
								
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" onclick="shownews2(2,2)">
						
							<div class="img-bg bg-3 bg-grad-layer-6" style="background: url(./images1/n2.jpg) no-repeat center; background-size: cover;"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>pfizer's research on coronavirus</b></h4>
								
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block"  onclick="shownews2(1,7)">
					
						<div class="img-bg bg-4 bg-grad-layer-6" style="background: url(./images1/n7.jpg) no-repeat center; background-size: cover;"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Vaccine virus study</b></h4>
							
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" onclick="shownews2(2,6)">
					
						<div class="img-bg bg-5 bg-grad-layer-6" style="background: url(./images1/n6.jpg) no-repeat center; background-size: cover;"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>drug research</b></h4>
							
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block"  onclick="shownews2(1,5)">
					
						<div class="img-bg bg-6 bg-grad-layer-6" style="background: url(./images1/n5.jpg) no-repeat center; background-size: cover;"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Research on new antibiotics</b></h4>
							
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>RECENT NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="images1/n4.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(1,4)"><b>drug vitality <br/>bacterial vs fungul </b></a></h4>
							
							<p>bacterial drugs and fungal drugs comparision study </p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(1,3)">
								<div class="wh-100x abs-tlr"><img src="images1/n3.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>New Bacterial study</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(1,8)">
								<div class="wh-100x abs-tlr"><img src="images1/n8.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Benefits for farmers</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(1,7)">
								<div class="wh-100x abs-tlr"><img src="images1/n7.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>fungal study</b></h5>
								
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(2,5)">
								<div class="wh-100x abs-tlr"><img src="images1/n5.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Chemical composition in vaccines</b></h5>
								
								</div>
							</a><!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-30"><b>Our Recent Research</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="images1/n1.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(2,1)"><b>Coronavirsu<br/></b></a></h4>
							
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images1/n2.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(2,2)"><b>Vaccine for coronavirus</b></a></h4>
							
						</div><!-- col-sm-6 -->
					
						<div class="col-sm-6">
							<img src="images1/n3.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(2,3)"><b>Covid-19 researches</b></a></h4>
							
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images1/n4.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(2,4)"><b>Reduced side effects</b></a></h4>
						
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images1/n5.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(1,5)"><b>Drugs of the future</b></a></h4>
							
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images1/n6.jpg" alt="">
							<h4 class="pt-20"><a  onclick="shownews2(1,6)"><b>Preventive Measures</b></a></h4>
							
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<!-- <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" ><b>VIEW MORE CRYPTO MINING EVENTS</b></a>
				 --></div><!-- col-md-9 -->
				
				<!-- <div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
							<li><b>1 BTC = $13,2323</b></li>
							<li><b>1 BCH = $13,2323</b></li>
							<li><b>1 ETH = $13,2323</b></li>
							<li><b>1 LTC = $13,2323</b></li>
							<li><b>1 DAS = $13,2323</b></li>
							<li><b>1 BCC = $13,2323</b></li>
						</ul>
				 -->		
						<div class="mtb-50">
							<h4 class="p-title"><b>POPULAR POSTS</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(2,1)">
								<div class="wh-100x abs-tlr"><img src="images1/n1.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Coronavirus outrage</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(2,2)">
								<div class="wh-100x abs-tlr"><img src="images1/n2.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Virus Hidding in Plain Sight</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(1,3)">
								<div class="wh-100x abs-tlr"><img src="images1/n3.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>New vaacines developed</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block"  onclick="shownews2(1,4)">
								<div class="wh-100x abs-tlr"><img src="images1/n4.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>New antibiotics</b></h5>
									
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						
					<!-- 	<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div>
					 -->	
					</div>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	<!-- 
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-4">
						<div class="mb-30">
							<a href="#"><img src="images/logo-white.png"></a>
							<p class="mtb-20 color-ccc">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
							Powered by blockchain technology, its defining characteristic is</p>
							<p class="color-ash">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
			
				<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Jobs advertising</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
				<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
					<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-google"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
				</ul>
				
			</div>
		</div>
	</footer> -->
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>