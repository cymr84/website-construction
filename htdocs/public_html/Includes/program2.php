<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>   

<!--
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 2, To create a website using PHP
Due Date : 2/24/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->
   
        <style type="text/css">
               body
        {
        font-family: "Palatino", "sans serif";
        }
        </style>
        
    </head>
    <body>

        <?php include('mainMenu.php') 
        ?>



        <form method="post" action="controller2.php">

            <!--            TITLE PAGE-->
            <div align="center" style="font-size: 20px;"><h1>Best Zoos in the USA</h1></div>
            <br>	

            <table style="width: 60%; margin: 0px auto;">
                <tr>

                    <!--                TELEPHONE-->
                    <td style="text-align: left; ">Telephone &nbsp; </td>
                    <td style="text-align: left">

			<input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">
                    </td>

			<!--                CHECKBOX LAZOO-->
			<td style="text-align: right"> LA Zoo 
			<input type="checkbox" name="LAZoo" value="LAZoo">
			<?php if ($LAZoo == "LAZoo") echo checked; ?>      
			</td>

                    <td>
                        <a href="http://www.lazoo.org"> <img src="../Images/losangeleszoo.jpg"/></a>
                    </td>

                    <!--                TYPES OF ANIMALS AT LAZOO-->
                    <td >Animals &nbsp; </td>
                    <td text-align: left> 
				<input type="radio" name="Animals1" value="Horses">
				<?php if ($Animals1 == "Horses")   echo checked; ?>
                                Horses &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals == "Bears")   echo "checked"; ?>
                               name="Animals1" value="Bears" checked > Bears &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Monkeys")   echo "checked"; ?>
                               name="Animals1" value="Monkeys" checked > Monkeys &nbsp; &nbsp; </td>
                </tr>


                <!--                LAST NAME-->
                <tr>
                    <td style="text-align: left; width: 10%">Last Name &nbsp; </td>
                    <td>
                        <input type="text" name="LastName" value=" <?php echo $LastName ?>" style="width: 100%;">
                    </td>

                    <!--                    CHECKBOX MIAMI ZOO-->
                    <td style="text-align: right"> 
                        Miami Zoo <input type="checkbox" name="MiamiZoo" 
                               <?php if ($MiamiZoo == "Miami Zoo") echo checked;?>    value="Miami Zoo" >
                    </td>
                    <td>
                        <a href="http://www.zoomiami.org"> <img src="../Images/miamizoo.jpg"/></a>
                    </td>

                    <!--                    TYPES OF ANIMALS AT MIAMI ZOO-->
                    <td >Animals &nbsp; </td>
                    <td style="text-align: left"> 
                        <input type="radio" <?php if ($Animals == "Snakes")   echo "checked"; ?>
                               name="Animals2" value="Snakes" checked > Snakes &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Lizards")   echo "checked"; ?>
                               name="Animals2" value="Lizards" checked > Lizards &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals == "Ferrets")   echo "checked"; ?>
                               name="Animals2" value="Ferrets" checked > Ferrets &nbsp; &nbsp; </td>
                </tr>  

                <!--                FIRST NAME-->
                <tr>
                    <td style="text-align: left; width: 10%">First Name &nbsp; </td>
                    <td style="width: 20%;">
                        <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
                    </td>

                    <!--                    CHECKBOX NEW YORK ZOO-->
                    <td style="text-align: right"> 
                        New York Zoo<input type="checkbox" name="NewYorkZoo" 
                               <?php if ($NewYorkZoo == "New York Zoo") echo checked;?>    value="New York Zoo" >
                    </td>
                    
                    <td>
                        <a href="https://centralparkzoo.com"> <img src="../Images/newyorkzoo.jpg"/></a>
                    </td>

                    <!--                    ANIMALS AT NEW YORK ZOO-->
                    <td >Animals &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Giraffe")   echo "checked"; ?>
                               name="Animals3" value="Giraffe" checked > Giraffe &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Buffalo")   echo "checked"; ?>
                               name="Animals3" value="Buffalo" checked > Buffalo &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Deer")   echo "checked"; ?>
                               name="Animals3" value="Deer" checked > Deer &nbsp; &nbsp; </td>
                </tr>

                <!--                EMAIL-->
                <tr>
                    <td style="text-align: left; width: 10%">Email &nbsp; </td>
                    <td style="width: 20%;">
                        <input type="text" name="Email" value=" <?php echo $Email ?>" style="width: 100%;">
                    </td>

                    <!--                    CHECKBOX HOUSTON ZOO-->
                    <td style="text-align: right">
                        Houston Zoo<input type="checkbox" name="HoustonZoo" 
                               <?php if ($HoustonZoo == "Houston Zoo") echo checked;?>    value="Houston Zoo" >
                    </td>
                    <td>
                        <a href="https://www.houstonzoo.org"> <img src="../Images/houstonzoo.jpg"/></a>
                    </td>

                    <!--                    ANIMALS AT HOUSTON ZOO-->
                    <td >Animals &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Gorilla")   echo "checked"; ?>
                               name="Animals4" value="gorilla" checked > Gorilla &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Zebra")   echo "checked"; ?>
                               name="Animals4" value="Zebra" checked > Zebra &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Antelope")   echo "checked"; ?>
                               name="Animals4" value="Antelope" checked > Antelope &nbsp; &nbsp; </td>
                </tr>

                <!--                TEXT AREA BOX REQUEST-->
                <tr>
                    <td style="text-align: left; width: 10%">Request &nbsp; </td>
                    <td style="width: 20%;">
                        <div> 
                            <textarea name="Request" rows="5" cols="42" 
                                      <?php echo $Request ?> style="width: 100%; height: 50px;">
                            </textarea> 
                        </div>
                    </td>

                    <!--                    CHECKBOX SAN DIEGO ZOO-->
                    <td style="text-align: right"> 
                        San Diego Zoo <input type="checkbox" name="SanDiegoZoo" 
                               <?php if ($SanDiegoZoo == "San Diego Zoo") echo checked;?>    value="San Diego Zoo" >
                        </td>
                    <td>
                        <a href="http://www.sdzsafaripark.org"> <img src="../Images/sandiegozoo.jpg"/>
                        </a>
                    </td>

                    <!--                    ANIMALS AT SAN DIEGO ZOO-->
                    <td >Animals &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Turtle")   echo "checked"; ?>
                               name="Animals5" value="Turtle" > Turtle &nbsp; &nbsp; </td>
                    <td text-align: left> 
                        <input type="radio" <?php if ($Animals == "Elephant")   echo "checked"; ?>
                               name="Animals5" value="Elephant" > Elephant &nbsp; &nbsp; </td>
                    <td text-align: left>
                        <input type="radio" <?php if ($Animals == "Crocodile")   echo "checked"; ?>
                               name="Animals5" value="Crocodile" > Crocodile &nbsp; &nbsp; </td>
                </tr>
            </table>

            <!--            DROPDOWN MENU-->
            <table style="width: 50%; margin: 0px auto;">
                <tr>
                    <td style="width: 5%; text-align: right;">Dates to Visit the Park &nbsp; </td>
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

            <!--            MESSAGE-->
            <table style="width: 50%; margin: 0px auto; ">
                <tr>           
                    <td style="text-align: center">                
                        $message 
                    </td>
                </tr>
            </table>

            <!--            BUTTONS-->

            <table style="width: 50%; margin: 0px auto; text-align: center">
                <tr>           
                    <td><input type="submit" name="Find"   value="Find"></td>
                    <td><input type="submit" name="Save"   value="Save"></td>
                    <td><input type="submit" name="Modify" value="Modify"></td>
                    <td><input type="submit" name="Delete" value="Delete"></td>
                    <td><input type="button" name="Clear"  value="Clear"></td>
                </tr>
            </table>

        </form>

<!--        <php include('mainMenu.php') ?>-->

    </body>
</html>

