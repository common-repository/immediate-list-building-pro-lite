<?php 
$curr_path = dirname( __FILE__ );
$elbpro_path = str_replace("\\", "/", strstr($curr_path, 'wp-content'));
$count     = substr_count(trim($elbpro_path, '/'), '/');
if ( $count > 0 )
 for ($i=0; $i<=$count; $i++)
  $_elbpro_path .= "../";
require_once($_elbpro_path.'wp-config.php');
global $wpdb;
$elbpro_abspath  = str_replace("\\","/",ABSPATH); 

// Calculate Clicks
function __elbproUpdateClickStats( $id ) {
	global $table_prefix;
	$elbp_optin_placement_table = $table_prefix.'elbp_optin_placement';	
	$db_Update_sql = "UPDATE $elbp_optin_placement_table SET clickStatus=clickStatus+1 WHERE id='$id'";
	$wpdb->query( $db_Update_sql );				
}

// Calculate Impression
function __elbproUpdateImpressionStats( $option_name ) {
	global $table_prefix;
	$elbp_optin_options_table = $table_prefix.'elbp_optin_options';	
	$db_Update_sql = "UPDATE $elbp_optin_options_table SET option_value=option_value+1 WHERE option_name='$option_name'";
	$wpdb->query( $db_Update_sql );	
}

if( $_GET['placementID'] || isset( $_GET['placementID'] ) ) {
	__elbproUpdateClickStats( $_GET['placementID'] );

/*if( $optinForm == 'footerBar' ) {
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateClickStats( 'elbp_footerbar_clickStats' );
	}
} else if( $optinForm == 'popupBox' ) {
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateClickStats( 'elbp_popupbox_clickStats' );
	}
} else if( $optinForm == 'withinBOP' ) {
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateClickStats( 'elbp_withinbtmofpost_clickStats' );
	}
} else if( $optinForm == 'insideCommentBox' ) {
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateClickStats( 'elbp_insidecomment_clickStats' );
	}
} else if( $optinForm == 'elbproSidebar' ) {
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateClickStats( 'elbp_sidebar_clickStats' );
	}
}
*/

/**
Calculate Impression
**/
} else if( $_GET['iprsn'] || isset( $_GET['iprsn'] ) ) {

$impOptinType = $_GET['iprsn'];
if( $impOptinType == 'insideCommentBox' ) { 
	if ( !is_admin() && !is_feed() ) {
		__elbproUpdateImpressionStats( 'elbp_insidecomment_impsionStats' );
	}
}
} // Eof else
	
	
?>