
<?php  
$form_1 = 'ilbpro_active_form_1';
$form_2 = 'ilbpro_active_form_2';
// Activate the plugin if email already on list
if ( trim($_GET['ilbpro_onlist']) == 1 ) {
	$this->rfr2b_freepluginreg = 22191;
	update_option('ilbpro_activate', $this->rfr2b_freepluginreg);
} 
// If registration form is successfully submitted
if ( ((trim($_GET['submit']) != '' && trim($_GET['email']) != '') || trim($_GET['activate_again']) != '') && $this->rfr2b_freepluginreg != '22191' ) { 
	update_option('ilbpro_name', $_GET['name']);
	update_option('ilbpro_email', $_GET['from']);
	$this->wsa_freepluginreg = 1;
	update_option('ilbpro_activate', $this->wsa_freepluginreg);
} 
$this->rfr2b_chkpluginreg = get_option('ilbpro_activate');
if ( intval($this->rfr2b_chkpluginreg) == 0 ) { 
	global $userdata;
	if( $userdata->first_name == '' || $userdata->last_name == '' )  $display_name = $userdata->display_name;
	else $display_name = $userdata->first_name.' '.$userdata->last_name;
	$name  = trim($display_name);
	$email = trim($userdata->user_email);
?>
<!--Start Of First Step-->	
<div style="padding-top:1px; padding-bottom:10px;">
	<div style="color:#717171; font-weight:bold; background:#FFFFCC; padding:10px; -webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); -moz-border-radius: 5px; border-radius: 5px;">
		<div align="center" style="padding-bottom:5px; color:#FF3300; font-size:14px;">[100% FREE] Change ONE Hidden Pro Feature Into Lite Now</div>		
		<center><?php $this->__ilbpro_PluginActivateForm($form_name,'Activate Now',$name,$email);?></center>
	</div>
</div>
<!--Eof First Step-->	
<?php 
} else if ( intval($this->rfr2b_chkpluginreg) == 1 ) {  
	$name  = get_option('ilbpro_name');
	$email = get_option('ilbpro_email');
	$this->__ilbpro_StepTwoRegister($form_2,$name,$email);
	// Final Step
} else if ( intval($this->rfr2b_chkpluginreg) == 22191 ) { 
$hide = get_option('ilbpro_activeinfo');
?>
<!--Final Value Call-->	
<div style="padding-top:1px; padding-bottom:10px;">
	<div style="color:#717171; font-weight:bold; background:#F5F6F7; padding:10px; -webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.09); -moz-border-radius: 5px; border-radius: 5px; line-height:20px;">
		<?php if( $hide != 1 ) { ?>
		<div align="center" style="padding-bottom:5px; color:#FF3300; font-size:14px;">One Pro Feature "<strong style="color:#14DE0A;">Send Email to First Commentator</strong>" Active (REFRESH PAGE TO MAKE IT APPEAR)<br></div> 
		<?php } ?>
		<div align="center" style="padding-bottom:5px; color:#FF3300; font-size:20px; padding:5px; font-weight:bold; text-decoration:none;"><input type="submit" name="reset_stats"  value="Upgrade To PRO Version Now" style="background-color:#FFD007; color:#003552; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #BC2507; padding:8px;overflow:visible; 
" onclick="window.location = 'http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/'" /><br></div> 
		
	
</div>
</div>
<!--Eof Final Value Call-->	
<?php  
update_option('ilbpro_activeinfo', 1);
}
?>