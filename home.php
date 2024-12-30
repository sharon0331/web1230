<!DOCTYPE html>

<html lang="en">

<head>

	<!--   Basic Page Needs  ================================================== -->
	<meta charset="utf-8">
	<title>遠距教學影片管理系統</title>

	<!--   Mobile Specific Metas  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="One page parallax responsive HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="generator" content="Themefisher Bingo HTML Template v1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" hre="/Users/nlkyiwang/Desktop/fju.gif" />

	<!--   CSS  ================================================== -->
	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- Lightbox.min css -->
	<link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<script>
		new Date(dateString);
	</script>

</head>

<body id="body">

	<!--  Start Preloader  ================================== -->
	<div id="preloader">
		<div class='preloader'>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--  End Preloader  ==================================== -->

	<!--  Fixed Navigation  ===================================== -->
	<header class="navigation fixed-top">
		<div class="container">
			<!-- main nav -->
			<nav class="navbar navbar-expand-lg navbar-light px-0">
				<!-- logo -->
				<a class="navbar-brand logo" href="home.html">
					<img loading="lazy" class="logo-default" style="width: 300px; height: auto;" src="https://images.squarespace-cdn.com/content/v1/5e1350e919199c488a7c6651/27961e07-46cd-49f3-8739-53e9df2c43cd/outer-banks-5eaed5543712c.png"
						alt="logo" />
					<img loading="lazy" class="logo-white" style="width: 300px; height: auto;" src="https://images.squarespace-cdn.com/content/v1/5e1350e919199c488a7c6651/27961e07-46cd-49f3-8739-53e9df2c43cd/outer-banks-5eaed5543712c.png"
						alt="logo" />
				</a>
				<!-- /logo -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav ml-auto text-center">
						
						<?php if (!isset($_SESSION['role'])): ?>
						<li class="nav-item dropdown active">
							<a class="nav-link" href="home.html">首頁</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="login.php">登入</a>
						</li>


						<?php elseif ($_SESSION['role'] == 'student'): ?>
						<li class="nav-item dropdown active">
							<a class="nav-link" href="home.html">首頁</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="course_center.html" id="navbarDropdown02" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								課程專區<i class="tf-ion-chevron-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
								<li><a class="dropdown-item" href="course_center.html">課程清單</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="logout.php">登出</a>
						</li>

						<?php elseif ($_SESSION['role'] == 'manager'): ?>
						<li class="nav-item dropdown active">
							<a class="nav-link" href="home.html">首頁</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="course_center.html" id="navbarDropdown02" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								課程專區<i class="tf-ion-chevron-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
								<li><a class="dropdown-item" href="course_center.html">課程清單</a></li>
								<li><a class="dropdown-item" href="views.html">觀看數據</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="member.html" id="navbarDropdown02" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								會員專區<i class="tf-ion-chevron-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown03">
								<li><a class="dropdown-item" href="member.html">會員管理</a></li>
								<li><a class="dropdown-item" href="add_member.htm">新增會員</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="authority.html">權限管理</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="logout.php">登出</a>
						</li>

						<?php elseif ($_SESSION['role'] == 'teacher'): ?>
						<li class="nav-item dropdown active">
							<a class="nav-link" href="home.html">首頁</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="course_center.html" id="navbarDropdown02" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								課程專區<i class="tf-ion-chevron-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
								<li><a class="dropdown-item" href="course_center.html">課程清單</a></li>
								<li><a class="dropdown-item" href="views.html">觀看數據</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="member.html" id="navbarDropdown02" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								會員專區<i class="tf-ion-chevron-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown03">
								<li><a class="dropdown-item" href="member.html">會員管理</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="logout.php">登出</a>
						</li>

						<?php endif; ?>
						</ul>
					  </div>
					</nav>
					
			<!-- /main nav -->
		</div>
	</header>
	<!--  End Fixed Navigation  ==================================== -->

	<!--  Welcome Slider  ==================================== -->
	<section class="hero-area" style="background-image: url('https://tipsmake.com/data2/images/download-wallpaper-surface-laptop-4-picture-4-RPPXrDy3O.jpg');
	background-size: cover; background-position:center; background-repeat: no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block mt-4">
						<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">OBX</h1>
						<h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">Distance Learning System</br>遠距教學影片管理系統</h3>
						</br><p id="dateAndTime"></p>
							<script>

								var dateAndTime = document.getElementById('dateAndTime');

								var currentTime = new Date();

								dateAndTime.innerHTML = currentTime;

							</script><br><br><br>
							<h3>歡迎來到首頁</h3>
							<?php if (isset($_SESSION['username'])): ?>
								<p>Hello! <?php echo htmlspecialchars($_SESSION['username']); ?> <?php echo htmlspecialchars($_SESSION['role']); ?>!</p>
							<?php else: ?>
								<p>您尚未登入。</p>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  Start Services Section  ==================================== -->
	<section class="services" id="services">
		<div class="container">
			<div class="row justify-content-center">
				<!-- section title -->
				<div class="col-xl-6 col-lg-8">
					<div class="title text-center">
						<h2>課程一覽</h2>
						<p>點擊你有興趣的課程...</p>
						<div class="border"></div>
					</div>
				</div>
				<!-- /section title -->
			</div>
			<div class="row no-gutters">

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 color-bg text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8270" style="color: white;">【競賽】全國最大資訊服務相關領域...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8270"
								style="color: white;">各位主任、先進們好：一年一度由中華民國資訊管理學會共同主辦之全國最大資訊服務相關領域學生專題創新競賽將於11月2日隆重盛大舉行。...</a>
						</p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8269">【徵才】靜宜大學資料科學暨大數據...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8269">靜宜大學 資料科學暨大數據分析與應用學系(簡稱: 資科系) 目前正在誠徵教師, 希望之專長領域為:
								人工智慧、資料科學(大數據)相關領域。...</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 color-bg text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8261" style="color: white;">【論文徵稿】第35屆國際資訊管理...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8261" style="color: white;">第35屆國際資訊管理學術研討會(ICIM2024)開始囉!
								相關訊息請參閱研討會網站: https://sites.google.com/view/icim-2024...</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4  text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8257">2024第一屆傳善論文獎</a></2024>
						</h3>
						<p><a href="https://www.csim.org.tw/news/8257">2024年陳永泰公益信託「傳善論文獎」(7/1-7/14止) 一、
								申請資格（一）科系：國內大專院校博士、碩士生（含在職生），不限系所。（...</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 color-bg text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8256" style="color: white;">【徵才】國立臺東大學資訊管理學系徵...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8256" style="color: white;">【徵聘公告】國立臺東大學資訊管理學系徵聘專任教師1名。國立臺東大學位於臺東市大學路、鄰近知本溫泉，
								航空1小时、火3.5小时可抵臺北，...</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8255">【徵才】國立成功大學工業與資訊管理...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8255">國立成功大學工業與資訊管理學系誠徵專任教師 【徵才公告】<br>一、 徵聘職級：專任助理教授以上...</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 color-bg text-center">
						<div class="service-icon text-center">
						</div>
						<h3><a href="https://www.csim.org.tw/news/8254" style="color: white;">【徵聘公告】國立東華大學資訊管理...</a></h3>
						<p><a href="https://www.csim.org.tw/news/8254" style="color: white;">一、誠徵助理教授(含)以上之專任(案)師資。二、名額：1 名。三、擬聘年度：預計自113年8月1日起聘...</a>
						</p>
					</div>
				</div>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
					<div class="service-block p-4 text-center">
						<div class="service-icon text-center"><br>
						</div>
						<h3>其他最新消息</h3>
						<p><a class="btn btn-main" href="https://www.csim.org.tw/news-taxonomy/all">閱讀更多</a></p>
					</div>
				</div>
				<!-- End Single Service Item -->

			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<!-- Start Pricing section
		=========================================== -->
	<section class="pricing-table" id="pricing">
		<div class="container">
			<div class="row justify-content-center">


