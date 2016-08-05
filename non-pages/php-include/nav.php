<!-- nav.php -->
<nav>
    <div id="logo"><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; ?>><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="UVM Bikes"><span class="logoLink">Free Campus<br>Bike Shop</span></a></div>
        <label for="drop" class="toggle">Show/Hide Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <!-- IMPORTANT $containing_folder == $ROOT_DIRECTORY is different from all other links since it has a special parent folder. (or we don't know what the server's parent folder will be. So this must be the ver base case for comparison. -->
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; echo ' class="'.$activePageArray[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Portfolio +</label>
                <a href="#">Portfolio</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_1/index.php"' ; ?>>Portfolio 1</a></li>
                    <li><a href="sub1">Portfolio 2</a></li>
                    <li>
                        <!-- Second Tier Drop Down -->
                        <label for="drop-3" class="toggle">Examples +</label>
                        <a href="#">Works</a>
                        <input type="checkbox" id="drop-3"/>
                        <ul>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/examples/example_1/index.php"' ; ?>>Example 1</a></li>
                            <li><a href="sub2">jQuery</a></li>
                            <li><a href="sub2">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"'; echo ' class="'.$activePageArray['prices-services'].'"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"'; echo ' class="'.$activePageArray['hours'].'"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"'; echo ' class="'.$activePageArray['classes-events'].'"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"'; echo ' class="'.$activePageArray['contact'].'"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"'; echo ' class="'.$activePageArray['about'].'"'; ?>>About</a></li>
        </ul>
</nav>
<!-- end nav.php -->

