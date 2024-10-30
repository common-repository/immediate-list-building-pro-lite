<?php global $wpdb; ?>
<link href="<?php echo ELBPRO_FULLPATH;?>lib/admin-pg/css/tooltip.css" rel="stylesheet" type="text/css">
<style type="text/css">
td {
	padding:8px 8px 8px 8px;
	background:#FFFFFF;
	text-align:center;
}
</style>
<div style="height:auto;"> 
	<!--Left Content-->
	<div style="float:left; width:60%">
	  <div>
	  
	  <div style="float:right" >
	  
	  	  <input type="submit" name="reset_stats"  value="Market" style="background-color:#D95E46; color:#ffffff; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #BC2507; 	padding:10px 10px 10px 10px;overflow:visible; 
" onclick="window.location = '<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mkt'; ?>'" />
&nbsp;
	  
	  <input type="submit" name="reset_stats"  value="Goto >> Manage Optin Form" style="background-color:#77B22A; color:#ffffff; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #44b324; 	border-top:1px solid #6fe03b; border-bottom:1px solid #1e5f0d; 	padding:10px 10px 10px 10px;overflow:visible; 
" onclick="window.location = '<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mof'; ?>'" />
	  </div>
	  
			<h3>
				<span style="padding-bottom:0px; color:#2D5A84;">
					Subscriber Progress Stats
				</span>
			</h3>
		  <span style="font-size:11px;border-bottom:1px dotted #C2CFF1; padding-bottom:8px; width:90%; font-weight:"> A quick overview of how your list are doing 
		  <!--Track Impressions, Submit Button Clicks and CTR(%)--> </span>		
	 </div>
	
		<br>
		<table cellpadding="7" cellspacing="1" width="100%" style="margin:5px 0px 5px 0px;background-color:#F1F1F1;font-size:12px;">
          <tr>
            <td class="optinName" width="36%" style="font-weight:bold;background:#D1DCF9; text-align:left;"><span style="font-size:14px">Optin Placements</span></td>
            <td class="optinName" width="13%" style="font-weight:bold;font-size:9px;background:#D1DCF9;">
			<span><a class="ilbp_tooltip" href="#" style="text-decoration:none;">Impressions<span class="classic">Total number of times optin form disply</span></a></span>
			</td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;">
			<span><a class="ilbp_tooltip" href="#" style="text-decoration:none;">Subscriber<span class="classic">Total numbar of active subscriber</span></a></span>
			</td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;">
			<span><a class="ilbp_tooltip" href="#" style="text-decoration:none;">SR(%)<span class="classic"><b>Subscriber Rate</b> based on Impression</span></a></span>
			</td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;"><span>Status</span></td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;"><span>Reset SR%</span></td>
          </tr>
		  
		  
		  
          <tr>
            <td style="text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><span>Sidebar</span></td>
            <td style="text-align:center;"><?php echo $this->fetch_sidebarImpsionStats; ?></td>
            <td ><?php echo $this->fetch_sidebarClickStats; ?></td>
            <td ><?php echo $sidebar_crt; ?></td>
            <td style="font-size:xx-small;color:<?php echo $sidebarStatusColor; ?>;"><?php echo $sidebarActiveStatus; ?> </td>
            <td style="font-size:xx-small;color:<?php echo $sidebarStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=0101" onclick="return confirm('Are you sure you want to reset clicks?');" title="Reset SR%">Reset</a></span></td>
          </tr>
		  
          <tr>
            <td style="text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><span>Optin Inside Comment Box</span></td>
            <td style="text-align:center;"><?php echo $this->fetch_insideCommentImpsionStats; ?></td>
            <td><?php echo $this->fetch_insideCommentClickStats; ?></td>
            <td><?php echo $insideComment_crt; ?></td>
            <td style="font-size:xx-small;color:<?php echo $insideCommentStatusColor; ?>;"><?php echo $insideCommentActiveStatus; ?> </td>
            <td style="font-size:xx-small;color:<?php echo $insideCommentStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=0202" title="Reset SR%" onclick="return confirm('Are you sure you want to reset clicks?');">Reset</a></span></td>
          </tr>
		  
		  
		  <!--Footer Bar-->
          <tr>
            <td style="text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;font-weight:bold; background-color:#E5E5FD;"><span>Footer Bar</span></td>
            <td style="text-align:center; background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="14%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="15%" style=" background-color:#EEEEFF;">&nbsp;</td>
          </tr>
		  <?php
		  $ilbp_footerbar_result = $wpdb->get_results( $Hfooterbar_rs, ARRAY_A );
		  if( $ilbp_footerbar_result ) { 
			 foreach ( $ilbp_footerbar_result as $Fbar ) {
				 if ( $Fbar['impsionStats'] > 0 ) $Fb_crt = ($Fbar['clickStatus']/$Fbar['impsionStats'])*100;
						else $Fb_crt = 0;
						$Fb_crt = sprintf("%01.2f", $Fb_crt);	
						
						if( $Fbar['flag'] == '1' ) {
							$FBStatus = 'Activated';
							$FBStatusColor = '#DB9958';
						} else {
							$FBStatus = 'Deactivated';
							$FBStatusColor = '#A9A8A8';
						}
					  ?>
					  <tr>
						<td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><?php echo $this->elbpro_img_sub; ?>&nbsp;<span><?php echo $Fbar['optin_name']; ?> <small style="color:#CCCCCC">(<?php echo $Fbar['id']; ?>)</small></span></td>
						<td style=" text-align:center;"><?php echo $Fbar['impsionStats']; ?></td>
						<td width="11%"><?php echo $Fbar['clickStatus']; ?></td>
						<td width="11%"><?php echo $Fb_crt; ?></td>
						<td width="14%" style=" font-size:xx-small;color:<?php echo $FBStatusColor; ?>;"><?php echo $FBStatus; ?>  </td>
						<td width="15%" style=" font-size:xx-small;color:<?php echo $FBStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=<?php echo $Fbar['id']; ?>" title="Reset SR%" onclick="return confirm('Are you sure you want to reset clicks?');">Reset</a></span></td>
					  </tr>
					  <?php 
					  
					  
			 }
		  } else {
		  ?>
		  <tr>
            <td colspan="6" style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif; font-size:11px; color: #666666;">&nbsp;No any records related to Footer Bar added  yet</td>
          </tr>

		  <?php 
		  }
		  ?>
		  
		  <!--Popup Box-->
          <tr>
            <td style="text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;font-weight:bold; background-color:#E5E5FD;"><span>Popup Box</span></td>
            <td style="text-align:center; background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="14%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="15%" style=" background-color:#EEEEFF;">&nbsp;</td>
          </tr>
		  <?php
		  $ilbp_popup = $wpdb->get_results( $HpopupBox_rs, ARRAY_A );
		  if( $ilbp_popup ) { 
			foreach ( $ilbp_popup as $PBox ) {
				
				if ( $PBox['impsionStats'] > 0 ) $PBox_crt = ($PBox['clickStatus']/$PBox['impsionStats'])*100;
				else $PBox_crt = 0;
				$PBox_crt = sprintf("%01.2f", $PBox_crt);	
				
				if( $PBox['flag'] == '1' ) {
					$PBoxStatus = 'Activated';
					$PBoxStatusColor = '#DB9958';
				} else {
					$PBoxStatus = 'Deactivated';
					$PBoxStatusColor = '#A9A8A8';
				}
			  ?>
			  <tr>
				<td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><?php echo $this->elbpro_img_sub; ?>&nbsp;<span><?php echo $PBox['optin_name']; ?> <small style="color:#CCCCCC">(<?php echo $PBox['id']; ?>)</small></span></td>
				<td style=" text-align:center;"><?php echo $PBox['impsionStats']; ?></td>
				<td width="11%"><?php echo $PBox['clickStatus']; ?></td>
				<td width="11%"><?php echo $PBox_crt; ?></td>
				<td width="14%" style=" font-size:xx-small;color:<?php echo $PBoxStatusColor; ?>;"><?php echo $PBoxStatus; ?> </td>
				<td width="15%" style=" font-size:xx-small;color:<?php echo $PBoxStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=<?php echo $PBox['id']; ?>" title="Reset SR%" onclick="return confirm('Are you sure you want to reset clicks?');">Reset</a></span></td>
			  </tr>
			  <?php 
		  
			}
		  } else {
		  ?>
		  <tr>
            <td colspan="6" style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif; font-size:11px; color: #666666;">&nbsp;No any records related to Popup Box added  yet</td>
          </tr>

		  <?php 
		  }
		  ?>
		  
		  <!--Within Post-->
          <tr>
            <td style="text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;font-weight:bold; background-color:#E5E5FD;"><span>Within Bottom Of Post</span></td>
            <td style="text-align:center; background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="11%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="14%" style=" background-color:#EEEEFF;">&nbsp;</td>
            <td width="15%" style=" background-color:#EEEEFF;">&nbsp;</td>
          </tr>
		  <?php
		$ilbp_wbop = $wpdb->get_results( $Withinpost_rs, ARRAY_A );
		if( $ilbp_wbop ) { 
			foreach ( $ilbp_wbop as $within_post ) {
		   		
			if ( $within_post['impsionStats'] > 0 ) $withinpost_crt = ($within_post['clickStatus']/$within_post['impsionStats'])*100;
			else $withinpost_crt = 0;
			$withinpost_crt = sprintf("%01.2f", $withinpost_crt);	
			
			if( $within_post['flag'] == '1' ) {
				$withinpost_Status = 'Activated';
				$withinpost_StatusColor = '#DB9958';
			} else {
				$withinpost_Status = 'Deactivated';
				$withinpost_StatusColor = '#A9A8A8';
			}
		  ?>
          <tr>
            <td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><?php echo $this->elbpro_img_sub; ?>&nbsp;<span><?php echo $within_post['optin_name']; ?> <small style="color:#CCCCCC">(<?php echo $within_post['id']; ?>)</small></span></td>
            <td style=" text-align:center;"><?php echo $within_post['impsionStats']; ?></td>
            <td width="11%"><?php echo $within_post['clickStatus']; ?></td>
            <td width="11%"><?php echo $withinpost_crt; ?></td>
            <td width="14%" style=" font-size:xx-small;color:<?php echo $withinpost_StatusColor; ?>;"><?php echo $withinpost_Status; ?> </td>
            <td width="15%" style=" font-size:xx-small;color:<?php echo $withinpost_StatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=<?php echo $within_post['id']; ?>" title="Reset SR%" onclick="return confirm('Are you sure you want to reset clicks?');">Reset</a></span></td>
          </tr>
		  <?php 
		  
			}	
		} else {
		  ?>
		  <tr>
            <td colspan="6" style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif; font-size:11px; color: #666666;">&nbsp;No any records related to Within Bottom Of Post added  yet</td>
          </tr>
		  <?php 
		  }
		  ?>
		  
	  </table>
		<br>
		
		<table cellpadding="7" cellspacing="1" width="100%" style="margin:5px 0px 5px 0px;background-color:#F1F1F1;font-size:12px;">
          <tr>
            <td class="optinName" width="51%" style="font-weight:bold;background:#D1DCF9; text-align:left;"><span style="font-size:14px">Optin Placements</span></td>
            <td width="20%" class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;">
			<span><a class="ilbp_tooltip" href="#" style="text-decoration:none;">Subscriber<span class="classic">Total number of active subscriber</span></a></span>
			</td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;"><span>Status</span></td>
            <td class="optinName" style="font-weight:bold;font-size:9px;background:#D1DCF9;"><span>Control</span></td>
          </tr>
          <tr>
            <td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><span>Subscribe Check Box Before Comment Box </span></td>
            <td style=" text-align:center;"><?php echo $this->fetch_chkboxSubscribers; ?></td>
            <td width="13%" style=" font-size:xx-small;color:<?php echo $chkBoxStatusColor; ?>;"><?php echo $chkBoxActiveStatus; ?></td>
            <td width="16%" style=" font-size:xx-small;color:<?php echo $chkBoxStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=0303"  title="Reset Subscribers" onclick="return confirm('Are you sure you want to reset clicks?');">Reset Clicks</a></span></td>
          </tr>
          <tr>
            <td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;">Subscribe Check box on user Register Page</td>
            <td style=" text-align:center;"><?php echo $this->fetch_registorSubscribers; ?></td>
            <td style=" font-size:xx-small;color:<?php echo $registerStatusColor; ?>;"><?php echo $registerActiveStatus; ?></td>
            <td style=" font-size:xx-small;color:<?php echo $registerStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=0404"  title="Reset Subscribers" onclick="return confirm('Are you sure you want to reset clicks?');">Reset Clicks</a></span></td>
          </tr>
          <tr>
            <td style=" text-align:left;font: 13px/22px 'trebuchet ms',verdana,arial,sans-serif;"><span>Facebook Connect </span></td>
            <td style=" text-align:center;"><?php echo $this->fetch_facebook_subscribers; ?></td>
            <td width="13%" style=" font-size:xx-small;color:<?php echo $facebookStatusColor; ?>;"><?php echo $facebookActiveStatus; ?></td>
            <td width="16%" style=" font-size:xx-small;color:<?php echo $facebookStatusColor; ?>;">&nbsp;<span class="reset"><a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php&cid=0505"  title="Reset Subscribers" onclick="return confirm('Are you sure you want to reset clicks?');">Reset Clicks</a></span></td>
          </tr>
		  
		  
        </table>
		
		
		<br>
		
		<div class="warning_homepg" style="background:#FFFFCC; border:0px;"><em>&nbsp;Warning</em>You may reset click stats to ZERO if you wish. Be very careful not to do this in the middle of a test you care about, though. Once done, it cannot be undone. </div>
		
		<br>
		
	</div>
	
	
	
	<!--Right Content-->
	<div class="elbpro_sidebar_right">
	
	<h4 style="color:#CC0000;"> Installed LITE Version: <span style="color:#009933; font-size:16px;"><?php echo ELBPRO_VERSION; ?></span>  </h4>
	<h4 style="color:#CC0000;"> PRO Verson: <span style="color:#009933; font-size:16px;">2.5 <i></i></span> 
				&nbsp;
		  	  <input type="submit" name="reset_stats"  value="Upgrade Now" style="background-color:#FFD007; color:#003552; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #BC2507; padding:8px;overflow:visible; 
