<?php include("../non-pages/php-include/top.php"); ?>

<section class="mainContent">
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <h1><?php echo $navTitle; ?></h1>
                </article>
            </div>
        </div>


        <!--<div class="colContainer">
            <div class="twoCol">
                <article>
                </article>
            </div>
        </div>-->

        <article>
            <h2>Prices lists table</h2>
            <table>
                <?php
                    $pricesFile = fopen($upFolderPlaceholder . "non-pages/csv/parts.csv", "r");

                    while (!feof($pricesFile)) {               //while not "end of file(eof)"
                        $pricesFileContents[] = fgetcsv($pricesFile);     //add rows to $pricesFileContents array. It becomed a  2D array
                    }
                    fclose($pricesFile);      //closes the file
                    
                    
                    //for($i = 0; $i < 2; $i++)
                    foreach($pricesFileContents as $row){
                        echo "\<tr>\n";
                        
                        foreach($row as $cell){
                            echo "\t\t<th>",
                                 $pricesFileContents[0][$i],
                                 "</td>";
                        }
                        
                        echo "\<tr>\n";
                    }
                    
                ?>
            </table>
        </article>
    </div>
</section>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>