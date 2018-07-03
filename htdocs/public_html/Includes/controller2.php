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

      <title>
         Controller2.php
      </title>
   </head>
   <body>
      Hi I am the Controller<br><br>
      My Information:<br>

      <!--EXTRACTS DATA-->
      <?php
      $Telephone    = $_POST['Telephone'];
      $LastName     = $_POST['LastName'];
      $FirstName    = $_POST['FirstName'];
      $Email        = $_POST['Email'];
      $Dates        = $_POST['Dates'];
      $Animals1     = $_POST['Animals1'];
      $Animals2      = $_POST['Animals2'];
      $Animals3      = $_POST['Animals3'];
      $Animals4      = $_POST['Animals4'];
      $Animals5      = $_POST['Animals5'];
      $Request      = $_POST['Request'];
      $LAZoo      = $_POST['LAZoo'];
      $MiamiZoo      = $_POST['MiamiZoo'];
      $HoustonZoo      = $_POST['HoustonZoo'];
      $SanDiegoZoo      = $_POST['SanDiegoZoo'];
      $NewYorkZoo      = $_POST['NewYorkZoo'];

      $found = $_POST['found']; 

      //Verify that the data entered by the user is being received
      echo $Telephone."<br>"; 
      echo $LastName."<br>";  
      echo $FirstName."<br>";  
      echo $Email."<br>"; 

      echo "<br>Animals I would like to see:<br>";
      echo $Animals1."<br>";
      echo $Animals2."<br>";
      echo $Animals3."<br>";
      echo $Animals4."<br>";
      echo $Animals5."<br>";

      echo "<br>Zoos that I would like to visit:<br>";
      echo $LAZoo."<br>";  
      echo $MiamiZoo."<br>";  
      echo $HoustonZoo."<br>";  
      echo $SanDiegoZoo."<br>";  
      echo $NewYorkZoo."<br>";
      echo $Request."<br>";

      echo "<br>Months I would like to travel:<br>";
      echo $Dates."<br><br>"; 


      //PRINTS BUTTON PRESSED
      if ( $_POST['Find'] )
      { 
         echo "I pressed the Find Button";
      }
      else if ( $_POST['Save'] )
      { 
         echo "I pressed the Save Button";
      }
      else if ( $_POST['Modify'] )
      {  
         echo "I pressed the Modify Button";
      }
      else if ( $_POST['Delete'] )
      { 
         echo "I pressed the Delete Button";
      }
      else if ( $_POST['Clear'] )
      {
         echo "I pressed the Clear Button";
      }
      else
      { 
         echo "<br><h1> you pressed UNKOWN button</h1>";   
      }

      ?>
      <!--       //end controler.php-->

   </body>                       
</html>