" onclick="window.location = 'http://marketplace.wpsmartapps.com/7/immediate-list-building-pro/'" />

	</h4>
	<!--<ul class="elbpro_sidebar_right_menu">
		<li style="color:#CC0000;"><?php //echo ELBPRO_NAME; ?> <?php //echo ELBPRO_VERSION; ?></li>
		<li style="color: #666666;">by <a href="http://www.WpSmartApps.com/" target="_blank">WpSmartApps.com</a></li>
	</ul>-->
	
	<h4 style="border-top:1px dashed #C2CFF1; padding-top:10px;color:#CC0000;">&nbsp;Help Resources</h4>
	<ul class="elbpro_sidebar_right_menu">
		<li><a href="http://wiki.wpsmartapps.com/" target="_blank">Getting Started Guides</a>
		<div style="padding:5px 0px 5px 0px;color: #666666;">
		A beginner's guide to <?php echo ELBPRO_NAME; ?>
		</div>
		</li>
		<li><a href="http://community.wpsmartapps.com/" target="_blank">Community Support</a><br>
		<div style="padding:5px 0px 5px 0px;color: #666666;">Resources that can help you get your answer fastest</div>
		</li>
	</ul>
	
	
	
	<h4 style="border-top:1px dashed #C2CFF1; padding-top:10px;color:#CC0000;">Affiliate Program</h4>
	<ul class="elbpro_sidebar_right_menu">
		<li>
		Earn 50% commission by promoting <?php echo ELBPRO_NAME;  ?>.
		<a href="http://wpsmartapps.com/affiliates/" target="_blank">Join our affiliate program</a> 
		</li>
		<li><br>
		<div style="border:1px solid #E9E7E7; background-color:#F0EEEE; padding:0px 0px 10px 0px;">
			<form action="" method="post">
			<div style="padding-top:0px;">
				<div style="padding:8px 8px 8px 8px;color:#666666; background:#F0EEEE;">
				Enter your ClickBank ID for branding the <b>Powered by link</b> with your affiliate link.<br><br>
				<strong>ClickBank ID:</strong> <input type="text" name="elbpro[cbid]" id="elbpro_cbid" value="<?php echo $this->fetch_affiliateOptions['cbid']; ?>" style="width:120px; border:1px solid #CCCCCC;" />
				<br><br>Brand Powered by link just by clicking on <b>Join Our Affiliate Program</b> link above.
				</div>
			</div>
			
			<br>
			<hr style="width:80%;" >
			<div style="padding-top:7px;">
				<div style="padding:8px 8px 8px 8px;color:#666666; background:#F0EEEE;">
				<input type="checkbox" name="elbpro[no_pwd_by]" id="no_pwd_by" value="1" <?php echo $dontShowPwdbyLink; ?> /> <strong>Activate "<?php echo ELBPRO_NAME; ?>" link</strong>
				<br><br>We recommend you <b>To Activate</b> powered by link because it will branded with your affiliate link once you enter <b>ClickBank ID</b>. <br><br>That means whenever anyone buys our product from your link you will receive commission.
				</div>
			</div>
			
			<div align="right" style="padding:7px 40px 0px 0px;">
			<input type="submit" name="elbpro[SaveAffiliateData]" value="Submit"  style="background-color:#0852AB; color:#ffffff; font-weight:bold; cursor:pointer;	-moz-box-shadow: 0 2px 3px #3d3d3d; -webkit-box-shadow: 0 2px 3px #3d3d3d; border:1px solid #44b324; 	border-top:1px solid #6fe03b; border-bottom:1px solid #1e5f0d; 	padding:4px 4px 2px 4px;overflow:visible; 
" />
			</div>
			</form>
		</div>	
		</li>
	</ul>	
		
		<h4 style="border-top:1px dashed #C2CFF1; padding-top:10px;">
		<span style="color: #999999; font-size:12px; font-weight:normal;margin: 1.05em 0.3em 0 0;">Follow us:</span>
				<a href="http://www.wpsmartapps.com/twitter" target="_blank"><img src="<?php echo ELBPRO_LIBPATH; ?>images/twitter.png"></a>&nbsp;
				<a href="http://www.wpsmartapps.com/facebook" target="_blank"><img src="<?php echo ELBPRO_LIBPATH; ?>images/facebook.png"></a> 
		</h4>
		

</div>
<br><br><br>