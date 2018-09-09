<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

include("Mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//Add a hash function to hide the password

$hash_pw = sha1($pw) ;

//搜尋資料庫資料
$sql = "SELECT * FROM info where Account = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員


if($id != null && $row[0] == $id && $pw != null && $row[1] == $hash_pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['Account'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=Member.php>';
}
else
{
        echo '登入失敗! 帳號或密碼錯誤';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=Login.php>';
}
?>



