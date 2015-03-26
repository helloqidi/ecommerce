<?php
require_once 'load.php';
require_once( ABSPATH . 'models' . '/item.php' );

if (is_ajax() && isset($_GET['id'])) {
	$status = delItemById($_GET['id']);
	if($status){
		$list=array("result"=>true);
	}else{
		$list=array("result"=>false);
	}
	echo json_encode($list);
}