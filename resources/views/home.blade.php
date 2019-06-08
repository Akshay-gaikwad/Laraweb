@extends('layout.mainlayout')

@section('content')
    <aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url('{{ asset('logo/yg_bg.jpg') }}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Bike Maintenance Made Easy.</h1>
									<h2>Your Bike is Precious. Your Time is Priceless.</h2>
									<p><a class="btn btn-primary btn-lg" href="#">BOOK A SERVICE NOW!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url('{{ asset('logo/yg_bg1.jpg') }}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We make your riding experience much more joyful!</h1>
									<h2>More Convenience, Lower Cost!</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">BOOK A SERVICE NOW!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url('{{ asset('logo/yg_bg2.jpg') }}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>You Book, We Service!</h1>
									<h2>We’ll pick up your bike, wave a magic wand over it and hand it back to you as good as new!</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">BOOK A SERVICE NOW!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
        <div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>WHY YOUR GARAGE?</h2>
					<!--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-thumbs-up"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Trust</a></h3>
                                                        <p style="font-size:17px;">All the work done on your bike will be in front of you. Genuine Spare parts will be used availing warranty for every part.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-time"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Convenience</a></h3>
							<p style="font-size:17px;">Get your bike serviced at a location and time decided by you. Or get it Picked up by us and Delivered in time.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-tick-outline"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Quality</a></h3>
							<p style="font-size:17px;">We have a well-equipped mobile van and team of professionals who will provide you quality service at your doorstep.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-home-outline"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Doorstep Service</a></h3>
							<p style="font-size:17px;">Well, not literally! It could be your office step or a restaurant step or a park step! Basically,anywhere, anytime.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-phone3"></i>
						</span>
						<div class="desc">
							<h3><a href="#">User Friendly</a></h3>
							<p style="font-size:17px;">Simply Book Appointment online through our website or Call us on 90-1194-1194 or  Give us a missed call we will call you back.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-search4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Transparency</a></h3>
							<p style="font-size:17px;">Your Bike will be serviced using genuine parts without any extra cost. Making sure that every spare part change is either recorded or done in front of you</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-th-list-outline"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Personal Bike Assistance </a></h3>
							<p style="font-size:17px;">Get personal care for your bike, updates about your next service date, tips and tricks</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
						<div class="desc">
							<h3 ><a href="#">Pay Online</a></h3>
							<p style="font-size:17px;">Forget about fishing out the exact change. Go the cash-less way with our online payment options.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        
        <div id="fh5co-testimonial" style="background-image: url(logo/testimonial.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>USER TESTIMONIAL</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url('{{ asset('userimg/user1.jpg') }}');"></div>
									<span>Akshay Gaikwad<br><small>Software Developer</small></span>
									<blockquote>
										<p>&ldquo;Problem solved Got my RS200 serviced. Mechanic was very professional. Good that the app is launched. Amazing service. Thanks :-). &rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image:  url('{{ asset('userimg/user2.jpg') }}');"></div>
									<span>Vinod Mankare<br><small>Teacher</small></span>
									<blockquote>
										<p>&ldquo;
Loving It The other day i had no time to get my jupiter to the store for servicing and it really needed a through check-up and then my friend suggested me this app its kind of cool and that i got my vehicle serviced at my doorstep and that too in a service record time. &rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url('{{ asset('userimg/user3.jpg') }}');"></div>
									<span>Rohit Chavan<br><small>Software Developer</small></span>
									<blockquote>
										<p>&ldquo;Today my vehicle broke down near Vijay Nagar while I was traveling back to home. There was no local mechanic nearby and I was left with no option. Thanks to Your Garage for coming to my rescue . Mechanic reached on spot within 30 mins and repair was done within an hour.You guys rock!.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	 <div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>BRANDS WE SERVICE?</h2>					
				</div>
                               
			</div>
			 <div class="row">
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;padding-bottom:4px;">
                                <img alt="Mahindra" src='{{asset("brandicon/mahindra.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%; text-align:center;padding-bottom:4px;">
                                <img alt="Bajaj" src='{{asset("brandicon/bajaj.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;">
                                <img alt="Hero" src='{{asset("brandicon/Hero.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;">
                                <img alt="Honda" src='{{asset("brandicon/honda.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;">
                                <img alt="Suzuki" src='{{asset("brandicon/suzuki.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;">
                                <img alt="Yamaha" src='{{asset("brandicon/yamaha.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:5%;text-align:center;">
                                <img alt="TVS" src='{{asset("brandicon/TVS.png")}}' />
                                <br /><br />
                            </div>
                            <div class="col-sm-1" style="margin-right:4%;text-align:center;">
                                <img alt="Royal Enfield" src='{{asset("brandicon/royal-enfield.png")}}' />
                                <br /><br />
                            </div>
                                                </div>
		</div>
	</div>

<!--	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Web Master</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Business &amp; Accounting</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Science &amp; Technology</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Health &amp; Psychology</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!--

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog &amp; Events</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">USA, International Triathlon Event</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">USA, International Triathlon Event</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">New Device Develope by Microsoft</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan &amp; Pricing</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing pricing--rabten">
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								  <div class="icon icon-user2"></div> 
	                     <h3 class="pricing__title">Trial</h3>
	                      <p class="pricing__sentence">Single user license</p> 
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>0
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Day Trial</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">Free 3 Lessons</li>
	                        <li class="pricing__feature">No Supporter</li>
	                        <li class="pricing__feature">No Tutorial</li>
	                        <li class="pricing__feature">No Ebook</li>
	                         <li class="pricing__feature">Limited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								 <div class="icon icon-store"></div> 
	                     <h3 class="pricing__title">Silver</h3>
	                      <p class="pricing__sentence">Up to 5 users</p> 
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>79
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Year Standard Access</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">300+ Lessons</li>
	                        <li class="pricing__feature">Random Supporter</li>
	                        <li class="pricing__feature">View Only Ebook</li>
	                        <li class="pricing__feature">Standard Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                 </div>
					</div>
					<div class="col-md-4 animate-box">
                  <div class="pricing__item">
                  	<div class="wrap-price">
                  		 <div class="icon icon-home2"></div> 
	                     <h3 class="pricing__title">Gold</h3>
	                      <p class="pricing__sentence">Unlimited users</p> 
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>499
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">Life Time Access</li>
	                        <li class="pricing__feature">Unlimited All Courses</li>
	                        <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
	                        <li class="pricing__feature">Free Supporter</li>
	                        <li class="pricing__feature">Free Ebook Downloads</li>
	                        <li class="pricing__feature">Premium Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
               </div>
            </div>
			</div>
		</div>
	</div>-->

<!--	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>-->

<!--	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
			</div>
		</div>
	</div>-->
@endsection