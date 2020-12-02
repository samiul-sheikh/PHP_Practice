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

                PHP form validation
                <hr/>


                <form method = "post" action = "<?php echo htmlspecialchars ($_SERVER['PHP_SELF']) ?> ">

                    <table>

                            <tr>
                                <td> User Name </td>
                                <td> <input type = "text" name = "uname" required> </td>
                            </tr>



                            <tr>
                                <td> Password </td>
                                <td> <input type = "password" name = "password"  required > </td>
                            </tr>



                            <tr>
                                <td> E-mail</td>
                                <td> <input type = "text" name = "email" required > </td>
                            </tr>



                            <tr>
                                <td> NID Number </td>
                                <td> <input type = "text" name = "nid" required > </td>
                            </tr>



                            <tr>
                                <td> Phone Number </td>
                                <td> <input type = "text" name = "phone" required > </td>
                            </tr>



                            <tr>
                                <td> Address </td>
                                <td> <textarea name = "address" rows = "5" cols = "40"> </textarea> </td>
                            </tr>



                            <tr>
                                <td> Gender </td>
                                <td> <input type = "radio" name = "gender" value = "male"> Male
                                     <input type = "radio" name = "gender" value = "female"> Female
                                 </td>
                            </tr>


 
                            <tr>
                                <td> </td>
                                <td> <input type = "submit" name = "submit"> </td>
                            </tr>



                     </table>

                </form>


		    	<?php

                    $uname = $password = $email = $nid = $phone = $address = $gender = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                        $uname       = validate($_POST["uname"]);
                        $password   = validate($_POST["password"]);
                        $email      = validate($_POST["email"]);
                        $nid        = validate($_POST["nid"]);
                        $phone      = validate($_POST["phone"]);
                        $address    = validate($_POST["address"]);
                        $gender     = validate($_POST["gender"]);



                        echo "Username: ".$uname. "<br/>";
                        echo "Password: ".$password. "<br/>";
                        echo "E-mail: ".$email. "<br/>";
                        echo "NID Number: ".$nid. "<br/>";
                        echo "Phone Number: ".$phone. "<br/>";
                        echo "Address: ".$address. "<br/>";
                        echo "Gender: ".$gender. "<br/>";

                    }


                    function validate($data){

                        $trim = trim($data);
                        $stc = stripcslashes($trim);
                        $hsc = htmlspecialchars($stc);
                        return($hsc);

                    }
		    		

    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
