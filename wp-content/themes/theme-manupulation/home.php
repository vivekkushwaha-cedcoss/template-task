<?php
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
            <h4>Recent Posts</h4>
            <h2>Our Recent Blog Entries</h2>
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
                <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
            <div class="col-lg-6">
                <div class="blog-post">
                <div class="blog-thumb">
                    <?php echo (has_post_thumbnail())? the_post_thumbnail(): "<img src=".get_template_directory_uri()."/images/banner-item-01.jpg>";?>
                </div>
                <div class="down-content">
                    <span><?php echo the_category(); ?></span>
                    <?php 
                        global $post;
                        $post_slug = $post->post_name;
                    ?>
                    <a href="<?php echo $post_slug;?>"><h4><?php echo the_title();?></h4></a>
                    <ul class="post-info">
                    <li><a href="#"><?php echo get_the_author();?></a></li>
                    <li><a href="#"><?php echo get_the_date();?></a></li>
                    <li><a href="#"><?php echo get_comments_number();?> comments</a></li>
                    </ul>
                    <p><?php 
                    $excerpt=get_the_excerpt();
                    echo substr( $excerpt, 0, 100 )." <a href=".$post_slug." id='link-color-read-more'>read more..</a>"?></p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-lg-12">
                        <ul class="post-tags">
                            <?php
                            $tags = get_tags(array('get'=>'all'));
                            $output = '<li><i class="fa fa-tags"></i></li>';
                                if($tags) {
                                foreach ($tags as $tag):
                                $output .= '<li><a href="/tag/'.$tag->name.'">'. $tag->name .'</a></li>';
                                endforeach;
                                } else {
                                _e('No tags created.', 'text-domain');
                                }
                            echo $output;
                            ?>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; endif;?>
            <div class="col-lg-12">
                <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
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
                        $output .= '<li><a href="/tag/'.$tag->name.'">'. $tag->name .'</a></li> ';
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