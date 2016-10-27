<!-- nav.php -->
<nav>
    <div id="logo"><a href="<?php echo $upFolderPlaceholder ?>index.php"><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="UVM Bikes"><span class="logoLink">Free Campus<br>Bike Shop</span></a></div>
        <label for="drop" class="toggle">Show/Hide Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <!-- IMPORTANT! Homepage is special since its $containing folder doesn't have to be called "index" or "home". Use the fact that $ROOT_DIRECTORY is already been analyzed in top.php, hence $activePageArrayTop[$ROOT_DIRECTORY] -->
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"' . ' class="'.$activePageArrayTop['prices-services'].'"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"' . ' class="'.$activePageArrayTop['hours'].'"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"' . ' class="'.$activePageArrayTop['classes-events'].'"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"' . ' class="'.$activePageArrayTop['contact'].'"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"' . ' class="'.$activePageArrayTop['about'].'"'; ?>>About</a></li>
        </ul>
</nav>
<!-- end nav.php -->

