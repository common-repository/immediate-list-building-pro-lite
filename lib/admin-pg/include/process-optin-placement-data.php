<?php
global $wpdb;
/**********
	 Facebook Connect
 **********/

	if( $process_facebookConnect == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	} else if( $process_squeezePage == 'Install File Now' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	
	} else if( $process_first_commentator == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {

			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key == 'email_from_name' ) $send_email_name = $val;
				else if ( $key == 'email_from_email' ) $send_email_email = $val;
				else if ( $key == 'email_subject' ) $send_email_subject = $val;
				else if ( $key == 'email_content' ) $send_email_content = $val;
				else if ( $key == 'send_email_active' ) $send_email_send_status = $val;
				else if ( $key == 'send_email_type' ) $send_email_type = $val;
			}
			$chkbox_options = serialize($chkbox_options);
			$elbpro_tempData = array(
									'elbp_from_name' => $send_email_name,
									'elbp_from_email' => $send_email_email,
									'elbp_email_subject' => $send_email_subject,
									'elbp_email_content' => $send_email_content,
									'elbp_email_send_status' => $send_email_send_status,
									'elbpro_email_send_type' => $send_email_type,
									 );	
			foreach($elbpro_tempData as $key => $val) {
				$db_email_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_email_temp_sql );				
			}	
			//Eof db process
			$this->chkbox_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(9);
			 }</script>";
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			$this->elbpro_optinProcess_placement_msg = '<strong>Configuration Saved Successfully. </strong>';
/**********
	 Subscribe Check Box Before Comment Box
 **********/
 
	} else if( $process_chkbox == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key != 'withinpost_next_step' ) $chkbox_options[$key] = $this->__elbp_escape_query($val);
			}
			$chkbox_options = serialize($chkbox_options);
			$elbpro_tempData = array(
									'elbp_chkbox_options' => $chkbox_options
									 );	
			foreach($elbpro_tempData as $key => $val) {
				$db_chkbox_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_chkbox_temp_sql );				
			}	
			//Eof db process
			$this->chkbox_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(4);
			 }</script>";
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			$this->elbpro_optinProcess_placement_msg = '<strong>Subscribe Check Box Configuration Saved Successfully. </strong>';
			
