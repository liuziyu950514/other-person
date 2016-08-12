
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
</head>
<body>
	<div class="liuyan">

<ul>
	<?php
				foreach($all as $all){
				?>

			


			
				<li>
				
					缩略图:<img src=<?php echo $all->img;?> style='max-width:100px;'>
					<h3 class="post-author-head">文章名: <?php echo $all->title;?></h3>
					<h3 class="post-author-head">添加时间:<?php echo $all->add_time;?></h3>
					<a href="admin/del/<?php echo $all->blog_id;?>">删除</a>
					
					
					

				</li>
				
			
				




				<?php		
				} 
			?>
			</ul>
			</div>


</body>
</html>