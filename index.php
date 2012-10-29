<?php
/*
 * Created on 2012-10-01
 * author lichongxi
 */
session_start();
//if( empty( $_SESSION['group'])  ){
//	header("Location: /login/index.html");
//}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>欢迎来到webqq</title>
<link href="http://0.web.qstatic.com/webqqpic/style/jet.all.css?t=20120607001" rel="stylesheet" type="text/css">
<link href="http://0.web.qstatic.com/webqqpic/style/qqweb.main.css?t=20120920001" rel="stylesheet" type="text/css">
<link id="jet_load_0" type="text/css" charset="utf-8" rel="stylesheet" href="http://0.web.qstatic.com/webqqpic/style/qqweb.main.2.css?t=20120920001">
<link id="jet_load_2" type="text/css" charset="utf-8" rel="stylesheet" href="http://8.web.qstatic.com/webqqpic/./module/explorer/style.css?20120920001">
<link id="jet_load_2" type="text/css" charset="utf-8" rel="stylesheet" href="http://0.web.qstatic.com/webqqpic/pubapps/0/50/style.css?20120920001">
<link id="jet_load_2" type="text/css" charset="utf-8" rel="stylesheet" href="http://1.web.qstatic.com/webqqpic/module/buddyfinder/qqweb.app.buddyfinder.css?20120920001">
<link href="/skin/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/skin/js/jquery.min.js"></script>
<style type="text/css">
.clear{margin:0;height:0;padding:0;clear:both;}
.text,a.text { color: #666666; } .window_current .text,.window_current a.text { color: #333333; } .titleText, a.titleText { color: #6d6d6d; font-weight: bold; } .window_current .titleText,.window_current a.titleText { color: #393836; } .appText a { color: white; } .toolBar_bg { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -140px; } .ie6_0 .toolBar_bg, .ie7_0 .toolBar_bg { background: nonde; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://6.web.qstatic.com/webqqpic/style/skin/grey/images/toolbar_bg.png?t=20111011001",sizingMethod="scale"); } .window { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/transparent.gif) repeat; } .window_title { height: 25px; text-align:center; } .window_titleBar{ height: 25px; background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat 0 -1px; } .window_current .window_titleBar{ background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat 0 -31px; } .window_titleButtonBar{ overflow:hidden; right:5px; position:absolute; top:4px; } .window_toolButtonBar{ overflow:hidden; left:0; position:absolute; top:2px; z-index:10; } .window_bodyArea { top: 0; } .window_controlArea{ background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -60px; } .window_current .window_controlArea{ background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -100px; } .window_bodyOuter{ background: #E9E9E9;; } a.window_action_button{ height: 19px; width: 21px; background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -122px -22px; } .ie6_0 a.window_action_button, .ie7_0 a.window_action_button { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } a.window_close { background-position: -64px -59px; } a.window_close:hover { background-position: -64px -30px; } a.window_max { background-position: -34px -59px; } a.window_max:hover { background-position: -34px -30px; } a.window_fullscreen { background-position: -34px -24px; } a.window_fullscreen:hover { background-position: -34px -53px; } a.window_restore_full { background-position: -152px -24px; } a.window_restore_full:hover { background-position: -152px -53px; } a.window_restore { background-position: -94px -59px; } a.window_restore:hover { background-position: -94px -30px; } a.window_min { background-position: -5px -58px; } a.window_min:hover { background-position: -5px -30px; } a.window_refresh { background-position: -5px -24px; } a.window_refresh:hover { background-position: -5px -53px; } a.window_pinUp { background-position: -182px -24px; } a.window_pinUp:hover { background-position: -182px -53px; } a.window_pinDown { background-position: -152px -24px; } a.window_pinDown:hover { background-position: -152px -53px; } a.window_button { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) 0 -80px no-repeat; } a.window_button:hover { background-position: 0 -86px; } a.window_ok { background-position: 0 -86px; margin-right:5px; } a.window_ok:hover { background-position: 0 -86px; } a.window_cancel { background-position: 0 -86px; margin-right:5px; } a.window_cancel:hover { background-position: 0 -86px; } a.window_previous { background-position: 0 -86px; } a.window_previous:hover { background-position: 0 -86px; } a.window_next { background-position: 0 -86px; } a.window_next:hover { background-position: 0 -86px; } .window_bg_container_ipad { background-color: rgba(232,232,232,.8); } .window_current .window_bg_container_ipad { background-color: rgba(232,232,232,1); } .window_center { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/window.png?t=20111011001) top left repeat; } .ie6_0 .window_center,.ie7_0 .window_center { background: #C4C4C4; } .window_current .window_center { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/window_cur.png?t=20111011001) top left repeat; } .ie6_0 .window_current .window_center,.ie7_0 .window_current .window_center { background: #e8e8e8; } .window_t { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -80px; } .ie6_0 .window_t,.ie7_0 .window_t { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_gif.gif?t=20111011001); } .window_current .window_t { background-position: 0 -100px; } .window_rt { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -10px 0; } .ie6_0 .window_rt,.ie7_0 .window_rt { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .window_current .window_rt { background-position: -30px 0; } .window_r { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_png.png?t=20111011001) repeat-y -10px 0; } .ie6_0 .window_r,.ie7_0 .window_r { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_gif.gif?t=20111011001); } .window_current .window_r { background-position: -30px 0; } .window_rb { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -10px -10px; } .ie6_0 .window_rb,.ie7_0 .window_rb { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .window_current .window_rb { background-position: -30px -10px; } .window_b { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -90px; } .ie6_0 .window_b,.ie7_0 .window_b { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_gif.gif?t=20111011001); } .window_current .window_b { background-position: 0 -110px; } .window_lb { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat 0 -10px; } .ie6_0 .window_lb,.ie7_0 .window_lb { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .window_current .window_lb { background-position: -20px -10px; } .window_l { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_png.png?t=20111011001) repeat-y 0 0; } .ie6_0 .window_l,.ie7_0 .window_l { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_gif.gif?t=20111011001); } .window_current .window_l { background-position: -20px 0; } .window_lt { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat 0 0; } .ie6_0 .window_lt,.ie7_0 .window_lt { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .window_current .window_lt { background-position: -20px 0; } .ie6_0 .statusBar_line,.ie7_0 .statusBar_line { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .panel_1_center { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/panel_1_c.png?t=20111011001) top left repeat; } .ie6_0 .panel_1_center,.ie7_0 .panel_1_center { background: #fff; } .panel_1_t { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -125px; } .ie6_0 .panel_1_t,.ie7_0 .panel_1_t { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_gif.gif?t=20111011001); } .panel_1_rt { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -50px -5px; } .ie6_0 .panel_1_rt,.ie7_0 .panel_1_rt { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .panel_1_r { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_png.png?t=20111011001) repeat-y -50px 0; } .ie6_0 .panel_1_r,.ie7_0 .panel_1_r { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_gif.gif?t=20111011001); } .panel_1_rb { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -50px -10px; } .ie6_0 .panel_1_rb,.ie7_0 .panel_1_rb { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .panel_1_b { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_png.png?t=20111011001) repeat-x 0 -130px; } .ie6_0 .panel_1_b,.ie7_0 .panel_1_b { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_x_gif.gif?t=20111011001); } .panel_1_lb { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -45px -10px; } .ie6_0 .panel_1_lb,.ie7_0 .panel_1_lb { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .panel_1_l { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_png.png?t=20111011001) repeat-y -45px 0; } .ie6_0 .panel_1_l,.ie7_0 .panel_1_l { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_repeat_y_gif.gif?t=20111011001); } .panel_1_lt { background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -45px -5px; } .ie6_0 .panel_1_lt,.ie7_0 .panel_1_lt { background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } #navbar{ height: 40px; _height: 28px; } .indicator_wrapper{ background:url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat -140px -5px; _background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); top: 0; position: static; } .indicator, .indicator_icon_bg, .indicator_icon{ background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001); _background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .no_sysbtn .indicator_wrapper{ background-position: -140px -45px; } .no_sysbtn .indicator_header{ margin-right: 6px; } #navbar .system_button{ background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001) no-repeat 134px -98px; _background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } .pagelet_search_bar, .pagelet_search_button, #pagelet_search_suggest .sb_page, #pagelet_search_suggest .sb_app, #pagelet_search_suggest a:hover, #pagelet_search_suggest .rsSeledBg, .pagelet_search_pointer{ background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_png.png?t=20111011001); _background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/sprite_main_gif.gif?t=20111011001); } #pagelet_search_suggest #sb_resultBox{ background: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/suggess_list_bg.png?t=20111011001) repeat-y; _background-image: url(http://6.web.qstatic.com/webqqpic/style/skin/grey/images/suggess_list_bg.gif?t=20111011001); } .mobileSafari #navbar{width:222px;} .mobileSafari #navbar .system_button{display:none;visibility:visible;}
</style>

</head>
<body>

<!-- left -->
<div id="desktop" class="EQQ_Container" style="position: static;">
	<div id="leftBar" style="width: 73px; height: 100%;">
		<div id="dockContainer" class="dock_container dock_pos_left" style="z-index: 10;">
			<div class="dock_middle">
				<div id="dockItemList" class="dock_item_list" customacceptdrop="1">
					<div id="alloy_icon_app_50_3" class="appButton not_deleteable" appid="50" fileid="50" type="app" uid="app_50" title="QQ">
						<div id="alloy_icon_app_50_3_icon_div" class="appButton_appIcon " style="">
							<img id="alloy_icon_app_50_3_img" class="appButton_appIconImg" alt="QQ" src="http://0.web.qstatic.com/webqqpic/pubapps/0/50/images/big.png"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- left -->

<!-- loginbox -->
<div class="ui_boxy" style="display:none; width: 380px; height: 243px; z-index: 300001; left: 493px; top: 48.5px;">
	<div style="position:relative; z-index:1;">
		<div id="ui_boxyClose_1349162263463" class="ui_boxyClose"></div>
	</div>
	<div id="ui_boxyWrapper_1349162263463" class="ui_boxyWrapper">
		<div id="login_window_content_area" class="login_content_area">
			<div class="login_logo_qq"></div>
			<div class="login_window_wrap">
				<div class="strong-login">
				<div id="login" class="signin" style = "background:#F6F6F6;">
					<div class="subcolumn02">
						<div class="signin-area">
							<div class="signin-area-bg">
								<div class="padder">
									<div class = "clear"></div>
									<div class="sign-input">
										<span class="title account" style = "background:url(/skin/images/login_btn.png) no-repeat scroll 0px -36px transparent">帐&#12288;号：</span>
										<span class="input">
										<input id="u" class="input01" type="text" onblur="if (value ==''){value='数字号码';}" onfocus="if (value =='数字号码'){value =''}" value="数字号码" tabindex="1" style="ime-mode:disabled" name="u" autocomplete="on" onkeydown="num_input(event);">
										</span>
									</div>
									<div class="sign-input">
										<span class="title password" style = "background:url(/skin/images/login_btn.png) no-repeat scroll -60px -36px transparent">密&#12288;码：</span>
										<span class="input">
										<input id="p" class="input01" type="password" tabindex="2" maxlength="16" name="p">
										</span>
									</div>
									<div class="clearer"></div>
								</div>
							</div>
							<div class = "clear"></div>
						</div>
						<div class="clearer"></div>
						<div class="subcolumn03">
							<div class="left">
								<div class="middle">
									<div class="middle-padder">
										<div class="logins">
											<input id="login_button" class="signin-btn signin2" type="submit" tabindex="6" value="" style = "background:url(/skin/images/login_btn.png) no-repeat scroll -111px 0 transparent">
											<a href = "/reg/" target = "_blank"  style = "display: block; float: left; background: url(/skin/images/login_btn.png) no-repeat scroll 0px 0px transparent; width: 113px; height: 37px; margin-left: 27px;"></a>
										</div>
									</div>
								</div>
							<div class="clearer"></div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- loginbox -->

<!-- main -->
<div id="appWindow_2" class="window window_current" style="width: 280px; height: 562px; left: 939px; top: 6px; display: block; visibility: visible; z-index: 21;" customacceptdrop="1" _olddisplay="block">
<div id="window_outer_2" class="window_outer eqq_window" style="padding: 10px; height: 542px; z-index: 13;">
<div id="window_inner_2" class="window_inner" style="z-index: 21;">
	<div id="window_bg_container_2" class="window_bg_container" style="background: url(http://0.web.qstatic.com/webqqpic/pubapps/0/50/images/bg2.png) repeat-x scroll 0% 0% rgb(223, 238, 246);"> </div>
	<div class="window_content">
		<div id="window_titleBar_2" class="window_titleBar">
			<div id="window_titleButtonBar_2" class="window_titleButtonBar">
			<a id="ui_button_6" class="ui_button window_action_button window_close" title="关闭" hidefocus="" href="###" style="display: block;"></a>
			<a id="ui_button_7" class="ui_button window_action_button window_min" title="最小化" hidefocus="" href="###" style="display: block;"></a>
			</div>
			<div id="window_title_2" class="window_title titleText">QQ</div>
		</div>
	
		<div id="window_body_outer_2" class="window_bodyOuter" style="width: 260px; top: 25px; height: 518px;">
			<div id="EQQ_MyPanel" class="EQQ_myPanel">
				<img id="EQQ_MyAvatar" class="EQQ_myAvatar" src="/skin/images/head.jpg" title="修改资料" uin="625290865">
				<div id="EQQ_myInfo" class="EQQ_myInfo" style="width: 195px;">
					<div id="EQQ_MyState" class="EQQ_myState" title="更改在线状态" style="display: block;">
						<div id="EQQ_MyStateShow" class="EQQ_myStateShow EQQ_offline">状态</div>
						<div class="EQQ_myStateDown">下</div>
					</div>
					<div id="EQQ_MyNick" class="EQQ_myNick" title="高树之下<625290865>" style="width: 165px;">高树之下</div>
				</div>
				<div id="EQQ_myService" class="EQQ_myService" style="width: 195px;">
					<div id="EQQ_mySignature_wraper" class="EQQ_mySignature_wraper ">
						<input id="EQQ_MySignature" class="EQQ_mySignature" type="text" title="不是神也不是自然界，只有人本身才能成为统治人的异己力量。"  value="不是神也不是自然界，只有人本身才能成为统治人的异己力量。">
					</div>
				</div>
			</div>
			<div id="eqqMypanelToolbar" class="eqq_mypanel_toolbar"></div>
			<div id="EQQ_MainPanel" class="EQQ_mainPanel" style="display: block;">
				<div id="EQQ_LoginSuccess" _olddisplay="block" style="display: block; height: 100%;">
					<div id="EQQ_SearchBar" class="EQQ_SearchBar">
					<input id="EQQ_SearchBox" class="EQQ_SearchBox" type="text" title="搜索好友..." value="暂未开放" name="">
					<div id="EQQ_SearchButton" class="EQQ_SearchButton" title="搜索...">搜索按钮</div>
					</div>
					
					<ul class="EQQ_tab">
						<li id="EQQ_TabBuddyList" class="EQQ_tabBuddyList current" title="联系人" style="display: block;">
						<a id="EQQ_TabBuddyList_MenuIcon" class="EQQ_tabmenu_icon" href="###"></a>
						<div class="EQQ_tabBuddyList_icon tab_icon"></div>
						</li>
						<li id="EQQ_TabGroupList" class="EQQ_tabGroupList" title="群/讨论组" style="display: block;">
						<a id="EQQ_TabGroupList_MenuIcon" class="EQQ_tabmenu_icon" href="###"></a>
						<div class="EQQ_tabGroupList_icon tab_icon"></div>
						</li>
						<li id="EQQ_TabRecentList" class="EQQ_tabRecentList" title="最近联系人" style="display: block;">
						<a id="EQQ_TabRecentList_MenuIcon" class="EQQ_tabmenu_icon" href="###"></a>
						<div class="EQQ_tabRecentList_icon tab_icon"></div>
						</li>
					</ul>
					<div id="EQQ_ListContainer" style="height: 371px;">
						<div id="EQQ_buddyListPanel" class="EQQ_buddyListPanel EQQ_List_BigHead" style="display: block; height: 346px;">
							<div id="EQQ_buddyList" class="EQQ_buddyList EQQ_buddyList_noneFlash"></div>
							<div id="EQQ_buddyListPanelBottom" class="EQQ_ListBottom">
								<a id="EQQ_findBuddy" class="searchBuddy" target="_blank" href="">
								<div class="searchBuddy_div"></div>
								查找
								</a>
								<a id="EQQ_buddyManage" class="buddy_manage_icon" target="_blank" href="">
								<div class="buddy_manage_icon_div"></div>
								好友管理
								</a>
								<a id="EQQ_messageManage" class="message_manage_icon" target="_blank" href="">
								<div class="message_manage_icon_div"></div>
								消息管理
								</a>
							</div>
						</div>
					</div>
					<div id="EQQ_groupListPanel" class="EQQ_groupListPanel EQQ_List_BigHead" style="display: none;"></div>
					<div id="EQQ_recentListPanel" class="EQQ_recentListPanel EQQ_List_BigHead" style="display: none;"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- main -->

<!-- find friend -->
<div id="appWindow_4" class="window window_current" style="width: 562px; height: 439px; left: 302px; top: 40px; display: block; visibility: visible; z-index: 32;">
	<div class="window_outer eqq_window window_has_controlArea" id="window_outer_4" style="padding: 10px; height: 417px; z-index: 27;">
		<div class="window_inner" id="window_inner_4" style="z-index: 32;">
			<div id="window_bg_container_4" class="window_bg_container">
			</div>						
			<div class="window_content">
				<div class="window_titleBar" id="window_titleBar_4">	
					<div class="window_titleButtonBar" id="window_titleButtonBar_4">
						<a id="ui_button_14" class="ui_button window_action_button window_close" title="关闭" hidefocus="" href="###" style="display: block;"></a>
					</div>
					<div class="window_title titleText" id="window_title_4">查找好友/群</div>
				</div>
				<div class="window_bodyOuter" id="window_body_outer_4" style="width: 540px; top: 25px; height: 362px;">
					<div class="window_toolBar" id="window_toolBar_4"></div>
					<div style="display:none" class="app_toolbar_icon app_toolbar_toggle app_toolbar_toggle_up" id="window_toggleToolbar_4"></div>
					<div class="window_bodyArea" id="window_body_4" style="bottom: 29px; width: 540px; height: 362px;">
						<div class="buddyFinder_container">
							<div class="content_area">
								<div class="buddyFinder_tabHeadArea">
									<div id="tabBuddyHead_2" style="display: block;" class=" current">查找好友</div>
									<div id="tabGroupHead_2" style="display: none;">查找群</div>
								</div>
								<div class="buddyFinder_tabBodyArea finderBody">
									<div id="tabBuddyBody_2" class="buddyFinder" style="display: block;">
										<div class="finder_container">	
											<div id="bf_sBox_2" class="sBox">
												<div class="buddyFinder_endline">查找方式<hr class="line"></div>	
												<div class="sOptionBox">
													<div><input type="radio" checked="checked" class="typeInput" id="bf_sExatInput_2" name="bf_s">精确查找</div>
													<div style="display:none;"><input type="radio" class="typeInput" id="bf_sFuzzyInput_2" name="bf_s">按条件查找</div>
												</div>
												<div id="bf_sExat_2" class="sIpBox">
													<p class="sIpBox_Txt">帐号：</p>
													<input type="text" class="searchInput gray" value="请输入对方数字帐号" id="bf_account_2" onblur="if (value ==''){value='请输入对方数字帐号';}" onfocus="if (value =='请输入对方数字帐号'){value =''}"  onkeydown="num_input(event);">
													<p id="bf_tips_2" class="sIpBox_tips"></p>
													<p class="sIpBox_Txt">昵称：</p>
													<input type="text" class="searchInput gray" value="请输入对方昵称" id="bf_nick_2" onblur="if (value ==''){value='请输入对方昵称';}" onfocus="if (value =='请输入对方昵称'){value =''}">
												</div>
												<div style="display:none;" id="bf_sFuzzy_2" class="sIpBox">
													<dl id="bf_basicList_2" class="bf_basicList">
														<div class="loading">载入中...</div>	
													</dl>
												</div>
											</div>
											<div style="display:none;" id="bf_rBox_2" class="rBox">
												<div class="buddyFinder_endline">查找结果<hr class="line"></div>	
												<div class="resultBox" id="bf_resultBox_2">
													<div class="buddyFinder_simple_info">
														<div class="buddyFinder_simple_info_l">
															<div class="buddyFinder_simple_info_avatar">
																<img src="/skin/images/head.jpg" class="buddyFinder_simple_info_pic">
																<div class="buddyFinder_simple_info_base">
																	<div class="buddyFinder_simple_info_name">
																		<span class="buddyFinder_simple_info_showname">姓名载入中...</span>
																	</div>
																	<div class="buddyFinder_simple_info_uin">id载入中...</div>
																</div>
															</div>
															<div class="buddyFinder_simple_info_r">
																<div id="buddyFinder_simple_detailButton_2" class="buddyFinder_simple_detailButton">详细资料</div>
																<div class="buddyFinder_simple_addBuddyButton">
																	<div class="buddyFinder_simple_addBuddyButton_content" id="buddyFinder_simple_addButton_2">加为好友</div>
																</div>
															</div>
<!--															<div class="buddyFinder_simple_info_default">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别:&nbsp;&nbsp;男</div>-->
<!--															<div class="buddyFinder_simple_info_default">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄:&nbsp;&nbsp;24</div>-->
<!--															<div class="buddyFinder_simple_info_default">来&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;自:&nbsp;&nbsp;中国上海</div>-->
<!--															<div class="buddyFinder_simple_info_default">个人主页:&nbsp;&nbsp;-</div>-->
<!--															<div class="buddyFinder_simple_info_default personRm">-->
<!--																<span class="personRmL">个人说明:</span>-->
<!--																<div class="personRmR"></div>-->
<!--															</div>-->
														</div>
													</div>
												</div>							
											</div>
										</div>
									</div>
									<div style="display:none" id="tabGroupBody_2" class="groupFinder">
										<div class="loading">载入中...</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="window_controlArea" id="window_controlArea_4" _olddisplay="" style="display: block;">
					<a id="ui_button_15" class="ui_button window_button window_cancel" title="" hidefocus="" href="###" style="display: block;">取消</a>
					<a id="ui_button_16" class="ui_button window_button window_next" title="" hidefocus="" href="###" style="display: block;">查找</a>
					<a id="ui_button_10" class="ui_button window_button window_next" title="" hidefocus="" href="###" style="display:none;">上一步</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- find friend -->


<!-- background -->
<div id="zoomWallpaperGrid" class="zoomWallpaperGrid" style="position: absolute; z-index: -10; left: 0pt; top: 0pt;">
	<img id="zoomWallpaper" class="zoomWallpaper" style="position: absolute; top: 0pt; left: 0pt;" src="http://3.web.qstatic.com/webqqpic/style/wallpaper/blue_glow.jpg">
</div>
<!-- background -->

</body>
<script type="text/javascript" src="/skin/js/common.js"></script>
<script type="text/javascript" src="/skin/js/index.js"></script>
</html>
