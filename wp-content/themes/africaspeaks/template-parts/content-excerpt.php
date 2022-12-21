<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AfricaSpeaks
 */

?>
<div class="col-12 col-sm-6 col-md-4 my-4">
<div class="rounded10 p-3 position-relative articleBox rounded10 ">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		// if ( is_singular() ) :
		// 	the_title( '<h3 class="entry-title">', '</h3>' );
		
		// endif;

		// if ( 'post' === get_post_type() ) :
		// 	?>

							
		<?php //endif; ?>
	</header>
						<?php 
							if (has_post_thumbnail()) {					
							
						?>
                            <div class="blogPostImageDiv mb-4">
							<img class="w-100 roundedImage img-fluid" src=" <?php the_post_thumbnail();?> 
									
                            
                            </div>
						<?php } ?>
                           
                          
							<p class="small mt-2 textGrey"><?php  echo get_the_date('M d, Y'); ?></p>
							<?php the_title( '<h3 class="redColor nomargin"  ><a class="redColor blogTitles"  href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

                           
                            <p>                            <?php the_excerpt() ?> </p>
                    
                           

</article>

							</div>
							</div>