<!-- Start Pricing section =========================================== -->
				<div class="col-xl-6 col-lg-8">
					<div class="title title-white text-center ">
						<h2>地址</h2>
						<p>我們就在這裡！<br>
						</p>
					</div>
				</div>
<!--================================
=            Google Map            =
=================================-->
				<div class="google-map">
					<div id="map_canvas" class="map_canvas"><iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.9337615467143!2d121.43007997564119!3d25.036321877814842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7dd8be91eaf%3A0xe342a67d6574f896!2z5aSp5Li75pWZ6LyU5LuB5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1730538712914!5m2!1szh-TW!2stw"
						width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe></div>
				</div>
				<!--====  End of Google Map  ====-->

				<footer id="footer" class="bg-one">
					<div class="top-footer">
						<div class="container">
							<div class="row justify-content-around">
								<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
									<h3>about</h3>
									<p>會址：新北市新莊區中正路510號</br>輔仁大學校園
									于斌樓2樓(依照學校作息) <br>
										e-mail：dean@mail.fju.edu.tw</p>
								</div>
								<!-- End of .col-sm-3 -->

								<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
									<ul>
										<li>
											<h3>資訊管理學會</h3>
										</li>
										<li><a href="https://www.csim.org.tw/news/8270">【競賽】全國最大資訊服務...
											</a></li>
										<li><a href="https://www.csim.org.tw/news/8261">【論文徵稿】第35屆國際...
											</a></li>
										<li><a href="https://www.csim.org.tw/news/8253">【選舉公告】中華民國資訊...
											</a></li>
										<br>
										<li><a href="https://www.csim.org.tw/news-taxonomy/29"
												style="text-align:initial">...更多</a></li>
									</ul>
								</div>
								<!-- End of .col-sm-3 -->

								<div class="col-lg-2 col-md-6 mb-5 mb-md-0">
									<ul>
										<li>
											<h3>學校</h3>
										</li>
										<li><a href="https://www.csim.org.tw/news/8269">【徵才】靜宜大學資料...</a></li>
										<li><a href="https://www.csim.org.tw/news/8268">【徵才】靜宜大學資料...</a></li>
										<li><a href="https://www.csim.org.tw/news/8257">2024第一屆傳善論文獎</a></li>
										<br>
										<li><a href="https://www.csim.org.tw/news-taxonomy/30" style="text-align: initial;">...更多</a></li>
									</ul>
								</div>
								<!-- End of .col-sm-3 -->

								<div class="col-lg-3 col-md-6">
									<ul>
										<li>
											<h3>業界</h3>
										</li>
										<li><a href="https://www.csim.org.tw/news/8181">【論文徵稿】第十一屆服務...</a></li>
										<li><a href="https://www.csim.org.tw/news/8158">【徵才公告】衛生福利部食...</a></li>
										<li><a href="https://www.csim.org.tw/news/8082">Drupal跨界整合之社群大會...</a></li>
									</ul>
								</div>
								<!-- End of .col-sm-3 -->

							</div>
						</div> <!-- end container -->
					</div>
				</footer> <!-- end footer -->


<!-- end Footer Area ========================================== -->

<!--  Essential Scripts =====================================-->
				<!-- Main jQuery -->
				<script src="plugins/jquery/jquery.min.js"></script>

				<!-- Bootstrap4 -->
				<script src="plugins/bootstrap/bootstrap.min.js"></script>
				<!-- Parallax -->
				<script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
				<!-- lightbox -->
				<script src="plugins/lightbox2/js/lightbox.min.js"></script>
				<!-- Owl Carousel -->
				<script src="plugins/slick/slick.min.js"></script>
				<!-- filter -->
				<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
				<!-- Smooth Scroll js -->
				<script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
				<!-- Custom js -->
				<script src="js/script.js"></script>

</body>

</html>