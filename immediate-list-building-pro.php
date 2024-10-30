<?php
/* 
 * Plugin Name:   Immediate List Building Pro - Lite
 * Version:       1.2
 * Plugin URI:    http://www.immediatelistbuildingpro.com/
 * Description:   <strong>ULTIMATE Tool For Any Bloggers,</strong> Who Wants To Build Their List Quick!... Adjust your settings <a href="tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php">here</a>.
 * Author:        WpSmartApps
 * Author URI:    http://www.WpSmartApps.com
 *
 */
$elbpro_path     = preg_replace('/^.*wp-content[\\\\\/]plugins[\\\\\/]/', '', __FILE__);
$elbpro_path     = str_replace('\\','/',$elbpro_path);
$elbpro_dir      = substr($elbpro_path,0,strrpos($elbpro_path,'/'));
$elbpro_siteurl  = get_bloginfo('wpurl');
$elbpro_siteurl  = (strpos($elbpro_siteurl,'http://') === false) ? get_bloginfo('siteurl') : $elbpro_siteurl;
$elbpro_fullpath = $elbpro_siteurl.'/wp-content/plugins/'.$elbpro_dir.'/';
$elbpro_relpath  = str_replace('\\','/',dirname(__FILE__));
$elbpro_libpath  = $elbpro_fullpath.'lib/';
$elbpro_abspath  = str_replace("\\","/",ABSPATH); 
$elbpro_adminURL = admin_url('admin-ajax.php');
define('ELBPRO_ABSPATH', $elbpro_abspath);
define('ELBPRO_PATH', $elbpro_path);
define('ELBPRO_FULLPATH', $elbpro_fullpath);
define('ELBPRO_LIBPATH', $elbpro_libpath);
define('ELBPRO_RELPATH', $elbpro_relpath);
define('ELBPRO_SITEURL', $elbpro_siteurl);
define('ELBPRO_ROWS_PER_SEGMENT', 100);
define('ELBPRO_NAME', 'Immediate List Building Pro - Lite');
define('ELBPRO_VERSION', '1.2');
define('ELBPRO_BACKUP_DIR', str_replace("\\","/",ABSPATH).'wp-content/elbp-backup/');
define('ELBPRO_ROWS_PER_SEGMENT', 100);
define('ELBPRO_ADMIN_URL', $elbpro_adminURL);
define("ELBPRO_VIDEO_WIDTH", 700); // default width
define("ELBPRO_VIDEO_HEIGHT", 300); // default height
require_once($elbpro_relpath.'/lib/immediate-list-building-pro.cls.php');

/**
 * Immediate List Building Pro Class
 * Holds all the necessary functions and variables
 */
class EmailListBuildingProPlugin extends EmailListBuildingPro
{
	/**
	 * Constructor. 
	 */
	function EmailListBuildingProPlugin() {
		// Global Variables.
		global $table_prefix, $wp_version;
		
		// elbp database table 
		$this->elbp_autoresponder_table		  = $table_prefix.$this->elbp_autoresponder_table;
		$this->elbp_optin_options_table		  = $table_prefix.$this->elbp_optin_options_table;
		$this->elbp_optin_insidecomment_table = $table_prefix.$this->elbp_optin_insidecomment_table;
		$this->elbp_optin_placement_table     = $table_prefix.$this->elbp_optin_placement_table;
		$this->elbp_first_commentator_table   = $table_prefix.$this->elbp_first_commentator_table;
		// wordpress default tables
		$this->wordpress_comments_table  	  = $table_prefix . $this->wordpress_comments_table;
		$this->wordpress_posts_table  	      = $table_prefix . $this->wordpress_posts_table;
		$this->wordpress_users_table  	      = $table_prefix . $this->wordpress_users_table;
		// Back tables
		$this->elbp_backup_tables           = array( $this->elbp_autoresponder_table, $this->elbp_optin_options_table, $this->elbp_optin_placement_table, $this->elbp_first_commentator_table, $this->elbp_optin_insidecomment_table );
		// ajax Call
		//add_action('wp_ajax_nopriv_elbpro-analytics-call', array(&$this, '__elbpro_hiddenDataCall'));
		//add_action('wp_ajax_elbpro-analytics-call', array(&$this, '__elbpro_hiddenDataCall'));
		// Plugin activate  actions, filters.
		add_action('activate_'.ELBPRO_PATH, array(&$this, 'elbpro_active')); 
		add_filter('plugin_action_links', array(&$this,'elbpro_actions'), 10, 2 );
		// Plugin admin home page actions.
		add_action('wp_print_scripts', array(&$this, 'elbpro_print_scripts'));
		add_action('admin_menu', array(&$this, 'elbpro_admin_menu'));
		add_action('admin_head', array(&$this, 'elbpro_admin_head'));
		// Global update.
		add_action('admin_notices', array(&$this, '__elbpro_update_notify'));  
		// Register Page
		add_action('register_form', array(&$this, '__elbpro_optin_on_registor'));
		add_action('user_register', array(&$this, 'elbpro_user_register'));
		// Plugin users home page actions.
		add_action('template_redirect', array(&$this, 'elbpro_setCookie'));
		add_action('wp_head', array(&$this, 'elbpro_js_css_action'), 30);
		add_action('wp_footer', array(&$this, 'elbpro_footer_action'), 30);
		///add_action('get_footer',  array(&$this, 'elbpro_footer_action') );
		add_action('init', array(&$this, 'elbpro_init_method')); // Load a default WordPress script
		// Home page users :: comment actions
		add_action('init', array(&$this, 'elbpro_session'));	
		add_action('comment_post', array(&$this, 'elbpro_latestCommentId'));
		add_action('comment_post',array(&$this, 'elbpro_SendEmail_to_FirstCommentator'),10,2);
		add_action('comment_form', array(&$this, 'elbpro_chkBoxNewsLetterSubscribers')); // Check Box newsletter tmp
		add_filter('comment_text', array(&$this, 'elbpro_showOptinFrmInsideComment')); // Optin From Inside Comment
		add_action('wp_set_comment_status', array(&$this,'elbpro_SendEmail_to_ApproveComment'),10,2);	
		// Work above wordpress version 2.5
		add_action('edit_post', array(&$this, 'elbpro_sqpg_MetaData'));
		add_action('save_post', array(&$this, 'elbpro_sqpg_MetaData'));
		add_action('publish_post', array(&$this, 'elbpro_sqpg_MetaData'));

		// Define plugin page
		$this->wp_plugin_page        = ($wp_version >= 2.7) ? 'tools.php' : 'edit.php';
		// Define Images
		$this->elbpro_img_home = '<img src="'.ELBPRO_LIBPATH.'images/home.gif" border="0" align="absmiddle">';
		$this->elbpro_img_manageoptinform = '<img src="'.ELBPRO_LIBPATH.'images/manage-optin-form.png" border="0" align="absmiddle">';
		$this->elbpro_img_advanceoptions = '<img src="'.ELBPRO_LIBPATH.'images/advance-options.png" border="0" align="absmiddle">';
		$this->elbpro_img_affiliate = '<img src="'.ELBPRO_LIBPATH.'images/affiliate.png" border="0" align="absmiddle">';
		$this->elbpro_img_upgrade = '<img src="'.ELBPRO_LIBPATH.'images/upgrade.gif" border="0" align="absmiddle">';
		$this->elbpro_img_help = '<img src="'.ELBPRO_LIBPATH.'images/help.png" border="0" align="absmiddle">';
		$this->elbpro_img_alert = '<img src="'.ELBPRO_LIBPATH.'images/alert.gif" border="0" align="absmiddle">';
		$this->elbpro_img_leftarrow = '<img src="'.ELBPRO_LIBPATH.'images/left-arrow.png" border="0" align="absmiddle">';
		$this->elbpro_img_arrowleft = '<img src="'.ELBPRO_LIBPATH.'images/arrow_left.png" border="0" align="absmiddle">';
		$this->elbpro_img_addnewform = '<img src="'.ELBPRO_LIBPATH.'images/add-new-form.gif" border="0" align="absmiddle">';
		$this->elbpro_img_example = '<img src="'.ELBPRO_LIBPATH.'images/image.png" border="0" align="absmiddle">';
		$this->elbpro_img_information = '<img src="'.ELBPRO_LIBPATH.'images/information.gif" border="0" align="absmiddle">';
		$this->elbpro_img_delete = '<img src="'.ELBPRO_LIBPATH.'images/delete.gif" border="0" align="absmiddle" alt="Delete" title="Delete">';
		$this->elbpro_img_edit = '<img src="'.ELBPRO_LIBPATH.'images/edit.gif" border="0" align="absmiddle" alt="Edit" title="Edit">';
		$this->elbpro_img_wink = '<img src="'.ELBPRO_LIBPATH.'images/wink.gif" border="0" align="absmiddle" alt="wink">';
		$this->elbpro_img_tick = '<img src="'.ELBPRO_LIBPATH.'images/tick.png" border="0" align="absmiddle" >';
		$this->elbpro_img_placement_msg = '<img src="'.ELBPRO_LIBPATH.'images/cross.png" border="0" align="absmiddle" alt="Delete" title="Delete" >';
		$this->elbpro_img_arrow_down = '<img src="'.ELBPRO_LIBPATH.'images/arrow_down.png" border="0" align="absmiddle" alt="down" >';
		$this->elbpro_img_membership = '<img src="'.ELBPRO_LIBPATH.'images/membership.jpg" border="0" align="absmiddle" alt="membership" title="membership" >';
		$this->elbpro_img_logo = '<img src="'.ELBPRO_LIBPATH.'images/elbpro-logo.png" border="0" align="absmiddle" alt="WpSmartApps Immediate List Building Pro" title="WpSmartApps Immediate List Building Pro" >';
		$this->elbpro_img_problems = '<img src="'.ELBPRO_LIBPATH.'images/problem.png" border="0" align="absmiddle">';
		$this->elbpro_img_ask_question = '<img src="'.ELBPRO_LIBPATH.'images/ask_question.png" border="0" align="absmiddle">';
		$this->elbpro_img_backup = '<img src="'.ELBPRO_LIBPATH.'images/backup.gif" border="0" align="absmiddle">';
		$this->elbpro_img_sub = '<img src="'.ELBPRO_LIBPATH.'images/sub.gif" border="0" align="absmiddle">';
	}
	
