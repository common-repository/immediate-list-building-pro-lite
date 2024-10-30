<div style="font-size:11px; background-color:#FFFBCC; padding:10px 10px 10px 10px;font-family: Candara, Tahoma, Geneva, sans-serif;">
			<div style="float:right"> <span class="placementLinks"><a href="http://wiki.wpsmartapps.com/index.php?title=How_to_Send_Email_to_Your_Commentators" target="_blank">How to Send Email to Your Commentators</a></span></div>
			 <div>&nbsp;</div>
			</div>
<form action="" name="co_email_form" method="post"  enctype="multipart/form-data" >
										
		<!--Choose Custom Design or Pre-defile template-->					
		<div align="right" style="padding-right:10px; padding-top:10px;" class="placementLinks">
		<a onClick="__elbpro_ShowHide('replacementTags', 'emailreplacementTag_img', 2, '<?php echo ELBPRO_LIBPATH;?>');" style="cursor:hand;cursor:pointer"><img src="<?php echo ELBPRO_LIBPATH; ?>images/plus-small.gif" id="emailreplacementTag_img" border="0"  align="top" /><span style="font-size:13px;">Available Replacement Tags</span></a>
		</div>
		
		
					<!--Hide :: Custom Design-->
		<div style="background-color:#F8F8F8; padding:10px 5px 5px 10px; margin-bottom:20px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;display:none;" id="replacementTags" >
		
			<!--First-->
			<div style="padding:4px 4px 4px 4px;">
			<strong>Template Tags:</strong>
			</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Blog post's author's name: <input name="textfield" readonly="" onclick="this.select();" type="text" value="%author_name%" size="40" />
				</div>
				</div>
				
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Blog post's author's email: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%author_email%" size="40" />
				</div>
				</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Commentator's name: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%commentator_name%" size="40" />
				</div>
				</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Commentator's Email: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%commentator_email%" size="40" />
				</div>
				</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Commentator's website: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%commentator_website%" size="40" />
				</div>
				</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Link to the blog post: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%blog_post_link%" size="40" />
				</div>
				</div>
			
				<div style="padding:0px 0px 10px 20px;">
				<div style="padding:4px 4px 4px 4px;">
				Your blog's url: <input name="textfield2" readonly="" onclick="this.select();" type="text" value="%blog_url%" size="40" />
				</div>
				</div>
			
			
		</div>



		<!--Template Fields-->
		<h3 class="heading placementLinks"><span class="elbpro_step_indicator elbpro_step_active">1</span>&nbsp;&nbsp;Email Fields</h3>
					
		<div id="custom_exitpopup_template" style="padding:5px 5px 5px 5px;-moz-border-radius:8px; -khtml-border-radius: 8px; -webkit-border-radius:8px; background-color:#F8F8F8; display:display;">
		
		
		<div style="padding:8px 4px 4px 4px;">
			From Name:&nbsp;&nbsp;<input name="elbpro[email_from_name]" type="text" value="<?php echo $this->fetch_sentEmail_name; ?>" size="35px" /> 
		</div>
		
		<div style="padding:8px 4px 4px 4px;">
			From Email:&nbsp;&nbsp;<input name="elbpro[email_from_email]" type="text" value="<?php echo $this->fetch_sentEmail_email; ?>" size="35px" /> 
		</div>
		
		<div style="padding:8px 4px 4px 4px;">
			Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="elbpro[email_subject]" type="text" value="<?php echo $this->fetch_sentEmail_subject; ?>" size="60px" /> 
		</div>
		
		<div style="padding:8px 4px 4px 4px;">
			<table>
			 <tr style="padding:8px 4px 4px 4px;">
				  <td valign="middle">Message: </td>
				  <td colspan="2"><textarea rows="10" cols="55" name="elbpro[email_content]" ><?php echo $this->fetch_sentEmail_content; ?></textarea></td>
			  </tr>
			</table>
		</div>
		
		
					
		</div>	
		
		<h3 class="heading placementLinks"><span class="elbpro_step_indicator elbpro_step_active">2</span>&nbsp;&nbsp;Send Email Type</h3>
		<div id="custom_exitpopup_template" style="padding:5px 5px 5px 5px;-moz-border-radius:8px; -khtml-border-radius: 8px; -webkit-border-radius:8px; background-color:#F8F8F8; display:display;">
		
		<div style="padding:8px 4px 4px 4px;">
			<input name="elbpro[send_email_type]" type="radio" value="1" <?php echo $sendEmail_type1; ?> />&nbsp;&nbsp;Send email to the first commentator after comment is approved by admin<br>
			<div style="font-size:11px; color:#999999; font-family:Arial, Helvetica, sans-serif; padding-left:30px;">
			Send email immediately if 1st commentator comments again on your blog.
			</div>
		</div>
		
		<div style="padding:8px 4px 4px 4px;">
			<input name="elbpro[send_email_type]" type="radio" value="2" <?php echo $sendEmail_type2; ?> />&nbsp;&nbsp;Send email to the first commentator immediately comment is approved by admin
		</div>
		
		</div>
				
			
	<br>
	<input type="checkbox" value="1" name="elbpro[send_email_active]" <?php echo $enable_sendEmail; ?> >&nbsp;&nbsp;<strong>Enable Send Email to First Commentator</strong> &nbsp;&nbsp;&nbsp;
	<br><br><br>
	

	
			<input name="elbpro[send_email_data_submit]" type="submit" value="Save Changes"   
								  style="overflow:visible;padding:5px 10px 6px 7px;    background-color: #5872A7; color:#fff;
										background-position: 0 -96px;
										border-color: 1px solid #1A356E; font-weight:bold; cursor:pointer;
										"  />&nbsp;&nbsp;
<br><br><br>	


</form>		

		
