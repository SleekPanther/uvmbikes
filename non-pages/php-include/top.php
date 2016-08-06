<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Noah Patullo">
        <meta name="description" content="UVM Bikes provides free labor and low-cost parts to repair student bikes.">
        <meta name="robots" content="index, follow">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->
        
        <?php
//=============IMPORTANT variable $ROOT_DIRECTORY must be where the project is housed (where the homepage is). ==========================
        $ROOT_DIRECTORY = "assignment7";        //MUST CHANGE THIS OR THE ENTIRE PROJECT WON'T WORK!
        
        //======Magical code to display errors========\\
        //======COMMENT OUT WHEN YOU'RE FINISHED TESTING========\\
        //error_reporting(E_ALL);           //longer version = 2 lines
        //ini_set('display_errors', '1');
        ini_set('error_reporting', E_ALL);  //short version
        
        
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        // PATH SETUP, (making sure it uses https)
        $domain = "http://";     //commenting out next 5 lines didn't work
        if (isset($_SERVER['HTTPS'])) {   //OLD WAY, DIDN'T USE
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }
        
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        
        $domain .= $server;     //concatenate server to domain yielding "http://[your_domain_here]" or "https://[your_domain_here]"
        
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");     // get string of the URL. Use htmlentites to remove any suspicous vales that someone may try to pass in. htmlentites helps avoid security issues. //## $_SERVER['PHP_SELF'] returns full url path and file extension, htmlentities() just converts special characters
        
        $path_parts = pathinfo($phpSelf);       //get an associative array of the url with dirname, basename, extension & filename
        
        
        $split_url = explode('/', $path_parts['dirname']);  //split dirname part of the array at each / character (creates array)
        
        $baseLevelIndex = 0;        //used to find the "base directory" in the url. If the site's home is in "topLevel/level1/level2/ROOT_SITE_FOLDER_HERE" then it's 3 folders down, so everything should relate the the url array from index 2
        for ($i = 0; $i < count($split_url); $i++){     //loop through the URL
            if ($split_url[$i] == $ROOT_DIRECTORY){     //SUPER IMPORTANT ($ROOT_DIRECTORY must match the BASE folder that the site lives inside)
                $baseLevelIndex = $i;
            }
        }
        $folderCount = count($split_url); //this gives an int. can't actually access the folder names since it's an associative array, not indexed, but still count how many indexes there are
	$folderCountAdjusted = $folderCount - $baseLevelIndex - 1; //subtract $baseLevelIndex to get the base directory (no matter how deep the file structure, this resets it to a base folder. Then subtract 1 to make the "home" directory be 0 folders up from anything
        //0 means the homepage, 1 means top level pages (file is located in 1 folder below $ROOT_DIRECTORY), 2 means 2 levels down, etc.
	
        $split_url_adjusted = $split_url;       //array to hold the URL parts AFTER the $ROOT_DIRECTORY (remove any directories ABOVE $ROOT_DIRECTORY)
        for($i = 0; $i< ($folderCount - $folderCountAdjusted -1); $i++){   //remove the beginning indices of the array (anything before $ROOT_DIRETORY)
            unset($split_url_adjusted[$i]);     //actually remove the element, but the indices will be messed up
        }
        $split_url_adjusted= array_values($split_url_adjusted);     //array_values re-indexes the array. Now this contains a list folderis in the the URL including & AFTER the $ROOT_DIRECTORY
        
        $containing_folder = strtolower( $split_url_adjusted[count($split_url_adjusted) -1] ); //IMPORTANT this gets the very last folder in the $split_url_adjusted array (the very last index of an array is 1 less than its size, hence: count($split_url_adjusted) -1 ). This folder "contains" the current page file. Used almost everywhere to tell what page I'm on since all my pages are called 'index.php' but have unique cotaining-folder names. & finally CONVERT TO LOWERCAASE to avoid comparison problems later on
        if($folderCountAdjusted == 0){      //special case for the homepage. Since its actual containing folder is the contents of $ROOT_DIRECTORY, it must be overridden to equal "index". This is to avoid confusion if $ROOT_DIRECTOY is NOT a a good name for the site. This disregards where the site is located & just make the homepage's containing folder = "index". ALSO USED TO PRINT ID'S IN THE BODY TAG FOR EACH PAGE
            $containing_folder = 'index';
        }
	$fileName = $path_parts['filename'];		//not used much, but just in case
        $dirName = $path_parts['dirname'];              //the whole url (excluding filename). Not used much
	
        $cdUpRefArray = array("", "../", "../../", "../../../", "../../../../");        //"Change Directories Up Reference Array" hold string value of what to type to navigate up a directory. 0 folders down corresponds to the 0th index or "", 1 folder down corresponds to the 1st index or "../" (so that links go to the right place)
        $upFolderPlaceholder = $cdUpRefArray[ $folderCountAdjusted ];   //this is used extensively to make links in subfolders go to the right location. It checks how many folders down it is, then prints the correct number or ../ to get back to the $ROOT_DIRECTORY before going down any more directories
        //end path setup
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        
        
        //Debugging section, ignore if not needed
        $debug = false;  //Localhost says error if not define here, hope it doesn't hurt
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
        //end debugging
        
        
        //This is basiaclly the "Page Name". Can easily be added to all <title> tags & printed as the 1st <h1> on pages. ALL BASED ON CONTAINING FOLDER
        $pageTitle = $containing_folder;                     //initially set to the entire fontaining folder
        $pageTitle = str_replace("-" , " / ", $pageTitle);    //replace dashes with slashes and spaces
        $pageTitle = str_replace("_" , " ", $pageTitle);      //replace underscores with spaces (multi-word title)
        $pageTitle = ucwords($pageTitle);                     //capitolize 1st letter of each word
        if ($folderCountAdjusted == 0) {    //if it's the homepage, hardcode it instead of the base folder where the site's located
            $pageTitle = "Home";
        }
        
        $tagLine = " - UVM Bikes - Free Campus Bike Shop";  //Change this to match the tagline/slogan of your site. This will appear @ the end of every title page. Like the " - Wikipedia, the free encyclopedia" at the end of every Wikipedia Page
        ?>
