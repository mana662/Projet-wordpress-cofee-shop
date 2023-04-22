<!-- /*
Theme Name: Coffee by mana
Text Domain: Coffee
Version: 1.0
Requires at least: 4.7
Requires PHP: 5.2.4
Description: Theme for custom design about coffee
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Author: Manahiti Porlier
Author URI: https://wordpress.org/
Theme URI: https://wordpress.org/themes/twentytwenty/
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

All files, unless otherwise stated, are released under the GNU General Public
License version 2.0 (http://www.gnu.org/licenses/gpl-2.0.html)

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned
with others.
*/ -->

<?php get_header() ?>

<!-- Loop for dispaly articles -->
<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post() ?>

            <div class="col-sm">

                <div class="card" style="width: 18rem; margin: 0 auto;">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">En savoir plus</a>
                    </div>

                </div>

            </div>
        <?php endwhile; ?>

    </div>

<?php else : ?>
    <h1>No articles</h1>
<?php endif; ?>

<?php get_footer() ?>