<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme-manupulation
 */
get_header();
?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="text-content">
            <h4>Post Details</h4>
            <h2>Single blog post</h2>
            </div>
        </div>
        </div>
    </div>
    </section>
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
                <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" 
                target="_parent">Download Now!</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>


<section class="blog-posts grid-system">
    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
            <div class="row">
            <?php
            global $post;
            $post_slug = $post->post_name;
            while (have_posts()) {
                the_post();
            ?>
            <div class="col-lg-12">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="<?php 
                    echo get_template_directory_uri();
                    ?>/images/blog-post-02.jpg" alt="">
                </div>
                <div class="down-content">
                    <span><?php echo the_category();?></span>
                    <a><h4><?php echo the_title();?></h4></a>
                    <ul class="post-info">
                    <li><a href="#"><?php echo get_the_author();?></a></li>
                    <li><a href="#"><?php echo get_the_date();?></a></li>
                    <li>
                        <a href="#">
                            <?php echo get_comments_number();?> 
                            comments
                        </a>
                    </li>
                    </ul>
                    <p><?php echo the_content();?></p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                        <ul class="post-tags">
                            <?php
                            $tags = get_tags(array('get'=>'all'));
                            $output = '<li><i class="fa fa-tags"></i></li>';
                            if ($tags) {
                                foreach ($tags as $tag):
                                    $output .= '<li><a href="/tag/'.$tag->name.'">'. 
                                    $tag->name .'</a></li> ';
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
            <?php  } ?>
            <div class="col-lg-12">
                <div class="sidebar-item comments">
                <div class="sidebar-heading">
                    <h2><?php echo get_comments_number();?> comments</h2>
                </div>
                <div class="content">
                    <ul>
                    <?php
                    if (comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                    </ul>
                </div>
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
                    if ($tags) {
                        foreach ($tags as $tag):
                            $output .= '<li><a href="/tag/'.$tag->name.'">'. 
                            $tag->name .'</a></li>';
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
// If comments are open or we have at least one comment, 
// load up the comment template.
get_footer();