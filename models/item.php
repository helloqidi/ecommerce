<?php
require_once( ABSPATH . 'models' . '/db.php' );

/**
 *新建商品 
 */
function addItem($title, $description, $price, $quantity) {
	try {
		// 连接数据库
		$dbh = initDbConnect();
		// 构造SQL语句
		$sql = "insert into `items` (`title`, `description`, `price`, `quantity`) values (?, ?, ?, ?)";
		//这里使用了预处理的方式，而不是直接执行sql语句。可防止sql注入。
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(1, $title, PDO::PARAM_STR);	//第3个参数是数据类型可不用写，会自动找类型
		$stmt->bindParam(2, $description, PDO::PARAM_STR);
		$stmt->bindParam(3, $price, PDO::PARAM_INT);
		$stmt->bindParam(4, $quantity, PDO::PARAM_INT);
		return $stmt->execute();
// 		if ($stmt->execute()){
// 			return $dbh->lastinsertid();
// 		}else{
// 			return FALSE;
// 		}
	} catch (PDOException $e) {
		die("数据库操作异常：" . $e->getMessage());
	}

}



/**
 * 获取所有商品
 */
function getAllItems(){
	try {
		$dbh = initDbConnect();
		$sql = "select id, title, price, quantity from items";
		$stmt = $dbh->query($sql);
		return $stmt;
	} catch (PDOException $e) {
		die("数据库操作异常：" . $e->getMessage());
	}

}

/**
 * 根据id删除商品
 */
function delItemById($id){
	try {
		$dbh = initDbConnect();
		$sql = "delete from items where id = ?";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(1, $id);
		return $stmt->execute();
	} catch (PDOException $e) {
		die("数据库操作异常：" . $e->getMessage());
	}
}


