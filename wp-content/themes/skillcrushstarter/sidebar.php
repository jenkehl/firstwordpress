<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<section class="blog-page">
<aside class="right-aside">
<!--	<div class="container wrap"> this is not supposed to be in sidebar -->

		<div class="widget"><?php if (is_active_sidebar('sidebar-1')): ?>

		<div class="post-author">
			<div class="avatar"><img src="upload/Emily2.jpg" alt=""></div>
			<div class="intro-text">I’m Jen, the lead wackadoodle at <a href="http://Jenkehl.com/">Jen Kehl</a> as well as a writer, mother and chaos controller. This is my blog full of inspiration.</div>
		</div>

		<div class="widget widget_search-form">
			<form role="search" method="get" class="search-form" action="">
				<input type="text" class="input" placeholder="search" value="" name="s">
				<input type="button" class="input-btn" value="">
			</form>
		</div>



			<ul>
				<?php dynamic_sidebar('sidebar-1'); ?>
</ul>

<!-- look at this for how to class a special nav menu -->

<div class="menu-social-links-container">

<div class="widget">

			<h2 class="widget-title">Follow Me</h2>
			<?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>

</div>
</div>


		</div>

<!--		</div> -->  <!-- #primary-sidebar -->
	<?php endif; ?>

</aside>
</section>
