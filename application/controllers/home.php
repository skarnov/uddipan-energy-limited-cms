<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['home'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }
    
    public function about()
    {
        $data = array();
        $data['title'] = 'About';
        $data['home'] = $this->load->view('about_us', $data, true);
        $this->load->view('master', $data);
    }
    
    public function mission()
    {
        $data = array();
        $data['title'] = 'About';
        $data['home'] = $this->load->view('mission', $data, true);
        $this->load->view('master', $data);
    }
    
    public function service()
    {
        $data = array();
        $data['title'] = 'Service';
        $data['home'] = $this->load->view('service', $data, true);
        $this->load->view('master', $data);
    }
    
    public function management()
    {
        $data = array();
        $data['title'] = 'Management';
        $data['home'] = $this->load->view('management', $data, true);
        $this->load->view('master', $data);
    }
    
    public function achievement()
    {
        $data = array();
        $data['title'] = 'Achievement';
        $data['home'] = $this->load->view('achievement', $data, true);
        $this->load->view('master', $data);
    }
    
    public function map()
    {
        $data = array();
        $data['title'] = 'Map';
        $data['home'] = $this->load->view('map', $data, true);
        $this->load->view('master', $data);
    }
    
    public function news()
    {
        $data = array();
        $data['title'] = 'News';
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['home'] = $this->load->view('news', $data, true);
        $this->load->view('master', $data);
    }
    
    public function news_details($news_id)
    {
        $data = array();
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['news_info'] = $this->admin_model->select_news_by_id($news_id);
        $data['title'] = $data['news_info']->news_title;
        $data['home'] = $this->load->view('news_details', $data, true);
        $this->load->view('master', $data);
    }
    
    public function career()
    {
        $data = array();
        $data['all_circular'] = $this->admin_model->select_all_circular();
        $data['title'] = 'Career';
        $data['home'] = $this->load->view('career', $data, true);
        $this->load->view('master', $data);
    }
    
    public function portfolio()
    {
        $data = array();
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['title'] = 'Portfolio';
        $data['home'] = $this->load->view('portfolio', $data, true);
        $this->load->view('master', $data);
    }
    
    public function portfolio_gallery($portfolio_id)
    {
        $data = array();
        $data['portfolio_gallery'] = $this->home_model->select_portfolio_gallery($portfolio_id);        
        $data['title'] = $data['portfolio_gallery']['0']->portfolio_name;
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['home'] = $this->load->view('portfolio_gallery', $data, true);
        $this->load->view('master', $data);
    }
    
    public function portfolio_details($portfolio_id)
    {
        $data = array();
        $data['portfolio_info'] = $this->home_model->select_portfolio_details($portfolio_id);
        $data['title'] = $data['portfolio_info']->portfolio_name;
        $data['all_portfolio'] = $this->admin_model->select_all_portfolio();
        $data['home'] = $this->load->view('portfolio_details', $data, true);
        $this->load->view('master', $data);
    }
    
    public function contact()
    {
        $data = array();
        $data['title'] = 'Contact Us';
        $data['all_contact_page_address'] = $this->admin_model->select_all_contact_page_address();
        $data['home'] = $this->load->view('contact_us', $data, true);
        $this->load->view('master', $data);
    }

    public function it_service()
    {
        $data = array();
        $data['title'] =  'IT Service';
        $data['all_service_image'] = $this->admin_model->select_all_service_image();
        $data['home'] = $this->load->view('it_service', $data, true);
        $this->load->view('master', $data);
    }
}