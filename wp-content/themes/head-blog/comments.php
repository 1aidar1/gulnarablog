<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<?php if ( is_single() || is_page() ) : ?>
	<div id="comments" class="comments-template">
		<?php if ( have_comments() ) : ?>
			<h3 id="comments text-center">
				<?php printf( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'comments title', 'head-blog' ), number_format_i18n( get_comments_number() ) ); ?>
			</h3>
			<ul class="commentlist list-unstyled">
				<?php
				wp_list_comments();
				paginate_comments_links();

				if ( is_singular() ) {
					wp_enqueue_script( 'comment-reply' );
				}
				?>
			</ul>
			<?php
			comment_form();
		else :
			if ( comments_open() ) :
				comment_form();
			endif;
		endif;
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'head-blog' ); ?></p>
			<?php
		endif;
		?>
	</div>
<?php endif; ?>
