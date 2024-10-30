function __elbpro_displayOnlyEmail() {
	var hide_one = document.getElementById('hide_one');
	var hide_two = document.getElementById('hide_two');
	var first_last_name_tbl = document.getElementById('first_last_name_tbl');
	var enable_emailFld = document.getElementById('enableEmailFld');
	var split_name = document.getElementsByName('elbpro[split_name]');
	
	if( document.elbpro_co_form.elbpro_disply_only_email.checked == true ) { 
		hide_one.style.display = 'none';
		hide_two.style.display = 'none';
		first_last_name_tbl.style.display = 'none';
		enable_emailFld.style.color = '#CC3300';
		for (i = 0; i < split_name.length; i++) {
			split_name[i].checked = false ;
		}

	} else if( document.elbpro_co_form.elbpro_disply_only_email.checked == false ) {  
		var showRow = 'block'
		if ( navigator.appName.indexOf('Microsoft') == -1 && hide_one.tagName == 'TR' ) showRow = 'table-row';
		if ( navigator.appName.indexOf('Microsoft') == -1 && hide_two.tagName == 'TR' ) showRow = 'table-row';
		hide_one.style.display = showRow;
		hide_two.style.display = showRow;
		enable_emailFld.style.color = '#FFFFFF';
		for (i = 0; i < split_name.length; i++) {
			split_name[i].checked = false ;
		}
		
	}
	
}

function __elbpro_showHidediv(curr,target,outer_div) { 
	
	var target = document.getElementById(target);
	var elbproShowRow = 'block'
	if ( navigator.appName.indexOf('Microsoft') == -1 && target.tagName == 'TR' ) elbproShowRow = 'table-row';
	if ( curr.checked == true ) { 
		target.style.display = elbproShowRow;
		if ( outer_div != '' ) document.getElementById(outer_div).style.display = 'block';
	} else {
	    target.style.display = 'none';
		if ( outer_div != '' ) document.getElementById(outer_div).style.display = 'none';
	}
}

function __elbpro_ShowHide(curr, img, img_type, lib_path) {
	var curr = document.getElementById(curr);
	if ( img != '' ) {
		var img  = document.getElementById(img);
	}
	var elbproShowRow = 'block'
	if ( navigator.appName.indexOf('Microsoft') == -1 && curr.tagName == 'TR' ) elbproShowRow = 'table-row';
	if ( curr.style == '' || curr.style.display == 'none' ) {
		curr.style.display = elbproShowRow;
		if ( img != '' && img_type == 1 ) img.src = lib_path + 'images/minus.gif';
		if ( img != '' && img_type == 2 ) img.src = lib_path + 'images/minus-small.gif';
		if ( img != '' && img_type == 3 ) img.src = lib_path + 'images/close-form.gif';
	} else if ( curr.style != '' || curr.style.display == 'block' || curr.style.display == 'table-row' ) {
		curr.style.display = 'none';
		if ( img != '' && img_type == 1 ) img.src = lib_path + 'images/plus.gif';
		if ( img != '' && img_type == 2 ) img.src = lib_path + 'images/plus-small.gif';
		if ( img != '' && img_type == 3 ) img.src = lib_path + 'images/open-form.gif';
	}
}

jQuery(document).ready(function(){
  jQuery("#elbpro_msg_home").show("slow");	
  jQuery("#elbpro_msg_home").fadeOut(6000); //animation	
});	

function elbp_catpage_openit(openid, closeid){
	var curr = document.getElementById(openid);
	var curr2 = document.getElementById(closeid);
	if ( curr.style.display == 'none' ) {
		curr.style.display = 'block';
	} else if ( curr.style.display == 'block' ) {
		curr.style.display = 'none';
	}
	curr2.style.display = 'none';
}

function elbp_catpage_closeit(openid, closeid){
	var curr = document.getElementById(openid);
	var curr2 = document.getElementById(closeid);
	if ( curr.style.display == 'block' ) {
		curr.style.display = 'none';
	}
	curr2.style.display = 'block';
}


function ilbp_chkboxcall() { 
    if(document.getElementById('elbpro_select_api_connections').value == "") {
        document.getElementById('ininbox_api_input_form').style.display = 'none';
    } else {
        document.getElementById('ininbox_api_input_form').style.display = 'block';
    }
}
