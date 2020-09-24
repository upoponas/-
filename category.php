<?php get_header(); ?>

<main>
  <div class="container">
    <?php get_sidebar(); ?>
    <article>
      <section>
        <div class="article-container">
          <?php if (have_posts()) : ?>
            <?php
            if (get_category($cat)->parent) :
              $theID = get_category(get_category($cat)->parent)->term_id;
            ?>
              <div class="category-title-wrapper">
                <div class="category-title">
                  <span><a href="<?php echo get_category_link(get_the_category()[0]->category_parent); ?>"><i class="<?php echo get_option("cat_$theID")['extra_text']; ?>"></i><span><?php echo get_category(get_the_category()[0]->category_parent)->name; ?></span></a></span>
                  <i class="fas fa-chevron-right"></i>
                  <span><?php echo get_the_category()[0]->name; ?></span>
                </div>
              </div>

            <?php
            else :
              $theID = get_category($cat)->term_id;
            ?>
              <div class="category-title-wrapper">
                <div class="category-title">
                  <i class="<?php echo get_option("cat_$theID")['extra_text']; ?>"></i><span><?php echo get_category($cat)->name ?></span>
                </div>
              </div>

            <?php endif; ?>
            <?php $information = get_posts(array(
              'category' => get_the_category()[0]->cat_ID
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
            <?php endif; ?>
          <?php else : ?>
            <p class="sorry">申し訳ございません。<br>現在記事がございません。<br>近日更新予定です。</p>
          <?php endif; ?>
        </div>
      </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
