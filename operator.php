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

                1. arithmetic operator
                2. assignment operator
                3. comparison operator
                4. increment operator/decrement operator
                5. logical operator
                6. string operator
                7. array operator
                <br/>
                <hr/>

		    	<?php

                    // arithmetic operator
                    /*
		    		$x = 15;
                    $y = 2;
                    echo  $x % $y;
                    */


                    // assignment operator
                    /*
                    $a = 20;
                    $a +=10;
                    echo $a;
                    */


                    // comparison operator (identical operator ===)
                    /*
                    $x = 100;
                    $y = "100";
                    var_dump($x==$y);
                    */


                    // pre increment
                    /*
                    $x = 10;
                    echo ++$x;

                    echo "<br/>";

                    // post decrement
                    $y = 5;
                    echo $y--;
                    echo "<br/>";
                    echo $y;
                    */


                    // logical operator (and &&, or ||, xor, !==)
                    /*
                    $a = 20;
                    $b = 10;
                    if($a == 20 and $b == 30){
                        echo "Right";
                    } 
                    else{
                        echo "Wrong";
                    }
                    */


                    // string operator (concatanation operator . ; concatanation assignment operator .= append)
                    /*
                    $x = "samiul hasan";
                    $y = " sheikh";
                    $z = $x . $y;
                    echo "$z";


                    echo "<br/>";


                    $x = "samiul hasan";
                    $y = " sheikh";
                    $x .= $y;
                    echo "$x";
                    */

                    // array operator (union +, ==, !=)

                    $x = array(
                        "a" => "Dhaka",
                        "b" => "Rangpur"
                        );
                    $y = array(
                        "c" => "Kurigram",
                        "d" => "Fulbari"
                    );
                    var_dump($x + $y);
                    // var_dump($x == $y);




    			?>



    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
