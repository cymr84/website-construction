<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - modify.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
  <body>
    <!--h3>this is modify.phd</h3-->
        
    <?php
       //pulls the data from variable found in the controller
       $found = $_POST['found']; 
     
/*     
       echo "modify  found = [" . $found . "]<br>";
        
       echo $Telephone."<br>"; 
       echo $LastName."<br>";  
       echo $FirstName."<br>";  
       echo $Email."<br>";  
       echo $Animals1."<br>";  
       echo $Animals2."<br>";  
       echo $Animals3."<br>"; 
       echo $Animals4."<br>";
       echo $Animals5."<br>";
       echo $LaZoo."<br>";  
       echo $MiamiZoo."<br>";  
       echo $HoustonZoo."<br>";  
       echo $SanDiegoZoo."<br>";  
       echo $NewYorkZoo."<br>";  
       echo $Request."<br>";  
       echo $Dates."<br>";   
              
       echo "<br>modify found = [" . $found . "]";
*/
     
     //condition 1
     // if the string length after trimming is greater than zero - means its not empty
     
     //condition 2
     // make sure that found command contains the same value as telephone
     
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
          
      //then ready to MODIFY             
          
          $query = "UPDATE zootrip 
                    SET LastName      =  '$LastName', 
                        FirstName     =  '$FirstName',
                        Email         =  '$Email',
                        Animals1      =  '$Animals1',
                        Animals2      =  '$Animals2',
                        Animals3      =  '$Animals3',
                        Animals4      =  '$Animals4',
                        Animals5      =  '$Animals5',
                        LAZoo         =  '$LAZoo',
                        MiamiZoo      =  '$MiamiZoo',
                        HoustonZoo    =  '$HoustonZoo',
                        SanDiegoZoo   =  '$SanDiegoZoo',
                        NewYorkZoo    =  '$NewYorkZoo',
                        Request       =  '$Request',
                        Dates         =  '$Dates'  
                  
                   WHERE Telephone = '$Telephone'";
         
          //command to execute
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
          }   
          
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          } 
       }
     
       else
       {
          $message ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYNG IT</span><br\>";
       }
    ?>
     
  </body>       
</html>
<!--//end modify.php-->