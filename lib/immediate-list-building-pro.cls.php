<?php
/**
 * Holds necessary functions and variables
 */
class EmailListBuildingPro
{

	/*************************** 
		DATABASE SECTION
	****************************/

	var $elbp_autoresponder_table 	    = 'elbp_autoresponder';
	var $elbp_optin_options_table       = 'elbp_optin_options';
	var $elbp_optin_insidecomment_table = 'elbp_optin_insidecomment';
	var $elbp_optin_placement_table     = 'elbp_optin_placement';
	var $elbp_first_commentator_table   = 'elbp_first_commentator';
	// wordpress default tables
	var $wordpress_comments_table	    = 'comments';
	var $wordpress_posts_table		    = 'posts';
	var $wordpress_users_table		    = 'users';

	// Defult Values.
	var	$elbpro_footerbar_default_optin_options = array(
		'footerbar_tmp_chk' => 1,
		'footerbar_arp_trackingcode' => 'ilbpro_footer_bar',
		'footerbar_body_txt' => 'Get insider tips on how to make more money from your blog as well as how to bring thousands of new visitors to your blog for free', 
		'footerbar_firstnamefld_txt' => 'Your first name...', 
		'footerbar_lastnamefld_txt' => 'Your last name...', 
		'footerbar_namefld_txt' => 'Your name...',
		'footerbar_emailfld_txt' => 'Your e-mail...', 
		'footerbar_submit_txt' => 'I like to join now!!!',
		'url_type' => 1,
		'footerbar_imgPosition' => 'right',
		'footerbar_schedule' => 1,
		'footerbar_display_in_all' => 'all',
		);
		
	var	$elbpro_popup_default_optin_options = array(
		'popup_tmp_chk' => 1,
		'popup_arp_trackingcode' => 'ilbpro_popup_bar',
		'popup_title_txt' => 'start an online business now!', 
		'popup_main_title_txt' => 'join thousands of people and start an online business now!',
		'popup_firstnamefld_txt' => 'Your first name...', 
		'popup_lastnamefld_txt' => 'Your last name...', 
		'popup_namefld_txt' => 'Your name...', 
		'popup_emailfld_txt' => 'Your e-mail...',
		'popup_submit_txt' => 'I like to join now!!!', 
		'popup_security_note' => 'We respect your privacy. Your information will not be shared with any third party and you can unsubscribe at any time
',
		'url_type' => 1,
		'popup_schedule' => '1',
		'popup_display_in_all' => 'all'
		);
		
	var	$elbpro_withinBtmOfPost_default_optin_options = array(
		'withinpost_tmp_chk' => 4,
		'withinpost_arp_trackingcode' => 'ilbpro_withinpost',
		'withinpost_title_txt' => 'join thousands of people and start an online business now!', 
		'withinpost_firstnamefld_txt' => 'Your first name...', 
		'withinpost_lastnamefld_txt' => 'Your last name...', 
		'withinpost_namefld_txt' => 'Your name...', 
		'withinpost_emailfld_txt' => 'Your e-mail...', 
		'withinpost_submit_txt' => 'I like to join now!!!', 
		'withinpost_security_note' => 'We respect your privacy. Your information will not be shared with any third party and you can unsubscribe at any time', 
		'url_type' => 1,
		'withinpost_imgPosition' => 'left',
		'withinpost_display_in_post' => 'post',
		'withinpost_display_in_single_page' => 'page',
		'withinpost_customfields' => array( ''=>'',)
		);		
		
	var	$elbpro_checkBox_default_optin_options = array(
		'chkbox_arp_trackingcode' => 'ilbpro_chkbox',
		'chkbox_default_chk' => 1,
		'chkbox_msg_to_display' => 'Subscribe to our mailing list'
		);
		
	var	$elbpro_optinInsideCommentBox_default_optin_options = array(
		'insideCommentBox_tmp_chk' => 1,
		'insideCommentBox_arp_trackingcode' => 'ilbpro_OptinInsideComment',
		'insideCommentBox_title_txt' => 'join thousands of people and start an online business now!', 
		'insideCommentBox_firstnamefld_txt' => 'Your first name...', 
		'insideCommentBox_lastnamefld_txt' => 'Your last name...', 
		'insideCommentBox_namefld_txt' => 'Your name...', 
		'insideCommentBox_emailfld_txt' => 'Your e-mail...', 
		'insideCommentBox_submit_txt' => 'I like to join now!!!', 
		'insideCommentBox_security_note' => 'We respect your privacy. Your information will not be shared with any third party and you can unsubscribe at any time', 
		'url_type' => 1,
		'insideCommentBox_imgPosition' => 'left',
		'insideCommentBox_customfields' => array( ''=>'',)
		);	
		
	var	$elbpro_sidebar_default_optin_options = array(
		'sidebar_tmp_chk' => 1,
		'sidebar_design_choise' => 'extgD',
		'sidebar_arp_trackingcode' => 'ilbpro_sidebar',
		'sidebar_title_txt' => 'Subscribe To Our Newsletter', 
		'sidebar_firstnamefld_txt' => 'Your first name...', 
		'sidebar_lastnamefld_txt' => 'Your last name...', 
		'sidebar_namefld_txt' => 'Your name...', 
		'sidebar_emailfld_txt' => 'Your e-mail...', 
		'sidebar_submit_txt' => 'Subscribe Me', 
		'sidebar_security_note' => '', 
		'url_type' => 1,
		'sidebar_customfields' => array( ''=>'',)
		);		
		
	var	$elbpro_register_default_optin_options = array(
		'registor_arp_trackingcode' => 'ilbpro_registor',
		'registor_default_chk' => 1,
		'registor_msg_to_display' => 'I want the newsletter, too.'
		);
	
	var $elbpro_hideOptinFormFor_daysOnceSubscribe = array(
		'dontShowOptinFor_daysOnceSubscribe' => 30
		);
		
