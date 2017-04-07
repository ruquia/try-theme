<h1> <a href="<?php the_permalink();?>" title="permalink to this post"><?php the_title(); ?></a></h1>

<?php
// check if the post or image has a featured image assigned
if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-featured-image');
}
?>
<div class="post-meta">
   Author: <?php the_author();?> | created: <?php the_date();?>
</div>
<?php
the_content();