/**********
	 Optin Form Inside the Comment Box
 **********/
			
	} else if( $process_insideCommentBox == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	} else if( $process_sidebar == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
			$UploadimageURL = $this->__elbpro_initialUploadImageDataProcess( $_FILES['url_local'] );
			 
			// db Process.
			$sidebarLabelCFLD = $this->__elbp_escape_query($_POST['sidebarLabelCustomFld']);
			$sidebarFieldCFLD = $this->__elbp_escape_query($_POST['sidebarFieldCustomFld']);
			$withInPostCustomFld = array_combine($sidebarLabelCFLD, $sidebarFieldCFLD); 
			$sidebar_CustomFld['sidebar_customfields'] = $withInPostCustomFld;

			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key == 'sidebar_body_txt' ) $sidebar_temp_bodyTxt = $val;
				else if ( $key == 'url' || $key == 'url_live' ) $sidebar_temp_image['sidebar_temp_image_url'] = $UploadimageURL;
				else if ( $key != 'sidebar_next_step' ) $sidebar_options[$key] = $this->__elbp_escape_query($val);
			}
			$sidebar_options = array_merge($sidebar_options, $sidebar_temp_image,$sidebar_CustomFld); 
			//print_r($sidebar_options);
			$sidebar_options = serialize($sidebar_options);
			$elbpro_tempData = array(
									'elbp_sidebar_bodytxt' => $sidebar_temp_bodyTxt,
									'elbp_sidebar_options' => $sidebar_options
									 );	 
			foreach($elbpro_tempData as $key => $val) {
				$db_sidebar_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_sidebar_temp_sql );				
			}	
			//Eof db process
			$this->sidebar_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(6);
			 }</script>";
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			$this->elbpro_optinProcess_placement_msg = '<strong> Sidebar Configuration Saved Successfully </strong> &nbsp;<span style="color:#CC3300;font-weight:normal; padding-bottom:5px;">'.$this->image_msg.'</span>';
			
			
			
			
/**********
	 Sidebar DATA RESET
 **********/
 
	} else if( $process_sidebar_reset == 'Reset Sidebar' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
			
			$sidebar_options_reset = serialize($this->elbpro_sidebar_default_optin_options);
			$elbpro_tempData = array(
									'elbp_sidebar_clickStats' => '0',
									'elbp_sidebar_impsionStats'   => '0',
									'elbp_sidebar_bodytxt' 		  => '',
									'elbp_sidebar_options' 	      => $sidebar_options_reset
									 );	 
			foreach($elbpro_tempData as $key => $val) {
				$db_sidebar_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_sidebar_temp_sql );				
			}	
			
			//Eof db process
			$this->sidebar_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(6);
			 }</script>";
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			$this->elbpro_optinProcess_placement_msg = '<strong> Sidebar RESET Successfully </strong> &nbsp;<span style="color:#CC3300;font-weight:normal; padding-bottom:5px;">'.$this->image_msg.'</span>';
			
			
/**********
	 Subscribe on Register
 **********/
 
	} else if( $process_registration == 'Save Changes' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key != 'registor_next_step' ) $registor_options[$key] = $this->__elbp_escape_query($val);
			}
			$registor_options = serialize($registor_options);
			$elbpro_tempData = array(
									'elbp_register_options' => $registor_options
									 );	
			foreach($elbpro_tempData as $key => $val) {
				$db_chkbox_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_chkbox_temp_sql );				
			}	
			//Eof db process
			$this->chkbox_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(7);
			 }</script>";
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			$this->elbpro_optinProcess_placement_msg = '<strong>Subscribe on Registration Configuration Saved Successfully. </strong>';
			

	} else if( $process_dontShowBox == 'Submit' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key != 'dontShowOptinAgain_next_step' ) $registor_options[$key] = $val;
			}
			$registor_options = serialize($registor_options);
			$elbpro_tempData = array(
									'elbp_dontShowOptinAfterSubscribe_options' => $registor_options
									 );	
			foreach($elbpro_tempData as $key => $val) {
				$db_chkbox_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_chkbox_temp_sql );				
			}
			
			//Eof db process
			$this->footer_placement = 'current';
			echo "<script> window.onload = function () { 
			__elbpSelectTab(1); 
			}</script>";
			$this->elbpro_optinProcess_placement_msg = '<strong>Configuration Saved Successfully. </strong>';
			?>
			<script>
			      jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
			<?php
			
