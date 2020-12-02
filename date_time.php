<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>
        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:#444; color:white; text-align: center; padding: 20px;}

        	.headerportion h2, .footerportion h2{margin:0;}

        	 .maincontent{min-height: 400px; padding: 20px;}
             p{margin: 0}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">

                <hr/>
                Date & Time

                <span style = "float:right">
                    <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time : ".date("h:i:sa");
                    ?>
                </span>
                <hr/>

		    	<?php

                    // echo date("d/m/Y");

                    // echo "Today is : ".date("d/m/Y");

		    		// echo "Today is : ".date("d-m-y");

                    echo "Today is : ".date("d.m.Y")."<br/>";

                    echo "Today is : ".date("l")."<br/>";

                    echo "Default Time is : ".date("h:i:sa")."<br/>";


                    date_default_timezone_set('Asia/Dhaka');
                    echo "Bangladesh Time is : ".date("h:i:sa")."<br/>";

                    echo date_default_timezone_get();

    			?>

    		</section>


    	<section class="footerportion">
            <p> &copy; <?php echo date("Y"); ?> Samiul Sheikh </p>
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
