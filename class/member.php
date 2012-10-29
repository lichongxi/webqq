<?php
/*
 * Created on 2012-10-01
 * author lichongxi
 */

include '/class/database.php';
class member extends datebase {
/**
 * 登录函数，目前仅支持数字ID登录。
 * @param 登录关键字 $key
 * @param string $password
 * @param 登录类型 $type
 */	
	public function login( $key,$password,$type ){
		$key = trim($key);
		$password = trim($password);
		if ( !get_magic_quotes_gpc() ){
			$key =  mysql_real_escape_string($key);
		}
		if( $type == 'email' ){
			
		}
		elseif( $type == 'id' ){
			$sql = $this->fetch1("select * from user where userid = $key");
			if( empty($sql) ){
				return -1;	//无此用户！
			}else if( $sql['password'] != sha1($password)){
				return -2;	//密码输入不正确！
			}else{			//登录成功
				 $_SESSION['group'] = $sql['group'];
				 $islogin = sha1( $key.time().rand(0, 1000).sha1($password));
				 $sql_update = $this->query("update `user` set `islogin` = '$islogin' where `userid` = $key");
				 $result[0] = $key;
				 $result[1] = $islogin;
				 return $result;
			}
		}
		
	}

/**
 * 注册函数，自动生成数字ID，目前用户名唯一
 * @param 用户名 $username
 * @param 密码 $password
 */
	public function reg($username,$password){
		if( !get_magic_quotes_gpc() ){
			$username = mysql_real_escape_string($username);
		}
		if( ( strlen($username) - (strlen($username) - mb_strlen($username,'utf8'))/2 ) > 24 ){
			return -1;
		}
		if( strlen($password) >16 || strlen($password) < 6 ){
			return -2;
		}
		if($this->isexit('username', 'user', '$username')) return -4;
		$sql_array['username'] = $username;
		$sql_array['password'] = sha1($password);
		$sql_array['group'] = 1;
		$sql_array['creattime'] = time();
		$sql = $this->insert($sql_array, 'user');
		if( $sql ){
			return $sql;
		}else{
			return -3;
		}
	}
	
/**
 * 根据登录时生成的sha1字符串判断是否登录
 * @param int $userid
 * @param sha1字符串 $shaislogin
 */
	public function IsLogin($userid,$islogin){
		$userid = intval(trim($userid));
		$sql = $this->fetch1("select * from `user` where userid = $userid");
		if( $islogin == $sql['islogin'] ){
			return true;
		}else{
			return false;
		}
	}

/**
 * 获得用户自身信息
 * @param unknown_type $userId
 */
	public function GetMyInfo($userId){
		$userId = intval(trim($userId));
		$userInfo = array('username','userid');
		$userInfo = '`'.implode('`,`', $userInfo).'`';
		$sql = $this->fetch1("select $userInfo from `user` where userid = $userId");
		return $sql;
	}
}

