<?php 
	$this->__elbpOptinOptions();
	
/** 
	Facebook Connect.
**/
	// Connect with Autoresponder service
	$facebookArpsplit = $this->__elbpFetchAutoresponderData( $this->fetch_facebook_options['facebook_arp'] );
	$facebookArpsplit = explode("%",$facebookArpsplit);
	$facebook_splitName = $facebookArpsplit[0];
	$facebook_onlyEmail = $facebookArpsplit[1];
	$facebook_trackingCode = $facebookArpsplit[2];
	
	if( $facebook_splitName == 1 ) { 
		$facebook_arpSplitName = 'block';
		$facebook_arpOnlyName = 'none';
	} else { 
		$facebook_arpSplitName = 'none';
		$facebook_arpOnlyName = 'block';
	}	
	
	if( $facebook_onlyEmail == 1 ) { 
		$facebook_arpOnlyEmail = 'none';
	} else {  
		$facebook_arpOnlyEmail = 'block';
	}
	
	if( $facebook_trackingCode == 'None' || $facebook_trackingCode == ''   ) {
		$facebook_arpTrackingCode = 'none';  
	} else {  
		$facebook_arpTrackingCode = 'block';
	}
	// Enable
	if( $this->fetch_facebook_options['enable_fbconnect'] == 'true' ) { 
		$enable_facebook = 'checked';
		$FB_connect_altmsg = 1;
	}


/** 
	Subscribe CheckBox Before Comment Box.
**/

	// Connect with Autoresponder service
	$subscribeCheckBoxArpsplit = $this->__elbpFetchAutoresponderData( $this->fetch_chkboxOptions['chkbox_arp'] );
	$subscribeCheckBoxArpsplit = explode("%",$subscribeCheckBoxArpsplit);
	$subscribeCheckBox_splitName = $subscribeCheckBoxArpsplit[0];
	$subscribeCheckBox_onlyEmail = $subscribeCheckBoxArpsplit[1];
	$subscribeCheckBox_trackingCode = $subscribeCheckBoxArpsplit[2];
	
	if( $subscribeCheckBox_splitName == 1 ) { 
		$subscribeCheckBox_arpSplitName = 'block';
		$subscribeCheckBox_arpOnlyName = 'none';
	} else { 
		$subscribeCheckBox_arpSplitName = 'none';
		$subscribeCheckBox_arpOnlyName = 'block';
	}	
	
	if( $subscribeCheckBox_onlyEmail == 1 ) { 
		$subscribeCheckBox_arpOnlyEmail = 'none';
	} else {  
		$subscribeCheckBox_arpOnlyEmail = 'block';
	}
	
	if( $subscribeCheckBox_trackingCode == 'None' || $subscribeCheckBox_trackingCode == ''   ) {
		$subscribeCheckBox_arpTrackingCode = 'none';  
	} else {  
		$subscribeCheckBox_arpTrackingCode = 'block';
	}
	// Checked Subscribers box by default
	if( $this->fetch_chkboxOptions['chkbox_default_chk'] == 1 ) $default_checked = 'checked';
	// Enable
	if( $this->fetch_chkboxOptions['enable_chkbox'] == 'true' ) $enable_checkBox = 'checked';
	
	
	
/** 
	Optin Form Inside Comment Box
**/

	// Choose A Template   
	if( $this->fetch_insideCommentOptions['insideCommentBox_tmp_chk'] == 1 ) $insideCommentBox_tmp_checked1 = 'checked';
	else if( $this->fetch_insideCommentOptions['insideCommentBox_tmp_chk'] == 2 ) $insideCommentBox_tmp_checked2 = 'checked';
	// Connect with Autoresponder service
	$insideCommentBoxArpsplit = $this->__elbpFetchAutoresponderData( $this->fetch_insideCommentOptions['insideCommentBox_arp'] );
	$insideCommentBoxArpsplit = explode("%",$insideCommentBoxArpsplit);
	$insideCommentBox_splitName = $insideCommentBoxArpsplit[0];
	$insideCommentBox_onlyEmail = $insideCommentBoxArpsplit[1];
	$insideCommentBox_trackingCode = $insideCommentBoxArpsplit[2];
	
	if( $insideCommentBox_splitName == 1 ) { 
		$insideCommentBox_arpSplitName = 'block';
		$insideCommentBox_arpOnlyName = 'none';
	} else { 
		$insideCommentBox_arpSplitName = 'none';
		$insideCommentBox_arpOnlyName = 'block';
	}	
	
	if( $insideCommentBox_onlyEmail == 1 ) { 
		$insideCommentBox_arpOnlyEmail = 'none';
	} else {  
		$insideCommentBox_arpOnlyEmail = 'block';
	}
	
	if( $insideCommentBox_trackingCode == 'None' || $insideCommentBox_trackingCode == ''   ) {
		$insideCommentBox_arpTrackingCode = 'none';  
	} else {  
		$insideCommentBox_arpTrackingCode = 'block';
	}
	//Image Section
	if( $this->fetch_insideCommentOptions['insideCommentBox_temp_image_url'] != '' ) {
		$insideCommentBox_displayUploadImage = 'block';
		$insideCommentBox_blockUploadImageOption = 'none';
		$insideCommentBox_uploadImageURL = $this->fetch_insideCommentOptions['insideCommentBox_temp_image_url'];
	} else {
		$insideCommentBox_displayUploadImage = 'none';
		$insideCommentBox_blockUploadImageOption = 'block';
	}	
	
	if( $this->fetch_insideCommentOptions['insideCommentBox_imgPosition'] == 'left' ) $insideCommentBox_displayImgLeft = 'checked';
	else if( $this->fetch_insideCommentOptions['insideCommentBox_imgPosition'] == 'right' ) $insideCommentBox_displayImgRight = 'checked';

	// Enable
	if( $this->fetch_insideCommentOptions['enable_insideCommentBox'] == 'true' ) $enable_insideCommentBox = 'checked';


	
