<?php get_header() ?>
        <div id=menu-rutas class="fila">
            <div class="col-12-movil">
               <?php if ( is_single(array( 1206, 'camino-primitivo' , 1193 , 1188 , 1179 , 1173 , 1155 , 1144 )) ) {
                wp_nav_menu( array( 'theme_location' => 'menu-rutas-camino' ) );
                 } ?>
            </div>
        </div>
        <div id=contenido-principal class="fila">
                    <?php if ( has_tag(array( 'barra-lateral', 'blog', 'ultimas entradas' )) ) { ?>
                   
                    <div id="barra-lateral-blog" class="col-12-movil col-4-tablet-vertical col-4-tablet-horizontal col-4-escritorio col-4-escritorio-xl"> 
                         <?php dynamic_sidebar( 'barra-lateral' ); ?>
                    </div>

                    <?php } ?>

                <div id="contenido-camino-central" class="col-12-movil"> 
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post();?>
                    <div class="fila">
                        <div class="col-12-movil">
                            <?php the_content();?>
                        </div>
                        <nav class="col-12-movil">
                            <ul id="paginacion">
                                <li class="next"><?php next_post_link('&laquo; %link','%title',true); ?></li>
                                <li class="previous"><?php previous_post_link('%link &raquo;','%title',true); ?></li>
                                
                            </ul>
                        </nav>  

                    </div>   
                <?php  endwhile; 
else:  
  _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif; ?>

                </div>   
                
        </div>  
        <div id="pre-footer" class="fila">
             <div class="col-12-movil">
                <?php dynamic_sidebar( 'pre-footer' );?>
         </div>
    </div>         
<?php get_footer() ?>




