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

		    	<?php

                    

		    		$intnum = 300;
                    $min = 1;
                    $max = 200;


                    if(filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "$max_range" =>$max)))){

                        echo "It is valid";
                    }
                    else{
                        echo "It is not valid";

                    }


                    


                    /*
                    // $url = "http://www.google.com";
                    $url = "http://www.example.com/index.html?q=123";

                    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){

                        echo "This url is vcalid";
                    }
                    else{

                        echo "It has not query string";
                    }

                    */

    			?>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
