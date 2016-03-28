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
//=============IMPORTANT "assignment7" is the root directory==========================
        
        //Magical code to display errors
        //error_reporting(E_ALL);           //longer version not needed?
        //ini_set('display_errors', '1');
        ini_set('error_reporting', E_ALL);
        
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        // PATH SETUP
        //  $domain = "https://www.uvm.edu" or http://www.uvm.edu;
        $domain = "http://";     //commenting out next 5 lines didn't work
        if (isset($_SERVER['HTTPS'])) {   //OLD WAY, DIDN'T USE
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }
        
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        
        $domain .= $server;

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");     // parse the url into htmlentites to remove any suspicous vales that someone may try to pass in. htmlentites helps avoid security issues. //## $_SERVER['PHP_SELF'] returns full path and extension, htmlentities() just converts special character
        
        $path_parts = pathinfo($phpSelf);
        
        $split_url = explode('/', $path_parts['dirname']);  //split string at each / character (creates array)
        $containing_folder = $split_url[count($split_url) -1]; //IMPORTANT this gets the folder that the current file resides in. Used almost everywhere to tell what page I'm on since all my pages are called 'index.php'
        $dirName = $path_parts['dirname'];      //the whole url (excluding filename). Not used much (or att all?)
        
        $baseLevelIndex = 0;        //used to find the "base directory" in the url. If the site's home is in "topLevel/level1/level2/__" then it's 3 folders down, so everything should relae the the url array from index 2
        for ($i = 0; $i < count($split_url); $i++){     //loop through the URL
            if ($split_url[$i] == "assignment7"){       //SUPER IMPORTANT (change this to match the BASE folder that the site lives inside)
                $baseLevelIndex = $i;
            }
        }
        $folderCount = count($split_url); //this gives an int. can't actually access the folder names since it's an associative array, not indexed, but still count how many indexes there are
	$folderCountAdjusted = $folderCount - $baseLevelIndex - 1; //subtract $baseLevelIndex to get the base directory (no matter how deep the file structure, this resetets it to a base folder. Then subtract 1 to make the "home" directory be 0 folders up from anything
	
	$containing_folder = $split_url[count($split_url) -1]; //IMPORTANT this gets the folder that the current file resides in. string from an array
	$containing_folder = strtolower($containing_folder);	//convert to lowercase to avoid comparison problems
	$fileName = $path_parts['filename'];		//
	
        $upFolderPlaceholderArray = array("", "../", "../../", "../../../");        //0 folders down corresponds to "", 1 folder down corresponds to ../ (so that links go to the right place
        $upFolderPlaceholder = $upFolderPlaceholderArray[ $folderCountAdjusted ];   //this is used extensively to make links in subfolders go to the right location. It checks how many folders down it is, then prints the correct number or ../ to get there
//	if ($folderCountAdjusted == 0) {
//            $upFolderPlaceholder = "";
//	}
//	else if ($folderCountAdjusted == 1) {
//            $upFolderPlaceholder = "../";
//	}
//	else if ($folderCountAdjusted == 2) {
//            $upFolderPlaceholder = "../../";
//	}
//        else if ($folderCountAdjusted == 3) {
//            $upFolderPlaceholder = "../../../";
//	}
            
        $debug = false;  //Localhost says error if not define here, hope it doesn't hurt
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }        
        
        
        //This sets the title tag based on the current page (and the folder it's located inside)
            //potential addition: replace _ (underscore with a space for multiple-word pages WITHOUT a slash)
        $navTitle = $containing_folder;                     //initially set to the entire fontaining folder
        $navTitle = str_replace("-" , " / ", $navTitle);    //replace dashes with slashes and spaces
        $navTitle = ucwords($navTitle);                     //capitolize 1st letter of each word
        if ($folderCountAdjusted == 0) {    //if it's the homepage, hardcode it instead of the base folder where the site's located
            $navTitle = "Home";
        }
        
        $tagLine = " - UVM Bikes - Free Campus Bike Shop";
        ?>
<title><?php echo $navTitle.$tagLine ; ?></title><!-- print the title based on concatenating the current page title, & global site tagline/slogan -->
    <?php        
        //IMPORTANT "assignment7" is the root directory
        $pageArray = array( "assignment7", "prices-services" , "hours" , "classes-events" , "contact" , "about");   //make a list of the ALL pages
        $activePageArray = array();     //initialize associative array to hold the page name & the text "activePage" (a css class for the current page)

        $activePageArray = array_fill_keys($pageArray, '');        //need to fill the array with something so it exists. Start with blank, but works with any character. Just as long as the array has a key, it will be have a space to be overwritten
        
        for($i = 0; $i < count($pageArray); $i++){      //loop through the page array
            if($containing_folder == $pageArray[$i]){   //if the current containing folder (the active page) == the key stored in the page Array
                $activePageArray[$containing_folder]= "activePage";     //print "activePage" in the $activePageArray, at the index of "containing_folder". It's associative, so $activePageArray must be accessed via a key, in this case it's the $containing_folder (or current page)
                break;      //if it finds the current page, break out of the loop, there's no point in continuing. (This hopefully helps avoid the case where 2 pages are considered "active"
            }
        }   //at this point, $activePageArray should have '' stored in all indecies EXCEPT the current page, which should have 'activePage'
    ?>

    <link rel="icon" type="image/png" href="<?php echo $upFolderPlaceholder ?>images/0components/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- for mobile friendly -->
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/menu.css' rel='stylesheet' type='text/css' media='screen' />
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/style.css' rel='stylesheet' type='text/css' media='screen' />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> <!-- link galleria script. Doesn't work without jQuery. -->
    <script src="<?php echo $upFolderPlaceholder ?>non-pages/galleria/galleria-1.4.2.min.js"></script>    <!-- these 2 scripts go before the galleria div & actually running goes AFTER -->
    
    </head>
    <!-- ################ body section ######################### -->
    <?php
        if ($folderCountAdjusted == 0){
            echo '<body id="index">';
        }
        else{
            echo '<body id="'.$containing_folder.'">';
        }
    ?>
    
<?php //echo $upFolderPlaceholder ?>
    <?php
        include ($upFolderPlaceholder."non-pages/php-include/nav.php");
        include ($upFolderPlaceholder."non-pages/php-include/header.php");
    ?>