<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-manupulation
 */

get_header();
?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
    <div class="owl-banner owl-carousel">
        <?php
        $the_query = new WP_Query( 'category_name');
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
        ?>
        <div class="item">
        <?php echo (has_post_thumbnail())? the_post_thumbnail(): "<img src=".get_template_directory_uri()."/images/banner-item-01.jpg>";?>
        <div class="item-content">
            <div class="main-content">
            <div class="meta-category">
                <span><?php echo the_category();?></span>
            </div>
            <?php 
                global $post;
                $post_slug = $post->post_name;
            ?>
            <a href="<?php echo $post_slug;?>"><h4><?php echo get_the_title();?></h4></a>
            <ul class="post-info">
                <li><a href="#"><?php echo get_the_author();?></a></li>
                <li><a href="#"><?php echo get_the_date();?></a></li>
                <li><a href="#"><?php echo get_comments_number();?></a></li>
            </ul>
            </div>
        </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
    </div>
</div>
<!-- Banner Ends Here -->

<section class="call-to-action">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="main-content">
            <div class="row">
            <div class="col-lg-8">
                <span>Stand Blog HTML5 Template</span>
                <h4>Creative HTML Template For Bloggers!</h4>
            </div>
            <div class="col-lg-4">
                <div class="main-button">
                <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>


<section class="blog-posts">
    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
            <div class="row">
            <?php 
            $the_query = new WP_Query( 'category_name' );
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
            ?>
            <div class="col-lg-12">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="<?php echo  get_template_directory_uri();?>/images/blog-post-01.jpg" alt="">
                </div>
                <div class="down-content">
                    <span><?php echo the_category();?></span>
                    <?php 
                        global $post;
                        $post_slug = $post->post_name;
                    ?>
                    <a href="<?php echo $post_slug?>"><h4><?php echo get_the_title();?></h4></a>
                    <ul class="post-info">
                    <li><a href="#"><?php echo get_the_author();?></a></li>
                    <li><a href="#"><?php echo get_the_date();?></a></li>
                    <li><a href="#"><?php echo get_comments_number();?></a></li>
                    </ul>
                    <p><?php echo get_the_content();?></p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                        <ul class="post-tags">
                            <?php
                            $tags = get_tags(array('get'=>'all'));
                            $output = '<li><i class="fa fa-tags"></i></li>';
                                if($tags) {
                                foreach ($tags as $tag):
                                $output .= '<li><a href="/category/'.$tag->name.'">'. $tag->name .'</a></li>';
                                endforeach;
                                } else {
                                _e('No tags created.', 'text-domain');
                                }
                            echo $output;
                            ?>
                        </ul>
                        </div>
                        <div class="col-6">
                        <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php }
            wp_reset_postdata();
            ?>
            <div class="col-lg-12">
                <div class="main-button">
                <a href="/blogentries/">View All Posts</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="sidebar">
            <div class="row">
            
            <div class="col-lg-12">
            <?php get_sidebar();?>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item tags">
                <div class="sidebar-heading">
                    <h2>Tag Clouds</h2>
                </div>
                <div class="content">
                    <?php
                    $tags = get_tags(array('get'=>'all'));
                    $output = '<ul class="tag-cloud-list">';
                        if($tags) {
                        foreach ($tags as $tag):
                        $output .= '<li><a href="/category/'.$tag->name.'">'. $tag->name .'</a></li>';
                        endforeach;
                        } else {
                        _e('No tags created.', 'text-domain');
                        }
                    $output .= '</ul>';
                    echo $output;
                    ?>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<?php
get_footer();