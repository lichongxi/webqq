<?php
/*
 * Created on 2012-10-02
 * author lichongxi
 */
session_start();
require '/class/member.php';
$web = new member();
$link = $web->db_connect();
if( $_POST['action'] == 'reg'){
	$result = $web->reg($_POST['nick'], $_POST['password']);
	if( $result > 0 ){
		setcookie('qq_num',$result,0,'/');
	}
	echo $result;
}
elseif ( $_POST['action'] == 'login'){
	$result = $web->login( $_POST['userid'], $_POST['password'], $_POST['login_type']);
	if( $result == -1){
		echo '无此用户！';
	}elseif($result == -2){
		echo '密码输入不正确！';
	}elseif($result[0]){
		echo '登录成功！';
		$_SESSION['islogin'] = $result[1];
		$_SESSION['userid'] = $result[0];
		setcookie('loginid',$result[0],0,'/');
//		setcookie('islogin',$result[1],0,'/');
	}
}elseif ( $_POST['action'] == 'getMyInfo'){
	$result = $web->IsLogin($_SESSION['userid'], $_SESSION['islogin']);
	if(!$result) exit('-99');
	$result = $web->GetMyInfo($_POST['userId']);
	echo json_encode($result);
}
$web->db_close($link);
