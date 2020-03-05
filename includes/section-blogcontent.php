<?php if(have_posts() ) : while (have_posts() ) : the_post(); ?>
    <?php 
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        $fullname = $fname. ' '.$lname;

        $date = get_the_date();
        $tags = get_the_tags();
        $categories = get_the_category();
    ?>

    <?php foreach($categories as $category): ?>
        <a href="<?= get_category_link($category->term_id); ?>"><?=$category->name; ?></a>
    <?php endforeach; ?>

    <p><?= $date ?></p>
    <?php the_content(); ?>
    
    <p>Posted by: <?=$fullname;?></p>

    <?php foreach($tags as $tag): ?>
        <a href="<?= get_tag_link($tag->term_id); ?>" class="badge badge-success"><?= $tag->name; ?></a>
    <?php endforeach;?>

    <?php //comments_template(); ?>
<?php endwhile; endif; ?>