function getByteLen(val) {
	var len = 0;
	for (var i = 0; i < val.length; i++) {
	if (val[i].match(/[^\x00-\xff]/ig) != null) //全角
	len += 2;
	else
	len += 1;
	}
	return len;
}
$('#nick').focus(function(){
	$(this).parent().addClass('bg_focus');
	$('#nick_info').removeClass().html('请输入昵称！');
}).blur(function(){
	$(this).parent().removeClass('bg_focus');
	var nick = $(this).val().trim();
	if( nick == '' ){
		$('#nick_info').removeClass().addClass('error').html('昵称不能为空！');
	}
	else if( getByteLen(nick) >24 ){
		$('#nick_info').removeClass().addClass('error').html('请输入24个以内的英文字符或12个以内的中文字符！');
	}
	else{
		$('#nick_info').removeClass().addClass('ok').html('');
	}
});
$('#password').focus(function(){
	$(this).parent().addClass('bg_focus');
	$('#password_info').removeClass().html('请输入6-16位密码！');
}).blur(function(){
	$(this).parent().removeClass('bg_focus');
	var password = $(this).val();
	if( password == '' ){
		$('#password_info').removeClass().addClass('error').html('密码不能为空！');
	}
	else if( password.length > 16 || password.length < 6 ){
		$('#password_info').removeClass().addClass('error').html('请输入6-16位密码！');
	}
	else{
		$('#password_info').removeClass().addClass('ok').html('');
	}
});
$('#password_again').focus(function(){
	$(this).parent().addClass('bg_focus');
	$('#password_again_info').removeClass().html('请重新输入密码！');
}).blur(function(){
	$(this).parent().removeClass('bg_focus');
	if( $(this).val() != $('#password').val() ){
		$('#password_again_info').removeClass().addClass('error').html('两次输入的密码不一致！');
	}
	else{
		$('#password_again_info').removeClass().addClass('ok').html('');
	}
});
$('#submit').click(function(){
	var nick = $('#nick').val().trim();
	var password = $('#password').val();
	var password_again = $('#password_again').val();
	if( !nick || getByteLen(nick) >24 ){
		return false;
	}
	if( password.length > 16 || password.length < 6 ){
		return false;
	}
	if( password != password_again ){
		return false;
	}
	$.post('/controller/member.php',{'nick':nick,'password':password,'action':'reg'},function(data){
		if( data == -1 ){
			alert('输入的昵称长度不合法。');
		}
		else if ( data == -2 ){
			alert('输入的密码长度不合法。');
		}
		else if ( data == -3 ){
			alert('服务器忙，请稍后再试。');
		}
		else if ( data == -4 ){
			alert('昵称重复，请更换后重新注册。');
		}
		else {
			alert('注册成功!');
			window.location.href = '/reg/result.html';
		}
	});
});
