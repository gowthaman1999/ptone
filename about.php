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
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>About</span> Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page About Us Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/pt/about1.png" alt="">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/pt/about2.png" alt="">
                            </figure>
                        </div>

                        <!-- About Experience Circle Start -->
                        <div class="about-experience">
                            <figure>
                                <img src="images/about-experience-circle.png" alt="">
                            </figure>
                        </div>
                        <!-- About Experience Circle End -->
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">It is the initial step toward <span>Improved Hearing Health</span>.</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Puretone Hearing Aid is a specialized hearing clinic that provides individuals with hearing loss with individualized, tailored care.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Service Motive</li>
                                <li>Good Offers</li>
                                <li>Very Cost Efficiency</li>
                                <li>Excellent Services</li>
                            </ul>
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="about" class="btn-default">read more about us</a>
                        </div>
                        About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page About Us End -->

    <!-- Call To Action Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Cta Box Item Start -->
                    <div class="cta-box-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-cta-phone.svg" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>need dental services ?</h3>
                            <p>Call on : <a href="tel:<?php echo"$num1"; ?>" class="text-light"><?php echo"$num"; ?></a></p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <!-- Cta Box Item Start -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cta-box-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-cta-time.svg" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>opening hours</h3>
                            <p>Mon to Sat 9:00AM to 9:00PM</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Cta Box Btn Start -->
                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="appointment" class="btn-default btn-highlighted">make an appointment</a>
                    </div>
                    <!-- Cta Box Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- How It Work Start -->
    <div class="how-it-work about-how-it-work">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="how-it-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Improve Your Hearing in 3 Simple Steps</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What We Do</span> for You</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. Our clinic practices eco-friendly initiatives like digital records to reduce paper waste and energy-efficient equipment.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Accordion Start -->
                        
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion how-work-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/pt/1.png" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Hearing Examinations
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our hearing aid specialist will evaluate your hearing health to learn more about hearing problems.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/pt/2.png" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Perfect Hearing Aids
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>The best hearing aid is recommended based on the results of the hearing test.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/pt/3.png" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Modifications
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Frequent adjustments are made to guarantee the machine operates at its best.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                        <!-- How Work Accordion End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="images/pt/why.png" alt="">
                        </figure>
                    </div>
                    <!-- How It Work Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work End -->

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

    <!-- Intro Clinic Video Section Start -->
        <div class="intro-clinic-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Visit Clinic Start -->
                        <div class="visit-clinic parallaxie">
                            <!-- Visit Clinic Content Start -->
                            <div class="visit-clinic-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <!-- <h3 class="wow fadeInUp">Why choose Puretone?</h3> -->
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">We are giving you access to a platform where you can solve all of your hearing issues.</h2>
                                </div>
                                <!-- Section Title End -->
    
                                <!-- Visit Clinic Btn Start -->
                                <div class="visit-clinic-btn wow fadeInUp" data-wow-delay="0.25s" data-cursor-text="Play">
                                    <a href="#" class="popup-video play-btn">play video</a>
                                </div>
                                <!-- Visit Clinic Btn End -->
                            </div>
                            <!-- Visit Clinic Content End -->                      
                        </div>
                        <!-- Visit Clinic End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Clinic Video Section End -->

        <!-- Our Counter Section Start -->
        <div class="our-counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">15</span>+</h2>
                                <h3>Years Of Experience</h3>
                            </div>
                            <!-- Counter Title End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">75</span>+</h2>
                                <h3>Years Of Experience</h3>
                            </div>
                            <!-- Counter Title End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">22</span>K</h2>
                                <h3>happy customers</h3>
                            </div>
                            <!-- Counter Title End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">500</span>+</h2>
                                <h3>Hearing Aids Models</h3>
                            </div>
                            <!-- Counter Title End -->  
                        </div>
                        <!-- Counter Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Counter Section End -->

     <!-- Our Serviceds Section Start -->
     <div class="our-services">
        <!-- Expertise Experience Section Start -->
        <div class="expertise-experience">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Expertise Experience Content Start -->
                        <div class="expertise-experience-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Complete Medical Solutions in One Place</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Hearing Aid</span> Treatments</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">Our Testing lab is equipped with modern audigram testing devices, which makes to predict the problem in hearing with more accurate results. We have different type of tests in audio test with Hear and feel the sound effects around the environment.</p>

                                <p class="wow fadeInUp" data-wow-delay="0.25s">At PureTone, we are committed to helping you understand the various hearing aid treatments available, empowering you to make informed decisions about your hearing health.</p>

                                <p class="wow fadeInUp" data-wow-delay="0.25s">Selecting the right hearing aid treatment involves considering factors like your lifestyle, budget, degree of hearing loss, and personal preferences.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Expertise Experience Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Expertise Experience Image Start -->
                        <div class="expertise-experience-img">
                            <figure class="image-anime reveal">
                                <img src="images/pt/image-13.png" alt="">
                            </figure>
                        </div>
                        <!-- Expertise Experience Image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Expertise Experience Section End -->

        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="images/icon-star.svg" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Our Serviceds Section End -->

    <!-- Our Team Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Friendly</span> Doctors</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability.  eco-friendly initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team-1.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Doctor Name</h3>
                            <p>Designation</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team-2.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Doctor Name</h3>
                            <p>Designation</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team-3.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Doctor Name</h3>
                            <p>Designation</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team-4.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Doctor Name</h3>
                            <p>Designation</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="images/icon-star.svg" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Our Team End -->

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