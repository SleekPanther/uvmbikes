<?php include("non-pages/php-include/top.php"); ?>

<main>
    <div class="widthContainer">
        <article><h1 class="cent"><?php echo $navTitle; ?> - UVM Bikes</h1></article>
    </div>
    <div class="widthContainer">
        <div class="colContainer">
            <div class="twoCol">
                <article>
                    <h2>Welcome</h2>
                    <p>We are a student club providing bike repairs and promoting bicycle use at University of Vermont. Stop by to get your bike fixed.</p>
                    <h2>Free Labor</h2>
                    <p>That's right, we're here to help you, not make money. Labor is free and we aim to reuse parts or provide cheap ones when the need arises.</p>
                    <p>Check our <a href="<?php echo $upFolderPlaceholder; ?>prices-services/index.php">price list</a> for common repairs. </p>
                    
                    <h2>Get Involved</h2>
                    <p><a href="<?php echo $upFolderPlaceholder; ?>contact/index.php">Contact us</a> to join the club. Sign up become a volunteer at the shop. Share you bike knowledge or learn brand new skills if you've never worked on bikes.</p>
                    
                    <h2>Bike Share and Rentals</h2>
                    <p>We provide access to wheels on campus to those that need them. <a href="<?php echo $upFolderPlaceholder; ?>prices-services/index.php">Learn more</a></p>
                    
                    <h2>Spread The Word</h2>
                    <p>We are funded through <a href="http://www.uvm.edu/sga/">The Student Government Association</a>. We need to show that we're an active club, so tell your friends.</p>
                </article>
            </div>
            <div class="twoCol">
                <article><h2>Location: Hills Building Basement</h2>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2157.880298436043!2d-73.1957691666736!3d44.476277537026505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x4cca7a4494cdef9b%3A0x1836e8eaae74dc4d!2s105+Carrigan+Dr%2C+Burlington%2C+VT+05405!3m2!1d44.476980999999995!2d-73.194673!5e1!3m2!1sen!2sus!4v1459183897381" allowfullscreen></iframe>
                </article>
            </div>
        </div>
        
        <!--<div class="colContainer">
            <div class="twoCol">
                <article>
                </article>
            </div>
        </div>-->
        
    </div>
</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
</body>
</html>