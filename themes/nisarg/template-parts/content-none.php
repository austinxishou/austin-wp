<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 *
 * @package Nisarg
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<span class="screen-reader-text"><?php esc_html_e( '尴尬! 什么鬼都没有', 'nisarg' ); ?></span>
		<h1 class="page-title"><?php esc_html_e( '尴尬! 什么鬼都没有', 'nisarg' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( '准备好发布你的第一篇文章了么? <a href="%1$s">点击开始</a>.', 'nisarg' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( '非常抱歉, 没有匹配任何你要搜索的东西. 请尝试使用其他关键词.', 'nisarg' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( '非常抱歉,没有发现任何东西. 也许你可以尝试下搜索.', 'nisarg' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
