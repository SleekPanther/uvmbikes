<!-- nav.php -->
<nav>
    <div id="logo"><a href="<?php echo $upFolderPlaceholder ?>index.php"><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="UVM Bikes"><span class="logoLink">Free Campus<br>Bike Shop</span></a></div>
        <label for="drop" class="toggle">Show/Hide Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <!-- IMPORTANT! Homepage is special since its $containing folder doesn't have to be called "index" or "home". Use the fact that $ROOT_DIRECTORY is already been analyzed in top.php, hence $activePageArrayTop[$ROOT_DIRECTORY] -->
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Portfolio +</label>
                <a href="#" <?php echo 'class="'.$activePageArrayTop['portfolio'].'"'; ?>>Portfolio</a><!-- dropdown pages have href="#" to stay on same page when clicked -->
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_1/index.php"' . ' class="'.$activePageArrayDropDown1['portfolio_1'].'"'; ?>>Portfolio 1</a></li>
                    <li><a href="sub1">Portfolio 2</a></li>
                    <li>
                        <!-- Second Tier Drop Down -->
                        <label for="drop-3" class="toggle">Examples +</label>
                        <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['examples'].'"'; ?>>Examples</a>
                        <input type="checkbox" id="drop-3"/>
                        <ul>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/examples/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            <li><a href="sub2">jQuery</a></li>
                            <li><a href="sub2">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-4" class="toggle">Portfolio +</label>
                <a href="#" <?php echo 'class="'.$activePageArrayTop['tests'].'"'; ?>>Tests</a>
                <input type="checkbox" id="drop-4"/>
                <ul>
                    <li><a <?php echo 'href="'.$upFolderPlaceholder.'tests/t1/index.php"' . ' class="'.$activePageArrayDropDown1['t1'].'"'; ?>>T 1</a></li>
                    <li><a href="sub1">Portfolio 2</a></li>
                </ul>
            </li>
            
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"' . ' class="'.$activePageArrayTop['prices-services'].'"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"' . ' class="'.$activePageArrayTop['hours'].'"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"' . ' class="'.$activePageArrayTop['classes-events'].'"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"' . ' class="'.$activePageArrayTop['contact'].'"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"' . ' class="'.$activePageArrayTop['about'].'"'; ?>>About</a></li>
        </ul>
</nav>
<!-- end nav.php -->

