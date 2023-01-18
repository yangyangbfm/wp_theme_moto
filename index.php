
<?php get_header();?>

<article class="post">

    <h3>
        <a href="<?php the_permalink(); ?>">超链接</a>
    </h3>
    <div class="meta">
        Created By <?php the_author(); ?> on<?php the_time('F j, Y g:i a'); ?>
    </div>
    <?php the_content(); ?>
</article>

<?php get_search_form();?>

<?php get_footer();?>

