<html>
<head>
  
<title>USER CREDENTIALS</title>

</head>
<body>
<?php

$db_hostname = 'sql102.epizy.com';
$db_database = 'epiz_31739823_abhishek';
$db_username = 'epiz_31739823';
$db_password = 'fMTVy8ecYs';

$username=$_REQUEST['Username'];
$password=$_REQUEST['Password'];
 $test=0;
 if($username=="")
 {
      echo "<script type='text/javascript'>alert('Provide Valid username');</script>";
      $test=1;
     
 }
  if($password=="")
 {
      echo "<script type='text/javascript'>alert('Provide Valid password');</script>";
       $test=1;
 }
 

$connection = mysql_connect($db_hostname,$db_username,$db_password);
mysql_select_db('epiz_31739823_abhishek',$connection);
$res=mysql_fetch_array(mysql_query("SELECT username,password from login where username='$username' and password='$password'"));
if($res)
{
    echo "<script type='text/javascript'>alert('WELCOME YOU HAVE ALREADY CREATED THE ACCOUNT ');</script>";
    $test=1;
    $page = "https://123ab340.github.io/whatssonsite/index.html";  

     // Example dynamic page

// Redirect using PHP header
header("Location: $page");
}

echo "</br>";
if($test==0)
{
if(mysql_query("insert into login(username,password) VALUES('$username','$password')"))
{
 
  echo "<script type='text/javascript'>alert('SIGN UP SUCCESS LOGIN NOW ');</script>";

  
}





}

else
{
  //header('Location:index.html');
}

$connection->close();

?>



</body>

</html>
