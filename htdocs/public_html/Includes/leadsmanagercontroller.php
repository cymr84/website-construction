<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 5 - leadsmanagercontroller.php
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
  <head>
    <title>Leads First Next Previous Last</title>
  </head>

  <body>

    <?php

    //extact variable to track array's location
    $location=$_POST['location'];
    $location=(int)$location;

    //connect to Host
    $connection = mysqli_connect("ocelot.aul.fiu.edu","spr18_cmass019","1061230","spr18_cmass019");

    //Extract button pressed, If no button is pressed execute First button code.
    if($_POST['Last'])
    {
      //here Telephone is the primary key, 
      $sql="SELECT * FROM leadsTable order by Telephone ASC";

      if ($results=mysqli_query($connection,$sql))
      {
        //find the total number of rows and sets the location to last row.
        $rowcount=mysqli_num_rows($results);
        $location=$rowcount-1;

        //data_seek command moves the memory pointer in SQL table objects.
        //location must be INT or LONG.
        mysqli_data_seek($results, $location);

        $row=mysqli_fetch_assoc($results);

        $Telephone      = $row['Telephone'];
        $FirstName      = $row['FirstName'];
        $LastName       = $row['LastName'];
        $Email          = $row['Email'];
        $Request        = $row['Request'];   

      }//end if ($results=mysqli_query($connection,$sql)) 
      $message ="<span style=\"color: blue;\">You are on the last record.</span><br\>";
    }//end if($_POST['Last'])

    else if($_POST['Previous'])
    {
      $sql="SELECT * FROM leadsTable order by Telephone ASC";

      if ($results=mysqli_query($connection,$sql))
      {
        //Decrement location only if it is above the lowest possible value.
        if ($location >0)    
        {
          $location--;
        }                           
        mysqli_data_seek($results, $location);
        $row=mysqli_fetch_assoc($results);

        $Telephone      = $row['Telephone'];
        $FirstName      = $row['FirstName'];
        $LastName       = $row['LastName'];
        $Email          = $row['Email'];
        $Request        = $row['Request'];

      }//end if ($results=mysqli_query($connection,$sql))
      if($location > 0)
      {
        $record=$location+1;
        $message ="<span style=\"color: blue;\">You are on record $record.</span><br\>";
      }else{
        $message ="<span style=\"color: blue;\">You are on the first record.</span><br\>";
      }
    }//end else if($_POST['Previous'])

    else if($_POST['Next'])
    {
      $sql="SELECT * FROM leadsTable order by Telephone ASC";

      if ($results=mysqli_query($connection,$sql))
      {
        //total number of rows for the upper limit of the search function.
        $rowcount=mysqli_num_rows($results);

        //Increment location only if it is below the highest possible value.
        if ($location <$rowcount-1)    
        {
          $location++;
        }                           

        mysqli_data_seek($results, $location);
        $row=mysqli_fetch_assoc($results);

        $Telephone      = $row['Telephone'];
        $FirstName      = $row['FirstName'];
        $LastName       = $row['LastName'];
        $Email          = $row['Email'];
        $Request        = $row['Request'];

      }//end if ($results=mysqli_query($connection,$sql))
      if($location < $rowcount-1)
      {
        $record=$location+1;
        $message ="<span style=\"color: blue;\">You are on record $record.</span><br\>"; 
      }else{
        $message ="<span style=\"color: blue;\">You are on the last record.</span><br\>";
      }
    }//end else if($_POST['Next'])

    else //get First record
    {
      //Resets location to position 0, and grab the first record in the table.
      $location=0;    
      $sql="SELECT * FROM leadsTable order by Telephone ASC limit 1";

      if ($result=mysqli_query($connection,$sql))
      {
        $row = mysqli_fetch_array( $result );

        $Telephone      = $row['Telephone'];
        $FirstName      = $row['FirstName'];
        $LastName       = $row['LastName'];
        $Email          = $row['Email'];
        $Request        = $row['Request'];

      }//end if ($result=mysqli_query($connection,$sql))
      $message ="<span style=\"color: blue;\">You are on the first record.</span><br\>";
    }//end else

    mysqli_close($connection); //close sql connection

    include('leadsmanager.php');

    ?>
  </body>  
</html>  