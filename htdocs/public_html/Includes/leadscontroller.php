<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 5 - leadscontroller.php
Due Date : 4/8/2018

I certify that this work is my own alone.

Purpose of this program was to add two new features
to program4. We created a leads feature that captured
user info, and set it to a table. Then we added a 
leads manager that placed the list in ascending order.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
   <body>
      <?php

      //connect to Host
      $connection = mysqli_connect("ocelot.aul.fiu.edu","spr18_cmass019","1061230","spr18_cmass019");

      if (mysqli_connect_errno())
      {
         //          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      else
      {  
         //          echo "<br>I have connected to mySql<br>";            

         // Change database to another name if needed

         $dbName="spr18_cmass019"; 
         $db_selected = mysqli_select_db( $connection, $dbName );

         if (!$db_selected)
         {
            die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
         }

         else
         {
            //             echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;

            //access to a table                    
            $tableName = "leadsTable";

            $query = mysqli_query( $connection, "SELECT * FROM $tableName" );

            //if table does not exist, create it 
            if(!$query)
            {
               //                echo "The ".$tableName." does not exists<br>";

               //                echo "<br>Creating table : ".$tableName."<br>";

               $sql =   "CREATE TABLE ".$tableName."(
                        PRIMARY KEY(Telephone),
                        Telephone      VARCHAR(30) NOT NULL,
                        LastName       VARCHAR(30),
                        FirstName      VARCHAR(30),
                        Email          VARCHAR(30),
                        Request        VARCHAR(30)
                        )";

               $result = mysqli_query( $connection, $sql );

               //confirm table creation
               if ($result)
               {
                  //                   echo "table ". $tableName." created<br>";
               }

               else
               {
                  die ("Can't create ". $tableName." ". mysqli_error() );
               }

            }//if(!$query) if table does not exist, create it 

         }//end if (!$db_selected) connecting to db

      }//end if (mysqli_connect_errno()) connecting to mysql  

      $Telephone     = $_POST['Telephone'];
      $LastName      = $_POST['LastName'];
      $FirstName     = $_POST['FirstName'];
      $Email         = $_POST['Email'];
      $Request       = $_POST['Request'];

      if($_POST['Submit'])
      {
         //echo "inserting record into table ".$tableName."<br>";
         $Telephone=trim($Telephone);
         if(strlen($Telephone)>0)           
         {   
            $sql="INSERT INTO leadsTable (
                  Telephone,
                  LastName,
                  FirstName,
                  Email,
                  Request
               )
               VALUES
               (            
                  '$Telephone',
                  '$LastName',
                  '$FirstName',
                  '$Email',
                  '$Request'
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
      }
      else if($_POST['Clear'])
      {
         $Telephone     = "";
         $LastName      = "";
         $FirstName     = "";
         $Email         = "";
         $Request       = "";
      }

      include('leads.php');
      ?>

   </body>
</html>