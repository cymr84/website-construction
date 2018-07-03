<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - program4.php
Due Date : 4/8/2018

I certify that this work is my own alone.

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


        <title> Massuh, Christian, Program 4</title>

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
        <table width="100%">
            <tr>
                <td>
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
                    <div id="txt"></div>
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

        <form method="post" action="controller4.php">

            <!--            TITLE PAGE-->
            <div align="center" style="font-size: 20px;"><h1>Best Zoos in the USA - A Planning Guide</h1></div>

            <!--            MENU-->
            <?php include('mainMenu.php') ?>

            <table id="maintable" style="width: 70%; margin: 0px auto;" >
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

                    <!--                CHECKBOX LAZOO-->
                    <td style="text-align: right"> LA Zoo 
                        <input type="checkbox" name="LAZoo" value="LAZoo" <?php if ($LAZoo == "LAZoo") echo "checked"; ?> >

                    </td>

                    <td>
                        <a href="http://www.lazoo.org"> <img src="../Images/losangeleszoo.jpg"/></a>
                    </td>

                    <!--                RADIO BUTTON -- TYPES OF ANIMALS AT LAZOO-->
                    <td >Favorite Animal to See: &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" name="Animals1" value="Horses" <?php if ($Animals1 == "Horses")   echo "checked"; ?> > Horses &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals1 == "Bears")   echo "checked"; ?>
                               name="Animals1" value="Bears"  > Bears &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals1 == "Monkeys")   echo "checked"; ?>
                               name="Animals1" value="Monkeys"  > Monkeys &nbsp; &nbsp; </td>
                </tr>


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

                    <!--                    CHECKBOX MIAMI ZOO-->
                    <td style="text-align: right"> 
                        Miami Zoo <input type="checkbox" name="MiamiZoo" 
                                         <?php if ($MiamiZoo == "MiamiZoo") echo checked;?>    value="MiamiZoo" >
                    </td>
                    <td>
                        <a href="http://www.zoomiami.org"> <img src="../Images/miamizoo.jpg"/></a>
                    </td>

                    <!--                    RADIO BUTTON -- TYPES OF ANIMALS AT MIAMI ZOO-->
                    <td >Favorite Animal to See: &nbsp; </td>
                    <td style="text-align: left"> 
                        <input type="radio" <?php if ($Animals2 == "Snakes")   echo "checked"; ?>
                               name="Animals2" value="Snakes"  > Snakes &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals2 == "Lizards")   echo "checked"; ?>
                               name="Animals2" value="Lizards"  > Lizards &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals2 == "Ferrets")   echo "checked"; ?>
                               name="Animals2" value="Ferrets"  > Ferrets &nbsp; &nbsp; </td>
                </tr>  

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

                    <!--                    CHECKBOX NEW YORK ZOO-->
                    <td style="text-align: right"> 
                        New York Zoo<input type="checkbox" name="NewYorkZoo" 
                                           <?php if ($NewYorkZoo == "NewYorkZoo") echo checked;?>    value="NewYorkZoo" >
                    </td>

                    <td>
                        <a href="https://centralparkzoo.com"> <img src="../Images/newyorkzoo.jpg"/></a>
                    </td>

                    <!--                    RADIO BUTTON -- ANIMALS AT NEW YORK ZOO-->
                    <td >Favorite Animal to See: &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals3 == "Giraffe")   echo "checked"; ?>
                               name="Animals3" value="Giraffe"  > Giraffe &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals3 == "Buffalo")   echo "checked"; ?>
                               name="Animals3" value="Buffalo"  > Buffalo &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals3 == "Deer")   echo "checked"; ?>
                               name="Animals3" value="Deer"  > Deer &nbsp; &nbsp; </td>
                </tr>

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

                    <!--                    CHECKBOX HOUSTON ZOO-->
                    <td style="text-align: right">
                        Houston Zoo<input type="checkbox" name="HoustonZoo" 
                                          <?php if ($HoustonZoo == "HoustonZoo") echo checked;?>    value="HoustonZoo" >
                    </td>


                    <td>
                        <a href="https://www.houstonzoo.org"> <img src="../Images/houstonzoo.jpg"/></a>
                    </td>

                    <!--                    RADIO BUTTON -- ANIMALS AT HOUSTON ZOO-->
                    <td >Favorite Animal to See: &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals4 == "Gorilla")   echo "checked"; ?>
                               name="Animals4" value="Gorilla"  > Gorilla &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals4 == "Zebra")   echo "checked"; ?>
                               name="Animals4" value="Zebra"  > Zebra &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Antelope")   echo "checked"; ?>
                               name="Animals4" value="Antelope"  > Antelope &nbsp; &nbsp; </td>
                </tr>

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

                    <!--                    CHECKBOX SAN DIEGO ZOO-->
                    <td style="text-align: right">
                        San Diego Zoo<input type="checkbox" name="SanDiegoZoo" 
                                            <?php if ($SanDiegoZoo == "SanDiegoZoo") echo checked;?>    value="SanDiegoZoo" >
                    </td>

                    <td>
                        <a href="http://www.sdzsafaripark.org"> <img src="../Images/sandiegozoo.jpg"/>
                        </a>
                    </td>

                    <!--                    RADIO BUTTON -- ANIMALS AT SAN DIEGO ZOO-->
                    <td >Favorite Animal to See: &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals5 == "Turtle")   echo "checked"; ?>
                               name="Animals5" value="Turtle"  > Turtle &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals5 == "Elephant")   echo "checked"; ?>
                               name="Animals5" value="Elephant"  > Elephant &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals5 == "Crocodile")   echo "checked"; ?>
                               name="Animals5" value="Crocodile"  > Crocodile &nbsp; &nbsp; </td>
                </tr>

            </table>

            <!--            DROPDOWN MENU-->
            <table style="width: 50%; margin: 0px auto;">
                <tr>
                    <td style="text-align: left; width: 5%;">
                        <div class="tooltip">Dates to Visit the Park(s): &nbsp; 
                            <span class="tooltiptext1">Please select from our list of dates.</span>
                        </div>
                    </td>
                    <td style="width: 20%; text-align: left;">
                        <select name="Dates" style="width: 100%"size="1";>
                            <option value="January-March"       <?php if ($Dates == "January-April")      echo selected ?> >January to March
                            </option>
                            <option value="April-June"          <?php if ($Dates == "April-June")         echo selected ?> >April to June
                            </option>
                            <option value="July-September"      <?php if ($Dates == "July-September")     echo selected ?> >July to September
                            </option>
                            <option value="October-December"    <?php if ($Dates == "October-December")   echo selected ?> >October-December
                            </option>
                        </select>
                    </td>
                </tr>
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
                        <?php echo $message ?> 
                    </td>
                </tr>
            </table>

            <tr>
                <td> &nbsp; </td>
            </tr>

            <!--            BUTTONS-->
            <table style="width: 50%; margin: 0px auto; text-align: center">
                <tr>           
                    <td><input type="submit" name="Find"   value="Find"></td>
                    <td><input type="submit" name="Save"   value="Save"></td>
                    <td><input type="submit" name="Modify" value="Modify"></td>
                    <td><input type="submit" name="Delete" value="Delete"></td>
                    <td><input type="submit" name="Clear"  value="Clear"></td>
                    <td><input type="submit" name="Help"  value="Help"></td>
                    <td><input type="submit" name="About"  value="About"></td>
                    <td><input type="submit" name="Contact"  value="Contact"></td>
                    

                    <td><input type="hidden" name="found"  value="<?php echo $found ?>" >
                    </td>
                </tr>
            </table>

        </form>

        <?php include('mainMenu.php') ?>

    </body>
</html>

