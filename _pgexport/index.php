<?php
get_header(); ?>

        <header style="position: fixed;
    top: 0;
    background-color: #ffffff !important;
    z-index: 1;
    width: 100%;">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-xl-3 d-none d-sm-none d-md-table d-lg-table d-xl-table" style="padding-top: 0;">
                    <a href="index.html" target="_parent">
                        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
                    </a>
                </div>
                <div class="nav col-md col-lg col-xl col-sm d-none d-sm-none d-md-table d-lg-table d-xl-table">
                    <a href="" target="_parent" style="color: #000000 !important;
    text-decoration: none !important;"> <?php _e( 'Services', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm d-none d-sm-none d-md-table d-lg-table d-xl-table">
                    <a href="#" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Bio', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm d-none d-sm-none d-md-table d-lg-table d-xl-table">
                    <a href="contact.html" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Message Me', 'lrf1' ); ?></a>
                </div>
                <div class="col-lg-3 col-md-3 col-xl-3 col col-sm d-md-table d-lg-table d-xl-table d-sm-none d-none" style="left: -9%;
    top: 3%;">
</div>
                <div class="col-lg-3 col-md-3 col-xl-3 d-table d-sm-table d-md-none d-lg-none d-xl-none col-sm-4 col-4" style="width: 66%;
    height: 100px;
    text-align: left;
    margin-left: 10px;
    margin-top: 5px;">
</div>
                <div class="mobile d-table d-sm-table d-md-none d-lg-none d-xl-none col-sm-3 col-3">
                    <div>
                        <a href="index.html" target="_parent">
                            <img class="m-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
                        </a>
                    </div>
                    <div style="margin-top: -13%;
    width: 100%;">
                        <i class="fa fa-angle-down faa-icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xl-2 d-table d-sm-table d-xl-table d-md-table d-lg-table col-4 col-sm-4" style="width: 100%;
    height: 100px;">
