<!-- メディア掲載一覧ページ -->
<?php get_header();?>
<!--------------MainContent--------------->
<article id="main-content">
<div class="grid"><!-- GRID MOTHER -->
<section id="subpage" class="subpage">
  <div class="text-center text-shadow">
    <h3 class="subpage-title">MEDIA</h3>
    <h5 class="subpage-subtitle">メディア掲載</h5>
  </div>
</section>
<section id="media" class="section">
  <div class="container">
    <div class="row">

      <!-- posted contents -->
      <?php
        $loop = new WP_Query(array("post_type" => "medias"));
        if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
      ?>
      <div class="media-col col-lg-3 media-wrapper">
        <a href="
        <?php
          if( get_post_meta($post->ID, 'link', true) ) {
            echo get_post_meta($post->ID, 'link', true);
          }
        ?>
        " target="_blank">
          <div class="media-box box-shadow">
            <?php the_post_thumbnail(); ?>
            <!-- start date -->
            <h5 class="content-title">
              <?php
                if( get_post_meta($post->ID, 'date', true) ) {
                  echo get_post_meta($post->ID, 'date', true);
                }
              ?>
              <span class="media-type"><?php the_title(); ?></span>
            </h5>
            <!-- finish date -->
            <p class="content-description"><?php the_excerpt(); ?></p>
          </div>
        </a>
      </div>
      <?php endwhile; endif; ?>
      <!-- posted contents -->

    </div>
  </div>
</section>
<!--------------RelatedPostLinks--------------->
<div class="col-full">
  <div class="wrap-col">
    <div class="related_post">
    <!-- <h1>関連記事</h1> -->
    <!-- <?php get_template_part('single_related'); ?> -->
    </div><!-- ^ .related_post END-->
  </div><!-- ^ .wrap-col END-->
</div><!-- ^ .col-full END-->
<!-----------RelatedPostLinks END------------>
<!--------------CommentArea--------------->
<div class="col-full">
  <div class="wrap-col">
    <?php comments_template(); ?>
  </div><!-- ^ .wrap-col END-->
</div><!-- ^ .col-full END-->
</div><!-- ^ .grid = GRID MOTHER END-->
</article><!-- ^ main-content END-->
<?php get_sidebar();?>
<?php get_footer();?>
