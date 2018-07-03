<!--      
**************************************************
Author   : Christian Massuh
Course   : CGS4854 Online
URL      : http://ocelot.aul.fiu.edu/~cmass019
Professor: Michael Robinson
Program  : Program Number 4 - about.php
Due Date : 4/8/2018

I certify that this work is my own alone.

..........{ Christian Massuh }..........
**************************************************
-->
<!DOCTYPE html>

<html>
    <head>
        <title>
            Contact Us
        </title>
    </head>
            <?php include('mainMenu.php') ?>

    <body style="font-family:Palatino">

        <center>
            <table border="0" cellpadding="0" cellspacing="0" width="75%" bgcolor="#CCCCCC" height="366" border-color="#CCCCCC">
                <tr>
                    <td width="75%" height="57" colspan="2" bgcolor="#ffffff">
                        <p align="center">
                            <b>
                                <font size="6" color="black">Best Zoos in the USA - A Planning Guide</font>
                            </b>

                            <br>

                            <font size="4">
                                555 Journey Road Suite 1000<br>
                                Los Angeles, CA, USA 55555<br>
                                <a href="mailto:contact@bestzoosusa.com" style="color:#84DCCF">contact@bestzoosusa.com</a>

                                <br>
                                <br>

                                <center>
                                    <form method="POST" action="mailer.php">
                                        <p>How may we help you?</p>

                                        <input type="radio" name="MessageType" value="Customer Has Requested a Call">Request Call
                                        <input type="radio" name="MessageType" value="Customer seeks More Information">More Information
                                        <input type="radio" checked name="MessageType" value="Customer Has Submited a Suggestion">Suggestion
                                        <br> 
                                        <p>What about us do you want to comment on?</p>

                                        <select name="drop_down" size="1">
                                            <option selected>Web Site</option>
                                            <option>Speak to an Agent</option>
                                            <option>Recommendations</option>
                                        </select>

                                        Other: <input type="text" size="26" maxlength="256" name="SubjectOther">

                                        <p>Enter your comments in the space provided below:</p>

                                        <textarea name="Comments" rows="5" cols="42"></textarea><br><br>

                                        Tell us how to get in touch with you:<br><br>

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
                                </center>
                            </font>
                        </p>
                    </td>
                </tr>
            </table>
        </center>

        <?php include('mainMenu.php') ?>
    </body>
</html>