<div style="font-size:11px; background-color:#FFFBCC; padding:10px 10px 10px 10px;font-family: Candara, Tahoma, Geneva, sans-serif;">
			<div style="float:right"> <span class="placementLinks"><a href="http://wiki.wpsmartapps.com/index.php?title=How_to_Add_%22Subscribe%22_Checkbox_on_User_Register_Page" target="_blank">How to Add "Subscribe" Checkbox on User Register Page</a></span></div>
			 <div>&nbsp;</div>
			</div>
<form action="" name="co_registor_form" method="post"  enctype="multipart/form-data" onsubmit="return __elbpro_ChkBlankArp('registor_arpJsID','elbpro_registorActive');" >
										
					<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">1</span>&nbsp;&nbsp;Demo Preview &nbsp;&nbsp;&nbsp;</h3>
					
				<!--Select A Template-->
					<div style="background-color:#F8F8F8; padding:10px 5px 5px 10px; margin-bottom:20px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
					
					<div style="float:right; padding-right:5px; cursor:pointer;">
						<a onClick="__elbpro_ShowHide('registor_options', 'registor_replace_img', 3, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/close-form.gif" id="registor_replace_img" border="0" title="Click to collapse" align="top" /></a>			
					</div>

					
					<div id="registor_options">
						<div align="center" style="padding:4px 4px 8px 4px;">
						<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/demo/registration/1.jpg"  >
						</div>
					</div>
				
				</div>
				
				
				<!--Eof Select A Template-->
				
				<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">2</span>&nbsp;&nbsp;Connect Template With Your Autoresponder Service</h3> 
				<div class="option" style="padding-bottom:10px;">
				<?php $this->__elbpro_autoresponderComboBox( 'elbpro[registor_arp]', ''.$this->fetch_registration['registor_arp'].'','registor_arpJsID','registor_dropdown_responsebk', 'registor_arpSplitName','registor_arpOnlyName','registor_onlyEmail','registor_trackingcode' ); ?> <span id="registor_dropdown_responsebk"></span>
				&nbsp;&nbsp;&nbsp;<span style="font-size:xx-small; color:#FF0000; vertical-align:top;">REQUIRED</span>
				</div>
				
				<div style="padding:9px 4px 15px 4px; display:<?php echo $registration_arpTrackingCode; ?>;" id="registor_trackingcode">
					Tracking Code: <input type="text" style="width:180px;" name="elbpro[registor_arp_trackingcode]" value="<?php echo $this->fetch_registration['registor_arp_trackingcode'] ?>" /> 
				</div>
					
				<!--Template Fields-->

			<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">3</span>&nbsp;&nbsp;Template Fields</h3>
			
					<div style=" padding:5px 5px 5px 5px;-moz-border-radius:8px; -khtml-border-radius: 8px; -webkit-border-radius:8px; background-color:#F8F8F8;">
					
					<div style="padding:8px 4px 4px 4px;">
						Message to display: <input name="elbpro[registor_msg_to_display]" type="text"  style="width:280px;" value="<?php echo $this->fetch_registration['registor_msg_to_display'] ?>" />
					</div>
					
					<div style="padding:14px 4px 14px 4px;">
						<input name="elbpro[registor_default_chk]" type="checkbox" value="1" <?php echo $default_checked_onRegister; ?> /> &nbsp;Checked Subscribers box by default 
					</div>	
					
					<div id="registor_onlyEmail" style="display:<?php echo $registration_arpOnlyEmail; ?>;">
						<div id="registor_arpSplitName" style="display:<?php echo $registration_arpSplitName; ?>;">

								<table width="100%">
								<tr><td style="font-size:x-small; background-color:#F3F7FB; padding:5px 5px 10px 10px;">
							  <?php echo $this->elbpro_img_information; ?> <b>Instructions</b><br>
							    Selected Autoresponder Service is commanded to split Name into First and Last Name<br>
								<font color="#CC3300">	  (Note: Your visitor Name information will be automagically split into First and Last name.  ) </font>
							  </td></tr>
								</table>
				
						</div>
						
						<div style="padding:8px 4px 4px 4px;display:<?php echo $registration_arpOnlyName; ?>;" id="registor_arpOnlyName">
						</div>
						
					</div>
					
		</div>			
			
			
			
			
			

	<h3 class="enable"><input type="checkbox" value="true" name="elbpro[enable_registor]" id="elbpro_registorActive" <?php echo $enable_registration; ?>  >&nbsp;&nbsp;Enable Subscribe on Registration &nbsp;&nbsp;&nbsp;</h3>	
	
			
			
			
			<table>
				<tr>
				  <td width="137" valign="center"><input name="elbpro[registor_data_submit]" type="submit" value="Save Changes" style="overflow:visible;padding:5px 10px 6px 7px;    background-color: #5872A7; color:#fff;
										background-position: 0 -96px;
										border-color: 1px solid #1A356E; font-weight:bold; cursor:pointer;
										" /></td>
					<td width="709" colspan="2">
					<span style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif">
					1. Click on "Save Changes" button <br>
					2. Go to <strong>Settings &gt;&gt; General</strong>, Find Membership option and <strong>Check on Anyone can registor option</strong> to activate.
					<div style="padding-top:13px;">
					(This is just one time action also, <br> Recommend using server with cURL enabled. </strong>)<br>
					</div>
					</span>
				  </td>
			  </tr>
				
			</table>			

</form>		
<br><br>