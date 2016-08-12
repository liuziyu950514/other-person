<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_by_name_pwd($admin_name, $password){
        $data = array(
            'admin_name' => $admin_name,
            'admin_pwd' => $password
       );
       return $this -> db -> get_where('t_admin', $data) -> row();
    }

    public function save($title,$des,$details,$admin_id,$img_url){
       $this -> db -> insert('t_blog', array(
          'title' => $title,
            'des' => $des,
            'details' => $details,
            'img' => $img_url,
            'author' => $admin_id
        ));
       return $this -> db ->affected_rows();
    }

    public function get_all_blog(){
      return $this->db->get_where('t_blog')->result();
    }

    public function del($blog_id){
      $this->db->delete('t_blog', array('blog_id' => $blog_id));
    }

    public function get_blog_by_id($blog_id){
      // return $this->db->get_where('t_blog',array('blog_id'=>$blog_id))->result();



    $this->db->select('*');
    $this->db->from('t_blog blog');
    $this->db->join('t_admin admin','blog.author=admin.admin_id');
    $this->db->where('blog.blog_id',$blog_id);
    return $this->db->get()->row();
    }
    public function blog_update($blog_id,$title,$des,$details,$admin_id,$img_url,$time){
       // $this -> db -> update('t_blog', array(
       //    'title' => $title,
       //      'des' => $des,
       //      'details' => $details,
       //      'img' => $img_url,
       //      'author' => $admin_id
       //  ));
       // return $this -> db ->affected_rows();


      $data = array(
        'title' => $title,
            'des' => $des,
            'details' => $details,
            'img' => $img_url,
            'author' => $admin_id,
            'add_time' => $time
);
      $this->db->where('blog_id', $blog_id);
      $this->db->update('t_blog', $data);
      return $this -> db ->affected_rows();
    }


  public function get_by_page(){
    $this->db->select('*');
    $this->db->from('t_blog blog');
    $this->db->join('t_admin admin','blog.author=admin.admin_id');
  
    return $this->db->get()->result();
  }



  public function sav($blog_id,$name,$email,$website,$comment){
     $this->db->insert('t_comment',array(
      'blog_id'=>$blog_id,
      'comm_name'=>$name,
      'content'=>$comment,
      'email'=>$email,
      'website'=>$website,

      ));
  }

  public function get_by_blog_id($blog_id){
     $this->db->order_by('add_time','desc');
    return $this->db->get_where('t_comment',array('blog_id'=>$blog_id))->result();
  }

  public function get_blog_count(){
    return $this->db->count_all('t_blog');
  }

  public function get_admin_by_page($limit,$offset){
    $this->db->select('*');
    $this->db->from('t_blog blog');
    $this->db->join('t_admin admin','blog.author=admin.admin_id');

    $this->db->limit($limit,$offset);
    return $this->db->get()->result();
  }

  public function get_comment_count($blog_id){
    return $this->db->get_where('t_comment', array('blog_id' => $blog_id))->result();
  }

  public function save_contact($name,$email,$subject,$message){
    $data = array(
      'un'=>$name,
      'uemail'=>$email,
      'usubject'=>$subject,
      'umessage'=>$message
    );
    $result = $this->db->insert('t_contact', $data);
    return $result;
  }

			


}