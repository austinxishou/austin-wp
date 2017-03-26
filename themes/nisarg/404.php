<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Nisarg
 */

get_header(); ?>
		<div class="container">
   			<div class="row">
				<div id="primary" class="col-md-9 content-area">
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( '尴尬! 找不到该页面.', 'nisarg' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( '貌似找不到任何界面.也许你可以尝试下搜索?', 'nisarg' ); ?></p>

								<?php get_search_form(); ?>

								</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php get_sidebar('sidebar-1'); ?>

			</div> <!--.row-->            
        </div><!--.container-->
		<?php get_footer(); ?>