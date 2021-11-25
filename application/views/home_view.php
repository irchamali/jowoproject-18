<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $site_title; ?></title>
	<meta name="description" content="<?php echo $site_desc; ?>" />
	<meta name="keywords" content="Poroz, POROZ, LAZ, LAZIS, Zakat, Infaq, Shodaqoh">
	<meta name="author" content="Ircham Ali" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= base_url('assets/frontend/images/' . $icon); ?>">
	<link href="<?= base_url(''); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- SEO Tag -->
	<link rel="canonical" href="<?php echo site_url(); ?>" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $site_title; ?>" />
	<meta property="og:description" content="<?php echo $site_desc; ?>" />
	<meta property="og:url" content="<?php echo site_url(); ?>" />
	<meta property="og:site_name" content="<?php echo $site_name; ?>" />
	<meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
	<meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
	<meta property="og:image:width" content="560" />
	<meta property="og:image:height" content="315" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="<?php echo $site_desc; ?>" />
	<meta name="twitter:title" content="<?php echo $site_title; ?>" />
	<meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
	<meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url(''); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?= base_url(''); ?>assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url(''); ?>assets/frontend/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<?= $header; ?>
	<!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
					<h1 data-aos="fade-up"><?= $caption_1; ?></h1>
					<h2 data-aos="fade-up" data-aos-delay="400"><?= $caption_2; ?>.</h2>
					<div data-aos="fade-up" data-aos-delay="600">
						<div class="text-center text-lg-start">
							<a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
								<span>Get Started</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
					<img src="<?= base_url() . 'assets/frontend/images/' . $bg_header; ?>" class="img-fluid" alt="">
					<!-- <img src="assets/frontend/img/features-2.png" class="img-fluid" alt=""> -->
					<!-- <img src="assets/frontend/img/hero-img.png" class="img-fluid" alt=""> -->
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Section ======= -->
		<section id="about" class="about">

			<div class="container" data-aos="fade-up">
				<div class="row gx-0">

					<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
						<div class="content">
							<h3>Who We Are</h3>
							<h2>Apa itu POSNU ?</h2>
							<p>
								<?= $about_desc; ?>
							</p>
							<div class="text-center text-lg-start">
								<a href="#features" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Read More</span>
									<i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
						<img src="<?= base_url() . 'assets/frontend/images/' . $about_img; ?>" class="img-fluid" alt="">
					</div>

				</div>
			</div>

		</section><!-- End About Section -->

		<!-- ======= Values Section ======= -->
		<!-- <section id="values" class="values">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Our Values</h2>
					<p>Odit est perspiciatis laborum et dicta</p>
				</header>

				<div class="row">

					<div class="col-lg-4">
						<div class="box" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/frontend/img/values-1.png" class="img-fluid" alt="">
							<h3>Ad cupiditate sed est odio</h3>
							<p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.
							</p>
						</div>
					</div>

					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="400">
							<img src="assets/frontend/img/values-2.png" class="img-fluid" alt="">
							<h3>Voluptatem voluptatum alias</h3>
							<p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.
							</p>
						</div>
					</div>

					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="600">
							<img src="assets/frontend/img/values-3.png" class="img-fluid" alt="">
							<h3>Fugit cupiditate alias nobis.</h3>
							<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.
							</p>
						</div>
					</div>
					
				</div>

			</div>

		</section> -->
		<!-- End Values Section -->

		<!-- ======= Counts Section ======= -->
		<!-- <section id="counts" class="counts">
			<div class="container" data-aos="fade-up">

				<div class="row gy-4">

					<div class="col-lg-3 col-md-6">
						<div class="count-box">
							<i class="bi bi-emoji-smile"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="232"
									data-purecounter-duration="1" class="purecounter"></span>
								<p>Happy Clients</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="count-box">
							<i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="521"
									data-purecounter-duration="1" class="purecounter"></span>
								<p>Projects</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="count-box">
							<i class="bi bi-headset" style="color: #15be56;"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="1463"
									data-purecounter-duration="1" class="purecounter"></span>
								<p>Hours Of Support</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="count-box">
							<i class="bi bi-people" style="color: #bb0852;"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
									class="purecounter"></span>
								<p>Hard Workers</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section> -->
		<!-- End Counts Section -->

		<!-- ======= Features Section ======= -->
		<section id="features" class="features">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Features</h2>
					<p>Profil POROZ</p>
				</header>

				<!-- <div class="row">

					<div class="col-lg-6">
						<img src="assets/frontend/img/features.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-6 mt-5 mt-lg-0 d-flex">
						<div class="row align-self-center gy-4">

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Eos aspernatur rem</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Facilis neque ipsa</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Volup amet voluptas</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Rerum omnis sint</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Alias possimus</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Repellendus mollitia</h3>
								</div>
							</div>

							<div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
								<div class="feature-box d-flex align-items-center">
									<i class="bi bi-check"></i>
									<h3>Repellendus mollitia</h3>
								</div>
							</div>

						</div>
					</div>

				</div>  -->
				<!-- / row -->

				<!-- Feature Tabs -->
				<div class="row feture-tabs" data-aos="fade-up">
					<div class="col-lg-6">
						<!-- <h3>Profil POROZ</h3> -->

						<!-- Tabs -->
						<ul class="nav nav-pills mb-3">
							<li>
								<a class="nav-link" data-bs-toggle="pill" href="#tab1">Visi</a>
							</li>
							<li>
								<a class="nav-link active" data-bs-toggle="pill" href="#tab2">Misi</a>
							</li>
							<li>
								<a class="nav-link" data-bs-toggle="pill" href="#tab3">Tujuan</a>
							</li>
						</ul><!-- End Tabs -->

						<!-- Tab Content -->
						<div class="tab-content">

							<div class="tab-pane fade show" id="tab1">
								<p>VISI POSNU</p>
								<h5>"Membentuk tatanan masyarakat yang mandiri dalam ekonomi, berdaulat dalam politik, berkepribadian dalam kebudayaan, menjunjung tinggi persatuan dan kesatuan bangsa Indonesia dan menjunjung asas keadilan."</h5>
							</div><!-- End Tab 1 Content -->

							<div class="tab-pane fade show active" id="tab2">
								<p>MISI POSNU</p>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Mewujudkan organisasi pemuda yang transparan, amanah dan profesional.</h5>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Memadukan potensi jaringan untuk menjadi kekuatan yang menyatukan strategi pemberdayaan melalui pengelolaan yg akuntabel.</h5>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Mendorong berbagai usaha pengembangan ekonomi produktif yang berkelanjutan.</h5>
								</div>
								<!-- <div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Melakukan upaya pengembangan SDM dalam bidang.</h5>
								</div> -->

							</div><!-- End Tab 2 Content -->

							<div class="tab-pane fade show" id="tab3">
								<p>TUJUAN POSNU</p>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Membentuk tatanan masyarakat yang mandiri dalam ekonomi, berdaulat dalam politik, berkepribadian dalam kebudayaan, menjunjung tinggi persatuan dan kesatuan bangsa Indonesia dan menjunjung asas keadilan.</h5>
								</div>
								<!-- <div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Terwujudnya peningkatan kesadaran masyarakat dalam berzakat.</h5>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Terwujudnya peningkatan kualitas SDM para pengelola zakat.</h5>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Terwujudnya kerjasama yang baik dengan pengelola zakat nasional dan internasional.</h5>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-check2"></i>
									<h5>Terwujudnya jaringan dan kerjasama guna membangun hubungan aspiratif dengan pemerintah.</h5>
								</div> -->
							</div><!-- End Tab 3 Content -->

						</div>

					</div>

					<div class="col-lg-6">
						<img src="<?= base_url() . 'assets/frontend/images/' . $bg_testimoni; ?>" class="img-fluid" alt="">
					</div>

				</div><!-- End Feature Tabs -->

				<!-- Feature Icons -->
				<div class="row feature-icons" data-aos="fade-up">
					<h3>Keanggotaan POROZ</h3>

					<div class="row">

						<div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
							<img src="<?= base_url() . 'assets/frontend/images/' . $bg_testimoni2; ?>" class="img-fluid p-4" alt="">
						</div>

						<div class="col-xl-8 d-flex content">
							<div class="row align-self-center gy-4">

								<?php foreach ($member->result() as $memb) : ?>
									<div class="col-md-6 icon-box" data-aos="fade-up">
										<i class="ri-shield-user-line"></i>
										<div>
											<a href="<?= $memb->member_link; ?>">
												<h4><?= $memb->member_name; ?></h4>
											</a>
											<p><?= $memb->member_desc; ?></p>
										</div>
									</div>
								<?php endforeach; ?>

								<!-- <div class="col-md-6 icon-box" data-aos="fade-up">
									<i class="ri-shield-user-fill"></i>
									<div>
										<a href="https://nucare.id/"><h4>NU Care - LAZISNU</h4></a>
										<p>Lembaga Amil Zakat, Infak dan Shodaqoh Nahdlatul Ulama</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
									<i class="ri-shield-user-line"></i>
									<div>
										<a href="https://lazismu.org/"><h4>LAZISMU</h4></a>
										<p>Lembaga Amil Zakat, Infak dan Shodaqoh Muhammadiyah</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
									<i class="ri-shield-user-fill"></i>
									<div>
										<a href="https://pzu.or.id/"><h4>PZU Perzis</h4></a>
										<p>Lembaga Amil Zakat Pusat Zakat Umat (PZU) Persis</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
									<i class="ri-shield-user-line"></i>
									<div>
										<a href="https://www.laznasdewandakwah.or.id/"><h4>LAZNAS Dewan Da'wah</h4></a>
										<p>Laznas Dewan Da’wah Islamiyah Indonesia</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
									<i class="ri-shield-user-fill"></i>
									<div>
										<a href="https://www.bmh.or.id/"><h4>BMH</h4></a>
										<p>Baitul Maal Hidayatullah (BMH)
										</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
									<i class="ri-shield-user-line"></i>
									<div>
									<a href="https://wiz.or.id/"><h4>WIZ</h4></a>
										<p>Lembaga Amil Zakat Wahdah Islamiyah (Wahdah Inspirasi Zakat/ WIZ)
										</p>
									</div>
								</div>

								<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
									<i class="ri-shield-user-fill"></i>
									<div>
									<a href="https://www.alirsyad.or.id/laznas/"><h4>LAZNAS Al-Irsyad</h4></a>
										<p>Laznas Al-Irsyad Al-Islamiyah
										</p>
									</div>
								</div> -->

							</div>
						</div>

					</div>

				</div><!-- End Feature Icons -->

			</div>

		</section><!-- End Features Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Our Logo Members</h2>
					<!-- <p>Temporibus omnis officia</p> -->
				</header>

				<div class="clients-slider swiper-container">
					<div class="swiper-wrapper align-items-center">
						<?php foreach ($member->result() as $memb) : ?>
							<div class="swiper-slide"><a href="<?= $memb->member_link; ?>"><img src="<?= base_url() . 'assets/backend/images/member/' . $memb->member_image; ?>" class="img-fluid" alt=""></a>
							</div>
						<?php endforeach; ?>
						<!-- <div class="swiper-slide"><a href="https://nucare.id/"><img src="assets/frontend/img/clients/c1.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://lazismu.org/"><img src="assets/frontend/img/clients/c2.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://pzu.or.id/"><img src="assets/frontend/img/clients/c3.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://www.laznasdewandakwah.or.id/"><img src="assets/frontend/img/clients/c4.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://www.bmh.or.id/"><img src="assets/frontend/img/clients/c5.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://wiz.or.id/"><img src="assets/frontend/img/clients/c6.png" class="img-fluid"
								alt=""></a>
						</div>
						<div class="swiper-slide"><a href="https://www.alirsyad.or.id/laznas/"><img src="assets/frontend/img/clients/c7.png" class="img-fluid"
								alt=""></a>
						</div> -->
					</div><br>
					<div class="swiper-pagination"></div>
				</div>
			</div>

		</section>
		<!-- End Clients Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Services</h2>
					<p>Gerakan Organisasi</p>
				</header>

				<div class="row gy-4">

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
						<div class="service-box blue">
							<i class="ri-discuss-line icon"></i>
							<h3>Fundrising</h3>
							<p>Membuat aksi nyata terhadap Palestina, baik berupa pernyataan sikap atau adanya event antar anggota.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
						<div class="service-box orange">
							<i class="ri-discuss-line icon"></i>
							<h3>Communication</h3>
							<p>Komunikasi dengan BAZNAS untuk syarat-syarat apa saja yang bisa dipenuhi untuk menjalankan sebuah program.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
						<div class="service-box green">
							<i class="ri-discuss-line icon"></i>
							<h3>Empowering</h3>
							<p>Memperjelas program Pemberdayaan Ekonomi dengan BAZNAS baik diskusi secara online atau offline.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
						<div class="service-box red">
							<i class="ri-discuss-line icon"></i>
							<h3>Sinergy</h3>
							<p>Mempersiapkan Amil-Amil muda untuk mensinergikan atau untuk mencapai tujuan bersama.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
						<div class="service-box purple">
							<i class="ri-discuss-line icon"></i>
							<h3>Education</h3>
							<p>Melakukan pelatihan-pelatihan reguler yang diakui oleh BNSP maupun pelatihan sertifikasi Amil.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
						<div class="service-box pink">
							<i class="ri-discuss-line icon"></i>
							<h3>Collaboration</h3>
							<p>Memperkuat Kolaborasi antar lembaga untuk menjalankan sebuah program.</p>
							<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

				</div>

			</div>

		</section><!-- End Services Section -->

		<!-- ======= Pricing Section ======= -->
		<!-- <section id="pricing" class="pricing">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Pricing</h2>
					<p>Check our Pricing</p>
				</header>

				<div class="row gy-4" data-aos="fade-left">

					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="box">
							<h3 style="color: #07d5c0;">Free Plan</h3>
							<div class="price"><sup>$</sup>0<span> / mo</span></div>
							<img src="assets/frontend/img/pricing-free.png" class="img-fluid" alt="">
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li class="na">Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<a href="#" class="btn-buy">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
						<div class="box">
							<span class="featured">Featured</span>
							<h3 style="color: #65c600;">Starter Plan</h3>
							<div class="price"><sup>$</sup>19<span> / mo</span></div>
							<img src="assets/frontend/img/pricing-starter.png" class="img-fluid" alt="">
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<a href="#" class="btn-buy">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
						<div class="box">
							<h3 style="color: #ff901c;">Business Plan</h3>
							<div class="price"><sup>$</sup>29<span> / mo</span></div>
							<img src="assets/frontend/img/pricing-business.png" class="img-fluid" alt="">
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<a href="#" class="btn-buy">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
						<div class="box">
							<h3 style="color: #ff0071;">Ultimate Plan</h3>
							<div class="price"><sup>$</sup>49<span> / mo</span></div>
							<img src="assets/frontend/img/pricing-ultimate.png" class="img-fluid" alt="">
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<a href="#" class="btn-buy">Buy Now</a>
						</div>
					</div>

				</div>

			</div>

		</section> -->
		<!-- End Pricing Section -->

		<!-- ======= F.A.Q Section ======= -->
		<section id="faq" class="faq">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>F.A.Q</h2>
					<p>Frequently Asked Questions</p>
				</header>

				<div class="row">
					<div class="col-lg-6">
						<!-- F.A.Q List 1-->
						<div class="accordion accordion-flush" id="faqlist1">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
										Q: Apa itu POROZ ?
									</button>
								</h2>
								<div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
									<div class="accordion-body">
										A: Perkumpulan Organisasi Pengelola Zakat atau asosiasi lembaga pengelola zakat yang bersifat nirlaba dan independen, sebagai wadah berhimpun Lembaga Amil Zakat (LAZ), terutama yang berbasis organisasi masyarakat Islam.
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
										Q: Apa aja anggota POROZ ?
									</button>
								</h2>
								<div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
									<div class="accordion-body">
										A: Ada tujuh organisasi anggota (NU Care - LAZISNU, LAZISMU, PZU, Laznas Dewan Dakwah, BMH, WIZ, dan Laznas Al-irsyad).
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
										Q: Dimana Kantor resmi POROZ ?
									</button>
								</h2>
								<div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
									<div class="accordion-body">
										A: Jl. Kramat Raya No.45, Kelurahan Kramat, Kecamatan Senen, Jakarta Pusat, Indonesia
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-6">

						<!-- F.A.Q List 2-->
						<div class="accordion accordion-flush" id="faqlist2">

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
										Q: Bagaimana cara kami menghubungi ?
									</button>
								</h2>
								<div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
									<div class="accordion-body">
										A: Bisa menghubungi kami via email (<a href="mailto:porozofficial@gmil.com">porozofficial@gmil.com</a>) atau telpon ke <a href="tel:+6281367154227">+6281367154227</a>.
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
										Q: Apa tujuan berdirinya POROZ ?
									</button>
								</h2>
								<div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
									<div class="accordion-body">
										<p><i class="bi bi-check2"></i>
											Terwujudnya jaringan antara pengelola zakat guna peningkatan pengelolaan zakat, penyatuan strategi pemberdayaan agar peran pengelola zakat berjalan optimal.</p>
										<p><i class="bi bi-check2"></i>
											Terwujudnya peningkatan kesadaran masyarakat dalam berzakat.</p>
										<p><i class="bi bi-check2"></i>
											Terwujudnya peningkatan kualitas SDM para pengelola zakat.</p>
										<p><i class="bi bi-check2"></i>
											Terwujudnya kerjasama yang baik dengan pengelola zakat nasional dan internasional.</p>
										<p><i class="bi bi-check2"></i>
											Terwujudnya jaringan dan kerjasama guna membangun hubungan aspiratif dengan pemerintah.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
										Q: Siapakah Ketua Umum POROZ ?
									</button>
								</h2>
								<div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
									<div class="accordion-body">
										A: Ketua Umum POROZ periode 2021-2023 yaitu Muhammad Abdurrouf, M.Hum.
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>

		</section>
		<!-- End F.A.Q Section -->


		<!-- ======= Testimonials Section ======= -->
		<section id="testimonials" class="testimonials">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Testimonials</h2>
					<p>Apa Kata Pengurus</p>
				</header>

				<div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
					<div class="swiper-wrapper">

						<?php foreach ($testimonial->result() as $test) : ?>
							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="stars">
										<i class="bi bi-chat-quote"></i>
									</div>
									<p>
										<?php echo $test->testimonial_content; ?>
									</p>
									<div class="profile mt-auto">
										<img src="<?php echo base_url() . 'assets/backend/images/testi/' . $test->testimonial_image; ?>" class="testimonial-img" alt="">
										<h3><?php echo $test->testimonial_name; ?></h3>
										<h4><?php echo $test->testimonial_org; ?></h4>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- End testimonial item -->

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</section><!-- End Testimonials Section -->


		<!-- ======= Recent Blog Posts Section ======= -->
		<!-- <section id="recent-blog-posts" class="recent-blog-posts">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Blog</h2>
					<p>Recent posts form our Blog</p>
				</header>

				<div class="row mb-8">

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-1.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Tue, September 15</span>
							<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit
							</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a><br>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-2.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Fri, August 28</span>
							<h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-3.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Mon, July 11</span>
							<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-1.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Tue, September 15</span>
							<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit
							</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-2.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Fri, August 28</span>
							<h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="assets/frontend/img/blog/blog-3.jpg" class="img-fluid"
									alt=""></div>
							<span class="post-date">Mon, July 11</span>
							<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>

				</div>

			</div>

		</section> -->
		<!-- End Recent Blog Posts Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Contact</h2>
					<p>Contact Us</p>
				</header>

				<div class="row gy-4">

					<div class="col-lg-6">

						<div class="row gy-4">
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-geo-alt"></i>
									<h3>Address</h3>
									<p>Jl. Kramat Raya No.45<br>Senen, Jakarta Pusat</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-clock"></i>
									<h3>Open Hours</h3>
									<p>Monday - Friday<br>9:00AM - 05:00PM</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-telephone"></i>
									<h3>Call Us</h3>
									<p><a href="tel:+62813-6715-4227">0813-6715-4227</a></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-envelope"></i>
									<h3>Email Us</h3>
									<p><a href="mailto:porozofficial@gmail.com">porozofficial@gmail.com</a></p>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-6">
						<form action="" method="post" class="php-email-form">
							<div class="row gy-4">

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5968696231766!2d106.84234061476891!3d-6.184671095522564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f504c2580197%3A0x7cdc70a95359ae1c!2sPOROZ!5e0!3m2!1sid!2sid!4v1627262869426!5m2!1sid!2sid" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

							</div>
						</form>

					</div>

				</div>

			</div>

		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?= $footer; ?>
	<!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url(''); ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/aos/aos.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/purecounter/purecounter.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url(''); ?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url(''); ?>assets/frontend/js/main.js"></script>

</body>

</html>