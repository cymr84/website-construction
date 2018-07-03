
<!-- begin /purpose/purposeMain.php>-->
<!-- Page Name: contacUs.php --> 
<!-- Author:    Michael Robinson -->
<!-- Updated:   06-13-2009 -->
<!-- Purpose:   Contact Us page -->



<title>Contact Us</title>

    <!--?php include('../includes/header.php')?-->
    <?php include('../includes/selections.php')?>

 <center>
 <table border="1" cellpadding="0" cellspacing="0" width="75%" bgcolor="#CCCCCC" height="366" BORDERCOLOR=BLUE>
  <tr>
   <td width="75%" height="57"  colspan="2"  bgcolor="#F2F5A9" >
	
    <!--div align="center"><b><font size="4" color="#0000FF" bgcolor=yellow>Contact Me</font></b></div-->

    <p align="center">
	<b><font size="3" color="black" bgcolor=yellow>Michael Robinson</font><b><br>
	<!--a href="http://biorg.cs.fiu.edu">Bioinformatics Research Group (Biorg)<br-->
	Florida International University<br>
	School of Computing and Information Sciences<br>
	11200 S. W. 8th Street ECS 212d<br>
	Telephone 305-348-7523<br>
	Miami, Florida, USA 33199<br>
	<a href="mailto:cmass019@fiu.edu">cmass019@fiu.edu</a><br>
    

    <br>

    <center>
    <form method="POST" action="mailer.php">
        <p><strong>What kind of comment would you like to send?</strong></p>

        <input type="radio" name="MessageType" value="Complaint">Complaint 
        <input type="radio" name="MessageType" value="Problem">Problem
        <input type="radio" checked name="MessageType" value="Suggestion">Suggestion
        <br> 
        <p><strong>What about us do you want to comment on?</strong></p>
 
        <select name="drop_down" size="1">
            <option selected>Web Site</option>
            <option>Office/Lab Hours</option>
            <option>Text Books</option>
        </select>

        Other: <input type="text" size="26" maxlength="256" name="SubjectOther">

        <p><strong>Enter your comments in the space provided below:</strong></p>

        <textarea name="Comments" rows="5" cols="42"></textarea><br><br>

        <strong>Tell us how to get in touch with you:</strong><br><br>

        <table>
          <tr><td width="45">&nbsp;Name     </td> <td><input type="text" size="35" maxlength="256" name="UserName"> </td></tr>
          <tr><td width="45">&nbsp;E-mail   </td> <td><input type="text" size="35" maxlength="256" name="UserEmail"></td></tr>
          <tr><td width="45">&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="256" name="UserTel">  </td></tr>
        </table>
    
        <br>
        <input type="checkbox" name="check[]" value="Contact Requested">
                                              Please contact me as soon as possible regarding this matter
        <br><br> 
        <input type="submit" value="Submit" name="submit"> 
        <input type="reset"  value="Clear Form">
        <br>
    </form>

   </td>
  </tr>
 </table>
 </center>

   <?php include('../includes/mainMenu.php')?>

