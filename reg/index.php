<?php
/*
 * Created on 2012-10-01
 * author lichongxi
 */
session_start();
if(  isset($_SESSION['group']) ){
	header("Location: /index.html");
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>欢迎来到webqq</title>
<link type="text/css" href="http://id2.idqqimg.com/zc/chs/css/10033/index.css" rel="stylesheet">
<link type="text/css" href="http://id2.idqqimg.com/zc/chs/css/10033/g.css" rel="stylesheet">
<script type="text/javascript" src="/skin/js/jquery.min.js"></script>
</head>
<body>
<div class="bg">
	<div class="container">
		<div class="header">
			<a class="logo" title="QQ注册" target="_self" href="index.html"></a>
			<a class="feedback" title="" target="_blank">意见反馈</a>
		</div>
		<div class="content">
			<div class="left">
				<a id="nav_1" class="nav_box cur" href="javascript:;">
					<span class="dt nav_1">普通帐号</span>
					<span class="dd">由数字组成，经典通行帐号</span>
				</a>
			</div>
			<div class = "right">
				<div class="phone"></div>
				<div class="box box_3" style="z-index:0">
					<div class="item">昵称</div>
					<div class="ipt_box nick_ipt_box">
						<div id="nick_bg" class="bg_txt">
							<input type="text" class="new_txt" id="nick" name="nick" tabindex="6" style="z-index:0" maxlength="30" autocomplete="off" />
						</div>
					</div>
					<div class="info"><table><tr><td id="nick_info" class="hidden"></td></tr></table></div>
				</div>
				
				<div class="box box_4">
					<div class="item">密码</div>
					<div class="ipt_box">
						<div id="password_bg" class="bg_txt">
							<input type="password" class="new_txt" id="password" name="password" tabindex="7" maxlength="16" />
						</div>
					</div>
					<div class="info pwd_info">
						<!-- div class="pwd_tips hide" id="pwd_tips">
							<div class="default" id="pwd_tip1">长度为6-16个字符</div>
							<div class="default" id="pwd_tip3">不能包含空格</div>
						</div -->
						<table id="pwd_result">
							<tr><td id="password_info" class="password_info hidden"></td></tr>
						</table>
					</div>
				</div>
				<div class="box box_5">
					<div class="item">确认密码</div>
					<div class="ipt_box">
						<div id="password_again_bg" class="bg_txt">
						<input type="password" class="new_txt" name="pass_again" id="password_again" tabindex="8" maxlength="16" />
						</div>
					</div>
					<div class="info"><table><tr><td id="password_again_info" class="hidden"></td></tr></table></div>
				</div>
				<div class="box box_11">
				<div class="item"></div>
				<div class="ipt_box">
					<div class="submit">
						<input id="submit" class="" type="submit" tabindex="21" title="立即注册" value="立即注册">
					</div>
				</div>
				</div>

			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="footer">
Copyright
<span>&copy;</span>
1998-2012 Tencent All Rights Reserved 腾讯公司 版权所有
</div>
</body>
<script type="text/javascript" src="/skin/js/common.js"></script>
<script type="text/javascript" src="/skin/js/reg.js"></script>
</html>