<div style="font-size:11px; background-color:#FFFBCC; padding:10px 10px 10px 10px;font-family: Candara, Tahoma, Geneva, sans-serif;">
			<div style="float:right"> <span class="placementLinks"><a href="http://wiki.wpsmartapps.com/index.php?title=How_to_Add_Sidebar" target="_blank">How to Add Sidebar</a></span></div>
			 <div>&nbsp;</div>
			</div>
<form action="" name="co_sidebar_form" method="post"  enctype="multipart/form-data" onsubmit="return __elbpro_ChkBlankArp('sidebar_arpJsID','elbpro_sidebarActive');" >
					
		<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">1</span>&nbsp;&nbsp;Demo Preview &nbsp;&nbsp;&nbsp;</h3>
					
		<!--Choose Custom Design or Pre-defile template-->					
		<div align="right" style="padding-right:10px;">
			<input name="elbpro[sidebar_design_choise]" type="radio" value="ctmD" onclick="__elbpro_ImgSwitchType('1','sidebar_select_ctmD','sidebar_select_extgD')" <?php echo $choose_design_check1; ?> />&nbsp;<span style="color:#0000FF">Custom Design</span>   
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
			<input name="elbpro[sidebar_design_choise]" type="radio" value="extgD" onclick="__elbpro_ImgSwitchType('2','sidebar_select_ctmD','sidebar_select_extgD')"  <?php echo $choose_design_check2; ?> />&nbsp;<span style="color:#0000FF">Existing Designs</span>
			<br><br>
		</div>
					
					
					
					<!--Select A Template-->
					<div style="-moz-border-radius:8px; -khtml-border-radius: 8px; -webkit-border-radius:8px; background-color:#F8F8F8; padding:10px 5px 5px 10px; margin-bottom:20px;">
					
					<div style="float:right; padding-right:5px; cursor:pointer;">
						<a onClick="__elbpro_ShowHide('sidebar_options', 'sidebar_replace_img', 3, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/close-form.gif" id="sidebar_replace_img" border="0" title="Click to collapse" align="top" /></a>			
					</div>
					
					<div id="sidebar_options" >
						<div align="center" style="padding:4px 4px 8px 4px;" id="sidebar_response_back">
						<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/demo/sidebar/1.jpg"  >
						</div>
					</div>
					
					
		<!--Choose Color Options-->	
		<div style="padding:0px 4px 4px 4px; ">
			&nbsp;&nbsp;Color Options
		</div>
		
		<div id="sidebar_select_ctmD" style="display:<?php echo $display_ctm_block; ?>;padding:10px 4px 10px 25px;background-color:#F8F8F8; margin-bottom:20px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
		
				<span style="color:#CC3300; font-weight:bold; font-size:14px;">ONlY On PRO Version</span> <a href="http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/" target="_blank"><strong>UPGRADE NOW</strong></a>
				
		</div>
		
		
