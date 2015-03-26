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
				价格：<br /> <input type="text" name="price" />
			</p>
			<p>
				库存：<br /> <input type="text" name="quantity" />
			</p>
			<p>
				<input type="submit" value="保存" />
			</p>
		</form>

		<div class="demo">
			<p>说明：示例中只允许上传gif/jpg格式的图片，图片大小不能超过500k。</p>
			<div class="btn">
				<span>添加附件</span> <input id="fileupload" type="file" name="mypic">
			</div>
			<div class="progress">
				<span class="bar"></span><span class="percent">0%</span>
			</div>
			<div class="files"></div>
			<div id="showimg"></div>
		</div>
		
	</div>


</div>
<?php include_once 'footer.php'; ?>