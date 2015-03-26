<?php
/**
 * 项目的load文件，用于载入全局变量等共用信息
 */

//定义项目的根目录
define( 'ABSPATH', dirname(__FILE__) . '/' );

//Function to check if the request is an AJAX request
function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
