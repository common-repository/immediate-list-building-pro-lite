<?php
global $wpdb;

	$db_select_arp_query = "SELECT optin_form_name FROM $this->elbp_autoresponder_table ORDER BY id DESC";
	
	$rs_arp_process = $wpdb->get_results( $db_select_arp_query, ARRAY_A );
	if( $rs_arp_process ) { 
		foreach ( $rs_arp_process as $row ) {
			if ( trim( $existing_enter_form_names ) == '' ) $existing_enter_form_names .= ",";
			if( isset( $this->arpID ) ) $existing_enter_form_names = $existing_enter_form_names;
			else $existing_enter_form_names .= trim( $row['optin_form_name'] ).",";
		}
	}
	
	if( isset( $this->arpID ) ) {
		$db_select_arp_single_recoed = "SELECT * FROM $this->elbp_autoresponder_table WHERE id='".$this->arpID."' ";
		$arp_records = $wpdb->get_row( $db_select_arp_single_recoed, ARRAY_A );
		$display_configure_optin = 'block'; 
		if( $arp_records['split_name'] == 1 ) {
			$display_split_option = strpos($_SERVER['HTTP_USER_AGENT'],'MSIE') ? 'block' : 'table-row';
			$chk_split_name = 'checked';
			$name_color = '#CCCCCC';
			$disable_name_dropdown = 'disabled';
			$display_split_name_txt_color = '#CC3300';
			$namefldvalue = explode(',', $arp_records['optin_name_fld'] );
			$firstnamefld = $namefldvalue[0];
			$lastnamefld = $namefldvalue[1];
		} else {
			$namefld = $arp_records['optin_name_fld'];
		}
		if( $arp_records['display_only_email'] == 1 ) {
			$block_name_fld = 'none';
			$display_split_option = 'none';
			$chk_displayOnly_email = 'checked';
		    $display_only_email_txt_color = '#CC3300';
		}
		$textfld = '/<input\s[^>]*type[\s]*=[\s]*[\'|"]?text["|\'|"]?[^>]*>/i';
		preg_match_all($textfld, $arp_records['optin_html_form_code'], $text_fld_matches);
		$arr_name = array();
		$arr_value = array();
		foreach ( (array) $text_fld_matches[0] as $val ) {
			$grabbed_txtfld_name = '/name=["|\']([^"]*)["|\']/i';
			preg_match_all( $grabbed_txtfld_name, $val, $names );
			$arr_name[] = $names[1][0];
		}
		$hiddenflds_arr = explode(',', $arp_records['optin_hidden_fields'] );
	}
?>