	var $elbpro_customFields = array(  'elbp_szpg_tmp' ,
						'elbp_szpg_select_btm_design' , 
						'elbp_szpg_btm_type',
						'elbp_szpg_btm_txt' , 
						'elbp_szpg_selected_arp' , 
						'elbp_szpg_trackingcode' , 
						'elbp_szpg_firstname' , 
						'elbp_szpg_lastname' , 
						'elbp_szpg_namefld' , 
						'elbp_szpg_emailfld' ,
						'elbp_szpg_videoCode' ,
						'elbp_szpg_preHeadline' ,
						'elbp_szpg_headline' , 
						'elbp_szpg_form_headline' , 
						'elbp_szpg_securaty_note' , 
						'elbp_szpg_submit_btmtxt' , 
						'elbp_szpg_sco_title' , 
						'elbp_szpg_sco_meta_dec' , 
						'elbp_szpg_sco_meta_key' , 
						'elbp_szpg_sco_noindex' , 
						'elbp_szpg_sco_nofollow' , 
						'elbp_szpg_sco_noarchive' , 
						'elbp_szpg_sco_footer_code' ,
						'elbp_szpg_videourl',
						'elbp_szpg_videoWidth',
						'elbp_szpg_videoHeight',
						'elbp_szpg_sbtmC',
						'elbp_szpg_videoautoplay',
						'elbp_szpg_videocontrolbar', 
						'elbp_szpg_subheadline',
						'elbp_szpg_design_color',
						'elbp_szpg_imageUrl',
						'elbp_szpg_imagealt',
						'elbp_szpg_imagealert'
			 );
		
	
	/**
	 * Create Autoresponder table
	 */
	function __elbp_autoresponder_table() {
		global $wpdb;
		$db_table = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}elbp_autoresponder'");
		if ( $db_table != $wpdb->prefix.'elbp_autoresponder' ) {
		$create_autoresponder_table = "CREATE TABLE {$wpdb->prefix}elbp_autoresponder (                                                
										 `id` int(11) NOT NULL auto_increment,                                               
										 `optin_html_form_code` text collate utf8_general_ci NOT NULL,                     
										 `optin_form_name` varchar(50) collate utf8_general_ci NOT NULL,                   
										 `optin_name_fld` varchar(50) collate utf8_general_ci NOT NULL,                    
										 `optin_email_fld` varchar(50) collate utf8_general_ci NOT NULL,                   
										 `optin_trackcode_fld` varchar(50) collate utf8_general_ci NOT NULL,               
										 `optin_form_url` text collate utf8_general_ci NOT NULL,                           
										 `optin_hidden_fields` text collate utf8_general_ci NOT NULL,                      
										 `split_name` enum('0','1') collate utf8_general_ci NOT NULL default '0',          
										 `display_only_email` enum('0','1') collate utf8_general_ci NOT NULL default '0',  
										 `flag_aff` enum('0','1') collate utf8_general_ci NOT NULL default '0',            
										 PRIMARY KEY  (`id`)                                                          
										); 
										";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );				
		dbDelta($create_autoresponder_table);
		return true;
		}
		return false;
	}
	
	/**
	 * Creates Optin options table
	 */
	function __elbp_optin_options_table() {
		global $wpdb;
		$db_table = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}elbp_optin_options'");
		if ( $db_table != $wpdb->prefix.'elbp_optin_options' ) {
		$create_optin_options_table = "CREATE TABLE {$wpdb->prefix}elbp_optin_options (                                                
										   `option_name` varchar(250) collate utf8_general_ci NOT NULL,  
										   `option_value` text collate utf8_general_ci,                  
											PRIMARY KEY  (`option_name`)                                    
											);
										   ";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );				
		dbDelta($create_optin_options_table);
		return true;
		}
		return false;
	}
	
	
	/**
	 * Creates inside comment table
	 */
	function __elbp_optin_insidecomment_table() {
		global $wpdb;
		$db_table = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}elbp_optin_insidecomment'");
		if ( $db_table != $wpdb->prefix.'elbp_optin_insidecomment' ) {
		$create_icomment_table = "CREATE TABLE {$wpdb->prefix}elbp_optin_insidecomment (                                                
										`id` int(11) NOT NULL AUTO_INCREMENT,
										`email` varchar(255) NOT NULL,
										`embeded` int(11) NULL,
										`original_comment` int(11) NULL,
										PRIMARY KEY(`id`)
											);
										   ";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );				
		dbDelta($create_icomment_table);
		return true;
		}
		return false;
	}
	
	
	/**
	 * Creates Optin Placement table
	 */
	function __elbp_optin_placement_table() {
		global $wpdb;
		$db_table = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}elbp_optin_placement'");
		if ( $db_table != $wpdb->prefix.'elbp_optin_placement' ) {
		$create_optinPlacement_table = "CREATE TABLE {$wpdb->prefix}elbp_optin_placement (                                                
											   `id` int(12) NOT NULL auto_increment,                           
											   `optin_name` varchar(200) collate latin1_general_ci NOT NULL,   
											   `optin_type` varchar(50) collate latin1_general_ci NOT NULL,    
											   `arp_id` int(3) NOT NULL,                                       
											   `option_values` text character set utf8 NOT NULL,               
											   `main_title` text character set utf8 NOT NULL,                  
											   `body_msg` text character set utf8 NOT NULL, 
											   `ads_txt` text character set utf8 NOT NULL,                       
											   `cookie` text collate latin1_general_ci NOT NULL,               
											   `impsionStats` int(12) NOT NULL,                                
											   `clickStatus` int(12) NOT NULL,                                 
											   `flag` enum('0','1') collate latin1_general_ci NOT NULL,        
											    PRIMARY KEY  (`id`)  
											);
										   ";
			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );				
			dbDelta($create_optinPlacement_table);
			return true;
		}
		return false;
	}
	
	
	/**
	* Creates table for first commentator
	*/
	function __elbp_first_commentator_table(){
		global $wpdb;
		$db_table = $wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}elbp_first_commentator'");
		if ( $db_table != $wpdb->prefix.'elbp_first_commentator' ) {
		$sql = "CREATE TABLE {$wpdb->prefix}elbp_first_commentator (                                                
						emailed_ID mediumint(9) NOT NULL AUTO_INCREMENT,
						email varchar(255) NOT NULL,
						UNIQUE KEY emailed_ID (emailed_ID),
						INDEX ( email )
					);";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );				
		dbDelta($sql);
		return true;
		}
		return false;		
	}
	
	/**
	 * Adds default optin data to DB table
	 */
	function __elbpInsertDefaultOptinData() {
		global $wpdb;
		$elbp_optinDefaultData = array(
								'elbp_affiliate_options'        => '',
								// Footer Bar
								'elbp_footerbar_clickStats'     => '0',
								'elbp_footerbar_impsionStats'   => '0',
								'elbp_footerbar_title' 			=> 'join thousands of people and start an online business now!', 
								'elbp_footerbar_options' 		=> serialize( $this->elbpro_footerbar_default_optin_options ),
								// Popup Box
								'elbp_popupbox_clickStats'      => '0',
								'elbp_popupbox_impsionStats'    => '0',
								'elbp_popupbox_bodytxt' 		=> 'Get insider tips on how to make more money from your blog as well as how to bring thousands of new visitors to your blog for free', 
								'elbp_popupbox_options' 		=> serialize( $this->elbpro_popup_default_optin_options ), 
								// Within Btm Of Post
								'elbp_withinbtmofpost_clickStats'   => '0',
								'elbp_withinbtmofpost_impsionStats' => '0',
								'elbp_withinbtmofpost_bodytxt' 	=> 'Get insider tips on how to make more money from your blog as well as how to bring thousands of new visitors to your blog for free', 
								'elbp_withinbtmofpost_options'	=> serialize($this->elbpro_withinBtmOfPost_default_optin_options), 
								// Chk Box
								'elbp_chkbox_subscribers'       => '0',
								'elbp_chkbox_options' 			=> serialize($this->elbpro_checkBox_default_optin_options), 
								// Inside Comment box
								'elbp_insidecomment_clickStats'   => '0',
								'elbp_insidecomment_impsionStats' => '0',
								'elbp_insidecomment_bodytxt'  => 'Get insider tips on how to make more money from your blog as well as how to bring thousands of new visitors to your blog for free',
								'elbp_insidecomment_options'  => serialize($this->elbpro_optinInsideCommentBox_default_optin_options),
								// sidebar
								'elbp_sidebar_clickStats'     => '0',
								'elbp_sidebar_impsionStats'   => '0',
								'elbp_sidebar_bodytxt' 		  => '',
								'elbp_sidebar_options' 	      => serialize($this->elbpro_sidebar_default_optin_options),
								// Register
								'elbp_registor_subscribers'   => '0',
								'elbp_register_options'       => serialize($this->elbpro_register_default_optin_options),
								'elbp_dontShowOptinAfterSubscribe_options' => serialize($this->elbpro_hideOptinFormFor_daysOnceSubscribe),
								
								// Send Email To First Commentators.
								'elbp_from_name' => '%author_name%',
								'elbp_from_email' => '%author_email%',
								'elbp_email_subject' => '!!! IMPORTANT, Thank you!',
								'elbp_email_content' => 'Hi %commentator_name%,
	
Thank you for visiting my blog (%blog_url%) and posting your comment. 

If you love my content, I highly recommend you subscribe to our newsletter for latest content straight to your mailbox. 
Visit the following link to subscribe:
{{your newsletter page link goes here...}}

Please let me know if you have any questions. 
										
Take care!
										
%author_name%
%blog_url%',
								'elbp_email_send_status' => '0',
								'elbpro_email_send_type' => '2',
								'elbp_facebook_options' => '',
								'elbp_facebook_msg' => '',
								'elbp_facebook_post_on_user_wall' => '',
								'elbp_facebook_subscribers' => '0',
								
							);
		foreach( $elbp_optinDefaultData as $key => $val ) {
			$db_insert_optinDefaultData = "INSERT INTO $this->elbp_optin_options_table (option_name, option_value) VALUES ('$key', '$val')";	
			$wpdb->query($db_insert_optinDefaultData);				
		}									
	}
	
	/*************************** 
		ADMIN SECTION
	****************************/
	
	/**
	 * Get options from option table
	 */
	function __elbpOptinOptions( $option_name = '' ) {
		global $wpdb;
		$sql = "SELECT option_name, option_value FROM $this->elbp_optin_options_table";
		if ( $option_name != '' ) $sql .= " WHERE option_name='$option_name'";
		
		$option_names = $wpdb->get_results( $sql, ARRAY_A );
		if( $option_names ) { 
			foreach ( $option_names as $row ) {

			if ( $row['option_name'] == 'elbp_affiliate_options' ) $this->fetch_affiliateOptions = unserialize($row['option_value']);
			// footer bar
			if ( $row['option_name'] == 'elbp_footerbar_clickStats' ) $this->fetch_footerBarClickStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_footerbar_impsionStats' ) $this->fetch_footerBarImpsionStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_footerbar_title' ) $this->fetch_footerBarTitle = $row['option_value'];
			if ( $row['option_name'] == 'elbp_footerbar_options' ) $this->fetch_footerBarOptions = unserialize($row['option_value']);
			// popup box
			if ( $row['option_name'] == 'elbp_popupbox_clickStats' ) $this->fetch_popupBoxClickStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_popupbox_impsionStats' ) $this->fetch_popupBoxImpsionStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_popupbox_bodytxt' ) $this->fetch_popupBoxBodytxt = $row['option_value'];
			if ( $row['option_name'] == 'elbp_popupbox_options' ) $this->fetch_popupBoxOptions = unserialize($row['option_value']);
			// within btm of post
			if ( $row['option_name'] == 'elbp_withinbtmofpost_clickStats' ) $this->fetch_withinbtmofpostClickStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_withinbtmofpost_impsionStats' ) $this->fetch_withinbtmofpostImpsionStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_withinbtmofpost_bodytxt' ) $this->fetch_withinBtmOfPostBodytxt = $row['option_value'];
			if ( $row['option_name'] == 'elbp_withinbtmofpost_options' ) $this->fetch_withinBtmOfPostOptions = unserialize($row['option_value']);
			// check box
			if ( $row['option_name'] == 'elbp_chkbox_subscribers' ) $this->fetch_chkboxSubscribers = $row['option_value'];
			if ( $row['option_name'] == 'elbp_chkbox_options' ) $this->fetch_chkboxOptions = $this->__elbp_op_option_filter( unserialize($row['option_value']) );
			// inside comment box
			if ( $row['option_name'] == 'elbp_insidecomment_clickStats' ) $this->fetch_insideCommentClickStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_insidecomment_impsionStats' ) $this->fetch_insideCommentImpsionStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_insidecomment_bodytxt' ) $this->fetch_insideCommentBodytxt = $row['option_value'];
			if ( $row['option_name'] == 'elbp_insidecomment_options' ) $this->fetch_insideCommentOptions = $this->__elbp_op_option_filter( unserialize($row['option_value']) );
			// Sidebar
			if ( $row['option_name'] == 'elbp_sidebar_clickStats' ) $this->fetch_sidebarClickStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_sidebar_impsionStats' ) $this->fetch_sidebarImpsionStats = $row['option_value'];
			if ( $row['option_name'] == 'elbp_sidebar_bodytxt' ) $this->fetch_sidebarBodytxt = $row['option_value'];
			if ( $row['option_name'] == 'elbp_sidebar_options' ) $this->fetch_sidebarOptions =  $this->__elbp_op_option_filter( unserialize($row['option_value']) );
			// register
			if ( $row['option_name'] == 'elbp_registor_subscribers' ) $this->fetch_registorSubscribers = $row['option_value'];
			if ( $row['option_name'] == 'elbp_register_options' ) $this->fetch_registration = $this->__elbp_op_option_filter( unserialize($row['option_value']) );
			// Dont show optin form once subscribe
			if ( $row['option_name'] == 'elbp_dontShowOptinAfterSubscribe_options' ) $this->fetch_dntShowOptinFormAgain = unserialize($row['option_value']);
			// Send Email
			if ( $row['option_name'] == 'elbp_from_name' ) $this->fetch_sentEmail_name = $row['option_value'];
			if ( $row['option_name'] == 'elbp_from_email' ) $this->fetch_sentEmail_email = $row['option_value'];
			if ( $row['option_name'] == 'elbp_email_subject' ) $this->fetch_sentEmail_subject = $row['option_value'];
			if ( $row['option_name'] == 'elbp_email_content' ) $this->fetch_sentEmail_content = $row['option_value'];
			if ( $row['option_name'] == 'elbp_email_send_status' ) $this->fetch_sentEmail_status = $row['option_value'];
			if ( $row['option_name'] == 'elbpro_email_send_type' ) $this->fetch_sentEmail_type = $row['option_value'];
			// Facebook Connect
			if ( $row['option_name'] == 'elbp_facebook_options' ) $this->fetch_facebook_options = unserialize($row['option_value']);
			if ( $row['option_name'] == 'elbp_facebook_msg' ) $this->fetch_facebook_redirectURL = $row['option_value'];
			if ( $row['option_name'] == 'elbp_facebook_post_on_user_wall' ) $this->fetch_facebook_postOnWall = $row['option_value'];
			if ( $row['option_name'] == 'elbp_facebook_subscribers' ) $this->fetch_facebook_subscribers = $row['option_value'];

		}
	  }	
	}
	
	/**
	 * Remove Special Character
	 */
	function __elbp_escape_query($str) {
		if( is_array($str) ) {
			
			foreach ( (array) $str as $key => $val ) {
				 $key = $this->__elbp_escape_query($key);
				 $options[$key] = $this->__elbp_escape_query($val);
			}
			return $options;
			
		} else {
			return strtr($str, array(
				"'"  => "&#39;",
				"\"" => "&#34;",
				"\\" => "&#92;",
				// more secure
				"<"  => "&lt;",
				">"  => "&gt;",
			));
		}	
	}
		
	function __ilbp_reverse_escape_query($str) { 
		return strtr($str, array(
			"&#92;" => "\&nbsp;",
		));
	}	
	
	function __ilbp_remove_space($str) {  
		return strtr($str, array(
			"&nbsp;" => "",
		));
	}	
	
	function __elbp_op_option_filter($value)
	{ 
		$value = is_array($value) ?
					array_map(array($this, '__elbp_op_option_filter'), $value) :
					stripslashes($this->__ilbp_remove_space($this->__ilbp_reverse_escape_query($value)));
	
		return $value;
	}
	/**
	 * Eof Remove Special Character
	 */

	/**
	 * Get placement data from placement table
	 */
	function __elbpOptinPlacements( $fields, $where ) {
		global $wpdb;
		$sql = "SELECT $fields FROM $this->elbp_optin_placement_table WHERE $where";
		$placement = $wpdb->get_results( $sql, ARRAY_A );
		if( $placement ) { 
			foreach ( $placement as $row ) {
				if ( $row['id'] ) $this->optin_placementID = $row['id'];
				if ( $row['optin_name'] ) $this->optin_name = $row['optin_name'];
				if ( $row['arp_id'] ) $this->optin_placement_arpID = $row['arp_id'];
				if ( $row['option_values'] ) $this->optin_placement_optionValues = $this->__elbp_op_option_filter(unserialize($row['option_values'])); 
				if ( $row['main_title'] ) $this->optin_placement_mainTitle = $row['main_title'];
				if ( $row['ads_txt'] ) $this->optin_placement_replaceoptin_ads = $row['ads_txt'];
				if ( $row['body_msg'] ) $this->optin_placement_bodyMsg = $row['body_msg'];
				if ( $row['cookie'] ) $this->optin_placement_cookie = unserialize($row['cookie']);
				if ( $row['flag'] ) $this->optin_placement_flag = $row['flag'];
			}
		}	
	}
	
	/**
	 * Get autoresponder Split, Only Email Data
	 */
	function __elbpFetchAutoresponderData ( $arpID ) {
		global $wpdb;
		$sql = "SELECT split_name, display_only_email, optin_trackcode_fld FROM $this->elbp_autoresponder_table WHERE id='$arpID'";
		$row = $wpdb->get_row( $sql, ARRAY_A );
		if ($row != null) {
		    $result .= $row['split_name'];
			$result .= '%';
			$result .= $row['display_only_email'];
			$result .= '%';
			$result .= $row['optin_trackcode_fld'];
			return  $result;
		}
	}
	
	/**
	 * Creates a directory to upload banners
	 */
	function __elbpro_MakeDir() {
		$elbpro_upload_path = ELBPRO_ABSPATH.'wp-content/elbpro-uploads';
		if ( is_admin() && !is_dir($elbpro_upload_path) ) {
			@mkdir($elbpro_upload_path);
			@chmod( $elbpro_upload_path, 0755 );
		}
		return $elbpro_upload_path;
	}
	
	
	function __elbpro_initialUploadImageDataProcess( $url_local ) {
			// Image Upload Script
			$upload_frm_url = $this->elbpro_postrequest['url']; //1
			$this->upload_frm_url_local = $url_local;  //$_FILES['url_local']; //2
			$this->upload_frm_url_live = $this->elbpro_postrequest['url_live']; //3
			$this->upload_frm_url_type = $this->elbpro_postrequest['url_type'];
			$this->upload_err = 0;
			if( $this->upload_frm_url_type == 1 ) { // Direct url
				$UploadimageURL = $upload_frm_url;
			} else if( ( $this->upload_frm_url_type == 2 && $this->upload_frm_url_local['name'] != '' ) || ( $this->upload_frm_url_type == 3 && $this->upload_frm_url_live!= '' ) ) { 
				$imageURL = $this->__elbpro_uploadImage();
				if ( $this->upload_err != 1) {
					$UploadimageURL = $imageURL;
				}
			}
	
		return $UploadimageURL;
	}
	
	function __elbpro_uploadImage() {
	
			if ( $this->upload_frm_url_type == 3 ) { // Upload from URL
					$elbpro_upload_path = $this->__elbpro_MakeDir();
					$elbpro_src_url     = trim($this->upload_frm_url_live);
					$elbpro_src_info    = pathinfo($elbpro_src_url);
					$elbpro_src_file    = $elbpro_src_info['basename'];
					$elbpro_src_ext     = $elbpro_src_info['extension'];
					$extension_pos      = strrpos($elbpro_src_file,'.');
					$filename           = substr($elbpro_src_file,0,$extension_pos);
					if ( $elbpro_src_ext == 'jpg' || $elbpro_src_ext == 'gif' || $elbpro_src_ext == 'png' || $elbpro_src_ext == 'bmp' ) {
					    $upload_name        = $filename.'_'.date('YmdHis').'.'.$elbpro_src_ext;
						$elbpro_dest_url   = $elbpro_upload_path.'/'.$upload_name;
						$elbpro_banner_url = ELBPRO_SITEURL.'/wp-content/elbpro-uploads/'.$upload_name; 
						if ( ini_get('allow_url_fopen') ) {
							@copy($elbpro_src_url, $elbpro_dest_url);
						} else if ( extension_loaded('curl') ) {
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, $elbpro_src_url);
							curl_setopt($ch, CURLOPT_HEADER, false);
							curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							set_time_limit(300); // 5 minutes for PHP
							curl_setopt($ch, CURLOPT_TIMEOUT, 300); // 5 minutes for CURL
							$elbpro_outfile = fopen($elbpro_dest_url, 'wb');
							curl_setopt($ch, CURLOPT_FILE, $elbpro_outfile);
							curl_exec($ch);
							fclose($elbpro_outfile);
							curl_close($ch); 	
						} else {
							$this->upload_err = 1;
							$this->image_msg = "<br> Banner couldn't be uploaded from URL. 'URL file-access' and/or 'CURL' are/is disabled in your server.";
						}
					} else {
						$this->upload_err = 1;
						$this->image_msg = " Banner couldn't be uploaded from URL. Invalid file type";
					}
					if ( $this->upload_err != 1 ) {
						$url = $elbpro_banner_url;
						@chmod( $url, 0755 );
						$this->image_msg = " Banner uploaded from URL Successfully.\n";
					}

			} else if ( $this->upload_frm_url_type == 2 ) { // Upload from local computer
			
					$elbpro_valid_file  = array("image/pjpeg", "image/png", "image/jpeg", "image/gif", "image/bmp");
					$elbpro_upload_path = $this->__elbpro_MakeDir();
					$upload_name      = $this->upload_frm_url_local['name'];
					$upload_type      = $this->upload_frm_url_local['type'];
					$upload_size      = $this->upload_frm_url_local['size'];
					$upload_tmp_name  = $this->upload_frm_url_local['tmp_name'];
					$file_ext_pos     = strrpos($upload_name,'.');
					$filename         = substr($upload_name,0,$file_ext_pos);
					$extension        = substr($upload_name,$file_ext_pos+1);
					if ( in_array($upload_type,$elbpro_valid_file) ) {
						$upload_name      = $filename.'_'.date('YmdHis').'.'.$extension;
						$banner_path      = $elbpro_upload_path.'/'.$upload_name;
						$banner_url       = ELBPRO_SITEURL.'/wp-content/elbpro-uploads/'.$upload_name; 
						$url              = $banner_url;
						if ( move_uploaded_file($upload_tmp_name, $banner_path) ) {
							@chmod( $url, 0755 );
							$this->image_msg = " Banner uploaded from local computer.\n";
						} else {
							$this->upload_err = 1;
							$this->image_msg = " Banner couldn't be uploaded.";
						}
					} else {
						$this->upload_err = 1;
						$this->image_msg = " Banner couldn't be uploaded, Invalid file type.";
					}
			} 
		$uploadImageNameUrl = $url;			
		return $uploadImageNameUrl;			
	}
	
	
	function __elbpro_autoresponderComboBox( $objName, $initSel=NULL, $ddwnID, $responseBkSpan, $arpSplitName, $arpOnlyName, $arpOnlyEmail, $arpTrackingCode ){
		global $wpdb;
		$combo = "<select name=\"".$objName."\" onchange=\"__elbpro_callImage('','oddn','','$ddwnID','$responseBkSpan', '$arpSplitName', '$arpOnlyName', '$arpOnlyEmail' ,'$arpTrackingCode')\" id=\"".$ddwnID."\" style=\"padding:5px 0 5px 4px;width:340px; height:30px; background-color: #F1F1F1;
    border-color: #CCCCCC #E6E6E6 #E6E6E6 #CCCCCC; border-style: solid; border-width: 1px; font-family: Lucida Grande,Lucida Sans Unicode,Arial,Verdana,sans-serif;\"> <option value='0'>---- Select Your Autoresponder Service ----</option>";
		$db_autoresponder_name = "select id,optin_form_name from $this->elbp_autoresponder_table order by id DESC";
		$process_arp = $wpdb->get_results( $db_autoresponder_name, ARRAY_A );
		if( $process_arp ) { 
			foreach ( $process_arp as $arr ) {
				$arp[]= array( 'id'=>$arr['id'], 'optin_form_name'=>$arr['optin_form_name'] );
			}
		}
		foreach($arp as $key => $val){
			$combo .= "<option value='".$val['id']."'".($initSel==$val['id']?' SELECTED':' '). ">".$val['optin_form_name']."</option>";
		}
		$combo .="</select>";
		echo $combo;
	}

	/**
	 * Carries out all the operations
	 */
	function __elbpro_OptionsPg() {
	
		error_reporting(E_ALL ^ E_NOTICE); 
		global $wpdb;
		
		$this->elbpro_postrequest = $_POST['elbpro'];
		$process_autoresponser = $this->elbpro_postrequest['process_arp_html_form'];
		$process_footerbar = $this->elbpro_postrequest['footerbar_data_submit'];
		$process_popup = $this->elbpro_postrequest['popup_data_submit'];
		$process_withinpost = $this->elbpro_postrequest['withinpost_data_submit'];
		$process_chkbox = $this->elbpro_postrequest['chkbox_data_submit'];
		$process_insideCommentBox = $this->elbpro_postrequest['insideCommentBox_data_submit'];
		$process_sidebar = $this->elbpro_postrequest['sidebar_data_submit'];
		$process_registration = $this->elbpro_postrequest['registor_data_submit'];
		$process_dontShowBox = $this->elbpro_postrequest['dontShowOptinBoxAfterSubscribe'];
		// RESET
		$process_sidebar_reset = $this->elbpro_postrequest['sidebar_data_reset'];
		// Sent Email
		$process_first_commentator = $this->elbpro_postrequest['send_email_data_submit'];
		// Advance Footer Bar
		$process_advance_footerbar = $this->elbpro_postrequest['create_new_footerbar'];
		// Advance Popup Box
		$process_advance_popupbox = $this->elbpro_postrequest['create_new_popup'];
		// Advance Within Buttom Of Post
		$process_advance_withinpost = $this->elbpro_postrequest['create_new_withinpost'];
		// Advance Exit Popup
		$process_advance_exitpopup = $this->elbpro_postrequest['create_new_exitpopup'];
		// Advance squeeze pages.
		$process_squeezePage = $this->elbpro_postrequest['installFile'];
		// Facebook Connect.
		$process_facebookConnect = $this->elbpro_postrequest['facebook_connect'];
		
		$delete_footerbar = $_GET['deleteFb'];
		$enableDisable_footerbar = $_GET['deFb'];
		$delete_popupBox = $_GET['deletePB'];
		$enableDisable_popupBox = $_GET['dePB'];
		$delete_withinpost = $_GET['deleteWbp'];
		$enableDisable_withinpost = $_GET['deWbp'];
		$delete_exitpopup = $_GET['deleteEP'];
		$enableDisable_exitpopup = $_GET['deEP'];
		
		$this->arpID = $_GET['editarp'];
		// Process 'Manage Optin Form' Autoresponder Optin Form HTML data. 
		if( $process_autoresponser == 'Save Form' && $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cof' ) {
			require_once('admin-pg/include/process-autoresponder-data.php');
		// Process 'Manage Optin Form' Home Page. 	
		} else if( $_GET['elbpg'] == 'mof' ) { 
			$this->arpdeleteID = $_GET['arpdeleteid'];
			$this->arpaffID = $_GET['arpaffid'];
			if( isset($this->arpdeleteID) ) {
				$sql_delete_autoresponser = "DELETE FROM $this->elbp_autoresponder_table WHERE id='$this->arpdeleteID'";
				$wpdb->query( $sql_delete_autoresponser );
				$elbpro_option_msg = 'Autoresponder Service ID NO: '.$this->arpdeleteID.'  <font color="#CC3300">Deleted Successfully</font>';
			} else if( isset($this->arpaffID) ) {
				if( $_GET['affstatus'] == 'disable' ) { 
					$flag = '0';
					$elbpro_option_msg = 'Auto Filling Form Disabled Successfully';
				} else if( $_GET['affstatus'] == 'enable' ) {
					$flag = '1';
					$elbpro_option_msg = 'Auto Filling Form Enable Successfully';
				} 
				$sql_aff_status = "UPDATE $this->elbp_autoresponder_table SET flag_aff='$flag' WHERE id='$this->arpaffID'";
				$wpdb->query( $sql_aff_status );
			}
			
		} // Eof else. 
		
		/**********
			 Process 'Manage Optin Form' Choose Optin Display Position
		 **********/
		require_once('admin-pg/include/process-optin-placement-data.php');
		
		/**
			Backup and Restore
		**/
		 if( $_GET['elbpg'] == 'bnr' && $this->elbpro_postrequest['db_backup'] == 'Backup' ) {
		 
		 } else if( $_GET['elbpg'] == 'bnr' && $this->elbpro_postrequest['db_restore'] == 'Restore' ) {

			$sql_dump_file = $_FILES['restore_file']['tmp_name'];
			$ret = $this->elbpro_RestoreTable( $sql_dump_file );
			if ( $ret == true ) {
				$msg = '"Immediate List Building Pro" Tables Restored successfully.';
			} else {
				$msg = '"Immediate List Building Pro" Tables Restore failed.';
			}
			$elbpro_option_msg = $msg;

		 }
		 
		 
		 /***
		 	Upgrade
		 ***/
		 if( $_GET['elbpg'] == 'ug' && $this->elbpro_postrequest['do_auto_upgrade'] == 'Upgrade now automatically' ) {
			# Important Upgrade
			$elbpro_option_msg = $this->elbpro_UpgradePlugin();
		 }
		
		
		/**
			Process Home Page.
		**/
		if( $this->elbpro_postrequest['SaveAffiliateData'] == 'Submit' ) {
			foreach ( (array) $this->elbpro_postrequest as $key => $val ) {
				if ( $key != 'affiliate_next_step' ) $affiliate_options[$key] = $val;
			}
			$affiliate_options = serialize( $affiliate_options );
			$elbpro_affiliateData = array(
									'elbp_affiliate_options' => $affiliate_options
									 );	 
			foreach($elbpro_affiliateData as $key => $val) {
				$db_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
				$wpdb->query( $db_sql );				
			}	
			$elbpro_option_msg = 'Affiliate Configuration Saved Successfully';
		
		} 
		
		
		if( isset($_GET['cid']) || $_GET['cid'] != '' ) {
		
			$placementType = $_GET['cid'];
			
			if( $placementType == '0101' ) {
				$elbpro_resetStatsValue = array(
											'elbp_sidebar_clickStats' => 0,
											'elbp_sidebar_impsionStats' => 0
										 );	 
			} else if( $placementType == '0202' ) {
				$elbpro_resetStatsValue = array(
											'elbp_insidecomment_clickStats' => 0,
											'elbp_insidecomment_impsionStats' => 0
										 );	 
			} else if( $placementType == '0303' ) {
				$elbpro_resetStatsValue = array(
											'elbp_chkbox_subscribers' => 0
										 );	 
			} else if( $placementType == '0404' ) {
				$elbpro_resetStatsValue = array(
											'elbp_registor_subscribers' => 0
										 );	 
										 
			} else if( $placementType == '0505' ) {
				$elbpro_resetStatsValue = array(
											'elbp_facebook_subscribers' => 0
										 );	 
			} else { 
				$db_sql = "UPDATE $this->elbp_optin_placement_table SET impsionStats='0', clickStatus='0' WHERE id='$placementType'";
				$wpdb->query( $db_sql );
				$elbpro_option_msg = 'Selected Optin Placement Reset Successfully';
			}		
			
			
			if( $placementType == '0101' ||  $placementType == '0202' ||  $placementType == '0303' ||  $placementType == '0404' ||  $placementType == '0505'  ) {
				foreach( (array) $elbpro_resetStatsValue as $key => $val ) {
					$db_sql = "UPDATE $this->elbp_optin_options_table SET option_value='$val' WHERE option_name='$key'";
					$wpdb->query( $db_sql );
				}
				$elbpro_option_msg = 'Selected Optin Placement Reset Successfully';
			}
			
			
		}
		
		// Display Message
		if( $_GET['elbpg'] == 'mof' && $_GET['arpmsg'] == 1 ) {
			$elbpro_option_msg = 'Autoresponder Saved Successfully';
		} else if( $_GET['elbpg'] == 'mof' && $_GET['arpmsg'] == 2 ) {
			$elbpro_option_msg = 'Selected Autoresponder Update Successfully';
		}
		
		return $elbpro_option_msg;
	}
	
	/**
	 * Header Page
	 */
	function __elbpro_admin_header() {
	?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo ELBPRO_FULLPATH;?>lib/admin-pg/css/style.css" />
		<script type="text/javascript" src="<?php echo ELBPRO_FULLPATH; ?>lib/admin-pg/js/global.js"></script>
	<?php
	}
	
	function __elbpro_dropdown(  $arr_name, $fldname ) {  
		foreach( (array) $arr_name as $val ) {
			if( $fldname == $val ) $selected = "selected";
			else $selected = "";
			//echo $fldname.'&nbsp;'.$val. '&nbsp;'. $selected. '<br>';
			if ( trim($val) != '' ) {
			echo '<option value="'.$val.'" '. $selected.'>'.$val.'</option>';
			}
		}
		//return $option;
	}
	
	/**
	 * Options Page
	 */
	function __elbpro_displayOptionsPg() {
	
		error_reporting(E_ALL ^ E_NOTICE);
		global $wpdb;
		if ( $_GET['elbpg'] == 'mof' )	$display_page = 'admin-pg/manage-optin-form.php';
		else if ( $_GET['elbpg'] == 'bnr' )	$display_page = 'admin-pg/backup-and-restore.php';
		else if ( $_GET['elbpg'] == 'ug' )	$display_page = 'admin-pg/upgrade.php';
		else if ( $_GET['elbpg'] == 'mkt' )	$display_page = 'admin-pg/market.php';
		else 						$display_page = 'admin-pg/home.php';
		
		/** CONFIGURE AUTORESPONDER PAGE **/
		if( $_GET['elbpg'] == 'mof' ) {
			if( $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cof' ) {
				require_once('admin-pg/include/template-data/process-autoresponder-data.php');
				$display_page = 'admin-pg/configure-optin.php';
			} else if( $_GET['elbpg'] == 'mof' && $_GET['cosubpg'] == 'cop' ) {
				$actv_initalChk = get_option('ilbpro_activate');
				if( $actv_initalChk == '22191' ) { $proactive = 1; } else { $proactive = 2; }
				require_once('admin-pg/include/template-data/process-optin-placement-data.php');
				require_once('admin-pg/js/optin-placement.php');
				$display_page = 'admin-pg/co-placement.php';
			} else {
				$sql_select_autoresponser = "SELECT id,optin_form_name,flag_aff FROM " .$this->elbp_autoresponder_table . " ORDER BY id DESC";
			}
		} 
		/** HOME PAGE **/
		else {
		
			// advance footer bar 
			$Hfooterbar_rs = "SELECT id,optin_name,impsionStats,clickStatus,flag FROM $this->elbp_optin_placement_table where optin_type='footer_bar' ";
			$HpopupBox_rs = "SELECT id,optin_name,impsionStats,clickStatus,flag FROM $this->elbp_optin_placement_table where optin_type='popup_box' ";
			$Withinpost_rs = "SELECT id,optin_name,impsionStats,clickStatus,flag FROM $this->elbp_optin_placement_table where optin_type='within_post' ";
		
			$this->__elbpOptinOptions();
			// Global
			if( $this->fetch_affiliateOptions['no_pwd_by'] == 1 ) $dontShowPwdbyLink = 'checked';
			
			// Footer Bar Stats
			if( $this->fetch_footerBarOptions['enable_footerbar'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_footerBarOptions['footerbar_arp']) > 0 ) ) {
				$footerbarActiveStatus = 'Activated';
				$footerbarStatusColor = '#DB9958';
			} else {
				$footerbarActiveStatus = 'Deactivated';
				$footerbarStatusColor = '#A9A8A8';
			}
			if ( $this->fetch_footerBarImpsionStats > 0 ) $footerbar_crt = ($this->fetch_footerBarClickStats/$this->fetch_footerBarImpsionStats)*100;
			else $footerbar_crt = 0;
			$footerbar_crt = sprintf("%01.2f", $footerbar_crt);	
			
			// Popup Box 
			if( $this->fetch_popupBoxOptions['enable_popup'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_popupBoxOptions['popup_arp']) > 0 ) ) {
				$popupActiveStatus = 'Activated';
				$popupStatusColor = '#DB9958';
			} else {
				$popupActiveStatus = 'Deactivated';
				$popupStatusColor = '#A9A8A8';
			}
			if ( $this->fetch_popupBoxImpsionStats > 0 ) $popup_crt = ($this->fetch_popupBoxClickStats/$this->fetch_popupBoxImpsionStats)*100;
			else $popup_crt = 0;
			$popup_crt = sprintf("%01.2f", $popup_crt);	
			
			// Within Buttom Of Post 
			if( $this->fetch_withinBtmOfPostOptions['enable_withinpost'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_withinBtmOfPostOptions['withinpost_arp']) > 0 ) ) {
				$withinBtmOfPostActiveStatus = 'Activated';
				$withinBtmOfPostStatusColor = '#DB9958';
			} else {
				$withinBtmOfPostActiveStatus = 'Deactivated';
				$withinBtmOfPostStatusColor = '#A9A8A8';
			}
			if ( $this->fetch_withinbtmofpostImpsionStats > 0 ) $withinBtmOfPost_crt = ($this->fetch_withinbtmofpostClickStats/$this->fetch_withinbtmofpostImpsionStats)*100;
			else $withinBtmOfPost_crt = 0;
			$withinBtmOfPost_crt = sprintf("%01.2f", $withinBtmOfPost_crt);	
			
			// Subscribe Check Box Before Comment Box
			if( $this->fetch_chkboxOptions['enable_chkbox'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_chkboxOptions['chkbox_arp']) > 0 ) ) {
				$chkBoxActiveStatus = 'Activated';
				$chkBoxStatusColor = '#DB9958';
			} else {
				$chkBoxActiveStatus = 'Deactivated';
				$chkBoxStatusColor = '#A9A8A8';
			}
			
			// Inside Comment Box
			if( $this->fetch_insideCommentOptions['enable_insideCommentBox'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_insideCommentOptions['insideCommentBox_arp']) > 0 ) ) {
				$insideCommentActiveStatus = 'Activated';
				$insideCommentStatusColor = '#DB9958';
			} else {
				$insideCommentActiveStatus = 'Deactivated';
				$insideCommentStatusColor = '#A9A8A8';
			}
			if ( $this->fetch_insideCommentImpsionStats > 0 ) $insideComment_crt = ($this->fetch_insideCommentClickStats/$this->fetch_insideCommentImpsionStats)*100;
			else $insideComment_crt = 0;
			$insideComment_crt = sprintf("%01.2f", $insideComment_crt);	
			
			
			// Sidebar  
			if( $this->fetch_sidebarOptions['enable_sidebar'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_sidebarOptions['sidebar_arp']) > 0 ) ) {
				$sidebarActiveStatus = 'Activated';
				$sidebarStatusColor = '#DB9958';
			} else {
				$sidebarActiveStatus = 'Deactivated';
				$sidebarStatusColor = '#A9A8A8';
			}
			if ( $this->fetch_sidebarImpsionStats > 0 ) $sidebar_crt = ($this->fetch_sidebarClickStats/$this->fetch_sidebarImpsionStats)*100;
			else $sidebar_crt = 0;
			$sidebar_crt = sprintf("%01.2f", $sidebar_crt);	
			
			// Register :: Check box
			if( $this->fetch_registration['enable_registor'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_registration['registor_arp']) > 0 ) ) {
				$registerActiveStatus = 'Activated';
				$registerStatusColor = '#DB9958';
			} else {
				$registerActiveStatus = 'Deactivated';
				$registerStatusColor = '#A9A8A8';
			}
			
			
			// Facebook :: Status 
			if( $this->fetch_facebook_options['enable_fbconnect'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_facebook_options['facebook_arp']) > 0 ) ) {
				$facebookActiveStatus = 'Activated';
				$facebookStatusColor = '#DB9958';
			} else {
				$facebookActiveStatus = 'Deactivated';
				$facebookStatusColor = '#A9A8A8';
			}
			
			
			
		}
		
		$this->__elbpro_header();
		require_once($display_page);
	}
	
	/**
	 * Page Header
	 */
	function __elbpro_header() {
		$elbpro_wp_pg_vars = 'page='.$_GET['page'].'&';
		
		if( $_GET['elbpg'] == 'mof' ) $elbpro_css_active_co = 'active';
		else if( $_GET['elbpg'] == 'bnr' ) $elbpro_css_active_ao = 'active';
		else if( $_GET['elbpg'] == 'ug' ) $elbpro_css_active_ug = 'active';
		else if( $_GET['elbpg'] == '' ) $elbpro_css_active_home = 'active';
		
		echo '<h2 style="color:#1C2A47;font-size:19px;padding-bottom:10px; font-weight:bold; ">'. $this->elbpro_img_logo .' </h2>'; //ELBPRO_NAME
		echo '<div class="headermenu">';
		echo '<span class="'.$elbpro_css_active_home.'"><b>'.$this->elbpro_img_home.'&nbsp;<a href="'.$this->wp_plugin_page.'?'.$elbpro_wp_pg_vars.'">Home</a></b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<span class="'.$elbpro_css_active_co.'"><b>'.$this->elbpro_img_manageoptinform.'&nbsp;<a href="'.$this->wp_plugin_page.'?'.$elbpro_wp_pg_vars.'elbpg=mof">Manage Optin Form</a></b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<span class="'.$elbpro_css_active_ao.'"><b>'.$this->elbpro_img_backup.'&nbsp;<a href="'.$this->wp_plugin_page.'?'.$elbpro_wp_pg_vars.'elbpg=bnr">Backup and Restore</a></b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<span class="'.$elbpro_css_active_ug.'"><b>'.$this->elbpro_img_upgrade.'&nbsp;<a href="'.$this->wp_plugin_page.'?'.$elbpro_wp_pg_vars.'elbpg=ug">Check Version and Upgrade</a></b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '</div>';
		
		if ( trim($this->elbpro_option_msg) != '' ) {
			echo '<div id="elbpro_msg_home" style="background-color:#FFFBCC;border-bottom:1px solid #EEEE00;font-family:Arial, Helvetica, sans-serif;font-size:12px; color:#444444;width:59%;padding:5px 0px 5px 10px;"><strong>'.$this->elbpro_option_msg.'</strong></div>';
		}
	}
	
	function __elbpro_cuttentPageStatus($id) {
		echo "<script> window.onload = function () { 
					__elbpSelectTab(".$id."); 
					}</script>";
	?>
			<script>
				  jQuery(document).ready(function(){
					  jQuery("#placementOpenPopupmsgtxt").show("slow");	
					  jQuery("#placementOpenPopupmsgtxt").fadeOut(6000); //animation	
				  });	
		   </script>
	<?php
	}
	
	
	/*************************** 
		USER TEMPLATE SECTION 
	****************************/
	
	/**
	* Checking if any optin form is added or not
	*/
	function __elbpro_CheckTotalOptinForm( $optinID ) {
		global $wpdb;
		$count = $wpdb->get_var("SELECT COUNT(id)  FROM $this->elbp_autoresponder_table where id='$optinID'");
		return $count;
	}
	
	
	/**
	* Calculate Impression
	*/
	function __elbpro_UpdatePlacementImpression( $id, $type ) { 
		global $wpdb;
		if( $type == 'elbp_sidebar_impsionStats' ) {
			$db_temp_sql = "UPDATE $this->elbp_optin_options_table SET option_value=option_value+1 WHERE option_name='elbp_sidebar_impsionStats'";
			$wpdb->query($db_temp_sql);				
		} else {
			$db_Update_sql = "UPDATE $this->elbp_optin_placement_table SET impsionStats=impsionStats+1 WHERE id='$id'";
			$wpdb->query($db_Update_sql);	
		}
	}
	
		
	/**
	*	Schedule Optin Form header and footer 
	**/
	
	function __elbpro_processCookie (  $chk_schedule, $DisplayOnEveryDaysCOOK, $DisplayForFirstVisitsCOOK, $DisplayShowAfterVisitsCOOK, $footer_noof_visits, $footer_noof_days, $footer_days_cookie_life, $footer_show_after_visits ) {
			
		// Display on every page load
		if ( $chk_schedule == 1 ) { 
			setcookie( $DisplayOnEveryDaysCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayForFirstVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayShowAfterVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
		
		// Display for first *** visits
		} else if ( $chk_schedule == 2 && !isset($_COOKIE[$DisplayForFirstVisitsCOOK]) ) { 
			setcookie( $DisplayOnEveryDaysCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayShowAfterVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie($DisplayForFirstVisitsCOOK, 1, $this->global_visits_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');

		} else if ( $chk_schedule == 2 && isset($_COOKIE[$DisplayForFirstVisitsCOOK]) && $_COOKIE[$DisplayForFirstVisitsCOOK]<$footer_noof_visits ) { 
			setcookie( $DisplayOnEveryDaysCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayShowAfterVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			$upto_visits = $_COOKIE[$DisplayForFirstVisitsCOOK] + 1;
			setcookie($DisplayForFirstVisitsCOOK, $upto_visits, $this->global_visits_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');
		
		// Display on every *** days
		} else if ( $chk_schedule == 3 && !isset($_COOKIE[$DisplayOnEveryDaysCOOK]) ) { 
			setcookie( $DisplayForFirstVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayShowAfterVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie($DisplayOnEveryDaysCOOK, $footer_noof_days, $footer_days_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');
		
		// Display after *** visits
		} else if ($chk_schedule == 4 && !isset($_COOKIE[$DisplayShowAfterVisitsCOOK]) ) { 
			setcookie( $DisplayOnEveryDaysCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayForFirstVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie($DisplayShowAfterVisitsCOOK, 1, $this->global_visits_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');

		} else if ($chk_schedule == 4 && isset($_COOKIE[$DisplayShowAfterVisitsCOOK]) && $_COOKIE[$DisplayShowAfterVisitsCOOK] < $footer_show_after_visits ) { 
			setcookie( $DisplayOnEveryDaysCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			setcookie( $DisplayForFirstVisitsCOOK, '', $this->global_days_cookie_expire, $this->global_elbpro_SiteURL['path'] . '/' );
			$total_visits = intval($_COOKIE[$DisplayShowAfterVisitsCOOK]) + 1;
			setcookie($DisplayShowAfterVisitsCOOK, $total_visits, $this->global_visits_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');
		}

	}
	

	/**
	 * Sets Cookies according to the preferences set in admin
	 */
	function __elbpro_SetCookie() {
	
		error_reporting(E_ALL ^ E_NOTICE);
		global $wpdb;
		// Global Values
		$this->global_days_cookie_expire = time() - (3600 * 24) * 365 * 1; 
		$this->global_visits_cookie_life = time() + (3600 * 24) * 365 * 1;
		$this->global_elbpro_SiteURL = parse_url(ELBPRO_SITEURL);
		
		// Auto Filling Form  
		$parm_cookie_life = time() + (3600);
		if( ( $_GET['elbpn'] || $_GET['elbpe'] ) && ( !isset($_SESSION['ELBP_PAR_NAME']) || !isset($_SESSION['ELBP_PAR_EMAIL']) ) ) {
			setcookie("ELBP_PAR_NAME", $_GET['elbpn'], $parm_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');
			setcookie("ELBP_PAR_EMAIL", $_GET['elbpe'], $parm_cookie_life, $this->global_elbpro_SiteURL['path'] . '/');
		}
		
		// Schedule Footer Bar :: COOKIE
		$sql = "SELECT option_values,cookie FROM $this->elbp_optin_placement_table where optin_type='footer_bar' and flag='1'";
		$ilbp_footer_flag = $wpdb->get_results( $sql, ARRAY_A );
		if( $ilbp_footer_flag ) { 
			foreach ( $ilbp_footer_flag as $fb_Results ) {
				
				$Fb_Options = unserialize($fb_Results['option_values']);
				$FbSchedule_COOKIE = unserialize($fb_Results['cookie']); 
				$FbScheduleCOOKIES = $FbSchedule_COOKIE['schedule'];
				$FB_Schedult_COOKIE_Name = explode(',',$FbScheduleCOOKIES);
				$FB_DisplayOnEveryDays = $FB_Schedult_COOKIE_Name[0];
				$FB_DisplayForFirstVisits = $FB_Schedult_COOKIE_Name[1];
				$FB_DisplayShowAfterVisits = $FB_Schedult_COOKIE_Name[2];
				$FBDontShowMeAgainCOOKIE = $FbSchedule_COOKIE['dontShowMeAgain'];
				// Dont show me again cookie :: user chooise call
				if( $Fb_Options['footerbar_dontShowMeAgain'] != 1 && $_COOKIE[$FBDontShowMeAgainCOOKIE] == 1 ) {
					setcookie ($FBDontShowMeAgainCOOKIE, "", time() - 3600); //  expiration date to one hour ago
				}
				$FBChk_ScheduleType = $Fb_Options['footerbar_schedule_on_display']; // schedule type :: Global
				$FB_noof_visits = $Fb_Options['custom_footerbar_for_frist_visits']; // schedule 2 value
				$FB_noof_days =  $Fb_Options['custom_footerbar_on_every_days']; // schedule 3 value
				$FB_days_cookie_life   = time() + (3600 * 24) * $FB_noof_days; 
				$FB_show_after_visits = $Fb_Options['custom_footerbar_after_visit']; // schedule 4 value
				$this->__elbpro_processCookie( $FBChk_ScheduleType, $FB_DisplayOnEveryDays, $FB_DisplayForFirstVisits, $FB_DisplayShowAfterVisits, $FB_noof_visits, $FB_noof_days, $FB_days_cookie_life, $FB_show_after_visits );
		    
			}
		}
		
		// Schedule Popup Box :: COOKIE
		$PBOX_DataProcessQry = "SELECT option_values,cookie FROM $this->elbp_optin_placement_table where optin_type='popup_box' and flag='1'";
		$ilbp_popup_box = $wpdb->get_results( $PBOX_DataProcessQry, ARRAY_A );
		if( $ilbp_popup_box ) { 
			foreach ( $ilbp_popup_box as $PBOX_Results ) {
				
				$PBOX_Options = unserialize($PBOX_Results['option_values']);
				$PBOX_Schedule_COOKIE = unserialize($PBOX_Results['cookie']); 
				$PBOX_ScheduleCOOKIES = $PBOX_Schedule_COOKIE['schedule'];
				$PBOX_Schedult_COOKIE_Name = explode(',',$PBOX_ScheduleCOOKIES);
				$PBOX_DisplayOnEveryDays = $PBOX_Schedult_COOKIE_Name[0];
				$PBOX_DisplayForFirstVisits = $PBOX_Schedult_COOKIE_Name[1];
				$PBOX_DisplayShowAfterVisits = $PBOX_Schedult_COOKIE_Name[2];
				$PBOX_DontShowMeAgainCOOKIE = $PBOX_Schedule_COOKIE['dontShowMeAgain'];
				// Dont show me again cookie :: user chooise call
				if( $PBOX_Options['popup_dontShowMeAgain'] != 1 && $_COOKIE[$PBOX_DontShowMeAgainCOOKIE] == 1 ) {
					setcookie ($PBOX_DontShowMeAgainCOOKIE, "", time() - 3600); //  expiration date to one hour ago
				}
				$PBOX_Chk_ScheduleType = $PBOX_Options['popup_scheduleOnDisplay']; // schedule type :: Global
				$PBOX_noof_visits = $PBOX_Options['custom_popup_for_first_visits']; // schedule 2 value
				$PBOX_noof_days =  $PBOX_Options['custom_popup_on_every_days']; // schedule 3 value
				$PBOX_days_cookie_life   = time() + (3600 * 24) * $PBOX_noof_days; 
				$PBOX_show_after_visits = $PBOX_Options['custom_popup_after_visit']; // schedule 4 value
				$this->__elbpro_processCookie( $PBOX_Chk_ScheduleType, $PBOX_DisplayOnEveryDays, $PBOX_DisplayForFirstVisits, $PBOX_DisplayShowAfterVisits, $PBOX_noof_visits, $PBOX_noof_days, $PBOX_days_cookie_life, $PBOX_show_after_visits );
		    
			}
		}
				
	}
	
	
	/**
	 * Optin Form :: FooterBar and Popup
	 */
	function __elbpro_arpOptinForm( $arpID, $fldClassName = "", $fldClassEmail = "", $submitClass = "", $type, $clickCountID, $DontShowMeAfterSubCOOKIE, $blockDays, $setcookieInfo, $emailFldIDname ) {}
	
	/*
	* Supports all header data.
	*/
	function __elbpro_user_header() {
		error_reporting(E_ALL ^ E_NOTICE);
		include('admin-pg/header.php');
	}
	
	
	/**
	*	Video Call Back Fnction
	*/	
	
	function video_plugin_callback($match) {
	
		$tag_parts = explode(" ", rtrim($match[0], "]"));
		$output = $this->videoCode;
		$output = str_replace("###URL###", $tag_parts[1], $output);
		if (count($tag_parts) > 2) {
			if ($tag_parts[2] == 0) {
				$output = str_replace("###WIDTH###", ELBPRO_VIDEO_WIDTH, $output);
			} else {
				$output = str_replace("###WIDTH###", $tag_parts[2], $output);
			}
			if ($tag_parts[3] == 0) {
				$output = str_replace("###HEIGHT###", ELBPRO_VIDEO_HEIGHT, $output);
			} else {
				$output = str_replace("###HEIGHT###", $tag_parts[3], $output);
			}
		} else {
			$output = str_replace("###WIDTH###", ELBPRO_VIDEO_WIDTH, $output);
			$output = str_replace("###HEIGHT###", ELBPRO_VIDEO_HEIGHT, $output);	
		}
		return ($output);
	}
				 
	/*
	* Video reg chk 
	*/
	function elbpro_video_plug( $final_content, $youtube_reg_exp )
	{   
		return ( preg_replace_callback( $youtube_reg_exp, array(&$this,'video_plugin_callback'), $final_content) );
	}

	
	
	// ADVANCE POPUP BOX
	function __elbpro_popup_box() {}
	
	/**
	* Check if there is autoresponder
	**/
	function __elbpro_findAutoresponder( $id ) {
		global $wpdb;
		$sql_autoresponser = "SELECT COUNT(id) FROM " .$this->elbp_autoresponder_table . " WHERE id='".$id."' ";
		$exist = $wpdb->get_var( $sql_autoresponser);
		return $exist;	
	}
	
	
	
	
	/**
	 * Optin Form :: within post, inside comment box and sidebar.
	 */
	function __elbpro_arpOptinFormOnPostAndSidebar( $arpID, $fldClassName = "", $fldClassEmail = "", $submitClass = "", $clickCountType, $clickCountID, $emailFldIDname, $blockDays ) { 
		global $wpdb;
		$query = "SELECT * FROM $this->elbp_autoresponder_table WHERE id='$arpID'";
		$row = $wpdb->get_row( $query, ARRAY_A );
		if ($row != null) {
			if( trim($row['optin_trackcode_fld']) != 'None'  ) {
				$arpTrackingCode = $row['optin_trackcode_fld'];
			}
			$splitName = $row['split_name'];
			$displayOnlyEmail  = $row['display_only_email'];
			if( $splitName == 1 ) {
				$explodeSplitName  = explode( ',', $row['optin_name_fld'] );
				$firstFieldName = trim($explodeSplitName[0]);
				$lastFieldName  = trim($explodeSplitName[1]);
			} else {
				$nameFieldName  = trim($row['optin_name_fld']);
			}
			// Get form tag
			$pattern = '/<form\s[^>]*action[\s]*=[\s]*[\'|"](.*?)[\'|"][^>]*>/i';
			preg_match($pattern, $row['optin_html_form_code'], $form_tag_matches);
			$form_action = $form_tag_matches[1];
			// Get hidden fields
			$pattern = '/<input\s[^>]*type[\s]*=[\s]*[\'|"]?hidden["|\'|"]?[^>]*>/i';
			preg_match_all($pattern, $row['optin_html_form_code'], $hidden_fld_matches);
			foreach ( (array) $hidden_fld_matches[0] as $val ) {
				if ( strpos( $val, $arpTrackingCode ) !== false ) {
					$hidden_flds .= '<input type="hidden" name="'.$arpTrackingCode.'" value="'.$this->template_TrackingCode.'">';
				} else {
					$hidden_flds .= $val;
				}
			}
			
			if( $clickCountType == 'withinBOP' ) {
				if( $this->withinpostChkAfterSubscribe == 1 ) $setCookieOrNot = 1;
				else $setCookieOrNot = 2;
	
				$DontShowMeAfterSubCOOKIE = $this->withinpostDontShowMeAfterSubCOOKIE;
			// Need to edit	
			} else if( $clickCountType == 'elbproSidebar' ) {
				$emailFldIDname = 'elbproSidebarEmail';
				//if( $this->fetch_dntShowOptinFormAgain['dontshow_sidebar_chk'] == 5 ) {
					//$dontDsplayAfterSubscribe = 1;
					//$afterSubscribeCookieName = 'elbpro_SidebarAfterSubscribe';
				//}	
			} else if( $clickCountType == 'insideCommentBox' ) {
					if( $this->fetch_insideCommentOptions['insideComment_diabsle_forDays'] == 'true' ) $setCookieOrNot = 1; 
					else $setCookieOrNot = 2; 
					$blockDays = $this->fetch_insideCommentOptions['custom_footerbar_disable_for_days'];
					$DontShowMeAfterSubCOOKIE = 'elbpro_insideCommentBoxAfterSubscribe';
			}
				
			$elbpro_optin_form .= '<form action="'.trim($form_action).'" method="post" onsubmit="return elbpro_checkForValidEmail(\''.$clickCountID.'\',\''.$setCookieOrNot.'\', \''.$DontShowMeAfterSubCOOKIE.'\', \''.$blockDays.'\', \''.$emailFldIDname.'\', \''.ELBPRO_LIBPATH.'\')" >';
			$elbpro_optin_form .= $hidden_flds;
	
			if( $displayOnlyEmail == 1 ) {
				// Email Field
				$elbpro_optin_form .= '<div class="af-element">
										<div class="af-textWrap">
										<input type="text" class="'.$fldClassEmail.'" name="'.trim($row['optin_email_fld']).'" id="'.$emailFldIDname.'" value="'.$this->template_EmailFldTxt.'" onfocus="if (this.value == \''.$this->template_EmailFldTxt.'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''.$this->template_EmailFldTxt.'\';}">
										</div>
										<div class="af-clear"></div>
									</div>';
			} else {
				// Split Name Field
				
				if( $splitName == 1 ) { 
					$elbpro_optin_form .= '<div class="af-element">
											<div class="af-textWrap">
											<input type="text" class="'.$fldClassName.'" name="'.$firstFieldName.'" id="fname" value="'.$this->template_FirstNameFldTxt.'" onfocus="if (this.value == \''.$this->template_FirstNameFldTxt.'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''.$this->template_FirstNameFldTxt.'\';}">
											</div>
											<div class="af-clear"></div>
										   </div>';
										   
					$elbpro_optin_form .= '<div class="af-element">
											<div class="af-textWrap">
											<input type="text" class="'.$fldClassName.'" name="'.$lastFieldName.'" id="lname" value="'.$this->template_LastNameFldTxt.'" onfocus="if (this.value == \''.$this->template_LastNameFldTxt.'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''.$this->template_LastNameFldTxt.'\';}">         
											</div>
											<div class="af-clear"></div>
										   </div>';
				// Name Field	
				} else { 
					$elbpro_optin_form .= '<div class="af-element">
											<div class="af-textWrap">
											<input type="text" class="'.$fldClassName.'" name="'.$nameFieldName.'" id="name" value="'.$this->template_NameFldTxt.'" onfocus="if (this.value == \''.$this->template_NameFldTxt.'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''.$this->template_NameFldTxt.'\';}">
											</div>
											<div class="af-clear"></div>
										   </div>';
				}
				// Email Field
				$elbpro_optin_form .= '<div class="af-element">
										<div class="af-textWrap">
										<input type="text" class="'.$fldClassEmail.'" name="'.trim($row['optin_email_fld']).'" id="'.$emailFldIDname.'" value="'.$this->template_EmailFldTxt.'" onfocus="if (this.value == \''.$this->template_EmailFldTxt.'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''.$this->template_EmailFldTxt.'\';}">
										</div>
										<div class="af-clear"></div>
									</div>';
									
				// Custom fields	
				foreach( (array) $this->template_customFields as $key => $val ) {
					if( $key != '' && $val != '' ) {
					$elbpro_optin_form .= '<div class="af-element">
											<div class="af-textWrap">
											<input type="text" class="'.$fldClassName.'" name="'.$val.'" id="fname" value="'. $this->__elbp_op_option_filter($key).'" onfocus="if (this.value == \''. $this->__elbp_op_option_filter($key).'\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''. $this->__elbp_op_option_filter($key).'\';}">
											</div>
											<div class="af-clear"></div>
										   </div>';
					}						   
				}				
									
				// Eof custom fields					
									
			} // Eof only Email
			
			// Submit Button
			$elbpro_optin_form .= '<div class="af-element buttonContainer">
									<input type="submit" class="'.$submitClass.'" value="'.ucwords($this->template_SubmitButtonTxt).'" />
									<div class="af-clear"></div>
								   </div>
									';
			
			$elbpro_optin_form .= '</form>';
			
			return $elbpro_optin_form;
		}
	}
	
	
	
	/**
	* Show Newsletter subscription before comment box
	*
	*/
	function __elbp_SubscribersChkBoxTemplateBeforeCommentBox() {
	?>
		<div id="elbpro_subscribersChkBoxBeforeCommentBoxDIV">
			<div style="clear:both; vertical-align:middle;">
					<input type="checkbox" id="elbpro_subscribersChkBoxBeforeCommentBox" name="elbpro_subscribersChkBoxBeforeCommentBox" value="1"  style="width:auto" <?php if( $this->fetch_chkboxOptions['chkbox_default_chk'] == "1" ){ echo 'checked'; }  ?> >
					&nbsp;<span style=" font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#444;"><?php echo $this->fetch_chkboxOptions['chkbox_msg_to_display'];?></span>
			</div>
		</div>
		
	<!--Insert subscription check box before comment box-->
	<script type="text/javascript">
	for( i = 0; i < document.forms.length; i++ ) {
		if( typeof(document.forms[i].elbpro_subscribersChkBoxBeforeCommentBox) != 'undefined' ) {
			commentForm = document.forms[i].comment.parentNode;
			break;
		}
	}
	var commentArea = commentForm.parentNode;
	var newsletterOptinForm = document.getElementById("elbpro_subscribersChkBoxBeforeCommentBoxDIV");
	commentArea.insertBefore(newsletterOptinForm, commentForm);
	commentArea.publicKey.size = commentArea.author.size;
	commentArea.publicKey.className = commentArea.author.className;
	</script>	
	<?php	
	}
	
	
	/**
	* Send subscribed checked user to autoresponder, default autoresponder set 
	* @param	string		commentator name
	* @param	string		commentator email
	* @param	int			flast set to check check box checked or not
	*/
	function __elbp_subscribeToMailingList( $name, $email, $flag, $arpID, $updatedbstats ) {
		global $wpdb;
		if ( $flag == 1 ) {
			$query = "SELECT * FROM $this->elbp_autoresponder_table WHERE id='$arpID'";
			$row = $wpdb->get_row( $query, ARRAY_A );
			if ($row != null) {
			// track code
			if( trim($row['optin_trackcode_fld']) != 'None'  ) {
				$trackcode_fld = $row['optin_trackcode_fld'];
				$replace_trackcodefld = array( $row['optin_trackcode_fld'] );
				$replace_trackcodevaluefld = array( $this->chk_reg_trackingCode );
			}			
			// Get form tag
			$pattern = '/<form\s[^>]*action[\s]*=[\s]*[\'|"](.*?)[\'|"][^>]*>/i';
			preg_match($pattern, $row['optin_html_form_code'], $form_tag_matches);
			$form_action = $form_tag_matches[1];
			// Get hidden fields
			$pattern = '/<input\s[^>]*type[\s]*=[\s]*[\'|"]?hidden["|\'|"]?[^>]*>/i';
			preg_match_all($pattern, $row['optin_html_form_code'], $hidden_fld_matches);
			foreach ( (array) $hidden_fld_matches[0] as $val ) {
				$grabbed_hidden_name = '/name=["|\']([^"]*)["|\']/i';
				$grabbed_hidden_val	 = '/value=["|\']([^"]*)["|\']/i';
				preg_match_all($grabbed_hidden_name, $val, $names);
				preg_match_all($grabbed_hidden_val, $val, $vals);
				$all_names = $names[1];
				$all_vals = $vals[1];
				if( $all_names[0] == $trackcode_fld ) {
					$arr_name[]  = $replace_trackcodefld;
					$arr_value[] = $replace_trackcodevaluefld;
				} else {
					$arr_name[]  = $all_names;
					$arr_value[] = $all_vals;
				}
			}
			for( $i=0; $i<sizeof($arr_name); $i++ ){
				$arr_names[]   = $arr_name[$i][0];
				$arr_values[]  = $arr_value[$i][0];
				$post_params   = array_combine($arr_names, $arr_values);
			}		
			$url = $form_action;
			
			// process :: split name, only email and normal
			$splitName = $row['split_name'];
			$displayOnlyEmail  = $row['display_only_email'];
			if( $displayOnlyEmail == 1 ) {
				$postfieldsName = '';
				$postfieldsOnlyEmail = trim($row['optin_email_fld']) . '=' . $email;
			} else { 
				if( $splitName == 1 ) {
					$explodeSplitName  = explode( ',', $row['optin_name_fld'] );
					$firstFieldName = trim($explodeSplitName[0]);
					$lastFieldName  = trim($explodeSplitName[1]);
					$splitname = explode(" ",$name);
					$postfieldsName  = $firstFieldName . '=' . $splitname[0] . '&' . $lastFieldName . '='. $splitname[1].'&';  
				} else {
					$postfieldsName  = trim($row['optin_name_fld']) . '=' . $name.'&';  
				}
				$postfieldsOnlyEmail = trim($row['optin_email_fld']) . '=' . $email;
			}
			
			$post_fields = $postfieldsName . $postfieldsOnlyEmail;
			if (is_array($post_params)) {
				foreach( $post_params as $key => $val ) {
					$post_fields.= '&' . $key. '=' . $val;
				}
			}
			$db_subscribersUpdate_sql = "UPDATE $this->elbp_optin_options_table SET option_value=option_value+1 WHERE option_name='".$updatedbstats."'";
			$wpdb->query( $db_subscribersUpdate_sql );
			$this->__elbpro_SendCurlRequest($url, $post_fields);  
		}// 
		}
	}
	
	
	/**
	* Check to show how many times optin form to display.
	*/
	function __elbpro_CheckCommenterComment($email, $type) {
		global $wpdb;
		if ( $type == 'optin' ) {
			$position_from = $this->fetch_insideCommentOptions['insideComment_displayfrom'];
			$position_to   = $this->fetch_insideCommentOptions['insideComment_displayto'];
			$embeded_table = $this->elbp_optin_insidecomment_table; 
		} 
		
		$to_show_value = ($position_to - $position_from) + 1;
		#check if email exists in our table
		$query_embeded = "SELECT id FROM ". $embeded_table ." WHERE email='" . trim($email) . "'";
		$rs_embeded = $wpdb->get_row( $query_embeded, ARRAY_A );
		if ($rs_embeded != null) {
		  
		#if not in our table grab from the wp_comment(for new commentator)
		$sql_embeded_chk 		= $wpdb->get_var("SELECT COUNT(id) FROM ". $embeded_table ." WHERE email='" . trim($email) . "'");
		if ( $sql_embeded_chk == 0) {
			$query_comment 		= "SELECT COUNT(comment_ID) FROM $this->wordpress_comments_table WHERE comment_author_email='" . trim($email) . "'";
			$total_comment 		= $wpdb->get_var($query_comment);
			$original_comment	= $total_comment - 1;
			#insert in embeded table
			$query_embeded_insert = "INSERT INTO 
												". $embeded_table ."(email,embeded,original_comment)
									 VALUES('$email', '0', '$original_comment')";
			$wpdb->query( $query_embeded_insert );						 
		}
		 
		 
		$query_embeded_val = "SELECT embeded FROM ". $embeded_table ." WHERE email='" . $email . "'";
		$rs_embeded_val = $wpdb->get_row( $query_embeded_val, ARRAY_A );
		#first time comment process when embeded counter=0
		if ($rs_embeded_val['embeded'] == 0) {
			$query_select_wp_comment = "SELECT 
												comment_ID 
										FROM 
											$this->wordpress_comments_table 
										WHERE 
											comment_author_email='" . $email . "'";
			$total_wp_comment 	 	= $wpdb->get_var($query_select_wp_comment);

			$query_select_embeded	= "SELECT 
											original_comment 
									   FROM 
									   		". $embeded_table ."
									   WHERE
									   		email='" . $email . "'";
			$rs_select_embeded      = $wpdb->get_row( $query_select_embeded, ARRAY_A );
			$range					= $total_wp_comment - $rs_select_embeded['original_comment'];
			#update embeded counter when value within range
			if ($range >=$position_from && $range <= $position_to) {
				$query_update_embeded = "UPDATE ". $embeded_table ." SET embeded=embeded+1 WHERE email='" . $email . "'";
				$wpdb->query( $query_update_embeded );
				$show_embeded		  = 1;
			}																					
		} 
		else if(($rs_embeded_val['embeded'] > 0) && ($rs_embeded_val['embeded'] < $to_show_value)) {
			#when commentator comments 2nd time and so on[also range can change]
			$query_update_embeded = "UPDATE ". $embeded_table ." SET embeded=embeded+1 WHERE email='" . $email . "'";
			$wpdb->query( $query_update_embeded );
			$show_embeded		  = 1;			
		}
		return $show_embeded;
		}
	}											
	
	
	
	/**
	* Curl operation for sending request to autoresponders
	*
	* @param 	string		autoresponder url where requesr is to be sent
	* @param 	string		post parameters
	*/
	function __elbpro_SendCurlRequest($url, $post_params) {
		$ch = curl_init();   
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$result = curl_exec($ch);  
		curl_close($ch);		
	}
	
	/**
	 * Show Optin Form Inside Comment	
	 * @param string $comment_txt
	*/
	function __elbp_showOptinFormInsideComment( $comment_txt, $comment, $is_admin='' ) {}
	
	/**
	Sidebar Optin Form 
	**/
	function __elbpro_sidebar_optinForm( $sidebar_width, $sidebar_newbgcolor, $sidebar_newimageRePosition ) {
	
		$this->__elbpOptinOptions('elbp_sidebar_bodytxt'); 
		$this->__elbpOptinOptions('elbp_sidebar_options'); 
		
		if( $this->fetch_dntShowOptinFormAgain['dontshow_sidebar_chk'] == 5 && isset($_COOKIE['elbpro_SidebarAfterSubscribe']) && $_COOKIE['elbpro_SidebarAfterSubscribe'] == 1 ) {
			     $sidebarAfterSubscribeActive = '';
			echo $sidebarAfterSubscribeActive;
		} else { 

		if( $this->fetch_sidebarOptions['enable_sidebar'] == 'true' && isset($this->fetch_sidebarOptions['sidebar_arp']) && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_sidebarOptions['sidebar_arp']) > 0 ) ) { 
		
			///$sidebar_template = $this->fetch_sidebarOptions['sidebar_tmp_chk'];
			// Global Field
			$this->template_TrackingCode = $this->fetch_sidebarOptions['sidebar_arp_trackingcode'];
			$this->template_FirstNameFldTxt = $this->fetch_sidebarOptions['sidebar_firstnamefld_txt'];
			$this->template_LastNameFldTxt = $this->fetch_sidebarOptions['sidebar_lastnamefld_txt'];
			$this->template_NameFldTxt = $this->fetch_sidebarOptions['sidebar_namefld_txt'];
			$this->template_EmailFldTxt = $this->fetch_sidebarOptions['sidebar_emailfld_txt'];
			$this->template_SubmitButtonTxt = $this->fetch_sidebarOptions['sidebar_submit_txt'];
			$this->template_customFields = $this->fetch_sidebarOptions['sidebar_customfields'];
			// Eof Global Field
			
			if( $this->fetch_sidebarOptions['sidebar_design_choise'] == 'extgD' ) {
				if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 1 ) {
					$sidebar_bg_color_css = 'blue';  
					$background = '#FFFFFF';
					$background2 = '#E4E6E7';
					$background3 = '#A3A3A4';
				} else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 2 ) { 
					$sidebar_bg_color_css = 'red';  
					$background = '#FFFFFF';
					$background2 = '#f1f1f1';
					$background3 = '#D95472';
				} else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 3 ) {  
					$sidebar_bg_color_css = 'black';  
					$background = '#000000';
					$background2 = '#000000';
					$background3 = '#A3A3A4';
				} else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 4 ) {  
					$sidebar_bg_color_css = 'pink';  
				} else if( $this->fetch_sidebarOptions['sidebar_bg_color'] == 5 ) {  
					$sidebar_bg_color_css = 'green';  
				}
			} else if( $this->fetch_sidebarOptions['sidebar_design_choise'] == 'ctmD' ) {
				$sidebar_bg_color_css = 'ctm';  
				$top_bg_color = $this->fetch_sidebarOptions['sidebar_topGrad_bgcolor'];
				$btm_bg_color = $this->fetch_sidebarOptions['sidebar_btmGrad_bgcolor'];
			}
			
			// Btn design
			if( $this->fetch_sidebarOptions['sidebar_submitbtn_chg'] == 1 ) {
				if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 1 )  $sidebar_replace_btn = '1';  
				else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 2 )  $sidebar_replace_btn = '2';  
				else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 3 )  $sidebar_replace_btn = '3';  
				else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 4 )  $sidebar_replace_btn = '4';  
				else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 5 )  $sidebar_replace_btn = '5';  
				else if( $this->fetch_sidebarOptions['sidebar_replaceSubmit_btn'] == 6 )  $sidebar_replace_btn = '6';  
			} else {
				$sidebar_replace_btn = '1';
			}
			
			
			
			if( $sidebar_newimageRePosition == 1 )  $displayWBOPimgOn = 'left';
			else if( $sidebar_newimageRePosition == 2 )  $displayWBOPimgOn = 'center';
			else if( $sidebar_newimageRePosition == 3 )  $displayWBOPimgOn = 'right';
			
			if( $this->fetch_sidebarOptions['sidebar_temp_image_url'] == '' ){
				$wbop_displayNone = '';
			} else {
				$wbop_displayNone = '<div align="center" style="float:'.$displayWBOPimgOn.'; padding:5px 5px 5px 5px;">
					                  <img src="'.$this->fetch_sidebarOptions['sidebar_temp_image_url'].'">
					                </div>';
			}
			
			if( $this->fetch_affiliateOptions['no_pwd_by'] == 1 ) {
				if( $this->fetch_affiliateOptions['cbid'] == '' ) $clickbankID = '';
				else $clickbankID = $this->fetch_affiliateOptions['cbid'];			
				$pwdbyLinkWBOPTmp = '<!--Powered By Link-->  
									  <div class="af-element pwd">
										<p>Powered by <a href="http://www.wpsmartapps.com/go.php?offer='.$clickbankID.'&pid=1" target="_blank" >'.ELBPRO_NAME.'</a></p>
										<div class="af-clear"></div>
									  </div> 
									   ';
			}						   
			// Sidebar Include.
			echo '<link rel="stylesheet" type="text/css" media="all" href="'.ELBPRO_LIBPATH.'user-tmp/sidebar/1/style.css" />';
			include('user-tmp/sidebar/1/template.php');
			echo $optin_form;
		}
		
		} //Eof don't show after subscribe option.	
	
	}
		
	// Register Optin Process	 
	function __elbpro_optin_on_registor() {
		$this->__elbpOptinOptions('elbp_register_options'); 
		if( $this->fetch_registration['enable_registor'] == 'true' && isset($this->fetch_registration['registor_arp']) && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_registration['registor_arp']) > 0 ) ) {
			 echo '<p style="padding:0px 0px 8px 0px; clear:both; vertical-align:middle;"><input type="checkbox" name="elbpro_agree_terms" value="1" ';
					if ($this->fetch_registration['registor_default_chk']) { echo ' checked="checked"'; }
			 echo ' /> &nbsp;&nbsp;';
			 echo html_entity_decode($this->fetch_registration['registor_msg_to_display']).'</p>';
		}
	}
	
	function __elbpro_register_subscribe( $email, $name ) {
		$this->__elbpOptinOptions('elbp_register_options'); 
		$subscribe_flag	= $_POST['elbpro_agree_terms'];
		$arpID = $this->fetch_registration['registor_arp'];
		$this->chk_reg_trackingCode = $this->fetch_registration['registor_arp_trackingcode'];
		$this->__elbp_subscribeToMailingList( $name, $email, $subscribe_flag, $arpID, 'elbp_registor_subscribers' );
	}
	
	
	/*****
		BACKUP AND RESTORE
	****/
	
	/**
	 * Adds backquotes to tables and db-names in SQL queries.
	 */
	function __elbpro_backQuote( $a_name ) {
		if (!empty($a_name) && $a_name != '*') {
			if (is_array($a_name)) {
				$result = array();
				reset($a_name);
				while(list($key, $val) = each($a_name)) 
					$result[$key] = '`' . $val . '`';
				return $result;
			} else {
				return '`' . $a_name . '`';
			}
		} else {
			return $a_name;
		}
	} 
	
	/**
	 * Write to the backup file
	 */
	function __elbpro_write( $query_line ) {
		if( @fwrite( $this->fp, $query_line ) === false ) {
			$this->err_msg .= '<br>There was an error writing a line to the backup file - '.$query_line;
		}
	}
	
	/**
	 * Better addslashes for SQL queries.
	 */
	function __elbpro_sqlAddSlashes($a_string='', $is_like=false) {
		if ($is_like) $a_string = str_replace('\\', '\\\\\\\\', $a_string);
		else $a_string = str_replace('\\', '\\\\', $a_string);
		return str_replace('\'', '\\\'', $a_string);
	}
	
	/**
	 * Creates a backup directory
	 */
	function __elbpro_isWritable($dir) {
		$elbpro_bkup_dir = rtrim( $dir, '/' );
		if ( is_admin() && !is_dir( $elbpro_bkup_dir ) ) { 
			@mkdir( $elbpro_bkup_dir,0777 );
		}
		if ( is_writable( $elbpro_bkup_dir ) ) return true;
		else return false;
	}
	
	/**
	* Global Update Notify 
	*/
	function __elbpro_update_notify() {
	
		global $pagenow;
		// update notifaction
		if ('index.php' === $pagenow ) {
		
			$wsac  = filter_input(INPUT_GET, 'wsac', FILTER_SANITIZE_SPECIAL_CHARS);
			if( isset($wsac) && $wsac != '' ) {
				update_option('wsa_alert_msg', $wsac);
			}	
				
			$alertmsg = get_option('wsa_alert_msg');
			if( $alertmsg == ''  || $alertmsg > 0 ) {
		?>
		<script type="text/javascript" src="<?php echo base64_decode( 'aHR0cDovL3d3dy53cHNtYXJ0YXBwcy5jb20vd3NhLXBsdWdpbi9wbHVnaW4tdmVyc2lvbi9hcGkucGhwP3BsdWdpbj1pbGJwbGl0ZSZ2ZXJzaW9u'); ?>=<?php echo $alertmsg; ?>&apgurl=<?php echo get_admin_url(); ?>"></script>		
		<?php
			}
		}
		// eof update
	
	}
	
	/**
	* First time comment check
	* 
	*/
	function __elbp_FirstCommentCheck( $email ) {
		global $wpdb;
		$query_check_first = "SELECT 
									COUNT(emailed_ID) 
								FROM " . 
									$this->elbp_first_commentator_table . " 
								WHERE 
									email='" . $email . "'";
		return $wpdb->get_var($query_check_first);                
	}
	
	
	/**
	* Sends email when comment is posted is status is approved
	*
	* @param int 		comment id of posted comment
	* @param int		comment status of posted comment
	*/
	function __elbp_SendEmail_On_StatusIsApproved( $comment_id, $comment_status ) { 
		global $wpdb;
		if ( $comment_status == 1 || $comment_status == 'approve' ){
			$mail_subject 	= $this->fetch_sentEmail_subject;
			$from_name	  	= $this->fetch_sentEmail_name;
			$email_content	= $this->fetch_sentEmail_content;
			$from_email   	= $this->fetch_sentEmail_email;
			$author_row     = $this->__elbp_CommentatorDetails( $comment_id );
			$mail_headers 	= "MIME-Version: 1.0\n" ."From: " . __($this->__elbp_emailFormat($from_name, $author_row)) . " <" . $this->__elbp_emailFormat($from_email, $author_row) . ">\n";
			$author_email   = $author_row['comment_author_email'];
			if ( $this->__elbp_FirstCommentCheck( $author_email ) == 0 ) { 
				if (mail($author_row['comment_author_email'], $mail_subject, $this->__elbp_emailFormat( $email_content, $author_row), $mail_headers )) { 
					$query_insert = "INSERT INTO " . $this->elbp_first_commentator_table . "(email) VALUE('$author_email')";
					$wpdb->query( $query_insert );
				}				
			}	
		}
	}
		
	/**
	* Fetches Commentator Details row
	* 
	* @param 	int	comment id
	* @return 	array of commentator row
	*/
	function __elbp_CommentatorDetails( $comment_id ){
		global $wpdb;
		$author_details	= array();
		$query_author = "SELECT 
								c.* 
						FROM " . $this->wordpress_comments_table . " c 
						WHERE 
							c.comment_approved = '1' 
							AND c.comment_ID=" . $comment_id . " limit 1";							
		$rs_author = $wpdb->get_row( $query_author, ARRAY_A );
		return $rs_author;		
	}	
	
	/**
	* replace the template tags
	* @param 	string		email template message
	* @param 	array		author details 
	* @return 	array		repplaced message 	
	*/
	function __elbp_emailFormat($message, $author){
		$blog_url 		= get_option('siteurl');
		$rss_feed_link	= get_option('siteurl') . '/?feed=rss2';
					
		$author_details = $this->__elbp_BlogAuthor($author['comment_ID']);
		$l_SwapValues   = array(   "%author_name%"			=> $author_details['display_name'],
								   "%author_email%"			=> $author_details['user_email'],
								   "%commentator_name%"		=> $author['comment_author'],
								   "%commentator_email%"	=> $author['comment_author_email'],
								   "%commentator_website%"	=> $author['comment_author_url'],
								   "%blog_post_link%"		=> $author_details['user_url'],
								   "%blog_url%"				=> $blog_url,
								   "%date_short%"			=> date("n/j/Y h:i:sA"));
		// Swap out old with new
		$message = str_replace(array_keys($l_SwapValues), array_values($l_SwapValues), $message);
		return $message;		
	}	
	
	/**
	* Getting commented blog post author details
	* @param 	int			comment id
	* @return 	array		Blog post author record
	*/
	function __elbp_BlogAuthor($comment_id){
		global $wpdb;
		$query = "SELECT
						a.user_nicename,
						a.user_email,
						a.user_url,
						b.guid,
						a.display_name
				 FROM 
					". $this->wordpress_users_table ." a
				 INNER JOIN ". $this->wordpress_posts_table ." b ON(a.ID = b.post_author)
				 INNER JOIN ". $this->wordpress_comments_table ." c ON(b.ID = c.comment_post_ID)
				 WHERE c.comment_ID='" . $comment_id . "'";
		$rs = $wpdb->get_row( $query, ARRAY_A );
		$author_array = array();
		$author_array['user_nicename'] 	= $rs['user_nicename'];
		$author_array['user_email'] 	= $rs['user_email'];
		$author_array['user_url'] 		= $rs['user_url'];
		$author_array['display_name'] 	= $rs['display_name'];
		return $author_array;
	}
	
	/**
	* SQUEEZE PAGE
	*/
	function __elbpro_squeezePG( $elbp_szpg_tmp, $elbp_szpg_select_btm_design, $elbp_szpg_btm_type, $elbp_szpg_btm_txt,  $elbp_szpg_selected_arp,$elbp_szpg_trackingcode,$elbp_szpg_firstname,$elbp_szpg_lastname,$elbp_szpg_namefld,$elbp_szpg_emailfld, $elbp_szpg_videoCode, $elbp_szpg_preHeadline, $elbp_szpg_headline,$elbp_szpg_form_headline, $elbp_szpg_securaty_note,$elbp_szpg_submit_btmtxt, $elbp_szpg_sco_title,$elbp_szpg_sco_meta_dec, $elbp_szpg_sco_meta_key,$elbp_szpg_sco_noindex, $elbp_szpg_sco_nofollow,$elbp_szpg_sco_noarchive,$elbp_szpg_sco_footer_code, $post_content, $elbp_szpg_videourl, $elbp_szpg_videoWidth, 
$elbp_szpg_videoHeight, $elbp_szpg_sbtmC, $elbp_szpg_videoautoplay, $elbp_szpg_videocontrolbar, $elbp_szpg_subheadline, $elbp_szpg_design_color, $elbp_szpg_imageUrl, $elbp_szpg_imagealt, $elbp_szpg_imagealert ) { 
		$this->template_EmailFldTxt = $elbp_szpg_emailfld;
		$this->template_FirstNameFldTxt = $elbp_szpg_firstname;
		$this->template_LastNameFldTxt = $elbp_szpg_lastname;
		$this->template_NameFldTxt =	$elbp_szpg_namefld;
		$this->template_TrackingCode = $elbp_szpg_trackingcode;
		
		
		// Image
		if( $elbp_szpg_imagealert != '' ) $js_alert = 'onClick="alert(jsalert);return false" ';
		if( $elbp_szpg_imageUrl != '' ) {
		$displayImg	 = ' <img title="'.$elbp_szpg_imagealt.'"  alt="'.$elbp_szpg_imagealt.'" src="'.ELBPRO_LIBPATH.'user-tmp/squeeze-page/4/images/video.png" '.$js_alert.' />  ';		
		}
		
		// Video
		if( $elbp_szpg_videoWidth == '' ) {
			if( $elbp_szpg_tmp == 3 ) $videoWidth = '450px';
			else $videoWidth = '550px';
		} else { 
			$videoWidth = $elbp_szpg_videoWidth;
		}
		
		if( $elbp_szpg_videoHeight == '' ) {
			if( $elbp_szpg_tmp == 3 ) $videoHeight = '255px';
			else $videoHeight = '355px';
		} else { 
			$videoHeight = $elbp_szpg_videoHeight;
		}
		
		$elbp_szpg_videoCode = str_replace('width=','width="'.$videoWidth.'"',$elbp_szpg_videoCode);
		$elbp_szpg_videoCode = str_replace('height=','height="'.$videoHeight.'"',$elbp_szpg_videoCode);
		
        $showcontrol = !empty($elbp_szpg_videocontrolbar) ? "over" :  "none";
        $autoplay = !empty($elbp_szpg_videoautoplay) ? "true" :  "false"; 
		
		// Design
		if( $elbp_szpg_select_btm_design == 1 ) {
			$elbp_szpg_sbtmC = $elbp_szpg_btm_type.'_'.$elbp_szpg_btm_txt;
		} else {
			$elbp_szpg_sbtmC = $elbp_szpg_sbtmC;
			$this->template_SubmitButtonTxt = $elbp_szpg_submit_btmtxt;
		}
		
		if( $elbp_szpg_design_color == 1 ) { 
			$headline_color = '#2D6493';
			$header_arrow = 'blue-arrow.png';
			$main_header_arrow = 'main-header-blue.png';
			$main_footer_arrow = 'main-footer-blue.png';
			$group_arrows = 'group-arrow-blue.png';
		} else if( $elbp_szpg_design_color == 2 ) { 
			$headline_color = '#E00000';
			$header_arrow = 'red-arrow.png';
			$main_header_arrow = 'main-header-red.png';
			$main_footer_arrow = 'main-footer-red.png';
			$group_arrows = 'group-arrow-red.png';
		} else if( $elbp_szpg_design_color == 3 ) { 
			$headline_color = '#414141';
			$header_arrow = 'black-arrow.png';
			$main_header_arrow = 'main-header-black.png';
			$main_footer_arrow = 'main-footer-black.png';
			$group_arrows = 'group-arrow-black.png';
		} else if( $elbp_szpg_design_color == 4 ) { 
			$headline_color = '#E46600';
			$header_arrow = 'orange-arrow.png';
			$main_header_arrow = 'main-header-orange.png';
			$main_footer_arrow = 'main-footer-orange.png';
			$group_arrows = 'group-arrow-orange.png';
		} else if( $elbp_szpg_design_color == 5 ) { 
			$headline_color = '#3C6B1B';
			$header_arrow = 'green-arrow.png';
			$main_header_arrow = 'main-header-green.png';
			$main_footer_arrow = 'main-footer-green.png';
			$group_arrows = 'group-arrow-green.png';
		}
		// SCO
		if( $elbp_szpg_sco_noindex == 1 ) $noindex = 'noindex';
		if( $elbp_szpg_sco_nofollow == 1 ) $nofollow = 'nofollow';
		if( $elbp_szpg_sco_noarchive == 1 ) $noarchive = 'noarchive';
		
		if( $elbp_szpg_sco_noindex == 1 || $elbp_szpg_sco_nofollow == 1 || $elbp_szpg_sco_noarchive ) {
			$meta_robots = '<meta name="robots" content="'.$noindex.','.$nofollow.','.$noarchive.'">';
		}
		
		if( $elbp_szpg_tmp == '' || $elbp_szpg_selected_arp == 0 ) {
			echo '<div align="center">You must choose <strong>page template and autoresponder service</strong> in order to activate this page<br>
			      In your case eiter both or any one option is missing to configure. 
				  </div>';	
		} else {
		
			$exist_arp = $this->__elbpro_findAutoresponder( $elbp_szpg_selected_arp );
			if( $exist_arp <= 0 ) { 
				echo '<div align="center">Selected autoresponder service no longer exist, Please choose another autoresponder Service.
				      </div>';
			} else {
				include( ELBPRO_RELPATH.'/lib/user-tmp/squeeze-page/'.$elbp_szpg_tmp.'/template.php' );
			}
		}
	}
	
	
	function __elbpro_SendLcRequest($url, $post_params) {
		$ch = curl_init();   
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$result = curl_exec($ch);  
		curl_close($ch);
		return $result;		
	}
	
	function __elbpro_UpgCt(){
		global $wpdb;
		// sidebar 
		if( isset($_COOKIE['sidebarsts']) ) {
			$db_Update_sql = "UPDATE $this->elbp_optin_options_table SET option_value=option_value+1 WHERE option_name='elbp_sidebar_clickStats'";
			$wpdb->query( $db_Update_sql );		
			setcookie('sidebarsts', "", time()-3600);	
		} else if( isset($_COOKIE['insidecmtboxsts']) ) {
			$db_Update_sql = "UPDATE $this->elbp_optin_options_table SET option_value=option_value+1 WHERE option_name='elbp_insidecomment_clickStats'";
			$wpdb->query( $db_Update_sql );	
			setcookie('insidecmtboxsts', "", time()-3600);	
		} else {
			$query = "SELECT id,clickStatus,cookie FROM $this->elbp_optin_placement_table WHERE flag='1'";
			$ilbp_combnation_all = $wpdb->get_results( $query, ARRAY_A );
			if( $ilbp_combnation_all ) { 
				foreach ( $ilbp_combnation_all as $row ) {
					$cookieName = unserialize($row['cookie']);
					$clickIDName = $cookieName['placementCountClk'];
					if( isset($_COOKIE[$clickIDName]) ) {
						$db_Update_sql = "UPDATE $this->elbp_optin_placement_table SET clickStatus=clickStatus+1 WHERE id='".$row['id']."'";
						$wpdb->query( $db_Update_sql );	
						setcookie($clickIDName, "", time()-3600);	
					}
				}
			}	
		}
	}	
	
	
	
	/**
	 * Plugin registration form
	 */
	function __ilbpro_PluginActivateForm($form_name, $submit_btn_txt='Register', $name, $email, $hide=0, $submit_again='') {
		$plugin_pg    = ($this->wp_version >= 2.7) ? 'tools.php' : 'edit.php';
		$thankyou_url = ELBPRO_SITEURL.'/wp-admin/'.$plugin_pg.'?page='.$_GET['page'].'&elbpg=mof&cosubpg=cop';
		$onlist_url   = ELBPRO_SITEURL.'/wp-admin/'.$plugin_pg.'?page='.$_GET['page'].'&elbpg=mof&cosubpg=cop&ilbpro_onlist=1';
		if ( $hide == 1 ) $align_tbl = 'left';
		else $align_tbl = 'center';
		?>
		
		<?php if ( $submit_again != 1 ) { ?>
		<script><!--
		function trim(str){
			var n = str;
			while ( n.length>0 && n.charAt(0)==' ' ) 
				n = n.substring(1,n.length);
			while( n.length>0 && n.charAt(n.length-1)==' ' )	
				n = n.substring(0,n.length-1);
			return n;
		}
		
		function was_email_trim( stringToTrim ) {
			return stringToTrim.replace(/^\s+|\s+$/g,"");
		}
		
		function __ilbp_wpsamrtapps_regValidEmailChk() { 
			var name = document.<?php echo $form_name;?>.name;
			var email = document.<?php echo $form_name;?>.from;
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var err = ''
			if ( trim(name.value) == '' )
				err += '- Name Required\n';
			if ( reg.test(was_email_trim(email.value)) == false )
				err += '- Valid Email Required\n';
			if ( err != '' ) {
				alert(err);
				return false;
			}
			return true;
		}
		//-->
		</script>
		<?php } ?>
		<form name="<?php echo $form_name;?>" method="post" action="http://www.aweber.com/scripts/addlead.pl" <?php if($submit_again!=1){; ?>onsubmit="return __ilbp_wpsamrtapps_regValidEmailChk()"<?php }?>>
		<input type="hidden" name="meta_web_form_id" value="2008424774" />
		<input type="hidden" name="meta_split_id" value="" />
		<input type="hidden" name="listname" value="wsa-active" />
		<input type="hidden" name="redirect" value="<?php echo $thankyou_url;?>" />
		<input type="hidden" name="meta_adtracking" value="codex.wordpress" />
		<input type="hidden" name="meta_message" value="1" />
		<input type="hidden" name="meta_required" value="name,email" />
		<input type="hidden" name="meta_tooltip" value="" />
		<input type="hidden" name="meta_redirect_onlist" value="<?php echo $onlist_url;?>">
		<input type="hidden" name="meta_forward_vars" value="1">	
		 <?php if ( $submit_again == 1 ) { ?> 	
		 <input type="hidden" name="activate_again" value="1">
		 <?php } ?>		 
		 <?php if ( $hide == 1 ) { ?> 
		 <input type="hidden" name="name" value="<?php echo $name;?>">
		 <input type="hidden" name="email" value="<?php echo $email;?>">
		 <?php } else { ?>
		 <input type="text" name="name" value="<?php echo ($name?$name:'Your name...');?>"  class="text"onblur="if (this.value == '') {this.value = 'Your name...';}" onfocus="if (this.value == 'Your name...') {this.value = '';}" />
		 <input type="text" name="email" value="<?php echo ($email?$email:'Your e-mail...');?>" class="text" onblur="if (this.value == '') {this.value = 'Your e-mail...';}" onfocus="if (this.value == 'Your e-mail...') {this.value = '';}"  />
		 <?php } ?>
		 <input type="submit" name="submit" value="<?php echo $submit_btn_txt;?>" 
		 								style="overflow:visible;padding:5px 10px 6px 7px;    background-color: #5872A7; color:#fff;
									background-position: 0 -96px;
									border-color: 1px solid #1A356E; font-weight:bold; cursor:pointer;
									"  />
		 </form>
		
		<?php
	}
	
		function __ilbpro_StepTwoRegister( $form_name='frm2', $name, $email ){
		?>
		 <table width="640" cellpadding="5" cellspacing="1" bgcolor="#ffffff" style="padding:0px 15px 15px 15px;">
		  <tr><td>
		    <h2 style="font-size:18px; 
			             font:'droid sans',arial,sans-serif;
						 letter-spacing:-1px;
						 text-shadow: 0px 0px 1px #6B6B6D;
						 -moz-text-shadow: 0px 0px 1px #6B6B6D;
						 -webkit-text-shadow: 0px 0px 1px #6B6B6D;">
			  <strong><span style="border-bottom:2px solid #e9e9e9; padding-bottom:3px;">You Are Almost Done</span></strong> 
			  </h2>
		  </td></tr>
		  <tr><td><h3 style="border-bottom:1px dashed #003399;"><i><span style="font-weight:bold; font-size:18px; color:#009933;">Step 1:</i></h3></td></tr>
		  <tr><td>
		  <span style="color:#FF3333">
		  A confirmation email has been sent to your email <strong>"<?php echo $email;?>"</strong>. 
		  <br>You MUST <strong>Click On The Link Inside The Email To Activate The Plugin</strong>.
		  </span>
		  <br><br>
		  
		  <span><strong style="font-size:13px">1. Didn't See Any Email From Us</strong></span> 
		  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make sure to check your email's <strong><span style="color:#FF3333">junk & spam folder</span></strong> in case the email mistakenly get filtered there.
		  <br><br>
		  
		 <strong style="font-size:13px">2. It's not there in the junk & spam folder either</strong><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sometimes the confirmation email takes time to arrive. Please be patient. WAIT FOR 1 HOURS AT MOST.<br> 
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The confirmation email should be there by then.
		 <br><br>
		 
		 <strong style="font-size:13px">3. One hours and yet confirmation email!</strong><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please register again from below:<br>
		 <div style="width:450px; color:#717171; font-weight:bold; background:#FFFFCC; padding:10px; -webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); -moz-border-radius: 5px; border-radius: 5px;">
		 <strong><?php $this->__ilbpro_PluginActivateForm($form_name,'Activate Again',$name,$email,$hide=0,$submit_again=2);?></strong>
		 </div>
		 <div style="clear:both"></div>
		 <br><br>
		<i style="color:#999999;"> <strong>But I've Still Got Problems.</strong><br>
		 Stay calm. Contact us at  <strong><a href="http://support.wpsmartapps.com/open.php" target="_blank" style="text-decoration:none;">http://support.wpsmartapps.com</a></strong>  we will get to you immediately.</i>

		  </td></tr>
		  <tr><td><h3 style="border-bottom:1px dashed #003399;"><i><span style="font-weight:bold; font-size:18px; color:#009933;">Step 2:</i></h3></td></tr>
		  <tr><td>
		  <strong>Did You Click On The Link Inside The Email To Activate The Plugin? If you Did</strong><br> 
		  Now, Click on the button below to Verify and Activate the plugin.</td></tr>
		  <tr><td><?php $this->__ilbpro_PluginActivateForm($form_name.'_0','Verify and Activate',$name,$email,$hide=1,$submit_again=1);?></td></tr>
		 </table>
		 
		<?php
	}
	
	
} // Eof Class

$EmailListBuildingPro = new EmailListBuildingPro();
?>