/*
only the first 2 parameters are required, the cookie name, the cookie
value. Cookie time is in milliseconds, so the below expires will make the 
number you pass in the elbpro_Set_Cookie function call the number of days the cookie
lasts, if you want it to be hours or minutes, just get rid of 24 and 60.

Generally you don't need to worry about domain, path or secure for most applications
so unless you need that, leave those parameters blank in the function call.
*/
function elbpro_Set_Cookie( name, value, expires, path, domain, secure ) {
	// set time, it's in milliseconds
	var today = new Date();
	today.setTime( today.getTime() );
	// if the expires variable is set, make the correct expires time, the
	// current script below will set it for x number of days, to make it
	// for hours, delete * 24, for minutes, delete * 60 * 24
	if ( expires )
	{
		expires = expires * 1000 * 60 * 60 * 24;
	}
	//alert( 'today ' + today.toGMTString() );// this is for testing purpose only
	var expires_date = new Date( today.getTime() + (expires) );
	//alert('expires ' + expires_date.toGMTString());// this is for testing purposes only

	document.cookie = name + "=" +escape( value ) +
		( ( expires ) ? ";expires=" + expires_date.toGMTString() : "" ) + //expires.toGMTString()
		( ( path ) ? ";path=" + path : "" ) + 
		( ( domain ) ? ";domain=" + domain : "" ) +
		( ( secure ) ? ";secure" : "" );
}


/*
Set Cookie confirmation
*/		
function __elbpro_setCookieJS( type, days, cookie ) { 
		if( type == 'footerBar' ) {
			var optin_type= "Footer Bar";
		} else if( type == 'popup' ) {
			var optin_type= "Popup Box";
		}
		var msg= "Are you sure you don't want "+optin_type+" to display again on your next Visit ? Clicking OK will disable "+optin_type+" for "+days+" days on your web browser ";
		var agree = confirm( msg );
			if ( agree == true ) {
				elbpro_Set_Cookie( cookie, '1', days, '', '', '' );
				return true;
			} else {
				return false;
			}
		}		


/*
Hide Footer Bar
*/
function __elbproClosefooterBar() {
	///document.getElementById("elbp-footerbar-main").style.visibility = "hidden";
	jQuery(document).ready(function(){
	  jQuery("#elbp-footerbar-main").fadeOut(1000); //animation	
   });	
}

/**
Check For Valid Email :: extra space check
**/

function elbpro_trim( stringToTrim ) {
	return stringToTrim.replace(/^\s+|\s+$/g,"");
}

/*
* Email validation: 
*/
function elbpro_checkForValidEmail( placementID, cookieSetInfo, cookieName, expandDays, emailID, fullPathURL ) { 
	var email_fld = document.getElementById(emailID);
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var msg = '';
	if ( reg.test(elbpro_trim(email_fld.value)) == false ) msg = '- Valid Email Required';
	if ( msg == '' ) {
		//clickIncrement( placementID );
		if( placementID == 'sidebarInc' ) { 
			elbpro_Set_Cookie( 'sidebarsts', '1', expandDays, '', '', '' );
		} else if( placementID == 'inside-cmt-box-ct' ) {  
			elbpro_Set_Cookie( 'insidecmtboxsts', '1', expandDays, '', '', '' );
		} else {
			elbpro_Set_Cookie( placementID, '1', expandDays, '', '', '' );
		}
		if( cookieSetInfo == 1 ) {
			elbpro_Set_Cookie( cookieName, '1', expandDays, '', '', '' );
		}										
		return true;
	} else {
		alert(msg);
		return false;
	}
}

function clickIncrement( placementID ) {  
		jQuery(document).ready(function(){ 
				 jQuery.ajax({
						type: "POST",
						url: elbpro_ajax_call.ajaxurl,
						data: { action: 'elbpro-analytics-call', id : placementID },
						success: function( results ){ 
							alert( results );
						}
					}); //close jQuery.ajax
					//return false;								   
		})
}

/*****
* Auto Filling Forms 
******/
function _elbpro_arrayCompare(a1, a2) {
	if (a1.length != a2.length) return false;
	var length = a2.length;
	for (var i = 0; i < length; i++) {
		if (a1[i] !== a2[i]) return false;
	}
	return true;
}

function _elbpro_inArray(needle, haystack) {
	var length = haystack.length;
	for(var i = 0; i < length; i++) {
		if(typeof haystack[i] == 'object') {
			if(_elbpro_arrayCompare(haystack[i], needle)) return true;
		} else {
			if(haystack[i] == needle) return true;
		}
	}
	return false;
}


