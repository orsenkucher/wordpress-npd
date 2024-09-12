<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Education Lite
 */
get_header(); ?>

<main id="maincontent" role="main">
    <div class="container">
        <?php
            $vw_education_lite_left_right = get_theme_mod( 'vw_education_lite_theme_options','Right Sidebar');
            if($vw_education_lite_left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
                <div id="blog_education" class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        wp_reset_postdata();
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="clearfix"></div>
        <?php }else if($vw_education_lite_left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="blog_education" class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>    
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        wp_reset_postdata();
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($vw_education_lite_left_right == 'Three Columns'){ ?>
            <div class="row">
                <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                <div id="blog_education" class="col-lg-6 col-md-6">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>    
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        wp_reset_postdata();
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
            </div>
        <?php }else if($vw_education_lite_left_right == 'Four Columns'){ ?>
            <div class="row">
                <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                <div id="blog_education" class="col-lg-3 col-md-3">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>    
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        wp_reset_postdata();
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
                <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
            </div>
        <?php }else if($vw_education_lite_left_right == 'One Column'){ ?>
            <div id="blog_education">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_format() ); 
                    endwhile;
                    wp_reset_postdata();
                    else :
                        get_template_part( 'no-results' );
                    endif; 
                ?>
                <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                    <div class="navigation">
                        <?php vw_education_lite_blog_posts_pagination(); ?>
                        <div class="clearfix"></div>
                    </div>
                <?php } ?>
            </div>
        <?php }else if($vw_education_lite_left_right == 'Grid Layout'){ ?>
            <div class="row">
                <div id="blog_education_grid" class="col-lg-9 col-md-9">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <div class="row">
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );
                            endwhile;
                            wp_reset_postdata();
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                    </div>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-3"><?php get_sidebar(); ?></div>
            </div>
        <?php }else {?>
            <div class="row">
                <div id="blog_education" class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>    
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        wp_reset_postdata();
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'vw_education_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                            <?php vw_education_lite_blog_posts_pagination(); ?>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php } ?>
    </div>
</main>

<?php get_footer(); ?>