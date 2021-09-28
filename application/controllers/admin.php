<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) 
        {
            redirect('admin_login', 'refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['dashboard'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_date_time');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('admin_login');
    }
    
    public function edit_admin($admin_id) 
    {
        $data = array();
        $data['title'] = 'Edit Admin';
        $data['admin_info'] = $this->admin_model->select_admin_by_id($admin_id);
        $data['dashboard'] = $this->load->view('admin/edit_admin', $data, true);
        $sdata = array();
        $sdata['edit_admin'] = 'Update Admin Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_admin() 
    {
        $this->admin_model->update_admin_info();
        redirect('admin');
    }
    
    public function add_news()
    {
        $data = array();
        $data['title'] = 'Add News';
        $data['dashboard'] = $this->load->view('admin/add_news', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_news()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news'] = $this->input->post('news', true);
        $data['news_date'] = $this->input->post('news_date', true);  
        /** IF THEY DO NOT SELECT A IMAGE **/
            $cnt = 0;
            foreach ($_FILES as $eachFile)
            {
                if ($eachFile['size'] > 0)
                {

                    $config['upload_path'] = 'upload_image/news_image_' . $cnt . '/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '10240';
                    $config['max_width'] = '5000';
                    $config['max_height'] = '5000';
                    $error = '';
                    $fdata = array();
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('news_image_' . $cnt))
                    {
                        $error = $this->upload->display_errors();
                        echo $error;
                        exit();
                    } 
                    else 
                    {
                        $fdata = $this->upload->data();
                        $index = 'news_image_' . $cnt;
                        $up['main'] = $config['upload_path'] . $fdata['file_name'];
                    }        
                    /** START IMAGE RESIZE **/
                    $config['image_library'] = 'gd2';
                    $config['new_image'] = 'upload_image/news_image_' . $cnt . '/';
                    $config['source_image'] = $up['main'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = '673';
                    $config['height'] = '449';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    if (!$this->image_lib->resize()) {
                        $error = $this->image_lib->display_errors();
                        echo $error;
                        exit();
                    } else {
                        $index = 'news_image_' . $cnt;
                        $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                        unlink($fdata['full_path']);
                        }
                    /** END IMAGE RESIZE **/
                    }
                    $cnt++;
            }
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_news_info($data);
        $sdata = array();
        $sdata['save_news'] = 'News Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_news');
    }
    
    public function manage_news()
    {
        $data = array();
        $data['title'] = 'Manage News';
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['dashboard'] = $this->load->view('admin/manage_news', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_news($news_id) 
    {
        $data = array();
        $data['title'] = 'Edit News';
        $data['news_info'] = $this->admin_model->select_news_by_id($news_id);
        $data['dashboard'] = $this->load->view('admin/edit_news', $data, true);
        $sdata = array();
        $sdata['edit_news'] = 'Update News Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_news()
    {
        $this->admin_model->update_news_info();
        $sdata = array();
        $sdata['save_news'] = 'News Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_news');
    }

    public function delete_news($news_id) 
    {        
        $this->admin_model->delete_news_by_id($news_id);
        redirect('admin/manage_news');
    }
        
    public function add_slide()
    {
        $data = array();
        $data['title'] = 'Add Slide';
        $data['dashboard'] = $this->load->view('admin/add_slide', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_slide()
    {
        $data=array();
        $data['slide_heading'] = $this->input->post('slide_heading', true);
        $data['slide_subheading'] = $this->input->post('slide_subheading', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slide_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slide_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slide_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slide_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '620';
                $config['height'] = '400';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slide_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_slide_info($data);
        $sdata = array();
        $sdata['save_slide'] = 'Slide Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_slide');
    }
    
    public function manage_slider()
    {
        $data = array();
        $data['title'] = 'Manage Slider';
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['dashboard'] = $this->load->view('admin/manage_slider', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_slide($slide_id) 
    {
        $data = array();
        $data['title'] = 'Edit Slide';
        $data['slide_info'] = $this->admin_model->select_slide_by_id($slide_id);
        $data['dashboard'] = $this->load->view('admin/edit_slide', $data, true);
        $sdata = array();
        $sdata['edit_slide'] = 'Update Slide Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_slide()
    {
        $data=array();
        $data['slide_heading'] = $this->input->post('slide_heading', true);
        $data['slide_subheading'] = $this->input->post('slide_subheading', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slide_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slide_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slide_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slide_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '620';
                $config['height'] = '400';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slide_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->update_slide_info($data);
        $sdata = array();
        $sdata['save_slide'] = 'Slide Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_slider');
    }
    
    public function delete_slide($slide_id) 
    {        
        $this->admin_model->delete_slide_by_id($slide_id);
        redirect('admin/manage_slider');
    }
    
    public function add_circular()
    {
        $data = array();
        $data['title'] = 'Add Circular';
        $data['dashboard'] = $this->load->view('admin/add_circular', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_circular()
    {
        $this->admin_model->save_circular_info();
        $sdata = array();
        $sdata['save_circular'] = 'Circular Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_circular');
    }
    
    public function manage_circular()
    {
        $data = array();
        $data['title'] = 'Manage Circular';
        $data['all_circular'] = $this->admin_model->select_all_circular();
        $data['dashboard'] = $this->load->view('admin/manage_circular', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_circular($job_id) 
    {
        $data = array();
        $data['title'] = 'Edit Circular';
        $data['circular_info'] = $this->admin_model->select_circular_by_id($job_id);
        $data['dashboard'] = $this->load->view('admin/edit_circular', $data, true);
        $sdata = array();
        $sdata['edit_circular'] = 'Update Circular Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_circular()
    {
        $this->admin_model->update_circular_info();
        $sdata = array();
        $sdata['save_circular'] = 'Circular Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_circular');
    }

    public function delete_circular($circular_id) 
    {        
        $this->admin_model->delete_circular_by_id($circular_id);
        redirect('admin/manage_circular');
    }
    
    public function add_portfolio()
    {
        $data = array();
        $data['title'] = 'Add Portfolio';
        $data['dashboard'] = $this->load->view('admin/add_portfolio', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_portfolio()
    {
        $data=array();
        $data['portfolio_name'] = $this->input->post('portfolio_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/portfolio_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('portfolio_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'portfolio_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/portfolio_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'portfolio_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_portfolio_info($data);
        $sdata = array();
        $sdata['save_portfolio'] = 'Portfolio Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_portfolio');
    }
    
    public function manage_portfolio()
    {
        $data = array();
        $data['title'] = 'Manage Portfolio';
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['dashboard'] = $this->load->view('admin/manage_portfolio', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_portfolio($portfolio_id) 
    {
        $data = array();
        $data['title'] = 'Edit Portfolio';
        $data['portfolio_info'] = $this->admin_model->select_portfolio_by_id($portfolio_id);
        $data['dashboard'] = $this->load->view('admin/edit_portfolio', $data, true);
        $sdata = array();
        $sdata['edit_portfolio'] = 'Update Portfolio Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_portfolio()
    {
        $data=array();
        $data['portfolio_name'] = $this->input->post('portfolio_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/portfolio_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('portfolio_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'portfolio_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/portfolio_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'portfolio_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->update_portfolio_info($data);
        $sdata = array();
        $sdata['save_portfolio'] = 'Portfolio Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_portfolio');
    }
    
    public function delete_portfolio($portfolio_id) 
    {        
        $this->admin_model->delete_portfolio_by_id($portfolio_id);
        redirect('admin/manage_portfolio');
    }
    
    public function add_category()
    {
        $data = array();
        $data['title'] = 'Add Category';
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['dashboard'] = $this->load->view('admin/add_category', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_category()
    {
        $data=array();
        $data['portfolio_id'] = $this->input->post('portfolio_id', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/category_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('category_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'category_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/category_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'category_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['category_summery'] = $this->input->post('category_summery', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $this->admin_model->save_category_info($data);
        $sdata = array();
        $sdata['save_category'] = 'Category Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_category');
    }
    
    public function manage_category()
    {
        $data = array();
        $data['title'] = 'Manage Category';
        $data['all_category'] = $this->admin_model->select_all_category();
        $data['dashboard'] = $this->load->view('admin/manage_category', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_category($category_id) 
    {
        $data = array();
        $data['title'] = 'Edit Category';
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['category_info'] = $this->admin_model->select_category_by_id($category_id);
        $data['dashboard'] = $this->load->view('admin/edit_category', $data, true);
        $sdata = array();
        $sdata['edit_category'] = 'Update Category Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_category()
    {
        $data=array();
        $data['portfolio_id'] = $this->input->post('portfolio_id', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/category_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('category_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'category_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/category_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'category_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['category_summery'] = $this->input->post('category_summery', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $this->admin_model->update_category_info($data);
        $sdata = array();
        $sdata['save_category'] = 'Category Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_category');
    }
    
    public function delete_category($category_id) 
    {        
        $this->admin_model->delete_category_by_id($category_id);
        redirect('admin/manage_category');
    }
    
    public function settings()
    {
        $data = array();
        $data['title'] = 'Settings';
        $data['all_service_image'] = $this->admin_model->select_all_service_image();
        $data['all_contact_page_address'] = $this->admin_model->select_all_contact_page_address();
        $data['dashboard'] = $this->load->view('admin/settings', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_contact_page_address()
    {
        $this->admin_model->save_contact_page_address_info();
        $sdata = array();
        $sdata['settings'] = 'Contact Page Address Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/settings');
    }
    
    public function delete_address($address_id) 
    {
        $this->admin_model->delete_address_by_id($address_id);
        redirect('admin/settings');
    }

    public function save_service_image()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/service_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('service_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'service_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/service_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '400';
                $config['height'] = '400';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'service_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_service_info($data);
        $sdata = array();
        $sdata['settings'] = 'Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/settings');
    }
    
    public function delete_service_image($service_id) 
    {        
        $this->admin_model->delete_service_by_id($service_id);
        redirect('admin/settings');
    }
    
    public function about()
    {
        $data = array();
        $data['title'] = 'LabTrio';
        $data['dashboard'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/master', $data);
    }
}