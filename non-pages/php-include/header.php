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

$daysOfWeekArray = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$currentDayHoursTableActiveArray = array();
$currentDayHoursTableActiveArray = array_fill_keys($daysOfWeekArray, '');        //need to fill the array with something so it exists. Start with blank, but works with any character. Just as long as the array has a key, it will be have a space to be overwritten
        for($i = 0; $i < 7 ; $i++){      //loop through the page array
            if($today == $daysOfWeekArray[$i]){   //if the current containing folder (the active page) == the key stored in the page Array
                $currentDayHoursTableActiveArray[$today]= "currentDayHoursTable";     //print "activePage" in the $activePageArray, at the index of "containing_folder". It's associative, so $activePageArray must be accessed via a key, in this case it's the $containing_folder (or current page)
                break;      //if it finds the current page, break out of the loop, there's no point in continuing. (This hopefully helps avoid the case where 2 pages are considered "active"
            }
        }
?>
<header>
    <section class="headerInfo">
        <div class="widthContainer">
            <article>
            <div class="todayHours">Hours Today: <?php echo $todayHours; ?> | <a href="<?php echo $upFolderPlaceholder; ?>hours/index.php">See all hours</a></div>
            <div class='tinyLocation'>105 Carrigan Dr, Burlington, VT</div>
            </article>
        </div>
    </section>

    <?php include ($upFolderPlaceholder . "non-pages/php-include/galleria-images.php"); ?>

</header>
<!-- end header.php -->