<div id="sidebar_select_extgD" style="display:<?php echo $display_extgD_block; ?>;padding:10px 4px 10px 25px;background-color:#F8F8F8; margin-bottom:20px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
			<table cellspacing="1" cellpadding="3" border="0" align="center" width="100%" >
			<tbody><tr><td valign="top">
			<table cellpadding="3" cellspacing="1" border="0" width="100%" style="padding:0;">
				<tr>
				  <td width="19%"><input name="elbpro[sidebar_bg_color]" type="radio" value="1" <?php echo $sidebar_bg_checked1?$sidebar_bg_checked1:'checked'; ?> />&nbsp;<input type="button" style="background-color:#2D6493; border:0px; width:20px;" /> 
				    Blue</td>
				  <td width="20%"><input name="elbpro[sidebar_bg_color]" type="radio" value="2" <?php echo $sidebar_bg_checked2; ?> />&nbsp;<input type="button" style="background-color:#880909; border:0px; width:20px;" /> Red</td>
				  <td width="22%"><input name="elbpro[sidebar_bg_color]" type="radio" value="3" <?php echo $sidebar_bg_checked3; ?>  />&nbsp;<input type="button" style="background-color:#414141; border:0px; width:20px;" /> Black</td>
				  <td width="21%"><input name="elbpro[sidebar_bg_color]" type="radio" value="4" <?php echo $sidebar_bg_checked4; ?>  />&nbsp;<input type="button" style="background-color:#e570e7; border:0px; width:20px;" /> Pink</td>
				  <td width="18%"><input name="elbpro[sidebar_bg_color]" type="radio" value="5" <?php echo $sidebar_bg_checked5; ?> />&nbsp;<input type="button" style="background-color:#7DA934; border:0px; width:20px;" /> Green</td>
			  </tr>
		   </table> 
			</td></tr>
			</tbody></table>
		</div>		
					
					
					
					
		<!--Choose Submit Button Design-->	
		<div style="padding:0px 4px 4px 4px; ">
			<input name="elbpro[sidebar_submitbtn_chg]" type="checkbox" value="1" / onclick="__elbpro_showHidediv(this,'sidebar_customBtnDesign','sidebar_customBtnDesign')" <?php echo $sidebar_change_submitbtn_checked; ?> >&nbsp;&nbsp;Choose submit button design
			<br>
			<div style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif; padding-left:30px;">
			Enabling this feature will replace system default button design. 
			</div>
		</div>
		
		<!--Hide :: Submit Button Options -->										
		<div id="sidebar_customBtnDesign" style="display:<?php echo $sidebar_open_btm_box?$sidebar_open_btm_box:'none' ?>;padding:10px 4px 10px 25px;background-color:#F8F8F8; margin-bottom:20px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
			<table cellspacing="1" cellpadding="3" border="0" align="center" width="100%" >
			<tbody><tr><td valign="top">
			<table cellpadding="3" cellspacing="1" border="0" width="100%" style="padding:0;">
				<tr>
				  <td><input name="elbpro[sidebar_replaceSubmit_btn]" type="radio" value="1" <?php echo $sidebar_submitbtn_checked1?$sidebar_submitbtn_checked1:'checked'; ?> />&nbsp;&nbsp;<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/demo/sidebar/btn_1.jpg"  ></td>
				  <td>			<br><br>	<span style="color:#CC3300; font-weight:bold; font-size:14px;">Other Button Option Available Only On Pro Version</span> <a href="http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/" target="_blank"><strong>UPGRADE NOW</strong></a>