	/**
	 * Called when plugin is activated. 
	 */
	function elbpro_active() {
		$table_arp = $this->__elbp_autoresponder_table();
		$table_optin_options = $this->__elbp_optin_options_table();
		$table_insidecomment = $this->__elbp_optin_insidecomment_table();
		$table_optinPlacement = $this->__elbp_optin_placement_table();
		$table_first_commentator = $this->__elbp_first_commentator_table();
		if ( $table_optin_options == true ) $this->__elbpInsertDefaultOptinData();
		return true;
	}
	
	/**
	* Define admin juery for email list building pro.
	*/
	function elbpro_print_scripts() {
		if(is_admin()){
			wp_enqueue_script('elbpro',ELBPRO_LIBPATH.'admin-pg/js/elbpro_admin_jq.js',array('jquery'),'1.0');
		} else {
			wp_enqueue_script( 'elbpro_ajax', ELBPRO_LIBPATH . 'user-js/global.js', array( 'jquery' ) );
			wp_localize_script( 'elbpro_ajax', 'elbpro_ajax_call', array( 'ajaxurl' => admin_url('admin-ajax.php') ) );
		} 
	}	
	
	/**
	 * Show Optin Form Inside Comment	
	 * @param string $comment_txt
	 */
	function elbpro_showOptinFrmInsideComment( $comment_txt ) {
	
		error_reporting(E_ALL ^ E_NOTICE); 
		
		global $comment;
		$this->__elbpOptinOptions('elbp_insidecomment_options');
		
		if( isset($_COOKIE['elbpro_insideCommentBoxAfterSubscribe']) && $_COOKIE['elbpro_insideCommentBoxAfterSubscribe'] == 1 ) {
			     $insideCommentafterSubscribeActive = '';
			echo $insideCommentafterSubscribeActive;
		} else { 
		
	    if ( $this->fetch_insideCommentOptions['enable_insideCommentBox'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_insideCommentOptions['insideCommentBox_arp']) > 0 ) ) {
		$this->__elbpOptinOptions('elbp_insidecomment_bodytxt');
		
			$comment_txt = $this->__elbp_showOptinFormInsideComment( $comment_txt, $comment, is_admin() );
			
		}
		
		} // end of don't show optin after subscribe
		
