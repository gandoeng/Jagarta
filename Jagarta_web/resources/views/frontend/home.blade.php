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
									<i class="fas fa-angle-double-left carousel-but"></i>
   									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
    								<i class="fas fa-angle-double-right carousel-but" ></i>
    								<span class="sr-only">Next</span>
 								</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section style="width: 100%; height: 400px; background-image: url({{asset('img/value.png')}}); background-size: cover; border-top: none; padding-top: 1%;">
			<div class="col-lg-12" style="height: 200px;">
				<div class="container" style="height: 300px;">
					<div class="row" style="height: 300px;">
						<div class="col-lg-12">
							<h1 class="text-center value-title">Our Value <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12" style="position: relative; left: 0; right: 0; margin-left: 15%;" >
							<p style="text-align: center; font-family: 'jagarta'; color: white; width: 800px;">Irure dolore incididunt veniam eiusmod tempor tempor dolore enim voluptate aute aliqua exercitation veniam magna dolor est dolor do ea nisi occaecat irure deserunt veniam ut mollit exercitation do eiusmod dolore duis qui ut sint amet do nisi cupidatat laborum cillum aliquip tempor dolore quis eiusmod do veniam minim commodo laborum aliqua mollit in adipisicing commodo adipisicing proident non laborum est commodo qui pariatur deserunt sint cillum occaecat ut labore dolore ut dolore excepteur ea in ex labore magna laboris occaecat in ea nisi elit ut irure in non elit excepteur consectetur commodo ut dolor fugiat ut aliquip duis ut ex occaecat cupidatat reprehenderit dolor adipisicing nostrud sed quis quis consectetur dolore in in ut nostrud sunt .</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
