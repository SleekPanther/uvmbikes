<?php include("../non-pages/php-include/top.php"); ?>
<main>
    <div class="widthContainer">
        <article><h1 class="cent"><?php echo $navTitle; ?></h1></article>
    </div>
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <p>Stay up to date with out most current developments on our <a href="https://www.facebook.com/UVMBIKES">facebook page</a></p>
                    <p>Get your hands dirty and learn how to fix your own bike.</p>
                    <p>From Time to time we offer FREE introductory bicycle maintenance workshops for UVM Community members.</p>
                    <h4>Beginner Level</h4>
                    <p>Class are geared for someone that is new to bicycle maintenance and is interested in learning the fundamentals that are key to proper bicycle maintenance.</p>
                </article>
            </div>
            <div class="twoCol">
                    <?php
                        $classesFile = fopen($upFolderPlaceholder . "non-pages/csv/classes.csv", "r");          //open the classes file
                        
                        while (!feof($classesFile)) {               //while not "end of file(eof)"
                            $classesFileContents[] = fgetcsv($classesFile);     //add rows to $hoursFileContents array. It becomes a  2D array
                        }
                        fclose($classesFile);      //closes the file

                        for ($i = 1; $i < count($classesFileContents); $i++) {      //go through lines of file, skipping the 1st one (since it's headers)
                            echo "\t\t<article>\n",
                                "\t\t\t<h2>".$classesFileContents[$i][0]."</h2>\n",
                                "\t\t\t<h4>".$classesFileContents[$i][1]."</h4>\n",
                                "\t\t\t<p>".$classesFileContents[$i][2]."</p>\n";       //print out the 1st 3 items. Title, Data, Description
                            
                            //if there's extra content in the description (not empty content), then print it out in a paragraph. This $j starts @ 3 (since the indexes 0-2 have already been printed
                            for($j = 3; $j< count($classesFileContents[$i]) ; $j++){
                                echo "\t\t\t<p>".$classesFileContents[$i][$j]."</p>\n";
                            }
                            echo "\t\t</article>\n";
                        }
                    ?>
                
                <article>
                    <h2>Secondary title?</h2>
                    <p>Previous workshops have included the following</p>
                    <ul>
                        <li>Bicycle vocabulary and names of components</li>
                        <li>Overview of different systems that make the bike go and stop</li>
                        <li>In depth lesson on how to change/repair a flat tire</li>
                        <li>Opportunity for specific questions that you have about your bicycle!</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>