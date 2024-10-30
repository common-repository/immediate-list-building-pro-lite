var ie = document.all;
function __elbpro_PopulateDropdown(dropDown, theArray) { 
	var i;
	dropDown.length = 0;
	for (i=0; i<theArray.length; i++) {
	   dropDown.options[i] = new Option(theArray[i], theArray[i]);
	}
}
Array.prototype.in_array = function ( obj ) {
	var len = this.length;
	for ( var x = 0 ; x <= len ; x++ ) {
	   if ( this[x] == obj ) return true;
	}
	return false;
}
// Email List Building Pro -- Process HTML Form
function __elbpro_process_html_form(type) {   
	var frm_action = '';
	var the_hidden_flds = '';
	var arp_detected = 1;  // Autoresponder Name
	var choices = new Array();
	var hidden_flds = new Array('None');
	var form_code = document.getElementById('elbpro_html_optin_form_code').value; // Textarea (HTML Optin Form Code)
	if ( form_code == '' ) {
		alert('HTML Optin Form Code Required'); return false;
	}
	
	var form_code_html = document.getElementById('elbpro_form_code_html'); // Div id name with hidden tag.
	var arp = document.getElementById('elbpro_autoresponder_name');
	var name_fld = document.getElementById('elbpro_name_fld');
	var email_fld = document.getElementById('elbpro_email_fld');
	var form_hidden_flds = document.getElementById('elbpro_html_form_hidden_flds');
	var trackcode_fld = document.getElementById('elbpro_trackcode_fld');
	var form_url = document.getElementById('elbpro_formurl');
	
	
	if ( type == 'split' ) {
		if( document.elbpro_co_form.elbpro_split_name.checked == true ) { // checked
			var first_name_fld = document.getElementById('elbpro_first_name_fld');
			var last_name_fld = document.getElementById('elbpro_last_name_fld');
		} else {}
	}
	
		
	var pattern = /action=("|')(.*?)('|")/i;
	var matches = pattern.exec(form_code);
	if ( matches != null ) {
		frm_action = matches[2];
		frm_action = frm_action.toLowerCase();
	}
	form_url.value = frm_action; // Gives Form Url.
	
	form_code_2 = form_code.replace(/<form/gi,'<SBMG_Form');
	form_code_2 = form_code_2.replace(/<\/form/gi,'</SBMG_Form');
	form_code_html.innerHTML = form_code_2;  // Sends html optin form on div.
	var text_boxes = form_code_html.getElementsByTagName("INPUT");
	for ( var i=0; i<text_boxes.length; i++ ) {
	   var textbox = text_boxes[i];
	   if ( textbox.type == 'text' ) choices[choices.length] = textbox.name;
	   if ( textbox.type == 'hidden' ) { 
	   	  hidden_flds[hidden_flds.length] = textbox.name;
	      the_hidden_flds += ',' + textbox.name;
	   }
	}
	
	form_hidden_flds.value = the_hidden_flds; // Gives hidden field names in format: a,b,c
	
	// If no fields define then choose from default.
	if ( choices[0] == undefined ) {
		choices[0] = 'name';
		choices[1] = 'email';
	}
	
	__elbpro_PopulateDropdown(name_fld, choices);
	__elbpro_PopulateDropdown(email_fld, choices);
	__elbpro_PopulateDropdown(trackcode_fld, hidden_flds);
	
	if ( type == 'split' ) {
		if( document.elbpro_co_form.elbpro_split_name.checked == true ) { // checked
			__elbpro_PopulateDropdown(first_name_fld, choices);
			__elbpro_PopulateDropdown(last_name_fld, choices);
		} else {}
	}
		
	// Guess Name field
	if (choices.in_array('name')) { name_fld.value = 'name'; }
	else if (choices.in_array('fname')) { name_fld.value = 'fname'; }
	else if (choices.in_array('SubscriberName')) { name_fld.value = 'SubscriberName'; }
	else if (choices.in_array('category2')) { name_fld.value = 'category2'; }
	else if (choices.in_array('SendName')) { name_fld.value = 'SendName'; }
	else { name_fld.value = choices[0]; }
	// Guess Email field
	if (choices.in_array('email')) { email_fld.value = 'email'; }
	else if (choices.in_array('email')) { email_fld.value = 'email'; }
	else if (choices.in_array('Email1')) { email_fld.value = 'Email1'; }
	else if (choices.in_array('MailFromAddress')) { email_fld.value = 'MailFromAddress'; }
	else if (choices.in_array('category3')) { email_fld.value = 'category3'; }
	else if (choices.in_array('SendEmail')) { email_fld.value = 'SendEmail'; }
	else { email_fld.value = choices[1]; }

	document.getElementById('configure_optin').style.display = 'block';
	
	if( type != 'split' ) {
		window.scrollTo(0,430);
	}
	
	if( type == 'split' ) {
	var target = document.getElementById('first_last_name_tbl');
	var field_name = document.getElementById('field_name');
	var name_field_dropdown = document.getElementById('elbpro_name_fld');
	var split_namefld = document.getElementById('split_namefld');
		
		if( document.elbpro_co_form.elbpro_split_name.checked == true ) {
			var showRow = 'block'
			if ( navigator.appName.indexOf('Microsoft') == -1 && target.tagName == 'TR' ) showRow = 'table-row';
			target.style.display = showRow;
			field_name.style.color = '#CCCCCC';
			name_field_dropdown.disabled = true;
			split_namefld.style.color = '#CC3300';
			
		} else if( document.elbpro_co_form.elbpro_split_name.checked == false ) {
			 target.style.display = 'none';
			 field_name.style.color = '#333333';
			 field_name.style.fontWeight = 'bold';
			 name_field_dropdown.disabled = false;
			split_namefld.style.color = '#EDEFF4';
		}
	
	}
	
}

