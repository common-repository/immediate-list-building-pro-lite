<?php
global $wpdb;
	// Optin Form Inside Comment Box 
	if( $this->fetch_insideCommentOptions['enable_insideCommentBox']  == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_insideCommentOptions['insideCommentBox_arp']) > 0 ) ) { 
	?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo ELBPRO_LIBPATH ?>user-tmp/optin-inside-comment/<?php echo $this->fetch_insideCommentOptions['insideCommentBox_tmp_chk']; ?>/style.css" />		
	<?php 
	}
		
	// Advance Footer Bar
	$chkFBrows = "SELECT COUNT(id) FROM $this->elbp_optin_placement_table where optin_type='footer_bar' and flag='1'";
	$noOfRows = $wpdb->get_var($chkFBrows);        
	if( $noOfRows > 0 ) {
	?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo ELBPRO_FULLPATH; ?>lib/user-tmp/footer-bar/fb-style.css" />	
	<?php
	}
	?>	 
	<meta name="viewport" content="width=device-width" />