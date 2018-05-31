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
        <main style="height: 100%;
    padding-top: 100px;
    width: 100%;">
            <div class="row" style="width: 100%;
    height: 100%;
    margin-left: 0;">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xl-3 col-auto d-none d-sm-table d-md-table d-lg-table d-xl-table order-first order-lg-first" style="width: 100%;
    height: 100%;
    position: fixed;
    text-decoration: none;">
                    <div class="iso-nav">
                        <ul class="collections">
                            <li data-filter=".animal">
                                <h3> <span class="col"><?php _e( 'Animals', 'lrf1' ); ?></span> </h3>
                            </li>
                            <li data-filter=".portrait">
                                <h3> <span class="col"><?php _e( 'Portraits', 'lrf1' ); ?></span> </h3>
                            </li>
                            <li data-filter=".branding">
                                <h3> <span class="col"><?php _e( 'Branding', 'lrf1' ); ?></span> </h3>
                            </li>
                            <li data-filter=".fashion">
                                <h3> <span class="col"><?php _e( 'Fashion', 'lrf1' ); ?></span> </h3>
                            </li>
                            <li data-filter=".fineart">
                                <h3> <span class="col"><?php _e( 'Fine Arts', 'lrf1' ); ?></span> </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-lg-9 col-xl-9 col-12 order-2 order-lg-2 d-sm-table d-md-table d-lg-table d-xl-table pl-lg-auto" style="width: 100%;
    height: 100%;
    margin-left: 25%;">
                    <div class="main-iso">
                        <div class="item animal photo-item">
                            <img class="image" src="https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">
                            <span> <p><?php _e( 'Animals', 'lrf1' ); ?><br><hr><?php _e( 'Tiger', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item portrait photo-item">
                            <img class="image" src="https://assets.vogue.com/photos/59726f1974b72106b2ef2a5d/master/pass/00-lede-prince-george-4th-birthday-portrait.jpg" alt="">
                            <span> <p><?php _e( 'Portraits', 'lrf1' ); ?><br><hr><?php _e( 'Boy', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item branding photo-item">
                            <img class="image" src="http://www.infinity-intellectual.com/wp-content/uploads/2015/07/Branding-1200x721.jpg" alt="">
                            <span> <p><?php _e( 'Branding', 'lrf1' ); ?><br><hr><?php _e( 'Words', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item animal photo-item">
                            <img class="image" src="http://r.ddmcdn.com/s_f/o_1/cx_297/cy_0/cw_1201/ch_1201/w_720/APL/uploads/2014/08/wild-animal-safari-zebra-5371037.jpg" alt="">
                            <span> <p><?php _e( 'Animals', 'lrf1' ); ?><br><hr><?php _e( 'Zebra', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item animal photo-item">
                            <img class="image" src="https://s.hswstatic.com/gif/animal-stereotype-orig.jpg" alt="">
                            <span> <p><?php _e( 'Animals', 'lrf1' ); ?><br><hr><?php _e( 'Dog', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item animal photo-item">
                            <img class="image" src="https://static.boredpanda.com/blog/wp-content/uploads/2017/01/funny-animal-selfies-4-587deb35425b9__605.jpg" alt="">
                            <span> <p><?php _e( 'Animals', 'lrf1' ); ?><br><hr><?php _e( 'Gang', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item portrait photo-item">
                            <img class="image" src="http://rankin.co.uk/media/6284-2-046_f9-copy-324x420.jpg" alt="">
                            <span> <p><?php _e( 'Portraits', 'lrf1' ); ?><br><hr><?php _e( 'Thought', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item branding photo-item">
                            <img class="image" src="https://themmit.com/wp-content/uploads/2018/01/BrandingPortfolio.jpg" alt="">
                            <span> <p><?php _e( 'Branding', 'lrf1' ); ?><br><hr><?php _e( 'Light Bulb', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item fashion photo-item">
                            <img class="image" src="https://media.gq.com/photos/597a3d6c0dfbaf62dc47e0ca/master/pass/Milo%20Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" alt="">
                            <span> <p><?php _e( 'Fashion', 'lrf1' ); ?><br><hr><?php _e( 'Man', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item fineart photo-item">
                            <img class="image" src="https://cdn.shopify.com/s/files/1/1109/5626/products/Free-Bird_1024x1024.jpg?v=1479506125" alt="">
                            <span> <p><?php _e( 'Fine Art', 'lrf1' ); ?><br><hr><?php _e( 'Bird', 'lrf1' ); ?></p> </span>
                        </div>
                        <div class="item fashion photo-item">
                            <img class="image" src="https://media.allure.com/photos/58e27bf882145034c5ad10a8/1:1/w_767/fashionnova.jpg" alt="">
                            <span> <p><?php _e( 'Fashion', 'lrf1' ); ?><br><hr><?php _e( 'Womens Style', 'lrf1' ); ?></p> </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>        

<?php get_footer(); ?>