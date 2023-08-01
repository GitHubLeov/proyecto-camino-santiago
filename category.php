<?php get_header() ?>
        <div id="contenido-principal" class="fila">
            <div class="col-12-movil">
            <?php if ( is_category ('caminos') ) : dynamic_sidebar( 'intro-caminos' );
else : dynamic_sidebar( 'intro-blog' );
    endif;?>
            </div> 
        </div>
    <div class="fila caja-entradas">
            <?php
        if ( have_posts() ) :
         while ( have_posts() ) : the_post(); ?>  
        <div class="col-12-movil col-12-tablet-vertical col-6-tablet-horizontal col-6-escritorio col-6-escritorio-xl">   
            <div class="contenido-posts fila">
                <div class="titulo-entraditas col-12-movil">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="col-12-movil img-entrada">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>  
                <div class="col-12-movil extracto">
                    <?php the_excerpt(); ?> 
                </div>  
            </div> 
        </div>
        <?php endwhile;
else:
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif; ?>  
    </div>
    <div class="fila">
        <div class="col-12-movil">
        <?php dynamic_sidebar( 'pre-footer' );?>
        </div>
    </div>      
<?php get_footer(); ?>