/** 
	Sidebar
**/

	// Choose Template
	
	if( $this->fetch_sidebarOptions['sidebar_design_choise'] == 'ctmD' ) { 
		$choose_design_check1 = 'checked';
		$display_ctm_block = 'block';
		$display_extgD_block = 'none';
	} else if( $this->fetch_sidebarOptions['sidebar_design_choise'] == 'extgD' ) {
		$choose_design_check2 = 'checked';
		$display_extgD_block = 'block';
		$display_ctm_block = 'none';
	}
	
	// Choose Background Color
	if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 1 )  $sidebar_bg_checked1 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 2 )  $sidebar_bg_checked2 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 3 )  $sidebar_bg_checked3 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 4 )  $sidebar_bg_checked4 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 5 )  $sidebar_bg_checked5 = 'checked';  
	
	if( $this->fetch_sidebarOptions['sidebar_submitbtn_chg'] == 1 ) {
		$sidebar_change_submitbtn_checked = 'checked';
		$sidebar_open_btm_box = 'block';
	}
	
	// Submit Btm Change
	if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 1 )  $sidebar_submitbtn_checked1 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 2 )  $sidebar_submitbtn_checked2 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 3 )  $sidebar_submitbtn_checked3 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 4 )  $sidebar_submitbtn_checked4 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 5 )  $sidebar_submitbtn_checked5 = 'checked';  
	else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 6 )  $sidebar_submitbtn_checked6 = 'checked';  

	// Connect with Autoresponder service
	$sidebarArpsplit = $this->__elbpFetchAutoresponderData( $this->fetch_sidebarOptions['sidebar_arp'] );
	$sidebarArpsplit = explode("%",$sidebarArpsplit);
	$sidebar_splitName = $sidebarArpsplit[0];
	$sidebar_onlyEmail = $sidebarArpsplit[1];
	$sidebar_trackingCode = $sidebarArpsplit[2];
	
	if( $sidebar_splitName == 1 ) { 
		$sidebar_arpSplitName = 'block';
		$sidebar_arpOnlyName = 'none';
	} else { 
		$sidebar_arpSplitName = 'none';
		$sidebar_arpOnlyName = 'block';
	}	
	
	if( $sidebar_onlyEmail == 1 ) { 
		$sidebar_arpOnlyEmail = 'none';
	} else {  
		$sidebar_arpOnlyEmail = 'block';
	}
	
	if( $sidebar_trackingCode == 'None' || $sidebar_trackingCode == ''   ) {
		$sidebar_arpTrackingCode = 'none';  
	} else {  
		$sidebar_arpTrackingCode = 'block';
	}
	//Image Section
	if( $this->fetch_sidebarOptions['sidebar_temp_image_url'] != '' ) {
		$sidebar_displayUploadImage = 'block';
		$sidebar_blockUploadImageOption = 'none';
		$sidebar_uploadImageURL = $this->fetch_sidebarOptions['sidebar_temp_image_url'];
	} else {
		$sidebar_displayUploadImage = 'none';
		$sidebar_blockUploadImageOption = 'block';
	}	
	
	//Enable
	if( $this->fetch_sidebarOptions['enable_sidebar'] == 'true' ) $enable_sidebar = 'checked';

