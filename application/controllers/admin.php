<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function check_login(){
        $admin_name = $this -> input -> post('admin_name');
        $password = $this -> input -> post('password');
        $this -> load -> model('admin_model');
       	$row = $this -> admin_model -> get_by_name_pwd($admin_name,$password);
        if($row){
			$this->session->set_userdata('admin',$row);
			$this->load->view('admin_mgr');

        }else{
        	echo"<script>alert('用户名或密码错误，请重新输入')</script>";
            $this->load->view('login');
        }
		
    }
    public function get_blog(){
        $this->load->model('admin_model');
        $blogs = $this->admin_model->get_all_blog();
        echo json_encode($blogs);
    }
    
    public function add_blog(){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$this->load->view('add_blog');
    }
    public function gl(){
        $admin = $this->session->userdata('admin');
        if(!$admin){
            redirect('welcome/login');
        }
        $this->load->view('admin_mgr');
    }
     public function blog(){
		$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$title = $this->input->post('title');
		$des = $this->input->post('des');
		$details = $this->input->post('details');
		$admin_id = $this->input->post('admin_id');


		$config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 4096;
        $config['file_name']=date('YmdHis').'_'.rand(10000,99999);

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_data = $this->upload->data();
        if ( $upload_data['file_size'] > 0 )
       
        {
        	$img_url = 'uploads/'.$upload_data['file_name'];
             
        }
        $this->load->model('admin_model');
        $row = $this->admin_model->save($title,$des,$details,$admin_id,$img_url); 
    }

    public function delete_blog(){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$this->load->model('admin_model');
    	$all = $this->admin_model->get_all_blog();
    	$this->load->view('delete_blog',array('all' => $all));
    }

    public function del($blog_id){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$this->load->model('admin_model');
		$this->admin_model->del($blog_id);
		redirect('admin/delete_blog');
    }

    public function update_blog(){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$this->load->model('admin_model');
    	$all = $this->admin_model->get_all_blog();
    	$this->load->view('update_blog',array('all' => $all));
    }

    public function update($blog_id){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$this->load->model('admin_model');
    	$all = $this->admin_model->get_blog_by_id($blog_id);
        
    	$this->load->view('update',array('all' => $all));
    }

    public function blog_update(){
    	$admin = $this->session->userdata('admin');
		if(!$admin){
			redirect('welcome/login');
		}
    	$blog_id = $this->input->post('blog_id');
    	$title = $this->input->post('title');
		$des = $this->input->post('des');
		$details = $this->input->post('details');
		$admin_id = $this->input->post('admin_id');
        $time =date('YmdHis');
		$config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 4096;
        $config['file_name']=date('YmdHis').'_'.rand(10000,99999);

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_data = $this->upload->data();
        if ( $upload_data['file_size'] > 0 )
       
        {
        	$img_url = 'uploads/'.$upload_data['file_name'];    
        }
        $this->load->model('admin_model');
            $row = $this->admin_model->blog_update($blog_id,$title,$des,$details,$admin_id,$img_url,$time);  
            if($row){
                redirect('admin/update_blog');
            }
    }









	
}