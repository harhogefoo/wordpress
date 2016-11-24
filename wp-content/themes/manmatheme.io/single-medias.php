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
</section>
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('content');
  endwhile;
endif;
?>
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