</td>
				  <td></td>
			  </tr>
				<tr>
				  <td  style="padding-top:10px;"></td>
				  <td  style="padding-top:10px;"></td>
				  <td  style="padding-top:10px;"></td>
				</tr>
		   </table> 
			</td></tr>
			</tbody></table>
		</div>	
					
					
					
					
					
				
				</div>
					
					<!--Eof Select A Template-->
					
					<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">2</span>&nbsp;&nbsp;Connect Template With Your Autoresponder Service</h3> 
					<div class="option" style="padding-bottom:10px;">
					<?php $this->__elbpro_autoresponderComboBox( 'elbpro[sidebar_arp]', ''.$this->fetch_sidebarOptions['sidebar_arp'].'','sidebar_arpJsID','sidebar_dropdown_responsebk', 'sidebar_arpSplitName','sidebar_arpOnlyName','sidebar_onlyEmail','sidebar_trackingcode' ); ?> <span id="sidebar_dropdown_responsebk"></span>
					&nbsp;&nbsp;&nbsp;<span style="font-size:xx-small; color:#FF0000; vertical-align:top;">REQUIRED</span>
					</div>
					
					<div style="padding:9px 4px 15px 4px; display:<?php echo $sidebar_arpTrackingCode; ?>;" id="sidebar_trackingcode">
						Tracking Code: <input type="text" style="width:200px; background:#FFFFCC;" name="elbpro[sidebar_arp_trackingcode]" value="<?php echo $this->fetch_sidebarOptions['sidebar_arp_trackingcode']; ?>" /> 
					</div>
					

					<!--Template Fields-->
					<h3 class="heading"><span class="elbpro_step_indicator elbpro_step_active">3</span>&nbsp;&nbsp;Template Fields</h3>
					<div style=" padding:5px 5px 5px 5px;-moz-border-radius:8px; -khtml-border-radius: 8px; -webkit-border-radius:8px; background-color:#F8F8F8;">
					
					
						<div style="padding:8px 4px 4px 4px;">
							Title Text: <input name="elbpro[sidebar_title_txt]" type="text"  style="width:280px;" value="<?php echo $this->fetch_sidebarOptions['sidebar_title_txt']; ?>" />
						</div>
												
						<div style="padding:8px 4px 4px 4px;">
							<table>
								<tr style="padding:8px 4px 4px 4px;">
									<td width="82" valign="middle">Body Text:</td>
									<td colspan="2">
								<textarea name="elbpro[sidebar_body_txt]" cols="45" rows="3"><?php echo $this->fetch_sidebarBodytxt ; ?></textarea>									</td>
								</tr>
								<tr style="padding:8px 4px 4px 4px;">
								  <td valign="middle">&nbsp;</td>
								  <td width="41">&nbsp;<?php echo $this->elbpro_img_arrowleft; ?></td>
							      <td width="254"><span style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif">Supports HTML tags</span></td>
							  </tr>
							</table>
						</div>
												
						<div id="sidebar_onlyEmail" style="display:<?php echo $sidebar_arpOnlyEmail; ?>;">
							<div id="sidebar_arpSplitName" style="display:<?php echo $sidebar_arpSplitName; ?>;">
								<div style="padding:8px 4px 4px 4px;">
									First Name Field Text: <input name="elbpro[sidebar_firstnamefld_txt]" type="text" style="width:280px;background-color:#FFFFCC;" value="<?php echo $this->fetch_sidebarOptions['sidebar_firstnamefld_txt']; ?>" /> 
								</div>
								<div style="padding:8px 4px 4px 4px;">
									Last Name Field Text: <input name="elbpro[sidebar_lastnamefld_txt]" type="text" style="width:280px;background-color:#FFFFCC;" value="<?php echo $this->fetch_sidebarOptions['sidebar_lastnamefld_txt']; ?>" /> 
								</div>
							</div>
							
							<div style="padding:8px 4px 4px 4px; display:<?php echo $sidebar_arpOnlyName; ?>;" id="sidebar_arpOnlyName">
								Name Field Text: <input name="elbpro[sidebar_namefld_txt]" type="text" style="width:280px;background-color:#FFFFCC;" value="<?php echo $this->fetch_sidebarOptions['sidebar_namefld_txt']; ?>" /> 
							</div>
						</div>
	
						<div style="padding:8px 4px 4px 4px;">
							Email Field Text: <input name="elbpro[sidebar_emailfld_txt]" type="text" style="width:280px;background-color:#FFFFCC;" value="<?php echo $this->fetch_sidebarOptions['sidebar_emailfld_txt']; ?>" /> 
						</div>
						
						<div style="padding:8px 4px 4px 4px;">
							Security Note Text: <input name="elbpro[sidebar_security_note]" type="text" style="width:280px;" value="<?php echo $this->fetch_sidebarOptions['sidebar_security_note']; ?>" /> 
						</div>
						
						
						
