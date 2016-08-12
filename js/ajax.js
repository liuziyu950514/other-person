  $(function(){
$.get('admin/get_blog',function(res){
  for(var i=0;i<3;i++){
      var blog = res[i];
      
      var html = '<article class="col-sm-6 col-md-4 single-card-box single-post  animate-'+(i+1)+'">'
                    +'<div class="card">'
                      +'<div class="card-image">'
                        +'<div class="card-img-wrap">'
                          +'<div class="blog-post-thumb waves-effect waves-block waves-light">'
                            +'<a href="single.html">'
                            +'<img class="activator" src="'+blog.img+'" alt="">'
                            +'</a>'
                          +'</div>'
                          +'<div class="post-body">'
                            +'<a href="single.html" class="post-title-link brand-text">'
                            +'<h2 class="post-title">'+blog.title+'</h2>'+'</a>'
                            +'<p class="post-content">'+blog.des+'</p>'
                          +'</div>'
                        +'</div>'
                      +'</div>'
                      +'<div class="clearfix card-content">'
                     
                        +'<a href="welcome/single/'+blog.blog_id+'" class="brand-text right waves-effect">'+'Read More'+'</a>'
                      +'</div>'
                    +'</div>'
                  +'</article>'
      $('#blog-posts').append(html);
    };
},'json');


      $('.submit-btn').on('click',function(){
        var $name = $('[name=name]');
        var $email = $('[name=email]');
        var $subject = $('[name=subject]');
        var $messages = $('[name=messages]');
    $.post('welcome/contact',
      {name:$name.val(),email:$email.val(),subject:$subject.val(),messages:$messages.val()},
      function(data){
        if (data=='fail') {
          alert('需要全部填写');
        }else if(data=='success'){
          alert('提交成功')
        }
      });
  });

     
		
                  
                  
	})











