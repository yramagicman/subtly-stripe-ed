<?php get_header(); ?>
<div id="content" class="content row">
  <div id="body" class="body col span9">
    <div id="padding" class="padding">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div id="post-wrap" <?php post_class(); ?>>

        <!--end meta-->
        <article class="post-content">
          <?php the_content(); ?>
        </article>
        <div class="post-nav">
<?php wp_link_pages( ); ?>
              </div>
        <!--end article-->
        <aside class="cats">
          <?php the_category(); ?>
        </aside>
        <!--end categroies-->
        <aside class="tags">
          <?php the_tags(); ?>
        </aside>
      </div>
      <!--end tags-->

      <?php if ( current_user_can('edit_post', get_the_ID()) ) { ?>
      <small class="editlink">
      <?php edit_post_link('Edit this entry?','',''); ?>
      </small>
      <?php } ?>

      <div class="comments clearfix">
      <?php if (function_exists('wp_list_comments')): ?>
      <!-- WP 2.7 and above -->
      <?php comments_template('', true); ?>

      <?php endif; ?>

      </div>
      <!--end comments-->
      <div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('Older Entries') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer Entries') ?>
        </div>
      </div>
      <?php endwhile; else: ?>
        <article class="post">Whoops, you broke the internet. You'll find that the back button or the search bar might fix the problem.</article>
      <?php endif; ?>
    </div>
    <!--end padding-->
  </div>
  <!--end body-->
  <?php get_sidebar(); ?>
  <!--end sidebar-->
</div>
<!--end content-->
<?php get_footer(); ?>


