<!DOCTYPE HTML>
<html lang="<?= $requestLang ?>">
<?php $page_title = 'Acceuil du site test'; $page_md = 'Découvrez notre petite start-up digital' ?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/head.php'; ?>
<body class="shock-body">
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header.php'; ?>	
	<main id="main" class="shock-main">
		<section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="10000">
			<!-- Index -->
			<div id="slide-index" class="slide-index">
				<span class="slide-index-current">
					<span class="slide-index-inner"></span>
				</span>
				<span class="slide-index-total"></span>
			</div>
			<!-- Navigation -->
			<nav class="slide-navigation">
				<a href="#home" class="slide-navigation-item-prev">
					<span class="arrow-button prev scheme-1 primary">
						<span class="arrow">
							<span class="item"></span>
							<span class="item"></span>
						</span>
						<span class="line"></span>
						<span class="text">PREV</span>
					</span>
				</a>
				<a href="#home" class="slide-navigation-item-next">
					<span class="arrow-button next scheme-1 primary">
						<span class="arrow">
							<span class="item"></span>
							<span class="item"></span>
						</span>
						<span class="line"></span>
						<span class="text">NEXT</span>
					</span>
				</a>
			</nav>
			<!-- Info toggle -->
			<div class="slide-info-menu parent">
				<div id="slide-info-toggle" class="slide-info-toggle">
					<span class="arrow-button cross scheme-2 primary">
						<span class="arrow">
							<span class="item"></span>
							<span class="item"></span>
						</span>
						<span class="line"></span>
						<a href="#home" id="slide-info-toggle-text" class="text" data-toggle="VIEW LESS">VIEW MORE</a>
					</span>
				</div>
				<span class="slide-info-menu-close"></span>
			</div>
			<!-- Slide 1 -->
			<div class="slide-item side-intro current-slide">
				<!-- Intro -->
				<div class="slide-content">
					<span class="slide-title text-1 text-style-1 text-outline black">Design</span>
					<div class="slide-description">
						<span class="text-2 text-style-3 text-italic black">is <mark
								class="animated-underline primary-50">everything</mark> !</span>
						<div class="description gray">
							<p>Design is a concept that represents the process of creating products based on technical
								and aesthetic
								excellence, with the aim of solving problems.</p>
						</div>
					</div>
				</div>
				<!-- Image -->
				<div class="slide-image-wrapper">
					<div class="slide-image-inner">
						<img src="assets/images/png/f-2.png" alt="Image name" class="slide-image bg-color primary-50" />
					</div>
				</div>
				<!-- Action -->
				<div class="slide-action">
					<div class="slide-action-inner">
						<span class="slide-action-title">What are you waiting for?</span>
						<a href="#modal" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal"
							data-bs-target="#modal">
							<span class="text">Explore Features</span>
							<i class="fa-solid fa-arrow-right icon"></i>
						</a>
					</div>
				</div>
				<!-- Info menu -->
				<div class="slide-info">
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Product Design <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">A broad and effective coefficient of generating and
							developing<span class="ellipse">...</span><br> ideas through a process that leads to new
							products.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Brand Creation <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Through innovative concepts we develop the brand's strategy<span
								class="ellipse">...</span><br> and history in order to give the company
							authority.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Video Production <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Structured video editing to present all project information,
							including
							movies and television shows, ads and advertising.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Digital Marketing <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">We integrate digital channels such as search engines, social
							media, email
							and other websites to attract potential customers.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Artistic Photography <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Whether for a casual or event corporate, looking for a
							professional makes
							all the difference.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Game Development <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">One of the most profitable digital segments in the world
							requires a creative
							and specialized team to make your idea a reality.</span>
					</a>
				</div>
				<!-- Expander -->
				<div class="slide-expander"></div>
			</div>
			<!-- Slide 2 -->
			<div class="slide-item side-intro">
				<!-- Intro -->
				<div class="slide-content">
					<span class="slide-title text-1 text-style-1 text-outline black">Service</span>
					<div class="slide-description">
						<span class="text-2 text-style-3 text-italic black">custom <mark
								class="animated-underline secondary-50">made</mark> !</span>
						<div class="description gray">
							<p>To connect the brand with the target audience, it is necessary to observe each shape,
								color, font and
								style that will compose a subconscious message.</p>
						</div>
					</div>
				</div>
				<!-- Image -->
				<div class="slide-image-wrapper">
					<div class="slide-image-inner">
						<img src="assets/images/png/f-3.png" alt="Image name"
							class="slide-image bg-color secondary-50" />
					</div>
				</div>
				<!-- Action -->
				<div class="slide-action">
					<div class="slide-action-inner">
						<span class="slide-action-title">Will you miss this chance?</span>
						<a href="#your-link" class="slide-action-link animated-text scheme-1 primary"
							data-bs-toggle="modal" data-bs-target="#modal">Get Started</a>
					</div>
				</div>
				<!-- Info menu -->
				<div class="slide-info">
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Website Premium <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">The website is the first contact<span
								class="ellipse">...</span><br> a
							consumer will have with your brand. For this reason, it is very important.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Mobile App <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">The technology must be invisible<span class="ellipse">...</span>
							to the
							user's eyes. Other than that, it is very important to think of the mobile app.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Online Store <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">An online business allows customers to access products at any
							time using an
							electronic device with internet access.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Product Design <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">A broad and effective coefficient of generating and
							developing<span class="ellipse">...</span><br> ideas through a process that leads to new
							products.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Brand Creation <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Through innovative concepts we develop the brand's strategy<span
								class="ellipse">...</span><br> and history in order to give the company
							authority.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Video Production <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Structured video editing to present all project information,
							including
							movies and television shows, ads and advertising.</span>
					</a>
				</div>
				<!-- Expander -->
				<div class="slide-expander"></div>
			</div>
			<!-- Slide 3 -->
			<div class="slide-item side-intro">
				<!-- Intro -->
				<div class="slide-content">
					<span class="slide-title text-1 text-style-1 text-outline black">Explore</span>
					<div class="slide-description">
						<span class="text-2 text-style-3 text-italic black">our <mark
								class="animated-underline tertiary-50">portfolio</mark> !</span>
						<div class="description gray">
							<p>We keep in mind that we always need to improve everything we do, aiming to help people
								with our
								products and services, prioritizing quality.</p>
						</div>
					</div>
				</div>
				<!-- Image -->
				<div class="slide-image-wrapper">
					<div class="slide-image-inner">
						<img src="assets/images/png/f-1.png" alt="Image name"
							class="slide-image bg-color tertiary-50" />
					</div>
				</div>
				<!-- Action -->
				<div class="slide-action">
					<div class="slide-action-inner">
						<span class="slide-action-title">How can we help you?</span>
						<a href="#your-link" class="slide-action-link animated-text scheme-1 primary"
							data-bs-toggle="modal" data-bs-target="#modal">Leave a Message</a>
					</div>
				</div>
				<!-- Info menu -->
				<div class="slide-info">
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Digital Marketing <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">We integrate digital channels such as search engines, social
							media, email
							and other websites to attract potential customers.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Artistic Photography <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">Whether for a casual or event corporate, looking for a
							professional makes
							all the difference.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Game Development <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">One of the most profitable digital segments in the world
							requires a creative
							and specialized team to make your idea a reality.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Website Premium <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">The website is the first contact<span
								class="ellipse">...</span><br> a
							consumer will have with your brand. For this reason, it is very important.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Mobile App <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">The technology must be invisible<span class="ellipse">...</span>
							to the
							user's eyes. Other than that, it is very important to think of the mobile app.</span>
					</a>
					<a href="#your-link" class="slide-info-item">
						<h3 class="slide-info-title">Online Store <i class="fas fa-chevron-right icon"></i></h3>
						<span class="slide-info-detail">An online business allows customers to access products at any
							time using an
							electronic device with internet access.</span>
					</a>
				</div>
				<!-- Expander -->
				<div class="slide-expander"></div>
			</div>
		</section>

		<!-- Carousel -->
		<section class="shock-section pt-5">
			<div class="container">
				<!-- Carousel -->
				<div class="swiper slider has-gap scheme-2 secondary" data-columns="8,6,3,2">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="assets/images/png/a-1.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-1.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-2.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-2.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-3.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-3.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-4.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-4.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-5.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-5.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-6.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-6.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-7.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-7.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-8.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-8.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-9.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-9.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-1.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-1.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-2.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-2.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/images/png/a-3.png" class="parent">
								<div class="image-wrapper hover-opacity">
									<img src="assets/images/png/a-3.png" class="image invert-color hover-up-down"
										alt="This is an example description for this item." />
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Form -->
		<section class="shock-section pt-5 pb-5">
			<div class="container">
				<div class="row g-5">
					<div class="col-12 col-md-6">
						<!-- Image -->
						<div class="gallery image-mirror align-h-left">
							<div class="image-wrapper">
								<img src="assets/images/png/f-3.png" alt="Image name"
									class="image bg-color secondary-50" />
							</div>
							<a href="https://vimeo.com/222990241" class="mirror-button lightbox-link magnetic-effect">
								<i class="fa-solid fa-circle-play mirror-icon secondary"></i>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-6 align-v-center">
						<div class="holder">
							<!-- Intro -->
							<div class="basic-intro mb-35">
								<h2 class="title text-style-5 black">
									<span class="text-1 d-block text-outline">How can </span>
									<span class="text-2 text-italic">we <mark
											class="animated-underline secondary-50">help
											you</mark>?</span>
								</h2>
								<div class="description gray">
									<p>Please fill in the form below and we will get back to you shortly. 🥳</p>
								</div>
							</div>
							<!-- Form -->
							<div class="form-area scheme-1 secondary-50">
								<form action="php/sender.php" class="form-fields needs-validation ajax-form"
									novalidate="novalidate">
									<div class="form-row row">
										<div class="form-col form-floating col-12 col-md-6">
											<input type="text" name="name" class="form-control" id="InputFloatingName"
												placeholder="Name" required="required">
											<label for="InputFloatingName" class="form-label">Name</label>
											<div class="invalid-feedback">Please enter your name.</div>
											<div class="valid-feedback">Looks good.</div>
										</div>
										<div class="form-col form-floating col-12 col-md-6">
											<input type="email" name="email" class="form-control"
												id="InputFloatingEmail" placeholder="name@example.com"
												required="required">
											<label for="InputFloatingEmail" class="form-label">Email</label>
											<div class="invalid-feedback">Please enter a valid email address.</div>
											<div class="valid-feedback">Looks good.</div>
										</div>
									</div>
									<div class="form-row row">
										<div class="form-col form-floating col-12 col-md-6">
											<input type="text" name="education" class="form-control"
												id="InputFloatingEducation" placeholder="Education">
											<label for="InputFloatingEducation" class="form-label">Education</label>
											<div class="valid-feedback">It's optional, but we'd like to know about it :)
											</div>
										</div>
										<div class="form-col form-floating col-12 col-md-6">
											<input name="category" id="InputFloatingCategory"
												class="form-control form-datalist" list="InputFloatingCategoryOptions"
												placeholder="Category" required="required">
											<label for="InputFloatingCategory" class="form-label">Category</label>
											<datalist id="InputFloatingCategoryOptions">
												<option value="Business"></option>
												<option value="Engineering"></option>
												<option value="Cosmetics"></option>
												<option value="Architecture"></option>
												<option value="Marketing"></option>
												<option value="Technology"></option>
											</datalist>
											<div class="invalid-feedback">Please choose a category.</div>
											<div class="valid-feedback">Looks good.</div>
										</div>
									</div>
									<div class="form-row row">
										<div class="form-col col-12 col-md-6">
											<div class="form-check">
												<input type="checkbox" name="terms" class="form-check-input" value=""
													id="InputCheckbox" required="required">
												<label class="form-label form-check-label" for="InputCheckbox">
													I agree to the <a href="#your-link"
														class="link black secondary-hover"><u>terms of
															use</u>.</a>
												</label>
												<div class="invalid-feedback">Please accept the terms to continue.</div>
											</div>
										</div>
										<div class="form-col form-floating col-12 col-md-6 align-h-right">
											<!-- Button -->
											<button class="button arrow-button next scheme-1 secondary">
												<span class="arrow">
													<span class="item"></span>
													<span class="item"></span>
												</span>
												<span class="line"></span>
												<span class="text">SEND MESSAGE</span>
											</button>
										</div>
									</div>
									<input type="hidden" name="subject" value="Message sent through the contact form.">
									<span class="form-alert success">Your message was sent successful. Thanks.</span>
									<span class="form-alert error">Sorry. We were unable to send your message.</span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer.php'; ?>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/script.php'; ?>
</body>
</html>