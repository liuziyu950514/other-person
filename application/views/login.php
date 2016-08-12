<?php 
	$admin = $this->session->userdata('admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登陆界面</title>
	<base href="<?php echo site_url(); ?>">
</head>
<style>
	body{
	/*background:#89d7ff;*/
	text-align: center;
	margin: 30px;
	}
	h1{
		color: black;
		font-family: "Lucida Sans Unicode";
		font-weight: 200;
	}
	#content{
		margin:30px auto;
		border: 1px solid black;
		border-radius: 5px;
		background: gray;
		width: 60%;
		height: 400px;
		padding-top: 50px;
		color: white;
		margin-bottom:10px;
	}
	.text{
		margin-bottom: 20px;
		width: 200px;
		height: 20px;
		border-radius: 3.5px;
	}
	.btn{
		height:auto;
		width: 80px;
	}
	h1{
		color: white;
	}
	#footer{
		color: gray;
	}
</style>
<body>
	<div id="content">
		<h1>管理员登陆界面</h1>
		<form action="admin/check_login" method="post">
		账号&nbsp;<input type="text" name="admin_name" class="text"placeholder="请输入账户名" ><br>密码&nbsp;
		<input type="password" name="password" class="text"placeholder="请输入密码" ><br>
		<input type="submit" name="submit" class="btn" value="登录">
		</form>
	</div>
	<div id="footer" >
		<p>如果忘记密码 请参见使用手册</p>
		<p>版权所有 Copyright(C)2016</p>
	</div>
</body>
</html>