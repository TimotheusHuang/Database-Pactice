
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-impromptu.min.js" type="text/javascript"></script>
<script src="js/main_page/webStatus.js" type="text/javascript"></script>



<META HTTP-EQUIV="pragma" CONTENT="no-cache">




	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=big5">
	<title>交通大學課程選課系統 Online Course Registration System</title>
	<link rel="stylesheet" type="text/css" href="css/jquery-impromptu.css" />
	<link rel="stylesheet" type="text/css" href="/css/main_page.css" />
	<style>
	<!--
	.smooth12{font-size:12pt;font-family:細明體;}
	.item {TEXT-DECORATION: none;BORDER-RIGHT: #0000ff 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #0000ff 1px solid; PADDING-LEFT: 2px; PADDING-BOTTOM: 2px; BORDER-LEFT: #0000ff 1px solid; COLOR: #333333; PADDING-TOP: 2px; BORDER-BOTTOM: #0000ff 1px solid; HEIGHT: 20px;WIDTH:40px; BACKGROUND-COLOR: #c8d8f0}
	-->
	</style>
	</head>
	<body bgcolor="#FFFFFF" onLoad="setfocus()" text=Black>
		

	<p align="center"><img src="Images/CourseRegistrationSystem_LOGO.png" width="700" height="89"></p>
	<form action="inCheck.asp" onSubmit="return checkout(this)" method="POST">
	<input type="hidden" id="chk_lang" value="">
	<div align="center"><center>
	<table border="0" width="" bgcolor="">
		<tr>
			<td><img src="images/new.gif"></td>
			<!--2007/5/3--carollai modify new-->
			<td valign="middle"><B><A HREF="http://aadm.nctu.edu.tw/chcourse/" target="_blank" style="cursor:hand;font-size:14pt;color:#ff0000;width=100%;">最新公告</A></B></td>
			<!--2007/5/3--carollai modify old--td valign="middle"><A HREF="http://academic.nctu.edu.tw/chcourse/" target="_blank" style="cursor:hand;font-size:14pt;color:#ffffff;width=100%;filter:glow(color:#6600FF,strength=3);">最新公告</A></td-->
		</tr>
	</table>
	<div style="width:600px;text-align:left;color:#1F1F1F;margin:10px;padding:10px;background:#E3E3E3">近期發現：同學會額外套用「非選課系統程式」之情形，敬請同學不要安裝任何套用程式，若套用可能會造成選課系統顯示異常。<span class="applist">相關套件名單</span></div>
	<div id="login_main">
        <div id="login_form">
					<table border="1" id="tbl_login" bgcolor="#F8EECF">
					  <tr>
					    <td align="center" bgcolor="#0000FF" nowrap><p align="center"><font color="#FFFFFF">登入選課系統</font> 
					    </td>
					  </tr>
					  <tr>
					    <th align="left" valign="top" nowrap><form method="POST">		    	
				      		<!--fieldset id="login-fieldset"-->
						      <table border="0">
						        <tr>
						          <th align="right" nowrap>帳號：</th>
						          <td><input CLASS=SMOOTH12 type="text" size="20" maxlength="16" name="ID" value="" tabindex="1"></td>
						        </tr>
						        <tr>
						          <th align="right">密碼：</th>
						          <td><input CLASS=SMOOTH12 type="password" size="20" maxlength="12" name="passwd" value="" tabindex="2"></td>
						        </tr>
						      </table>
					      	
					      	<iframe id="iframe1" width="250" height="70" name="I1" frameborder="0" border="0" framespacing="0" scrolling="no" src="getSafeCode.asp"></iframe><br>
			    	    	 <!--input type="button" value="Reload" class="item" onclick="location.reload();"><br-->
			      			<font color="#0000FF">請輸入圖示中的5位數驗證碼：</font><input type="text" name="qCode" size="5" maxlength="5" value="" tabindex="3" autocomplete="off" ><p>
				      		
						      <input CLASS=SMOOTH12 type="submit" name="Action" value="登入">&nbsp;&nbsp;
						      <input CLASS=SMOOTH12 type="reset" name="Action" value="清除"></p>
						      <!--input type="button" name="ssobutton" value="改由交大單一登入" onClick="location.href('http://portal.nctu.edu.tw/');" -->
						      <!--a href="http://portal.nctu.edu.tw/">由交大入口網站(portal)登入</a-->
						      <div class="login_msg" name="Login_Limit_Error_Msg" style="color:red;">
						      
						      </div>
					     		<!--/fieldset-->
						      <div id="portal_link">
						    		<a href="http://portal.nctu.edu.tw/"><img src="Images\button_4A.png" alt="由交大入口網站(portal)登入" border="0"></img></a>
						      </div>
					    </form>
					    </th>
					  </tr>
					</table>
        </div>
			<!--div id="login_msg"-->
	      	<div id="web_status">
				  		
				      <img src="\Images\sysStatus.png" class="sysStatus" id="img_sysStatus">
				      <div id="sys_lvl_1" class="sys_lvl">系統暢通無阻</div>
				      <div id="sys_lvl_2" class="sys_lvl">系統人多穩定</div>
				      <div id="sys_lvl_3" class="sys_lvl">系統人多壅塞</div>				      				
				      <div id="sys_lvl_4" class="sys_lvl">系統壅塞難行</div>
				      
				  <div id="sys_lvl_filter"><img src="\Images\sysStatus_filter.png" id="lvl_filter_img"></div>
		    </div>
			<!--/div-->
	</div>

	</center></div><div align="center">
	<a href="getPW.asp">忘記密碼</a>
	<table>
	<tr>
	    	<td align="middle">
	    	<Br>請注意
	    	<br><B>帳號=學號, 密碼=舊生請仍延用上學期密碼, 新生請用身分證後六碼（研究所新生若已暑修，密碼與暑修同）</B>
	    	<!--<br><A HREF="http://140.113.8.88/course" TARGET="_blank"><FONT COLOR="#0000FF">台灣聯合大學</FONT></A>系統（<A HREF="Course/CourseList/adMain.asp" TARGET="_blank"><FONT COLOR="#0000FF">交通大學</FONT></A>、<A HREF="http://hope.cc.nthu.edu.tw/ADM/index_all/cou.html" TARGET="_blank"><FONT COLOR="#0000FF">清華大學</FONT></A>、<A HREF="http://course.dd.ncu.edu.tw/" TARGET="_blank"><FONT COLOR="#0000FF">中央大學</FONT></A>、<A HREF="http://www.ym.edu.tw/" TARGET="_blank"><FONT COLOR="#0000FF">陽明大學</FONT></A>）課程表-->
	    	</td>
	</tr>
	<tr>
		<td align="middle" onclick="javascript:document.getElementById('CourseInfo').style.display==''?document.getElementById('CourseInfo').style.display='none':document.getElementById('CourseInfo').style.display='';" style="cursor:hand;"><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT=""><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT=""><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT=""><!--2007/5/3--carollai mark--blink-->
		<B><FONT SIZE="" COLOR="#FF0000"><u>課程時間表</u></FONT></B>
		<!--2007/5/3--carollai mark----/blink--><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT=""><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT=""><IMG SRC="Images/News1.gif" WIDTH="14" HEIGHT="14" BORDER="0" ALT="">
		
		</td>
	</tr>
    <TR>
		<TD align="center">
		<TABLE align="center" id="CourseInfo" style="display:none;" border="1" bordercolor="black" cellspacing="0">
			<TR><TD ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><A HREF="Description/index.asp" target="_blank"><FONT COLOR="#0000FF">選課使用說明</FONT></A></TD></TR>
			<tr><td ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><a href="http://timetable.nctu.edu.tw/?flang=zh-tw" target="_blank"><FONT COLOR="#0000FF">課程時間表</FONT></a></td></tr> 
      <!--2007/5/18--carollai--mark--tr><td ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><a href="Course/CourseList/adMain.asp" target="_blank"><FONT COLOR="#0000FF">本學期課程表</FONT></a></td></tr-->
      <!--2007/5/18--carollai--mark--tr><td ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><a href="Course/History/index.asp" target="_blank"><FONT COLOR="#0000FF">歷年課程表</FONT></a></td></tr-->
      <!--2007/4/18--carollai--add--start-->
      
      <!--2007/4/18--carollai--add--end-->            
			
      <!--2007/4/18--carollai--add--start-->
      
		      <tr><td ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><a href="Course/course_report/course_report.asp" target="_blank"><FONT COLOR="#0000FF">英文授課報表</FONT></a></td></tr>
		      <tr><td ALIGN="CENTER" onmouseover="this.style.background='yellow';" onmouseout="this.style.background='';"><a href="Course/ProgramsMap/index.asp" target="_blank"><FONT COLOR="#0000FF">學程地圖</FONT></a></td></tr>
			
      <!--2007/4/18--carollai--add--end-->			
		</table>
		</td>
	</tr>	
<!-- 2007/1/16	拿掉 Start	
	<tr>
		<td align="middle"><blink>
		
		<a target="_blank" href="ObligatoryObject/stu/index.asp?Kind=1"><FONT COLOR="BLUE">學士班必修科目表（含輔系）</FONT></a>
		
		<FONT COLOR="gray">學士班必修科目表（含輔系）</FONT>
		
		</blink></td>
	</tr>
	<tr>
		<td align="middle"><blink>
		
		<a target="_blank" href="ObligatoryObject/stu/index.asp?Kind=2"><FONT COLOR="BLUE">碩博士班修課規定（含輔所）</FONT></a>
		
		<FONT COLOR="gray">碩博士班修課規定（含輔所）</FONT>
		
		</blink></td>
	</tr>
	<tr>
		<td align="middle"><blink>
		
		<a target="_blank" href="ObligatoryObject/stu/index.asp?Kind=3"><FONT COLOR="BLUE">學程科目表</FONT></a>
		
		<FONT COLOR="gray">學程科目表</FONT>
		
		</blink></td>
	</tr>
end-->

	<!--2002/11/5 yp 說要拿掉的
	<tr>
		<td align="middle">
		<a href="Course/CourseList/adMain.asp">學年度第學期課程表</a>
		</td>
	</tr>
	-->
	<!-- ZGChen 2002/11/11 教室調度查詢   
	<tr>
		<td align="middle">
			
			<blink><a  target="_blank" href="http://10.40.169.17/RoomQuery">查詢教室使用(借用)狀況</a></blink>
		</td>
	</tr>
	-->
	<!-- ZGChen 202/06/26 可公開查詢  [查詢教學反應問卷調查結果] -->
	<tr>
		<td align="middle">
						
						<a href="https://cross-college.nctu.edu.tw/" target="_blank">校際選課系統（For 外校生）</a>
		</td>
	</tr>
	<tr>
		<td align="middle">
            <a href="https://summercourse.nctu.edu.tw/" target="_blank">暑修選課系統</a> 
            
		</td>
	</tr>
	<tr>
		<td align="middle">
			
            <a href="/CRManage" target="_blank">教室借用系統</a> 
		</td>
	</tr>
	<!--
	<tr>
		<td align="middle">
			<blink><a href="investigation/investigation.asp">查詢教學反應問卷調查結果</a></blink>
		</td>
	</tr>
	-->
	<tr>
		<td align="middle">
			<!--2007/5/3--carollai mark--blink--><B>(<a href="en/index.asp" target="_top"><FONT SIZE="" COLOR="#0000FF">Enter Online Course Selection System</FONT></a>）</B><!--2007/5/3--carollai mark--/blink-->
		</td>
	</tr>
	<tr>
		<td align="middle">
	    	若有任何疑問請mail至:<a href="mailto:chcourse@cc.nctu.edu.tw">chcourse@cc.nctu.edu.tw</a>
	    	<br><a href="http://aadm.nctu.edu.tw/chcourse/" target="_blank"><font color="blue">課務組</font></a>(03)5712121 轉分機 50421~50424
	    	<!--p><font size="2">使用本系統最佳瀏覽器為 IE6 以上版本，若使用Firefox，請使用IE tab套件。</font-->
		</td>
	</tr>
	</table>
	</center></div>
	
	<script Language=javascript>
	<!--
	function MakeAnotherWindow(imageName,imageHeight,imageWidth){
	      myFloater=window.open("","myWindow",
			  "width="+imageWidth+",height="+imageHeight);
			  myFloater.location.href=imageName;
			  }
	function checkout(send) {
	  if (send.ID.value == "") {
	    alert("Your ID Required!");
	    send.ID.focus();
	    return false;
	  }
	  if (send.passwd.value == "") {
	    //alert("Your Password Required!");
	    //send.passwd.focus();
	    //return false;   
	    return true
	  } 
		  
		if (send.qCode.value == "") {
			alert("未輸入認證碼!");
	  	send.qCode.focus();
			return false;
		}
		else {
			//if(isNaN(send.qCode.value)==true){
			if(!send.qCode.value.toUpperCase().match(/^[A-Z0-9]{5}$/)){
				alert("認證碼錯誤!");
		  	send.qCode.focus();
				return false;
			}
		}
		 
	 return true;
	}
	
	function setfocus() {
	  //if ((window.self.name != "" && window.self.name !="myhome")) {
	  //  parent.location.href= "index.asp"
	  //}
	  //alert(window.self.name)
	  //alert('歡迎來到交通大學網際網路選課系統！！\n\n﹝課務組提醒您，為正常使用本系統，請切勿使用任何proxy﹞\n\n◎ 87學年度第二學期\n\n初選第一階段: 88年1月11日上午9:00起至1月14日午夜12:00\n\n( 本階段結束之後，系統將進行興趣選修課程之分發作業 )\n\n初選第二階段: 88年1月19日上午9:00起至1月22日午夜12:00')
	  //alert('因作業不及,本階段密碼仍延用上學期密碼！！\n\n不便之處,敬請包涵')
	  document.forms[0].ID.focus();
	}
	//-->
	</script>
	</body>
	</html>
