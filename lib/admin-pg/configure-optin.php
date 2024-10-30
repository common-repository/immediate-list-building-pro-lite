<script type="text/javascript" src="<?php echo ELBPRO_FULLPATH; ?>lib/admin-pg/js/co.js"></script>
<script type="text/javascript">
function __ofatrim(stringToTrim) {
	return stringToTrim.replace(/^\s+|\s+$/g,"");
}
function __elbp_chk_existing_name( existing_forms_names ) { 
	var form_name = document.getElementById('arp_optin_form_name').value;
	var form_name = __ofatrim(form_name);
	if ( form_name == '' ) {
		alert('Optin Form Name Required');
		return false;
	} else if ( existing_forms_names.indexOf(','+form_name+',') !== -1 ) {
		alert('Optin Form Name "'+form_name+'" Already Exists');
		return false;
	}
}
function __showhideapicall(id, display){
	document.getElementById(id).style.display=display;
}
</script>
<form name="elbpro_co_form" method="post" action="" onsubmit="return __elbp_chk_existing_name( '<?php echo $existing_enter_form_names; ?>' );" >
<div style="height:auto;"> 
	<!--Left Content-->
	<div style="float:left; width:60%">
		<div>
			<h3>
				<span style="padding-bottom:0px; color:#2D5A84;">
					<input name="elbpro[ilbp_connection_type]" type="radio" value="1" checked="checked" onclick="__showhideapicall('apiCall', 'none')" /> HTML Optin Form Code &nbsp;&nbsp;
					<input name="elbpro[ilbp_connection_type]" type="radio" value="2" onclick="__showhideapicall('apiCall', 'block')"/> Using API <span style="color:#CC3300">(PRO)</span>
				</span>
			</h3>
			
			<!--API CALL-->
			<div id="apiCall" style="margin:9px 0px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px; background-color:#F3F0E3;  padding:5px 0px 5px 7px; width:100%; display:none;">
				<span style="color:#CC3300">Feature Availble Only On The Pro Version </span>  <a href="http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/" target="_blank">Upgrade Now</a>
			</div>
			<!--EOF API CALL-->
			
			<span style="font-size:11px;border-bottom:1px dotted #C2CFF1; padding-bottom:8px; width:90%;"> Enter your HTML opt-in code below so that we can hook up your form to the template</span>
		</div>
		<br>
		<textarea  rows="10" cols="78" name="elbpro[optin_html_form_code]" id="elbpro_html_optin_form_code" ><?php echo $arp_records['optin_html_form_code']; ?></textarea>
		<br><br>
		<div><strong>Optin Form Name:</strong> <input type="text" name="elbpro[optin_form_name]" id="arp_optin_form_name" style="width:200px;" value="<?php echo $arp_records['optin_form_name']; ?>" /> &nbsp;&nbsp;<i style="font-size:xx-small;">(Note: Appears only to you)</i></div>
		<table width="490px" style="margin-top:20px;">
			<tr>
			  <td width="150"><input name="button" type="button" class="button" id="elbpro_process_form" onclick="__elbpro_process_html_form('null')" value="Process HTML Form"  style="overflow:visible;padding:0px 10px 6px 7px;" /></td>
				<td width="328" style="font-size:11px; padding-left:20px;">Clicking '<b>Process HTML Form</b>' will detect all necessary fields automagically. </td>
			</tr>
		</table>
		<br>
	
	<!--Hidden Fields-->
	<div id="elbpro_form_code_html" style="display:none"></div>
	<input type="hidden" name="elbpro[optin_hidden_fields]" id="elbpro_html_form_hidden_flds" value="<?php echo $arp_records['optin_hidden_fields']; ?>"  />
	
	<!--Eof Hidden Fields-->
		
