<script type="text/javascript">
    function show_alert() {
    var msg = "you are allowed";
    alert(msg);
    }
</script>
<?php
$host="localhost";
$user="root";
$pass="";
$db="login";
mysql_connect($host,$user,$pass) or die('sorry could not connect to the database');
mysql_select_db($db);
$user=$_POST['user'];
$pass=$_POST['pass'];
$user=stripslashes($user);
$pass=stripslashes($pass);
$select=mysql_query("SELECT * FROM `user` WHERE username='$user' AND password='$pass'");
$res=mysql_num_rows($select);
echo $res;
if($res==1)
{

  session_start();
  $_SESSION['user']="user";
// Register $myusername, $mypassword and redirect to file "login_success.php"
echo '<script type="text/javascript"> show_alert(); </script>';
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
//header('location:index.php');
}
?>


