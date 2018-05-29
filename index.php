<?php
get_header(); ?>

    <header>
        <div class="header1" style="z-index: 1;
position: relative;">
            <div class="row">
                <div class="left col-lg-1 align-self-center col-md-1 col-xl-1 align-self-md-center align-self-lg-center align-self-xl-center col-sm-1" style="line-height: 10px;
color: #000000 !important;">
                    <nav id="nav-menu-js" class="nav-menu">
                        <a href="index.html" class="nav-link" target="_parent"><?php _e( 'Home', 'lrfimages' ); ?></a>
                        <a href="about.html" class="nav-link" target="_parent"><?php _e( 'About', 'lrfimages' ); ?></a>
                        <a href="contact.html" class="nav-link" target="_parent"><?php _e( 'Contact', 'lrfimages' ); ?></a>
                        <a href="client.html" class="nav-link" target="_parent"><?php _e( 'Clients', 'lrfimages' ); ?></a>
                    </nav>                         
                </div>
                <div class="right col-lg-11 col-xl-11 col-md-11 col-sm-11">
                    <img class="logo align-self-center" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <aside class="side-content">
            <img class="logo-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
            <i id="toggle-btn" class="fa fa-chevron-down fa-lg" aria-label="menu-button" role="button" onclick="toggleMenu()"></i>
            <nav id="mobile-menu-js" class="mobile-menu" style="display: none;">
                <a href="index.html" class="nav-link" target="_parent"><?php _e( 'Home', 'lrfimages' ); ?></a>
                <a href="about.html" class="nav-link" target="_parent"><?php _e( 'About', 'lrfimages' ); ?></a>
                <a href="contact.html" class="nav-link" target="_parent"><?php _e( 'Contact', 'lrfimages' ); ?></a>
                <a href="client.html" class="nav-link" target="_parent"><?php _e( 'Clients', 'lrfimages' ); ?></a>
            </nav>
            <div id="categories-js" class="categories">
                <h2 class="category"><?php _e( 'Fashion', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Beauty', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Print', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Branding', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Digital', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Pattern', 'lrfimages' ); ?></h2>
                <h2 class="category"><?php _e( 'Music', 'lrfimages' ); ?></h2>
            </div>
        </aside>
        <main class="main-content">
            <section>
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/buckingham.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/hum.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/kylie.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Lunar/lunar3.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="http://165.227.212.230/wp-content/uploads/2018/05/kyliebw.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/gavin1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/gavin2.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Cheyanne1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Cheyanne2.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Hannah1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Hannah2.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Katherine1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Portraits/Kylie1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Lunar/lunar1.jpg" />
                <img src="http://placehold.it/500x250&text=placeholder" class="b-lazy" data-src="assets/images/Lunar/lunar4.jpg" />
            </section>
            <div class="lightbox">
                <div class="title"></div>
                <div class="filter"></div>
                <div class="arrowr"></div>
                <div class="arrowl"></div>
                <div class="close"></div>
            </div>
        </main>
    </div>        

<?php get_footer(); ?>