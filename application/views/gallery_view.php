<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title; ?></title>
    <meta name="description" content="Gallery of <?php echo $meta_description; ?>, etc" />
    <meta content="" name="keywords">
    <!-- SEO Tags -->
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php error_reporting(0);
	if (empty($url_prev)) : ?>
    <?php else : ?>
    <link rel="prev" href="<?php echo $url_prev; ?>" />
    <?php endif; ?>
    <link rel="next" href="<?php echo $url_next; ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="Gallery of <?php echo $meta_description; ?>, etc" />
    <meta property="og:url" content="<?php echo $canonical; ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Gallery of <?php echo $meta_description; ?>, etc" />
    <meta name="twitter:title" content="<?php echo $judul; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/' . $icon); ?>">
    <link href="<?= base_url(''); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?= base_url(''); ?>">Home</a></li>
                    <li>Gallery</li>
                </ol>
                <!-- <h2>Gallery</h2> -->

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our latest activity</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>

                            <!-- <li data-filter=".filter-card">Articles</li>
                            <li data-filter=".filter-web">News</li> -->
                            <!-- <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php foreach ($data->result() as $apost) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url() . 'assets/backend/images/thumb/' . $apost->post_image; ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?php echo $apost->post_title; ?></h4>
                                <p><?php echo date('d M Y', strtotime($apost->post_date)); ?></p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url() . 'assets/backend/images/thumb/' . $apost->post_image; ?>"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?php echo $apost->post_title; ?>"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="<?= site_url('post/' . $apost->post_slug); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
                
            </div>

        </section>
        <!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $footer; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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