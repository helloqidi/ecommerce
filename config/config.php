<?php
/**
 * 一些可配置信息
 */


/**
 * 数据库连接的配置信息
 */
function dbConfig() {
	return array (
			'db_host' => '127.0.0.1',
			'db_name' => 'ecommerce',
			'db_user' => 'root',
			'db_pswd' => '',
			'db_charset' => 'utf8',
			'db_port' => 3306 
	);
}