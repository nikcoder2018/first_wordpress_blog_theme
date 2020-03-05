<?php get_header();?>

<section class="page-wrap">
    <div class="container">

        <h2>Search Results for '<?= get_search_query();?>'</h2>
        <?php get_template_part('includes/section','archive'); ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
    </div>
</section>
<?php get_footer();?>