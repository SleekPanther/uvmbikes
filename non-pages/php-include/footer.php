<!-- start footer.php -->
<footer>
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <p>Hills Building Basement<br>
                        105 Carrigan Dr, Burlington, VT</p>
                    <p><a href="mailto:bikesuvm@gmail.com">BikesUVM@gmail.com</a></p>
                    <div class="facebookFoot">
                        
                        <!--loading facebook part -->
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <!-- end loading-->
                        
                        <div class='fbLabel'>Like us on <figure class='imgFB-link'>
                            <a href="https://www.facebook.com/UVMBIKES/" target='_blank'><img src="<?php echo $upFolderPlaceholder; ?>images/0components/facebook-icon.png" alt="Facebook"></a><!-- Picture Link so that anyone can get to the main facebook page, even if they're not logged in -->
                            </figure>
                        </div>
                        <!-- actual embedded part -->
                        <div class="fb-like" data-href="https://www.facebook.com/UVMBIKES/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        <!-- end facebook embed -->
                    </div>
                </article>
            </div>
            <div class="twoCol">
                <article>
                    <ul>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>prices-services/index.php">Prices / Services</a></li>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>hours/index.php">Hours</a></li>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>classes-events/index.php">Classes / Events</a></li>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>contact/index.php">Contact</a></li>
                        <li><a href="<?php echo $upFolderPlaceholder; ?>about/index.php">About</a></li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</footer>
<!-- end footer.php -->
