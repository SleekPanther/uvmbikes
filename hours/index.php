<?php include("../non-pages/php-include/top.php"); ?>
    <div class="widthContainer">
        <article><h1 class="cent"><?php echo $navTitle; ?></h1></article>
    </div>
    <div class="widthContainer">
        <article>
            <?php
                // $hoursFileContents already exists from header, so don't bother opening the file again
                if($hoursFileContents[2][0] != ''){     //if the 3rd row, 1st element has text, print it (something like "Closed for the summer - Sorry"
                    echo "<h2>" . $hoursFileContents[2][0] . "</h2>\n";
                }
            ?>
            <table>
            <?php
            $daysOfWeekArray = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");   //array to be used as keys for the 2nd array
            $currentDayHoursTableActiveArray = array();     //initialize a blank array to hold "currentDayHoursTable", a class highlighting the current day
            $currentDayHoursTableActiveArray = array_fill_keys($daysOfWeekArray, '');        //need to fill the array with something so it exists. Start with blank, but works with any character. Just as long as the array has a key, it will be have a space to be overwritten
            //uses $today, a string variable holding the current day, assigned in header.php with php getdate()
            for($i = 0; $i < count($daysOfWeekArray) ; $i++){      //loop through the $daysOfWeekArray array 
                if($today == $daysOfWeekArray[$i]){   //if the current day matched the kay in the 2nd array
                    $currentDayHoursTableActiveArray[$today]= "currentDayHoursTable";     //print "currentDayHoursTable" in the $currentDayHoursTableActiveArray, at the index of $today. It's associative, so $currentDayHoursTableActiveArray must be accessed via a key, in this case it's the $today
                    break;      //if it finds the current day, break out of the loop, there's no point in continuing.
                }
            }
            
                echo "\t<tr>\n";        //start table row for headers  (Sunday, Monday ...
                for($i = 0; $i < 7; $i++){       //go from 0 to 7 (just in canse there's any extra text in the row, only bother pringing the 1st 7 days)
                    
                    echo "\t\t\t<th class=\"" . $currentDayHoursTableActiveArray[$hoursFileContents[0][$i]] . "\">",    //print class='currentDayHoursTable' for the current day. 0th row, $i'th element in the row. This is the header row, so the contents match
                            $hoursFileContents[0][$i],      //print the 1st row, & all elements in the row
                        "</th>\n";
                }
                echo"\t\t</tr>\n";
                
                echo "\t\t<tr>\n";          //print the actual hours using a td instead of th
                for($i = 0; $i < 7; $i++){
                    echo "\t\t\t<td class=\"" . $currentDayHoursTableActiveArray[$hoursFileContents[0][$i]] . "\">",    //print class='currentDayHoursTable' for the current day. This is the 2nd row down, but it still need to be compared based on the value in the header row: 0th row, $i'th element in the row
                            $hoursFileContents[1][$i],
                        "</td>\n";
                }
                echo"\t\t</tr>\n";
            ?>
            </table>
        </article>
        
        <article>
            <h2>Our Volunteers</h2>
            <iframe class="volunteerCalendar" src="https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=reauks4s5avjthhqoo9sm7acks%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York"></iframe><!-- width="800" height="600" -->
        </article>
    </div>
</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>