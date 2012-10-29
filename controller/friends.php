<?php
/*
 * Created on 2012-10-27
 * author lichongxi
 */
session_start();
if(!$_SESSION['islogin']){
	exit('-99');			//未登录错误信息统一为-99
}
require '/class/friends.php';
$web = new friends();
$link = $web->db_connect();
if( $_POST['action'] == 'findUser'){
	$result = $web->FindUser($_POST['userId'], $_POST['userName']);
	$result = json_encode($result);
	echo $result;
}
elseif ( $_POST['action'] == 'addFriend'){
	$result = $web->IsLogin($_SESSION['userid'], $_SESSION['islogin']);
	if(!$result) exit('-99');
	$result = $web->AddFriendApply( $_SESSION['userid'], $_POST['friendId']);
	echo $result;
}elseif ( $_POST['action'] == 'getFriends'){
	$result = $web->GetFriends($_POST['userId']);
	echo json_encode($result);
}
$web->db_close($link);