</div>
            </div>
        </header>
        <div class="menu-collapsed d-md-none d-lg-none d-xl-none">
            <div class="bar"></div>
            <nav>
                <ul>
                    <li>
                        <a href="#"><?php _e( 'Services', 'lrf1' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Bio', 'lrf1' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Message Me', 'lrf1' ); ?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <main style="height: 100%;
    padding-top: 100px;
    width: 100%;">
            <div class="m-coll" style="height: 0px;">
                <div class="iso-nav">
                    <ul class="collections">
                        <li data-filter=".animal">
                            <h3> <span class="colm"><?php _e( 'Animals', 'lrf1' ); ?></span> </h3>
                        </li>
                        <li data-filter=".portrait">
                            <h3> <span class="colm"><?php _e( 'Portraits', 'lrf1' ); ?></span> </h3>
                        </li>
                        <li data-filter=".branding">
                            <h3> <span class="colm"><?php _e( 'Branding', 'lrf1' ); ?></span> </h3>
                        </li>
                        <li data-filter=".fashion">
                            <h3> <span class="colm"><?php _e( 'Fashion', 'lrf1' ); ?></span> </h3>
                        </li>
                        <li data-filter=".fineart">
                            <h3> <span class="colm"><?php _e( 'Fine Arts', 'lrf1' ); ?></span> </h3>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" style="width: 100%;
    height: 100%;
    float: left;">
                <div class="col-auto d-none d-md-table d-lg-table d-xl-table order-first order-lg-first col-lg-2 col-xl-2 col-md-2 col-sm-auto d-sm-none" style="width: 100%;
    height: 100%;
    position: fixed;
    text-decoration: none;
    z-index: 1;">
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
                <div class="order-2 order-lg-2 d-sm-table d-md-table d-lg-table d-xl-table col-lg-10 col-xl-10 order-md-2 order-sm-2 order-xl-2 col-md-10 col-12 col-sm-12 pix">
                    <div class="main-iso" id="main" style="width: 100%;
    height: 100%;">
                        <div class="item animal photo-item">
                            <a href="https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg?auto=compress&cs=tinysrgb&h=350" class="fancybox">
                                <img class="image" src="https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">
                            </a>
                        </div>
                        <div class="item portrait photo-item">
                            <a href="https://assets.vogue.com/photos/59726f1974b72106b2ef2a5d/master/pass/00-lede-prince-george-4th-birthday-portrait.jpg" class="fancybox">
                                <img class="image port" src="https://assets.vogue.com/photos/59726f1974b72106b2ef2a5d/master/pass/00-lede-prince-george-4th-birthday-portrait.jpg" alt="">
                            </a>
                        </div>
                        <div class="item branding photo-item">
                            <a href="http://www.infinity-intellectual.com/wp-content/uploads/2015/07/Branding-1200x721.jpg" class="fancybox">
                                <img class="image" src="http://www.infinity-intellectual.com/wp-content/uploads/2015/07/Branding-1200x721.jpg" alt="">
                            </a>
                        </div>
                        <div class="item animal photo-item zebra">
                            <a href="http://r.ddmcdn.com/s_f/o_1/cx_297/cy_0/cw_1201/ch_1201/w_720/APL/uploads/2014/08/wild-animal-safari-zebra-5371037.jpg" class="fancybox">
                                <img class="image zebra" src="http://r.ddmcdn.com/s_f/o_1/cx_297/cy_0/cw_1201/ch_1201/w_720/APL/uploads/2014/08/wild-animal-safari-zebra-5371037.jpg" alt="">
                            </a>
                        </div>
                        <div class="item animal photo-item">
                            <a href="https://s.hswstatic.com/gif/animal-stereotype-orig.jpg" class="fancybox">
                                <img class="image" src="https://s.hswstatic.com/gif/animal-stereotype-orig.jpg" alt="">
                            </a>
                        </div>
                        <div class="item animal photo-item">
                            <a href="https://static.boredpanda.com/blog/wp-content/uploads/2017/01/funny-animal-selfies-4-587deb35425b9__605.jpg" class="fancybox">
                                <img class="image" src="https://static.boredpanda.com/blog/wp-content/uploads/2017/01/funny-animal-selfies-4-587deb35425b9__605.jpg" alt="">
                            </a>
                        </div>
                        <div class="item portrait photo-item">
                            <a href="http://rankin.co.uk/media/6284-2-046_f9-copy-324x420.jpg" class="fancybox">
                                <img class="image port" src="http://rankin.co.uk/media/6284-2-046_f9-copy-324x420.jpg" alt="">
                            </a>
                        </div>
                        <div class="item branding photo-item">
                            <a href="https://themmit.com/wp-content/uploads/2018/01/BrandingPortfolio.jpg" class="fancybox">
                                <img class="image" src="https://themmit.com/wp-content/uploads/2018/01/BrandingPortfolio.jpg" alt="">
                            </a>
                        </div>
                        <div class="item fashion photo-item">
                            <a href="https://media.gq.com/photos/597a3d6c0dfbaf62dc47e0ca/master/pass/Milo%20Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" class="fancybox">
                                <img class="image port" src="https://media.gq.com/photos/597a3d6c0dfbaf62dc47e0ca/master/pass/Milo%20Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" alt="">
                            </a>
                        </div>
                        <div class="item fineart photo-item">
                            <a href="https://cdn.shopify.com/s/files/1/1109/5626/products/Free-Bird_1024x1024.jpg?v=1479506125" class="fancybox">
                                <img class="image" src="https://cdn.shopify.com/s/files/1/1109/5626/products/Free-Bird_1024x1024.jpg?v=1479506125" alt="">
                            </a>
                        </div>
                        <div class="item fashion photo-item">
                            <a href="https://media.allure.com/photos/58e27bf882145034c5ad10a8/1:1/w_767/fashionnova.jpg" class="fancybox">
                                <img class="image" src="https://media.allure.com/photos/58e27bf882145034c5ad10a8/1:1/w_767/fashionnova.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>        

<?php get_footer(); ?>