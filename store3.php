 
 <?php
 $a=$_REQUEST["name"];
 $b=$_REQUEST["email"];
 $c=$_REQUEST["phone"];
 $d=$_REQUEST["message"];
 $e=mysql_connect("localhost","root","");
 mysql_select_db("miniproject");
 mysql_query("
insert into feedback(name,email,phone,message)values('$a','$b','$c','$d')");
 echo("success");
 mysql_close($e);
 ?>
 <html>
 <head>
 </head>
 <body background="img/body1.jpg">
 <script>
 window.alert('YOUR FEEDBACKS HAS BEEN REGISTERED SUCCESSFULLY');
 </script>
 </head>
 <p>
 <h1 style="color:white;">YOUR FEEDBACKS HAS BEEN REGISTERED SUCCESSFULLY.....!!!!</h2>
 </p>
 </body>
 </html>
 
 