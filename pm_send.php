<?php
session_start();
include_once("Mysql_connect.inc.php");

$sql = "SELECT Name FROM info WHERE Account = '" .$_SESSION['Account']. "'";
$row = mysql_fetch_row(mysql_query($sql));
$username = $row[0];



$sql = "SELECT Account,Name FROM info";
$result = mysql_query($sql);

$options = "" ;

while($row = mysql_fetch_row($result))
{
	$USERid = $row[0] ;
	$USERname = $row[1] ;
	$options.="<OPTION VALUE=\"$USERid\">".$USERname."</OPTION>" ;
}
?>


<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN" “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body >
<table width = "800" border = "5">
	<tr>
		<td> 私人寄信系統 </td>
	</tr>
</table><br />

<table width = "800" border = "5">
	<tr> 
		<td> Welcome back <?php print $username ?> </td>
	</tr>
</table> <br>	

<form name = "form" id = "form" method = "post" action = "pm_send_to.php" onsubmit = "return_validate_form();">
	<tr>
		<td width = "185">選擇收信人:</td>
		<td width = "605"><select name = "to_userid" id = "to_userid">
		<OPTION VAULE = 0>
		<?php echo $options;?>
		</OPTION></select>
		</td>
	</tr>
	
	<tr>
		<td colspan="2"><input type="submit" name="submit" id="submit" value="Select User" /> </td>
	</tr>
	
	
	</form>
</table>

<table align = "center" > 
	<tr>
		<td><b><a href = "Member.php">回到個人首頁</a></b></td><br>
	</tr>
</table>

</body>
</html>




	



