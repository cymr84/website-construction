<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - controller4.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title> Controller4.php </title>
   </head>

   <body>

      <?php

      //connecting to mysql 
      //echo "<h3>I am going to connect to mySql";

      //                                server               user      password  database     
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
            $tableName = "zootrip";

            $query = mysqli_query( $connection, "SELECT * FROM $tableName" );

            //if table does not exist, create it 
            if(!$query)
            {
               //                echo "The ".$tableName." does not exists<br>";

               //                echo "<br>Creating table : ".$tableName."<br>";

               $sql = "CREATE TABLE ".$tableName."(
                        PRIMARY KEY(Telephone),
                        Telephone      VARCHAR(30) NOT NULL,
                        LastName       VARCHAR(30),
                        FirstName      VARCHAR(30),
                        Email          VARCHAR(30),
                        Animals1       VARCHAR(30),
                        Animals2       VARCHAR(30),
                        Animals3       VARCHAR(30),
                        Animals4       VARCHAR(30),
                        Animals5       VARCHAR(30),
                        LAZoo          VARCHAR(30),
                        MiamiZoo       VARCHAR(30),
                        HoustonZoo     VARCHAR(30),
						SanDiegoZoo	   VARCHAR(30),
                        NewYorkZoo     VARCHAR(30),
                        Request        VARCHAR(30),
                        Dates          VARCHAR (30)
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


      //      EXTRACTS DATA

      $Telephone     = $_POST['Telephone'];
      $LastName      = $_POST['LastName'];
      $FirstName     = $_POST['FirstName'];
      $Email         = $_POST['Email'];
      $Animals1      = $_POST['Animals1'];
      $Animals2      = $_POST['Animals2'];
      $Animals3      = $_POST['Animals3'];
      $Animals4      = $_POST['Animals4'];
      $Animals5      = $_POST['Animals5'];
      $LAZoo         = $_POST['LAZoo'];
      $MiamiZoo      = $_POST['MiamiZoo'];
      $HoustonZoo    = $_POST['HoustonZoo'];
      $SanDiegoZoo   = $_POST['SanDiegoZoo'];
      $NewYorkZoo    = $_POST['NewYorkZoo'];
      $Request       = $_POST['Request'];
      $Dates         = $_POST['Dates'];

      $found = $_POST['found']; 

      //Verify that the data entered by the user is being received
      //      echo $Telephone."<br>"; 
      //      echo $LastName."<br>";  
      //      echo $FirstName."<br>";  
      //      echo $Email."<br>"; 
      //
      //      echo "<br>Animals I would like to see:<br>";
      //      echo $Animals1."<br>";
      //      echo $Animals2."<br>";
      //      echo $Animals3."<br>";
      //      echo $Animals4."<br>";
      //      echo $Animals5."<br>";
      //
      //      echo "<br>Zoos that I would like to visit:<br>";
      //      echo $LAZoo."<br>";  
      //      echo $MiamiZoo."<br>";  
      //      echo $HoustonZoo."<br>";  
      //      echo $SanDiegoZoo."<br>";  
      //      echo $NewYorkZoo."<br>";
      //      echo $Request."<br>";
      //
      //      echo "<br>Months I would like to travel:<br>";
      //      echo $Dates."<br><br>"; 

      //include( "program3.php" );

      //CALLS BUTTON PRESSED

      if ( $_POST['Find'] )
      { 
         include('find.php');
         include( "program4.php" );
      }
      else if ( $_POST['Save'] )
      { 
         include('save.php');
         include( "program4.php" );
      }
      else if ( $_POST['Modify'] )
      {  
         include('modify.php');
         include( "program4.php" );
      }
      else if ( $_POST['Delete'] )
      { 
         include('delete.php');
         include( "program4.php" );
      }
      else if ( $_POST['Clear'] )
      {
         include('clear.php');
         include( "program4.php" );
      }
      else if ( $_POST['Help'] )
      {
         include('help.php');
         include( "program4.php" );
      }
      else if ( $_POST['About'] )
      {
         include('about.php');
      }
      else if ( $_POST['Contact'] )
      {
         include('contactus.php');
      }
      else
      { 
         echo "<br><h1> you pressed UNKOWN button</h1>";   
      }

      mysqli_close($connection);

      //PRINTS BUTTON PRESSED
      //if ( $_POST['Find'] )
      //{ 
      //echo "I pressed the Find Button";
      //}
      //else if ( $_POST['Save'] )
      //{ 
      //echo "I pressed the Save Button";
      //}
      //else if ( $_POST['Modify'] )
      //{  
      //echo "I pressed the Modify Button";
      //}
      //else if ( $_POST['Delete'] )
      //{ 
      //echo "I pressed the Delete Button";
      //}
      //else if ( $_POST['Clear'] )
      //{
      //echo "I pressed the Clear Button";
      //}
      //else
      //{ 
      //echo "<br><h1> you pressed UNKOWN button</h1>";   
      //}

      ?>
      <!--       end controler.php-->

   </body>                       
</html>