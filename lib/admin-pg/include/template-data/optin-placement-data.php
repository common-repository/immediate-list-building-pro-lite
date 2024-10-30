<?php
$_elbpro_path = '';
$curr_path = dirname( __FILE__ );
$elbpro_path = str_replace("\\", "/", strstr($curr_path, 'wp-content'));
$count     = substr_count(trim($elbpro_path, '/'), '/');
if ( $count > 0 )
 for ($i=0; $i<=$count; $i++)
  $_elbpro_path .= "../";
  $_elbpro_path.'wp-config.php';
	require_once($_elbpro_path.'wp-config.php');
	global $wpdb;
	$elbpro_abspath  = str_replace("\\","/",ABSPATH); 
	

if( $_GET['optin_form'] == 'footer_img' ) {
	if( $_GET['chkbox_value'] == 1 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/1.jpg">';
	else if( $_GET['chkbox_value'] == 2 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/2.jpg">';
	else if( $_GET['chkbox_value'] == 3 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/3.jpg">';
	else if( $_GET['chkbox_value'] == 4 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/4.jpg">';
	else if( $_GET['chkbox_value'] == 5 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/5.jpg">';
	else if( $_GET['chkbox_value'] == 6 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/footer-bar/6.jpg">';

} else if( $_GET['optin_form'] == 'popup_img' ) {
	if( $_GET['chkbox_value'] == 1 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/1.png">';
		echo '<div style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family: Candara, Tahoma, Geneva, sans-serif; font-size:11px; color:#444444;width:79%;padding:5px 0px 5px 10px;margin-bottom:5px;margin-top:5px;"><strong>Note: This Theme Does Not Support Split Name Feature</strong></div>';
	} else if( $_GET['chkbox_value'] == 2 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/2.png">';
		echo '<div style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family: Candara, Tahoma, Geneva, sans-serif; font-size:11px; color:#444444;width:79%;padding:5px 0px 5px 10px;margin-bottom:5px;margin-top:5px;"><strong>Note: This Theme Does Not Support Split Name Feature </strong></div>';
	} else if( $_GET['chkbox_value'] == 3 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/3.png">';
	} else if( $_GET['chkbox_value'] == 4 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/4.png">';
	} else if( $_GET['chkbox_value'] == 5 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/5.png">';
	}  else if( $_GET['chkbox_value'] == 6 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/6.png">';
	}   else if( $_GET['chkbox_value'] == 7 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/7.png">';
		echo '<div style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family: Candara, Tahoma, Geneva, sans-serif; font-size:11px; color:#444444;width:79%;padding:5px 0px 5px 10px;margin-bottom:5px;margin-top:5px;"><strong>Note: This Theme Does Not Support Split Name Feature</strong></div>';
	}   else if( $_GET['chkbox_value'] == 8 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/8.png">';
		echo '<div style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family: Candara, Tahoma, Geneva, sans-serif; font-size:11px; color:#444444;width:79%;padding:5px 0px 5px 10px;margin-bottom:5px;margin-top:5px;"><strong>Note: This Theme Does Not Support Split Name Feature</strong></div>';
	}  else if( $_GET['chkbox_value'] == 9 ) {
		echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/popup/9.png">';
	} 
	
} else if( $_GET['optin_form'] == 'withinpost_img' ) {
	if( $_GET['chkbox_value'] == 1 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/withinpost/1.jpg">';
	else if( $_GET['chkbox_value'] == 2 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/withinpost/2.jpg">';
	else if( $_GET['chkbox_value'] == 3 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/withinpost/3.jpg">';
	else if( $_GET['chkbox_value'] == 4 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/withinpost/4.jpg">';
	else if( $_GET['chkbox_value'] == 5 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/withinpost/5.jpg">';

} else if( $_GET['optin_form'] == 'insideCommentBox_img' ) {
	if( $_GET['chkbox_value'] == 1 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/insideCommentBox/1.jpg">';
	else if( $_GET['chkbox_value'] == 2 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/insideCommentBox/2.jpg">';

} else if( $_GET['optin_form'] == 'sidebar_img' ) {
/*	if( $_GET['chkbox_value'] == 1 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/sidebar/1.jpg">';
	else if( $_GET['chkbox_value'] == 2 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/sidebar/2.jpg">';
	else if( $_GET['chkbox_value'] == 3 ) echo '<img src="'.$_GET['lib_path'].'admin-pg/demo/sidebar/3.jpg">';*/
	
} else if( $_GET['optin_form'] == 'oddn' ) {
	$ofa_id = $_GET['ofa_id'];
	$elbp_autoresponder_table = $table_prefix.'elbp_autoresponder';
	$sql = "SELECT split_name,display_only_email,optin_trackcode_fld FROM $elbp_autoresponder_table WHERE id='$ofa_id'";
	$row = $wpdb->get_row( $sql, ARRAY_A );
	if ( $row != null ) {
		$result .= $row['split_name'];
		$result .= '%';
		$result .= $row['display_only_email'];
		$result .= '%';
		$result .= $row['optin_trackcode_fld'];
		echo $result;
	} 
}

/**Remove Image**/
function __elbpro_removeUploadImage( $option_name, $arrayImageName, $elbpro_abspath ) {
		global $table_prefix, $wpdb;
	    $elbp_optin_options_table = $table_prefix.'elbp_optin_options';
		$sql = "SELECT option_name, option_value FROM $elbp_optin_options_table";
		$sql .= " WHERE option_name='$option_name'";
		$row = $wpdb->get_row( $sql, ARRAY_A );
		$fetch_Options = unserialize( $row['option_value'] );
		// unlink now
		$file_info = pathinfo($fetch_Options[$arrayImageName]);
		$filename = $file_info['basename'];
		$banner = $elbpro_abspath.'wp-content/elbpro-uploads/'.$filename; 
		if ( file_exists($banner) ) @unlink($banner);
		// Eof unlink 
		if (array_key_exists($arrayImageName, $fetch_Options)) {
			$temp_image[$arrayImageName] = '';
			$insert_Options = array_merge($fetch_Options, $temp_image); 
			$insert_Options = serialize($insert_Options);
			$db_temp_sql = "UPDATE $elbp_optin_options_table SET option_value='$insert_Options' WHERE option_name='$option_name'";
			$wpdb->query( $db_temp_sql );				
		}
}



function __elbpro_PlacementRemoveUploadImage( $id, $arrayImageName, $elbpro_abspath ) {
		global $table_prefix, $wpdb;
	    $elbp_optin_placement_table = $table_prefix.'elbp_optin_placement';
		$sql = "SELECT option_values FROM $elbp_optin_placement_table";
		$sql .= " WHERE id='$id'";
		$row = $wpdb->get_row( $sql, ARRAY_A );
		$fetch_Options = unserialize( $row['option_values'] );
		// unlink now
		$file_info = pathinfo($fetch_Options[$arrayImageName]);
		$filename = $file_info['basename'];
		$banner = $elbpro_abspath.'wp-content/elbpro-uploads/'.$filename; 
		if ( file_exists($banner) ) @unlink($banner);
		// Eof unlink 
		if (array_key_exists($arrayImageName, $fetch_Options)) {
			$temp_image[$arrayImageName] = '';
			$insert_Options = array_merge($fetch_Options, $temp_image); 
			$insert_Options = serialize($insert_Options);
			$db_temp_sql = "UPDATE $elbp_optin_placement_table SET option_values='$insert_Options' WHERE id='$id'";
			$wpdb->query( $db_temp_sql );		
		}
}


function __elbpro_readyToGoMsg() {
	echo '<div style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family:Arial, Helvetica, sans-serif;font-size:12px; color:#444444;width:79%;padding:5px 0px 5px 10px;margin-bottom:5px;"><strong>Image Removed Successfully, You are ready to upload new Image now. </strong></div>';
}


if( $_GET['removeImage'] == 'footerbar_removeImage' ) {
	__elbpro_removeUploadImage( 'elbp_footerbar_options', 'footerbar_temp_image_url', $elbpro_abspath );  // optionName, arrayURLname, path
	__elbpro_readyToGoMsg();	
} else if( $_GET['removeImage'] == 'popup_removeImage' ) {
	__elbpro_removeUploadImage( 'elbp_popupbox_options', 'popup_temp_image_url', $elbpro_abspath );
	__elbpro_readyToGoMsg();	
} else if( $_GET['removeImage'] == 'withinBtmOfPost_removeImage' ) {
	__elbpro_removeUploadImage( 'elbp_withinbtmofpost_options', 'withinpost_temp_image_url', $elbpro_abspath );
	__elbpro_readyToGoMsg();	
} else if( $_GET['removeImage'] == 'insideCommentBox_removeImage' ) {
	__elbpro_removeUploadImage( 'elbp_insidecomment_options', 'insideCommentBox_temp_image_url', $elbpro_abspath );
	__elbpro_readyToGoMsg();
} else if( $_GET['removeImage'] == 'sidebar_removeImage' ) {
	__elbpro_removeUploadImage( 'elbp_sidebar_options', 'sidebar_temp_image_url', $elbpro_abspath );
	__elbpro_readyToGoMsg();
} else if( (int) $_GET['removeImage'] && isset($_GET['removeImage']) ) {
	__elbpro_PlacementRemoveUploadImage( $_GET['removeImage'], $_GET['imgFldName'], $elbpro_abspath );
	__elbpro_readyToGoMsg();
}
?>