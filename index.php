<?php get_header(); ?>


  <div class="contrainer-content">
    <div class="row">

      <?php
      while ( have_posts() ) : the_post();;?>

      <div class="col l4 m6 s12">
        <a href="<?php the_permalink();?>"><div class="card small hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img src = "<?php the_post_thumbnail_url() ?>"></a>
            <div class="card-title" style="background-color : rgba(0,0,0,0.4);"><h5 class="center-align"><?php the_title(); ?></h5></div>
          </div>
          <div class="card-content">
            <?php the_excerpt(); ?>
          </div>
        </div></a>
      </div>

    <?php endwhile;?>


  </div>
  </div>




</body>

</html>
