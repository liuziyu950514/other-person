<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/Font-Awesome-4.4.0/css/font-awesome.min.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/blog.css">
    <script src="js/jquery-1.11.3.min.js"></script>
<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
	<div class="page-warper">
		<header class="main-header" id="main-header">
		<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">
						<div class="pull-left logo-outer">
							<div class="logo">
								<a href="welcome/jj">
									<img src="img/logo.jpg" alt="" title="Exclaire">
								</a>
							</div>
						</div>
						<div class="pull-right upper-right clearfix">
							<ul class="right-nav clearfix">
                        	<li>
                        	<strong>E-mail:</strong> info@exlaire-life-coach.com
                        	</li>
                            <li>
                            <strong>Phone:</strong> +49 123 456 789
                            </li>
                            <li>                   
                            	<span class="flag">
                            	<img src="img/us-flag.png" alt="">
                            	</span>  China
                            </li>          
						</ul></div>
					</div>
				</div>	
			</div>
			
        </div>
		</header>





		<div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb"><a href="index.html">Home</a> | <a href="#" class="current">Blog Single</a></div>
        </div>
    </div>

	<div class="sidebar-page">
		<div class="auto-container">
			<div class="row">
				<div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<section class="blog-news-section">





					<?php
				foreach($blogs as $blogs){
				?>

						<article class="inner-box">
							<figure class="image-box">
								<a href="welcome/single/<?php echo $blogs->blog_id;?>">
									<img src=<?php echo $blogs->img;?>  alt="">
								</a>
							</figure>
							<div class="content-box">
                                    <h3><a href="welcome/single/<?php echo $blogs->blog_id;?>">Stet clita ea et gubergren, kasd magna</a></h3>
                                    <ul class="post-info clearfix">
                                        <li>By <?php echo $blogs->admin_name;?> </li>
                                        <li>On <?php echo $blogs->add_time;?> </li>
                                       
                                        
                                    </ul>
                                    <div class="article-text"><?php echo $blogs->des;?> </div>
                                    <a href="welcome/single/<?php echo $blogs->blog_id;?>" class="theme-btn read-more">READ MORE</a>
                                </div>
						</article>


						<?php		
				} 
			?>

					</section>
					<div>
						<ul class="li-style">
							<?php echo $this->pagination->create_links();?>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
			</div>
		</div>
	</div>






	</div>












</body>
</html>