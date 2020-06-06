<?php

//include header.php file
    ob_start();
    include('header.php')

?>



<main id="main-site">


    <?php

        // inclide cart 

        include("Template-cart/..product-cart.php");

        include("Template-cart/..wishilist.php");

        include("Template-home/new-phones.php");
        
    ?>



</main>






<!--start footer-->

<?php

        // include footer

        include('footer.php')

?>

<!--</footer-->