		return $comment_txt;
	}	
	
	/**
	* Show Newsletter subscription before comment box
	*/
	function elbpro_chkBoxNewsLetterSubscribers() {
		$this->__elbpOptinOptions('elbp_chkbox_options');
	    if ( $this->fetch_chkboxOptions['enable_chkbox'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_chkboxOptions['chkbox_arp']) > 0 ) ) {
		   $this->__elbp_SubscribersChkBoxTemplateBeforeCommentBox();
		}
	}	

	/**
	 * starts a session
	 */
	function elbpro_session() {
		if ( !is_admin() )  session_start();
	}
	
    /**
     * The register function takes care of registering the user 
     * 
     * The call is registered via add_action on initialization.
     * 
     * @return nothing
     * @param object $id of user, generated by WordPress.
     */
	function elbpro_user_register( $id ) {
	
		error_reporting(E_ALL ^ E_NOTICE); 
		
		global $wpdb;
        /**
         * What are the conditions triggering this return?
		 * This is either the check box of "terms" or it's
		 * left over from comment handling.
		 * 
		 * @todo Rework this into an option called something like
		 * 'want_newsletter'.  If Terms and Conditions are 
		 * later required, that can be handled then.
         */
		if (!$this->post['register']) {
			//return;
		}
		
		// get user info
		$id = intval( $id );
		$user = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$id");
		// send notifications
		//wp_new_user_notification($id, $user_pass);	// use this by itself if using pluggable.php function (sends email from wordpress@domain.com)
		wp_new_user_notification($id, ''); // this notifies admin only (no password is passed)
		$location = get_option('siteurl')."/wp-login.php?checkemail=registered";
		$this->__elbpro_register_subscribe( $user->user_email, $user->user_login );
		?>
		<script language="javascript" > window.location='<?php echo $location; ?>' </script> 
		<?php 
	}
	
	
	/**
	* Sends email to the first commentator on comment post
	*/
	function elbpro_SendEmail_to_FirstCommentator( $comment_id, $status ){ 
		$this->__elbpOptinOptions();
		if ( $this->fetch_sentEmail_status == 1 && $this->fetch_sentEmail_type == 1 ) { 
			$this->__elbp_SendEmail_On_StatusIsApproved( $comment_id, $status );
		}
	}
	
	
	/**
	* Send email to commentator after comment is approved by admin
	*/
	function elbpro_SendEmail_to_ApproveComment($comment_id, $status) { 
		$this->__elbpOptinOptions();
	    if ( $this->fetch_sentEmail_status == 1 && $this->fetch_sentEmail_type == 2 ) { 
			$this->__elbp_SendEmail_On_StatusIsApproved( $comment_id, $status );
		}
	}	
	
	
	
	/**
	 * Gets recent comment ID and stores it in session variable
	 * @param integer $comment_id
	 */
	function elbpro_latestCommentId($comment_id) {
	
		error_reporting(E_ALL ^ E_NOTICE); 
		
		$_SESSION['ELBP_CURR_COMMENT_ID'] = $comment_id;
		$comment_author_name 	= $_POST['author'];
		$comment_author_email	= $_POST['email'];
		$subscribe_flag			= $_POST['elbpro_subscribersChkBoxBeforeCommentBox'];
		$this->__elbpOptinOptions('elbp_chkbox_options');
		$this->chk_reg_trackingCode = $this->fetch_chkboxOptions['chkbox_arp_trackingcode'];
	    if ( $this->fetch_chkboxOptions['enable_chkbox'] == 'true' && ( $this->__elbpro_CheckTotalOptinForm($this->fetch_chkboxOptions['chkbox_arp']) > 0 ) ) {
			$this->__elbp_subscribeToMailingList($comment_author_name, $comment_author_email, $subscribe_flag, $this->fetch_chkboxOptions['chkbox_arp'], 'elbp_chkbox_subscribers');
		}
		return $comment_id;
	}
	
	/**
	 * Adds Custom settings option on Manage Plugins page.
	 */
	function elbpro_actions( $links, $file ) {
		if( $file == 'immediate-list-building-pro-lite/immediate-list-building-pro.php' && function_exists( "admin_url" ) ) {
			$settings_link = '<a href="' . admin_url( 'tools.php?page=immediate-list-building-pro-lite/immediate-list-building-pro.php' ) . '">' .'<span style="color:#0000FF"><b>Go To Plugin Dashboard</b></span>' . '</a>';
			array_unshift( $links, $settings_link ); // before other links
		}
		return $links;
	}	

	/**
	 * Adds the plugins link in admin's Manage menu
	 */
	function elbpro_admin_menu() {
		add_management_page(ELBPRO_NAME, ELBPRO_NAME, 9, ELBPRO_PATH, array(&$this, 'elbpro_admin_options'));
		// Add Custom Fields
		if ( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'elbpro-szpgcustom-fields', 'Immediate List Building Pro :: Squeeze Page ', array( &$this, 'elbpro_SqueezePage_CustomFields' ), 'page', 'normal', 'high' );
		}
		
	}
	
	/**
	 * Displays the plugins options
	 */
	function elbpro_admin_options() {
	
		if( isset( $this->elbproactivemsg ) ) { 
		?>	<br>
			<div style="padding-top: 5px; padding-bottom: 5px; width:70%" class="error below-h2">
			<?php echo $this->elbproactivemsg; ?>
			</div>
		<?php 
		}	
		$this->elbpro_option_msg = $this->__elbpro_OptionsPg();
		echo '<div class="wrap">';
		$this->__elbpro_displayOptionsPg();
		echo '</div>';
	}
	
	/**
	 * Admin Head
	 */
	function elbpro_admin_head() {
		$this->__elbpro_admin_header();
	}
	
	/*** USER HOME PAGE ACTIONS ***/
	
	
	/**
	* Show Placement Optin Form on :
	*/
	function elbpro_show_optin_on( $displayin_all, $displayin_home, $displayin_post, $displayin_archive, $displayin_search, $displayin_other, $displayin_showInPostId,  $displayin_dntshowInPostId, $displayin_pageID, $displayin_CatIn, $displayin_cat ) {  
		global $wp_query;
		
		$this->displayin_all = $displayin_all;
		$this->displayin_home = $displayin_home;
		$this->displayin_post = $displayin_post;
		$this->displayin_archive = $displayin_archive;
		$this->displayin_search = $displayin_search;
		$this->displayin_other = $displayin_other;
		$this->displayin_showInPostId = $displayin_showInPostId;
		$this->displayin_dntshowInPostId = $displayin_dntshowInPostId;
		$this->displayin_pageID = $displayin_pageID;
		$this->displayin_CatIn = $displayin_CatIn;
		$this->displayin_cat = $displayin_cat;

		if( $this->displayin_all == 'all' ) return true;
		if( $this->displayin_home == 'home' && is_home() ) return true;
		if( $this->displayin_archive == 'arch' && is_archive() ) return true;
		if( $this->displayin_search == 'search' && is_search() ) return true;
		/**
		 is_single( array( 17, 19, 1, 11 ) )
		 Returns true when the single post being displayed is either post ID 17, post ID 19, post ID 1, or post ID 11.
		 is_page( array( 42, 'about-me', 'About Me' ) ) 
		 Returns true when the Pages displayed is either post ID 42, or post_name "about-me", or post_title "About Me"
		**/
		$displayOnpageIDs = explode(',', $this->displayin_showInPostId );
		$blockOnpageIDs = explode(',', $this->displayin_dntshowInPostId );
		// Single Post
		if( is_single( $displayOnpageIDs ) == true ) return true;
		if( ( is_single( $blockOnpageIDs ) ) && ( is_single() )  ) {
			return false;
		} else { 
			if( $this->displayin_post == 'post' && is_single() ) return true;
		}
		// Display On Pages
		if( isset($this->displayin_pageID) && is_page() && in_array( $wp_query->post->ID, $this->displayin_pageID ) ) return true;
		// Display on category
		if(isset($this->displayin_CatIn) && isset($this->displayin_cat) && is_array($this->displayin_cat)){
			$checkcat = $checkpost = false;
			switch($this->displayin_CatIn){
				case 0: $checkcat = $checkpost = true; break;
				case 1: $checkcat = true; break;
				case 2: $checkpost = true; break;
			}
			if($checkcat){
				foreach($this->displayin_cat as $c){
					if(is_category($c)){
						return true;
					}
				}
			}
			if($checkpost && is_single() && ($cats = get_the_category())){
				foreach($cats as $c){
					if(in_array($c->cat_ID,$this->displayin_cat)){
						return true;
					}
				}
			}
		}
	}
	
	
	/**
	* User Head Secion :: defile css, js and other necesseary files as needed. 
	*/
	function elbpro_js_css_action() {
		if( !is_admin() ) {
			$this->__elbpOptinOptions('elbp_dontShowOptinAfterSubscribe_options'); // Dont show me again after subscribe.
			$this->dontshowOptinForm_daysAfterSubscribe = $this->fetch_dntShowOptinFormAgain['dontShowOptinFor_daysOnceSubscribe'];
			$this->__elbpOptinOptions('elbp_affiliate_options'); // Affiliate optin.
			$this->__elbpOptinOptions('elbp_popupbox_options'); // Popup Optin optin.
			$this->__elbpOptinOptions('elbp_insidecomment_options'); // Inside Comment Box Optin optin.
			$this->__elbpro_user_header();
			$this->__elbpro_popup_box(); // Display popup box.
		}
	}
	
	/**
	*  User Footer Section :: Footer Bar Action.
	*/
	function elbpro_footer_action() {
		if( !is_admin() ) {
			// Global Affiliate Chk
			$this->__elbpOptinOptions('elbp_affiliate_options');
		}
	}
	
	/**
	 * Sets Cookies according to the preferences set in admin
	 */
	function elbpro_setCookie() {
		if ( !is_admin() ) { 
			$this->__elbpro_SetCookie();
			$this->__elbpro_UpgCt();
		}
	}
	
	
	
	function elbpro_init_method() {
		if (!is_admin()) {
			wp_enqueue_script( 'jquery' );
		}
	} 
	
	
	/**
	* Impression Type
	*/
	function elbpro_ImpressionType( $impOptinType, $id ){ 
		if ( !is_admin() && !is_feed() ) {
			if( $impOptinType == 'footerBar' ) {
					$this->__elbpro_UpdatePlacementImpression( $id, 'null' );
			} else if( $impOptinType == 'popupBox' ) { 
					$this->__elbpro_UpdatePlacementImpression( $id, 'null');
			} else if( $impOptinType == 'withinBOP' ) { 
					$this->__elbpro_UpdatePlacementImpression( $id, 'null' );
			} else if( $impOptinType == 'elbproSidebar' ) { 
					$this->__elbpro_UpdatePlacementImpression( '', 'elbp_sidebar_impsionStats' );
			}
		}
	}
	
	
	/* Where To Show Footer Bar Optin? */
	
	function elbpro_page_list_recursive($parentid=0,$exclude='',$selected=array(),$show_in_page, $page_name){  
		$pages = get_pages('parent='.$parentid.'&child_of='.$parentid.'&exclude='.$exclude);
		if(count($pages) > 0){
			$str = '
		<ul style="padding:10px 0px 0px 20px;">';
		$page_count =1;
		$total_page = count($pages);
			foreach($pages as $p){
				$sel = false;
				if(isset($selected) && in_array($p->ID,$selected))
					$sel = true;
			
			if( $page_count > 4 ) { 
				if( $page_count == 5 ) {
					$str .='<a style="cursor:pointer; color:#0033CC" onclick="elbp_catpage_openit(\''.$page_name.$p->ID.'_openit\',\''.$page_name.$p->ID.'_closeit\')" id="'.$page_name.$p->ID.'_closeit"><strong>More...</strong></a>';
					$str .='<span id="'.$page_name.$p->ID.'_openit" style="display:none;">';
					$closePgID = $page_name.$p->ID;
				} 
				
				$str .= '
			<li><input type="checkbox" name="elbpro['.$show_in_page.'][]" value="'.$p->ID.'" id="pageid_'.$p->ID.'"'.(($sel)?' checked="checked"':'').' /> <label for="pageid_'.$p->ID.'">'.wp_specialchars($p->post_title).'</label>'.$this->elbpro_page_list_recursive($p->ID,$exclude,$selected,$show_in_page,$page_name).'</li>';
			
				if( $total_page == $page_count ) {
					$str .='<a style="cursor:pointer; color:#0033CC" onclick="elbp_catpage_closeit(\''.$closePgID.'_openit\',\''.$closePgID.'_closeit\')" ><strong>Close</strong></a></span>';
				}
			
			
			} else if( $page_count <= 4 ) { 
				$str .= '
			<li><input type="checkbox" name="elbpro['.$show_in_page.'][]" value="'.$p->ID.'" id="pageid_'.$p->ID.'"'.(($sel)?' checked="checked"':'').' /> <label for="pageid_'.$p->ID.'">'.wp_specialchars($p->post_title).'</label>'.$this->elbpro_page_list_recursive($p->ID,$exclude,$selected,$show_in_page,$page_name).'</li>';
			
			}
			
			$page_count++;
			}
			$str .= '
		</ul>';
			return $str;
		}
	}
	
	function elbpro_cat_list_recursive($parentid=0,$selected=array(),$display_in_cat,$cat_page_name){
		$cats = get_categories('hide_empty=0&child_of='.$parentid.'&parent='.$parentid);
		if(count($cats) > 0){
			$str = '
				<ul style="padding:10px 0px 0px 20px;">';
			$cat_count = 1;	
			$total_categ = count($cats);
			foreach($cats as $c){
				$sel = false;
				if(isset($selected) && in_array($c->cat_ID,$selected))
					$sel = true;
					
				if( $cat_count > 4 ) { 
				if( $cat_count == 5 ) {
					$str .='<a style="cursor:pointer; color:#0033CC" onclick="elbp_catpage_openit(\''.$cat_page_name.$c->cat_ID.'_openit\',\''.$cat_page_name.$c->cat_ID.'_closeit\')" id="'.$cat_page_name.$c->cat_ID.'_closeit"><strong>More...</strong></a>';
					$str .='<span id="'.$cat_page_name.$c->cat_ID.'_openit" style="display:none;">';
					$closeItID = $cat_page_name.$c->cat_ID;
				} 
				
				$str .= '
			<li><input type="checkbox" name="elbpro['.$display_in_cat.'][]" value="'.$c->cat_ID.'" id="catid_'.$c->cat_ID.'"'.(($sel)?' checked="checked"':'').' /> <label for="catid_'.$c->cat_ID.'">'.wp_specialchars($c->cat_name).'</label>'.$this->elbpro_cat_list_recursive($c->cat_ID,$selected,$display_in_cat,$cat_page_name).'</li>';
			
				if( $total_categ == $cat_count ) {
					$str .='<a style="cursor:pointer; color:#0033CC" onclick="elbp_catpage_closeit(\''.$closeItID.'_openit\',\''.$closeItID.'_closeit\')" ><strong>Close</strong></a></span>';
				}
			
			
			} else if( $cat_count <= 4 ) {	
				$str .= '
					<li><input type="checkbox" name="elbpro['.$display_in_cat.'][]" value="'.$c->cat_ID.'" id="catid_'.$c->cat_ID.'"'.(($sel)?' checked="checked"':'').' /> <label for="catid_'.$c->cat_ID.'">'.wp_specialchars($c->cat_name).'</label>'.$this->elbpro_cat_list_recursive($c->cat_ID,$selected,$display_in_cat,$cat_page_name).'</li>';
			}	
				
			$cat_count++;	
				
				}
			$str .= '</ul>';
			return $str;
		}
		return '';
	}
	
	
	function elbpro_page_list($display_in_all,$display_in_home,$display_in_post,$display_in_archive,$display_in_search,$display_in_other,$showOnPostWithID,$dontShowOnPostWithID,$display_optin_in_cat,$display_in_cat,$display_in_page,$elbpro_class_showlist,$display_everywhere,$chk_in_all,$chk_in_home,$chk_in_post,$chk_in_arch,$chk_in_search,$chk_in_other, $showOnPostWithIDValue, $dontShowOnPostWithIDValue, $selected_pageid ,$selected_display_catIN,$selected_in_cat,$display_selected){
	
		$ex_pages = '';
		$catstr = ''; $selectedcat = isset($selected_display_catIN) ? $selected_display_catIN : 0;
		$opts = array('Both','Category page','Post page within the categories');
		foreach($opts as $a => $b){
			$catstr .= '
					<option value="'.$a.'"'.(($a==$selectedcat)?' selected="selected"':'').'>'.$b.'</option>';
		}
		
		$recursive_cat_name = $display_in_post.'65';
		$cats = $this->elbpro_cat_list_recursive(0,$selected_in_cat,$display_in_cat,$recursive_cat_name);
		
		$str = '<ul class="'.$elbpro_class_showlist.'">
			    <li>';
				
				
		if( $display_selected == 1 ) {
			$str .= '	<div class="innerhide" style="background-color:#F9F8F3; padding:10px 10px 10px 10px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
					<table cellspacing="1" cellpadding="3" border="0" align="center" width="100%" >
					<tbody><tr><td valign="top">
					<table cellpadding="3" cellspacing="1" border="0" width="100%" style="padding:0;">
						<tr>
						  <td><input type="checkbox" name="elbpro['.$display_in_post.']" '.$chk_in_post.' value="post" />
	  Single Posts &nbsp;</td>
						</tr>
				   </table> 
					</td></tr>
					</tbody></table>
				</div> 
			';
		} else {	
			$str .= '<div class="innerhide" style="background-color:#F9F8F3; padding:10px 10px 10px 10px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;">
					<table cellspacing="1" cellpadding="3" border="0" align="center" width="100%" >
					<tbody><tr><td valign="top">
					<table cellpadding="3" cellspacing="1" border="0" width="100%" style="padding:0;">
						<tr>
						  <td width="8%"><input type="checkbox" name="elbpro['.$display_in_all.']" id= "'.$display_everywhere.'" '.$chk_in_all.' value="all"  /> <label for="display_new_footerbar_in_all">All</label>  </td>
							<td width="12%"><input type="checkbox" name="elbpro['.$display_in_home.']" '.$chk_in_home.' value="home"  /> 
						  Home &nbsp;</td>
							<td width="20%"><input type="checkbox" name="elbpro['.$display_in_post.']" '.$chk_in_post.' value="post" /> 
						  Single Posts &nbsp;</td>
							<td width="18%"><input type="checkbox" name="elbpro['.$display_in_archive.']" '.$chk_in_arch.' value="arch" /> 
						  Archive &nbsp;</td>
							<td width="15%"><input type="checkbox" name="elbpro['.$display_in_search.']" '.$chk_in_search.' value="search" /> 
						  Search &nbsp;</td>
							<td width="15%">&nbsp;</td>
						</tr>
				   </table> 
					</td></tr>
					</tbody></table>
				</div>';
		}	
		$str .= '</li>
			<li>
				<div style="padding:12px 4px 15px 4px; ">
					Show on these Posts only: <input name="elbpro['.$showOnPostWithID.']" type="text" style="width:150px;" value="'.$showOnPostWithIDValue.'" />
					<small style="color:#999999; font-size:xx-small;">(Enter the post ID&prime;s separated by commas)</small> 
				</div>
			</li>
			<li>
				<div style="padding:5px 4px 15px 4px; ">
					<b>Do not show</b> on these Posts: <input name="elbpro['.$dontShowOnPostWithID.']" type="text" style="width:150px;" value="'.$dontShowOnPostWithIDValue.'" />
					<small style="color:#999999; font-size:xx-small;">(Enter the post ID&prime;s separated by commas)</small> 
				</div>
			</li>';
			
		$recursive_page_name = $display_in_post.'12';
		$str .= '<li style="background-color:#F9F8F3; padding:10px 10px 10px 10px; -moz-border-radius: 8px; -khtml-border-radius: 8px; -webkit-border-radius: 8px;"><strong>Pages</strong>:'.$this->elbpro_page_list_recursive(0,$ex_pages,$selected_pageid,$display_in_page,$recursive_page_name).'</li>';
		
		if( !empty($cats) && $display_selected != 1 ){
			$str .= '
				<li><label><strong><br>Categories</strong>:&nbsp;</label>
					<label for="elbpro_show_caton">Show on:</label>&nbsp;
					<select name="elbpro['.$display_optin_in_cat.']" >'.$catstr.'
					</select>
					'.$cats.'
				</li>';
		}
		
		$str .= '</ul>';
		echo $str;
	}

	
	
	
	/**
	 * BACKUP DATABASE :: Backup immediate-list-building-pro Database Tables
	 */
	function elbpro_backupDatabaseTable( $table, $segment='none' ) {
		global $wpdb;
		$table_structure = $wpdb->get_results("DESCRIBE $table");
		if ( !$table_structure ) {
			$this->err_msg .= "<br>Error getting table details: $table";
			return false;
		}
		if(($segment == 'none') || ($segment == 0)) {
			// Add SQL statement to drop existing table
			$this->__elbpro_write("\n\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write("# " . sprintf('Delete any existing table %s',$this->__elbpro_backQuote($table)) . "\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write("\n");
			$this->__elbpro_write("DROP TABLE IF EXISTS " . $this->__elbpro_backQuote($table) . ";\n");
			// Table structure
			// Comment in SQL-file
			$this->__elbpro_write("\n\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write("# " . sprintf('Table structure of table %s',$this->__elbpro_backQuote($table)) . "\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write("\n");
			$create_table = $wpdb->get_results("SHOW CREATE TABLE $table", ARRAY_N);
			if ( false === $create_table ) {
				$e_msg = sprintf('Error with SHOW CREATE TABLE for %s.', $table);
				$this->err_msg .= '<br>'.$e_msg;
				$this->__elbpro_write("#\n# $e_msg\n#\n");
			}
			$this->__elbpro_write( $create_table[0][1] . ' ;' );
			if (false === $table_structure) {
				$e_msg = sprintf('Error getting table structure of %s', $table);
				$this->err_msg .= '<br>'.$e_msg;
				$this->__elbpro_write("#\n# $e_msg\n#\n");
			}
			// Comment in SQL-file
			$this->__elbpro_write("\n\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write('# ' . sprintf('Data contents of table %s',$this->__elbpro_backQuote($table)) . "\n");
			$this->__elbpro_write("#\n");
		}
		if(($segment == 'none') || ($segment >= 0)) {
			$defs = array();
			$ints = array();
			foreach ($table_structure as $struct) {
				if ( (0 === strpos($struct->Type, 'tinyint')) ||
					(0 === strpos(strtolower($struct->Type), 'smallint')) ||
					(0 === strpos(strtolower($struct->Type), 'mediumint')) ||
					(0 === strpos(strtolower($struct->Type), 'int')) ||
					(0 === strpos(strtolower($struct->Type), 'bigint')) ) {
						$defs[strtolower($struct->Field)] = ( null === $struct->Default ) ? 'NULL' : $struct->Default;
						$ints[strtolower($struct->Field)] = "1";
				}
			}
			// Batch by $row_inc
			if($segment == 'none') {
				$row_start = 0;
				$row_inc = ELBPRO_ROWS_PER_SEGMENT;
			} else {
				$row_start = $segment * ELBPRO_ROWS_PER_SEGMENT;
				$row_inc = ELBPRO_ROWS_PER_SEGMENT;
			}
			do {	
				// don't include extra stuff, if so requested
				$excs = (array) get_option('wp_db_backup_excs');
				$where = '';
				if ( is_array($excs['spam'] ) && in_array($table, $excs['spam']) ) {
					$where = ' WHERE comment_approved != "spam"';
				} elseif ( is_array($excs['revisions'] ) && in_array($table, $excs['revisions']) ) {
					$where = ' WHERE post_type != "revision"';
				}
				
				if ( !ini_get('safe_mode')) @set_time_limit(15*60);
				$table_data = $wpdb->get_results("SELECT * FROM $table $where LIMIT {$row_start}, {$row_inc}", ARRAY_A);

				$entries = 'INSERT INTO ' . $this->__elbpro_backQuote($table) . ' VALUES (';	
				//    \x08\\x09, not required
				$search = array("\x00", "\x0a", "\x0d", "\x1a");
				$replace = array('\0', '\n', '\r', '\Z');
				if($table_data) {
					foreach ($table_data as $row) {
						$values = array();
						foreach ($row as $key => $value) {
							if ($ints[strtolower($key)]) {
								// make sure there are no blank spots in the insert syntax,
								// yet try to avoid quotation marks around integers
								$value = ( null === $value || '' === $value) ? $defs[strtolower($key)] : $value;
								$values[] = ( '' === $value ) ? "''" : $value;
							} else {
								$values[] = "'" . str_replace($search, $replace, $this->__elbpro_sqlAddSlashes($value)) . "'";
							}
						}
						$this->__elbpro_write(" \n" . $entries . implode(', ', $values) . ') ;');
					}
					$row_start += $row_inc;
				}
			} while((count($table_data) > 0) and ($segment=='none'));
		}
		
		if(($segment == 'none') || ($segment < 0)) {
			// Create footer/closing comment in SQL-file
			$this->__elbpro_write("\n");
			$this->__elbpro_write("#\n");
			$this->__elbpro_write("# " . sprintf('End of data contents of table %s',$this->__elbpro_backQuote($table)) . "\n");
			$this->__elbpro_write("# --------------------------------------------------------\n");
			$this->__elbpro_write("\n");
		}
		return true;
	}
	
	
	
	/**
	 * Restore Database Tables
	 */
	function elbpro_RestoreTable( $filename ) {
		global $wpdb, $wp_version;
		$restored = false;
		$plugin = ELBPRO_PATH;
		$q_tmp = '';
		$q_lines = file( $filename );
		
		if ( $wp_version >= '2.5' ) $was_activated = is_plugin_active( $plugin );
		// Deactivate the plugin silently
		if ( $was_activated ) {
			deactivate_plugins($plugin, true);
		}
		foreach ($q_lines as $q_line) {
			// Only continue if it's not a comment
			if ( substr($q_line,0,1) != '#' && substr($q_line,0,2) != '--' && $q_line != '' ) {
				$q_tmp .= $q_line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($q_line),-1,1) == ';') {
					$rs = $wpdb->query($q_tmp); 
					if ( $rs === false ) return false;
					else $restored = true;
					$q_tmp = '';
				}
			}
		}
		// Reactivate plugin
		if( $was_activated ) {
			echo '<iframe style="display:none" src="' . wp_nonce_url('update.php?action=activate-plugin&plugin=' . $plugin, 'activate-plugin_' . $plugin) .'"></iframe>';
		}
		return $restored;
	}
	
	
	/**
		UPGRADE EMAIL LIST BULING PRO
	**/
	
	function elbpro_UpgradePlugin() {
		global $wp_version;
		$plugin = ELBPRO_PATH;
		if ( $wp_version >= 2.5 ) {
			$res = $this->elbpro_DoPluginUpgrade( $plugin );
		} else {
			$this->msg = '&raquo; Wordpress 2.5 or higher required for automatic upgrade.';
		}
		if ( $res == false ) $this->msg .= '&raquo; Plugin couldn\'t be upgraded.';
		$msg = $this->msg;
		return $msg;
	}
	
	
	function elbpro_DoPluginUpgrade( $plugin ){
		set_time_limit(300);
		global $wp_filesystem;
		$debug = 0;
		$was_activated = is_plugin_active($plugin); // Check current status of the plugin to retain the same after the upgrade

		// Is a filesystem accessor setup?
		if ( ! $wp_filesystem || !is_object($wp_filesystem) ) {
			WP_Filesystem();
		}
		if ( ! is_object($wp_filesystem) ) {
			$this->msg = '&raquo; Could not access filesystem.<br /><br />';
			return false;
		}
		if ( $wp_filesystem->errors->get_error_code() ) {
			$this->msg = '&raquo; Filesystem error '.$wp_filesystem->errors.'<br /><br />';
			return false;
		}
		
		if ( $debug ) $this->msg = '> File System Okay.<br /><br />';
		
		// Check all the necesseary security feature and get the URL of zip file. 
		$package = ''; // !!! IMPORTANT !!!
		
		// Get the URL to the zip file
		///$package = $_GET['dnl'];
		if ( empty($package) ) {
			$this->msg = '&raquo; Upgrade package not available.<br /><br />';
			return false;
		}
		// Download the package
		$file = download_url($package);
		if ( is_wp_error($file) || $file == '' ) {
			$this->msg = '&raquo; Download failed. '.$file->get_error_message().'<br /><br />';
			return false;
		}
		
		$working_dir = ELBPRO_ABSPATH . 'wp-content/upgrade/' . basename($plugin, '.php');
		
		if ( $debug ) $this->msg =  '> Working Directory = '.$working_dir.'<br /><br />';
		
		
		// Unzip package to working directory
		$result = $this->elbpro_UnzipFile($file, $working_dir);
		if ( is_wp_error($result) ) {
			unlink($file);
			$wp_filesystem->delete($working_dir, true);
			$this->msg = '&raquo; Couldn\'t unzip package to working directory. Make sure that "/wp-content/upgrade/" folder has write permission (CHMOD 755).<br /><br />';
			return $result;
		}
		
		if ( $debug ) $this->msg = '> Unzip package to working directory successful<br /><br />';
				
		// Once extracted, delete the package
		unlink($file);
		if ( is_plugin_active($plugin) ) {
			deactivate_plugins($plugin, true); //Deactivate the plugin silently, Prevent deactivation hooks from running.
		}
		
		// Remove the old version of the plugin
		$plugin_dir = dirname(ELBPRO_ABSPATH . PLUGINDIR . "/$plugin");
		$plugin_dir = trailingslashit($plugin_dir);
		// If plugin is in its own directory, recursively delete the directory.
		if ( strpos($plugin, '/') && $plugin_dir != $base . PLUGINDIR . '/' ) {
			$deleted = $wp_filesystem->delete($plugin_dir, true);
		} else {

			$deleted = $wp_filesystem->delete($base . PLUGINDIR . "/$plugin");
		}
		if ( !$deleted ) {
			$wp_filesystem->delete($working_dir, true);
			$this->msg =  '&raquo; Could not remove the old plugin. Make sure that "/wp-content/plugins/" folder has write permission (CHMOD 755).<br /><br />';
			return false;
		}
		
		if ( $debug ) $this->msg =  '> Old version of the plugin removed successfully.<br /><br />';

		// Copy new version of plugin into place
		if ( !$this->elbpro_CopyDir($working_dir, ELBPRO_ABSPATH . PLUGINDIR) ) {
			$this->msg =  '&raquo; Installation failed. Make sure that "/wp-content/plugins/" folder has write permission (CHMOD 755)<br /><br />';
			return false;
		}
		//Get a list of the directories in the working directory before we delete it, we need to know the new folder for the plugin
		$filelist = array_keys( $wp_filesystem->dirlist($working_dir) );
		// Remove working directory
		$wp_filesystem->delete($working_dir, true);
		// if there is no files in the working dir
		if( empty($filelist) ) {
			$this->msg = '&raquo; Installation failed.<br /><br />';
			return false; 
		}
		$folder = $filelist[0];
		$plugin = get_plugins('/' . $folder);      // Pass it with a leading slash, search out the plugins in the folder, 
		$pluginfiles = array_keys($plugin);        // Assume the requested plugin is the first in the list
		$result = $folder . '/' . $pluginfiles[0]; // without a leading slash as WP requires
		
		if ( $debug ) $this->msg = '> Copy new version of plugin into place successfully.<br /><br />';
		
		if ( is_wp_error($result) ) {
			$this->msg = '&raquo; '.$result.'<br><br>';
			return false;
		} else {
			//Result is the new plugin file relative to PLUGINDIR
			$this->msg = '&raquo; Plugin upgraded successfully<br><br>';	
			if( $result && $was_activated ){
				$this->msg .= '&raquo; Attempting reactivation of the plugin...<br><br>';	
				echo '<iframe style="display:none" src="' . wp_nonce_url('update.php?action=activate-plugin&plugin=' . $result, 'activate-plugin_' . $result) .'"></iframe>';
				sleep(15);
				$this->msg .= '&raquo; Plugin reactivated successfully.<br><br>';	
			}
			return true;
		}
	}
	
	
	
	/**
	 * Unzips the file to given directory
	 */
	function elbpro_UnzipFile( $file, $to ) {
		global $wp_filesystem;
		if ( ! $wp_filesystem || !is_object($wp_filesystem) )
			return new WP_Error('fs_unavailable', 'Could not access filesystem.');
		$fs =& $wp_filesystem;
		require_once(ABSPATH . 'wp-admin/includes/class-pclzip.php');
		$archive = new PclZip($file);
		// Is the archive valid?
		if ( false == ($archive_files = $archive->extract(PCLZIP_OPT_EXTRACT_AS_STRING)) )
			return new WP_Error('incompatible_archive', 'Incompatible archive', $archive->errorInfo(true));
		if ( 0 == count($archive_files) )
			return new WP_Error('empty_archive', 'Empty archive');
		$to = trailingslashit($to);
		$path = explode('/', $to);
		$tmppath = '';
		for ( $j = 0; $j < count($path) - 1; $j++ ) {
			$tmppath .= $path[$j] . '/';
			if ( ! $fs->is_dir($tmppath) )
				$fs->mkdir($tmppath, 0755);
		}
		foreach ($archive_files as $file) {
			$path = explode('/', $file['filename']);
			$tmppath = '';
			// Loop through each of the items and check that the folder exists.
			for ( $j = 0; $j < count($path) - 1; $j++ ) {
				$tmppath .= $path[$j] . '/';
				if ( ! $fs->is_dir($to . $tmppath) )
					if ( !$fs->mkdir($to . $tmppath, 0755) )
						return new WP_Error('mkdir_failed', 'Could not create directory');
			}
			// We've made sure the folders are there, so let's extract the file now:
			if ( ! $file['folder'] )
				if ( !$fs->put_contents( $to . $file['filename'], $file['content']) )
					return new WP_Error('copy_failed', 'Could not copy file');
				$fs->chmod($to . $file['filename'], 0755);
		}
		return true;
	}
	
	
	/**
	 * Copies directory from given source to destination
	 */
	function elbpro_CopyDir($from, $to) {
		global $wp_filesystem;
		$dirlist = $wp_filesystem->dirlist($from);
		$from = trailingslashit($from);
		$to = trailingslashit($to);
		foreach ( (array) $dirlist as $filename => $fileinfo ) {
			if ( 'f' == $fileinfo['type'] ) {
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true) ) return false;
				$wp_filesystem->chmod($to . $filename, 0644);
			} elseif ( 'd' == $fileinfo['type'] ) {
				if ( !$wp_filesystem->mkdir($to . $filename, 0755) ) return false;
				if ( !$this->elbpro_CopyDir($from . $filename, $to . $filename) ) return false;
			}
		}
		return true;
	}
	
	
	
	/***
	* Squeeze Page Custom Fields	
	*/
	function elbpro_SqueezePage_CustomFields() { echo 'ONLY ON PRO VERSION';}

	/**
	 * Adds/edits/deletes Squeeze Page
	 */
	function elbpro_sqpg_MetaData() {
	
		error_reporting(E_ALL ^ E_NOTICE); 
	
		global $wpdb;
		if ( !isset($id) ) {
			$id = $_REQUEST['post_ID'];
		}
		if( !current_user_can('edit_post', $id) ) {
			return $id;
		}
		foreach ( $this->elbpro_customFields as $customField ) {
				if ( isset( $_POST[ $customField ] ) && trim( $_POST[ $customField ] ) != '' ) {
					update_post_meta( $id, $customField , $_POST[$customField] );
				} else {
					delete_post_meta( $id, $customField );
				}
		}
	}
	
	

	
	
} // Eof Class

