<?php
/*
 * Created on 2012-10-01
 * author lichongxi
 */
require '/class/config.php';

class datebase {
	private $use_db; //数据库类型
	private $use_dbver; //数据库版本
	private $db_server; //数据库登陆地址
	private $db_port; //端口，不填为按默认
	private $db_username; //数据库用户名
	private $db_password; //数据库密码
	private $db_dbname; //数据库名
	private $db_char; //设置默认编码
	private $db_dbchar; //数据库默认编码
	function __construct() {
		$this->use_db = 'mysql';
		$this->use_dbver = '5.0';
		$this->db_server = 'localhost';
		$this->db_port = '';
		$this->db_username = 'root';
		$this->db_password = '';
		$this->db_dbname = 'webqq';
		$this->db_char = 'utf8';
		$this->db_dbchar = 'utf8';
	}
	function db_connect() {
		if ($this->db_port) {
			$this->db_server .= ":" . $this->db_port;
		}
		$link = mysql_connect ( $this->db_server, $this->db_username, $this->db_password );
		if (! $link) {
			echo "Cann't connect to DB!";
			exit ();
		}
		//编码
		if ( $this->use_dbver >= '4.1') {
			$q = '';
			if ( $this->db_char) {
				$q = 'character_set_connection=' . $this->db_char . ',character_set_results=' . $this->db_char . ',character_set_client=binary';
			}
			if ( $this->use_dbver >= '5.0') {
				$q .= (empty ( $q ) ? '' : ',') . 'sql_mode=\'\'';
			}
			if ($q) {
				@mysql_query ( 'SET ' . $q );
			}
		}
		mysql_select_db ( $this->db_dbname );
		unset($this->db_server);
		unset($this->db_username);
		unset($this->db_password);
		return $link;
	}
	
	//设置编码
	function DoSetDbChar() {
		if ($this->dbchar && $this->dbchar != 'auto') {
			//@mysql_query("set names '".$dbchar."';");
			@mysql_query ( 'set character_set_connection=' . $this->dbchar . ',character_set_results=' . $this->dbchar . ',character_set_client=binary;' );
		}
	}
	
	function db_close($link) {
		if ($link) {
			@mysql_close ( $link );
		}
	}
	
	//数据库操作封装
	function query( $string ){
		$result = mysql_query($string);
		return $result;
	}
	function fetch( $sql ){
		$result = mysql_fetch_array($sql);
		return $result;
	}
	function fetch1( $string ){
		$sql = mysql_query($string);
		if($sql){
			$result = mysql_fetch_array($sql);
			return $result;
		}
		else{
			return ;
		}
	}
	function insert($sql_array,$table_name){
		$string = "INSERT INTO `$table_name` (`".implode('`,`', array_keys($sql_array) )."`) VALUES ('".implode( "','", array_values( $sql_array ))."')";
		$result = mysql_query($string);
		if( $result )
			return mysql_insert_id();
		else{
			return false;
		}
	}
	function isexit($column,$table_name,$value){
		$sql = $this->fetch1( "SELECT count(*) from `$table_name` where `$column` = '$value'" );
		return $sql[0];
	}
}
