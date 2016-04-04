<?php include("../non-pages/php-include/top.php"); ?>
<main>
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
                echo "\t<tr>\n";        //start table row for headers  (Sunday, Monday ...
                for($i = 0; $i < 7; $i++){       //go from 0 to 7 (just in canse there's any extra text in the row, only bother pringing the 1st 7 days)
                    echo "\t\t\t<th>",
                            $hoursFileContents[0][$i],      //print the 1st row, & all elements in the row
                        "</th>\n";
                }
                echo"\t\t</tr>\n";
                
                echo "\t\t<tr>\n";          //print the actual hours using a td instead of th
                for($i = 0; $i < 7; $i++){
                    echo "\t\t\t<td>",
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