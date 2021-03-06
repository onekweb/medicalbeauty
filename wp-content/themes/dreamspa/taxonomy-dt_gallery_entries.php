<?php get_header();
	$page_layout  = dttheme_option( 'specialty', 'gallery-archives-layout' );
	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";
	$post_layout = dttheme_option( 'specialty', 'gallery-archives-post-layout' );
	$post_layout  = !empty( $post_layout ) ? $post_layout : "one-column";

	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";

	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "page-with-sidebar with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}

	switch($post_layout):
		case 'one-column':
			$post_class = $show_sidebar ? "dt-gallery column dt-sc-one-column with-sidebar" : "dt-gallery column dt-sc-one-column ";
			$columns = 1;
		break;

		case 'one-half-column';
			$post_class = $show_sidebar ? "dt-gallery column dt-sc-one-half with-sidebar " : "dt-gallery column dt-sc-one-half ";
			$columns = 2;
		break;

		case 'one-third-column':
			$post_class = $show_sidebar ? "dt-gallery column dt-sc-one-third with-sidebar " : "dt-gallery column dt-sc-one-third ";
			$columns = 3;
		break;

		case 'one-fourth-column':
			$post_class = $show_sidebar ? "dt-gallery column dt-sc-one-fourth with-sidebar " : "dt-gallery column dt-sc-one-fourth";
			$columns = 4;
		break;
	endswitch;

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo $sidebar_class;?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>
			<section id="primary" class="<?php echo $page_layout;?>">
				<!-- Gallery Items Container Start-->
				<div class="dt-sc-gallery-container gallery with-space"><?php
					if( have_posts() ):
						$i = 1;
						while( have_posts() ):
							the_post();
							$the_id = get_the_ID();


							$temp_class = "";
							if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
							if($i == $columns) $i = 1; else $i = $i + 1;

							$gallery_item_meta = get_post_meta($the_id,'_gallery_settings',TRUE);
							$gallery_item_meta = is_array($gallery_item_meta) ? $gallery_item_meta  : array();?>
							<div id="<?php echo "dt_galleries-{$the_id}";?>" class="<?php echo "{$temp_class} with-space";?>">
								<figure><?php
									$popup = "http://placehold.it/1060x795&text=DesignThemes";

									if( array_key_exists('items_name', $gallery_item_meta) ) {
										$item =  $gallery_item_meta['items_name'][0];
										$popup = $gallery_item_meta['items'][0];

										if( "video" === $item ) {
											$items = array_diff( $gallery_item_meta['items_name'] , array("video") );

											if( !empty($items) ) {
												echo "<img src='".$gallery_item_meta['items'][key($items)]."' width='1060' height='795' alt='' />";	
		                        			} else {
		                        				echo '<img src="http://placehold.it/1060x795&text=DesignThemes" width="1060" height="795" alt="">';
		                        			}
		                        		} else {
		                        			echo "<img src='".$gallery_item_meta['items'][0]."' width='1060' height='795' alt=''/>";
		                        		}
		                        	} else {
                        				echo "<img src='{$popup}'/>";
                        			}?>
                        			<div class="image-overlay">
                        				<div class="image-overlay-details">
                        					<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
                        					<div class="links">
                                            	<a href="<?php echo $popup;?>" data-gal="prettyPhoto[gallery]" title=""> <span class="fa fa-search-plus"> </span> </a>
                                            	<a href="<?php the_permalink();?>" title=""> <span class="fa fa-external-link"> </span> </a><?php
                                            	if(dttheme_is_plugin_active('roses-like-this/likethis.php')): ?>
	                                            	<div class="views">
    	                                        		<span class="fa fa-heart"> </span><?php printLikes($post->ID);?>
        	                                    	</div><?php 
            	                                endif;?>	
                	        				</div>
                    	    			</div>
                        				<a class="close-overlay hidden"> x </a>
                        			</div>
								</figure>
								<div class="dt-gallery-details">
									<div class="dt-gallery-details-inner">
										<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
										<?php if( array_key_exists("sub-title",$gallery_item_meta) ):?>
												<h6><?php echo $gallery_item_meta["sub-title"];?></h6>
										<?php endif;?>
									</div>
								</div>
							</div><?php
						endwhile;
					endif;?>
				</div><!-- Gallery Items Container End-->

				<div class="pagination">
					<div class="prev-post"><?php previous_posts_link(__('Prev','dt_themes'));?></div>
					<?php echo dttheme_pagination();?>
					<div class="next-post"><?php next_posts_link( __('Next','dt_themes') );?></div>
				</div>
			</section><!-- **Primary - End** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo $sidebar_class;?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;
get_footer();?>