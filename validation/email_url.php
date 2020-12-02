<?php 

        $erruname = $errpassword = $erremail = $errwebsite = $errnid = $errphone = $errgender = "";


        $uname = $password = $email = $website = $nid = $phone = $address = $gender = "";


            if($_SERVER["REQUEST_METHOD"] == "POST"){



                if(empty($_POST["uname"])){

                    $erruname = "<span style = 'color:red' > Username is required </span> ";
                }

                else{

                    $uname = validate($_POST["uname"]);

                }




                if(empty($_POST["password"])){

                    $errpassword = "<span style = 'color:red' > Password is required </span> ";

                }

                else{

                    $password = validate($_POST["password"]);
                            
                }




                if(empty($_POST["email"])){

                    $erremail = "<span style = 'color:red' > E-mail is required </span> ";

                }

                elseif(!filter_var ($_POST["email"], FILTER_VALIDATE_EMAIL)){

                    $erremail = "<span style = 'color:red' > Invalid E-mail format </span> ";

                }

                else{

                    $email = validate($_POST["email"]);

               }
                        



                if(empty($_POST["website"])){

                    $errwebsite = "<span style = 'color:red' > Website is required </span> ";

                }

                elseif(!filter_var ($_POST["website"], FILTER_VALIDATE_URL)){

                    $errwebsite = "<span style = 'color:red' > Invalid Website format </span> ";
                
                }

                else{

                    $website = validate($_POST["website"]);

               }




                if(empty($_POST["nid"])){

                    $errnid = "<span style = 'color:red' > NID number is required </span> ";

                }

                else{

                    $nid = validate($_POST["nid"]);

                }




                if(empty($_POST["phone"])){

                    $errphone = "<span style = 'color:red' > Phone number is required </span> ";

                }

                else{

                    $phone = validate($_POST["phone"]);

                }



                $address = validate($_POST["address"]);



                if(empty($_POST["gender"])){

                    $errgender = "<span style = 'color:red' > Please select a Gender </span> ";

                }

                else{

                    $gender = validate($_POST["gender"]);

                }

            }


                function validate($data){

                    $trim = trim($data);
                    $stc = stripcslashes($trim);
                    $hsc = htmlspecialchars($stc);
                    return($hsc);

                }
                    


?>



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
                                <td> <input type = "text" name = "uname" > * <?php echo $erruname; ?> </td>
                            </tr>



                            <tr>
                                <td> Password </td>
                                <td> <input type = "password" name = "password"  > * <?php echo $errpassword; ?> </td>
                            </tr>



                            <tr>
                                <td> E-mail</td>
                                <td> <input type = "text" name = "email" > * <?php echo $erremail; ?> </td>
                            </tr>



                            <tr>
                                <td> Website </td>
                                <td> <input type = "text" name = "website" > * <?php echo $errwebsite; ?> </td>
                            </tr>



                            <tr>
                                <td> NID Number </td>
                                <td> <input type = "text" name = "nid" > * <?php echo $errnid; ?> </td>
                            </tr>



                            <tr>
                                <td> Phone Number </td>
                                <td> <input type = "text" name = "phone" > * <?php echo $errphone; ?> </td>
                            </tr>



                            <tr>
                                <td> Address </td>
                                <td> <textarea name = "address" rows = "5" cols = "40"> </textarea> </td>
                            </tr>



                            <tr>
                                <td> Gender </td>
                                <td> <input type = "radio" name = "gender" value = "male"> Male
                                     <input type = "radio" name = "gender" value = "female"> Female
                                     * <?php echo $errgender; ?>
                                 </td>
                            </tr>


 
                            <tr>
                                <td> </td>
                                <td> <input type = "submit" name = "submit"> </td>
                            </tr>



                     </table>

                </form>
		    	
    		</section>


        	<section class="footerportion">

        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>

        	</section>

    	</div>

    </body>

</html>
