<?php
/**
 * The front page template file
 *
 * @package Simply_Labs
 */

get_header();
?>

<main id="primary" class="site-main hero-page-wrapper">
	<!-- Hero Section -->
	<section class="hero-section">
		<div class="container">
			<!-- Hero Left: Typography & CTAs -->
			<div class="hero-content">
				<span class="hero-tagline text-sm fade-up">MODERN DIAGNOSTIC LABORATORY</span>
				<h1 class="hero-title text-display-lg fade-up fade-up-delay-1">
					Laboratory Testing That Delivers Answers Faster
				</h1>
				<p class="hero-description text-md fade-up fade-up-delay-2">
					Skip the long wait times. Simply Labs provides fast, accurate laboratory testing with transparent pricing and expert clinical oversight—helping you  make informed health decisions with confidence.
				</p>
				<div class="hero-cta-group fade-up fade-up-delay-3">
					<a href="#" class="btn-primary text-sm">BOOK A TEST <span class="arrow">&rarr;</span></a>
					<div class="trusted-badge">
						<div class="avatar-group">
							<img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=faces" alt="Client 1" class="avatar">
							<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=faces" alt="Client 2" class="avatar">
							<img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=faces" alt="Client 3" class="avatar">
						</div>
						<span class="trusted-text text-xs">TRUSTED BY WORLDWIDE</span>
					</div>
				</div>
			</div>

			<!-- Hero Right: Carousel & Testimonial Card -->
			<div class="hero-visual">
				<div class="hero-carousel-wrapper fade-up fade-up-delay-2">
					<!-- Swiper Slider Container -->
					<div class="image-crop-container swiper hero-swiper">
						<div class="swiper-wrapper">
							<!-- Slide 1 -->
							<div class="swiper-slide">
								<img src="https://images.pexels.com/photos/7722793/pexels-photo-7722793.jpeg" alt="Laboratory testing answers faster" class="hero-image">
							</div>
							<!-- Slide 2 -->
							<div class="swiper-slide">
								<img src="https://images.pexels.com/photos/3825379/pexels-photo-3825379.jpeg" alt="Precision diagnostics you can trust" class="hero-image">
							</div>
							<!-- Slide 3 -->
							<div class="swiper-slide">
								<img src="https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg" alt="Clinical expertise and oversight" class="hero-image">
							</div>
						</div>
					</div>
					
					<!-- Custom Horizontal Progress Indicators -->
					<div class="carousel-progress-indicators">
						<div class="progress-track" data-index="0">
							<div class="progress-bar"></div>
						</div>
						<div class="progress-track" data-index="1">
							<div class="progress-bar"></div>
						</div>
						<div class="progress-track" data-index="2">
							<div class="progress-bar"></div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Overlay Card -->
				<div class="testimonial-card fade-up fade-up-delay-3">
					<div class="testimonial-rating">
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
					</div>
					<p class="testimonial-quote text-base">
						“Their structured approach cut our operational waste in half.”
					</p>
					<div class="testimonial-author">
						<span class="author-name text-sm">— Sarah M.</span>
						<span class="author-role text-xs">Patient</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Client Logos Showcase -->
	<section class="logos-section fade-up">
		<div class="marquee-wrapper">
			<div class="marquee-track">
				<!-- Group 1 -->
				<div class="marquee-group">
					<!-- Logo 1: Bear logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M12 2a4 4 0 0 0-4 4v2.5a4 4 0 0 0 2 3.46v2.08a6 6 0 0 0-4 5.62v2.68c0 1.2.66 2.3 1.73 2.87l3 1.6a2 2 0 0 0 1.88 0l3-1.6c1.07-.57 1.73-1.68 1.73-2.87v-2.68a6 6 0 0 0-4-5.62v-2.08a4 4 0 0 0 2-3.46V6a4 4 0 0 0-4-4z" fill="currentColor"/>
							<text x="28" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 2: Wave/Loop Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M15 8c-3.87 0-7 3.13-7 7s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="currentColor"/>
							<path d="M5 15c0-5.52 4.48-10 10-10s10 4.48 10 10H20c0-2.76-2.24-5-5-5s-5 2.24-5 5H5z" fill="currentColor"/>
							<text x="32" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 3: Cursive Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Playfair Display', 'Lora', serif" font-weight="700" font-style="italic" font-size="20" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 4: Sun Icon -->
					<div class="client-logo">
						<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<circle cx="17.5" cy="17.5" r="5.5" fill="currentColor"/>
							<path d="M17.5 2v4M17.5 29v4M5 17.5h4M29 17.5h4M8.64 8.64l2.83 2.83M23.53 23.53l2.83 2.83M8.64 26.36l2.83-2.83M23.53 11.47l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						</svg>
					</div>
					<!-- Logo 5: Bold Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="20" fill="currentColor" letter-spacing="-0.5">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 6: Department of Fictional Logos -->
					<div class="client-logo">
						<div class="dept-logo">
							<span class="dept-brand">Logoipsum</span>
							<span class="dept-subtitle">Department of<br>Fictional Logos</span>
						</div>
					</div>
				</div>

				<!-- Group 2 (Duplicate for seamless loop) -->
				<div class="marquee-group">
					<!-- Logo 1: Bear logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M12 2a4 4 0 0 0-4 4v2.5a4 4 0 0 0 2 3.46v2.08a6 6 0 0 0-4 5.62v2.68c0 1.2.66 2.3 1.73 2.87l3 1.6a2 2 0 0 0 1.88 0l3-1.6c1.07-.57 1.73-1.68 1.73-2.87v-2.68a6 6 0 0 0-4-5.62v-2.08a4 4 0 0 0 2-3.46V6a4 4 0 0 0-4-4z" fill="currentColor"/>
							<text x="28" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 2: Wave/Loop Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M15 8c-3.87 0-7 3.13-7 7s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="currentColor"/>
							<path d="M5 15c0-5.52 4.48-10 10-10s10 4.48 10 10H20c0-2.76-2.24-5-5-5s-5 2.24-5 5H5z" fill="currentColor"/>
							<text x="32" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 3: Cursive Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Playfair Display', 'Lora', serif" font-weight="700" font-style="italic" font-size="20" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 4: Sun Icon -->
					<div class="client-logo">
						<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<circle cx="17.5" cy="17.5" r="5.5" fill="currentColor"/>
							<path d="M17.5 2v4M17.5 29v4M5 17.5h4M29 17.5h4M8.64 8.64l2.83 2.83M23.53 23.53l2.83 2.83M8.64 26.36l2.83-2.83M23.53 11.47l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						</svg>
					</div>
					<!-- Logo 5: Bold Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="20" fill="currentColor" letter-spacing="-0.5">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 6: Department of Fictional Logos -->
					<div class="client-logo">
						<div class="dept-logo">
							<span class="dept-brand">Logoipsum</span>
							<span class="dept-subtitle">Department of<br>Fictional Logos</span>
						</div>
					</div>
				</div>

				<!-- Group 3 (Duplicate for seamless loop) -->
				<div class="marquee-group">
					<!-- Logo 1: Bear logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M12 2a4 4 0 0 0-4 4v2.5a4 4 0 0 0 2 3.46v2.08a6 6 0 0 0-4 5.62v2.68c0 1.2.66 2.3 1.73 2.87l3 1.6a2 2 0 0 0 1.88 0l3-1.6c1.07-.57 1.73-1.68 1.73-2.87v-2.68a6 6 0 0 0-4-5.62v-2.08a4 4 0 0 0 2-3.46V6a4 4 0 0 0-4-4z" fill="currentColor"/>
							<text x="28" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 2: Wave/Loop Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<path d="M15 8c-3.87 0-7 3.13-7 7s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="currentColor"/>
							<path d="M5 15c0-5.52 4.48-10 10-10s10 4.48 10 10H20c0-2.76-2.24-5-5-5s-5 2.24-5 5H5z" fill="currentColor"/>
							<text x="32" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="16" fill="currentColor">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 3: Cursive Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Playfair Display', 'Lora', serif" font-weight="700" font-style="italic" font-size="20" fill="currentColor">logoipsum</text>
						</svg>
					</div>
					<!-- Logo 4: Sun Icon -->
					<div class="client-logo">
						<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<circle cx="17.5" cy="17.5" r="5.5" fill="currentColor"/>
							<path d="M17.5 2v4M17.5 29v4M5 17.5h4M29 17.5h4M8.64 8.64l2.83 2.83M23.53 23.53l2.83 2.83M8.64 26.36l2.83-2.83M23.53 11.47l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						</svg>
					</div>
					<!-- Logo 5: Bold Logoipsum -->
					<div class="client-logo">
						<svg width="120" height="35" viewBox="0 0 120 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
							<text x="10" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="20" fill="currentColor" letter-spacing="-0.5">Logoipsum</text>
						</svg>
					</div>
					<!-- Logo 6: Department of Fictional Logos -->
					<div class="client-logo">
						<div class="dept-logo">
							<span class="dept-brand">Logoipsum</span>
							<span class="dept-subtitle">Department of<br>Fictional Logos</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Us Section -->
	<section class="about-section">
		<div class="container">
			<div class="about-header">
				<span class="about-tagline text-sm fade-up">ABOUT US</span>
				<h2 class="about-title text-display-sm fade-up fade-up-delay-1">
					Simply Labs delivers fast, accurate diagnostic testing through advanced laboratory technology and expert clinical oversight, making healthcare more accessible and transparent.
				</h2>
			</div>
			
			<div class="about-features">
				<!-- Feature 1 -->
				<div class="feature-card fade-up fade-up-delay-1">
					<div class="feature-icon-wrapper icon-border">
						<span class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0z" fill="none" />
								<path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z" />
							</svg>
						</span>
					</div>
					<div class="feature-text">
						<span class="feature-label text-xs">Fast Turnaround</span>
						<h3 class="feature-title text-lg">Results in Hours</h3>
						<p class="feature-description text-base">Receive reliable laboratory results quickly, helping you make timely healthcare decisions.</p>
					</div>
				</div>
				
				<!-- Feature 2 -->
				<div class="feature-card fade-up fade-up-delay-2">
					<div class="feature-icon-wrapper icon-solid">
						<span class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="currentColor" d="M7 2v2h1v14a4 4 0 0 0 4 4a4 4 0 0 0 4-4V4h1V2zm4 14c-.6 0-1-.4-1-1s.4-1 1-1s1 .4 1 1s-.4 1-1 1m2-4c-.6 0-1-.4-1-1s.4-1 1-1s1 .4 1 1s-.4 1-1 1m1-5h-4V4h4z" />
							</svg>
						</span>
					</div>
					<div class="feature-text">
						<span class="feature-label text-xs">Advanced Diagnostics</span>
						<h3 class="feature-title text-lg">Precision You Can Trust</h3>
						<p class="feature-description text-base">State-of-the-art laboratory technology ensures every test is performed with accuracy and care.</p>
					</div>
				</div>
				
				<!-- Feature 3 -->
				<div class="feature-card fade-up fade-up-delay-3">
					<div class="feature-icon-wrapper icon-border">
						<span class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="currentColor" d="M14.84 16.26C17.86 16.83 20 18.29 20 20v2H4v-2c0-1.71 2.14-3.17 5.16-3.74L12 21zM8 8h8v2a4 4 0 0 1-4 4a4 4 0 0 1-4-4zm0-1l.41-4.1a1 1 0 0 1 1-.9h5.19c.51 0 .94.39.99.9L16 7zm4-4h-1v1h-1v1h1v1h1V5h1V4h-1z" />
							</svg>
						</span>
					</div>
					<div class="feature-text">
						<span class="feature-label text-xs">Clinical Expertise</span>
						<h3 class="feature-title text-lg">Reviewed by Professionals</h3>
						<p class="feature-description text-base">Every report is supported by experienced clinical oversight, giving you confidence in your results.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Choose Us Section -->
	<section class="choose-section">
		<div class="container">
			<div class="choose-header">
				<span class="choose-tagline text-sm fade-up">WHY CHOOSE US</span>
				<h2 class="choose-title font-lora text-display-lg fade-up fade-up-delay-1">
					Helping You Make <br> Informed Health Decisions
				</h2>
				<div class="choose-cta fade-up fade-up-delay-2">
					<a href="#" class="btn-primary text-sm">BOOK A TEST <span class="arrow">&rarr;</span></a>
				</div>
			</div>
			
			<div class="choose-body">
				<!-- Video Card (Left Column) -->
				<div class="choose-video-card fade-up fade-up-delay-1">
					<span class="video-badge text-xs">TEAM</span>
					<video src="https://www.pexels.com/download/video/6130565/" autoplay loop muted playsinline class="why-choose-video"></video>
					<button class="video-control-btn" aria-label="Toggle Video Playback">
						<!-- Pause icon by default because it autoplays -->
						<svg class="control-icon icon-pause" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
							<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
						</svg>
						<svg class="control-icon icon-play" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="display: none;">
							<path d="M8 5v14l11-7z"/>
						</svg>
					</button>
				</div>
				
				<!-- 2x2 Feature Grid (Right Column) -->
				<div class="choose-grid">
					<!-- Card 1 -->
					<div class="choose-card fade-up fade-up-delay-1">
						<div class="choose-icon-wrapper icon-solid-blue">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<polyline points="12 6 12 12 16 14"/>
							</svg>
						</div>
						<h3 class="choose-card-title text-lg">Rapid Turnaround</h3>
						<p class="choose-card-description text-base">Receive accurate laboratory results in hours, helping you make timely healthcare decisions without unnecessary waiting.</p>
					</div>
					
					<!-- Card 2 -->
					<div class="choose-card fade-up fade-up-delay-2">
						<div class="choose-icon-wrapper icon-solid-purple">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M6 18H18"/>
								<path d="M10 6l4 4"/>
								<path d="M7 14.5l5.5-5.5a2.5 2.5 0 0 1 3.5 3.5L10.5 18"/>
								<path d="M14 22a8 8 0 0 0-4-14"/>
							</svg>
						</div>
						<h3 class="choose-card-title text-lg">Advanced Laboratory Technology</h3>
						<p class="choose-card-description text-base">Our state-of-the-art diagnostic equipment delivers precise, reliable testing backed by strict quality standards.</p>
					</div>
					
					<!-- Card 3 -->
					<div class="choose-card fade-up fade-up-delay-3">
						<div class="choose-icon-wrapper icon-solid-green">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
						</div>
						<h3 class="choose-card-title text-lg">Expert Clinical Oversight</h3>
						<p class="choose-card-description text-base">Every test is reviewed with clinical expertise, providing clear, dependable insights you can trust.</p>
					</div>
					
					<!-- Card 4 -->
					<div class="choose-card fade-up fade-up-delay-4">
						<div class="choose-icon-wrapper icon-solid-gray">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="4" width="20" height="16" rx="2"/>
								<line x1="2" y1="10" x2="22" y2="10"/>
							</svg>
						</div>
						<h3 class="choose-card-title text-lg">Transparent & Accessible Care</h3>
						<p class="choose-card-description text-base">Simple pricing, an easy testing experience, and secure digital reports make managing your health straightforward.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Tests Section -->
	<section class="tests-section">
		<div class="container">
			<div class="tests-header fade-up">
				<div class="tests-header-left">
					<span class="tests-tagline text-sm">OUR TESTS</span>
					<h2 class="tests-title font-lora text-display-lg">
						Explore Our Most Popular Health Screening Categories
					</h2>
				</div>
				<div class="tests-nav-controls">
					<button class="tests-prev" aria-label="Previous Slide">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="19" y1="12" x2="5" y2="12"></line>
							<polyline points="12 19 5 12 12 5"></polyline>
						</svg>
					</button>
					<button class="tests-next" aria-label="Next Slide">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</button>
				</div>
			</div>
			
			<div class="tests-carousel-wrapper fade-up fade-up-delay-1">
				<div class="swiper tests-swiper">
					<div class="swiper-wrapper">
						<!-- Card 01 -->
						<div class="swiper-slide">
							<div class="test-card">
								<div class="test-card-image-wrapper">
									<img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?w=600&h=450&fit=crop" alt="General Health Testing" class="test-card-image">
									<span class="test-card-tag text-xs">01 / GENERAL HEALTH</span>
								</div>
								<div class="test-card-content">
									<h3 class="test-card-title text-xl">Comprehensive Health Screening</h3>
									<p class="test-card-description text-base">Routine blood tests and wellness panels to help you monitor your overall health and detect potential concerns early.</p>
									<a href="#" class="test-card-btn text-base font-bold">VIEW &rarr;</a>
								</div>
							</div>
						</div>
						
						<!-- Card 02 -->
						<div class="swiper-slide">
							<div class="test-card">
								<div class="test-card-image-wrapper">
									<img src="https://images.pexels.com/photos/3825539/pexels-photo-3825539.jpeg?w=600&h=450&fit=crop" alt="Women's Health Testing" class="test-card-image">
									<span class="test-card-tag text-xs">02 / WOMEN'S HEALTH</span>
								</div>
								<div class="test-card-content">
									<h3 class="test-card-title text-xl">Women's Health <br> Testing</h3>
									<p class="test-card-description text-base">Personalized diagnostic tests supporting hormonal balance, reproductive health, and overall wellness.</p>
									<a href="#" class="test-card-btn text-base font-bold">VIEW &rarr;</a>
								</div>
							</div>
						</div>
						
						<!-- Card 03 -->
						<div class="swiper-slide">
							<div class="test-card">
								<div class="test-card-image-wrapper">
									<img src="https://images.pexels.com/photos/4173251/pexels-photo-4173251.jpeg?w=600&h=450&fit=crop" alt="Men's Health Testing" class="test-card-image">
									<span class="test-card-tag text-xs">03 / MEN'S HEALTH</span>
								</div>
								<div class="test-card-content">
									<h3 class="test-card-title text-xl">Men's Health <br> Testing</h3>
									<p class="test-card-description text-base">Monitor testosterone, heart health, prostate health, and key biomarkers to stay at your best.</p>
									<a href="#" class="test-card-btn text-base font-bold">VIEW &rarr;</a>
								</div>
							</div>
						</div>
						
						<!-- Card 04 -->
						<div class="swiper-slide">
							<div class="test-card">
								<div class="test-card-image-wrapper">
									<img src="https://images.pexels.com/photos/4793258/pexels-photo-4793258.jpeg?w=600&h=450&fit=crop" alt="Performance & Wellness Testing" class="test-card-image">
									<span class="test-card-tag text-xs">04 / PERFORMANCE</span>
								</div>
								<div class="test-card-content">
									<h3 class="test-card-title text-xl">Performance And <br> Wellness</h3>
									<p class="test-card-description text-base">Optimize your health with tests for vitamins, minerals, hormones, recovery, and athletic performance.</p>
									<a href="#" class="test-card-btn text-base font-bold">VIEW &rarr;</a>
								</div>
							</div>
						</div>
						
						<!-- Card 05 -->
						<div class="swiper-slide">
							<div class="test-card">
								<div class="test-card-image-wrapper">
									<img src="https://images.pexels.com/photos/5726706/pexels-photo-5726706.jpeg?w=600&h=450&fit=crop" alt="Preventive Health Screening" class="test-card-image">
									<span class="test-card-tag text-xs">05 / PREVENTIVE CARE</span>
								</div>
								<div class="test-card-content">
									<h3 class="test-card-title text-xl">Preventive Health Screening</h3>
									<p class="test-card-description text-base">Stay ahead of potential health risks with early detection and comprehensive preventive screening packages.</p>
									<a href="#" class="test-card-btn text-base font-bold">VIEW &rarr;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Patients Choose Us Stats Section -->
	<section class="patients-choose-section">
		<div class="container">
			<div class="stats-header fade-up">
				<div class="stats-header-left">
					<span class="stats-tagline text-sm">WHY PATIENTS CHOOSE US</span>
					<h2 class="about-title  text-display-sm">
						Every test is backed by advanced laboratory technology, expert clinical oversight, and a commitment to delivering accurate results with speed, transparency, and care.
					</h2>
				</div>
				<div class="stats-cta">
					<a href="#" class="btn-primary text-sm">BOOK A TEST <span class="arrow">&rarr;</span></a>
				</div>
			</div>
			
			<div class="stats-banner fade-up fade-up-delay-1">
				<!-- Card 1 -->
				<div class="stat-card light-red-bg">
					<div class="stat-card-top">
						<span class="stat-number font-lora text-display-sm">24 hrs</span>
						<span class="stat-badge text-lg">Typical Turnaround</span>
					</div>
					<hr class="stat-divider">
					<p class="stat-description text-base">Fast processing for most routine laboratory tests.</p>
				</div>
				
				<!-- Card 2 -->
				<div class="stat-card white-bg">
					<div class="stat-card-top">
						<span class="stat-number font-lora text-display-sm">100%</span>
						<span class="stat-badge text-lg">Transparent Pricing</span>
					</div>
					<hr class="stat-divider">
					<p class="stat-description text-base">Know exactly what you're paying before your test.</p>
				</div>
				
				<!-- Card 3 -->
				<div class="stat-card light-blue-bg">
					<div class="stat-card-top">
						<span class="stat-number font-lora text-display-sm">Expert</span>
						<span class="stat-badge text-lg">Clinical Oversight</span>
					</div>
					<hr class="stat-divider">
					<p class="stat-description text-base">Every report is backed by experienced laboratory professionals.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Laboratory & Technology Section -->
	<section class="tech-section">
		<div class="container">
			<div class="tech-container">
				<!-- Left Column: Typography & CTA -->
				<div class="tech-content">
					<span class="tech-tagline text-sm fade-up">LABORATORY & TECHNOLOGY</span>
					<h2 class="tech-title font-lora text-display-lg fade-up fade-up-delay-1">
						Advanced Technology for Accurate Diagnostics
					</h2>
					<p class="tech-description text-base fade-up fade-up-delay-2">
						Our laboratory combines advanced diagnostic technology with rigorous quality standards and expert clinical oversight to deliver fast, accurate, and dependable results for every patient.
					</p>
					<div class="tech-cta fade-up fade-up-delay-3">
						<a href="#" class="btn-primary text-sm">EXPLORE OUR LAB <span class="arrow">&rarr;</span></a>
					</div>
				</div>
				
				<!-- Right Column: Mesh Gradient & Image & Floating Stat Card -->
				<div class="tech-visual-wrapper fade-up fade-up-delay-2">
					<div class="tech-glow-bg">
						<div class="tech-image-crop">
							<img src="https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg?w=800&h=600&fit=crop" alt="Clinical Laboratory Technology" class="tech-image">
						</div>
						
						<!-- Floating Stats Card (matches mockup business sparkline card in clinical context) -->
						<div class="tech-floating-card">
							<span class="tech-card-label text-xs">Diagnostic Accuracy</span>
							<div class="tech-card-value-row">
								<span class="tech-card-value font-lora text-xl">99.9%</span>
								<span class="tech-card-trend text-xs">+0.1% increase</span>
							</div>
							<!-- Custom sparkline chart showing diagnostic consistency -->
							<svg class="tech-mini-chart" viewBox="0 0 100 24" width="100%" height="24">
								<path d="M0,18 Q12,8 24,14 T48,6 T72,12 T96,2" fill="none" stroke="#0075BD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ Accordion Section -->
	<section class="faq-section">
		<div class="container">
			<div class="faq-header text-center fade-up">
				<span class="faq-tagline text-sm">FAQ</span>
				<h2 class="faq-title font-lora text-display-lg">Frequently Asked Questions</h2>
			</div>
			
			<div class="faq-wrapper fade-up fade-up-delay-1">
				<!-- Question 1 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">How long does it take to receive my test results?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>Most routine laboratory tests are processed within 24 hours, though turnaround times may vary depending on the type of test.</p>
						</div>
					</div>
				</div>
				
				<!-- Question 2 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">Do I need an appointment for testing?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>Appointments are recommended to ensure a smooth experience, but availability may vary depending on the test and location.</p>
						</div>
					</div>
				</div>
				
				<!-- Question 3 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">Do I need to fast before my test?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>Some blood tests require fasting, while others do not. Any preparation instructions will be provided before your appointment.</p>
						</div>
					</div>
				</div>
				
				<!-- Question 4 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">Are my results reviewed by healthcare professionals?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>Yes. Every report is processed using advanced laboratory technology and reviewed under expert clinical oversight to ensure accuracy and reliability.</p>
						</div>
					</div>
				</div>
				
				<!-- Question 5 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">How will I receive my laboratory results?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>Your results are delivered securely through a digital report, making them easy to access and share with your healthcare provider if needed.</p>
						</div>
					</div>
				</div>
				
				<!-- Question 6 -->
				<div class="faq-item">
					<button class="faq-trigger" aria-expanded="false">
						<span class="faq-icon-wrapper">
							<svg class="faq-plus-icon" viewBox="0 0 24 24" width="24" height="24">
								<line class="vert-line" x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<line class="horiz-line" x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="faq-question text-lg font-bold">What types of tests do you offer?</span>
					</button>
					<div class="faq-content">
						<div class="faq-answer text-base">
							<p>We offer a wide range of diagnostic and preventive health tests, including routine blood work, wellness screenings, hormone panels, and specialized laboratory testing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest Insights Blog Section -->
	<section class="blogs-section">
		<div class="container">
			<div class="blogs-header fade-up">
				<div class="blogs-header-left">
					<span class="blogs-tagline text-sm">OUR BLOGS</span>
					<h2 class="blogs-title font-lora text-display-lg">Latest Insights</h2>
				</div>
				<div class="blogs-header-right">
					<a href="#" class="blogs-all-btn text-base font-bold">
						All Blog
						<span class="blogs-arrow-circle">
							<svg class="blogs-arrow-icon" viewBox="0 0 24 24" width="16" height="16">
								<line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
								<polyline points="12 5 19 12 12 19" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</span>
					</a>
				</div>
			</div>
			
			<div class="blogs-grid">
				<!-- Post 1 -->
				<article class="blog-card fade-up fade-up-delay-1">
					<div class="blog-card-image-wrapper">
						<img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?w=600&h=400&fit=crop" alt="Routine blood work vials" class="blog-card-image">
					</div>
					<div class="blog-card-meta">
						<span class="blog-card-category text-xs">/WELLNESS</span>
						<span class="blog-card-date text-xs">JULY 8, 2026</span>
					</div>
					<h3 class="blog-card-title text-xl">
						<a href="#">Understanding Your Complete Blood Count (CBC): What the Numbers Mean</a>
					</h3>
					<p class="blog-card-excerpt text-base">
						A breakdown of red cells, white cells, and platelets, helping you understand how routine blood work monitors immune health and energy levels.
					</p>
				</article>
				
				<!-- Post 2 -->
				<article class="blog-card fade-up fade-up-delay-2">
					<div class="blog-card-image-wrapper">
						<img src="https://images.pexels.com/photos/7088483/pexels-photo-7088483.jpeg?w=600&h=400&fit=crop" alt="Molecular diagnostics lab test" class="blog-card-image">
					</div>
					<div class="blog-card-meta">
						<span class="blog-card-category text-xs">/DIAGNOSTICS</span>
						<span class="blog-card-date text-xs">JULY 5, 2026</span>
					</div>
					<h3 class="blog-card-title text-xl">
						<a href="#">The Role of Advanced Biomarkers in Early Disease Detection</a>
					</h3>
					<p class="blog-card-excerpt text-base">
						Explore how next-generation molecular diagnostics identify key biomarkers before symptoms appear, offering valuable windows for preventive treatment.
					</p>
				</article>
				
				<!-- Post 3 -->
				<article class="blog-card fade-up fade-up-delay-3">
					<div class="blog-card-image-wrapper">
						<img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?w=600&h=400&fit=crop" alt="Healthy foods and nutrition plates" class="blog-card-image">
					</div>
					<div class="blog-card-meta">
						<span class="blog-card-category text-xs">/PREVENTION</span>
						<span class="blog-card-date text-xs">JULY 2, 2026</span>
					</div>
					<h3 class="blog-card-title text-xl">
						<a href="#">Key Vitamin and Hormone Markers to Optimize Daily Performance</a>
					</h3>
					<p class="blog-card-excerpt text-base">
						How tracking vitamin D, thyroid markers, and hormone levels can reveal hidden deficiencies and guide personalized wellness plans.
					</p>
				</article>
			</div>
		</div>
	</section>

	<!-- CTA Parallax Section -->
	<section class="cta-parallax-section">
		<div class="cta-parallax-overlay"></div>
		<div class="container">
			<div class="cta-parallax-content text-center fade-up">
				<span class="cta-tagline text-sm">SIMPLY LABS IS THE LEADING CLINICAL LABORATORY</span>
				<h2 class="cta-title font-lora text-display-lg">
					Ready to take control <br> of your health?
				</h2>
				<div class="cta-btn-wrapper">
					<a href="#" class="cta-btn text-base font-bold">BOOK A TEST <span class="arrow">&rarr;</span></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