/**********
	 Advance Footer Bar
 **********/
	
	} else if( (trim($process_advance_footerbar) == 'Add New Footer Bar' || trim($process_advance_footerbar) == 'Update Footer Bar' )  && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	} else if( (trim($process_advance_popupbox) == 'Add New Popup Box' || trim($process_advance_popupbox) == 'Update Popup Box' )  && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	} else if( (trim($process_advance_withinpost) == 'Add New Within Bottom Of Post' || trim($process_advance_withinpost) == 'Update Within Bottom Of Post' )  && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	} else if( (trim($process_advance_exitpopup) == 'Add New Exit Popup' || trim($process_advance_exitpopup) == 'Update Exit Popup' )  && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
	
	
	} else if( (int) $delete_footerbar && isset($delete_footerbar) ) {
			// unlink now
			$sql = "SELECT option_values FROM $this->elbp_optin_placement_table WHERE id='$delete_footerbar'";
			$row = $wpdb->get_row( $sql, ARRAY_A );
			$fetch_Options = unserialize( $row['option_values'] );
			$file_info = pathinfo($fetch_Options['footerbar_temp_image_url']);
			$filename = $file_info['basename'];
			$banner = ELBPRO_ABSPATH.'wp-content/elbpro-uploads/'.$filename; 
			if ( file_exists($banner) ) @unlink($banner);
			// Delete
			$sql_delete_autoresponser = "DELETE FROM $this->elbp_optin_placement_table WHERE id='$delete_footerbar'";
			$wpdb->query( $sql_delete_autoresponser );
			
			$this->__elbpro_cuttentPageStatus('1');
			$this->elbpro_optinProcess_placement_msg = '<strong> Added Footerbar Deleted Successfully. </strong>';
			
	} else if( (int) $enableDisable_footerbar && isset($enableDisable_footerbar) ) {
	
			if( $_GET['FBstatus'] == 'disable' ) { 
				$flag = '0';
				$msg = 'Selected Footer Bar Disabled Successfully';
			} else if( $_GET['FBstatus'] == 'enable' ) {
				$flag = '1';
				$msg = 'Selected Footer Bar Enable Successfully';
			} 
			$sql_aff_status = "UPDATE $this->elbp_optin_placement_table SET flag='$flag' WHERE id='$enableDisable_footerbar'";
			$wpdb->query( $sql_aff_status );
	
			$this->__elbpro_cuttentPageStatus('1');
			$this->elbpro_optinProcess_placement_msg = '<strong> '.$msg.' </strong>';
			
			
	/* POPUP :: Delete, Enale/Disable */
 
	} else if( (int) $delete_popupBox && isset($delete_popupBox) ) {
			// unlink now
			$sql = "SELECT option_values FROM $this->elbp_optin_placement_table WHERE id='$delete_popupBox'";
			$row = $wpdb->get_row( $sql, ARRAY_A );
			$fetch_Options = unserialize( $row['option_values'] );
			$file_info = pathinfo($fetch_Options['popup_temp_image_url']);
			$filename = $file_info['basename'];
			$banner = ELBPRO_ABSPATH.'wp-content/elbpro-uploads/'.$filename; 
			if ( file_exists($banner) ) @unlink($banner);
			// Delete
			$sql_delete_autoresponser = "DELETE FROM $this->elbp_optin_placement_table WHERE id='$delete_popupBox'";
			$wpdb->query( $sql_delete_autoresponser );
			$this->__elbpro_cuttentPageStatus('2');
			$this->elbpro_optinProcess_placement_msg = '<strong> Added Popup Box Deleted Successfully. </strong>';
			
			
	} else if( (int) $enableDisable_popupBox && isset($enableDisable_popupBox) ) {
	
			if( $_GET['PBstatus'] == 'disable' ) { 
				$flag = '0';
				$msg = 'Selected Popup Box Disabled Successfully';
			} else if( $_GET['PBstatus'] == 'enable' ) {
				$flag = '1';
				$msg = 'Selected Popup Box Enable Successfully';
			} 
			$sql_aff_status = "UPDATE $this->elbp_optin_placement_table SET flag='$flag' WHERE id='$enableDisable_popupBox'";
			$wpdb->query( $sql_aff_status );
	
			$this->__elbpro_cuttentPageStatus('2');
			$this->elbpro_optinProcess_placement_msg = '<strong> '.$msg.' </strong>';
			
	/* WITH IN BTM OF POST :: Delete, Enale/Disable */
		
 	} else if( (int) $delete_withinpost && isset($delete_withinpost) ) {
			// unlink now
			$sql = "SELECT option_values FROM $this->elbp_optin_placement_table WHERE id='$delete_withinpost'";
			$row = $wpdb->get_row( $sql, ARRAY_A );
			$fetch_Options = unserialize( $row['option_values'] );
			$file_info = pathinfo($fetch_Options['popup_temp_image_url']);
			$filename = $file_info['basename'];
			$banner = ELBPRO_ABSPATH.'wp-content/elbpro-uploads/'.$filename; 
			if ( file_exists($banner) ) @unlink($banner);
			// Delete
			$sql_delete_autoresponser = "DELETE FROM $this->elbp_optin_placement_table WHERE id='$delete_withinpost'";
			$wpdb->query( $sql_delete_autoresponser );
			$this->__elbpro_cuttentPageStatus('3');
			$this->elbpro_optinProcess_placement_msg = '<strong> Added Within Buttom Of Post Deleted Successfully. </strong>';
			
			
	} else if( (int) $enableDisable_withinpost && isset($enableDisable_withinpost) ) {
	
			if( $_GET['WBPstatus'] == 'disable' ) { 
				$flag = '0';
				$msg = 'Selected Within Buttom Of Post Optin Disabled Successfully';
			} else if( $_GET['WBPstatus'] == 'enable' ) {
				$flag = '1';
				$msg = 'Selected Within Buttom Of Post Optin Enable Successfully';
			} 
			$sql_aff_status = "UPDATE $this->elbp_optin_placement_table SET flag='$flag' WHERE id='$enableDisable_withinpost'";
			$wpdb->query( $sql_aff_status );
	
			$this->__elbpro_cuttentPageStatus('3');
			$this->elbpro_optinProcess_placement_msg = '<strong> '.$msg.' </strong>';		

			
 	/* EXIT POPUP :: Delete, Enale/Disable */
	
	} else if( (int) $delete_exitpopup && isset($delete_exitpopup) ) {

			$sql_delete_exitpopup = "DELETE FROM $this->elbp_optin_placement_table WHERE id='$delete_exitpopup'";
			$wpdb->query( $sql_delete_exitpopup );
			$this->__elbpro_cuttentPageStatus('8');
			$this->elbpro_optinProcess_placement_msg = '<strong> Added Exit Popup Deleted Successfully. </strong>';
			
			
	} else if( (int) $enableDisable_exitpopup && isset($enableDisable_exitpopup) ) {
	
			if( $_GET['EPstatus'] == 'disable' ) { 
				$flag = '0';
				$msg = 'Selected Exit Popup Disabled Successfully';
			} else if( $_GET['EPstatus'] == 'enable' ) {
				$flag = '1';
				$msg = 'Selected Exit Popup Enable Successfully';
			} 
			$sql_aff_status = "UPDATE $this->elbp_optin_placement_table SET flag='$flag' WHERE id='$enableDisable_exitpopup'";
			$wpdb->query( $sql_aff_status );
	
			$this->__elbpro_cuttentPageStatus('8');
			$this->elbpro_optinProcess_placement_msg = '<strong> '.$msg.' </strong>';		
	
	} else {
			$this->default_placement = 'current'; 
			if( $_GET['fup'] == 1 ) {
				$this->__elbpro_cuttentPageStatus('1');
				$this->elbpro_optinProcess_placement_msg = '<strong> Configuration Saved Successfully. </strong> &nbsp;<span style="color:#CC3300; font-weight:normal; padding-bottom:5px;">'.$this->image_msg.'</span>';
			} else if( $_GET['pup'] == 1 ) {
				$this->__elbpro_cuttentPageStatus('2');
				$this->elbpro_optinProcess_placement_msg = '<strong> Configuration Saved Successfully. </strong> &nbsp;<span style="color:#CC3300; font-weight:normal; padding-bottom:5px;">'.$this->image_msg.'</span>';
			} else if( $_GET['wup'] == 1 ) {
				$this->__elbpro_cuttentPageStatus('3');
				$this->elbpro_optinProcess_placement_msg = '<strong> Configuration Saved Successfully. </strong> &nbsp;<span style="color:#CC3300; font-weight:normal; padding-bottom:5px;">'.$this->image_msg.'</span>';
			} else if( $_GET['exitp'] == 1 ) {	
				$this->__elbpro_cuttentPageStatus('8');
				$this->elbpro_optinProcess_placement_msg = '<strong> Configuration Saved Successfully. </strong>';
			} else {
				echo "<script> window.onload = function () { __elbpSelectTab(1); }</script>";
			}
			
	}
	
?>