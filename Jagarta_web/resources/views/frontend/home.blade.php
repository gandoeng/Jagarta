@extends('frontend.layouts.app')

@section('title', __('Home Page'))

@section('content')
	<main>
		<section>
			<div class="container-fluid particle-position">
				<div id="particles-js">			
					<p class="title1">Integrated Advice.</p>
					<p class="text-center title2">Collaborative Solutions</p>
				</div>
			</div>
		</section>

		<!--welcome-->
		<section class="section-leader-welcome">
			<div class="container height-300">
				<div class="row justify-content-center height-300" style="padding-top: 4%;">
					<div class="col-4 col-md-4 col-lg-4 col-sm-8 col-xs-12 p-white">
						<h1 class="h1-call">Welcome</h1>
						<h1 class="h1-call-future">Future</h1>
						<h1 class="h1-call-leader">Leader!</h1>
					</div>
					<div class="col-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 p-white" style="margin-top: 30px;">
						<p style="font-size: 14pt;">Jagartha group is a boutique, independently-owned Indonesia headquartered investment advisory firm overseeing more than $200mm+ capital dedicated to investing in Indonesia both in capital market and alternative assets.</p>
						<p>Established in 2017, Jagartha Group focused on Capital Market, Circular Economy and Creative Industry At Jagartha, our mission is to enable our clients to achieve their financial objectives and solve their investment challenges by integrating sustainability across our offering and invesment solutions</p>
					</div>
				</div>
			</div>
		</section>

		<!--About Us-->
		<section class="section-about" >
			<div id="about">
				<div class="container height-700" >
					<div class="row height-700" >
						<div class="col-lg-12 height-200">
							<h1 class="text-center about-title">About Us <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12 col-title-desc">
							<p class="text-center p-title-desc" >Independent Financial Advisor | Pension Fund | Asset Management | Local Institution | Individual | Foreign Institution</p>
						</div>
						<div class="col-lg-12 col-card">
							<div id="carouselAbout" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item carousel-ps active">
										<div class="card card-ps">
											<div class="row m-top-10">
											 	<div class="col-md-6">
											 		<h5 class="h5-card-title">Independent Financial Advisor</h5>
											 		<p class="font-jagarta">Our scope of services Estabilished in 2017, Jagartha Group quickly grow as integrated ecosystem builder across the Industry with focused on Capital Market, Circular Economy and Creative Industry</p>
											 	</div>
											 	<div class="col-md-6">
											 		<img src="{{asset('img/about/about1.png')}}" class="img-size-max">
											 	</div>
											</div>
										</div>										
									</div>
									<div class="carousel-item carousel-ps">
										<div class="card card-ps">
											<div class="row m-top-10" >
											 	<div class="col-md-6">
											 		<h5 class="h5-card-title">Independent Financial Advisor</h5>
											 		<p class="font-jagarta">Our scope of services Estabilished in 2017, Jagartha Group quickly grow as integrated ecosystem builder across the Industry with focused on Capital Market, Circular Economy and Creative Industry</p>
											 	</div>
											 	<div class="col-md-6">
											 		<img src="{{asset('img/about/about1.png')}}" class="img-size-max">
											 	</div>
											</div>
										</div>										
									</div>

								<a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev">
									<i class="fas fa-angle-double-left coroulus-i"></i>
   									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
    								<i class="fas fa-angle-double-right coroulus-i" ></i>    							
    								<span class="sr-only">Next</span>
 								</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section our value -->
		<section class="section-value">
			<div class="col-lg-12 height-200">
				<div class="container height-300">
					<div class="row height-300">
						<div class="col-lg-12">
							<h1 class="text-center value-title">Our Value <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12 col-value-text" >
							<p class="value-text-ps">Irure dolore incididunt veniam eiusmod tempor tempor dolore enim voluptate aute aliqua exercitation veniam magna dolor est dolor do ea nisi occaecat irure deserunt veniam ut mollit exercitation do eiusmod dolore duis qui ut sint amet do nisi cupidatat laborum cillum aliquip tempor dolore quis eiusmod do veniam minim commodo laborum aliqua mollit in adipisicing commodo adipisicing proident non laborum est commodo qui pariatur deserunt sint cillum occaecat ut labore dolore ut dolore excepteur ea in ex labore magna laboris occaecat in ea nisi elit ut irure in non elit excepteur consectetur commodo ut dolor fugiat ut aliquip duis ut ex occaecat cupidatat reprehenderit dolor adipisicing nostrud sed quis quis consectetur dolore in in ut nostrud sunt .</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-history">
			<div class="container height-700">
				<div class="row height-700">
					<div class="col-lg-12">
						<h1 class="text-center about-title">Our History <hr class="about-border"> </h1>
					</div>
					<div class="col-lg-12 ps-12-history">
						<div id="carouselHistory" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">					
								<div id="timeline-wrap">

									<!--item 1-->
									<div class="carousel-item active">
										<div class="item-ln-ps">
											<div id="timeline" class="timeline-ps" ></div>
											<div class="row">
												<!--item field-->
												<!--2017-->
												<div class="col">
  													<div class="row item-col-ps">
  														<div class="col">
  															<div class="marker mfirst timeline-icon one">
  																<p class="p-timeline">2017</p>
  															</div>
  														</div>
  														<div class="w-100"></div>
  														<div class="col">
  															<p class="p-item1-ps">Tempor mollit ea consequat dolor officia nostrud adipisicing aliqua nisi excepteur ut ex dolor enim ut nulla eu veniam sint eu commodo occaecat.</p>
  														</div>
  													</div>
  												</div>
  												<!--2019-->
  												<div class="col">
  													<div class="row item-col-ps">
  														<div class="col" style="margin-right: 50%;">
  															<div class="marker m2 timeline-icon two">
  																<p class="p-timeline">2019</p>
  															</div>
  														</div>
  														<div class="w-100"></div>
  														<div class="col">
  															<p class="p-item2-ps">Lorem ipsum elit sit cillum cupidatat est sint minim ex cillum elit cupidatat tempor dolor aute velit tempor non nostrud adipisicing culpa cupidatat.</p>
  														</div>
  													</div>
  												</div>
  												<!--2021-->
  												<div class="col">
    												<div class="row item-col-ps">
  														<div class="col" style="margin-right: 60%;">
  															<div class="marker m3 timeline-icon three" style="position: relative;">
																<p class="p-timeline">2021</p>
															</div>
  														</div>
  														<div class="w-100"></div>
  														<div class="col">
  															<p class="p-item3-ps">Lorem ipsum consequat aliquip reprehenderit do excepteur velit sunt sed dolore mollit dolore ut cupidatat est irure non mollit do occaecat tempor in cupidatat fugiat deserunt cupidatat.</p>
  														</div>
  													</div>	
   												</div>
   												<!--item field end-->
											</div>
										</div>
									</div>	

									<!--item 2 -->


								</div>
							</div>

							<a class="carousel-control-prev" href="#carouselHistory" role="button" data-slide="prev">
								<i class="fas fa-angle-double-left coroulus-i"></i>
   								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselHistory" role="button" data-slide="next">
    							<i class="fas fa-angle-double-right coroulus-i"></i>    					
    							<span class="sr-only">Next</span>
 							</a>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- section our team -->
		<section class="section-team">
			<div class="container height-1000">
				<div class="row height-1000">
					<div class="col-lg-12" style="height: 50px;">
						<h1 class="text-center about-team">Our Team <hr class="about-border"> </h1>
					</div>
			
					<div class="team-col-ps">
						<div class="row max-wh">
							<div class="col col-bio">
								<img src="{{asset('img/team/mungki.png')}}" class="max-wh">
							</div>

							<div class="col col-bio ">
								<div class="triangle-left"></div>
							</div>

							<div class="mungki-desc-ps">
								<h1 class="mungki-h1">Mungki Ariwibowo Adil</h1>
								<p class="mungki-p-pos">Co-Founder <hr class="mungki-border"></p>
								<p class="mungki-bio">Before co-founding Jagartha in 2017, Ari Adil was Senior Executive Vice President of Mandiri Investasi. He started his career in Westpac Banking Group in Sydney and decided to move back to Indonesia joining Danareksa Investment in 2003. Later he decided to expand his role by joining Bank Julius Baer Singapore and was promoted to setup Julius Baer Advisors Indonesia as Director in 2008</p>
							</div>

							<div class="col col-bio " >
								<div class="triangle-left"></div>
							</div>
						</div>

						<div class="row max-wh">
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>

							<div class="iwan-desc-ps">
								<h1 class="iwan-h1">FW Iwan</h1>

								<p class="iwan-p-pos">Co-Founder & Chief Executive Officer <hr class="iwan-border"></p>
								<p class="iwan-bio">Iwan was a Group Head of Sales and Marketing in Mandiri Investasi before co-founding Jagartha in 2017. Fast-track his career since joining Graduate Development Program in Commonwealth Bank and later he move to Citibank N.A. as Wealth Management Sales and Advisory Head in 2013. Strong passion in sales and investment leading him to gain stellar achievement in his last journey in Mandiri Investasi by growing the company AUM from IDR 30tn to IDR 50tn+ within 3 years to become the largest asset management in Indonesia</p>
							</div>

							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="col col-bio">
								<img src="{{asset('img/team/iwan.png')}}" class="max-wh">
							</div>
						</div>

						<div class="row max-wh">
							<div class="col col-bio">
								<img src="{{asset('img/team/markus.png')}}" class="max-wh">
							</div>
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="erik-desc-ps">
								<h1 class="mungki-h1">Markus Erik Argasetya</h1>
								<p class="mungki-p-pos">Co-Founder & Chief Investment Officer <hr class="mungki-border"></p>
								<p class="mungki-bio">Erik joined Jagartha in 2019. Prior to joining the company, he was Head of Market Intelligence and Investment Advisory at DBS Bank Indonesia. Starting his career in Westpac Private Bank, Australia and decided to return to Indonesia in 2008.Subsequently, he joined ABN Amro Bank N.V. and Citibank N.A. Indonesia with responsibility in expanding wealth management business. Strong passion in Research and Investment Advisory bring him to join DBS Bank to grow the Investment Business and become lead project manager in setting up DBS Private Banking Division in Indonesia</p>
							</div>
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
						</div>

						<div class="row max-wh">
							<div class="col col-bio" >
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="iwan-desc-ps">
								<h1 class="iwan-h1">???</h1>

								<p class="iwan-p-pos">??? <hr class="iwan-border"></p>
								<p class="iwan-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							</div>

							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="col col-bio" style="background-color: #6B6A74;">
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</section>

		<!--section batik card-->
		<section class="section-batik">
			<div class="container container-batik">
				<div class="row height-500">
					<div class="col margin-top-4p">
						<div class="card batik-card-adv">
							
							<img src="{{asset('img/logo2.png')}}" class="batik-img"><hr class="batik-logo-border">

							<p class="batik-p">Independent investment advisory company with license from Indonesia’s Financial Authority (OJK) with focused on B2B to provide integrated advisory platform across the ecosystem </p>
						</div>
					</div>
					<div class="col margin-top-4p">
						<div class="card batik-card-cap" >
							<img src="{{asset('img/logo3.png')}}" class="batik-img"><hr class="batik-logo-border">

							<p class="batik-p">Indonesia-focused investment holdings firm that invest and builds groundbreaking companies to support the growing ecosystem with focus in fintech, circular economy and creative industry </p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--section credentioal -->
		<section style="width: 100%; height: 500px;">
			<div id="credentials">
				<div class="container height-500">
					<div class="row height-500">
						<div class="col-lg-12">
							<h1 class="text-center about-title">Credentials <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12">
							
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection
