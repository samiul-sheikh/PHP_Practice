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

                <hr/>
                PHP Array
                1. index array
                2. assosiative array
                3. multidimentional asrray
                4. sorting array
                <hr/>


		    	<?php

                    // index array

                    /*
		    		$x = array(2,5,7,9,10);
                    
                    // echo count($x);

                    // echo $x[0];

                    
                    $x[0] = 2;
                    $x[1] = 5;
                    $x[2] = 7;
                    $x[3] = 9;
                    $x[4] = 10;
                    */ 

                    /*
                    $x = array(2,5,7,9,10);

                    $length = count($x);

                    for($i = 0; $i<$length; $i++){
                        echo $x [$i];
                        echo "<br/>";
                    }
                    */



                    // assosiative array

                    /*
                    $age = array("samiul" =>"26", "nadim" => "27", "nayeem" => "28");

                    $age["samiul"] = "26";
                    $age["nadim"] = "27";
                    $age["nayeem"] = "28";

                    foreach($age as $x => $value){

                        echo "key = ".$x. ", value = value";

                    }
                    */

                    /*
                    $ages = array("sami" => "20", "titul" =>"25");


                    foreach($ages as $x => $age){

                        echo $x. ", Age = $age";

                        echo "<br/>";
                    }
                    */
                    
                     

                    // multidimentional array

                    /*
                    $cars = array(
                                    array("bmw", "10", "30"),
                                    array("ferari", "5", "20"),
                                    array("audi", "2", "50"),
                                    array("toyota", "7", "17")
                                );

                    // echo $cars[0] [1];


                    for($row = 0; $row < 4; $row++){

                        echo "<p> row number $row </p>";

                        echo "<ul>";

                        for($col = 0; $col < 3; $col++){

                            echo "<li>".$cars[$row][$col]."</li>";
                        }
                        echo "</ul>";
                    }
                    */




                    // sorting array

                    /*
                    $names = array("Sami", "Nadim", "Ayon", "Chaity");

                    $length = count($names);

                    sort($names);

                    for($i = 0; $i < $length; $i++){

                        echo $names[$i];
                        echo "<br/>";
                    }
                    */

                    // in reverse order

                    /*
                    $numbers = array("100", "10", "50", "5");

                    $length = count($numbers);

                    rsort ($numbers);

                    for($i = 0; $i < $length; $i++){

                        echo $numbers[$i];
                        echo "<br/>";
                    }
                    */

                    // accending order

                    $age = array("sami" => "30", "niloy" => "5", "ayon" => "40");

                    asort($age);
                    // ksort($age);

                    foreach($age as $x => $value){

                        echo "Name = ".$x. ", Age = ".$value;
                        echo "<br/>";

                    }




    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
