var elbpro_history_last_checked = [];
var elbpro_popup_history_last_checked = [];
jQuery(document).ready(function(){ 
								
	jQuery('#display_new_footerbar_in_all').change(function(){ 
				if(jQuery(this).is(':checked')){
					elbpro_history_last_checked = [];
					jQuery('.elbpro_footerbar_showlist :checkbox:not(#display_new_footerbar_in_all):checked').each(function(){
						elbpro_history_last_checked.push(jQuery(this));																									
						jQuery(this).attr('checked',false);
					});
				} else {
					if(elbpro_history_last_checked.length > 0){
						jQuery.each(elbpro_history_last_checked,function(){
							jQuery(this).attr('checked',true);
						});
					}
				}
	});

	jQuery('.elbpro_footerbar_showlist :checkbox:not(#display_new_footerbar_in_all)').change(function(){
		if(jQuery(this).is(':checked')){
			jQuery('#display_new_footerbar_in_all').attr('checked',false);
		}
	});
	
	
	// Popup 
	
	jQuery('#display_new_popup_in_all').change(function(){ 
				if(jQuery(this).is(':checked')){
					elbpro_popup_history_last_checked = [];
					jQuery('.elbpro_popup_showlist :checkbox:not(#display_new_popup_in_all):checked').each(function(){
						elbpro_popup_history_last_checked.push(jQuery(this));																									
						jQuery(this).attr('checked',false);
					});
				} else {
					if(elbpro_popup_history_last_checked.length > 0){
						jQuery.each(elbpro_popup_history_last_checked,function(){
							jQuery(this).attr('checked',true);
						});
					}
				}
	});

	jQuery('.elbpro_popup_showlist :checkbox:not(#display_new_popup_in_all)').change(function(){
		if(jQuery(this).is(':checked')){
			jQuery('#display_new_popup_in_all').attr('checked',false);
		}
	});
	
	
	// Exitpopup 
	
	jQuery('#display_new_exitpopup_in_all').change(function(){ 
				if(jQuery(this).is(':checked')){
					elbpro_popup_history_last_checked = [];
					jQuery('.elbpro_exitpopup_showlist :checkbox:not(#display_new_exitpopup_in_all):checked').each(function(){
						elbpro_popup_history_last_checked.push(jQuery(this));																									
						jQuery(this).attr('checked',false);
					});
				} else {
					if(elbpro_popup_history_last_checked.length > 0){
						jQuery.each(elbpro_popup_history_last_checked,function(){
							jQuery(this).attr('checked',true);
						});
					}
				}
	});

	jQuery('.elbpro_exitpopup_showlist :checkbox:not(#display_new_exitpopup_in_all)').change(function(){
		if(jQuery(this).is(':checked')){
			jQuery('#display_new_exitpopup_in_all').attr('checked',false);
		}
	});
	

});
