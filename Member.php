<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2 align="center" valign="middle">論壇個人頁面</h2>
<p align="center">



<?php
include("Mysql_connect.inc.php");
echo '<a href="Logout.php">登出</a>  <br><br>';

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['Account'] != null)
{
//        echo '<a href="Update.php">修改</a>   <br><br>';
        echo "<form name=\"form\" method=\"post\" action=\"Update.php\"><p align = center>";
		echo "欲修改資料請先輸入原始密碼 <br>";
		echo "密碼：<input type=\"password\" name=\"pw\" value=\"\" /> <br>";
		echo " <input type=\"submit\" name=\"button\" value=\"確定\" /> </p>" ;
        //將資料庫裡的所有會員資料顯示在畫面上
		$ID = $_SESSION['Account'] ;
        $sql = "SELECT Name FROM info Where Account = '$ID'";
        $result = @mysql_fetch_row(mysql_query($sql));
		
		echo "<div style ='font:30px/50px Arial,tahoma,sans-serif;color:#ff0000'><p align=center> Hi~$result[0]! Welcome to our forum system :)</p></div> ";
		echo "</form>";

		
		
		
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
}
?>
</p>

<br><br><br><br>
<p align="center" valign="middle">
<a href="List_pm.php">論壇私訊系統</a><br><br>
</p>


<p align="center" valign="middle">
<table width="800" border="5">
	<tr>
		<td>Welcome to <?php require_once "pm_check.php"; ?></td>
	</tr>
</table>	
</p>


<p align="center">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf_lbziF4U0uQNqNOwEhJ87mioA2LrB9jITn9oRhodE3Jdx-zq">
</p>



