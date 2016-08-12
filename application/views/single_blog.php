<?php 
  $a = $blogs->comments;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <base href="<?php echo site_url();?>">
  <link rel="stylesheet" href="css/Font-Awesome-4.4.0/css/font-awesome.min.css">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/single.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/blog.js"></script>
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
    
    <section id="banner" class="single-banner">
      <div class="container">
        <div class="row">
          <div class="blog-banner-text">
            <div class="col-md-12">
              <h2 class="title"><?php echo $blogs->title;?></h2>
              <ul class="blog-post-meta">
                <li>By <a href="#"><?php echo $blogs->admin_name;?> </a>
                </li>
                <li><?php echo $blogs->add_time;?> </li>
                <li><a href="#"><?php echo count($a)?> Comments</a>
                </li>
                <li><a href="#">UX Design</a>
                </li>


              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


  <section id="all-post">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
        
          <article class="single-post-page">
            <div class="thumb-wrap">
                      <img src=<?php echo $blogs->img;?>>
                    </div>
                    <div class="single-post-content"><?php echo $blogs->details;?></div>
        

      
                    <div class="comment-section">
                      <h2 class="com-title"><?php echo count($a)?> Comments</h2>
                      <div class="comment-list-warpper">
                        <ul class="comment-list">
                        <?php
        foreach($blogs->comments as $comment){
        ?>
                          <li>
                            <div class="card1">
                              <div class="left comment-img">
                            <a href="#"><img src="img/unknown.jpg" alt="">
                            </a>
                          </div>

                          <div class="card-content comment-content">
                            <div class="comment-meta">
                              <p class="author"><a href="#"><?php echo $comment->comm_name;?></a> <span>says:</span>
                              </p>
                              <p class="date"><?php echo $comment->add_time;?></p>
                              <a href="#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                            </div>
                            <div class="comment-text">
                              <p><?php echo $comment->content;?></p>
                            </div>
                          </div>
                            </div>
                          </li>
                          <?php   
        } 
      ?>  
                
                        </ul>
                      </div>
                    </div>
                    <div class="contact-form">
                      <h2 class="com-title">Leave a Reply</h2>
                      <form action="welcome/comment" class="cform-wrapper" method="post">
                      <input type="hidden" name="blog_id" value="<?php echo $this->uri->segment(3);?>">
                    <div class="input-field">
                      <input id="name" type="text" class="validate input-box" name="name">
                      <label for="name" class="input-label">Name*</label>
                    </div>
                    <div class="input-field">
                      <input id="email" type="email" class="validate input-box" name="email">
                      <label for="email" class="input-label">Email*</label>
                    </div>
                    <div class="input-field">
                      <input id="website" type="text" class="validate input-box" name="website">
                      <label for="website" class="input-label">Website</label>
                    </div>
                    <div class="input-field textarea-input">
                      <textarea id="comment" name="comment" class="text input-box" style="height: 22px;"></textarea>
                      <label for="comment" class="input-label">Comment</label>
                    </div>
                    <div class="input-field submit-wrap">
                      <button type="submit" class="submit-btn">SEND MESSAGE</button>

                    </div>
                  </form>
                    </div>
          </article>
          
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </section>




  <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul> 
    </footer>




</body>
</html>