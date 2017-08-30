<!-- header.php -->
<?php
$hoursFile = fopen($upFolderPlaceholder . "non-pages/csv/hours.csv", "r");

while (!feof($hoursFile)) {               //while not "end of file(eof)"
	$hoursFileContents[] = fgetcsv($hoursFile);     //add rows to $hoursFileContents array. It becomes a  2D array
}
fclose($hoursFile);      //closes the file

$daysRow = $hoursFileContents[0];        //get the 1st row of data to compare to current date
$hoursRow = $hoursFileContents[1];       //store the 2nd row with hours in a separate array (easier to understand)
$today = getdate()['weekday'];      //returns an actual word of the day, e.g. Sunday or Monday
for($i =0; $i< count($daysRow); $i++){      //loop through the days array
	if( $daysRow[$i] == $today){        //compare the current index in the days array to the current day ($today)
		$todayHours = $hoursRow[$i];    //set the value of $todayHours to the corresponding index in the 2nd row where the indexes match
		break;      //break out the the loop since there's no point continuing once a match is found
	}
}
?>
<header>
	<section class="headerInfo">
		<div class="widthContainer">
			<article>
				<div class="todayHours"><a href="<?php echo $upFolderPlaceholder; ?>hours/index.php">Hours Today:</a> <span class='todayHoursActualContent'><?php echo $todayHours; ?></span></div>
				<div class='tinyLocation'>Hills Building Basement (next to Davis Center)</div>
			</article>
		</div>
	</section>

	<section class="outdated-warning-banner">
		THIS SITE IT NO LONGER UPDATED! It was made for a 2016 class project, contact <a href="bikesuvm@gmail.com">bikesuvm@gmail.com</a> for hours & info
	</section>

	<?php include ($upFolderPlaceholder . "non-pages/php-include/galleria-images.php"); ?>

</header>

<main id="actualMainContent"><!-- this div begins the actual content but is actually in header.php -->
<!-- end header.php -->