/** 
	Subscribe on Registration
**/

	// Connect with Autoresponder service
	$registrationArpsplit = $this->__elbpFetchAutoresponderData( $this->fetch_registration['registor_arp'] );
	$registrationArpsplit = explode("%",$registrationArpsplit);
	$registration_splitName = $registrationArpsplit[0];
	$registration_onlyEmail = $registrationArpsplit[1];
	$registration_trackingCode = $registrationArpsplit[2];
	
	if( $registration_splitName == 1 ) { 
		$registration_arpSplitName = 'block';
		$registration_arpOnlyName = 'none';
	} else { 
		$registration_arpSplitName = 'none';
		$registration_arpOnlyName = 'block';
	}	
	
	if( $registration_onlyEmail == 1 ) { 
		$registration_arpOnlyEmail = 'none';
	} else {  
		$registration_arpOnlyEmail = 'block';
	}
	
	if( $registration_trackingCode == 'None' || $registration_trackingCode == ''   ) {
		$registration_arpTrackingCode = 'none';  
	} else {  
		$registration_arpTrackingCode = 'block';
	}
	// Checked Subscribers box by default
	if( $this->fetch_registration['registor_default_chk'] == 1 ) $default_checked_onRegister = 'checked';
	// Enable
	if( $this->fetch_registration['enable_registor'] == 'true' ) $enable_registration = 'checked';
	
	
	
	/**
	*	Sent Email To Commentators.
	*/
	
/*	if( $this->fetch_sentEmail_status['elbp_email_send_status'] == '1' ) $enable_sendEmail = 'checked';
	else $enable_sendEmail = '';
	
	if( $this->fetch_sentEmail_type['elbpro_email_send_type'] == '1' ) $sendEmail_type1 = 'checked';
	else if( $this->fetch_sentEmail_type['elbpro_email_send_type'] == '2' ) $sendEmail_type2 = 'checked';
*/

	if( $this->fetch_sentEmail_status == '1' ) $enable_sendEmail = 'checked';
	else $enable_sendEmail = '';
	
	if( $this->fetch_sentEmail_type == '1' ) $sendEmail_type1 = 'checked';
	else if( $this->fetch_sentEmail_type == '2' ) $sendEmail_type2 = 'checked';


/** 
	Do not display optin box once subscribe
**/
	if( $this->fetch_dntShowOptinFormAgain['dontshow_footerbar_chk'] == 1 ) $this->dntShowOptinAfterSubs_footerbar_chk = 'checked';
	if( $this->fetch_dntShowOptinFormAgain['dontshow_popup_chk'] == 2 ) $this->dntShowOptinAfterSubs_popup_chk = 'checked';
	if( $this->fetch_dntShowOptinFormAgain['dontshow_btmofpost_chk'] == 3 ) $this->dntShowOptinAfterSubs_btmofpost_chk = 'checked';
	if( $this->fetch_dntShowOptinFormAgain['dontshow_optinInsideComment_chk'] == 4 ) $this->dntShowOptinAfterSubs_optinInsideComment_chk = 'checked';
	if( $this->fetch_dntShowOptinFormAgain['dontshow_sidebar_chk'] == 5 ) $this->dntShowOptinAfterSubs_sidebar_chk = 'checked';
	
	
