<link href="<?php echo ELBPRO_FULLPATH;?>lib/admin-pg/css/tooltip.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo ELBPRO_FULLPATH; ?>lib/admin-pg/js/configure-optin.js"></script>
<script type="text/javascript" src="<?php echo ELBPRO_FULLPATH; ?>lib/admin-pg/js/jscolor.js"></script>
<style>
.elbp-main {  border-left: 1px solid #d8d8d8; border-right: 1px solid #d8d8d8; border-bottom: 1px solid #d8d8d8; }
#elbp-nav  { float: left; position: relative; z-index:0; width: 160px; border-left: 1px solid #d8d8d8;  border-top: 1px solid #d8d8d8; background-color: #f1f1f1;}
#elbp-nav li { margin-bottom:0}
#elbp-nav ul li a, #elbp-nav ul li a:visited  { display: block; padding: 10px 10px 10px 15px; font-family: Georgia, Serif; font-size: 13px; text-decoration: none; color: #797979; border-bottom: 1px solid #d8d8d8; height:auto; cursor:pointer;  } 
#elbp-nav ul li.current a, #elbp-nav ul li a:hover  { color:#21759b; background-color: #fff; height:auto; }

.elbp-content  { float: left; min-height: 550px; width: 595px; margin-left: -1px; padding: 0 14px; font-family: "Lucida Grande", Sans-serif; background-color: #fff; border: 1px solid #d8d8d8; }
.elbp-content .section { margin-bottom: 5px;}
.elbp-content .section h3.heading  { font-family: ;margin: 10px 0 0px 0; padding: 7px 0px; border-bottom: 1px solid #e7e7e7; }
.elbp-content .section .controls  { float: left; width: 345px; margin: 0 15px 0 0; }
.elbp-content .section .explain  { float: left; width: 225px; padding: 0 10px 0 0; font-size: 11px; color: #999999; }
.elbp-content .section-checkbox .controls { width:25px}
.elbp-content .section-checkbox .explain { width:540px}
.elbp-content .section-color .controls { width:125px}
.elbp-content .section-color .explain { width:440px}

.elbp-section { margin-bottom: 10px;}
.elbp-section h3.heading  { font-family: ;margin: 10px 0 10px 0; padding: 7px 0px; border-bottom: 1px dotted #CCCCCC; color:#000000; font-weight: bold; font-family:"Helvetica Neue",Arial,helvetica,sans-serif; font-size:13px }  /*border-bottom: 1px dotted #e7e7e7*/


h3.enable  { font-family: ;margin: 10px 0 10px 0; padding: 7px 0px; }

#support-links { 
background-color:#D7E6F2;  
height:32px; 
padding:10px 20px 0 20px; 
} <!--E7E6E7-->

.placementLinks {
	padding-bottom:0px; 
	color:#2D5A84;
}
.placementLinks a{
	cursor:pointer;
	color:#1111CC;
	text-decoration:none;
}
.placementLinks a:hover{
	color:#D54E21;
}

</style>
<script type="text/javascript">
function __elbpro_autofillin(fldname,value){ 
	document.getElementById(fldname).value = value;
}

function __elbpro_ChkBlankArp(dropdnID,option_option) { 
	var arpID = document.getElementById(dropdnID).value;
	var findServiceIsActive = document.getElementById(option_option).checked;
	
	if( findServiceIsActive == true ) {
		if (  arpID == 0 ) {
				alert('Please Select Your Autoresponder Service From DropDown Box');
				return false;
			}
	}
	
}

function __elbpro_customChooseThemes(current, type1, type2) {
	var elbpro_type_1  = document.getElementById(type1);
	var elbpro_type_2  = document.getElementById(type2);
	if ( curr == 1 ) {
		elbpro_type_1.style.display = 'block';
		elbpro_type_2.style.display = 'none';
	} else if ( curr == 2 ) {
		elbpro_type_1.style.display = 'none';
		elbpro_type_2.style.display = 'block';
	}
}

function __elbpro_ImgSwitchType(curr,type1,type2,type3) { 
	var elbpro_type_1  = document.getElementById(type1);
	var elbpro_type_2  = document.getElementById(type2);
	var elbpro_type_3  = document.getElementById(type3);
	if ( curr == 1 ) {
		elbpro_type_1.style.display = 'block';
		elbpro_type_2.style.display = 'none';
		elbpro_type_3.style.display = 'none';
	} else if ( curr == 2 ) {
		elbpro_type_1.style.display = 'none';
		elbpro_type_2.style.display = 'block';
		elbpro_type_3.style.display = 'none';
	} else if ( curr == 3 ) {
		elbpro_type_1.style.display = 'none';
		elbpro_type_2.style.display = 'none';
		elbpro_type_3.style.display = 'block';
	}
}

<!--
function __elbpSelectTab(currtab) { 
	for ( i=1; i<=11; i++ ) {
		if ( i == currtab ) {
			document.getElementById('elbptab-'+i).style.display = 'block';
			document.getElementById('elbptabhead-'+i).style.position = 'relative';
			document.getElementById('elbptabhead-'+i).style.top = '1px';
			document.getElementById('elbptabhead-'+i).style.background = "#ffffff";
			document.getElementById('elbptabhead-'+i).style.color = "#21759b"; //D1700E";
		} else {
			document.getElementById('elbptab-'+i).style.display = 'none';
			document.getElementById('elbptabhead-'+i).style.position = 'relative';
			document.getElementById('elbptabhead-'+i).style.top = '1px';
			document.getElementById('elbptabhead-'+i).style.background = "#f1f1f1";
			document.getElementById('elbptabhead-'+i).style.color = "#797979";
		}
	}
}//-->

<!--
function ShowControl(id,Source,mainID,tagID, bgColor) { 
	if (Source=="1"){
		if (document.layers) document.layers[''+id+''].visibility = "show";
		else if (document.all) document.all[''+id+''].style.visibility = "visible";
		else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "visible";
		document.getElementById(''+mainID+'').style.background  = bgColor;

		if (document.layers) document.layers[''+tagID+''].visibility = "show";
		else if (document.all) document.all[''+tagID+''].style.visibility = "visible";
		else if (document.getElementById) document.getElementById(''+tagID+'').style.visibility = "visible";
		document.getElementById(''+tagID+'').style.display  = "block";
		
	}
	else if (Source=="0"){
		if (document.layers) document.layers[''+id+''].visibility = "hide";
		else if (document.all) document.all[''+id+''].style.visibility = "hidden";
		else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "hidden";
		document.getElementById(''+mainID+'').style.background  = bgColor;
		
		if (document.layers) document.layers[''+tagID+''].visibility = "hide";
		else if (document.all) document.all[''+tagID+''].style.visibility = "hidden";
		else if (document.getElementById) document.getElementById(''+tagID+'').style.visibility = "hidden";
		document.getElementById(''+tagID+'').style.display  = "none";
	}
}


function elbpro_Overlay(curobj, subobjstr, opt_position){
	if (document.getElementById){
		var subobj=document.getElementById(subobjstr)
		subobj.style.display=(subobj.style.display!="block")? "block" : "none"
		var xpos=sbmgGetPosOffset(curobj, "left")+((typeof opt_position!="undefined" && opt_position.indexOf("right")!=-1)? -(subobj.offsetWidth-curobj.offsetWidth) : 0) 
		var ypos=sbmgGetPosOffset(curobj, "top")+((typeof opt_position!="undefined" && opt_position.indexOf("bottom")!=-1)? curobj.offsetHeight : 0)
		subobj.style.left=xpos+"px"
		subobj.style.top=ypos+"px"
		return false
	} else {
		return true
	}
}
function elbpro_OverlayClose(subobj){
	document.getElementById(subobj).style.display = "none";
}

function elbpro_GetOrdinal(number,ordinal) {
	number = parseInt(number.value);
	if ( number % 10 == 1 && number % 100 != 11 ) {
		ordinal.innerHTML = 'st';
	} else if ( number % 10 == 2 && number % 100 != 12 ) {
		ordinal.innerHTML = 'nd';
	} else if ( number % 10 == 3 && number % 100 != 13 ) {
		ordinal.innerHTML = 'rd';
	} else {
		ordinal.innerHTML = 'th';
	}
}


//-->

</script>
<div id="placementClosePopupmsgtxt"></div>
<div style="height:auto;"> 

	<!--Left Content-->
	<div style="width:785px;margin:15px;position:relative;">
	
		<div style="padding-top:1px; padding-bottom:10px;">
			<h3>
				<span style="padding-bottom:0px; color:#2D5A84;">
					Choose Optin Display Position
				</span>
			</h3>
			<span style="font-size:11px;border-bottom:1px dotted #C2CFF1; padding-bottom:8px; width:90%;"> Choose best display position</span>
		</div>
		<br>
		
		<div>
		<?php include('process.php'); ?>
		</div>
		
		<br>
		
		
		<!--Display Data Process Message-->
		<div id="placementOpenPopupmsgtxt" style="background-color:#FFFFAA; border:1px solid #FFAD33; height:24px; padding:5px 20px 15px 20px; margin-bottom:5px; display:none; font-family: Calibri, Tahoma, Geneva, sans-serif; font-size:12px; ">
			<ul>
                <li style="float:right;"><a href = "javascript:void(0)" onclick = "document.getElementById('placementOpenPopupmsgtxt').style.display='none';document.getElementById('placementClosePopupmsgtxt').style.display='none'"><?php echo $this->elbpro_img_placement_msg; ?></a></li>
                <li style="float:left;font-family:Arial, Helvetica, sans-serif;font-size:12px; color:#333333;"><?php echo $this->elbpro_img_tick.'&nbsp;&nbsp;'.$this->elbpro_optinProcess_placement_msg; ?>
				 </li>
			</ul>
		</div>
		<!--Eof Data Process Message-->
		
		<div id="support-links">
                <div style="float:left;"><input style="background-color:#005ED7;overflow:visible;cursor:pointer; color:#FFFFFF; padding:2px 4px 2px 4px;" type="button" value="Go Back" onclick="window.location = '<?php echo $this->wp_plugin_page.'?'.'page='.$_GET['page'].'&elbpg=mof'; ?>'"  title="Go back one page" /></div>
				<div align="right"><span class="placementLinks" style="font-size:10px;"><a href="http://community.wpsmartapps.com/" target="_blank">Send Us Feedback</a></span>&nbsp;&nbsp;<?php echo $this->elbpro_img_leftarrow; ?></div>
		</div>
		
				
			<div id="elbp-nav">
				<ul>
					<li class="<?php echo  ($this->footer_placement?$this->footer_placement:$this->default_placement); ?>" onclick="__elbpSelectTab(1)"><a id="elbptabhead-1">Footer Bar <span style="color:#CC3300">(PRO)</span></a></li>
					<li class="<?php echo $this->popup_placement; ?>" onclick="__elbpSelectTab(2)"><a id="elbptabhead-2" >Popup Box <span style="color:#CC3300">(PRO)</span></a></li>
					<li class="<?php echo $this->withinpost_placement; ?>" onclick="__elbpSelectTab(3)"><a id="elbptabhead-3" >Within Bottom Of Post <span style="color:#CC3300">(PRO)</span></a></li>
					<li class="<?php echo $this->chkbox_placement; ?>" onclick="__elbpSelectTab(4)"><a id="elbptabhead-4" >Subscribe Check Box Before Comment Box <span style="color:#CC3300">(PRO)</span></a></li>
					<li onclick="__elbpSelectTab(5)"><a id="elbptabhead-5" >Optin Form Inside the Comment Box <span style="color:#CC3300">(PRO)</span></a></li>
					<li onclick="__elbpSelectTab(6)"><a id="elbptabhead-6" >Sidebar <span style="color:#14DE0A">(LITE)</span></a></li>
					<li onclick="__elbpSelectTab(7)"><a id="elbptabhead-7" >Subscribe Check Box On User Register Page <span style="color:#14DE0A">(LITE)</span></a></li>
					<li onclick="__elbpSelectTab(8)"><a id="elbptabhead-8" >Exit Popup <span style="color:#CC3300">(PRO)</span></a></li>
					<li onclick="__elbpSelectTab(9)"><a id="elbptabhead-9" >Send Email to First Commentator <?php if( $proactive == 1 ){ ?><span style="color:#14DE0A">(LITE)</span><?php } else { ?><span style="color:#CC3300">(PRO)</span><?php } ?> </span></a></li>
					<li onclick="__elbpSelectTab(10)"><a id="elbptabhead-10" >Squeeze Page <span style="color:#CC3300">(PRO)</span></a></li>
					<li onclick="__elbpSelectTab(11)"><a id="elbptabhead-11" >Facebook Connect <span style="color:#CC3300">(PRO)</span></a> </li>
					
					
				</ul>		
			</div>
			
			<!--Footer Bar-->
			<div class="elbp-content" id="elbptab-1">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/footer.jpg"  />
				</div>			
			</div>
			
			<!--Popup-->
			<div class="elbp-content" id="elbptab-2" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/popup.jpg"  />
				</div>			
			</div>
			
			<!--Within Buttom Of Post-->
			<div class="elbp-content" id="elbptab-3" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/wbop.jpg"  />
				</div>			
			</div>
			
			<!--Subscribe Check box before comment box-->
			<div class="elbp-content" id="elbptab-4" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/chkbox.jpg"  />
				</div>			
			</div>
			
			<!--Optin Form inside the Comment box-->
			<div class="elbp-content" id="elbptab-5" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/icbox.jpg"  />
				</div>			
			</div>
			
			<!--Sidebar-->
			<div class="elbp-content" id="elbptab-6" style="display:none;">
				<div class="elbp-section">
					<?php include('co-sidebar.php'); ?>
				</div>			
			</div>
			
			<!--Subscribe on Registeration-->
			<div class="elbp-content" id="elbptab-7" style="display:none;">
				<div class="elbp-section">
					<?php include('co-register.php'); ?>
				</div>			
			</div>
			
			<!--Exit popup-->
			<div class="elbp-content" id="elbptab-8" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/exitpopup.jpg"  />
				</div>			
			</div>
			
			<!--Email To First Commentators-->
			<div class="elbp-content" id="elbptab-9" style="display:none;">
				<div class="elbp-section">
				<?php if( $proactive == 1 ){ ?>
				<?php include('co-sendemail.php'); ?>
				<?php } else { ?><img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/email.jpg"  /><?php } ?>
				</div>			
			</div>
			
			<!--Squeeze page-->
			<div class="elbp-content" id="elbptab-10" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/squeeze.jpg"  />
				</div>			
			</div>
			
			<!--Facebook Connect-->
			<div class="elbp-content" id="elbptab-11" style="display:none;">
				<div class="elbp-section">
					<img src="<?php echo ELBPRO_LIBPATH; ?>admin-pg/img/facebook.jpg"  />
				</div>			
			</div>
					
	</div>	
</div>
<img src='http://wpsmartapps.com/sta5/TY_via_ip.php?id=3V9dnepUWqk%3D&sta_amt=0' width='0' height='0'>
<br><br><br><br>
