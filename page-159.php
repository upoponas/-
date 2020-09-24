<?php get_header(); ?>
<main>
  <div class="container">
    <?php get_sidebar(); ?>
    <article>
      <section>
        <div class="article-container">
          <p class="meta"><time><?php the_time('Y/m/d'); ?></time></p>
          <h1 class="title"><p><?php the_title(); ?></p></h1>
          <div class="content"><?php the_content(); ?></div>
        </div>
      </section>
    </article>

  </div>
</main>
<?php get_footer(); ?>
