<?php

class Admin_Model extends CI_Model {
    
    public function select_admin_by_id($admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_admin_info()
    {
        $data=array();
        $data['admin_name'] = $this->input->post('admin_name', true);
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $data['admin_level'] = $this->input->post('admin_level', true);
        $data['admin_status'] = $this->input->post('admin_status', true);
        $admin_id=$this->input->post('admin_id',true);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }
    
    public function save_news_info($data)
    {
        $this->db->insert('tbl_news',$data);
    }
    
    public function select_all_news()
    {
        $sql = "SELECT * FROM tbl_news";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_news_by_id($news_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_news_info()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news'] = $this->input->post('news', true);
        $data['news_date'] = $this->input->post('news_date', true); 
        $news_id = $this->input->post('news_id', true);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news',$data);
    }
    
    public function delete_news_by_id($news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');
    }

    public function save_slide_info($data)
    {
        $this->db->insert('tbl_slide',$data);
    }
    
    public function select_all_slide()
    {
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_slide_by_id($slide_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->where('slide_id',$slide_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_slide_info($data)
    {
        $slide_id=$this->input->post('slide_id',true);
        $this->db->where('slide_id',$slide_id);
        $this->db->update('tbl_slide',$data);
    }
    
    public function delete_slide_by_id($slide_id)
    {
        $this->db->where('slide_id',$slide_id);
        $this->db->delete('tbl_slide');
    }
    
    public function save_circular_info()
    {
        $data=array();
        $data['job_title'] = $this->input->post('job_title', true);
        $data['job_program'] = $this->input->post('job_program', true);
        $data['job_location'] = $this->input->post('job_location', true);
        $data['job_description'] = $this->input->post('job_description', true);
        $data['job_salary'] = $this->input->post('job_salary', true);
        $data['dead_line'] = $this->input->post('dead_line', true);
        $this->db->insert('tbl_job',$data);
    }
    
    public function select_all_circular()
    {
        $this->db->select('*');
        $this->db->from('tbl_job');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_circular_by_id($job_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->where('job_id',$job_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_circular_info()
    {
        $data=array();
        $data['job_title'] = $this->input->post('job_title', true);
        $data['job_program'] = $this->input->post('job_program', true);
        $data['job_location'] = $this->input->post('job_location', true);
        $data['job_description'] = $this->input->post('job_description', true);
        $data['job_salary'] = $this->input->post('job_salary', true);
        $data['dead_line'] = $this->input->post('dead_line', true);
        $job_id=$this->input->post('job_id',true);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job',$data);
    }
    
    public function delete_circular_by_id($job_id)
    {
        $this->db->where('job_id',$job_id);
        $this->db->delete('tbl_job');
    }
    
    public function save_portfolio_info($data)
    {
        $this->db->insert('tbl_portfolio',$data);
    }
    
    public function select_all_portfolio()
    {
        $this->db->select('*');
        $this->db->from('tbl_portfolio');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_portfolio_by_id($portfolio_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_portfolio');
        $this->db->where('portfolio_id',$portfolio_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_portfolio_info($data)
    {
        $portfolio_id=$this->input->post('portfolio_id',true);
        $this->db->where('portfolio_id',$portfolio_id);
        $this->db->update('tbl_portfolio',$data);
    }
    
    public function delete_portfolio_by_id($portfolio_id)
    {
        $this->db->where('portfolio_id',$portfolio_id);
        $this->db->delete('tbl_portfolio');
    }
    
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_all_category()
    {
        $sql = "SELECT * FROM tbl_category AS c, tbl_portfolio AS p WHERE c.portfolio_id=p.portfolio_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_category_by_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_category_info($data)
    {
        $category_id=$this->input->post('category_id',true);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }
    
    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
 
    public function select_all_contact_page_address()
    {
        $this->db->select('*');
        $this->db->from('tbl_address');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_service_image()
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function save_contact_page_address_info()
    {
        $data=array();
        $data['address_title'] = $this->input->post('address_title', true);
        $data['name'] = $this->input->post('name', true);
        $data['address'] = $this->input->post('address', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['email'] = $this->input->post('email', true);
        $data['website'] = $this->input->post('website', true);
        $this->db->insert('tbl_address',$data);
    }
    
    public function delete_address_by_id($address_id)
    {
        $this->db->where('address_id',$address_id);
        $this->db->delete('tbl_address');
    }
    
    public function save_service_info($data)
    {
        $this->db->insert('tbl_service',$data);
    }
    
    public function delete_service_by_id($service_id)
    {
        $this->db->where('service_id',$service_id);
        $this->db->delete('tbl_service');
    }
}