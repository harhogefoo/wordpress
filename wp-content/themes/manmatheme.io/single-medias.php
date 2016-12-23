<?php get_header();?>
<!--------------MainContent--------------->
<article id="main-content">
  <div class="grid">
    <!-- key header -->
    <section id="subpage" class="subpage">
      <div class="text-center text-shadow">
        <h3 class="subpage-title">MEDIA</h3>
        <h5 class="subpage-subtitle">メディア掲載</h5>
      </div>
    </section>

    <!-- content -->
    <section id="media" class="section">
      <div class="container">
        <p><?php the_time('Y.n.j'); ?></p>
        <h3><?php the_title(); ?></h3>
        <div class="col col-lg-4">
          <div class="img-center">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <div class="col col-lg-8">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
            get_template_part('content');
          endwhile;
        endif;
        ?>
        <?php if( get_post_meta($post->ID, 'link', true) ) { ?>
        関連記事: <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>">
         <?php echo get_post_meta($post->ID, 'link', true); ?></a>
         <?php } ?>
        </div>
      </div>
    </section>
  </div>
</article>
<!-- MainContent END -->
<?php get_sidebar();?>
<?php get_footer();?>
