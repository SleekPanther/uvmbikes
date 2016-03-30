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
                    
                    foreach($pricesFileContents as $row){       //loop through the rows in the file
                        echo "\t\t<tr>\n";
                        
                        for($i = 1; $i< count($row); $i++){     //start @ index=1, since 0th columns is for whether it's a header or not
                            if($row[0] == "header"){        //compare the 0th column. If it's a header (& has the contents "header")
                                echo "\t\t\t<th>",          //print it as a header NOT a normal <td>
                                 $row[$i],
                                 "</th>\n";
                            }
                            else{                       //if it's NOT a header, just print the contents as a normal <td>
                                echo "\t\t\t<td>",
                                 $row[$i],              //prints the cell (row @ indes $i, since $i starts at 1, there's no danger of printing out "header")
                                 "</td>\n";
                            }
                        }
                        
                        echo "\n\t\t</tr>\n";
                    }
                ?>
            </table>
        </article>
    </div>
</section>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>