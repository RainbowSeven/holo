<?php 

	add_action( 'abaris_credits', 'abaris_display_credits' );
	function abaris_display_credits() { ?>
		<p>
		Powered by <?php printf( __( '%s', 'abaris' ), 'House Of Living Oracles' ); ?></a>
<?php 
	}

 ?>