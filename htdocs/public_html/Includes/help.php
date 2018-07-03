<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - help.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<html>
  <head>
    <body>
      <script>
        help();
        function help()
        {
          // Open a new window at a specific location
          var myWindow = window.open("", "Help", "width=500, height=600, scrollbars=yes, resizable=yes, left=870, top=50"); 

          // Display the purpose of each button on the form in the newly opened window
          myWindow.document.write("<h2 style='font-family:Palatino'>Help Menu</h2>");
          myWindow.document.write("<hr>\n");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>FIND:</b><ul><li><font face='Palatino'>Locates user information by phone number.</font></li></ul></span></p>");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>SAVE:</b><ul><li><font face='Palatino'>Saves new user information using a telephone number as their unique identification.</font></li></ul></p>");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>MODIFY:</b><ul><li><font face='Palatino'>Allows users to modify a record.</li><li>Users must first enter their phone number, then click the <span style='color:84DCCF'>FIND</span> button to locate the record.</li><li>Once the record has been found, they then will be able to update the active record shown.</li></font></li></ul></span></p>");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>DELETE:</b><ul><li><font face='Palatino'>Deletes a record from our database. First locate the record by phone number using the <span style='color:84DCCF'>FIND</span> button, then press the <span style='color:84DCCF'>DELETE</span> button.</font></li></ul></span></p>");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>CLEAR:</b><ul><li><font face='Palatino'>Resets all the information entered or currently selected on our screen.</li></ul></p>");
          
          myWindow.document.write("<p style='font-family:Palatino'>\n <b>HELP:</b><ul><li><font face='Palatino'>Launches a pop up screen to shows the uses for the buttons on our website.</li></ul></p>");
        }
      </script>
    </body>
  </head>
</html>