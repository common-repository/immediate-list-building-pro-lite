<script language="javascript" type="text/javascript">
/* ---------------------------- */
/* XMLHTTPRequest Enable */
/* ---------------------------- */
function createObject() {
	var request_type;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){  
		request_type = new ActiveXObject("Microsoft.XMLHTTP");
	}else{ 
		request_type = new XMLHttpRequest();
	}
	return request_type;
}// end of function 

var http = createObject();

/* -------------------------- */
/* INSERT */
/* -------------------------- */
var nocache = 0;
function __elbpro_callImage(chkname, optin_form, lib_path, ddwnID, response_back, arpSplitName, arpOnlyName, arpOnlyEmail, arpTrackingCode ) {  
	document.getElementById(response_back).innerHTML = '<img src="<?php echo ELBPRO_FULLPATH;?>lib/images/spinner.gif" border="0" align="absmiddle">&nbsp;<font color="#CC3300" style="font-size:10px;">Processing...</font>';
			
	if( optin_form == 'oddn' ) {
		var ofa_id = document.getElementById(ddwnID).value; 	
		var autoresponder = 'arp';
	}

	nocache = Math.random();

	var check_box_option = document.getElementsByName(chkname);
	// Find checkbox Value
	for (var i=0; i < check_box_option.length; i++)
	   {
	   if (check_box_option[i].checked)
		  {
		  var chkbox_value = check_box_option[i].value;
		  }
	   }

	if( optin_form == 'oddn' ) {
	
	http.open('get', '<?php echo ELBPRO_FULLPATH;  ?>lib/admin-pg/include/template-data/optin-placement-data.php?ofa_id='+ofa_id+'&autoresponder='+autoresponder+'&optin_form='+optin_form+'&nocache='+nocache);

	} else {

	http.open('get', '<?php echo ELBPRO_FULLPATH;  ?>lib/admin-pg/include/template-data/optin-placement-data.php?chkbox_value='+chkbox_value+'&optin_form='+optin_form+'&lib_path='+lib_path+'&nocache='+nocache);
	
	}

	http.onreadystatechange = function insertReply() {
									if(http.readyState == 4){
										// Response Back Actions.
										var response = http.responseText;
										if( optin_form == 'oddn' ) {
											var records = response.split("%");
											var splitname = records['0'];
											var onlyemail = records['1'];
											var tracking_code = records['2'];
											
											// Split Name
											if( splitname == 1 ) {
												document.getElementById(arpSplitName).style.display = 'block';
												document.getElementById(arpOnlyName).style.display = 'none';
											} else {
												document.getElementById(arpSplitName).style.display = 'none';
												document.getElementById(arpOnlyName).style.display = 'block';
											}
											
											// Only Email
											if( onlyemail == 1 ) {
												document.getElementById(arpOnlyEmail).style.display = 'none';
											} else {
												document.getElementById(arpOnlyEmail).style.display = 'block';
											}
											
											// Tracking Code
											if( tracking_code == 'None' || tracking_code == ''   ) {
												document.getElementById(arpTrackingCode).style.display = 'none';
											} else {
												document.getElementById(arpTrackingCode).style.display = 'block';
											}
											
											document.getElementById(response_back).innerHTML = '';
										
										} else {	
											document.getElementById(response_back).innerHTML = response;
										}	
									}
								}
	http.send(null);
}

/* -------------------------- */
/* REMOVE IMAGE */
/* -------------------------- */
var https = createObject();
var nocache2 = 0;
function __elbpro_removecallImage( optinform, remove_img_response_back, display_uploadImage, display_uploadImageSectionNow, templateMoreFlds, imageURL, imgFldName ) { 

	document.getElementById(remove_img_response_back).innerHTML = '<img src="<?php echo ELBPRO_FULLPATH;?>lib/images/spinner.gif" border="0" align="absmiddle">&nbsp;<font color="#CC3300" style="font-size:10px;">Processing...</font>';

	nocache2 = Math.random();	
	https.open('get', '<?php echo ELBPRO_FULLPATH;  ?>lib/admin-pg/include/template-data/optin-placement-data.php?removeImage='+optinform+'&imgFldName='+imgFldName+'&nocache='+nocache2);
	https.onreadystatechange = function insertReplynow() {
									if(https.readyState == 4){
										// Response Back Actions.
										var responsemsg = https.responseText;
											document.getElementById(display_uploadImage).style.display = 'none';
											document.getElementById(display_uploadImageSectionNow).style.display = 'block';
											document.getElementById(templateMoreFlds).style.display = 'block';
											document.getElementById(imageURL).value = '';
											document.getElementById(remove_img_response_back).innerHTML = responsemsg;
									}
								}
	https.send(null);
}

</script>