<div style="padding:8px 4px 4px 4px;">
			<table>
				<tr>
					<td width="160" valign="middle">Submit Button Text:</td>
					<td colspan="2">
			<input name="elbpro[sidebar_submit_txt]" id="sidebar_submitbtn_txt" type="text" style="width:280px;" value="<?php echo $this->fetch_sidebarOptions['sidebar_submit_txt']; ?>"  />														  </td>
		  </tr>
				<tr>
				  <td valign="middle">&nbsp;</td>
				  <td width="25" style="vertical-align:top">&nbsp;<?php echo $this->elbpro_img_arrowleft; ?></td>
				  <td width="430" style="vertical-align:top">
				  
				  <div class="placementLinks">
				  <span style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif"><a onClick="__elbpro_ShowHide('sidebar_predefinetxt', 'sidebarPredefine_txt_img', 2, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/plus-small.gif" id="sidebarPredefine_txt_img" border="0"  align="top" />&nbsp;Pre-define Submit button text</a></span>
				  </div>
				  
				  <div id="sidebar_predefinetxt" style="display:none">
				  
					  <table width="100%" border="0">
						<tr>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Download Now');" style="text-decoration:none; color:#999999;">Download Now</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Get Access Now!');" style="text-decoration:none; color:#999999;">Get Access Now!</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Get Instant Access!');" style="text-decoration:none; color:#999999;">Get Instant Access!</a></td>
						</tr>
						<tr>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Yes! Let Me In Now');" style="text-decoration:none; color:#999999;">Yes! Let Me In Now</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Sign Up Now');" style="text-decoration:none; color:#999999;">Sign Up Now</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','YES! Let Me In!');" style="text-decoration:none; color:#999999;">YES! Let Me In!</a></td>
						</tr>
						<tr>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Get Early Bird Access');" style="text-decoration:none; color:#999999;">Get Early Bird Access</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Get On The Waiting List');" style="text-decoration:none; color:#999999;">Get On The Waiting List</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','YES! Let Me in Early');" style="text-decoration:none; color:#999999;">YES! Let Me in Early</a></td>
						</tr>
						<tr>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Get On The List');" style="text-decoration:none; color:#999999;">Get On The List</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Send Me The Video');" style="text-decoration:none; color:#999999;">Send Me The Video</a></td>
						  <td style="font-size:11px; color:#999999;  font-family:Arial, Helvetica, sans-serif"><a href="javascript:void(0);" onmouseover="__elbpro_autofillin('sidebar_submitbtn_txt','Show Me The Video');" style="text-decoration:none; color:#999999;">Show Me The Video</a></td>
						</tr>
					  </table>
				  </div>
				  </td>
		  </tr>
		  </table>
	</div>						
						
						
						
						
						
																		
						<div style="padding:15px 4px 14px 4px;" class="placementLinks">
<a onClick="__elbpro_ShowHide('sidebarbarMoreFlds', 'sidebar_moreflds_replace_img', 2, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/plus-small.gif" id="sidebar_moreflds_replace_img" border="0"  align="top" /><strong>Show More Fields</strong></a>					
						
						</div>
						
				<div id="sidebarbarMoreFlds" style="display:none;">
	
						  <div id="sidebar_display_uploadImage" style="display:<?php echo $sidebar_displayUploadImage; ?>">
						  	<img src="<?php echo $this->fetch_sidebarOptions['sidebar_temp_image_url']; ?>" border="0"  width="243px" height="270px"> 
						  <br> <br>
						  <input type="button" name="elbpro_insideCommentBox_removeImage" value="Remove Image" style="background-color:#FFCC99;overflow:visible;  font-weight:bold; cursor:pointer; padding:5px 10px 6px 7px;" onclick="__elbpro_removecallImage('sidebar_removeImage','sidebar_ajax_imageRemoveCallBack','sidebar_display_uploadImage','sidebar_display_uploadImageSectionNow','sidebarbarMoreFlds','sidebarURL');" />&nbsp;
						 </div>
						<span id="sidebar_ajax_imageRemoveCallBack"></span> 
				
					<div id="sidebar_display_uploadImageSectionNow" style="display:<?php echo $sidebar_blockUploadImageOption; ?>">	  
					<table cellspacing="1" cellpadding="1" border="0" width="100%" style="padding:5px 5px 5px 5px;">
						  <tbody><tr>
						   <td>
						   <input type="radio" onclick="__elbpro_ImgSwitchType('1','sidebar_url_type1','sidebar_url_type2','sidebar_url_type3')" checked="" value="1" id="url_type_1" name="elbpro[url_type]"> 
						   Image URL &nbsp;&nbsp;     
						   <input type="radio" onclick="__elbpro_ImgSwitchType('2','sidebar_url_type1','sidebar_url_type2','sidebar_url_type3')" value="2" id="url_type_2" name="elbpro[url_type]"> Upload Image From My Computer &nbsp;&nbsp;
						   <input type="radio" onclick="__elbpro_ImgSwitchType('3','sidebar_url_type1','sidebar_url_type2','sidebar_url_type3')" value="3" id="url_type_3" name="elbpro[url_type]"> Upload From URL&nbsp;       </td>
						  </tr>						  
						  <tr>
						   <td>
							<table border="0" width="100%">
							 <tbody><tr>
							  <td style="display:block;" id="sidebar_url_type1">
							  <input type="text" size="70" value="<?php echo $sidebar_uploadImageURL; ?>" id="sidebarURL" name="elbpro[url]"></td>
							  <td style="display:none;" id="sidebar_url_type2">
							  <input type="file" size="35" value="" id="url_local" name="url_local"></td>
							  <td style="display:none;" id="sidebar_url_type3">
							  <input type="text" size="60" value="" id="url_live" name="elbpro[url_live]"></td>
							 </tr>
							  <tr><td style="font-size:x-small; padding:5px 5px 10px 10px;">
							  <div style="background-color:#f1f1f1;padding:5px 5px 5px 10px; margin-right:40px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
							 <?php echo $this->elbpro_img_information; ?> <b>Instructions</b><br>
							  <font color="#CC3300">Strictly Resize Image to: (max width: 110px, max height: 104px) Before Uploading.<br>
							  Also, if possible image type must be on .png format 
							  </font><br>
							  Support Image Type : .jpg, .gif, .png and .bmp <br>
							  <span class="placementLinks"><a href="<?php echo ELBPRO_LIBPATH ?>user-tmp/wbop/elbpro-wbop-image.zip">Download Samle File</a></span> before uploading Image
							  </div>
							  </td></tr>
							</tbody></table></td>
						  </tr>
						</tbody></table>
						</div>
						
												
					</div>
				</div>
					<!--Eof Template Fields-->
					
					<div class="option" style="padding-bottom:10px;">
					</div>
					
					<!--Custom Fields Footer Bar-->
					
