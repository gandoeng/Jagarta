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
				<div class="row height-1000" style="margin-left: 8%;">
					<div class="col-lg-12" style="height: 50px; z-index:1; ">
						<h1 class="text-center about-team">Our Team <hr class="about-border"> </h1>
					</div>
			
					<div class="team-col-ps">

						<div class="row" style="height: 100%; width: 100%;">
							<div class="col col-bio">
								<img src="{{asset('img/team/mungki.png')}}" style="max-width: 100%; max-height: 100%;">
							</div>
							<div class="col col-bio" style="z-index: 1;">
								<div class="triangle-left"></div>
							</div>
							<div style="z-index: 2; position: absolute; margin-left: 320px; margin-top: 65px; width: 500px; height: 300px;">
								<h1 style="font-family: 'jagarta2'; color: #16145F; font-size: 36pt; ">Mungki Ariwibowo Adil</h1>
								<p style="font-family: 'jagarta'; font-size: 10pt; position: relative; bottom: 15px;">Co-Founder <hr style="border-top: 4px solid; color: #AE5528; width: 80px; margin:0; position: relative; bottom: 20px;"></p>
								<p style="font-size: 10pt; font-family: 'jagarta'; position: relative; bottom: 6%;">Before co-founding Jagartha in 2017, Ari Adil was Senior Executive Vice President of Mandiri Investasi. He started his career in Westpac Banking Group in Sydney and decided to move back to Indonesia joining Danareksa Investment in 2003. Later he decided to expand his role by joining Bank Julius Baer Singapore and was promoted to setup Julius Baer Advisors Indonesia as Director in 2008</p>
							</div>

							<div class="col col-bio" style="z-index: 1;">
								<div class="triangle-left"></div>
							</div>
						</div>

						<div class="row" style="height: 100%; width: 100%;">
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="col col-bio">
								<img src="{{asset('img/team/iwan.png')}}" style="max-width: 100%; max-height: 100%;">
							</div>
						</div>

						<div class="row" style="height: 100%; width: 100%;">
							<div class="col col-bio">
								<img src="{{asset('img/team/markus.png')}}" style="max-width: 100%; max-height: 100%;">
							</div>
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
							<div class="col col-bio">
								<div class="triangle-left">
									
								</div>
							</div>
						</div>

						<div class="row" style="height: 100%; width: 100%;">
							<div class="col col-bio" >
								<div class="triangle-left">
									
								</div>
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
@endsection
