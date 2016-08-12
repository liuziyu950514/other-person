<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function blog(){
		$this -> load -> model('admin_model');
		$blog = $this->admin_model->get_all_blog();
		// var_dump($blog);
	}

	public function jj(){
		$this->load->view('index');
	}

	// public function blogs{
	// 	$this ->load-> model('admin_model');
	// 	$blogs = $this->admin_model->get_all_blog();
	// 	$this->load->view('blog',array('blogs' => $blogs));
	// }
	public function blogs(){
		$this->load->model('admin_model');
		$offset = $this->uri->segment(3);
		if($offset==''){
			$offset=0;
		}
		$this->load->library('pagination');

		$config['base_url'] = 'welcome/blogs';
		$config['total_rows'] = $this->admin_model->get_blog_count();
		$config['per_page'] = 3;

		$this->pagination->initialize($config);
		
		$blogs = $this->admin_model->get_admin_by_page($config['per_page'],$offset);

		
		$this->load->view('blog',array('blogs'=>$blogs));
	}

	public function single($blog_id){
		
		$this -> load -> model('admin_model');
		$blogs = $this->admin_model->get_blog_by_id($blog_id);
		if($blogs){
		  	$blogs->comments = $this->admin_model->get_by_blog_id($blog_id);

		  	$this->load->view('single_blog',array('blogs'=>$blogs));
		  
	}
}

	public function comment(){
		$blog_id = $this -> input -> post('blog_id');
		$name = $this -> input -> post('name');
		$email = $this -> input -> post('email');
		$website = $this -> input -> post('website');
		$comment = $this -> input -> post('comment');
		$this -> load -> model('admin_model');
		$this->admin_model->sav($blog_id,$name,$email,$website,$comment);
		redirect('welcome/single/'.$blog_id);
	}



	
	public function contact(){
			$name= $this->input->post('name');
			$email=$this->input->post('email');
			$subject=$this->input->post('subject');
			$message=$this->input->post('messages');
			if ($name==''||$email==''||$subject==''||$message=='') {
				echo 'fail';
			}else{
				$this->load->model('admin_model');
				 $this->admin_model->save_contact($name,$email,$subject,$message);	
					echo "success";
			}
		}



}
