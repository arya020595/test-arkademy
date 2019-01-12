<?php 
function replace_kata($yang_dihapus, $yang_disisipi, $text) 
{
	$text = str_replace($yang_dihapus, $yang_disisipi, $text);
	echo $text;
} 
?>

<?php 
  replace_kata(' ', '_', 'Aku adalah lelaki' );
?>