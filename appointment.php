<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "connect.php"; ?>
    <?php include "head.php"; ?>
    <title>Puretone Hearing Aid Center</title>
</head>
<body>

    <!-- Preloader Start -->
    <?php include "pre.php"; ?>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include "nav.php"; ?>
    <!-- Header End -->

    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>Make An</span> Appointment</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Make An Appointment</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
			<div class="book-appointment-form">
				<div class="row section-row">
					<div class="col-lg-12">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">booking</h3>
							<h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
						</div>
						<!-- Section Title End -->
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="appointment-form wow fadeInUp">
							<!-- Form Start -->
							<form id="appointmentForm" method="POST" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="services" class="form-control" id="services" placeholder="Enter Service" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-5">
										<input type="date" name="date" class="form-control" id="date" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12">
										<button type="submit" name="submit" class="btn-default">book appointment</button>
										<div id="msgSubmit" class="h3 hidden"></div>
									</div>
								</div>
							</form>
							<!-- Form End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Page Appointment End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Diagnosis of</span> Hearing Impairments</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 order-1">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-1.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>experienced doctor</h3>
                                <p>An experienced doctor with a proven track record of accurate diagnoses and effective patient care.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-2.png" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>personalized care</h3>
                                <p>tailors medical treatments and services to the individual needs and preferences of each patient for optimal outcomes.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-3.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>flexible payment options</h3>
                                <p>allow customers to choose convenient and adaptable ways to pay over time.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>

                <div class="col-lg-4 order-lg-1 order-md-2 order-1">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image wow fadeInUp">
                        <figure>
                            <img src="images/pt/why-choose-us-img.png" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-2">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-4.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>emergency services</h3>
                                <p>immediate assistance during urgent situations such as accidents, medical crises, natural disasters</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-6.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>latest technology</h3>
                                <p>features like AI-driven sound adjustment, Bluetooth connectivity, and advanced noise cancellation</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/pt/icon-why-us-5.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>positive patient reviews</h3>
                                <p>Consistently receives positive patient feedback for exceptional care and service.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                    </div>
                    <!-- Why Choose Box Start -->
                </div>
            </div>
        </div>
        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="images/icon-star.svg" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Testiminial Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonial</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What our</span> Client Say</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability.  eco-friendly initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Testiminial Image Start -->
                    <div class="testimonial-image">
                        <div class="testimonial-img">
                            <figure class="reveal image-anime">
                                <img src="images/testimonials-img.jpg" alt="">
                            </figure>
                        </div>

                        <!-- Terstimonial Rating Box Start -->
                        <div class="testimonial-rating-box">
                            <!-- Counter Item Start -->
                            <div class="rating-counter-item">
                                <div class="rating-counter-number">
                                    <h3><span class="counter">5</span>/5</h3>
                                </div>

                                <div class="rating-counter-content">
                                    <p>This rate is given by user after visiting our location</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                            <!-- Service Rating Start -->
                            <div class="service-rating">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <!-- <i class="fa-regular fa-star"></i> -->
                                    </li>
                                    <li>for excellence services</li>
                                 </ul>
                            </div>
                            <!-- Service Rating End -->
                        </div>
                        <!-- Terstimonial Rating Box End -->
                    </div>
                    <!-- Testiminial Image End -->                  
                </div>

                <div class="col-lg-7">
                    <!-- Testimonial Slider Start -->
					<div class="testimonial-slider">
						<div class="swiper">
							<div class="swiper-wrapper" data-cursor-text="Drag">
								<!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"I want to say thank you to my doctor Steve! Vivamus sagittis massa vitae bibendum rhoncus. Duis cursus.” “Thank you for helping me overcome my fear of the dentist! Vivamus sagittis massa vitae bibendum rhoncus. Duis cursus."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">            
                                            <div class="author-content">
                                                <h3>robert lee</h3>
                                                <p>software engineer</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"The best dental experience I've ever had! The team was professional and friendly, and the results were amazing. Highly recommend!"Dr. Smith and his staff are fantastic! They made me feel comfortable and at ease during my visit."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">          
                                            <div class="author-content">
                                                <h3>banson doe</h3>
                                                <p>teacher</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"Excellent service and care. The staff is knowledgeable and always willing to answer questions. I wouldn't go anywhere else for my dental needs.""From the moment I walked in, I felt welcomed and cared for. staff is exceptional."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">          
                                            <div class="author-content">
                                                <h3>thomas linda</h3>
                                                <p>designer</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->
							</div>
							<div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
				                <div class="testimonial-button-next"></div>
                            </div>
						</div>
					</div>
					<!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testiminial End -->
    
    <?php include"footer.php"; ?>
</html>