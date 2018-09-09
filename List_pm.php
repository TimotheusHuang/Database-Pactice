<?php session_start(); ?>
<?php
include("Mysql_connect.inc.php");
?>	

<h2 align="center" valign="middle">論壇私信信箱</h2>


<?php


//We check if the user is logged
if(isset($_SESSION['Account']))
{
	echo "有寄送私信給您的會員如下: <br>" ;

	$id = $_SESSION['Account'] ;	
	$Array = array("");	
	$Flag = true ;
		
	$Sql = "SELECT info.Name FROM pm ,info  WHERE pm.user2='$id' AND pm.user1=info.Account" ;	
	$result = mysql_query($Sql) ;

	while($row = mysql_fetch_row($result))	
	{	
		for($i=1; $i<sizeof($Array); $i++)
		{
			if($Array[$i] == $row[0])
			{
				$Flag = false ;
				break ;
			}	
		
		}	
		
		if(!$Flag)
		{	
			$Flag = true ;
			continue ;
		}
		
		else
		{
			array_push($Array, $row[0]) ;
			echo "$row[0]<br>";
		}
	}	
	
	echo "<form name=\"form\" method=\"post\" action=\"Show.php\"><p align = center>";
	echo "可輸入朋友名字來觀看私信: <br>";
	echo "朋友暱稱：<input type=\"text\" name=\"friend\" value=\"\" /> <br>";
	echo " <input type=\"submit\" name=\"button\" value=\"確定\" /> </p>" ;
	
	
	
	
	
	
}

else
{
	echo '您無權觀看此頁面';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
	
}	

?>
<br><br><br><br>
<p align="center" valign="middle">
<a href="New_pm.php">寄信給朋友</a><br>
</p>

<br><br><br><br>
<p align="center" valign="middle">
<a href="Member.php">回到個人頁面</a><br>
</p>

<br><br><br><br>
<p align="center">
<img src="http://blogs-images.forbes.com/scottmendelson/files/2015/06/InsideOut556500e6a2be0-2040.0.jpg">
</p>