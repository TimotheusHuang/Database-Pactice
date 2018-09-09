<?php session_start(); ?>
<?php
include("Mysql_connect.inc.php");
?>	

<?php
$friend = $_POST['friend'] ;
$id = $_SESSION['Account'] ;

$sql = "SELECT Account FROM info WHERE Name='$friend'" ;	

$result = mysql_fetch_row(mysql_query($sql)) ;
$id2 = $result[0] ;


//We check if the user is logged
if(isset($_SESSION['Account']))
{
echo "<div style ='font:30px/50px Arial,tahoma,sans-serif;color:#ff0000'><p align=center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp您與 $friend 的私訊</p></div> <br>";

$Sql = "SELECT message FROM pm WHERE (user1 = '$id' AND user2 = '$id2') OR (user2 = '$id' AND user1 = '$id2') order by timestamp";	
$result = mysql_query($Sql) ;

while($row = mysql_fetch_row($result))
{
	echo "$row[0] <br><br><br><br>" ;
	
	
}	
	
	
	
}

else
{
	echo '您無權觀看此頁面';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
	
}	

?>
<br><br><br><br>
<p align="center" valign="middle">
<a href="New_pm.php">回信給朋友</a><br>
</p>

<br><br><br><br>
<p align="center" valign="middle">
<a href="Member.php">回個人頁面</a><br>
</p>

<p align="center">
<img src="http://content.internetvideoarchive.com/content/photos/9472/271969_038.jpg">
</p>