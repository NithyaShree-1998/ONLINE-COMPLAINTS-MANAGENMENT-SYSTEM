 
 <?php
 $a=$_REQUEST["name"];
 $b=$_REQUEST["aadhar"];
 $c=$_REQUEST["address"];
 $d=$_REQUEST["phno"];
 $aa=$_REQUEST["sub"];
 $bb=$_REQUEST["entire"];
 
 $e=mysql_connect("localhost","root","");
 mysql_select_db("miniproject");
 mysql_query("
insert into register(name1,aadhar1,address1,phno1,sub1,sub2)values('$a','$b','$c','$d','$aa','$bb')");
 echo("success");
 mysql_close($e);
 ?>
 <html>
 <head>
 </head>
 <body>
 <script>
 window.alert('YOUR COMPLAINTS HAS BEEN REGISTERED SUCCESSFULLY');
 </script>
 </head>
 <p>
 <h1>YOUR COMPLAINTS HAS BEEN REGISTERED SUCCESSFULLY.....!!!!</h2>
 </p>
 </body>
 </html>
 
 