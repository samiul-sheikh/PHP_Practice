<?php
    $fonts="arial";
    $bgcolor="#444"

?>

<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>

            body{font-family: <?php echo $fonts; ?>}

        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:<?php echo  $bgcolor ?>; color:white; text-align: center; padding: 20px;}

        	.headerportion h2, .footerportion h2{margin:0;}

        	 .maincontent{min-height: 400px; padding: 20px;}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">

		    	<?php

		    		$a = 5;
                    $b = 10;
                    $c = $a + $b;
                    echo "Total Value =" .$c." Ok Fine";
                    

    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
