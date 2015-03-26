<?php include_once 'header.php'; ?>
<div id="content">


	<div>
		<h3>添加商品</h3>
		<form action="addItem.php" method="post">
			<p>
				标题：<br /> <input type="text" name="title" />
			</p>
			<p>
				描述：<br />
				<textarea name="description" rows="10" cols="50"></textarea>
			</p>
			<p>
				价格：<br />
				<input type="text" name="price" />
			</p>
			<p>
				库存：<br />
				<input type="text" name="quantity" />
			</p>
			<p>
				<input type="submit" value="保存" />
			</p>
		</form>
	</div>


</div>
<?php include_once 'footer.php'; ?>