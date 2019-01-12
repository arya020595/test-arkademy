<?php 

function buat_persegi($panjang, $ganjil) {

	for($i=1; $i<=$panjang; $i++)
	{
	    for($j=0; $j<=$ganjil; $j++)
	        {
	            if ($i==1||$i==$panjang||$j==0||$j==$ganjil)
	            {
	                echo("* ");
	            }
	            else
	            {
	                echo("&nbsp; &nbsp;");
	            }
	        }
	    echo("<br>");
	}	
}
 
?>

<?php 

buat_persegi(7, 6);

 ?>