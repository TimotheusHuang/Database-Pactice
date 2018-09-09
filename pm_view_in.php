<?php
session_start();
include_once("Mysql_connect.inc.php");


if(!$_GET['in']){
	$pageid = 0;
	
} else {
	$pageid = $_GET['in'];
}

//echo "$pageid" ;

$sql = "SELECT Account,Name FROM info WHERE Account = '" .$_SESSION['Account']. "'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$pid = $row[0];
	$username = $row[1];
}

$sql = "SELECT id,userid,username,from_userid,from_username,title,content,receive_date FROM pm_inbox WHERE id = '$pageid' AND userid = '$pid' ";
$row = mysql_fetch_row(mysql_query($sql));


$Nid = $row[0];
$Nuserid = $row[1];
$Nusername = $row[2];
$Nfrom_userid = $row[3];
$Nfrom_username = $row[4];
$Ntitle = $row[5];
$Ncontent = $row[6];
$Nreceive_date = $row[7];

$sql = "UPDATE pm_inbox SET viewed = '1' WHERE id = '$pageid'";
mysql_query($sql);

?>

<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN" “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<table width = "800" border = "1">
			<tr>
				<td> Hi <?php print $username; ?> , please check your message</td>
			</tr>
			<tr>
				<td> <?php require_once "pm_check.php"; ?> </td>
			</tr>
		</table><br>	
		<table width = "800" border = "1">
			<tr>
				<td width = "200">Message Subject:</td>
				<td width = "600"><?php echo "$Ntitle" ; ?></td>
			</tr>
			<tr>
				<td width = "200">From:</td>
				<td width = "600"><?php echo "$Nfrom_username" ; ?></td>
			</tr>
			<tr>
				<td width = "200">Date:</td>
				<td width = "600"><?php echo "$Nreceive_date" ; ?></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><?php echo "$Ncontent" ; ?></td>
			</tr>

		</table>

		
	</body>
</html>