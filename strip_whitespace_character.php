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
             input[type = "text"] {width: 250px;}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">
                

		    	<?php

                    if(isset($_POST['text'])){

                        global $txt;
                        
                        $txt = $_POST['text'];

                        echo trim ($txt, ".");

                    }

		    		

    			?>


                <form method = "post" action = " ">
                    <input type = "text" name = "text" value = "<?php global $txt; echo $txt; ?>">
                    <input type = "submit" name = "Submit"> 

                </form>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
