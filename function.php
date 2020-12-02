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
		    		function university(){
                        echo "I love my campus";
                    }

                    university();
                    */



                    /*
                    function university($name = "My university"){
                        echo "$name is the best private university in Bangladesh <br/>";
                    }

                    university("American International University");
                    university("North south University");
                    university("Independent University");
                    university();
                    */


                    function sum($x, $y){
                        $z = $x + $y;
                        return $z;
                    }

                    echo "5 + 10 = ".sum(5, 10);



    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
