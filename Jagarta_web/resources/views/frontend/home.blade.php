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
					<div class="col-4 p-white">
						<h1 class="h1-call">Welcome</h1>
						<h1 class="h1-call-future">Future</h1>
						<h1 class="h1-call-leader">Leader!</h1>
					</div>
					<div class="col-6 p-white" style="margin-top: 30px;">
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
						<div class="col-lg-12" style="height: 200px;">
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
											<div class="row" style="margin-top: 10%;">
											 	<div class="col-md-6">
											 		<h5 class="h5-card-title">Independent Financial Advisor</h5>
											 		<p style="font-family: 'jagarta'">Our scope of services Estabilished in 2017, Jagartha Group quickly grow as integrated ecosystem builder across the Industry with focused on Capital Market, Circular Economy and Creative Industry</p>
											 	</div>
											 	<div class="col-md-6">
											 		<img src="{{asset('img/about/about1.png')}}" class="img-size-max">
											 	</div>
											</div>
										</div>										
									</div>
									<div class="carousel-item carousel-ps">
										<div class="card card-ps">
											<div class="row" style="margin-top: 10%;">
											 	<div class="col-md-6">
											 		<h5 class="h5-card-title">Independent Financial Advisor</h5>
											 		<p style="font-family: 'jagarta'">Our scope of services Estabilished in 2017, Jagartha Group quickly grow as integrated ecosystem builder across the Industry with focused on Capital Market, Circular Economy and Creative Industry</p>
											 	</div>
											 	<div class="col-md-6">
											 		<img src="{{asset('img/about/about1.png')}}" class="img-size-max">
											 	</div>
											</div>
										</div>										
									</div>

								<a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev">
									<i class="fas fa-angle-double-left" style="font-size: 50px; color:  #AE5528"></i>
   									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
    								<i class="fas fa-angle-double-right" style="font-size: 50px; color:  #AE5528"></i>    							
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
			<div class="container height-300">
				<div class="row height-300">
					<div class="col-lg-12">
						<h1 class="text-center about-title">Our History <hr class="about-border"> </h1>
					</div>
					<div class="col-lg-12">
						<div id="timeline-wrap">
  							<div id="timeline"></div> 
  							<div class="marker mfirst timeline-icon one">
  								<p class="p-timeline">2017</p>
  							</div>
  							<div class="marker m2 timeline-icon two">
  								<p class="p-timeline">2019</p>
  							</div>
							<div class="marker m3 timeline-icon three">
								<p class="p-timeline">2021</p>
							</div>
							<div class="marker mlast timeline-icon four"></div>
  						</div>

					</div>

					</div>
				</div>
			</div>
		</section>

		<!-- section our team -->
		<section class="section-team">
			<div class="container height-1000">
				<div class="row height-1000">
					<div class="col-lg-12">
						<h1 class="text-center about-title">Our Team <hr class="about-border"> </h1>
					</div>
					<div class="col-lg-12">
					</div>
			</div>
		</section>
@endsection
