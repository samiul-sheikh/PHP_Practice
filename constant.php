<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>
        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:#444; color:white; text-align: center; padding: 20px;}

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

                /*
                define ("VALUE", "I am learening PHP");
                echo VALUE;
                */

                /*
                define ("VALUE", "I am learening PHP", true);
                echo value;
		    	*/

                define ("VALUE", "I am learening PHP");

                function learnPHP(){
                    echo VALUE;
                }

                learnPHP(); 

                /*
                define ("VALUE", "I am learening JAVA");

                function learnPHP(){
                    return VALUE;
                }

                echo learnPHP(); 
                */               	 

    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
