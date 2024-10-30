<?php
$curr_path = dirname( __FILE__ );
$elbpro_path = str_replace("\\", "/", strstr($curr_path, 'wp-content'));
$count     = substr_count(trim($elbpro_path, '/'), '/');
if ( $count > 0 )
 for ($i=0; $i<=$count; $i++)
  $_elbpro_path .= "../";
	require_once($_elbpro_path.'wp-config.php');

$lic = filter_input(INPUT_POST, 'lic', FILTER_SANITIZE_SPECIAL_CHARS);
$act = filter_input(INPUT_POST, 'act', FILTER_SANITIZE_SPECIAL_CHARS);
$apth = filter_input(INPUT_POST, 'apath', FILTER_SANITIZE_SPECIAL_CHARS);

// create file
if( $act == 1 ) { 
	if ( !file_exists( $apth ) ) {
		$config  = "<?php\n";
		$config .= "\$key='$lic';\n";
		$config .= "?>";
		
		if (($fp = fopen( $apth, "w"))) {
			fputs( $fp, $config, strlen( $config ) );
			fclose( $fp );
		}
	} 
	echo 'successfully';
} else {
	unlink( $apth );
	echo 'successfully';
}

?>