<div id="configure_optin" style="display:<?php echo ($display_configure_optin?$display_configure_optin:'none'); ?>">
		<fieldset style="border: 1px solid rgb(198, 217, 233);margin: 10px 0pt; padding: 10px 10px 10px 10px; width:490px;">		
		<legend>&nbsp;&nbsp;<span style="font-weight:bold;">Configure Optin Fields</span>&nbsp;&nbsp;</legend>
		<table ellpadding="3" cellspacing="0" width="490px;" style="font-size:11px; margin-top:10px;">
			<tr id="hide_one" style="display:<?php echo ($block_name_fld?$block_name_fld:''); ?>">
				<td width="9%" style="padding:8px 8px 0px 8px; font-size:11px; background:#EDEFF4; color:<?php echo $name_color; ?>"><span id="field_name"><strong>Name:</strong></span></td>
				<td width="91%" style="padding:8px 8px 0px 8px; background:#EDEFF4;">
					<select name="elbpro[optin_name_fld]" id="elbpro_name_fld" style="width:280px;" <?php echo $disable_name_dropdown; ?> >
					<?php if( isset($_GET['editarp']) ) $this->__elbpro_dropdown( $arr_name, $namefld ); ?>
 					</select>				</td>
		    </tr>
			<tr id="hide_two" style="display:<?php echo ($block_name_fld?$block_name_fld:''); ?>">
			  <td style="padding:8px 8px 8px 8px; background:#EDEFF4;">&nbsp;</td>
			  <td style="padding:8px 8px 8px 18px; background:#EDEFF4; "><?php echo $this->elbpro_img_arrowleft; ?> &nbsp;<input name="elbpro[split_name]" type="checkbox" value="1" id="elbpro_split_name" onclick="__elbpro_process_html_form('split')" <?php echo $chk_split_name; ?> /> 
		  &nbsp;<span style="font-size:xx-small">Split name into first and last name</span>	<span style="font-size:xx-small; color:<?php echo ($display_split_name_txt_color ?$display_split_name_txt_color:'#EDEFF4'); ?>;"  id="split_namefld" >&nbsp;&nbsp;(Global Effect)</span>		  </td>
		  </tr>
			<tr style="display:<?php echo ($display_split_option?$display_split_option:'none'); ?>;" id="first_last_name_tbl">
			  <td style="padding:0px 8px 8px 8px; background:#EDEFF4;">&nbsp;</td>
			  <td style="padding:0px 8px 8px 18px; background:#EDEFF4; font-size:10px; ">
			  <strong>First Name:</strong> <select name="elbpro[first_name_fld]" id="elbpro_first_name_fld" style="width:100px;">
							<?php if( isset($_GET['editarp']) ) $this->__elbpro_dropdown( $arr_name, $firstnamefld ); ?>
 					      </select>
			&nbsp;&nbsp;&nbsp;&nbsp;			  
			  <strong>Last Name:</strong> <select name="elbpro[last_name_fld]" id="elbpro_last_name_fld" style="width:100px;">
						  <?php if( isset($_GET['editarp']) ) $this->__elbpro_dropdown( $arr_name, $lastnamefld ); ?>
 					      </select>
						  
			  </td>
		  </tr>
			<tr style="background-color:#FFFFFF">
				<td style="padding:8px 8px 0px 8px; font-size:11px;"><strong>Email:</strong></td>
			  <td style="padding:8px 8px 0px 8px;">
					<select name="elbpro[optin_email_fld]" id="elbpro_email_fld" style="width:280px;">
					<?php if( isset($_GET['editarp']) ) $this->__elbpro_dropdown( $arr_name, $arp_records['optin_email_fld'] ); ?>
 					</select>		   </td>
		    </tr>
			<tr style="background-color:#FFFFFF">
			  <td style="padding:8px 8px 8px 8px;">&nbsp;</td>
			  <td style="padding:8px 8px 8px 18px;">&nbsp;<?php echo $this->elbpro_img_arrowleft; ?> &nbsp;<input name="elbpro[display_only_email]" type="checkbox" value="1" id="elbpro_disply_only_email" onclick="__elbpro_displayOnlyEmail()" <?php echo $chk_displayOnly_email; ?> />
		  &nbsp;<span style="font-size:xx-small;color:#338F03;">Enable only email field</span><span style="font-size:xx-small; color:<?php echo ($display_only_email_txt_color?$display_only_email_txt_color:'#FFFFFF'); ?>;"  id="enableEmailFld">&nbsp;&nbsp;(Global Effect)</span>		 </td>
		  </tr>
			<tr>
			  <td colspan="2" style="padding:8px 8px 8px 8px; font-size:11px; background:#EDEFF4;"><strong>Tracking Code:</strong>&nbsp;&nbsp;
					<select name="elbpro[trackcode_fld]" id="elbpro_trackcode_fld"  style="width:280px;">
					<option value="None" selected >None</option>
					 <?php if( isset($_GET['editarp']) ) $this->__elbpro_dropdown( $hiddenflds_arr, $arp_records['optin_trackcode_fld'] ); ?>
			  </select>		     </td>
		  </tr>
			<tr style="background-color:#FFFFFF">
			  <td colspan="2" style="padding:8px 8px 8px 8px; font-size:11px;"><strong>Form Url:</strong>&nbsp;&nbsp; 
		      <input name="elbpro[optin_form_url]" id="elbpro_formurl" type="text" size="70" value="<?php echo $arp_records['optin_form_url']; ?>" /></td>
		  </tr>
		</table>
		
		
		<table width="490px" style="margin-top:20px;">
			<tr>
			  <td width="123" style="text-align:center;"><input type="submit" name="elbpro[process_arp_html_form]" id="elbpro_parse_form" value="Save Form" style="background-color:#E6EFC2;  padding:5px 10px 6px 7px; color:#529256; font-weight:bold; cursor:pointer; overflow:visible;"/></td>
				<td width="355" style="font-size:11px;">Please double check your settings before clicking SAVE buttom. Saving false information will not send subscribers to your list and also it will effect on <strong>Auto Filling Form</strong>.</td>
			</tr>
			<tr>
			  <td style="text-align:center;">&nbsp;</td>
			  <td style="font-size:11px;">&nbsp;</td>
		  </tr>
			<tr>
			  <td colspan="2" style="text-align:center;font-size:11px;"><div align="left">
			  <i>Note: Don't worry about adding extra fields such as country, phone number... if you have any,
			  You can easy add those fields on our <strong>'Optin Display Section'</strong>.</i> 
			  </div></td>
		  </tr>
		</table>
		</fieldset>
		
		

