<?php 
	$admin = $this->session->userdata('admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url();?>">
	<script src="js/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="kind/themes/default/default.css">
	<script src='kind/kindeditor-min.js'></script>
</head>
<body>
	<h1>添加文章</h1>
	<br>
	<form action="admin/blog" method="post" enctype="multipart/form-data" >
	<input type="hidden" value="<?php echo $admin->admin_id?>" name='admin_id'>
		文章标题：<input type="text" name="title">
		<br>
		文章主图：<input type="file" name="img">
		<br>	
		文章描述：<input type="text" name="des">		
		<br>
		<!-- 文章内容：<input type="text" name="details"> -->
		<textarea name="details" id="details"></textarea>
		<br>
		<input type="submit">
	</form>	


	<script>
		$(function(){
			KindEditor.ready(function(K){
			K.create('textarea[name="details"]',{
				allowFileManager:true
			});
		});
			
		});
	</script>
</body>
</html>

