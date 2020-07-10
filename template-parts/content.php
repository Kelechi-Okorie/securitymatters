<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://www.securitymatters.com
 *
 * @package SecurityMatters
 * @subpackage Security_Matters
 * @since Security Matters 1.0
 */

?>

<?php
if(!is_singular()) { ?>
<article <?php post_class('col-md-4 mb-2 content-article-post-multiple'); ?> id="post-<?php the_ID(); ?>">
    <div class="card" style="">
        <div class="card-body p-4">
            <?php get_template_part('template-parts/entry-author-bio'); ?>

            <div class="mt-3" id="card-content">
                <a class="text-dark" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
            </div>
            
            <?php the_category(); ?>

            <div class="socials align-items-end">
                <ul class="d-flex flex-row-reverse">
                    <li><a href="" class="text-dark"><i class="fas fa-bookmark"></i></a></li>
                    <li><a href="" class="text-dark"><i class="fas fa-share"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</article>
<?php 
} 
else { ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article <?php post_class('content-article-post-singular text-justify'); ?> id="post-<?php the_ID(); ?>">
                    <div class="X">
                        <?php the_title('<h1 class="text-center">', '</h1>'); ?>
                
                        <?php get_template_part('template-parts/entry-author-bio'); ?>
                                        
                        <?php if(has_post_thumbnail()) { ?>
                            <figure class=""><?php the_post_thumbnail(); ?></figure>
                        <?php } ?>
                
                        <?php the_content(); ?>
                        <hr>
                        <?php the_category(''); ?>

                        <!-- <?php get_template_part('template-parts/socials') ?> -->
                    </div>
                </article>
            </div>
            <div class="col-lg-3">
                <?php get_sidebar('main-sidebar'); ?>
            </div>
        </div>

    </div>
<?php } ?>