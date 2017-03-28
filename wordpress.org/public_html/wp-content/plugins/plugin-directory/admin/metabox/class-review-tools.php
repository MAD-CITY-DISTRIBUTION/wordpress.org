<?php
namespace WordPressdotorg\Plugin_Directory\Admin\Metabox;

/**
 * The Plugin Review metabox.
 *
 * @package WordPressdotorg\Plugin_Directory\Admin\Metabox
 */
class Review_Tools {
	static function display() {
		$post = get_post();

		$zip_url = '';
		foreach ( get_attached_media( 'application/zip', $post ) as $zip_file ) {
			$zip_url = wp_get_attachment_url( $zip_file->ID );
			break;
		}
		if ( ! $zip_url ) {
			$zip_url = get_post_meta( $post->ID, '_submitted_zip', true );
		}

		if ( $zip_url ) {
			printf( '<p>' . __( '<strong>Zip file:</strong> %s', 'wporg-plugins' ) . '</p>',
				sprintf( '<a href="%s">%s</a>', esc_url( $zip_url ), esc_html( $zip_url ) )
			);
		}

		if ( 'pending' != $post->post_status ) {
			echo "<ul>
				<li><a href='https://plugins.trac.wordpress.org/log/{$post->post_name}/'>" . __( 'Development Log', 'wporg-plugins' ) . "</a></li>
				<li><a href='https://plugins.svn.wordpress.org/{$post->post_name}/'>" . __( 'Subversion Repository', 'wporg-plugins' ) . "</a></li>
				<li><a href='https://plugins.trac.wordpress.org/browser/{$post->post_name}/'>" . __( 'Browse in Trac', 'wporg-plugins' ) . '</a></li>
			</ul>';
		}
		if ( $post->post_excerpt && in_array( $post->post_status, array( 'pending', 'approved' ) ) ) {
			echo '<p>' . strip_tags( $post->post_excerpt ) . '</p>';
		}

		add_filter( 'wp_comment_reply', function( $string ) use ( $post ) {
			$author = get_user_by( 'id', $post->post_author );
			?>
			<form id="contact-author" class="contact-author" method="POST" action="https://supportpress.wordpress.org/plugins/thread-new.php">
				<input type="hidden" name="to_email" value="<?php echo esc_attr( $author->user_email ); ?>" />
				<input type="hidden" name="to_name" value="<?php echo esc_attr( $author->display_name ); ?>" />
				<input type="hidden" name="subject" value="<?php printf( esc_attr__( '[WordPress Plugin Directory] Request: %s', 'wporg-plugins' ), $post->post_title ); ?>" />
				<button class="button button-primary" type="submit"><?php _e( 'Contact plugin author', 'wporg-plugins' ); ?></button>
			</form>
			<?php
			return $string;
		} );
	}
}

