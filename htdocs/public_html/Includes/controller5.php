<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 5 - controller5.php
Due Date : 4/8/2018

I certify that this work is my own alone.

Purpose of this program was to add two new features
to program4. We created a leads feature that captured
user info, and set it to a table. Then we added a 
leads manager that placed the list in ascending order.

..........{ Christian Massuh }..........
**************************************************
-->

<!DOCTYPE html>
<html>
  <head>
    <title>Leads First Next Previous Last</title>
  </head>

  <body>
    
    

    <?php
    
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

    if ( $_POST['Find'] )
    { 
      include('find.php');
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

    //ADDED FOR PROGRAM 5
    else if ( $_POST['Leads'] )
    {
      include('leads.php');
    }
    else if ( $_POST['Leads_Manager'] )
    {
      include('leadsmanager.php');
    }
    else
    { 
      echo "<br><h1> you pressed UNKOWN button</h1>";   
    }

    mysqli_close($connection);

    ?>
    <!--       end controler.php-->
  </body>                       
</html>