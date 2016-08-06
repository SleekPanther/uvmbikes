<?php include("../non-pages/php-include/top.php"); ?>
    <div class="widthContainer">
        <article><h1 class="cent"><?php echo $pageTitle; ?></h1></article>
    </div>
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <h2>General Questions</h2>
                    <p>Contact:</p>
                        <p class="contactLink">Benito Cecenas <a href="mailto:bikesuvm@gmail.com">BikesUVM@gmail.com</a></p>
                        <p>Also sign up to our mailing list for info on hours & events (No spam, we promise)</p>
                    
                    <div class="subSec">
                    <h3>Website Issues/Bugs</h3>
                    <p>Contact:</p>
                        <p class="contactLink">Noah Patullo <a href="mailto:macrobyte2+bikes@gmail.com">Macrobyte2+bikes@gmail.com</a></p>
                    </div>
                        
                    <div class='subSec'>
                        <!--<div id="fb-root"></div>--><!-- this was facebeook's embed, but since don't want to duplicate if since already in footer -->
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        
                        <div class='fbPageEmbedContainer'><!-- facebook embed must have a container width in px NOT %, so media queries govern size-->
                            <div class="fb-page" data-href="https://www.facebook.com/UVMBIKES/" data-tabs="timeline" data-width="590px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/UVMBIKES/"><a href="https://www.facebook.com/UVMBIKES/">UVM Bikes Facebook Page</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="twoCol">
                <article><h2>Location: Hills Building Basement</h2>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2157.880298436043!2d-73.1957691666736!3d44.476277537026505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x4cca7a4494cdef9b%3A0x1836e8eaae74dc4d!2s105+Carrigan+Dr%2C+Burlington%2C+VT+05405!3m2!1d44.476980999999995!2d-73.194673!5e1!3m2!1sen!2sus!4v1459183897381" allowfullscreen></iframe>
                    <p>Sometimes Google Maps has a hard time finding us. If you find Hills Building, head for the North staircase and go to the basement.</p>
                    <p>Or enter the basement level directly from Carrigan Dr (across from Rowell)</p>
                    <p>Here's another map</p>
                    <figure>
                        <img src="<?php echo $upFolderPlaceholder; ?>images/contact/map-uvm-bikes.png" alt="Map and Directions">
                    </figure>
                </article>
            </div>
        </div>
    </div>
</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>