<?php get_header(); ?>

<div id="content" class="content row">
  <div id="body" class="body col span9">
    <div id="padding" class="padding">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div <?php post_class('post-wrap'); ?>>
      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></h2></a>
        <span class="meta"> <span class="author">Posted By
          <?php the_author(); ?>
          </span> <span class="date">On
          <?php the_date(); ?>
          </span> </span>
        <!--end meta-->
        <article class="post-content">
          <?php the_content(); ?>
        </article>
        <span class="post-nav">
		<?php wp_link_pages( ); ?>
              </span>
        <!--end article-->
        <span class="cats">
          <?php the_category(); ?>
        </span>
        <!--end categroies-->
        <span class="tags">
          <?php the_tags(); ?>
        </span>
      </div>
      <!--end tags-->

      <?php if ( current_user_can('edit_post', get_the_ID()) ) { ?>
      <small class="editlink">
      <?php edit_post_link('Edit this entry?','',''); ?>
      </small>
      <?php } ?>
      
      <?php endwhile; else: ?>
		<article class="post">Whoops, you broke the internet. You'll find that the back button or the search bar might fix the problem.</article>
      <?php endif;
      if (function_exists( 'wpHTML5_single_post_nav' )) {
         wpHTML5_single_post_nav();
      } 
      ?>
    </div>
    <!--end padding-->
  </div>
  <!--end body-->
  <?php get_sidebar(); ?>
  <!--end sidebar-->
</div>
<!--end content-->
<?php get_footer(); ?>
