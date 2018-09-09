<?php
session_start() ;
include("Mysql_connect.inc.php");
$sqlCommand = "SELECT Account , Name FROM info WHERE Account= '" . $_SESSION['Account'] . "'";
$query = mysql_query($sqlCommand);
while($row = mysql_fetch_row($query)){
	$pid = $row[0];
	$username = $row[1];
}

mysql_free_result($query);

//Check for new messages inbox
$sqlCommand = "SELECT COUNT(id) FROM pm_inbox WHERE userid = '$pid' AND viewed = '0'";
$query = mysql_query($sqlCommand);
$row = mysql_fetch_row($query);
$inboxMessageNew = $row[0];

//Check for all messages inbox
$sqlCommand = "SELECT COUNT(id) FROM pm_inbox WHERE userid = '$pid' ";
$query = mysql_query($sqlCommand);
$row = mysql_fetch_row($query);
$inboxMessageTotal = $row[0];

//Check for all msg outbox
$sqlCommand = "SELECT COUNT(id) FROM pm_outbox WHERE userid = '$pid' ";
$query = mysql_query($sqlCommand);
$row = mysql_fetch_row($query);
$outboxMessageTotal = $row[0];

?>

<?php if ($_SESSION['Account']) { ?>
Forum Message System: <a href="pm_inbox.php"> Inbox </a>
<?php 
	if($inboxMessageNew > 0) { print "<b>(".$inboxMessageNew.")</b>"; }
	else {}?>
<?php 
	print $inboxMessageTotal;
?> ,
<a href = "pm_outbox.php"> Outbox </a> 
<?php
	print $outboxMessageTotal;
?> ,
<a href = "pm_send.php">Send New Message</a> 
<?php
	} else { print "You must be logged in first !!";}
?>