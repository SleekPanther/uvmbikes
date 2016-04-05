#Website for [UVM Bikes](http://npatullo.w3.uvm.edu/cs142/assignment7/index.php)

This was initially created in Spring 2016 by me (Noah Patullo), as a final project for CS142 Advanced Web Design at [UVM](http://www.uvm.edu/) taught by [Bob Erickson](http://www.uvm.edu/~rerickso/Site/About_Me.html)

UVM Bikes is a student club that operates a bike shop for UVM students. We don't charge for labor & are here to help people learn to fix their own bikes too. I was a member of the club and also did web design so I thought it would be a good source for a project.  
Learn more about our organization by visiting the site.

##Code Details
I've spent considerable amount of time working on php in the top.php page located in `/non-pagesphp-include/top.php`  
- It has detailed comments regarding implementation of how the navigation works with `upFolderPlaceholder` so there's 1 version of nav
- `$ROOT_DIRECTORY` is a majorly important variable. It specifies where the project is housed. Since many thins rely on looking at the containing folder, this is the highest level folder that everything else depends on. 
- an `activePage` class is printed on the current page on the nav (so the user know's where they are)