<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 5 - leads.php
Due Date : 4/8/2018

I certify that this work is my own alone.

Purpose of this program was to add two new features
to program4. We created a leads feature that captured
user info, and set it to a table. Then we added a 
leads manager that placed the list in ascending order.

..........{ Christian Massuh }..........
**************************************************
-->

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style type="text/css">
            body
            {
                font-family: "Palatino", "sans serif";
            }

            /*TOOL TIP CSS*/
            .tooltip 
            {
                position: relative;
                display: inline-block;
                border-bottom: 1px dotted black;
            }

            /* FIRST FIELD */
            .tooltip .tooltiptext1 
            {
                visibility: hidden;
                width: 120px;
                background-color: #66C7F4;
                color: whitesmoke;
                text-align: center;
                border-radius: 6px;
                padding: 5px 0;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 1s;
            }

            .tooltip .tooltiptext1::after 
            {
                content: "";
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #66C7F4 transparent transparent transparent;
            }

            .tooltip:hover .tooltiptext1 
            {
                visibility: visible;
                opacity: 1;
            }
            /*END OF TOOL TIP CSS */

            /*CURRENT TIME ID*/
            #txt
            {
                text-align: right;
            }

            /* TABLE BORDER*/
            /*
            #maintable{
            border: 1px solid black;
            }
            */
        </style>

        <title> Massuh, Christian, Program 5 - Leads</title>
        
        <!--             TITLE PAGE-->
            <div align="center" style="font-size: 20px;"><h1>Best Zoos in the USA - A Planning Guide</h1></div>

        <!--            MENU-->
            <?php include('mainMenu.php') ?>

        <!--        START OF LOGIN IN-->
        <script>

            function currentTime() 
            {
                var today   = new Date();
                var hour    = today.getHours();
                var minutes = today.getMinutes();
                var sec     = today.getSeconds();

                minutes = checkTime(minutes);
                sec     = checkTime(sec);

                document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;

                var t = setTimeout(function(){currentTime()},500);      
            }

            function checkTime(i) 
            {
                if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }

        </script>
    </head>

    <body onload="currentTime()">
        <table width="75%">
            <tr>
                <td style="text-align:right">
                    <script>

                        loggedInTime();

                        var temp1;

                        function loggedInTime( temp )
                        {
                            var tiempo = new Date();  
                            var temp2 =  "logged in at : " + tiempo;
                            temp1 = temp2;
                            document.write( temp2 );
                        }

                        //document.write( " " + "I am next " + temp1 ); 

                        currentTime();

                    </script>
                </td>

                <td>
                    <div id="txt" style="text-align:right"></div>                
                </td>
            </tr>
        </table>

        <!--        END LOG IN-->

    </body> 


    <body>

        <?php 

        if( strlen(trim($found)) > 0 )
        {  
            //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
            //leave it alone it means that find.php was already executed 
        }
        else 
        {
            $found = ""; //set the value of $found to empty
        }
        ?>        

        <form method="post" action="leadscontroller.php">

            <table id="maintable" style="width: 25%; margin: 0px auto;" >
                <tr>

                    <!--                TELEPHONE-->
                    <td style="text-align: left; ">
                        <div class="tooltip">Telephone &nbsp; 
                            <span class="tooltiptext1">Please enter your telephone here.</span>
                        </div>
                    </td>
                    <td style="text-align: left">

                        <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;" placeholder="Telephone" >
                    </td>


                    <!--                LAST NAME-->
                <tr>
                    <td style="text-align: left; ">
                        <div class="tooltip">Last Name &nbsp; 
                            <span class="tooltiptext1">Please enter your last name here.</span>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="LastName" value="<?php echo $LastName?>" style="width: 100%;" placeholder="Last Name" >
                    </td>

                    <!--                FIRST NAME-->
                <tr>
                    <td style="text-align: left; ">
                        <div class="tooltip">First Name &nbsp; 
                            <span class="tooltiptext1">Please enter your first name here.</span>
                        </div>
                    </td>
                    <td style="width: 20%;">
                        <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;" placeholder="First Name" >
                    </td>


                    <!--                EMAIL-->
                <tr>
                    <td style="text-align: left; ">
                        <div class="tooltip">Email &nbsp; 
                            <span class="tooltiptext1">Please enter your email here.</span>
                        </div>
                    </td>
                    <td style="width: 20%;">
                        <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;" placeholder="Email" >
                    </td>


                    <!--                TEXT AREA BOX REQUEST-->
                <tr>
                    <td style="text-align: left; ">
                        <div class="tooltip">Request &nbsp; 
                            <span class="tooltiptext1">Please enter any requests here.</span>
                        </div>
                    </td>
                    <td style="width: 20%;">
                        <div> 
                            <textarea name="Request" rows="5" cols="42" style="width: 100%; height: 50px;" placeholder="Request" ><?php echo $Request ?></textarea> 
                        </div>
                    </td>

            </table>

            <tr>
                <td> &nbsp; </td>
            </tr>

            <tr>
                <td> &nbsp; </td>
            </tr>

            <!--            MESSAGE-->
            <table style="width: 50%; margin: 0px auto; ">
                <tr>           
                    <td style="text-align: center">
                        
                        <?php 
                        $Telephone ="<span style=\"color: blue;\">$Telephone</span>";
                        echo $message." ".$Telephone 
                        ?>
                        
                    </td>
                </tr>
            </table>

            <tr>
                <td> &nbsp; </td>
            </tr>

            <!--            BUTTONS-->
            <table style="width: 25%; margin: 0px auto; text-align: center">
                <tr>           
                    <td><input type="submit"    name="Submit"   value="Submit"></td>
                    <td><input type="submit"    name="Clear"    value="Clear"></td>

                    <td><input type="hidden" name="found"  value="<?php echo $found ?>" >
                    </td>
                </tr>
            </table>

                    <?php include('mainMenu.php')?>
            
        </form>
    </body>
</html>

