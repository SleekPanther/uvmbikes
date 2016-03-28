<?php
	echo "\t\t\t<!-- Galleria section -->\n".
	"\t\t\t<div class='galleria'>\n";
	
	$url = $upFolderPlaceholder."/images/slideshow/1homepage" ;	//path to the folder where the images are. 

	$dir = scandir($url);		//this scans the directory & gets a filename list
		
	$numberOfImages = count($dir) - 3;		//minus 3 to get rid of the "zip"large" folder, & the 2 system folders . and ..
	
	//print 1-9 section
	if ($numberOfImages < 10) {					//if it's less than 10, print 1 to $numberOfImages
		for ($i=1; $i<= $numberOfImages; $i++) {	
			echo "\t\t\t\t" . '<img src="'. $url. '/image00' . $i . '.jpg" alt="">'. "\n"  ;
		}
	}
	else  {				//if more than 10, print 1 to 9 inclusive
		for ($i=1; $i<= 9; $i++) {			// <= important here
			echo "\t\t\t\t" . '<img src="../galleria/images/'. $fileName .'/image00' . $i . '.jpg" alt="">'. "\n"  ;
		}
	}
	
	
	//print 10-99 section
	//once here, the numbers 1-10 should ALL be printed
	if ($numberOfImages < 100) { 	//if it's >10 & less than 100, print 10 to $numberOfImages
		for ($i=10; $i<= $numberOfImages; $i++) {	
			echo "\t\t\t\t" . '<img src="../galleria/images/'. $fileName .'/image0' . $i . '.jpg" alt="">'. "\n"  ;
		}
	}
	else {				// if it's more than 100, print 10 to 99 inclusive
		for ($i=10; $i<= 99; $i++) {		// <= important here
			echo "\t\t\t\t" . '<img src="../galleria/images/'. $fileName .'/image0' . $i . '.jpg" alt="">'. "\n"  ;
		}
	}
	
	//print  > 100 section
	if ($numberOfImages < 1000) {		//accounts for all cases greater than 100 & < 1000
		for ($i=100; $i<= $numberOfImages; $i++) {	
			echo "\t\t\t\t" . '<img src="../galleria/images/'. $fileName .'/image' . $i . '.jpg" alt="">'. "\n"  ;
		}
	}
	
	echo "\t\t\t</div>\n".
	"\t\t\t<!-- end galleria section -->\n";
?>