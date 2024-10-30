<?php
global $wpdb;		
	$optin_html_form_code   = $this->elbpro_postrequest['optin_html_form_code'];
	$optin_form_name        = trim($this->elbpro_postrequest['optin_form_name']);
	$first_name_fld         = trim($this->elbpro_postrequest['first_name_fld']);
	$last_name_fld          = trim($this->elbpro_postrequest['last_name_fld']);
	$optin_email_fld        = trim($this->elbpro_postrequest['optin_email_fld']);
	$optin_trackcode_fld    = trim($this->elbpro_postrequest['trackcode_fld']);
	$optin_form_url         = $this->elbpro_postrequest['optin_form_url'];
	$optin_hidden_fields    = trim($this->elbpro_postrequest['optin_hidden_fields'], ',');
	$split_name             = $this->elbpro_postrequest['split_name'];
	$display_only_email     = $this->elbpro_postrequest['display_only_email'];
	
	if( $split_name == 1 ) {
		$optin_name_fld     = $first_name_fld.",".$last_name_fld; 
	} else {
		$optin_name_fld     = $this->elbpro_postrequest['optin_name_fld'];
	}
	if( isset( $this->arpID ) ) {
	
	$db_update_query = "UPDATE $this->elbp_autoresponder_table SET optin_html_form_code='$optin_html_form_code', optin_form_name='$optin_form_name', optin_name_fld='$optin_name_fld', optin_email_fld='$optin_email_fld', optin_trackcode_fld='$optin_trackcode_fld', optin_form_url='$optin_form_url',  optin_hidden_fields='$optin_hidden_fields' ,  split_name='$split_name' ,  display_only_email='$display_only_email' 
								WHERE id='$this->arpID'";
	$wpdb->query( $db_update_query );
	echo '<script>window.location.href="?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&elbpg=mof&arpmsg=2"</script>';
	
	} else {
	
	$db_insert_query = "INSERT INTO $this->elbp_autoresponder_table ( optin_html_form_code, optin_form_name, optin_name_fld, optin_email_fld, optin_trackcode_fld, optin_form_url, optin_hidden_fields, split_name, display_only_email, flag_aff ) 
								VALUES( '$optin_html_form_code', '$optin_form_name', '$optin_name_fld', '$optin_email_fld', '$optin_trackcode_fld', '$optin_form_url', '$optin_hidden_fields','$split_name', '$display_only_email', '1' )";
	$wpdb->query( $db_insert_query );
	echo '<script>window.location.href="?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&elbpg=mof&arpmsg=1"</script>';

	}

?>