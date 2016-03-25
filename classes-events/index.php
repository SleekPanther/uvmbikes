<?php include("../non-pages/php-include/top.php");  ?>

        <h1><?php echo $navTitle; ?></h1>
        <?php echo $upFolderPlaceholder;
        echo "<br>". print_r($activePageArray);
       echo "<br>activepg array:   ". $activePageArray[$containing_folder];
       echo "<br>".$containing_folder;
            ?>
    </body>
</html>