<?php get_header(); ?>
<main>
  <div class="container">
    <?php get_sidebar(); ?>
    <article>
      <section>
        <div class="article-container">
          <p class="meta"><time><?php the_time('Y/m/d'); ?></time></p>
          <h2 class="title"><p><?php the_title(); ?></p></h2>
          <div class="breadcrumbs"><?php the_category(); ?></div>
          <div class="img"><?php the_post_thumbnail(); ?></div>
        </div>
      </section>
    </article>

  </div>
</main>
<?php get_footer(); ?>
