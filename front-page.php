<?php

/**
 * Template Name: Front Page 
 */

get_header(); ?>


 <header class="main-header pt-5 pb-5 border-bottom">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-6 ">
                 <!-- Front Page Widget Text -->
                <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                        <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                <?php endif; ?>
                <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Sign-up
                </a>
             </div>
             <div class="col-lg-6 col-md-6">
                 <!-- Front Page Widget Img -->
                <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
                        <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
                <?php endif; ?>
             </div>
         </div>
     </div>
 </header>

 <section class="features pt-3 pb-3 mt-3">
     <div class="container">
         <div class="row">

             <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature-holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_one_image'); ?>" alt="Some Feature Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_one_text'); ?>
                    </div>
                </div>
             </div>

             <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature-holder small border rounded mb-3">
                <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_two_image'); ?>" alt="Some Feature Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_two_text'); ?>
                    </div>
                </div>
             </div>

             <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature-holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_three_image'); ?>" alt="Some Feature Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_three_text'); ?>
                    </div>
                </div>
             </div>

         </div>
     </div>
 </section>

 <section class="course_cat border-top pt-3 pb-3">
     <div class="container">
         <div class="row d-flex justify-content-center">
             <div class="col-lg-6 col-md-6">
                    <div class="course_cat_text text-center small">
                         <!-- Course Cat Text -->
                        <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
                                <?php dynamic_sidebar( 'course_cat_text' ); ?>
                        <?php endif; ?>
                        <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>Sign-up
                        </a>
                    </div>
             </div>
         </div>

         <div class="row mt-4">
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/job-oriented/" class="card text-decoration-none text-dark text-center mb-3">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri();?>/img/Certification-Courses-in-Bangalore.jpg" alt="Job Oriented Courses">
                        <div class="card-body">
                            <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                        </div>
                    </div>         
                </a>
                
            </div>           
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/short-term/" class="card text-decoration-none text-dark text-center mb-3">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri();?>/img/Job-Oriented-Courses-in-Bangalore.jpg" alt="Short Term Courses">
                        <div class="card-body">
                            <h3 class="m-0 fs-6 fw-600">Short Term Courses</h3>
                        </div>
                    </div>         
                </a>
                
            </div>           
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/online/" class="card text-decoration-none text-dark text-center mb-3">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri();?>/img/Online-Courses-in-Bangalore.jpg" alt="Online Courses">
                        <div class="card-body">
                            <h3 class="m-0 fs-6 fw-600">Online Courses</h3>
                        </div>
                    </div>         
                </a>
                
            </div>           
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/certificate/" class="card text-decoration-none text-dark text-center mb-3">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri();?>/img/Short-Term-Courses-in-Bangalore.jpg" alt="Certification Courses">
                        <div class="card-body">
                            <h3 class="m-0 fs-6 fw-600">Certification Courses</h3>
                        </div>
                    </div>         
                </a>
                
            </div>                            
         </div>
     </div>
 </section>

 <section class="services border-top pt-5 pb-5">
     <div class="container">
         <div class="row d-flex justify-content-center">
         <div class="col-lg-6 col-md-6">
                    <div class="course_cat_text text-center small">
                         <!-- Course Cat Text -->
                        <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
                                <?php dynamic_sidebar( 'services_text' ); ?>
                        <?php endif; ?>
                        <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>Sign-up
                        </a>
                    </div>
             </div>
         </div>
     </div>
 </section>

 <section class="main-content border-top pb-3 pt-4">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-6">
                <div class="content-area">
                    <?php the_content(); ?>
                </div>              
             </div>
             <div class="col-lg-6 col-md-6">
             <?php 

                if ( has_post_thumbnail() ) { ?>
                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title(); ?>">
                <?php }else{ ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                <?php }

             ?>
             </div>
         </div>
     </div>
 </section>

<?php get_footer(); ?>