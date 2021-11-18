<footer id="footer" class="footer">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 text-center">
						<h4>Our Newsletter</h4>
						<p>Submit email anda untuk mendapat informasi terbaru dari kami</p>
					</div>
					<div class="col-lg-6">
						<form action="<?= site_url('subscribe'); ?>" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>
					<div><?= $this->session->flashdata('message'); ?></div>
				</div>
			</div>
		</div>

		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="index.html" class="logo d-flex align-items-center">
							<img src="assets/frontend/img/logo1.png" alt="">
							<!-- <span>POROZ</span> -->
						</a>
						<p>Perkumpulan Organisasi Pengelola Zakat (POROZ) berdiri sebagai sebuah organisasi yang berhikmat dan berkhidmat untuk ummat.</p>
						<div class="social-links mt-3">
							<a href="<?= $link_fb; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="<?= $link_ig; ?>" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
							<a href="<?= $link_twit; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
							<a href="<?= $link_linked; ?>" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url(''); ?>#about">About us</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url(''); ?>#services">Services</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-6 footer-links">
						<h4>Other Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('team'); ?>">Team</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('gallery'); ?>">Gallery</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('post'); ?>">News</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
						<h4>Contact Us</h4>
						<p>
							Jl. Kramat Raya 45<br>
							Jakarta Pusat<br>
							Indonesia <br><br>
							<!-- <strong>Phone : </strong><a href="tel:+62813-6715-4227">0813-6715-4227</a><br>
							<strong>Email : </strong><a href="mailto:porozofficial@gmail.com">porozofficial@gmail.com</a><br> -->
						</p>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span><a href="https://jowokode.com/">POROZ</a></span></strong>.id <?= date('Y'); ?>
			</div>
			<!-- <div class="credits">
				Designed by <a href="https://jowokode.com/">Jowokode</a>
			</div> -->
		</div>
	</footer>