/** 
	Advance Footer Bar 
**/

	if( isset($_GET['editFb']) && $_GET['editFb'] != '' ) {
	$displayEditMessage = 1;
	echo "<script> window.onload = function () { __elbpSelectTab(1); }</script>";
	?>
	<script>
		  jQuery(document).ready(function(){
			  jQuery("#footerbarEditMsg").show("slow");	
			 // jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
		  });	
	</script>
	<?php 
		$this->elbpro_footerBar_edit_msg = '<strong>Edit <span style="color:#CC3300;">Footer Bar</span> ID number '.$_GET['editFb'].'. </strong>';
		$rs = $this->__elbpOptinPlacements( '*', 'id='.$_GET['editFb'].'' );
		// Design Choise
		if( $this->optin_placement_optionValues['footerbar_design_choise'] == 'ctmD' ) {
			$footer_designType_checked1 = 'checked';
			$footer_extgD_display = 'none';
			$footer_ctmD_display = 'block';
	    } else if( $this->optin_placement_optionValues['footerbar_design_choise'] == 'extgD' ) { 
			$footer_designType_checked2 = 'checked';
			$footer_extgD_display = 'block';
			$footer_ctmD_display = 'none';
		}
		// Custom Design
		if( $this->optin_placement_optionValues['footerbar_tmp_transparent'] == '1' ) $footer_bar_trs = 'checked';
		
		
		// Existing Template
		if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 1 ) $footer_selected_tmp_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 2 ) $footer_selected_tmp_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 3 ) $footer_selected_tmp_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 4 ) $footer_selected_tmp_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 5 ) $footer_selected_tmp_checked5 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_selected_tmp'] == 6 ) $footer_selected_tmp_checked6 = 'checked';
		
		// Choose submit button design 
		if( $this->optin_placement_optionValues['footerbar_chk_submitbtn_chg'] == 1 ) { 
			$footer_change_submitbtn_checked = 'checked';
			$footer_change_submitbtn_display = 'block';
		} else {
			$footer_change_submitbtn_display = 'none';
		}
		
		if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 1 ) $footer_submitbtn_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 2 ) $footer_submitbtn_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 3 ) $footer_submitbtn_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 4 ) $footer_submitbtn_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 5 ) $footer_submitbtn_checked5 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_replaceSubmit_btn'] == 6 ) $footer_submitbtn_checked6 = 'checked';
		
		// Connect Template With Your Autoresponder Service
		$footerbarSelectArp = $this->__elbpFetchAutoresponderData( $this->optin_placement_arpID );
		$footerbarSelectArp = explode( "%", $footerbarSelectArp );
		$fb_splitName = $footerbarSelectArp[0];
		$fb_onlyEmail = $footerbarSelectArp[1];
		$fb_trackingCode = $footerbarSelectArp[2];
		if( $fb_splitName == 1 ) { 
			$footer_SplitName = 'block';
			$footer_OnlyName = 'none';
		} else { 
			$footer_SplitName = 'none';
			$footer_OnlyName = 'block';
		}	
		if( $fb_onlyEmail == 1 ) { 
			$footer_OnlyEmail = 'none';
		} else {  
			$footer_OnlyEmail = 'block';
		}
		if( $fb_trackingCode == 'None' || $fb_trackingCode == ''   ) {
			$footer_TrackingCode = 'none';  
		} else {  
			$footer_TrackingCode = 'block';
		}
		
		// Facebook Connect
		if( $this->optin_placement_optionValues['footerbar_facebook_connect'] == 1 ) $footer_facebook_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_facebook_connect'] == 2 ) $footer_facebook_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_facebook_connect'] == 3 ) $footer_facebook_checked3 = 'checked';
		
		// Replace footerbar with ads.
		if( $this->optin_placement_optionValues['hide_footersubsForm'] == 1 ) $footer_hideOptin = 'checked';

		
		
		//Image Section
		if( $this->optin_placement_optionValues['footerbar_temp_image_url'] != '' ) {
			$footerbar_UploadImage_display = 'block';
			$footerbar_blockUploadImageOption_display = 'none';
			$footerbar_displayUploadImageURL = $this->optin_placement_optionValues['footerbar_temp_image_url'];
		} else {
			$footerbar_UploadImage_display = 'none';
			$footerbar_blockUploadImageOption_display = 'block';
		}	
		
		if( $this->optin_placement_optionValues['footerbar_imgPosition'] == 'left' ) $footer_displayImgOnLeft = 'checked';
		else if( $this->optin_placement_optionValues['footerbar_imgPosition'] == 'right' ) $footer_displayImgOnRight = 'checked';
		
		// Dont Show Me Again
		if( $this->optin_placement_optionValues['footerbar_dontShowMeAgain'] == 1 ) {
			$footerbar_dontShowMeAgain = 'checked';
			$footerbar_dontShowMeAgainMoreOption = 'block';
			$footerbar_dontSmAgn_ShowHide = 'block';
		} else {
			$footerbar_dontShowMeAgainMoreOption = 'none';
			$footerbar_dontSmAgn_ShowHide = 'none';
		}
		
		// Where to show Footer Bar 
		if( $this->optin_placement_optionValues['footerbar_display_in_all'] == 'all' ) $fbchk_in_all = 'checked';
		if( $this->optin_placement_optionValues['footerbar_display_in_home'] == 'home' ) $fbchk_in_home = 'checked';
		if( $this->optin_placement_optionValues['footerbar_display_in_post'] == 'post' ) $fbchk_in_post = 'checked';	
		if( $this->optin_placement_optionValues['footerbar_display_in_archive'] == 'arch' ) $fbchk_in_arch = 'checked';	
		if( $this->optin_placement_optionValues['footerbar_display_in_search'] == 'search' ) $fbchk_in_search = 'checked';	
		if( $this->optin_placement_optionValues['footerbar_display_in_other'] == 'other' ) $fbchk_in_other = 'checked'; 
		
		// Schedule Footer Bar
		if( $this->optin_placement_optionValues['footerbar_schedule_on_display'] == 1 ) {
			$footer_schedule_ondisplay_checked1 = 'checked';
			$footerbar_schedue_disabled_2 = 'disabled';
			$footerbar_schedue_disabled_3 = 'disabled';
			$footerbar_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['footerbar_schedule_on_display'] == 2 ) {
			$footer_schedule_ondisplay_checked2 = 'checked';
			$footerbar_schedue_disabled_2 = '';
			$footerbar_schedue_disabled_3 = 'disabled';
			$footerbar_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['footerbar_schedule_on_display'] == 3 ) {
			$footer_schedule_ondisplay_checked3 = 'checked';
			$footerbar_schedue_disabled_2 = 'disabled';
			$footerbar_schedue_disabled_3 = '';
			$footerbar_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['footerbar_schedule_on_display'] == 4 ) {
			$footer_schedule_ondisplay_checked4 = 'checked';
			$footerbar_schedue_disabled_2 = 'disabled';
			$footerbar_schedue_disabled_3 = 'disabled';
			$footerbar_schedue_disabled_4 = '';
		}
		
		// Disable footer bar 
		if(  $this->optin_placement_optionValues['footerbar_diabsle_forDays'] == true ) $disbale_footerbar_ondemand = 'checked';
		// Active footerbar
		if( $this->optin_placement_flag == 1 ) $chk_is_footerbar_active = 'checked';
		
	} else {
		// template default
		$footerbar_default_designType_chk = 'checked';
		$footer_selected_default_tmp_chk = 'checked';
		$footer_selected_default_tmp = 1;
		$footer_default_TrackingCode_display = 'none';
		// arp default
		$footer_default_SplitName_display = 'none';
		$footer_default_OnlyName_display = 'block';
		$footer_default_OnlyEmail_display = 'block';
		// facebook default 
		$footer_default_facebook_checked = 'checked';
		// image default
		$footerbar_default_UploadImage_display = 'none';
		$footerbar_default_blockUploadImageOption_display = 'block';
		$footer_default_displayImgOnLeft = 'checked';
		// Dont Show Me Again
		$footerbar_default_dontSmAgn_ShowHide_display = 'none'; 
		$footerbar_default_dontSMAG_display = 'none';
		// Show in
		$default_show_in_all = 'checked';
		// Schedule
		$footer_schedule_default_checked = 'checked';
		$footerbar_schedue_default = 'disabled';
		// Disbale on demand chk
		$disbale_footerbar_ondemand_dchk = 'checked';
		// Active footerbar
		$active_footerbar_dchk = 'checked';
	}
	
	
