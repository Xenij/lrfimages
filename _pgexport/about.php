<?php
/*
 Template Name: about
 */
?>
<?php
get_header(); ?>

        <header style="position: fixed;
    top: 0;
    background-color: #ffffff !important;
    z-index: 1;
    width: 100%;">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3" style="padding-top: 2%;">
</div>
                <div class="nav col-md col-lg col-xl col-sm">
                    <a href="about.html" target="_parent" style="color: #000000 !important;
    text-decoration: none !important;"> <?php _e( 'About', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm">
                    <a href="#" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Contact', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm">
                    <a href="#" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Clients', 'lrf1' ); ?></a>
                </div>
                <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3">
                    <a href="index.html" target="_parent">
                        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xl-2 col-sm-2">
</div>
            </div>
        </header>
        <div class="section fold">
            <div class="parallelogram  parallelogram-1 animated slideInRight">
                <div class="photo photo1">
</div>
            </div>
            <div class="parallelogram  parallelogram-2 animated slideInRight">
                <div class="photo photo2">
</div>
            </div>
            <div class="parallelogram  parallelogram-3 animated slideInRight">
                <div class="photo photo3">
</div>
            </div>
        </div>
        <div class="section fold">
            <div class="photographer">
                <p><?php _e( 'Test Words', 'lrf1' ); ?></p>
            </div>
        </div>        

<?php get_footer(); ?>