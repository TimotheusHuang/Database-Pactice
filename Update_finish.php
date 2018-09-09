<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Mysql_connect.inc.php");

$id = $_SESSION['Account'];
$hash_pw = sha1($_POST['pw']);
$hash_pw2 = sha1($_POST['pw2']);
$email = $_POST['email'];




if($_POST['pw'] == null && $_POST['pw2'] == null){
	echo "密碼欄位不得為空白";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
}

unset($_POST['pw2']);
unset($_POST['pw']);

//紅色字體為判斷密碼是否填寫正確
if($id != null && $hash_pw == $hash_pw2)
{
	//更新資料庫資料語法
	$sql = "update info set Password='$hash_pw', Email='$email' where Account='$id'";
	if(mysql_query($sql))
	{
			echo '修改成功!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
	}
	else
	{
			echo '修改失敗!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
	}
}
else
{
        echo '您輸入的密碼不一致!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
}
?>