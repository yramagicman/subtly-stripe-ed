<?php get_header(); ?>
<div id="content">
    <div id="body">
      <div id="padding">
        <?php if (have_posts()) : ?>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="post-title">Archive for the &#8216;
          <?php single_cat_title(); ?>
          &#8217; Category</h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="post-title">Posts Tagged &#8216;
          <?php single_tag_title(); ?>
          &#8217;</h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="post-title">Archive for
          <?php get_option('F jS, Y'); ?>
        </h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="post-title">Archive for
          <?php get_option('F, Y'); ?>
        </h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="post-title">Archive for
          <?php get_option('Y'); ?>
        </h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="post-title">Author Archive</h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
          <h2 class="post-title">Blog Archives</h2>
          <?php } ?>
        <div class="navigation">
          <div class="alignleft">
            <?php next_posts_link('&laquo; Older Entries') ?>
          </div>
          <div class="alignright">
            <?php previous_posts_link('Newer Entries &raquo;') ?>
          </div>
        </div>
        <?php while (have_posts()) : the_post(); ?>
        <div <?php post_class('post-wrap') ?>>
          <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h3>
          <small>
          <?php get_option('l, F jS, Y') ?>
          </small>
          <article class="post-content">
            <?php the_excerpt() ?>
          </article>
          <div class="post-nav">
            <?php wp_link_pages( ); ?>
          </div>
          <aside class="cats">
            <?php the_category(); ?>
          </aside>
          <!--end categroies-->
          <aside class="tags">
            <?php the_tags(); ?>
          </aside>
        </div>
        <?php endwhile; ?>
        <div class="navigation">
          <div class="alignleft">
            <?php next_posts_link('&laquo; Older Entries') ?>
          </div>
          <div class="alignright">
            <?php previous_posts_link('Newer Entries &raquo;') ?>
          </div>
        </div>
        <?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
