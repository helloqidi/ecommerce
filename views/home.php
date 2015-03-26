<?php include_once 'header.php'; ?>
<div id="content">

	<div>
		<a href="addItem.php" target="_blank">创建商品</a>
	</div>

	<ul>
<?php
foreach ( $items as $row ) {
	echo <<<STR
	        <li>
	            {$row['id']} {$row['title']} <a class="del" href="#" data-href="delItem.php?id={$row['id']}" >删除</a>
	        </li>
STR;
}
?>
</ul>



</div>
<?php include_once 'footer.php'; ?>