<p><label for="email">Email:</label> 
<input name="email" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 
<?php 
if(isset($_POST['submit'])) 
{ 
$connect=mysql_connect("localhost","root","") or die("Could not connect to database");
mysql_select_db("estore") or die(mysql_error()); 
$email = $_POST['email']; 
$sql= "SELECT  `password` FROM `estore` WHERE `email` ='.$email.'"; 
$query = mysql_query($sql); 
if(!$query)  
    { 
    die(mysql_error()); 
    } 
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$password=$row["password"]; 
$email=$row["email"]; 
$subject="OnlineSmarthClothingStore - Password Request"; 
$header="From: onlinesmartclothingstore@gmail.com"; 
$content="Your password is ".$password; 
mail($email, $subject, $content, $header);  
print "An email containing the password has been sent to you"; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 
} 
?>