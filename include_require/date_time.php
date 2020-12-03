<?php include 'header.php'; ?>


            <section class="maincontent">

                <hr/>
                Date & Time

                <span style = "float:right">
                    <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time : ".date("h:i:sa");
                    ?>
                </span>
                <hr/>

                <?php

                    // echo date("d/m/Y");

                    // echo "Today is : ".date("d/m/Y");

                    // echo "Today is : ".date("d-m-y");

                    echo "Today is : ".date("d.m.Y")."<br/>";

                    echo "Today is : ".date("l")."<br/>";

                    echo "Default Time is : ".date("h:i:sa")."<br/>";


                    date_default_timezone_set('Asia/Dhaka');
                    echo "Bangladesh Time is : ".date("h:i:sa")."<br/>";

                    echo date_default_timezone_get();

                ?>

            </section>


<?php require 'footer.php'; ?>