</div><!--Eof hide hidden part-->		



		<!--Creating White Space-->
		<br><br><br><br><br><br>

	</div>
	
	
	
	<!--Right Content-->
	<div class="elbpro_sidebar_right">
	
	<h4>&nbsp;Help Resources</h4>
	<ul class="elbpro_sidebar_right_menu">
		<li><a href="http://wiki.wpsmartapps.com/index.php?title=How_to_Add_New_HTML_Optin_Form" target="_blank">How to add new HTML optin form</a>
		<div style="padding:5px 0px 5px 0px;color: #666666;">
		A beginner's guide to <?php echo ELBPRO_NAME; ?>
		</div>
		</li>
		<li><a href="http://community.wpsmartapps.com/" target="_blank">Community Support</a><br>
		<div style="padding:5px 0px 5px 0px;color: #666666;">Resources that can help you get your answer fastest</div>
		</li>
	</ul>
	
	<h4 style="border-top:1px dashed #C2CFF1; padding-top:10px; color:#CC3300;font-family: Candara, Tahoma, Geneva, sans-serif; font-size:15px;"><?php echo $this->elbpro_img_leftarrow.'&nbsp;'.$this->elbpro_img_leftarrow; ?> IMPORTANT !! before inputting your HTML </h4>
	<ul class="elbpro_sidebar_right_menu">
		<li>
		Make sure you already have <strong>Email Marketing Service</strong> like : aweber.com, mailchimp.com, infusionsoft.com, getresponse.com etc.		</li>
		<li  style="padding:5px 0px 5px 0px">
		Also, make sure the opt-in code that you have been provided contains the HTML &lt;form&gt; tag, and also have both Name and Email address fields.		</li>
	</ul>
	
	
	<h4 style="font-size:12px">Does it work with my autoresponder?</h4>
	<ul class="elbpro_sidebar_right_menu">
		<li>
		<?php echo ELBPRO_NAME; ?> is designed to work with ANY Email Marketing Software/Autoresponder and so does yours.		</li>
	</ul>	
	
	
	</div>
	

</div>
</form>