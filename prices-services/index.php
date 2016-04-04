<?php include("../non-pages/php-include/top.php"); ?>

<main>
    <div class="widthContainer">
        <article><h1 class="cent"><?php echo $navTitle; ?></h1></article>
    </div>
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <h2>Common Repairs</h2>
                    <ul>
                        <li>Pump your tires</li>
                        <li>Fix a flat</li>
                        <li>Oil/clean chain</li>
                        <li>Adjust shifting</li>
                        <li>Tighten brakes</li>
                        <li>New Shift/Brake housing</li>
                        <li></li>
                    </ul>
                    <h2>More Advanced Repairs</h2>
                    <p>Need more? No worries. We're here to help you with anything, from cassette replacement to new bottom brackets or a big overhaul.</p>
                    <p></p>
                </article>
            </div>
            <div class="twoCol">
                <article>
                    <h2>Bike Rentals</h2>
                    <p>Get your own bike for the semester. Rent a bicycle for $30 for the semester, or $50 for the year. Come on in to the Bike Center to pick one up. Choose from our selection of road, hybrid, and mountain bikes for your favorite type of riding.</p>
                    <h4>Biking preferences change with the weather?</h4>
                    <p>Exchange your rental for a more suitable ride in the warm and cold months.</p>
                    <h2>Bike Share</h2>
                    <p>Ride for free!</p>
                    <p>One simple sign-up, and you can have access to a bike year round!</p>
                    <p>Come by the Davis Center to get your wheels today.</p>
                </article>
            </div>
        </div>

        <article>
            <h2 class="cent">Prices</h2>
            <table>
                <?php
                $pricesFile = fopen($upFolderPlaceholder . "non-pages/csv/parts.csv", "r");

                while (!feof($pricesFile)) {               //while not "end of file(eof)"
                    $pricesFileContents[] = fgetcsv($pricesFile);     //add rows to $pricesFileContents array. It becomed a  2D array
                }
                fclose($pricesFile);      //closes the file

                foreach ($pricesFileContents as $row) {       //loop through the rows in the file
                    echo "\t\t<tr>\n";

                    for ($i = 1; $i < count($row); $i++) {     //start @ index=1, since 0th columns is for whether it's a header or not
                        if ($row[0] == "header") {        //compare the 0th column. If it's a header (& has the contents "header")
                            echo "\t\t\t<th>", //print it as a header NOT a normal <td>
                            $row[$i],
                            "</th>\n";
                        } else {                       //if it's NOT a header, just print the contents as a normal <td>
                            echo "\t\t\t<td>",
                            $row[$i], //prints the cell (row @ indes $i, since $i starts at 1, there's no danger of printing out "header")
                            "</td>\n";
                        }
                    }

                    echo "\n\t\t</tr>\n";
                }
                ?>
            </table>
        </article>
    </div>
</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>