/** 
	Advance Popup Box 
**/

	if( isset($_GET['editPB']) && $_GET['editPB'] != '' ) {  
	$displayPopupEditMessage = 1;
	echo "<script> window.onload = function () { __elbpSelectTab(2); }</script>";
	?>
	<script>
		  jQuery(document).ready(function(){
			  jQuery("#footerbarEditMsg").show("slow");	
			 // jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
		  });	
	</script>
	<?php 
	
		$this->elbpro_popupBox_edit_msg = '<strong>Edit <span style="color:#CC3300;">Popup Box</span> ID number '.$_GET['editPB'].'. </strong>';
		$rs = $this->__elbpOptinPlacements( '*', 'id='.$_GET['editPB'].'' );
	
		// Existing Template
		if( $this->optin_placement_optionValues['popup_tmp_chk'] == 1 ) $popup_tmp_chk1 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 2 ) $popup_tmp_chk2 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 3 ) $popup_tmp_chk3 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 4 ) $popup_tmp_chk4 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 5 ) $popup_tmp_chk5 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 6 ) $popup_tmp_chk6 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 7 ) $popup_tmp_chk7 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 8 ) $popup_tmp_chk8 = 'checked';
		else if( $this->optin_placement_optionValues['popup_tmp_chk'] == 9 ) $popup_tmp_chk9 = 'checked';
		
		// Display Simple Popup
		if( $this->optin_placement_optionValues['popup_simple_popup'] == 1 ) $popup_simple_popup = 'checked';
		
		
		// Choose submit button design 
		if( $this->optin_placement_optionValues['popup_chk_submitbtn_chg'] == 1 ) { 
			$popup_change_submitbtn_checked = 'checked';
			$popup_change_submitbtn_display = 'block';
		} else {
			$popup_change_submitbtn_display = 'none';
		}
		
		if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 1 ) $popup_submitbtn_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 2 ) $popup_submitbtn_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 3 ) $popup_submitbtn_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 4 ) $popup_submitbtn_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 5 ) $popup_submitbtn_checked5 = 'checked';
		else if( $this->optin_placement_optionValues['popup_replaceSubmit_btn'] == 6 ) $popup_submitbtn_checked6 = 'checked';
		
		// Connect Template With Your Autoresponder Service
		$popupSelectArp = $this->__elbpFetchAutoresponderData( $this->optin_placement_arpID );
		$popupSelectArp = explode( "%", $popupSelectArp );
		$pb_splitName = $popupSelectArp[0];
		$pb_onlyEmail = $popupSelectArp[1];
		$pb_trackingCode = $popupSelectArp[2];
		if( $pb_splitName == 1 ) { 
			$popupBox_SplitName = 'block';
			$popupBox_OnlyName = 'none';
		} else { 
			$popupBox_SplitName = 'none';
			$popupBox_OnlyName = 'block';
		}	
		if( $pb_onlyEmail == 1 ) { 
			$popupBox_OnlyEmail = 'none';
		} else {  
			$popupBox_OnlyEmail = 'block';
		}
		if( $pb_trackingCode == 'None' || $pb_trackingCode == ''   ) {
			$popupBox_TrackingCode = 'none';  
		} else {  
			$popupBox_TrackingCode = 'block';
		}
		
		// Choose Color
		if( $this->optin_placement_optionValues['popup_bg_color'] == 1 ) $popup_popupBgColor_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['popup_bg_color'] == 2 ) $popup_popupBgColor_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['popup_bg_color'] == 3 ) $popup_popupBgColor_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['popup_bg_color'] == 4 ) $popup_popupBgColor_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['popup_bg_color'] == 5 ) $popup_popupBgColor_checked5 = 'checked';
		
		
		// Change Popup Box To Ads
		if( $this->optin_placement_optionValues['hide_popupsubsForm'] == 1 ) $hide_popupSF_checked = 'checked';  //$hide_popupSF = 1
		
		// Replace with facebook connect
		if( $this->optin_placement_optionValues['replace_with_FB'] == 1 ) $facebook_connect_checked = 'checked'; //$popup_facebook_connect = 1
		
		
		//Image Section
		if( $this->optin_placement_optionValues['popup_temp_image_url'] != '' ) {
			$popup_UploadImage_display = 'block';
			$popup_blockUploadImageOption_display = 'none';
			$popup_displayUploadImageURL = $this->optin_placement_optionValues['popup_temp_image_url'];
		} else {
			$popup_UploadImage_display = 'none';
			$popup_blockUploadImageOption_display = 'block';
		}	
		
		// Dont Show Me Again
		if( $this->optin_placement_optionValues['popup_dontShowMeAgain'] == 1 ) {
			$popup_dontShowMeAgain = 'checked';
			$popupBox_dontShowMeAgainMoreOption = 'block';
			$popup_dontSmAgn_ShowHide = 'block';
		} else {
			$popupBox_dontShowMeAgainMoreOption = 'none';
			$popup_dontSmAgn_ShowHide = 'none';
		}
		
		// Where to show popup Bar 
		if( $this->optin_placement_optionValues['popup_display_in_all'] == 'all' ) $pupchk_in_all = 'checked';
		if( $this->optin_placement_optionValues['popup_display_in_home'] == 'home' ) $pupchk_in_home = 'checked';
		if( $this->optin_placement_optionValues['popup_display_in_post'] == 'post' ) $pupchk_in_post = 'checked';	
		if( $this->optin_placement_optionValues['popup_display_in_archive'] == 'arch' ) $pupchk_in_arch = 'checked';	
		if( $this->optin_placement_optionValues['popup_display_in_search'] == 'search' ) $pupchk_in_search = 'checked';	
		if( $this->optin_placement_optionValues['popup_display_in_other'] == 'other' ) $pupchk_in_other = 'checked'; 
		
		// Schedule popup Bar
		if( $this->optin_placement_optionValues['popup_scheduleOnDisplay'] == 1 ) {
			$popupBox_schedule_ondisplay_checked1 = 'checked';
			$popupBox_schedue_disabled_2 = 'disabled';
			$popupBox_schedue_disabled_3 = 'disabled';
			$popupBox_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['popup_scheduleOnDisplay'] == 2 ) {
			$popupBox_schedule_ondisplay_checked2 = 'checked';
			$popupBox_schedue_disabled_2 = '';
			$popupBox_schedue_disabled_3 = 'disabled';
			$popupBox_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['popup_scheduleOnDisplay'] == 3 ) {
			$popupBox_schedule_ondisplay_checked3 = 'checked';
			$popupBox_schedue_disabled_2 = 'disabled';
			$popupBox_schedue_disabled_3 = '';
			$popupBox_schedue_disabled_4 = 'disabled';
		} else if( $this->optin_placement_optionValues['popup_scheduleOnDisplay'] == 4 ) {
			$popupBox_schedule_ondisplay_checked4 = 'checked';
			$popupBox_schedue_disabled_2 = 'disabled';
			$popupBox_schedue_disabled_3 = 'disabled';
			$popupBox_schedue_disabled_4 = '';
		}
		
		// Disable popup bar 
		if(  $this->optin_placement_optionValues['popup_disable_forDays'] == 'true' ) $disable_popup_ondemand = 'checked';
		// Active popup
		if( $this->optin_placement_flag == 1 ) $chk_is_popup_active = 'checked';
		
	} else {
		// template default
		$popup_selected_default_tmp_chk = 'checked';
		$popup_selected_default_tmp = 1;
		$popup_default_TrackingCode_display = 'none';
		// arp default
		$popup_default_SplitName_display = 'none';
		$popup_default_OnlyName_display = 'block';
		$popup_default_OnlyEmail_display = 'block';
		// facebook default 
		//$popup_default_facebook_checked = 'checked';
		
		// image default
		$popup_default_UploadImage_display = 'none';
		$popup_default_blockUploadImageOption_display = 'block';
		// Dont Show Me Again
		$popup_default_dontSmAgn_ShowHide_display = 'none'; 
		$popup_default_dontSMAG_display = 'none';
		// Show in
		$popup_default_show_in_all = 'checked';
		// Schedule
		$popupBox_schedule_default_checked = 'checked';
		$popupBox_schedue_default = 'disabled';
		// Disbale on demand chk
		$disable_popup_ondemand_dchk = 'checked';
		// Active popup
		$active_popup_dchk = 'checked';
	}

