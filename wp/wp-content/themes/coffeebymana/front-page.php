<?php
get_header();
while (have_posts()) : the_post();
?>

    <!-- Diapo en bootsrap -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diapo/accessoires-cafe-table.jpg" class="d-block w-100" alt="accessoires-cafe-table" title="Accessoire café dessus table">
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diapo/cafe-latte-biscuits.jpg" class="d-block w-100" alt="cafe-latte-biscuits" title="Café latte biscuits">
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diapo/grains-cafe-torrefies.jpg" class="d-block w-100" alt="grains-cafe-torrefies" title="Grains Café Torrefiés">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php the_content(); ?>
    </div>
<?php
endwhile;

get_footer();
?>