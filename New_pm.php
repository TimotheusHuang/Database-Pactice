<?php session_start(); ?>
<?php include("Mysql_connect.inc.php"); ?>
<?php
//We check if the user is logged
if(isset($_SESSION['Account']))
{
?>

<div class="content">
        <h1>個人私訊系統</h1>
    <form action="New_pm.php" method="post">
                Please fill the following form to send a Personal message.<br />
        <label for="recip">收訊者<span class="small">(請填帳號)</span></label><input type="text" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br />
        <label for="message">私訊</label><textarea cols="40" rows="5" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br />
        <input type="submit" value="Send" />
    </form>
</div>

<?php
	echo "論壇使用者帳號及暱稱 <br>" ;

	$id = $_SESSION['Account'] ;	
		
	$Sql = "SELECT Account,Name FROM info WHERE Account !='$id'" ;	
	$result = mysql_query($Sql) ;

	while($row = mysql_fetch_row($result))	
	{
		echo "$row[0] &nbsp $row[1] <br>";
	}	
	

	//We check if the form has been sent
	if(isset($_POST['recip'], $_POST['message']))
	{
	   
		$recip = $_POST['recip'] ;
		$message = $_POST['message'] ;
		 
		//We check if the recipient exists
							
			$Flag = false ; 
			$Sql = "SELECT Account FROM info WHERE Account !='$id'" ;	
			$result = mysql_query($Sql) ;

			while($row = mysql_fetch_row($result))	
			{
				if($recip == $row[0])
				{
					$Flag = true ;
					break ;
				}	
			}	
						
		if($Flag)
		{
			//We send the message
			$Time_Now = time();
			if(mysql_query("insert into pm (user1, user2, message, timestamp)values('$id', '$recip', '$message', '$Time_Now')"))
			{			
?>

				<div class="message">The message has successfully been sent.<br />
				<a href="List_pm.php">List of my Personal messages</a></div>

<?php
        
            }
            else
			{
						//Otherwise, we say that an error occured
						echo 'An error occurred while sending the message';
						echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
			}
		}                            
		else
		{
				//Otherwise, we say the recipient does not exists
			   echo 'The recipient does not exists.';
			   echo '<meta http-equiv=REFRESH CONTENT=2;url=Member.php>';
		}
	}
}		
else
{
    echo '<div class="message">You must be logged to access this page.</div>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
}
?>
<br><br><br><br>
<p align="center" valign="middle">
<a href="List_pm.php">回到論壇私信信箱</a><br>
</p>

<p align="center">
<img src="http://www.telegraph.co.uk/content/dam/film/InsideOut/insideout-xlarge.jpg">
</p>