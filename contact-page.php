<?php 

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="map-holder pb-3">
    <div class="container">
        <div class="row">
        <iframe class="border rounded " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.000569253191!2d151.25125495077!3d-33.88963918055542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aded846947e7%3A0xc6d0d46b4039211a!2s52%20Edgecliff%20Rd%2C%20Woollahra%20NSW%202025!5e0!3m2!1spt-BR!2sau!4v1642136139210!5m2!1spt-BR!2sau" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
                        <?php dynamic_sidebar( 'contact_form' ); ?>
                <?php endif; ?>
                
            </div>
            <div class="col-lg-8 col-md-8">
                <?php 
                $table = get_field( 'timing' );

                if ( ! empty ( $table ) ) {
                    echo '<table border="0" class="table border small">';
                        if ( ! empty( $table['caption'] ) ) {
                            echo '<caption>' . $table['caption'] . '</caption>';
                        }        
                        if ( ! empty( $table['header'] ) ) {              
                            echo '<thead>';          
                                echo '<tr>';
            
                                    foreach ( $table['header'] as $th ) {
                
                                        echo '<th>';
                                            echo $th['c'];
                                        echo '</th>';
                                    }
                
                                echo '</tr>';
                
                            echo '</thead>';
                        }
                
                        echo '<tbody>';
                
                            foreach ( $table['body'] as $tr ) {
                
                                echo '<tr>';
                
                                    foreach ( $tr as $td ) {
                
                                        echo '<td>';
                                            echo $td['c'];
                                        echo '</td>';
                                    }
                
                                echo '</tr>';
                            }
                
                        echo '</tbody>';
                
                    echo '</table>';
                }
                
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>