$EmailListBuildingProPlugin = new EmailListBuildingProPlugin();


/**
*	Template Tag
*/

function elbpro_display_optinForm( $id ) {
	global $EmailListBuildingProPlugin;
	echo $replace_optin_form = $EmailListBuildingProPlugin->__elbpro_post_content( '', $id );
}

/**
*	SQUEEZE PAGE 
**/

function elbpro_sqeezePg( $elbp_szpg_tmp, $elbp_szpg_select_btm_design, $elbp_szpg_btm_type, $elbp_szpg_btm_txt,  $elbp_szpg_selected_arp,$elbp_szpg_trackingcode,$elbp_szpg_firstname,$elbp_szpg_lastname,$elbp_szpg_namefld,$elbp_szpg_emailfld, $elbp_szpg_videoCode, $elbp_szpg_preHeadline, $elbp_szpg_headline,$elbp_szpg_form_headline, $elbp_szpg_securaty_note,$elbp_szpg_submit_btmtxt, $elbp_szpg_sco_title,$elbp_szpg_sco_meta_dec, $elbp_szpg_sco_meta_key,$elbp_szpg_sco_noindex, $elbp_szpg_sco_nofollow,$elbp_szpg_sco_noarchive,$elbp_szpg_sco_footer_code, $post_content, $elbp_szpg_videourl, $elbp_szpg_videoWidth, 
$elbp_szpg_videoHeight, $elbp_szpg_sbtmC, $elbp_szpg_videoautoplay, $elbp_szpg_videocontrolbar, $elbp_szpg_subheadline, $elbp_szpg_design_color , $elbp_szpg_imageUrl, $elbp_szpg_imagealt, $elbp_szpg_imagealert ) {
	global $EmailListBuildingProPlugin;
	$EmailListBuildingProPlugin->__elbpro_squeezePG(  $elbp_szpg_tmp, $elbp_szpg_select_btm_design, $elbp_szpg_btm_type, $elbp_szpg_btm_txt,  $elbp_szpg_selected_arp,$elbp_szpg_trackingcode,$elbp_szpg_firstname,$elbp_szpg_lastname,$elbp_szpg_namefld,$elbp_szpg_emailfld, $elbp_szpg_videoCode, $elbp_szpg_preHeadline, $elbp_szpg_headline,$elbp_szpg_form_headline, $elbp_szpg_securaty_note,$elbp_szpg_submit_btmtxt, $elbp_szpg_sco_title,$elbp_szpg_sco_meta_dec, $elbp_szpg_sco_meta_key,$elbp_szpg_sco_noindex, $elbp_szpg_sco_nofollow,$elbp_szpg_sco_noarchive,$elbp_szpg_sco_footer_code, $post_content, $elbp_szpg_videourl, $elbp_szpg_videoWidth, 
$elbp_szpg_videoHeight, $elbp_szpg_sbtmC, $elbp_szpg_videoautoplay, $elbp_szpg_videocontrolbar, $elbp_szpg_subheadline, $elbp_szpg_design_color, $elbp_szpg_imageUrl, $elbp_szpg_imagealt, $elbp_szpg_imagealert   );
}

