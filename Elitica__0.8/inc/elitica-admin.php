<h1>elitca Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 
	

	
	$twitter_icon = esc_attr( get_option( 'twitter_url' ) );
	$facebook_icon = esc_attr( get_option( 'facebook_url' ) );
    $gplus_icon = esc_attr( get_option( 'gplus_url' ) );
    
	
?>


<form id="submitForm" method="post" action="options.php" class="elitca-general-form">
	<?php settings_fields( 'elitca-settings-group' ); ?>
	<?php do_settings_sections( 'xa_elitca' ); ?>
	<?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
</form>