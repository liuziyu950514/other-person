<?php 
	$admin = $this->session->userdata('admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url();?>">
</head>
<body>
	<h1>欢迎管理员：<?php
		echo $admin->admin_name;
	?></h1>

	<br>

	<a href="admin/add_blog">添加文章</a>	
	<a href="admin/update_blog">修改文章</a>
	<a href="admin/delete_blog">删除文章</a>
</body>
</html>