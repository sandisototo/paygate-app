<?php
    echo <<<HTML
            <html>
                <head>
                    <title>Hello World Example</title>
                    <link rel="stylesheet" href="assets/css/master.css" type="text/css" />
                    <script type="text/javascript" src="assets/lib/jquery.min.js"></script>
                </head>
                <body>
                    <div class="instructions">
                        <h1>Instructions For Question 6</h1>
                        <ul>
                        	<li>Question 6, in addition to <b><i>getData()</i></b> you are provided with, <b><i>getConnection()</i></b>, and <b><i>setup()</i></b></li>
                        	<li><b><i>getConnection()</i></b> will provide you with a connection object</li>
                        	<li><b><i>setup()</i></b> will set data to an in memory database</li>
                        	<li><b><i>getData()</i></b> will provide you with a url</li>
                        	<li>Below are set of sections to adhere to when answering this question</li>
                        	<li>==========MVC==========</li>
                        	<li>Create a mvc structure under "answer/src" directory</li>
                        	<li>Create appropriate models as per your understanding of the SQL section below</li>
                        	<li>Retrieve data as explained in the SQL section below</li>
                        	<li>Display the retrieved data a per instruction in the HTML section below</li>
                        	<li>When done please provide a way to execute/call your mvc implementation</li>
                        	<li>There is section in the index file to link your the mvc call specified above</li>
                        	<li>=======================</li>
                        	<li>==========SQL==========</li>
                        	<li>Query the database exposed by the connection object</li>
                        	<li>The connection object exposes two methods, <b><i>getPdo()</i></b>, and <b><i>executeSelect()</i></b></li>
                        	<li>Use the latter to execute your queries</li>
                        	<li>Bonus if you use the former and showcase your PDO knowledge</li>
                        	<li>Two tables have been populated with data for you</li>
                        	<li>Employees table named "employee" with "EMP_ID, EMP_NAME, EMP_SURNAME, EMP_TITLE" columns</li>
                        	<li>Projects table named "project" with "ID, TITLE, DESCRIPTION, STATE, EMP_ID" columns</li>
                        	<li>Each employee has zero or more projects associated with them</li>
                        	<li>Each employee project can be in different states</li>
                        	<li>Projects states are string values for simplicity</li>
                        	<li>Retrieve only employees with projects that are in "Pending" or "Initial" state</li>
                        	<li>Handle any errors that may occur while retrieving data</li>
                        	<li>Display the results as per instruction in the HTML section Below</li>
                        	<li>=======================</li>
                        	<li>==========HTML=========</li>
                        	<li>Create a table with a head, body, and a footer part</li>
                        	<li>The table must have an id of "tbId"</li>
                        	<li>The table head must have a class named "tdCl"</li>
                        	<li>The body must have a class of your choosing</li>
                        	<li>In this table you will display data according to "appendix1" => "questions/appendix1.png"</li>
                        	<li>Create a hidden element with an attribute name named "action" with a value of "done"</li>
                        	<li>Create a button as shown in "appendix1" named "Done" with an id of "btnDone"</li>
                        	<li>=======================</li>
                        	<li>==========CSS==========</li>
                        	<li>You are provided with a css file "assets/css/master.css" for your styling needs</li>
                        	<li>Style the table created in the HTML section above</li>
                        	<li>Do not create new id's/classes unless instructed in HTML section above</li>
                        	<li>Style the table to look like/close to "appendix1" => "questions/appendix1.png"</li>
                        	<li><b>BONUS:</b></li>
                        	<li>Use css selector to style the table rows even/odd</li>
                        	<li>Use css selector to style the last row as seen in "appendix1"</li>
                        	<li>=======================</li>
                        	<li>==========JS===========</li>
                        	<li>On the HTML section above you have been instructed to create a button</li>
                        	<li>When this button is clicked, do a client side http post to to the url provided by Question 6's <b><i>getData()</i></b> method</li>
                        	<li>You are provided with a javascript file "assets/js/master.js" for your scripting needs</li>
                        	<li>Ideally use the jquery section for your answer. If you are not familiar with jquery, then use normal javascript</li>
                        	<li>When doing the client side post, please pass in a parameter called "action"</li>
                        	<li>The value of the above parameter you will get from the hidden element you create in the HTML section</li>
                        	<li>For the above hidden element, please ensure you get its value using the element name attribute</li>
                        	<li>Using javascript alert out the message you get back from the client side post</li>
                        	<li>If the above message is positive, &#x1f609;</li>
                        	<li>=======================</li>
                        	<li>Good luck!!!</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>