/** 
	Advance Within Buttom Of Post 
**/

	if( isset($_GET['editwbp']) && $_GET['editwbp'] != '' ) {  
	
	$displayWithinPostMessage = 1;
	echo "<script> window.onload = function () { __elbpSelectTab(3); }</script>";
	?>
	<script>
		  jQuery(document).ready(function(){
			  jQuery("#withinBtmOfPostEditMsg").show("slow");	
			 // jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
		  });	
	</script>
	<?php 
	
		$this->elbpro_withinbtm_edit_msg = '<strong>Edit <span style="color:#CC3300;">Within Bottom Of Post</span> ID number '.$_GET['editwbp'].'. </strong>';
		$rs = $this->__elbpOptinPlacements( '*', 'id='.$_GET['editwbp'].'' );
	
		// Design Choise
		if( $this->optin_placement_optionValues['withinpost_design_choise'] == 'ctmD' ) {
			$withinpost_designType_checked1 = 'checked';
			$withinpost_extgD_display = 'none';
			$withinpost_ctmD_display = 'block';
	    } else if( $this->optin_placement_optionValues['withinpost_design_choise'] == 'extgD' ) { 
			$withinpost_designType_checked2 = 'checked';
			$withinpost_extgD_display = 'block';
			$withinpost_ctmD_display = 'none';
		}
		
		// Existing Template
		if( $this->optin_placement_optionValues['withinpost_selected_tmp'] == 1 ) $withinpost_selected_tmp_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['withinpost_selected_tmp'] == 2 ) $withinpost_selected_tmp_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['withinpost_selected_tmp'] == 3 ) $withinpost_selected_tmp_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['withinpost_selected_tmp'] == 4 ) $withinpost_selected_tmp_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['withinpost_selected_tmp'] == 5 ) $withinpost_selected_tmp_checked5 = 'checked';
		
		// Choose submit button design 
		if( $this->optin_placement_optionValues['withinpost_chk_submitbtn_chg'] == 1 ) { 
			$withinpost_change_submitbtn_checked = 'checked';
			$withinpost_change_submitbtn_display = 'block';
		}
		
		if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 1 ) $withininpost_submitbtn_checked1 = 'checked';
		else if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 2 ) $withininpost_submitbtn_checked2 = 'checked';
		else if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 3 ) $withininpost_submitbtn_checked3 = 'checked';
		else if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 4 ) $withininpost_submitbtn_checked4 = 'checked';
		else if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 5 ) $withininpost_submitbtn_checked5 = 'checked';
		else if( $this->optin_placement_optionValues['withininpost_replaceSubmit_btn'] == 6 ) $withininpost_submitbtn_checked6 = 'checked';
		
		// Connect Template With Your Autoresponder Service
		$withinpostSelectArp = $this->__elbpFetchAutoresponderData( $this->optin_placement_arpID );
		$withinpostSelectArp = explode( "%", $withinpostSelectArp );
		$wbp_splitName = $withinpostSelectArp[0];
		$wbp_onlyEmail = $withinpostSelectArp[1];
		$wbp_trackingCode = $withinpostSelectArp[2];
		if( $wbp_splitName == 1 ) { 
			$withinpost_SplitName = 'block';
			$withinpost_OnlyName = 'none';
		} else { 
			$withinpost_SplitName = 'none';
			$withinpost_OnlyName = 'block';
		}	
		if( $wbp_onlyEmail == 1 ) { 
			$withinpost_OnlyEmail = 'none';
		} else {  
			$withinpost_OnlyEmail = 'block';
		}
		if( $wbp_trackingCode == 'None' || $wbp_trackingCode == ''   ) {
			$withinpost_TrackingCode = 'none';  
		} else {  
			$withinpost_TrackingCode = 'block';
		}
		
		
		
		//Image Section
		if( $this->optin_placement_optionValues['withinpost_temp_image_url'] != '' ) {
			$fwithinpost_UploadImage_display = 'block';
			$withinpost_blockUploadImageOption_display = 'none';
			$withinpost_displayUploadImageURL = $this->optin_placement_optionValues['withinpost_temp_image_url'];
		} else {
			$withinpost_UploadImage_display = 'none';
			$withinpost_blockUploadImageOption_display = 'block';
		}	
		
		if( $this->optin_placement_optionValues['withinpost_imgPosition'] == 'left' ) $withinpost_displayImgOnLeft = 'checked';
		else if( $this->optin_placement_optionValues['withinpost_imgPosition'] == 'right' ) $withinpost_displayImgOnRight = 'checked';
		
		
		// Where to show within btm of post 
		if( $this->optin_placement_optionValues['withinpost_display_in_post'] == 'post' ) $withinpost_in_post = 'checked';	
		
		
		// Disable within btm of post
		if(  $this->optin_placement_optionValues['witinpost_diabsle_forDays'] == true ) $disbale_withinpost_ondemand = 'checked';
		// Active within btm of post
		if( $this->optin_placement_flag == 1 ) $chk_is_withinpost_active = 'checked';
	
		
	} else {
		// template default
		$withinpost_default_designType_chk = 'checked';
		$withinpost_selected_default_tmp_chk = 'checked';
		$withinpost_selected_default_tmp = 5;
		$withinpost_default_TrackingCode_display = 'none';
		// arp default
		$withinpost_default_SplitName_display = 'none';
		$withinpost_default_OnlyName_display = 'block';
		$withinpost_default_OnlyEmail_display = 'block';
   	
		// image default
		$withinpost_default_UploadImage_display = 'none';
		$withinpost_default_blockUploadImageOption_display = 'block';
		$withinpost_default_displayImgOnLeft = 'checked';
		
		// Show in
		$default_show_inSinglePost = 'checked';
		// Disbale on demand chk
		$disbale_withinpost_ondemand_dchk = 'checked';
		// Active footerbar
		$active_withinpost_dchk = 'checked';
	}
	
	
