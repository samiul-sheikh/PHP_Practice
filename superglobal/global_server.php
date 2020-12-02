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

                PHP buildin superglobal variable
                <br/>
                1. $GLOBALS
                2. $_SERVER
                3. $_REQUEST
                4. $_POST
                5. $_$GET
                6. $_FILE
                7. $_ENV
                8. $_COOKIE
                9. $_SESSION
                <hr/>
                $GLOBALS & $_SERVER
                <hr/>


                <?php

                /*
                $x = 10;
                $y = 20;

                function sum(){

                    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                    
                }

                sum();
                echo $z;

                */

                echo $_SERVER['PHP_SELF'];
                // echo $_SERVER['SERVER_NAME'];
                // echo $_SERVER['HTTP_USER_AGENT'];
                // echo $_SERVER['SERVER_ADDR'];


                ?>

            </section>


        <section class="footerportion">
            <h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        </section>


        </div>


    </body>

</html>
