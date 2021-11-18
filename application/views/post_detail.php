<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="Unusia, Symposium, International Symposium">

    <!-- SEO Tags -->
    <link rel="canonical" href="<?php echo site_url('post/' . $slug); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:url" content="<?php echo site_url('post/' . $slug); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="article:publisher" content="<?php echo $site_facebook; ?>" />
    <meta property="article:section" content="<?php echo $category; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/backend/images/post/' . $image; ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/backend/images/post/' . $image; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo $description; ?>" />
    <meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/backend/images/post/' . $image; ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url('assets/frontend/images/' . $icon); ?>">
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
                    <li><a href="<?= base_url('post'); ?>">Post</a></li>
                    <li>Post Detail</li>
                </ol>
                <!-- <h2>Blog Single</h2> -->

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="<?= base_url() . 'assets/backend/images/post/' . $image; ?>" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#"><?= $title; ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#"><?= $author; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                                                datetime="2020-01-01"><?= date('d M Y', strtotime($date)); ?></time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i><a href="#"><?php echo number_format($views) . ' views'; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="#"><?php echo number_format($comment); ?></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <?= $content; ?>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="<?= site_url('category/' . $category_slug); ?>">
                                            <?= $category; ?>
                                        </a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <?php
										$split_tag = explode(",", $tags);
										foreach ($split_tag as $tag) :
										?>
											<a href="<?= site_url('tag/' . $tag); ?>"><?= $tag; ?></a> &vert;
									<?php endforeach; ?>
                                </ul>
                            </div>

                        </article><!-- End blog entry -->

                        <div class="blog-comments">

                            <h4 class="comments-count"><?php echo $comment; ?> Comments</h4>

                            <div id="comment-2" class="comment">
                                <?php foreach ($show_comments->result() as $row) : ?>
                                <div class="d-flex">
                                    <div class="comment-img"><img alt=""
                                            src="<?php echo base_url() . 'assets/backend/images/' . $row->comment_image; ?>">
                                    </div>
                                    <div>
                                        <h5><a href="javascript:void(0)"><?php echo $row->comment_name; ?></a> <a
                                                href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time
                                            datetime="2020-01-01"><?php echo date('d M Y H:i:s', strtotime($row->comment_date)); ?></time>
                                        <p>
                                            <?php echo $row->comment_message; ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
									$comment_id = $row->comment_id;
									$query = $this->db->query("SELECT * FROM tbl_comment WHERE comment_status='1' AND comment_parent='$comment_id'");
									foreach ($query->result() as $i) :
								?>
                                <div id="comment-reply-1" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img alt=""
                                                src="<?php echo base_url() . 'assets/backend/images/' . $i->comment_image; ?>">
                                        </div>
                                        <div>
                                            <h5><a href="javascript:void(0)"><?php echo $i->comment_name; ?></a> <a
                                                    href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>
                                            </h5>
                                            <time
                                                datetime="2020-01-01"><?php echo date('d M Y H:i:s', strtotime($i->comment_date)); ?></time>
                                            <p>
                                                <?php echo $i->comment_message; ?>
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #1-->
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- End comment #2-->


                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <?php echo $this->session->flashdata('msg'); ?>
                                <form method="post" action="<?php echo site_url('send_comment'); ?>" role="form">
                                    <div class="row">
                                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>
                                        <input type="hidden" name="slug" value="<?php echo $slug; ?>" required>
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" maxlength="100" required=""
                                                class="form-control" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" maxlength="100" required=""
                                                class="form-control" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*"
                                                maxlength="400" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="<?= site_url('search'); ?>" method="GET">
                                    <input type="text" name="search_query" placeholder="Search..." required>
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Related Posts</h3>
                            <?php foreach ($related_post->result() as $row) : ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <a href="<?= site_url('post/' . $row->post_slug); ?>" title="">
                                        <img src="<?= base_url() . 'assets/backend/images/thumb/' . $row->post_image; ?>"
                                            alt="">
                                        <h4><a
                                                href="<?= site_url('post/' . $row->post_slug); ?>"><?= $row->post_title; ?></a>
                                        </h4>
                                        <time
                                            datetime="2021-01-01"><?= date('d M Y', strtotime($row->post_date)); ?></time>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <?php foreach ($all_tags->result() as $row) : ?>
                                    <li><a href="<?= site_url('tag/' . $row->tag_name); ?>"><?= $row->tag_name; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

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