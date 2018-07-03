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
        <style type="text/css">

            nav
            {
                text-align: center;
                font-family: "Palatino";
            }

            nav ul ul 
            {
                display: none;
            }

            nav ul li:hover > ul 
            {
                display: block;
            }

            nav ul 
            {
                background: #f8f8f8; 
                padding: 0 200px;
                border-radius: 10px;  
                list-style: none;
                position: relative;
                display: inline-table;
            }

            nav ul:after 
            {
                content: ""; clear: both; display: block;
            }

            nav ul li 
            {
                float: left;
            }

            nav ul li:hover 
            {
                background: #4b545f; 
                background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
            }


            nav ul li:hover a 
            {
                color: #ffffff; /*=white#ff00ff; /*#fff; */ /*menu name color */
            }

            nav ul li a 
            {
                display: block; 
                padding: 15px 40px;
                color: black; /* main menu name #757575;*/ text-decoration: none;
            }

            nav ul ul 
            {
                background: lightslategray; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
            }

            nav ul ul li 
            {
                float: none; 
                border-top: 1px solid white; /*#6b727c; */ /*border top */
                border-bottom: 1px solid #575f6a; /*border down */
                position: relative;
            }

            nav ul ul li a 
            {
                padding: 10px 40px;
                color: #fff;
            }	

            nav ul ul li a:hover 
            {
                background: black;
            }

            nav ul ul ul 
            {
                position: absolute; left: 100%; top:0;
            }

        </style>
    </head>
    <body>
        
        <nav align="center">
            <ul>
                <li><a href="pgm1.html">program 1</a>
                    <ul>
                        <li><a href="page1.html">page1</a></li>
                        <li><a href="page2.html">page2</a></li>
                        <li><a href="page3.html">page3</a></li>
                        <li><a href="page4.html">page4</a></li>
                        <li><a href="page5.html">page5</a></li>
                        <li><a href="../index.html">home</a></li>
                    </ul>
                <li><a href="program2.php">program 2</a></li>
                <li><a href="program3.php">program 3</a></li>
                <li><a href="program4.php">program 4</a></li>
                <li><a href="program5.php">program 5</a></li>
                <li><a href="../index.html">home</a></li>
            </ul>
        </nav>
       </body>
</html>