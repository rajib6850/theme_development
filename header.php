<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(  ); ?>>
        <div class="wrapper">


            
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="Image">
                    <h1 class="font-weight-bold">Kate Glover</h1>
                    <p class="mb-4">
                        Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem at sit dolor dolores sed diam justo
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>


            <div class="content">
                <!-- Navbar Start -->
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">


                        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>



                        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">

                            <?php 
                                wp_nav_menu( [

                                    'theme_location' => 'main_menu',
                                    'menu' => 'main_menu',
                                    'menu_class' => 'navbar-nav m-auto',

                                ] );

                             ?>
                        </div>




                    </nav>
                </div>
                <!-- Navbar End -->