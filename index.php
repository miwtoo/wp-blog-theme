<?php get_header(); ?>

  <div class="contrainer-card">
    <div class="row portfolioContainer">

      <?php
      while ( have_posts() ) : the_post();;?>

      <div class="col l4 m6 s12 <?php  get_the_category( $id ); ?>">
        <a href="<?php the_permalink();?>"><div class="card small hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img src = "<?php the_post_thumbnail_url() ?>">
            <div class="card-title" style="background-color : rgba(0,0,0,0.4);"><h5 class="center-align"><?php the_title(); ?></h5></div>
          </div></a>
          <div class="card-content">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>

    <?php endwhile;?>


  </div>
  </div>
</body>

</html>
