<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>商品管理系统</title>
<style>
ul {
	list-style: none;
}
</style>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$("a.del").on("click", function(){
		var href = $(this).attr("data-href");
		var $parentLi = $(this).parent();
		if(href === null ) return;
		$.get($(this).attr('data-href'),function(jsonData){
			if(jsonData.result == false) return;
			$parentLi.remove();
		},'json');
	});
});
</script>
</head>
<body>
	<div id="header"></div>