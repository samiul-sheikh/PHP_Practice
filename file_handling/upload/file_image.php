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

                    if(isset($_FILES['image'])){
                        $filename = $_FILES ['image'] ['name'];
                        $filetmp = $_FILES ['image'] ['tmp_name'];
                        move_uploaded_file($filetmp, "images/".$filename);
                        echo "Image uploaded successfully";
                    }
                    

                ?>

                <form method = "POST" action = " <?php $_SERVER['PHP_SELF'] ?>" enctype = "multipart/form-data"> 

                    <input type ="file" name = "image">
                    <input type = "submit" value= "Submit">

                </form>



            </section>


    	<section class="footerportion">
            <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
