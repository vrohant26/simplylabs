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
				<span class="hero-tagline">CONSULTANCY AGENCY</span>
				<h1 class="hero-title">
					Measurable<br>
					Performance for<br>
					businesses
				</h1>
				<p class="hero-description">
					Simply Labs is a consultancy built for teams that need direction, structure, and execution—not vague advice or long decks.
				</p>
				<div class="hero-cta-group">
					<a href="#" class="btn-primary">START A FREE MEETING <span class="arrow">&rarr;</span></a>
					<div class="trusted-badge">
						<div class="avatar-group">
							<img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=faces" alt="Client 1" class="avatar">
							<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=faces" alt="Client 2" class="avatar">
							<img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=faces" alt="Client 3" class="avatar">
						</div>
						<span class="trusted-text">TRUSTED BY WORLDWIDE</span>
					</div>
				</div>
			</div>

			<!-- Hero Right: Image & Testimonial Card -->
			<div class="hero-visual">
				<div class="image-crop-container">
					<img src="https://placehold.net/600x800.png" alt="Measurable Performance" class="hero-image">
				</div>
				
				<!-- Testimonial Overlay Card -->
				<div class="testimonial-card">
					<div class="testimonial-rating">
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
						<span class="star">&#9733;</span>
					</div>
					<p class="testimonial-quote">
						“Their structured approach cut our operational waste in half.”
					</p>
					<div class="testimonial-author">
						<span class="author-name">Sayyan</span>
						<span class="author-role">Head of Product</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Client Logos Showcase -->
	<section class="logos-section">
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
</main>

<?php
get_footer();
