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

                1. string
                2. integer
                3. float
                4. boolean
                5. array
                6. object
                7. null
                8. resource

                <br/>
                <hr/>
                6. Object
                <hr/>

		    	<?php


                    /*
                    $x = 'PHP Data Types';
                    echo $x;
                    */

                    /*
                    $y = 20.2;
                    var_dump($y);
                    */

                    /*
                    $a = array("sami", "samiul", "nayeem");
                    var_dump($a);
                    */

                    Class Student{
                        function department(){
                            return "Physics";
                        }

                        function details(){
                            echo $this->department();
                        }
                    }

                    $st = new Student();
                    $st->details();

		    		


    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
