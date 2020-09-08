<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

        /*  include banner ads  */
        include ('Template/_banner-ads.php');
        /*  include banner ads  */
    

   /*  include top sale section */
   count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
   /*  include top sale section */

  
    /*  include blog area  */
         include ('Template/_blogs.php');
    /*  include blog area  */
?>

<?php
// include footer.php file
include ('footer.php');
?>
