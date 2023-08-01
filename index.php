<?php get_header() ?>
        <div id=contenido-principal class="fila">
            <div class="col-12-movil">
            <?php if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
                the_content();
            endwhile; else:
              _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif; ?>
            </div>  
        </div>
<?php get_footer() ?>