<?php
if ( post_password_required() ) {
	return;
}

if ( comments_open() || get_comments_number() ) : ?>
    <div class="qodef-comment-holder clearfix" id="comments" data-qodef-anchor="comments">
        <div class="qodef-comment-number">
            <div class="qodef-comment-number-inner">
                <h4><?php comments_number( esc_html__( 'No Comments', 'ultima' ), '1' . esc_html__( ' Comment ', 'ultima' ), '% ' . esc_html__( ' Comments ', 'ultima' ) ); ?></h4>
            </div>
        </div>
        <div class="qodef-comments">
			<?php if ( have_comments() ) : ?>
                <ul class="qodef-comment-list">
					<?php wp_list_comments( array( 'callback' => 'ultima_qodef_comment' ) ); ?>
                </ul>
			<?php endif; ?>
			<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
                <p><?php esc_html_e( 'Sorry, the comment form is closed at this time.', 'ultima' ); ?></p>
			<?php endif; ?>
        </div>
    </div>
	<?php
	$commenter     = wp_get_current_commenter();
	$req           = get_option( 'require_name_email' );
	$aria_req      = ( $req ? " aria-required='true'" : '' );
	$qodef_consent = empty( $qodef_commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit_comment',
		'title_reply'          => esc_html__( 'Post a Comment', 'ultima' ),
		'title_reply_to'       => esc_html__( 'Post a Reply to %s', 'ultima' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'ultima' ),
		'label_submit'         => esc_html__( 'Submit', 'ultima' ),
		'comment_field'        => '<textarea id="comment" placeholder="' . esc_attr__( 'Write your comment here...', 'ultima' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'title_reply_before'   => '<h4 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h4>',
		'fields'               => apply_filters( 'comment_form_default_fields', array(
			'author'  => '<div class="qodef-comment-column"><label class="qodef-comment-label" for="author">' . esc_html__( 'Name', 'ultima' ) . '</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
			'url'     => '<div class="qodef-comment-column"><label class="qodef-comment-label" for="email">' . esc_html__( 'E-mail Address', 'ultima' ) . '</label><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
			'email'   => '<div class="qodef-comment-column"><label class="qodef-comment-label" for="url">' . esc_html__( 'Website', 'ultima' ) . '</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>',
			'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" ' . $qodef_consent . ' />' .
			             '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'ultima' ) . '</label></p>',
		) )
	);
	?>
	<?php if ( get_comment_pages_count() > 1 ) {
		?>
        <div class="qodef-comment-pager">
            <p><?php paginate_comments_links(); ?></p>
        </div>
	<?php } ?>
    <div class="qodef-comment-form">
		<?php comment_form( $args ); ?>
    </div>
<?php endif; ?>