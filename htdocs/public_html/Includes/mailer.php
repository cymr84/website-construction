<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - mailer.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->

<?php 

if(isset($_POST['submit'])) 
{ 
    $to          = "michael.robinson@cs.fiu.edu"; 
    $subject     = "From Best Zoos in the USA - A Planning Guide"; 
    $name_field  = $_POST['UserName']; 
    $email_field = $_POST['UserEmail']; 
    $UserTel     = $_POST['UserTel'];  
    $option      = $_POST['MessageType']; 
    $dropdown    = $_POST['drop_down']; 
    $SubjectOther= $_POST['SubjectOther']; 
    $message     = $_POST['Comments'];

    $body = " \n
              From: $name_field\n
              E-Mail: $email_field\n 
              Tel: $UserTel\n 
              Fax: $UserFax\n 
              Option: $option\n 
              Drop-Down: $dropdown\n 
              SubjectOther: $SubjectOther\n
              Message: $message\n"; 

    mail($to, $subject, $body); 

    include('mailerSubmitted.php');
    include('mainMenu.php');
} 

else 
{ 
    include('mainMenu.php');
}

?> 