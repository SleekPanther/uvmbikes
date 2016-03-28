<?php include("non-pages/php-include/top.php"); ?>

<section class="mainContent">
    <div class="widthContainer">
        <h1><?php echo $navTitle; ?> - UVM Bikes</h1>
        <?php
        echo $upFolderPlaceholder;
        echo "<br>" . print_r($activePageArray);
        echo "<br>asd:   " . $activePageArray[$containing_folder];
        ?>

        <div class="colContainer">
            <div class="twoCol">
                <article>LEFT<br>  
                    myasdf;lkas gd;lkas dg;ndsf;jg a;lkngf ;daf;lknad fg;lk adsjfngksdfjbg skhb dsfghbsdfgkjhbs dfkjhbsdfgkjhbsdfgkjhb sdf hlkdsfgk jkhbhgb gfhfg fghbgf d sssssssssssssssssssssssss
                </article>
            </div>
            <div class="twoCol">
                <article>RIGHT<br>  
                    lkjasfd lkjasdhjasdlkj asdgkljagslkjh asdglkjahsdglkjhsadglkjhas lk kjhgsadlkj aslkjhgasljg as lkjasfd lkjasdhjasdlkj asdgkljagslkjh asdglkjahsdglkjhsadglkjhas lk kjhgsadlkj aslkjhgasljg aslkjasfd lkja
                </article>
            </div>
        </div>
        <div class="colContainer">
            <div class="twoCol">
                <article>LEFT<br>  
                    myasdf;lkas gd;lkas dg;ndsf;jg a;lkngf ;daf;lknad fg;lk adsjfngksdfjbg skhb dsfghbsdfgkjhbs dfkjhbsdfgkjhbsdfgkjhb sdf hlkdsfgk jkhbhgb gfhfg fghbgf d sssssssssssssssssssssssss
                </article>
            </div>
            <div class="twoCol">
                <article>RIGHT<br>  
                    lkjasfd lkjasdhjasdlkj asdgkljagslkjh asdglkjahsdglkjhsadglkjhas lk kjhgsadlkj aslkjhgasljg as lkjasfd lkjasdhjasdlkj asdgkljagslkjh asdglkjahsdglkjhsadglkjhas lk kjhgsadlkj aslkjhgasljg aslkjasfd lkja
                </article>
            </div>
        </div>

        &nbsp;<!-- need some content, or the box is 0px tall (all floated) -->
    </div>
</section>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>