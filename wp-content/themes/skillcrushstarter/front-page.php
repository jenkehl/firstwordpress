<?php
/**
 * The template for the home page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>


  <section class="landing-page landing-bg">
    <div class="container">
      <div class="author-intro">

      <div class="content">


<h1 class="title">
  Hi, I’m Jen.<br>
  I love puzzles.
</h1>



      <?php
        // Start the Loop.
        while (have_posts()): the_post(); ?>


          <?php the_content(); ?>
        <?php endwhile; ?>



          </div>

          <div class="social-btns">
            <a href="http://www.twitter.com/jenkehl" class="soc-icon tw"></a>
            <a href="" class="soc-icon fb"></a>
            <a href="" class="soc-icon ln"></a>
            <a href="" class="soc-icon db"></a>
          </div>
          <a href="http://localhost:8888/wordpress/blog/" class="btn">View My Blog </a>
        </div>


      </div>



  </section>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
