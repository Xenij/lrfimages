<?php
get_header( 'contact' ); ?>

        <header style="position: fixed;
    top: 0;
    background-color: #ffffff !important;
    z-index: 1;
    width: 100%;">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3" style="padding-top: 0;">
                    <a href="index.html" target="_parent">
                        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/logo.png">
                    </a>
                </div>
                <div class="nav col-md col-lg col-xl col-sm">
                    <a href="" target="_parent" style="color: #000000 !important;
    text-decoration: none !important;"> <?php _e( 'Services', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm">
                    <a href="#" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Bio', 'lrf1' ); ?></a>
                </div>
                <div class="nav col-lg col-md col-xl col-sm">
                    <a href="contact.html" target="_parent" style="color: #000000 !important;
    text-decoration: none;"> <?php _e( 'Message Me', 'lrf1' ); ?></a>
                </div>
                <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3">
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
                <div class="col-12 d-sm-table d-md-table d-lg-table d-xl-table pl-lg-auto col-sm-12 col-md-12 col-lg-12 col-xl-12" style="width: 100%;
    height: 100%;
    padding-bottom: 10%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="height: 100%;"> 
                                <div class="row" style="height: 100%;">
                                    <div class="col-lg col-xl col-md col-sm"> </div>
                                    <div class="col-md-5 col-lg-5 text-left col-xl-5 col-sm-5">
                                        <h2> <?php _e( 'Our Services', 'lrf1' ); ?> </h2>
                                        <p> <?php _e( 'Lorem ipsum dolor sit amet, eu vim consulatu dissentias. Ad sea rebum fierent laboramus, ei eum impetus platonem iudicabit. Ei ius dicit elaboraret. Ea error. Lorem ipsum dolor sit amet, eu vim consulatu dissentias.', 'lrf1' ); ?> </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 text-left col-xl-3 col-sm-3">
                                        <h2> <?php _e( 'Design', 'lrf1' ); ?> </h2>
                                        <ul style="text-align: left;
    padding-left: 0;">
                                            <li>
                                                <?php _e( 'Logo', 'lrf1' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Branding', 'lrf1' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Visual idenetity', 'lrf1' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Webdesign (UI)', 'lrf1' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Digital Strategy', 'lrf1' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg col-md col-sm col-xl"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;
    margin-top: 10%;">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3" style="width: 100%;">
                                <form id="contact-form" class="form" action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" method="POST" role="form" style="position: relative;
    width: 100%;
    margin-left: 50%;">
                                    <div class="form-group">
                                        <label class="form-label" for="name">
                                            <?php _e( 'Your Name', 'lrf1' ); ?>
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
                                    </div>                                     
                                    <div class="form-group">
                                        <label class="form-label" for="email">
                                            <?php _e( 'Your Email', 'lrf1' ); ?>
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                                    </div>                                     
                                    <div class="form-group">
                                        <label class="form-label" for="subject">
                                            <?php _e( 'Subject', 'lrf1' ); ?>
                                        </label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                                    </div>                                     
                                    <div class="form-group">
                                        <label class="form-label" for="message">
                                            <?php _e( 'Message', 'lrf1' ); ?>
                                        </label>
                                        <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                         
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-start-order">
                                            <?php _e( 'Send Message', 'lrf1' ); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>        

<?php get_footer( 'contact' ); ?>