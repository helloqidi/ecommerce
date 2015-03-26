<?php
require_once 'load.php';
require_once( ABSPATH . 'models' . '/item.php' );

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    // 添加留言到数据库中
    $status = addItem($title, $description, $price, $quantity);
    if ($status){
    	$responseMsg = "添加成功！";
    }else{
    	$responseMsg = "添加失败！";
    }
    include_once 'views/after_add.php';
}else{
	// 显示视图文件
	include_once 'views/add_item.php';
}

