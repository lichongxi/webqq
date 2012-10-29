<?php
/*
 * Created on 2012-10-20
 * author lichongxi
 */

include '/class/member.php';
class friends extends member {
	
/**
 * 查找用户，如有ID，先根据id查找，未查找根据用户名查找。
 * @param unknown_type $friendsID
 * @param unknown_type $friendsName
 */
	public function FindUser( $userID,$userName ){
		$userInfo = array('username','userid');
		$userInfo = '`'.implode('`,`', $userInfo).'`';
		$userID = intval(trim($userID));
		$friendsName = trim($friendsName);
		if ( !get_magic_quotes_gpc() ){
			$friendsName =  mysql_real_escape_string($friendsName);
		}
		if ($userID && $userName){
			$user = $this->fetch1("select $userInfo from `user` where `userid` = $userID");
			if($user['userid']){
				return $user;
			}else{
				$user = $this->fetch1("select $userInfo from `user` where `username` = '$userName'");
				if($user['userid']){
					return $user;
				}else{
					return -1;
				}
			}
		}elseif($userID && !$userName){
			$user = $this->fetch1("select $userInfo from `user` where `userid` = $userID");
			if($user['userid']){
				return $user;
			}else{
					return -1;
			}
		}elseif(!$userID && $userName){
			$user = $this->fetch1("select $userInfo from `user` where `username` = '$userName'");
			if($user['userid']){
				return $user;
			}else{
					return -1;
			}
		}
		

		
	}
	
/**
 * 添加好友申请，目前不需要另一方验证。
 * @param int $userId
 * @param int $friendId
 */
	public function AddFriendApply($userId,$friendId){
		$userId = intval(trim($userId));
		$friendId = intval(trim($friendId));
		if( $userId && $friendId){
			if($userId == $friendId) return -3;
			$sql = $this->fetch1("select count(*) from `user` where userid in ($userId,$friendId)");
			if($sql[0] != 2){
				return $sql[0];
			}
			$sql = $this->fetch1("select count(*) from `friends` where userid = $userId and friend = $friendId ");
			if($sql[0] != 0){
				return -2;
			}
			$friendInsert = array(
			'userid'=>$userId,
			'friend'=>$friendId,
			'group'=>1,
			'creattime'=>time()
			);
			$friendInsert2 = array(
			'userid'=>$friendId,
			'friend'=>$userId,
			'group'=>1,
			'creattime'=>time()
			);
			$sql = $this->insert($friendInsert,'friends');
			$sql = $this->insert($friendInsert2,'friends');
			return 1;
		}
	}
}

