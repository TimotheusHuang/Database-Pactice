<?php

session_start() ;
include_once("Mysql_connect.inc.php");

$sql = "SELECT Account,Name FROM info WHERE Account = '" .$_SESSION['Account']. "'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$pid = $row[0];
	$username = $row[1];
}


$to_userid = $_POST['to_userid'];
$sql = "SELECT Account, Name FROM info WHERE Account = '$to_userid'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$TOid = $row[0];
	$TOusername = $row[1];
} 

date_default_timezone_set('Asia/Taipei');
$datetime = date ("Y- m - d / H : i : s"); 

?>

<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN" “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

	<table width = "800" border = "5">
		<tr>
			<td> 私人寄信系統 </td>
		</tr>
	</table><br>

	<table width = "800" border = "5">
		<tr> 
			<td> Welcome back <?php print $username ?> </td>
		</tr>
	</table> <br>
	<table width = "800" border = "1">
		<form method = "post" action = "pm_send_to.php">
			<tr>
				<td width = "195">Sending To:</td>
				<td width = "605"><input name = "to_username" id = "to_username" type = "text" readonly = "readonly" value = "<?php print $TOusername?>" size = "40" style = "border:hidden" /></td>
			</tr>
			<tr>
				<td width = "195">Title:</td>
				<td width = "605"><input name = "title" id = "title" type = "text" size = "40"  /></td>
			</tr>
			<tr>
				<td width = "195">Message:</td>
				<td width = "605"><textarea name = "message" id = "message" rows = "10" cols = "20" ></textarea></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "submit" name = "submit1" id = "submit1" value = "Send Message to <?php print $TOusername; ?>" />
					<input type = "hidden" name = "to_userid" id = "to_userid" value = "<?php print $TOid; ?>" />
					<input type = "hidden" name = "userid" id = "userid" value = "<?php print $pid; ?>" />
					<input type = "hidden" name = "from_username" id = "from_username" value = "<?php print $username; ?>" />
					<input type = "hidden" name = "senddate" id = "senddate" value = "<?php echo $datetime; ?>" />
				</td>
			</tr>
			<?php
			if($_POST['submit1'])
			{
				$to_userid = $_POST['to_userid'];
				$to_username = $_POST['to_username'];
				$title = $_POST['title'];
				$message = $_POST['message'];
				$userid = $_POST['userid'];
				$username = $_POST['from_username'];
				$senddate = $_POST['senddate'];
				

				
				require_once("Mysql_connect.inc.php");

				$SQL1 = "SELECT MAX(id) FROM pm_inbox" ;			
				$row1 = mysql_fetch_row(mysql_query($SQL1)) ;
				$ID1 = $row1[0]+1 ;
				
				$SQL2 = "SELECT MAX(id) FROM pm_outbox" ;	
				$row2 = mysql_fetch_row(mysql_query($SQL2)) ;
				$ID2 = $row2[0]+1 ;		

				$Sql1 = "INSERT INTO pm_outbox (id, userid, username, to_userid, to_username, title, content, senddate ) VALUES ('$ID2', '$userid', '$username', '$to_userid', '$to_username', '$title', '$message', '$senddate')" ;
				$Sql2 = "INSERT INTO pm_inbox (id, userid, username, from_userid, from_username, title, content, receive_date ) VALUES ('$ID1', '$to_userid', '$to_username','$userid', '$username','$title', '$message', '$senddate')" ;
				
				mysql_query($Sql1); 
				mysql_query($Sql2);
				
				
						
				echo '<meta http-equiv="refresh" content="0; url = pm_outbox.php" />';
				exit() ;
				
			}	
			?>
			</form>
		</table>
	
</body>
</html>