/** 
	Advance Exit Popup 
**/

	if( isset($_GET['editEP']) && $_GET['editEP'] != '' ) {
	$displayExitPopupEditMessage = 1;
	echo "<script> window.onload = function () { __elbpSelectTab(8); }</script>";
	?>
	<script>
		  jQuery(document).ready(function(){
			  jQuery("#exitpopupEditMsg").show("slow");	
			 // jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
		  });	
	</script>
	<?php 
		$this->elbpro_exitpopup_edit_msg = '<strong>Edit <span style="color:#CC3300;">Exit Popup</span> ID number '.$_GET['editEP'].'. </strong>';
		$this->__elbpOptinPlacements( '*', 'id='.$_GET['editEP'].'' );
		
		// Where to show exit popup
		if( $this->optin_placement_optionValues['display_new_exitpopup_in_all'] == 'all' ) $epop_in_all = 'checked';
		if( $this->optin_placement_optionValues['exitpopup_display_in_home'] == 'home' ) $epop_in_home = 'checked';
		if( $this->optin_placement_optionValues['exitpopup_display_in_post'] == 'post' ) $epop_in_post = 'checked';	
		if( $this->optin_placement_optionValues['exitpopup_display_in_archive'] == 'arch' ) $epop_in_arch = 'checked';	
		if( $this->optin_placement_optionValues['exitpopup_display_in_search'] == 'search' ) $epop_in_search = 'checked';	
		if( $this->optin_placement_optionValues['exitpopup_display_in_other'] == 'other' ) $epop_in_other = 'checked'; 
		
		// Active exit popup
		if( $this->optin_placement_flag == 1 ) $chk_is_activeExitpopup_active = 'checked';
		
	}

?>