<?php global $wpdb; ?>
<style>
.newform {
	padding-bottom:0px; 
	color:#2D5A84;
}
.newform a{
	cursor:pointer;
	color:#1111CC;
	text-decoration:none;
}
.newform a:hover{
	color:#D54E21;
}
</style>
<div style="height:auto;"> 
	<!--Left Content-->
	<div style="float:left; width:60%">
		<div style="border-bottom:1px dotted #C2CFF1;">
			<div style="float:right;" align="justify"> <h4><span class="newform"><?php echo $this->elbpro_img_addnewform; ?><a href="<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mof&cosubpg=cof'; ?>"> Add New Form !</a></span></h4> </div>
			
			<h3>
				<span style="padding-bottom:0px; color:#2D5A84;">
				   Manage Optin Form
				</span>	
			</h3>
			<p style="font-size:11px"> Add, edit and manage your optin forms</p>
			
		</div>
	
	<?php  
   		$ilbp_arp_extract = $wpdb->get_results( $sql_select_autoresponser, ARRAY_A );
		if( $ilbp_arp_extract ) { 
   ?>
   <table cellpadding="7" cellspacing="1" width="100%" style="margin:5px 0px 5px 0px;font-size:16px">
	<tr>
		<td>
		<div class="optinName" style="border-bottom:1px dotted #CCCCCC; background-color:#F9F9F9;">
			<div style="float:right; padding:7px 10px 5px 5px; font-size:smaller; font-weight:normal; padding-right:80px;">
			<strong>Controls</strong>
			</div>
			 <span style="font-weight:bold; font-size:17px">Optin Forms</span>
		</div>
		<?php 
		$i = 1;
		foreach ( $ilbp_arp_extract as $row ) {
			
		if( $row['flag_aff'] == 0 ) {
			$affstatus = 'enable';
			$affcolor='#666666';
			$alert_msg = 'Activate';
		} else if( $row['flag_aff'] == 1 ) {
			$affstatus = 'disable';
			$affcolor='#009933';
			$alert_msg = 'Deactivate';
		}
		
		if( $i % 2 == 0 ) $color = '#f1f1f1';
		else $color = '';
		?>
		<div class="optinName" style="background-color:<?php echo $color; ?>;">
			<div style="float:right; padding:7px 10px 5px 5px; font-size:smaller; font-weight:normal;">
				<a href="?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&elbpg=mof&cosubpg=cof&editarp=<?php echo $row['id']; ?>" ><?php echo $this->elbpro_img_edit; ?></a> | 
				<a onclick="return confirm('Are you sure to delete this autoresponder service?');" href="?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&elbpg=mof&arpdeleteid=<?php echo $row['id']; ?>" ><?php echo $this->elbpro_img_delete; ?></a> |
				<a onclick="return confirm('Are you sure to <?php echo $alert_msg; ?> Auto Filling Form?');" style="color:<?php echo $affcolor; ?>; " href="?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&elbpg=mof&arpaffid=<?php echo $row['id']; ?>&affstatus=<?php echo $affstatus; ?>" > <?php echo ucwords($affstatus); ?> Auto Filling Form   </a>
			</div>
			 <span><?php echo $i.'.&nbsp;'. $row['optin_form_name']; ?></span>
		</div>
		<?php
		$i++;
		}
		?>
		</td>
	</tr>
   </table>
   <br><br>
   		<table width="100%">
			<tr align="center">
			  <td><input type="button" name="reset_stats" style="background-color:#0852AB; color:#ffffff; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #44b324; 	border-top:1px solid #6fe03b; border-bottom:1px solid #1e5f0d; 	padding:10px 10px 10px 10px;
overflow:visible;" value="Step2 &gt;&gt; Choose Optin Disply Position" onclick="window.location = '<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mof&cosubpg=cop'; ?>'" /></td>
			</tr>
		</table>
		
	<?php } else { ?>

	<table cellpadding="7" cellspacing="1" width="490px" style="margin:5px 0px 5px 0px;font-size:16px">
          <tr>
		  <td align="center"><br><h3 style="font-size:14px; color:#464662;">You have no Optin Form Code yet <span class="newform"><a href="<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mof&cosubpg=cof'; ?>"> Go add one </a></span>!</h3></td>
		  </tr>
    </table>
   	
	<?php } ?>
	
		
</div>

	<!--Right Content-->
<div class="elbpro_sidebar_right">
	
	<h4>Help Resources</h4>
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
	
	<?php if( $chkNoOf_arp_service > 0 ) { ?>
	
	<h4 style="border-top:1px dashed #C2CFF1; padding-top:10px; color:#CC3300;">
	<span style="color:#CC3300">Below Feature Availble Only On The Pro Version </span>  <a href="http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/" target="_blank">Upgrade Now</a><br><br>
	
	 <?php echo $this->elbpro_img_ask_question; ?>&nbsp;<?php //echo $this->elbpro_img_leftarrow; ?> How Auto Filling Form Works?</h4>
	<ul class="elbpro_sidebar_right_menu" style="font-size:11px;">
		<li>
		<b>1.</b> Your information will be automagically filled while you are logged in.
		</li>
		<li>
		<div style="padding:5px 0px 5px 0px">
		<b>2.</b> For not logged in user, auto filler grabs the visitor's name/email from the comment they have made.
		</div>
		</li>
		<li  style="padding:5px 0px 5px 0px">
		<b>3.</b> Send parameter via email or any other source to your blog for auto filling. Use elbn parameter for username and elbe for email
		<strong>Format:</strong> <font color="#990000">http://www.yourblogname.com/?elbpn=name&amp;elbpe=email</font> 
		</li>
	</ul>
	
	<h4 style=" padding-top:10px;"> Worried About Spliting Name?</h4>
	<ul class="elbpro_sidebar_right_menu" style="font-size:11px;">
		<li>
		Do not worry about spliting your name into first and second, If you have choosen "Split name into first and last" while creating the form 
		your visitor username information will be automagically split into first and last name while Auto Filling Name Information. 
		</li>
	</ul>
	
	<?php } ?>
	
	</div>
</div>
