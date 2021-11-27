<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title; ?> | POROZ</title>
    <meta name="description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
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
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
    <meta property="og:url" content="<?php echo $canonical; ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
    <meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/' . $icon); ?>">
    <link href="assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

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
                    <li>Post</li>
                </ol>
                <!-- <h2>News</h2> -->

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Result</h2>
                    <p>Category: <?= $title; ?></p>
                </header>

                <div class="row">
                    <?php foreach ($data->result() as $row) : ?>
                        <div class="col-lg-4 mb-8">
                            <div class="post-box">
                                <div class="post-img"><img src="<?php echo base_url() . 'assets/backend/images/post/' . $row->post_image; ?>" class="img-fluid" alt=""></div>
                                <span class="post-date"><?php echo date('d M Y', strtotime($row->post_date)); ?> | <a href="javascript:void(0)"></a>
                                    <?php echo $row->post_views . ' views'; ?></span>
                                <h3 class="post-title"><a href="<?= site_url('post/' . $row->post_slug); ?>"><?php echo $row->post_title; ?></a>
                                </h3>
                                <a href="<?php echo site_url('post/' . $row->post_slug); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a><br>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><br><br>
                <!--pagination-->
                <?= $page; ?>

            </div>

        </section>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $footer; ?>
    <!-- End  Footer -->

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