/**
	SIDEBAR OPTIN FORM 
**/

/**
 * Display Optin Form in sidebar
 */
function elbpro_displayOptinFormOnSidebar( $sidebar_width, $title='', $before_widget='', $after_widget='', $before_title='', $after_title='', $sidebar_bgcolor, $sidebar_imageRePosition ) {
	global $EmailListBuildingProPlugin;
	if ( !is_admin() ) {
		echo $before_widget;
		if ( trim( $title ) != '' ) echo $before_title.$title.$after_title;
		echo $EmailListBuildingProPlugin->__elbpro_sidebar_optinForm( $sidebar_width, $sidebar_bgcolor, $sidebar_imageRePosition );
		echo $after_widget;
	}
}


if ( $wp_version >= 2.8 ) {
	class EmailListBuildingProPluginWidget extends WP_Widget {
		function EmailListBuildingProPluginWidget() {
			$widget_ops = array(
				'classname' => 'widget_elbpro', 
				'description' => 'Immediate List Building Pro' 
				);
			$control_ops = array (
				/*'width' => '380', 
				'height' => '400'*/
				);
			$this->WP_Widget('elbproOfa', 'Immediate List Building Pro', $widget_ops, $control_ops);
		}
		function widget( $args, $instance ) {		
			global $EmailListBuildingProPlugin;
			extract( $args );
			$sidebar_title = $instance['elbpro_optin_widget_title'];
			// Global data
			$sidebar_width = ''; //$instance['elbpro_optin_width'];
			$sidebar_bgcolor = '';
			$sidebar_imageRePosition = $instance['elbpro_sidebarImgPosition'];
			// Eof global data
			if( $instance['elbpro_sidebar_widget'] == 1 ) {
				elbpro_displayOptinFormOnSidebar( $sidebar_width, $sidebar_title, $before_widget, $after_widget, $before_title, $after_title, $sidebar_bgcolor, $sidebar_imageRePosition );
			}
		}
		function update( $new_instance, $old_instance ) {				
			global $EmailListBuildingProPlugin, $wp_version;
			return $new_instance;
		}
		function form( $instance ) {
		
			error_reporting(E_ALL ^ E_NOTICE); 
			
			global $EmailListBuildingProPlugin, $wp_version, $wpdb;
			
			if( $instance['elbpro_sidebarImgPosition'] == 1 ) $checked1 = 'checked';
			else if( $instance['elbpro_sidebarImgPosition'] == 2 ) $checked2 = 'checked';
			else if( $instance['elbpro_sidebarImgPosition'] == 3 ) $checked3 = 'checked';
			else if( $instance['elbpro_sidebarImgPosition'] == ''  ) $checked2 = 'checked';
			?>
			<div style="background-color:#f8f8f8; padding:3px;">
			
	  			<div style="padding:8px 8px 8px 8px;">
				Title: <input type="text" class="widefat" name="<?php echo $this->get_field_name("elbpro_optin_widget_title"); ?>" id="<?php echo $this->get_field_id('elbpro_optin_widget_title'); ?>" value="<?php echo $instance['elbpro_optin_widget_title']; ?>" style="width:200px;" />
				</div >

				<div style="padding:8px 8px 8px 8px; background-color:#f1f1f1">	
				I have uploaded image need to adjust its position, Change image position to: 
				 <div style="padding-top:5px;"> 
				  <input name="<?php echo $this->get_field_name("elbpro_sidebarImgPosition"); ?>" id="<?php echo $this->get_field_id('elbpro_sidebarImgPosition'); ?>" type="radio" value="1" <?php echo $checked1; ?> /> Left &nbsp;&nbsp;
				  <input name="<?php echo $this->get_field_name("elbpro_sidebarImgPosition"); ?>" id="<?php echo $this->get_field_id('elbpro_sidebarImgPosition'); ?>" type="radio" value="2"  <?php echo $checked2; ?> /> Center &nbsp;&nbsp;
				  <input name="<?php echo $this->get_field_name("elbpro_sidebarImgPosition"); ?>" id="<?php echo $this->get_field_id('elbpro_sidebarImgPosition'); ?>" type="radio" value="3"  <?php echo $checked3; ?> /> Right
				  <div style="padding-top:8px; color:#999999; font-size:9px;"> 
				  (Note: If image is not moving to left or on right direction then do not worry, 
				  its just your option width is not sufficient to move image on left or right direction)
				  </div>
				  </div>
				</div>
				

			</div>	
				<input type="hidden" id="<?php echo $this->get_field_id('elbpro_sidebar_widget'); ?>" name="<?php echo $this->get_field_name('elbpro_sidebar_widget'); ?>" value="1" />	
			<?php
		}
	}
	add_action('widgets_init', create_function('', 'return register_widget("EmailListBuildingProPluginWidget");'));
}


?>