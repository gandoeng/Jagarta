@extends('frontend.layouts.app')

@section('title', __('Home Page'))

@section('content')
	@toastr_css

	<!-- contact modal-->

	<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content" >
    			<form action="{{route('frontend.save-contact')}}" method="post" enctype="multipart/form-data">
    			@csrf
      			<div class="modal-header no-border">
        			<h5 class="modal-title h5-contact" id="exampleModalLabel">Contact Us<hr class="contact-border"></h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body" >
       				<div class="form-group">
       					<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name" required>
       				</div>
       				<div class="form-group">
       					<input type="tel" class="form-control" id="contactPhone" name="contactPhone" placeholder="Phone" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" maxlength="12" required>
       				</div>
       				<div class="form-group">
       					<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email" required="">
       				</div>
       				<div class="form-group">
       					<textarea type="text" class="form-control" rows="5" id="contactMessage" name="contactMessage" placeholder="Message" required></textarea>
       				</div>
      			</div>
      			<div class="modal-footer no-border">
        			<button type="submit" class="btn modal-submit-but" >Submit</button>
      			</div>
      		</form>
    		</div>
  		</div>
	</div>

	<!--main content-->
	<main>

		<section>
			<div class="container-fluid particle-position">
				<div id="particles-js">
					<div class="jagartha-label">
						<p class="title1" data-aos="zoom-in" data-aos-duration="1000" data-aos-mirror="true">Integrated Advice.</p>
						<p class="text-center title2 " data-aos="zoom-in" data-aos-duration="1000"data-aos-mirror="true">Collaborative Solutions</p>
					</div>
				</div>
			</div>
		</section>

		<!--welcome-->
		<section class="section-leader-welcome">
			<div class="container">
				<div class="row">
					<div class="col-4  p-white welcome-margin" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-mirror="true">
						<h1 class="h1-call" >Welcome</h1>
						<h1 class="h1-call-future">Future</h1>
						<h1 class="h1-call-leader">Leader!</h1>
					</div>
					<div class="col-6  p-white margin-top-80" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true">
						<p class="font-14 ">Jagartha group is a boutique, independently-owned Indonesia headquartered investment advisory firm overseeing more than $200mm+ capital dedicated to investing in Indonesia both in capital market and alternative assets.</p>
						<p class="font-7">Established in 2017, Jagartha Group focused on Capital Market, Circular Economy and Creative Industry At Jagartha, our mission is to enable our clients to achieve their financial objectives and solve their investment challenges by integrating sustainability across our offering and invesment solutions</p>
					</div>
				</div>
			</div>
		</section>

		<!--About Us-->
		<section class="section-about" >
			<div id="about">
				<div class="container height-700" >
					<div class="row" >
						<div class="col-lg-12 height-200">
							<h1 class="text-center about-title" data-aos="fade" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">About Us <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12 col-title-desc">
							<div class="row row-title-desc" data-aos="slide-up" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">
								<div class="col-md-6 col-lg-4 title-ps1">
									<a href="#about" class="text-center p-title-desc">Independent Investment Advisor</a> |
								</div>
								<div class="col-md-6 col-lg-4 title-ps2">
									<a href="#about" class="text-center p-title-desc">High Net Worth Individuals</a> |
								</div>
								<div class="col-md-6 col-lg-4 title-ps3">
									<a href="#about" class="text-center p-title-desc">Pension Fund</a> |
								</div>
								<div class="col-md-6 col-lg-4 title-ps4">
									<a href="#about" class="text-center p-title-desc">Asset Management</a> |
								</div>
								<div class="col-md-6 col-lg-4 title-ps5">
									<a href="#about" class="text-center p-title-desc">Local Institution</a> |
								</div>
								<div class="col-md-6 col-lg-4 title-ps6">
									<a href="#about" class="text-center p-title-desc">Foreign Institution</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-card">
							<div id="carouselAbout" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1000">
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
								</div>
								<a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev" data-aos="fade" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500">
									<i class="fas fa-angle-double-left coroulus-i"></i>
   									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next" data-aos="fade" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500">
    								<i class="fas fa-angle-double-right coroulus-i" ></i>    							
    								<span class="sr-only">Next</span>
 								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section our value -->
		<section class="section-value d-flex">
			
				<div class="container align-self-center" style="margin-bottom: 30px;">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="text-center value-title" data-aos="fade" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">Our Value <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12 col-value-text">
							<p class="value-text-ps" data-aos="slide-up" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">Irure dolore incididunt veniam eiusmod tempor tempor dolore enim voluptate aute aliqua exercitation veniam magna dolor est dolor do ea nisi occaecat irure deserunt veniam ut mollit exercitation do eiusmod dolore duis qui ut sint amet do nisi cupidatat laborum cillum aliquip tempor dolore quis eiusmod do veniam minim commodo laborum aliqua mollit in adipisicing commodo adipisicing proident non laborum est commodo qui pariatur deserunt sint cillum occaecat ut labore dolore ut dolore excepteur ea in ex labore magna laboris occaecat in ea nisi elit ut irure in non elit excepteur consectetur commodo ut dolor fugiat ut aliquip duis ut ex occaecat cupidatat reprehenderit dolor adipisicing nostrud sed quis quis consectetur dolore in in ut nostrud sunt .</p>
						</div>
					</div>
				</div>
			
		</section>


				<!--History-->
		<section class="section-history">
			<div class="container height-700">
				<div class="row height-700">
					<div class="col-lg-12">
						<h1 class="text-center about-title" data-aos="fade" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">Our History <hr class="about-border"> </h1>
					</div>

					<div class="col-lg-12 ps-12-history">
						
						<!-- Swiper -->
  						<div class="swiper-container" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1000">
  							<div id="timeline" class="timeline-ps2" ></div>
   							<div class="swiper-wrapper">
      							<div class="swiper-slide">
       								<div class="row his1-ps">
       									<div class="col-lg-12">
       										<div class="marker timeline-icon">
  												<p class="p-timeline">2017</p>
  											</div>
       									</div>
       									<div class="col-lg-12">
       										<p class="p-item1-ps">Tempor mollit ea consequat dolor officia nostrud adipisicing aliqua nisi excepteur ut ex dolor enim ut nulla eu veniam sint eu commodo occaecat.</p>
       									</div>
       								</div>
      							</div>
      							<div class="swiper-slide">
      								<div class="row his1-ps">
       									<div class="col-lg-12">
       										<div class="marker timeline-icon">
  												<p class="p-timeline">2019</p>
  											</div>
       									</div>
       									<div class="col-lg-12">
       										<p class="p-item1-ps">Tempor mollit ea consequat dolor officia nostrud adipisicing aliqua nisi excepteur ut ex dolor enim ut nulla eu veniam sint eu commodo occaecat.</p>
       									</div>
       								</div>
      							</div>
      							<div class="swiper-slide">
      								<div class="row his1-ps">
       									<div class="col-lg-12">
       										<div class="marker timeline-icon">
  												<p class="p-timeline">2021</p>
  											</div>
       									</div>
       									<div class="col-lg-12">
       										<p class="p-item1-ps">Tempor mollit ea consequat dolor officia nostrud adipisicing aliqua nisi excepteur ut ex dolor enim ut nulla eu veniam sint eu commodo occaecat.</p>
       									</div>
       								</div>
      							</div>
   							</div>
      								<!-- Add Arrows -->
    					<div class="swiper-button-next" style="color: #AE5528" data-slide="prev" data-aos="fade" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500"></div>
    					<div class="swiper-button-prev" style="color: #AE5528" data-slide="prev" data-aos="fade" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500"></div>
  					</div>
				</div>
			</div>
		</section>

		<!-- section our team -->

		<section class="section-team">
			
			<div class="container height-1000">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="text-center about-team" data-aos="fade" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">Our Team <hr class="about-border"> </h1>
					</div>

					<div class="col-lg-12">
						<div class="team_outer">
							<div class="team_wrapper">

								<div class="team_each d-md-flex">
									<div class="team_photo">
										<img src="{{asset('img/team/mungki.png')}}" class="w-100" href="#carouselHistory" role="button" data-slide="next" data-aos="flip-left" data-aos-once="false" data-aos-mirror="true" data-aos-duration="2000">
									</div>
									<div class="team_details team_content_w flex-grow-1 d-md-flex">
										<div class="team_details_inner align-self-center p-3">
											<div class="team_name">Mungki Ariwibowo Adil</div>
												<div class="team_role mb-4"><span class="team_border">Co-Founder</span></div>
											<div class="team_description">Before co-founding Jagartha in 2017, Ari Adil was Senior Executive Vice President of Mandiri Investasi. He started his career in Westpac Banking Group in Sydney and decided to move back to Indonesia joining Danareksa Investment in 2003. Later he decided to expand his role by joining Bank Julius Baer Singapore and was promoted to setup Julius Baer Advisors Indonesia as Director in 2008</div>
										</div>
									</div>
								</div>

								<div class="team_each team_each_right d-md-flex flex-row-reverse">
									<div class="team_photo">
										<img src="{{asset('img/team/iwan.png')}}" class="w-100" data-aos="flip-left" data-aos-once="false" data-aos-mirror="true" data-aos-duration="2000">									
									</div>
									<div class="team_details team_content_w flex-grow-1 d-md-flex flex-row-reverse">
										<div class="team_details_inner align-self-center p-3">
											<div class="team_name">FW Iwan</div>
											<div class="team_role mb-4"><span class="team_border">Co-Founder & Chief Executive Officer</span></div>
											<div class="team_description">Iwan was a Group Head of Sales and Marketing in Mandiri Investasi before co-founding Jagartha in 2017. Fast-track his career since joining Graduate Development Program in Commonwealth Bank and later he move to Citibank N.A. as Wealth Management Sales and Advisory Head in 2013. Strong passion in sales and investment leading him to gain stellar achievement in his last journey in Mandiri Investasi by growing the company AUM from IDR 30tn to IDR 50tn+ within 3 years to become the largest asset management in Indonesia</div>
										</div>
									</div>
								</div>


								<div class="team_each d-md-flex">
									<div class="team_photo">
										<img src="{{asset('img/team/markus.png')}}" class="w-100" data-aos="flip-left" data-aos-once="false" data-aos-mirror="true" data-aos-duration="2000">
									</div>
									<div class="team_details team_content_w flex-grow-1 d-md-flex">
										<div class="team_details_inner align-self-center p-3">
											<div class="team_name">Markus Erik Argasetya</div>
											<div class="team_role mb-4"><span class="team_border">Co-Founder & Chief Investment Officer</span></div>
											<div class="team_description">Erik joined Jagartha in 2019. Prior to joining the company, he was Head of Market Intelligence and Investment Advisory at DBS Bank Indonesia. Starting his career in Westpac Private Bank, Australia and decided to return to Indonesia in 2008.Subsequently, he joined ABN Amro Bank N.V. and Citibank N.A. Indonesia with responsibility in expanding wealth management business. Strong passion in Research and Investment Advisory bring him to join DBS Bank to grow the Investment Business and become lead project manager in setting up DBS Private Banking Division in Indonesia</div>
										</div>
									</div>
								</div>

								<div class="team_each team_each_right d-md-flex flex-row-reverse">
									<div class="team_photo">
										<div class="w-100 team_pic_anon" data-aos="flip-left" data-aos-once="false" data-aos-mirror="true" data-aos-duration="2000"> </div>
									</div>
									<div class="team_details team_content_w flex-grow-1 d-md-flex flex-row-reverse">
										<div class="team_details_inner align-self-center p-3">
											<div class="team_name">???</div>
											<div class="team_role mb-4"><span class="team_border">???</span></div>
											<div class="team_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		
				</div>
			</div>
		</section>

		<!--batik-->
		<section class="section-batik" id="jagartha">
			<div class="container">
				<div class="row">
					<div class="col margin-top-4p">
						<div class="card  batik-card-adv" role="button" data-slide="next" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500">
							
							<img src="{{asset('img/logo2.png')}}" class="batik-img"><hr class="batik-logo-border">

							<p class="batik-p">Independent investment advisory company with license from Indonesia’s Financial Authority (OJK) with focused on B2B to provide integrated advisory platform across the ecosystem </p>
						</div>
					</div>
					<div class="col margin-top-4p">
						<div class="card  batik-card-cap" role="button" data-slide="next" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1500">
							
							<img src="{{asset('img/logo3.png')}}" class="batik-img"><hr class="batik-logo-border">

							<p class="batik-p">Indonesia-focused investment holdings firm that invest and builds groundbreaking companies to support the growing ecosystem with focus in fintech, circular economy and creative industry </p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<!--section credentioal -->
		<section class="section-credential" >
			<div id="credentials">
				<div class="container ">
					<div class="row height-400">
						<div class="col-lg-12">
							<h1 class="text-center about-title" data-aos="fade" data-aos-duration="2000" data-aos-once="false">Credentials <hr class="about-border"> </h1>
						</div>
						<div class="col-lg-12 credential-item-ps">
							<div id="carouselCredential" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner height-200p" data-aos="zoom-in" data-aos-once="false" data-aos-mirror="true" data-aos-duration="1000">
									<div class="carousel-item height-100p active ">
											<img src="{{asset('img/credential/credential1.png')}}" class="img-credential">
									</div>
									<div class="carousel-item height-100p">
											<img src="{{asset('img/credential/credential2.png')}}" class="img-credential">
									</div>
									<div class="carousel-item height-100p">
											<img src="{{asset('img/credential/credential3.png')}}" class="img-credential">
									</div>
									<div class="carousel-item height-100p">
											<img src="{{asset('img/credential/credential4.png')}}" class="img-credential">
									</div>
								</div>

								<a class="carousel-control-prev" href="#carouselCredential" role="button" data-slide="prev" data-aos="fade" data-aos-once="false" data-aos-duration="1500">
									<i class="fas fa-angle-double-left coroulus-i"></i>
   									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselCredential" role="button" data-slide="next" data-aos="fade" data-aos-once="false"  data-aos-duration="1500">
    								<i class="fas fa-angle-double-right coroulus-i"></i>    					
    								<span class="sr-only">Next</span>
 								</a>

							</div>
						</div>
						<div class="col-lg-12 desc-credential-ps" data-aos="slide-up" data-aos-duration="2000" data-aos-once="false">
							<p class="p-credential">Our client list Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
						</div>	
					</div>
				</div>
			</div>
		</section>

				<!--section licence-->
		<section class="section-licence">
			<div class="container">
				<div class="licence-center">
					<div class="row">
					<div class="col-md-6 col-lg-4 col-xl-3 title-ps1 ojk-ps" data-aos="fade-up" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">
						<div class="col-lg-12">
							<p class="p-licence">Licensed by:</p>
						</div>
						<div class="col-lg-12 img-ojk-ps">
							 <img src="{{asset('img/ojk.png')}}">
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-xl-3 title-ps1 margin-top-5p" data-aos="fade-down" data-aos-duration="2000" data-aos-once="false" data-aos-mirror="true">
						<div class="col-lg-12 margin-left-13p">
							<p class="font-jagarta">Member of:</p>
						</div>
						<div class="col-lg-12">
							 <img src="{{asset('img/api.png')}}">
						</div>

					</div>
				</div>
				</div>

			</div>
		</section>

	</main>





@endsection
