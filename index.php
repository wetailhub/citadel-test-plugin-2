<?php

/**
	Plugin Name: Citadel Test Plugin 2
	Description: Mega test plugin 2
	Author: Wetail AB
	Version: 1.2.6
*/

add_action( 'admin_footer', function(){
	?>
	<div style="display: block; color: #000; padding: 20px; position: absolute; z-index: 100; bottom: 20px; right: 20px; background: #fceead; border: 1px solid orangered">
		<p>
			Citadel Test Plugin 2<br/>
			V. 1.2.6
		</p>
	</div>
	<?php
} );