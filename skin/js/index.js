function num_input(event){
	var a =event.keyCode;
	if(!((a>=48 && a<=57) || (a>=96 && a<=105) || (a>=37 && a<=40) || a==8 || a==9 )){event.preventDefault?event.preventDefault():event.returnValue=false;}
}

function get_friend(){
	
}
$('#zoomWallpaper').height(window.screen.height).width(window.screen.width);

$('#alloy_icon_app_50_3_img').click(function(){
	$('.ui_boxy').show();

});
$('#ui_boxyClose_1349162263463').click(function(){
	$('.ui_boxy').hide();
});

/**** reg ****/
$('#login_button').click(function(){
	var userid = $('#u').val();
	var password = $('#p').val();
	if( userid == '数字账户' || !userid || !password) {
		alert('请输入账户或密码！');
		return ;
	}
	$.post('/controller/member.php',{'action':'login','userid':userid,'password':password,'login_type':'id'},function(data){
		alert(data);
		if(data == '登录成功！'){
			$('.ui_boxy').hide();
			$('#appWindow_2').show();
			$('#alloy_icon_app_50_3_img').unbind().click(function(){
				$('#appWindow_2').show();
			});;
			GetMyInfo(userid);
			GetFriends(userid);
		}
	});
});

$("#ui_button_10").click(function(){
	$(this).hide();
	$('#ui_button_16').show();
	$('#bf_sBox_2').show();
	$('#bf_rBox_2').hide();
});
/**** find friends ****/
$('#ui_button_16').click(function(){
	var userId = $('#bf_account_2').val();
	var userName = $('#bf_nick_2').val();
	if( userId == '请输入对方数字帐号') userId = '';
	if( userName == '请输入对方昵称') userName = '';
	if( !userId && !userName ){
		$('#bf_account_2').focus().val('');
	}else{
		$.post('/controller/friends.php',{'userId':userId,'userName':userName,'action':'findUser'},function(data){
			if(data == -99){
				alert('请先登录！');
			}else if(data == -1 || !data ){
				$('#bf_tips_2').show().html('您查找的用户不存在');
			}else{
				$('#bf_sBox_2').hide();
				$('#buddyFinder_simple_detailButton_2').hide();
				$('.buddyFinder_simple_info_showname').html(data["username"]);
				$('.buddyFinder_simple_info_uin').html("&nbsp;&nbsp;("+data["userid"]+")");
				$('#bf_rBox_2').show();
				$('#buddyFinder_simple_addButton_2').attr('date-addid',data["userid"]);
				$('#ui_button_16').hide();
				$('#ui_button_10').show();
			}
		},"json");
	}
});

$('#ui_button_15,#ui_button_14').click(function(){
	$("#appWindow_4").hide();
})
/**** add friends ****/
$('#buddyFinder_simple_addButton_2').click(function(){
	var friendId = $(this).attr('date-addid');
	$.post('/controller/friends.php',{"friendId":friendId,"action":"addFriend"},function(data){
		if(data == -3){
			alert('不能添加自己为好友');
		}else if(data == -2){
			alert('该用户已经成为好友，请勿重复添加。');
		}else if(data == -1){
			alert('数据来源不合法！');
		}else if(data == 1){
			alert('添加好友成功！');
		}else if(data == -99){
			alert('请先登录！');
		}
	});
});


function GetMyInfo(userId){
	$.post("/controller/member.php",{"userId":userId,"action":"getMyInfo"},function(data){
		console.log(data);
		$("#EQQ_MyNick").html(data["username"]).attr("title",data["userid"]);
	},"json")
}

function GetFriends(userId){
	$.post("/controller/friends.php",{"userId":userId,"action":"getFriends"},function(data){
		console.log(data[0]["friend"]);

	},"json")
}
GetFriends(1008);