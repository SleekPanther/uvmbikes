<!-- nav -->
<nav>
    <div id="logo"><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; ?>><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="UVM Bikes"><span class="logoLink">Free Campus<br>Bike Shop</span></a></div>
        <label for="drop" class="toggle">Show/Hide Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <!-- IMPORTANT $containing_folder == "assignment7"   must match the base folder of the site -->
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"'; echo 'class="'.$activePageArray['assignment7'].'"'; ?>>Home</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"'; if ($containing_folder == "prices-services") echo 'class="activePage"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"'; if ($containing_folder == "hours") echo 'class="activePage"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"'; if ($containing_folder == "classes-events") echo 'class="activePage"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"'; if ($containing_folder == "contact") echo 'class="activePage"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"'; echo 'class="'.$activePageArray['about'].'"'; ?>>About</a></li>
        </ul>
</nav>
<!-- end nav.php -->