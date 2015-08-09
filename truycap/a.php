
<?php 
function displayHits()
{
	  $filename = "truycap/counter.txt"; 
	  $openCounter = fopen ($filename, "r"); 
	  $hitCount = fread ($openCounter, filesize($filename)); 
	  fclose ($openCounter); 
	  chmod($filename,0766);
	  $hitCount=$hitCount+1; 
	  
	  $updateCounter = fopen ($filename, "w"); 
	  fwrite ($updateCounter,$hitCount); 
	  fclose ($updateCounter);
	  chmod($filename,0744);

	  $hitCount = sprintf("%06d", $hitCount);		  
				
			for($i=0; $i<strlen($hitCount); $i++) 
				{		  
					echo "<img src='images/truycap/imagesvisit/$hitCount[$i].png' height='20px'>";	 
				}
	  
}
?>

