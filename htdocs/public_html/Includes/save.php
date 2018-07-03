<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - save.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
   <body>
      <?php

      //echo "inserting record into table ".$tableName."<br>";
      $Telephone=trim($Telephone);
      if(strlen($Telephone)>0)           
      {   
         $sql="INSERT INTO zootrip (
                  Telephone,
                  LastName,
                  FirstName,
                  Email,
                  Animals1,
                  Animals2,
                  Animals3,
                  Animals4,
                  Animals5,
                  LAZoo,
                  MiamiZoo,
                  HoustonZoo,
				  SanDiegoZoo,
                  NewYorkZoo,
                  Request,
                  Dates
               )
               VALUES
               (            
                  '$Telephone',
                  '$LastName',
                  '$FirstName',
                  '$Email',
                  '$Animals1',
                  '$Animals2',
                  '$Animals3',
                  '$Animals4',
                  '$Animals5',
                  '$LAZoo',
                  '$MiamiZoo',
                  '$HoustonZoo',
				  '$SanDiegoZoo',
                  '$NewYorkZoo',
                  '$Request',
                  '$Dates'
               )";

         if (mysqli_query($connection, $sql))   
         {
            //echo "<br>New record created successfully";
            $message ="<span style=\"color: blue;\">RECORD $found ADDED</span><br\>";
         } 

         else
         {
            //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
            $message ="<span style=\"color: red;\">RECORD $found EXISTS NOT ADDED</span><br\>";
         }
      }//end if(strlen($Telephone)>0)

      else
      {
         $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
      } 

      ?>

   </body>
</html>