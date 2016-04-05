<!-- nav.php -->
<nav>
    <div id="logo"><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; ?>><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="UVM Bikes"><span class="logoLink">Free Campus<br>Bike Shop</span></a></div>
        <label for="drop" class="toggle">Show/Hide Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <!-- IMPORTANT $containing_folder == $ROOT_DIRECTORY is different from all other links since it has a special parent folder. (or we don't know what the server's parent folder will be. So this must be the ver base case for comparison. -->
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; echo ' class="'.$activePageArray[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"'; echo ' class="'.$activePageArray['prices-services'].'"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"'; echo ' class="'.$activePageArray['hours'].'"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"'; echo ' class="'.$activePageArray['classes-events'].'"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"'; echo ' class="'.$activePageArray['contact'].'"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"'; echo ' class="'.$activePageArray['about'].'"'; ?>>About</a></li>
        </ul>
</nav>
<!-- end nav.php -->

