<div class="thumbnail-image"> <?php the_post_thumbnail( 'medium' ); ?> </div>
<div class="post-format">
    <small> This is Image: <?php echo get_post_format(); ?> </small>
</div>
<hr>
<h3> <?php the_title(); ?> </h3>
<p> <?php the_content(); ?> </p>