<h3 class="heading placementLinks"><span class="elbpro_step_indicator elbpro_step_active">4</span>&nbsp;&nbsp;<a onClick="__elbpro_ShowHide('sidebar_schedule', 'sidebar_schedule_replace_img', 2, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/plus-small.gif" id="sidebar_schedule_replace_img" border="0"  align="top" />Add Custom Fields</a></h3>
					
					<div id="sidebar_schedule" class="innerhide" style="padding-bottom:15px; display:none;">
								
					<?php $randomNum3 = rand(1,999);  ?>
					<input type="hidden" value="1" id="newFldValue1" />
					<div class="innerhide_custom">
	  				
					
					<div style="font-size:11px; font-family:Lucida Grande,Verdana,Arial,Bitstream Vera Sans,sans-serif; background-color:#F3F7FB; padding:10px 5px 10px 10px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
					<?php echo $this->elbpro_img_information; ?> <span style="font-weight: bold;">Instructions</span><br><br> <!--color: rgb(0, 102, 255);-->
	  	<small style=" color:#000000;">1. Field Label is one or two words placed directly inside the field, <br>
		<img src="<?php echo ELBPRO_LIBPATH; ?>images/field-label.png"></small><br>
		<br>
	  <small style="color:#000000;">2. Field Name is one which carries your data, <br> <img src="<?php echo ELBPRO_LIBPATH; ?>images/field-name.jpg"></small><br>
	  
	  	  <small style="color:#CC3300;">Note: Leave blank to disable custom field</small>

				  </div>
	  
	  <div style="margin-top: 6px;" id="collsp_613">
	  
	  <p style="padding:0 0 0 41px">
		  <span style="color:#444444; padding-left:8px; padding-right:80px;"><?php echo $this->elbpro_img_arrow_down; ?>&nbsp;&nbsp;<strong>Field label...</strong></span>&nbsp;&nbsp;
		  <span style="color:#444444; padding-left:5px;"><?php echo $this->elbpro_img_arrow_down; ?>&nbsp;&nbsp;<strong>Field name...</strong></span>
	  </p>
	  
	  <?php 
	  $countsidebarFld = 1;
	  foreach( (array) $this->fetch_sidebarOptions['sidebar_customfields'] as $key => $val ) {
	  //echo $countWithinPostCustomFld; 
	  if( $countsidebarFld == 1 ) { 
	  ?> 
	  
	  <p style='padding: 0 0 0 41px'><input type="text" style="width:150px;" value="<?php echo trim($this->__elbp_op_option_filter($key)); ?>" name="sidebarLabelCustomFld[]" />&nbsp;&nbsp;
	     <input type="text" style="width:150px;" value="<?php echo trim($val); ?>" name="sidebarFieldCustomFld[]" />&nbsp;&nbsp;<a onclick="addCustomFld('<?php echo $randomNum3; ?>','sidebarcustomfld','newFldValue1','sidebarLabelCustomFld[]','sidebarFieldCustomFld[]')" style="text-decoration:none; cursor:pointer;">[+]</a>
	  </p>	
	  
	  <?php 
	  } else { 
	  ?>
	  
<div id="<?php echo 'sidebarCFLD'.+$countsidebarFld; ?>">
	   <div id="<?php echo 'sidebarCFLDinnseDiv'.+$countsidebarFld; ?>">
	  	<p style="padding: 0 0 0 25px">	
	     <a style="text-decoration:none; cursor:pointer" onclick="removeCreateFld('<?php echo 'sidebarCFLDinnseDiv'.+$countsidebarFld; ?>','<?php echo 'sidebarCFLD'.+$countsidebarFld; ?>')">[-]</a>&nbsp;
		 <input type="text" style="width:150px;" value="<?php echo trim($this->__elbp_op_option_filter($key)); ?>"  name="insideCommentBoxLabelCustomFld[]" />&nbsp;&nbsp;
	     <input type="text" style="width:150px;" value="<?php echo trim($val); ?>" name="insideCommentBoxFieldCustomFld[]" />&nbsp;&nbsp;<a onclick="addCustomFld('<?php echo $randomNum3; ?>','sidebarcustomfld','newFldValue1','sidebarLabelCustomFld[]','sidebarFieldCustomFld[]')" style="text-decoration:none; cursor:pointer;">[+]</a>
		 </p>
		 </div>
	</div>	  
	  

		<?php 
		}
		$countsidebarFld++;
		}
		?>	  	
	  
	   
	  </div>
	  <div id='sidebarcustomfld'></div>

	</div>
								
					</div>					
					<!--Eof Custom Fields Footer Bar-->			
			<h3 class="enable" style="padding-top:15px;"><input type="checkbox" value="true" name="elbpro[enable_sidebar]" <?php echo $enable_sidebar; ?> id="elbpro_sidebarActive" >&nbsp;&nbsp;Enable Sidebar&nbsp;&nbsp;&nbsp;</h3>
			
			
			
			<table>
				<tr>
				  <td width="127" valign="middle"><input name="elbpro[sidebar_data_submit]" type="submit" value="Save Changes"  style="overflow:visible;padding:5px 10px 6px 7px;    background-color: #5872A7; color:#fff;
										background-position: 0 -96px;
										border-color: 1px solid #1A356E; font-weight:bold; cursor:pointer;
										" /></td>
					<td width="719" colspan="2">
					<span style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif">
					1. Click on "Save Changes" button <br>
					2. Move to <span class="placementLinks"><a href="<?php echo ELBPRO_SITEURL;?>/wp-admin/widgets.php" target="_blank">Sidebar Widget</a></a>, Drag and drop"<?php echo ELBPRO_NAME; ?>" from Available Widgets to display optin form.
					</span>
					</td>
			  </tr>
				
			</table>
								
</form>	


<br><br><br>

<h3 class="heading placementLinks">&nbsp;&nbsp;Reset Sidebar</h3>

<form action="" name="co_sidebar_reset" method="post"  >

			<table>
				<tr>
				  <td width="127" valign="middle">
				  <input type="hidden" value="1" name="elbpro[reset_sidebar]"  />
				  <input name="elbpro[sidebar_data_reset]" type="submit" value="Reset Sidebar" 
				  onclick="return confirm('Are you sure to \'RESET\' sidebar?');"
				   style="overflow:visible;padding:5px 10px 6px 7px;    background-color:#FF6600; color:#fff;
										background-position: 0 -96px;
										border-color: 1px solid #1A356E; font-weight:bold; cursor:pointer;
										" /></td>
					<td width="719" colspan="2">
					<span style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif">
					1. This option will reconfigure your sidebar again. 
					<br>
					2. Do not use this feature unless you face any technical problem on sidebar. 
					</span>
					</td>
			  </tr>
				
			</table>

</form>


<br><br>