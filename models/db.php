<?php
/**
 * 用于操作数据库连接
 */

require_once( ABSPATH . 'config' . '/config.php' );
$dbConfig = dbConfig();

/**
 * 初始化数据库连接
 * 注：已打开的非持久连接会在脚本执行完毕后自动关闭
 */
function initDbConnect(){
	global $dbConfig;
	try {
		$dbh = new PDO("mysql:host={$dbConfig['db_host']};dbname={$dbConfig['db_name']}", $dbConfig['db_user'], $dbConfig['db_pswd']);
		//pdo推荐使用模式 ----异常模式
		$dbh->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);	
		//防止乱码
		$dbh->exec('set names utf8');
		return $dbh;
	} catch (PDOException $e) {
		die('数据库连接失败：' . $e->getMessage());
	}
}
