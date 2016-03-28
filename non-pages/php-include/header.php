<!-- header -->
<?php
$fileObject = fopen($upFolderPlaceholder . "non-pages/csv/hours.csv", "r");

while (!feof($fileObject)) {               //while not "end of file(eof)"
    $file[] = fgetcsv($fileObject);     //add rows to $file array. It becomed a  2D array
}
fclose($fileObject);      //closes the file

$daysRow = $file[0];        //get the 1st row of data to compare to current date
$hoursRow = $file[1];       //store the 2nd row with hours in a separate array (easier to understand)
$today = getdate()['weekday'];      //returns an actual word of the day, e.g. Sunday or Monday
for($i =0; $i< count($daysRow); $i++){      //loop through the days array
    if( $daysRow[$i] == $today){        //compare the current index in the days array to the current day ($today)
        $todayHours = $hoursRow[$i];    //set the value of $todayHours to the corresponding index in the 2nd row where the indexes match
        break;      //break out the the loop since there's no point continuing once a match is found
    }
}
?>
<header>
    <div class="todayHours">
        <section class="widthContainer">
            Hours Today: <?php echo $todayHours; ?> | <a href="<?php echo $upFolderPlaceholder; ?>hours/index.php">See all hours</a>
        </section>
    </div>

    <?php include ($upFolderPlaceholder . "non-pages/php-include/galleria-images.php"); ?>

</header>
<!-- end header -->
