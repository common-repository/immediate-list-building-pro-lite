<style>
.elbpro-sidebar-ctm{
   -moz-border-radius: 3px;
   -khtml-border-radius: 3px;
   -webkit-border-radius: 3px;
	background: #<?php echo $top_bg_color; ?>; 
	background: -moz-linear-gradient(top, #<?php echo $top_bg_color; ?> 0%, #<?php echo $btm_bg_color; ?> 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php echo $top_bg_color; ?>), color-stop(100%,#<?php echo $btm_bg_color; ?>)); 
	background: -webkit-linear-gradient(top, #<?php echo $top_bg_color; ?> 0%,#<?php echo $btm_bg_color; ?> 100%); 
	background: -o-linear-gradient(top, #<?php echo $top_bg_color; ?> 0%,#<?php echo $btm_bg_color; ?> 100%); 
	background: -ms-linear-gradient(top, #<?php echo $top_bg_color; ?> 0%,#<?php echo $btm_bg_color; ?> 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $top_bg_color; ?>', endColorstr='#<?php echo $btm_bg_color; ?>',GradientType=0 ); 
	background: linear-gradient(top, #<?php echo $top_bg_color; ?> 0%,#<?php echo $btm_bg_color; ?> 100%); 
	border:1px solid #<?php echo $btm_bg_color; ?>;
}
</style>
<?php
$optin_form = '
<div align="center">
<div id="elbpro-sidebar-form" class="af-form elbpro-sidebar-'.$sidebar_bg_color_css.'" style="width:100%;">

		<div class="af-header">
			<div class="af-bodyText" style="color:'.$background_1.'">
				'.$this->fetch_sidebarOptions['sidebar_title_txt'].'
				<div class="wp-body" style="color:'.$background_2.'">
					'.$wbop_displayNone.'
					'.$this->fetch_sidebarBodytxt.'
				'.$this->elbpro_ImpressionType( 'elbproSidebar', '' ).'
				</div>
			</div>
		</div>
		
	<div class="af-body af-standards" style="padding-bottom:0px;">
	'.$this->__elbpro_arpOptinFormOnPostAndSidebar( $this->fetch_sidebarOptions['sidebar_arp'], 'text', 'text', 'submit sidebar_btm_'.$sidebar_replace_btn.'', 'elbproSidebar' , 'sidebarInc', 'elbproSidebarEmail','').'
			<div class="af-element privacyPolicy" style="color:'.$background_3.'">
				<span>'.$this->fetch_sidebarOptions['sidebar_security_note'].'</span><br>
				<div class="af-clear"></div>
			</div>
			'.$pwdbyLinkWBOPTmp.'
	</div>

</div>
</div>';
?>