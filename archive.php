<?php get_header(); ?>

<main>
  <div class="container">
    <?php get_sidebar(); ?>
    <article>
      <section>
        <div class="article-container">
          <?php if (have_posts()) : ?>
            <div class="new-article">
              <span><?php echo get_the_date('Y'); ?>年<?php echo get_the_date('m'); ?>月</span>
            </div>
            <?php $information = get_posts(array(
              'posts_per_page' => -1,
            ));
            if ($information) :
            ?>
              <ul>
                <?php foreach ($information as $post) :
                  setup_postdata($post);
                ?>
                  <li class="content">
                    <p class="meta"><time><?php the_time('Y/m/d'); ?></time></p>
                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="breadcrumbs"><?php the_category(); ?></div>
                    <div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <p class="description"><?php the_excerpt(); ?></p>
                    <div class="readMore"><a href="<?php the_permalink(); ?>">続きを読む</a></div>
                  </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
              </ul>
            <?php else : ?>
              <p class="sorry">申し訳ございません。<br>現在記事がございません。<br>近日更新予定です。</p>
            <?php endif; ?>
          <?php endif; ?>


        </div>
      </section>
    </article>

  </div>
</main>


<?php get_footer(); ?>
