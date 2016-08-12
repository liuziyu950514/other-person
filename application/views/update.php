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
	<h1>编辑文章</h1>
	<br>
	
	

			<form action="admin/blog_update" method="post" enctype="multipart/form-data" >
			<input type="hidden" name='admin_id' value="<?php echo $admin->admin_id?>">
			<input type="hidden" name='blog_id' value="<?php echo $all->blog_id?>">
			文章标题：<input type="text" name="title" value="<?php echo $all->title ?>">
			<br>
			文章主图：<input type="file" name="img">
			<br>	
			文章描述：
			<textarea name="des" id="details"><?php echo $all->details?><?php echo $all->des?></textarea>		
			<br>
			文章内容：
			<textarea name="details" id="details"><?php echo $all->details?></textarea>


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
			KindEditor.ready(function(K){
			K.create('textarea[name="des"]',{
				allowFileManager:true
			});
		});
			
		});
	</script>
</body>
</html>