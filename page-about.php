<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post();  ?>

  <div class="background-news" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
    <div class="title-news animated infinite jello">
      <h1 class="about-title"><?php the_title(); ?></h1>
    </div>
  </div>

<div class="container-fluid">
  <div class="col-md-8">
    <div class="letter">
      <p>
        <?php the_content(); ?>
      </p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="letter">
      <?php if(dynamic_sidebar('right_sidebar')) : else : endif; ?>
    </div>
  </div>
</div>



<?php endwhile; endif; ?>
<?php get_footer() ?>
