<?php
/**
 * The template for displaying the content.
 * @package Newsup
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <!-- mg-posts-sec mg-posts-modul-6 -->
                            <div class="mg-posts-sec mg-posts-modul-6">
                                <!-- mg-posts-sec-inner -->
                                <div class="mg-posts-sec-inner">
                                    <?php while(have_posts()){ the_post(); ?>
                                    <article class="mg-posts-sec-post">
                                        <div class="standard_post">
                                            <?php if(has_post_thumbnail()) { ?>
                                            <div class="mg-thum-list col-md-6">

                                                <div class="mg-post-thumb">
                                                    <?php
                                                    echo '<a class="mg-blog-thumb" href="'.esc_url(get_the_permalink()).'">';
                                                    the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
                                                    echo '</a>';
                                                     
                                                    ?>
                                                </div>

                                            </div>
                                            <?php }  ?>
                                            <div class="list_content col">
                                                <div class="mg-sec-top-post">
                                                    <div class="mg-blog-category"> 
                                                        <?php newsup_post_categories(); ?>
                                                    </div>

                                                    <h1 class="entry-title title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                                                    <?php newsup_post_meta(); ?>
                                                </div>

                                                <div class="mg-posts-sec-post-content">
                                                    <div class="mg-content">
                                                        <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                     <?php } ?>
                                    <div class="col-md-12 text-center">
                                        <?php //Previous / next page navigation
                                        the_posts_pagination( array(
                                        'prev_text'          => '<i class="fa fa-angle-left"></i>',
                                        'next_text'          => '<i class="fa fa-angle-right"></i>',
                                        ) ); ?>
                                    </div>
                                </div>
                                <!-- // mg-posts-sec-inner -->
                            </div>
                            <!-- // mg-posts-sec block_6 -->

                            <!--col-md-12-->
</div>