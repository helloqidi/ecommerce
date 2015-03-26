<?php
require_once('load.php' );
require_once( ABSPATH . 'models' . '/item.php' );

//获得所有商品
$items = getAllItems();

// 显示视图文件
include_once 'views/home.php';