<?php	
		$str=$_REQUEST["aadhar"];
		$e=mysql_connect("localhost","root","");
		mysql_select_db("miniproject");
		$sql = "SELECT status FROM register WHERE aadhar1='$str'";
		$result = mysql_query($sql);
		$value = mysql_fetch_object($result);
		echo '<pre>'; 
print_r($value);
echo '</pre>'; 
		

?>
		