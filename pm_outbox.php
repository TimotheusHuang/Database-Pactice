<?php
session_start();
include_once("Mysql_connect.inc.php");
?>
<?php
/*
include_once() program keeps going and display an error msg if including procedure fails 
require_once() program stops and display an error msg if including procedure fails
*/
?>
<?php
$sql = "SELECT Account,Name FROM info WHERE Account = '" .$_SESSION['Account']. "'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$pid = $row[0];
	$username = $row[1];
}


$sql = "SELECT COUNT(id) FROM pm_outbox WHERE userid = '$pid'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
$outboxMessageTotal = $row[0];
?>

<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN" “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<table width = "800"  border = "5">
	<tr>
		<td> Hi <?php print $username; ?> , please check your sent message</td>
	</tr>
	<tr>
		<td> <?php require_once "pm_check.php"; ?> </td>
	</tr>
</table>

<br>

<?php
$sql = "SELECT * FROM pm_outbox WHERE userid = '$pid' ORDER by id DESC";
$result = mysql_query($sql);
$count = mysql_num_rows($result);

$SQL1 = "SELECT MAX(id) FROM pm_outbox" ;			
$row1 = mysql_fetch_row(mysql_query($SQL1)) ;
$MAX = $row1[0]+1 ;
?>

<table width = "800" border = "0">
	<form name = "form1" method = "post" action = "pm_outbox.php">
		<tr>
			<td width = "41" align = "center">#</td>
			<td width = "490">Title:</td>
			<td width = "255">To:</td>
		</tr>
		<?php 
		while($row = mysql_fetch_row($result)) { 
		?>
				<tr>
					<td width = "41" align = "center"><input type = "checkbox" name = "checkbox[]" id = "checkbox[]" value = "<?php echo $row[0]; ?>" /></td>
					<td width = "490"><a href = "pm_view_out.php?out=<?php echo $row[0];?>" <b><?php echo $row[5]; ?> </b></a></td>
					<td width = "255"><?php echo $row[4]; ?> </td>
				</tr>
		<?php 
		} 
		?>
		<?php 
		// colspan : a table cell that spans multiple columns 
		?>
		<tr>
			<td colspan = "3" align = "center"> 
			<?php 
			if($outboxMessageTotal > 0) { 
			?>
			<input type = "submit" name = "delete" id = "delete" value = "Delete Selected Messages" />
			<?php 
			//html uses name , xhtml uses id instead 
			//change default value of viewed to zero
			} else { print "There are no messages in your Inbox";} 
			?>
			</td>
		</tr>
		<?php
		if($_POST['delete']){
			$checkbox = $_POST['checkbox'];
			$delete = $_POST['delete'];
			if($delete){
				for ($i=0;$i<=$MAX;$i++){
					$del_id = $checkbox[$i];
					$sql = "DELETE FROM pm_outbox WHERE id = '$del_id'";
					$result = mysql_query($sql);
					}
					if($result){
						         echo '<meta http-equiv="refresh" content="0; url = pm_outbox.php" />';
					}
				}
				mysql_close();
			} 
		else {}
		?>
	</form>
</table>

<table align = "center" > 
	<tr>
		<td><b><a href = "Member.php">回到個人首頁</a></b></td><br>
	</tr>
</table>

</body>
</html>
