<?php
/**
 * The template for displaying Author info
 *
 * @package SecurityMatters
 * @subpackage SecurityMatters
 * @since SecurityMatters 1.0
 */

if (!is_single()  /* (bool) get_the_author_meta( 'description' ) && (bool) get_theme_mod( 'show_author_bio', true ) */ ) { ?>
<div class="entry-author-bio">
	<div class="author-bio d-flex">
		<div class="author-avatar vcard">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
		</div>
        <div class="author-description ml-2">
            <h6 class="text-capitalize m-0">
                <?php
                    printf(
                        /* translator: %s: Author name. */
                        esc_html( get_the_author() )        
                    );
                ?> <span class="font-weight-normal text-muted">&bull; <?php the_date(); ?></span>
            </h6>
            <span>Security Expert</span>
        </div>
	</div><!-- .entry-author-bio -->
</div><!-- .author-description -->
<?php } else { ?>
    <div id="entry-author-single-page" >
        <div class="<!-- entry-author-bio --> d-flex justify-content-center">
            <div class=" author-avatar vcard mx-2">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
            </div>
            <h6 class="text-capitalize m-0 mx-2">
                <span class="text-muted font-italic">written by</span><br>
                <a href="<?php get_the_author_meta('user_url') ?>">
                <?php
                    
                    printf(
                        /* translator: %s: Author name. */
                        esc_html( get_the_author() )        
                    );
                ?> 
                </a>
            </h6>
            <h6 class="mx-2">
                <span class="text-muted font-italic">posted on</span><br>
                <a class="font-weight-normal"><?php the_date(); ?></a>
            </h6>
        </div>

    </div>
<?php } ?>
