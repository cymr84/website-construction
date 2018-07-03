<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - find.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
   <body>

      <?php

      $sql="SELECT * FROM zootrip where Telephone = '$Telephone'";

      if ($result=mysqli_query($connection,$sql))
      {
         //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);

         // Return the number of rows in result set
         $rowcount=mysqli_num_rows($result);

         //printf("Result set has %d rows.\n",$rowcount);

         while( $row = mysqli_fetch_array( $result ) )
         {
            $Telephone    = $row['Telephone'];     //primary key
            $LastName     = $row['LastName'];      //type="text"
            $FirstName    = $row['FirstName'];     //type="text"
            $Email        = $row['Email'];         //type="text"
            $Animals1     = $row['Animals1'];      //type="radio"
            $Animals2     = $row['Animals2'];      //type="radio"
            $Animals3     = $row['Animals3'];      //type="radio"
            $Animals4     = $row['Animals4'];      //type="radio"
            $Animals5     = $row['Animals5'];      //type="radio"
            $LAZoo        = $row['LAZoo'];         //type="checkbox"
            $MiamiZoo     = $row['MiamiZoo'];       //type="checkbox" 
            $HoustonZoo   = $row['HoustonZoo'];    //type="checkbox"
            $SanDiegoZoo  = $row['SanDiegoZoo'];    //type="checkbox"
            $NewYorkZoo   = $row['NewYorkZoo'];    //type="text"
            $Request      = $row['Request'];  //type="textarea"
            $Dates        = $row['Dates'];         //type="dropdown" 
         }


         //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
         //echo "(".$Telephone." ".$FirstName.")";

         $Telephone=trim($Telephone); //take all front and back spaces out

         //if (mysqli_query($connection, $sql)) 
         if ( $rowcount )
         {
            // if record is found, display RECORD FOUND message
            $found = $Telephone;
            $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
         } 

         //checks the length of the telephone number to see if it is empty or not
         else if( strlen($Telephone) ==0 )           
         {
            //if empty, displays the below ERROR message
            $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
            //echo "<br>Error: " . $sql . " " . mysqli_error($connection);

            //clear data in variables       
            $Telephone    = "";
            $LastName      = "";
            $FirstName     = "";
            $Email         = "";
            $Animals1      = "";
            $Animals2      = "";
            $Animals3      = "";
            $Animals4      = "";
            $Animals5      = "";
            $LAZoo         = "";
            $MiamiZoo      = "";
            $HoustonZoo    = "";
            $SanDiegoZoo   = "";
            $NewYorkZoo    = "";
            $Request       = "";
            $Dates         = "";             

            $found         = "";  
         }

         else 
         {
            $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
            //echo "<br>Error: " . $sql . " " . mysqli_error($connection);

            //clear data in variables       
            $Telephone    = "";
            $LastName      = "";
            $FirstName     = "";
            $Email         = "";
            $Animals1      = "";
            $Animals2      = "";
            $Animals3      = "";
            $Animals4      = "";
            $Animals5      = "";
            $LAZoo         = "";
            $MiamiZoo      = "";
            $HoustonZoo    = "";
            $SanDiegoZoo   = "";
            $NewYorkZoo    = "";
            $Request       = "";
            $Dates         = "";

            $found         = "";  
         }
      }

      ?>

   </body>
</html>