/*InInboz API*/
(function(jQuery){
jQuery(document).ready(function(){
	jQuery("#ininboxapiclick").click(function() {
	     var ininboxapikey = jQuery("#elbpro_ininbox_api_key").val();
		 var type = 'ininbox';
		 ilbp_ajax(ininboxapikey, type);
		 jQuery('#ininbox_ajx_loading').show();
	});
});	
function ilbp_ajax(ininboxapikey, type){ 
	 callajaxURL = jQuery("#ilbp_ajax_url_call").val();
	 jQuery.ajax({
			type: "post",
			url: callajaxURL,
			data: { action: 'ilbp-api-call', 
					type: type,
					ininbox_apikey: ininboxapikey
				  },
			success: function(data, textStatus, XMLHttpRequest){  
				jQuery('#ininbox_ajx_loading').hide();
				jQuery('#displayIninboxResult').html(data);
				//alert(data); //alert(1111);
			  },  
			error: function(MLHttpRequest, textStatus, errorThrown){  
				//alert(textStatus); //alert(222);  
			}  						
	}); //close jQuery.ajax
}
})(jQuery);

function callme(){ 
	 var type = 'ininbox-html';
	 ininboxGrabURL = jQuery("#ininboxOptions").val();
	 callajaxURL = jQuery("#ilbp_ajax_url_call").val();
	 jQuery('#ininbox_finalajx_loading').show();
	 jQuery.ajax({
			type: "post",
			url: callajaxURL,
			data: { action: 'ilbp-api-call', 
					type: type,
					formgrabURL: ininboxGrabURL
				  },
			success: function(data, textStatus, XMLHttpRequest){  
				jQuery('#ininbox_finalajx_loading').hide();
				jQuery('#elbpro_html_optin_form_code').html(data);
				//alert(data); //alert(1111);
			  },  
			error: function(MLHttpRequest, textStatus, errorThrown){  
				//alert(textStatus); //alert(222);  
			}  						
	}); //close jQuery.ajax
}
