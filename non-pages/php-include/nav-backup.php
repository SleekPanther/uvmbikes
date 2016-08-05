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
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'prices-services/index.php"'; echo ' class="'.$activePageArrayTop['prices-services'].'"'; ?>>Prices / Services</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'hours/index.php"'; echo ' class="'.$activePageArrayTop['hours'].'"'; ?>>Hours</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'classes-events/index.php"'; echo ' class="'.$activePageArrayTop['classes-events'].'"'; ?>>Classes / Events</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'contact/index.php"'; echo ' class="'.$activePageArrayTop['contact'].'"'; ?>>Contact</a></li>
            <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"'; echo ' class="'.$activePageArrayTop['about'].'"'; ?>>About</a></li>