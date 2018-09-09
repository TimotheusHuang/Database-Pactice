<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<p align="center">

<br> <br> 

<?php
include("Mysql_connect.inc.php");

$pw = $_POST['pw'];
$hash_pw = sha1($pw);

if($_SESSION['Account'] != null){
        //將$_SESSION['Account']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['Account'];
        //若以下$id直接用$_SESSION['Account']將無法使用
        $sql = "SELECT * FROM info where Account='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
		if($hash_pw == $row[1]){
			echo "<form name=\"form\" method=\"post\" action=\"Update_finish.php\">";
			echo "<div style ='font:30px/50px Arial,tahoma,sans-serif;color:#ff0000'><p align=center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp帳號：$row[0] (帳號無法修改) <br>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp新密碼：<input type=\"password\" name=\"pw\" value=\"$pw\" /> <br>";
			echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$pw\" /> <br>";
			echo "暱稱：$row[2](暱稱無法修改)<br>";
			echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[3]\" /> <br>";
			echo " <input type=\"submit\" name=\"button\" value=\"確定\" /> </p></div>";
			echo "</form>";
		} else {
			echo '密碼輸入錯誤!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
		}
} else {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
}

?>

</p>