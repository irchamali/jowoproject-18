<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= site_url(); ?>" class="logo d-flex align-items-center">
			<img src="<?= base_url() . 'assets/frontend/images/' . $logo; ?>" width="145" height="40" alt="" />
		</a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="<?= base_url(''); ?>">Home</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url(''); ?>#about">About</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url(''); ?>#services">Services</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('gallery'); ?>">Gallery</a></li>
                <li><a class="active" href="<?= base_url('team'); ?>">Team</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('post'); ?>">News</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url(''); ?>#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="<?= base_url(''); ?>#about"><i class="bi bi-search"></i></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>