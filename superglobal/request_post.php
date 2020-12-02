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


                <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post"> 


                    Username: <input type = "text" name = "username">
                    <input type = "submit" name = "submit">

                </form>



		    	<?php


                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    $name = $_POST['username'];

                    if(empty($name)){
                        echo "<span style = 'color:red'> Username field must not be ermpty !!</span>";

                    }

                    else{
                        echo "<span style = 'color: green'>You have submitted: ".$name."</span>";
                    }

                }

 

    			?>

                

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
