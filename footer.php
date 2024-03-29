    <footer class="main-footer bg-dark text-white pt-5 pb-3">
      <div class="container">
        <div class="row">

            <?php if ( is_active_sidebar( 'footer_sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_sidebar' ); ?>
            <?php endif; ?>

        </div>
      </div>
    </footer>
    
    <div class="copy bg-dark pt-3 pb-3 border-black">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="small m-0 text-white">Copyright &copy; <?php echo date('Y'); ?>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sign-up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign-up to Get Started</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php if ( is_active_sidebar( 'sign_up_form' ) ) : ?>
                      <?php dynamic_sidebar( 'sign_up_form' ); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>