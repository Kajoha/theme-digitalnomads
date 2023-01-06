<?php while (have_posts()) : the_post(); ?>
<li class="blog-list-items">
    <div class="list-items-right">
        <div class="list-items-right-img">
            <a href=" <?php the_permalink(); ?>">
                <?php the_post_thumbnail('mediano'); ?>
            </a>
        </div>
    </div>
    <div class="list-items-left">
        <div>
            <a href=" <?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>

            <p>
                <span>By: </span>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                    <?php echo get_the_author_meta('display_name'); ?></a>
            </p>
            <span class="list-items-date"><?php the_time(get_option('date_format')); ?></span>
        </div>
        <?php the_category(); ?>
    </div>
</li>
<?php endwhile ?>