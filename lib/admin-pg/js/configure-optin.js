function __elbpro_Schedule(chkname,frist_visits,every_days,after_visit) { 
	
	var schedule_box_option = document.getElementsByName(chkname);
	// Find checkbox Value
	for (var i=0; i < schedule_box_option.length; i++)
	   {
	   if (schedule_box_option[i].checked)
		  {
		  var chkbox_value = schedule_box_option[i].value;
		  }
	   }
	   
	if( chkbox_value == 1 ) {
		document.getElementById(frist_visits).disabled = true;
		document.getElementById(every_days).disabled = true;
		document.getElementById(after_visit).disabled = true;
	} else if( chkbox_value == 2 ) { 
		document.getElementById(frist_visits).disabled = false;
		document.getElementById(every_days).disabled = true;
		document.getElementById(after_visit).disabled = true;
	} else if( chkbox_value == 3 ) {
		document.getElementById(every_days).disabled = false;
		document.getElementById(frist_visits).disabled = true;
		document.getElementById(after_visit).disabled = true;
	} else if( chkbox_value == 4 ) {
		document.getElementById(after_visit).disabled = false;
		document.getElementById(frist_visits).disabled = true;
		document.getElementById(every_days).disabled = true;
	}
}


function __elbpro_DisableShowIn(curr,elbpro_in_home,elbpro_in_post,elbpro_in_single_page,elbpro_in_category,elbpro_in_archive) {  
	if ( curr.checked == true ) { 
		document.getElementById(elbpro_in_home).checked  = false;
		document.getElementById(elbpro_in_post).checked  = false;
		document.getElementById(elbpro_in_single_page).checked  = false;
		document.getElementById(elbpro_in_category).checked  = false;
		document.getElementById(elbpro_in_archive).checked  = false;
		
		document.getElementById(elbpro_in_home).disabled  = true;
		document.getElementById(elbpro_in_post).disabled  = true;
		document.getElementById(elbpro_in_single_page).disabled  = true;
		document.getElementById(elbpro_in_category).disabled  = true;
		document.getElementById(elbpro_in_archive).disabled  = true;
	} else { 
		document.getElementById(elbpro_in_home).disabled  = false;
		document.getElementById(elbpro_in_post).disabled  = false;
		document.getElementById(elbpro_in_single_page).disabled  = false;
		document.getElementById(elbpro_in_category).disabled  = false;
		document.getElementById(elbpro_in_archive).disabled  = false;
	}
}

function addCustomFld(x,DisplaycustomFld,hiddenFld, LabelCustomFld,FieldCustomFld) {
  var radio = document.getElementById(DisplaycustomFld);
  var numi = document.getElementById(hiddenFld);
  var num = (document.getElementById(hiddenFld).value -1)+ 2;
  numi.value = num;
  var newdiv = document.createElement('div');
  var divIdName = num;
  newdiv.setAttribute('id',divIdName);
  newdiv.innerHTML = "<p style='padding: 0 0 0 15px'>&nbsp;&nbsp;&nbsp;&nbsp;<a style='text-decoration:none; cursor:pointer' onclick=\"removeCreateFld('"+divIdName+"','"+DisplaycustomFld+"')\">[-]</a>&nbsp;&nbsp;<input type='text' style='width:150px;' name='"+ LabelCustomFld +"' id='"+ x +"radioValue'  value='' >&nbsp;&nbsp;&nbsp;<input type='text' name='"+ FieldCustomFld +"' id='"+ x +"radioValue'  style='width:150px;' value='' />&nbsp;&nbsp;<a style='text-decoration:none; cursor:pointer' onclick=\"addCustomFld('"+x+"','"+DisplaycustomFld+"','"+hiddenFld+"','"+LabelCustomFld+"','"+FieldCustomFld+"');\">[+]</a></p>";
  radio.appendChild(newdiv);
}

/* -------------------------- */
/* Remove Add Radio */
/* -------------------------- */
function removeCreateFld(divNum,DisplaycustomFld) { 
  var d = document.getElementById(DisplaycustomFld);
  var olddiv = document.getElementById(divNum);
  d.removeChild(olddiv);
}