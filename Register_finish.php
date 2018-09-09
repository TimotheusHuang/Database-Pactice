<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Mysql_connect.inc.php");

$id = $_POST['id'];

$hash_pw = sha1($_POST['pw']) ;
$hash_pw2 =sha1($_POST['pw2']) ;
unset($_POST['pw']);
unset($_POST['pw2']);

$nickname = $_POST['nickname'];
$email = $_POST['email'];

$Sql = "SELECT Account FROM info WHERE Account = '$id'" ;
if(mysql_fetch_row(mysql_query($Sql)))
{	
	echo '您輸入的帳號已有人註冊!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
}
	
else
{
	//判斷帳號密碼是否為空值
		//確認密碼輸入的正確性
	if($id != null && $hash_pw  != null && $hash_pw2 != null )
	{	
		if($hash_pw == $hash_pw2)
		{	
			//新增資料進資料庫語法
			$sql = "insert into info (Account, Password, Name, Email) values ('$id', '$hash_pw', '$nickname', '$email')";
			if(mysql_query($sql))
			{
				echo '註冊成功!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
			}		
		}   		
		else
		{
			echo '您輸入的密碼不一致';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
		}
	}
	else
	{
			echo '帳號密碼不可空白';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
	}
}
?>