<title><?php echo $pageTitle.$tagLine ; ?></title><!-- print the title based on concatenating the current page title, & global site tagline/slogan -->
    <?php        
        //IMPORTANT the 1st item (home page) $ROOT_DIRECTORY is the root directory
        //YOU MUST LIST ALL THE PAGES ON THE SITE! But $pageArrayDropDown1 means anything that's in a 1st level dropdown, you don't have to organize them into sepatate arrays for each individual dropdown, just put pages that are the same distance down from the $ROOT_DIRECTORY in appropriate folders
        $pageArrayTop = array( $ROOT_DIRECTORY, "portfolio", "prices-services" , "hours" , "classes-events" , "contact" , "about", 'tests');   //make a list of the ALL pages
        $pageArrayDropDown1 = array ('portfolio_1', 'portfolio_2', 'examples', 't1', 't2');
        $pageArrayDropDown2 = array ('example_1', 'example_2', 'example_3');
        $activePageArrayTop = array();     //initialize associative array to hold the page name & the text "activePage" (a css class for the current page)
        $activePageArrayTop = array_fill_keys($pageArrayTop, '');       //fill this array with nothing so it's the same size as its _pageArray one
        $activePageArrayDropDown1 = array();
        $activePageArrayDropDown1 = array_fill_keys($pageArrayDropDown1, '');
        $activePageArrayDropDown2 = array();
        $activePageArrayDropDown2 = array_fill_keys($pageArrayDropDown2, '');

        //This function analyzes a level of the folder tree & dropdown to find active pages. $folderLevelToCheck is important & must match the level of the arrays that are being passed in. For instance, to analyze $pageArrayTop (the links on the top-level nav), you must pass in 0 as the 4th argument
        function fillActivePageArrays(&$arrayOfPages, &$activeArrayToFill, $split_url_adjusted2, $folderLevelToCheck){  //MUST ADD & TO PASS BY REFERENCE for arrays
            //$activeArrayToFill = array_fill_keys($arrayOfPages, '');        //need to fill the array with something so it exists. Start with blank, but works with any character. Just as long as the array has a key, it will be have a space to be overwritten            
            
            for($i = 0; $i < count($arrayOfPages); $i++){      //loop through the page array
                if($split_url_adjusted2[$folderLevelToCheck] == $arrayOfPages[$i]){   //if the current containing folder (the active page) == the key stored in the page Array
                    $activeArrayToFill[ $split_url_adjusted2[$folderLevelToCheck] ]= "activePage";     //print "activePage" in the $activeArrayToFill, at the index of "containing_folder". It's associative, so $activeArrayToFill must be accessed via a key, in this case it's the $containing_folder (or current page)
                    break;      //if it finds the current page, break out of the loop, there's no point in continuing. (This hopefully helps avoid the case where 2 pages are considered "active"
                }
            }   //at this point, $activeArrayToFill should have '' stored in all indecies EXCEPT the current page, which should have 'activePage'
        }
        
        
        //call the function to fill arrays
        if($folderCountAdjusted == 0){
            $activePageArrayTop[$ROOT_DIRECTORY] = 'activePage';
        }
        if($folderCountAdjusted >= 1){
            fillActivePageArrays($pageArrayTop, $activePageArrayTop, $split_url_adjusted, 1);
        }
        if($folderCountAdjusted >= 2){
            fillActivePageArrays($pageArrayDropDown1, $activePageArrayDropDown1, $split_url_adjusted, 2);
        }
        if($folderCountAdjusted >= 3){
            fillActivePageArrays($pageArrayDropDown2, $activePageArrayDropDown2, $split_url_adjusted, 3);
        }
    ?>

    <link rel="icon" type="image/png" href="<?php echo $upFolderPlaceholder ?>images/0components/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- for mobile friendly -->
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/menu.css' rel='stylesheet' type='text/css' media='screen' />
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/style.css' rel='stylesheet' type='text/css' media='screen' />
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/print.css' rel='stylesheet' type='text/css' media='print' />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> <!-- link galleria script. Doesn't work without jQuery. -->
    <script src="<?php echo $upFolderPlaceholder ?>non-pages/galleria/galleria-1.4.2.min.js"></script>    <!-- these 2 scripts go before the galleria div & actually running goes AFTER -->
    
    </head>
    <!-- ################ body section ######################### -->
    <?php
        echo '<body id="'.$containing_folder.'">';
    ?>
    <p class="skipToContent"><a href="#actualMainContent">Skip to Main Content</a></p><!-- accessibility skip button, positioned off screen -->
    <?php
        include ($upFolderPlaceholder."non-pages/php-include/nav.php");
        include ($upFolderPlaceholder."non-pages/php-include/header.php");
    ?>