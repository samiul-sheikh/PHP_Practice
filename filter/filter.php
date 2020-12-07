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


                
                <table> 

                    <tr> 

                        <td> Filter Name </td>
                        <td> Filter Id </td>
                    </tr>

                    <?php

                        foreach(filter_list() as $id => $filter){

                            echo '<tr> <td>' . $filter . '</td> <td>' . filter_id($filter) . '</td> </tr>';
                        }
                    ?>

                </table>
                



		    	<?php

                    /*

                    $str = "<h2> I am learning php </h2>";

                    $newstr = filter_var($str, FILTER_SANITIZE_STRING);

                    echo $newstr;

                    */




                    /*
                    $int = 50.6;

                    if(filter_var($int, FILTER_VALIDATE_INT)){
                        echo "It is Integer value";
                    }
                    else{
                        echo "It is not Integer value";
                    }
                    */




                    /*
                    $ip = "127.0.0.1";

                    if(filter_var($ip, FILTER_VALIDATE_IP)){
                        echo "$ip is Valid IP address";
                    }
                    else{
                        echo "$ip is not Valid IP address";
                    }
                    */




                    /*
                    $mail = "samiul@gmail.com";

                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                        echo "$mail is Valid Email address";
                    }
                    else{
                        echo "$mail is not Valid Email address";
                    }
                    */






                    $url = "www.facebook.com";

                    if(filter_var($url, FILTER_VALIDATE_URL)){
                        echo "$url is Valid Website address";
                    }
                    else{
                        echo "$url is not Valid Website address";
                    }
                    
                    

		    		
    			?>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
