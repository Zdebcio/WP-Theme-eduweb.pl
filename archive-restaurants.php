<?php get_header() ?>

<section id="header">

    <div class="map"></div>

    <section class="caption restaurant">
        <div class="pos-center">
            <form class="search" method="get" action="">
                <label for="search">Znajdź restaurację:</label>
                <fieldset>
                    <input type="text" name="search" id="search" value="" />
                    <input type="submit" value="" />
                </fieldset>
            </form>
        </div>
    </section>

    <div class="gradient">
        <div class="pos-center">&nbsp;</div>
    </div>
</section>

<section id="restaurants" class="content">
    <div class="pos-center">
        <div class="left">
            <?php if (have_posts()) : ?>
                <h4 class="search-results">Wynik wyszukiwania:</h4>
                <div class="wrapper">
                    <?php while (have_posts()) : the_post(); ?>

                        <section id="restaurants-<?php the_ID() ?>" <?php post_class('entry') ?>>
                            <?php if (get_post_format($post->ID) == 'gallery') : ?>
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                <div class="description">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    <div>
                                        <?php printRestaurantCategories($post->ID); ?>

                                        <ul class="difficulty dark">
                                            <?php printRanking($post->ID); ?>
                                        </ul>
                                    </div>
                                    <p><?php the_excerpt_max_charlength(173) ?></p>
                                    <a class="more" href="<?php the_permalink() ?>">...</a>
                                </div>
                            <?php else : ?>
                                <div class="description width">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    <div>
                                        <?php printRestaurantCategories($post->ID); ?>

                                        <ul class="difficulty dark">
                                            <?php printRanking($post->ID); ?>
                                        </ul>
                                    </div>
                                    <p><?php the_excerpt_max_charlength(173) ?></p>
                                    <a class="more" href="<?php the_permalink() ?>">...</a>
                                </div>
                            <?php endif ?>
                        </section>

                    <?php endwhile; ?>

                <?php else : ?>
                    <h4 class="search-results">Brak wyników wyszukiwania</h4>
                <?php endif; ?>
                </div>

                <div class="pagination">
                    <ul>
                        <li><a href="#" class="prev page-numbers">«</a></li>
                        <li><span class="current">1</span></li>
                        <li><a href="#" class="page-numbers">2</a></li>
                        <li><a href="#" class="next page-numbers">»</a></li>
                    </ul>
                </div>
        </div>

        <?php get_sidebar('restaurants-archive') ?>
    </div>
</section>

<?php get_footer() ?>