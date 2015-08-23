<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section class="comments">

<?php if ( comments_open() ) : ?>

	<h2 class="comment-title"> Kommentarer </h2>

	<div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="10" data-colorscheme="light"></div>

	<?php if ( have_comments() ) : ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
					'avatar_size'=> 34,
					'reply_text' => 'Svar',
					'login_text' => 'Logg inn for å svare',
					'max_depth' => 3,
				) );
			?>
		</ul>

	<?php endif; // have_comments()
	
	$comment_args = array( 
		'title_reply'=> __( 'Skriv en kommentar' ),
		'title_reply_to' => __( 'Skriv et svar til %s' ),
		'cancel_reply_link' => __( 'Avbryt svar' ),
		'label_submit' => __( 'Post kommentar' ),
		'comment_notes_before' => '<p class="comment-notes">Emailen din vil ikke bli vist. Felt med rød er obligatoriske.</p>',
    	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logget inn som <a href="%1$s">%2$s</a>. <a href="%3$s" title="Logg ut">Logg ut?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<p class="comment-form-author">' . '<input id="author" name="author" placeholder="Navn" pattern=".{2,}" type="text" required value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   
    		'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" placeholder="Mail" type="email" required value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
    		'url'    => '' ) ),
		'comment_field' => '<textarea id="comment" name="comment" rows="4" pattern=".{2,}" aria-required="true" placeholder="Så, hva syntes du?" required></textarea>',
    	'comment_notes_after' => ''
	);

	//comment_form($comment_args);

endif; ?>

<?php if ( comments_open() == false ) : ?>

<h2 class="comment-title">Kommentarfeltet er stengt :(</h2>

<?php endif; ?>

</section><!-- #comments -->
