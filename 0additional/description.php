<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Noah Patullo">
        <meta name="description" content="">
        <title>Grader Info</title>
    </head>
    <body>
	<h1>Info For grader</h1>
	<p>I would like to highlight the following things:</p>
	<ul>
		<li>On the "Events / Classes" page, I left the text for a workshop that previously happened. I know it's in the past, but I wanted to leave it to show what it would look like if we did have upcoming events.</li>
		<li>My pages are all called index, but are located in folders with corresponding names. So the “Classes / Events” page is located “/classes-events/index.php” I then use PHP to look at the parent folder & convert “classes-events” to “Classes / Events” by replacing hyphens with slashes & capitalizing the first letters. I use this to print the html &lt;title> as well as the &lt;h1> on all pages</li>
		<li>Since pages are stored in subfolders, simply repeating nav for all pages wouldn’t work as the links FROM a subfolder would need to have ../ added before they worked. I did some PHP magic to look at the length of the URL, decide if the page was a subfolder and then print the appropriate number of ../../ to link anywhere. This allowed me to have 1 copy of nav as well as link to css</li>
		<li>Check out the responsiveness. Resize the window and notice that my 2-column layout changes to 1</li>
		<li>My spec doc also has some more details</li>
	</ul>
		
    </body>
</html>