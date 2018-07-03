<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - delete.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
   <body>
      <!--h3>this is delete.phd</h3-->
      <?php

      $record = "RECORD ". $Telephone." DELETED";

      $found = $_POST['found']; 
      //echo "delete  found = [" . $found . "]<br>";

      // sql to delete a record
      $sql="DELETE FROM zootrip WHERE Telephone='$Telephone'";

      $Telephone=trim($Telephone);

      //     if(strlen($Telephone)>0)           
      if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
      { 

         if (mysqli_query($connection, $sql)) 
         {
            //echo "Record deleted successfully found = {".$found."}";
            $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
            $found=""; //this clear the flag for record found to be able to modify 
         }         

         else 
         {
            $message = "Error deleting record: " . mysqli_error($connection); 
         }  
      }   

      else
      {
         $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
      }
      
      ?>                   
      
</body>        
</html>

<!--end delete.php-->