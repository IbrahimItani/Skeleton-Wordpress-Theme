<?php get_header(); ?>

<div class="content">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php else : ?>
<?php endif; ?>

</div>


</body>
</html>